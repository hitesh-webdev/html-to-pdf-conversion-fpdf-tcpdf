<?php 

session_start();

ob_start();

$conn = mysqli_connect("localhost","root","","hitesh_db");

if(!$conn){
	echo "Connection error: " . mysqli_error($conn);
	die;
}

$query = mysqli_query($conn,"SELECT Image_Data FROM blob_images WHERE Image_ID={$_SESSION['img']}");

$row = mysqli_fetch_array($query);

require_once('./TCPDF/tcpdf.php');

$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// Adding 1st page

$pdf->AddPage();

// set font
$pdf->SetFont('helvetica', '', 14);

//  ‘@’ character followed by the image data string for blob images

$pdf->Image('@'.$row['Image_Data'],10,20,190,100);


$html =<<<DELIMITER
<h3 align="center">Map</h3>
DELIMITER;


// Rendering HTML on the PDF

$pdf->writeHTML($html, true, false, false, false, '');



// Displaying output on the screen

$pdf->Output('example_001.pdf', 'D');


 ?>