<?php 

session_start();

ob_start();

require_once('../TCPDF/tcpdf.php');

$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// Adding 1st page

$pdf->AddPage();

// set font
$pdf->SetFont('helvetica', '', 14);


$html =<<<DELIMITER
<h3 align="center">Map</h3>
<img height="300" width="550" src="{$_SESSION['img']}" />
DELIMITER;


// Rendering HTML on the PDF

$pdf->writeHTML($html, true, false, false, false, '');

// Displaying output on the screen

$pdf->Output('example_001.pdf', 'D');


 ?>