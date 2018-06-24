<?php
    require_once("../../../models/database.class.php");
    require('../../../helpers/fpdf.php');

    class PDF extends FPDF
    {
        // Cabecera de p�gina
        function Header()
        {
            // Logo
            $this->Image('../../../../web/img/mipintura_negro1.png',10,8,33);
            // Arial bold 15
            $this->SetFont('Arial','B',15);
            // Movernos a la derecha
            $this->Cell(80);
            // T�tulo
            $this->Cell(30,10,'Reporte de empleados',0,1,'C');
            // Salto de l�nea
            $this->Ln(20);
        }

        // Pie de p�gina
        function Footer()
        {
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
            $w = array(70, 30, 35, 63);
            // Cabeceras
            for($i=0;$i<count($header);$i++)
                $this->Cell($w[$i],7, $header[$i] ,1,0,'C');
            $this->Ln();
            // Datos
            foreach($result as $row)
            {
                $this->Cell($w[0],6,$row['nombre_completo'],'LR');
                $this->Cell($w[1],6,$row['nombre_usuario'],'LR');
                $this->Cell($w[2],6,$row['permiso'],'LR');
                $this->Cell($w[3],6,$row['correo_electronico'],'LR');
                $this->Ln();
            }
            // L�nea de cierre
            $this->Cell(array_sum($w),0,'','T');
        }
    }

    // Creaci�n del objeto de la clase heredada
    $pdf = new PDF();
    // T�tulos de las columnas
    $header = array('Nombre completo', 'Usuario', 'Tipo de usuario', 'Correo electronico');
    // Carga de datos
    $sql = "SELECT id_empleado, nombre_completo, correo_electronico, nombre_usuario, contrasena, imagen, permiso FROM empleado INNER JOIN permisos USING(id_permiso) ORDER BY nombre_completo";
    $params = array(null);
    $result = Database::getRows($sql, $params);

    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',12);
    $pdf->ImprovedTable($header,$result);
    $pdf->Output();
?>