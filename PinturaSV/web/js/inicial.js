function MapsIniciar() {
    // Opciones
    var opcionesmapa = {
      //Zoom del Mapa
      zoom: 15,
      //Latitud (Ubicacion a visulizar)
      center: new google.maps.LatLng(13.7230851,-89.2074421,17), // Direccion del ITR
      // Opciones o Utilidades del mapa
      styles: [
        {
          featureType: "administrative.country",
          elementType: "geometry",
          stylers: [
            {
              visibility: "simplified"
            },
            {
              hue: "#ff0000"
            }
          ]
        }
      ]
    };
    // Elemento de referencia para HTML
    var elemento1 = document.getElementById("googlemaps");
    //Creando el mapa con sus elementos y funciones
    var map1 = new google.maps.Map(elemento1, opcionesmapa); // Contenedor de todas las funciones
  
    /* MARCADOR */
    var marcador = new google.maps.Marker({
      position: new google.maps.LatLng(13.7230851,-89.2074421,17),
      map: map1,
      title: "Instituto Tecnico Ricaldone"
    });
  }  
  function Cargando() {
    setTimeout(function() {
      if ($("#google-map-tab").is(":visible")) {
        MapsIniciar();
      } else {
        Cargando();
      }
    }, 100);
  }
  // Iniciando el mapa dentro de la tabla
  Cargando();
  
  // VENTANA
  google.maps.event.addDomListener(window, "load", init);