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
            $this->Cell(40,10,'Clientes registrados',0,0,'C');
            // Salto de l�nea
            $this->Ln(20);
        }

        // Pie de p�gina
        function Footer()
        {
            if(!isset($_SESSION)) { 
                session_name("pagina_dashboard");
                session_start(); 
            }

            date_default_timezone_set("America/El_Salvador");
            $hoy = getdate();
            // Posici�n: a 1,5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // N�mero de p�gina
            $this->Cell(0,10,'Reporte generado por '.$_SESSION['nombre_completo_d'].' a las '.$hoy['hours'].':'.$hoy['minutes'].' del '.$hoy['mday'].'/'.$hoy['mon'].'/'.$hoy['year'],0,0);
            $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'R');
        }
        // Una tabla m�s completa
        function ImprovedTable($header, $result)
        {   
            // Colores, ancho de línea y fuente en negrita
            $this->SetFillColor(56,132,195);
            $this->SetTextColor(255);
            $this->SetDrawColor(56,132,195);
            $this->SetLineWidth(.3);
            $this->SetFont('','B');
            // Anchuras de las columnas
            $w = array(45, 45, 35, 70);
            // Cabeceras
            for($i=0;$i<count($header);$i++)
                $this->Cell($w[$i],7, $header[$i] ,1,0,'C', true);
            $this->Ln();

            // Restauración de colores y fuentes
            $this->SetFillColor(224,235,255);
            $this->SetTextColor(0);
            $this->SetFont('');
            // Datos
            $fill = false;
            foreach($result as $row)
            {
                $this->Cell($w[0],6,$row['apellidos'],'LR',0,'L',$fill);
                $this->Cell($w[1],6,$row['nombres'],'LR',0,'L',$fill);
                $this->Cell($w[2],6,$row['nombre_usuario'],'LR',0,'L',$fill);
                $this->Cell($w[3],6,$row['email'],'LR',0,'L',$fill);
                $this->Ln();
                $fill = !$fill;
            }
            // L�nea de cierre
            $this->Cell(array_sum($w),0,'','T');
        }
    }

    // Creaci�n del objeto de la clase heredada
    $pdf = new PDF();
    $pdf->setTitle('Reporte de clientes');
    // T�tulos de las columnas
    $header = array('Apellidos', 'Nombres', 'Usuario', 'Correo electronico');
    // Carga de datos
    $sql = "SELECT id_cliente, nombres, apellidos, email, nombre_usuario FROM cliente ORDER BY apellidos";
    $params = array(null);
    $result = Database::getRows($sql, $params);

    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',12);
    $pdf->ImprovedTable($header,$result);
    $pdf->Output();
?>