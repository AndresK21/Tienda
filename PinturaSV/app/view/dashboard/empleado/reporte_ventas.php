<?php
    require_once("../../../models/database.class.php");
    require('../../../helpers/fpdf.php');

    class PDF extends FPDF
    {
        // Cabecera de p�gina
        function Header()
        {
            // Logo
            $this->Image('../../../../web/img/mipintura_negro1.png',10,8,40);
            // Arial bold 15
            $this->SetFont('Arial','B',18);
            // Movernos a la derecha
            $this->Cell(80);
            // T�tulo
            $this->Cell(40,10,'Ventas realizadas',0,0,'C');
            // Salto de l�nea
            $this->Ln(20);
        }

        // Pie de p�gina
        function Footer()
        {
            date_default_timezone_set("America/El_Salvador");
            $hoy = getdate();
            // Posici�n: a 1,5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // N�mero de p�gina
            $this->Cell(0,10,'Reporte generado por '.$_GET['id'].' a las '.$hoy['hours'].':'.$hoy['minutes'].' del '.$hoy['mday'].'/'.$hoy['mon'].'/'.$hoy['year'],0,0);
            $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'R');
        }
        // Una tabla m�s completa
        function ImprovedTable($header, $result)
        {   
            // Anchuras de las columnas
            $w = array(75, 27, 25, 25, 25);
            // Cabeceras
            for($i=0;$i<count($header);$i++)
                $this->Cell($w[$i],7, $header[$i] ,1,0,'C');
            $this->Ln();
            // Datos
            foreach($result as $row)
            {
                $this->Cell($w[0],6,$row['nombre'],'LR');
                $this->Cell($w[1],6,$row['fecha'],'LR');
                $this->Cell($w[2],6,$row['cant'],'LR');
                $this->Cell($w[3],6,'$'.$row['precio'],'LR');
                $this->Cell($w[4],6,'$'.$row['venta'],'LR');
                $this->Ln();
            }
            // L�nea de cierre
            $this->Cell(array_sum($w),0,'','T');
        }
    }

    // Creaci�n del objeto de la clase heredada
    $pdf = new PDF();
    // T�tulos de las columnas
    $header = array('Producto', 'Fecha', 'Cantidad', 'Precio U.', 'Venta');
    // Carga de datos
    $sql = "SELECT SUM(detalle_pedido.cantidad) AS cant, detalle_pedido.id_producto AS id, nombre, precio, precio*SUM(detalle_pedido.cantidad) AS venta, pedido.fecha AS fecha FROM detalle_pedido INNER JOIN pedido USING(id_pedido) INNER JOIN producto USING(id_producto) GROUP BY id_producto";
    $params = array(null);
    $result = Database::getRows($sql, $params);

    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',12);
    $pdf->ImprovedTable($header,$result);
    $pdf->Output();
?>