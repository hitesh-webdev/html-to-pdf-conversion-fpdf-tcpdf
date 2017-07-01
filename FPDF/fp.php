<?php 

require('fpdf.php');



$pdf = new FPDF();

// Page 1

$pdf->AddPage();

// Setting Fonts

$pdf->SetFont('Arial','',12);

// Image Cell

$pdf->SetX((210 - 140)/2);

$pdf->Cell(45,40,'',1,0);
$pdf->Image('club.jpg',40,15,35,30);

// Club Heading Cell

$pdf->SetFont('Arial','B',16);

$pdf->MultiCell(95,10,"\nThe Diamond Club\nMembership Form\n\n",1,'C');

// Underline Cell

$pdf->SetX(10);
$pdf->Cell(0,1,'','B',1,'C');

// Tag Line

$pdf->SetFont('Arial','',12);

$pdf->Cell(0,8,'All Residents of URBANA JEWELS are required to complete this registration form.',0,1,'C');

// Check Box line

$pdf->SetX((210 - 94)/2);

$pdf->SetFont('Arial','B',12);

$pdf->Cell(6,6,'',1,0);
$pdf->Cell(55,6,'NEW MEMBERSHIP',0,0,'L');

$pdf->Cell(6,6,'',1,0);
$pdf->Cell(25,6,'RENEWAL',0,1,'L');


// Form 1

$pdf->SetY(65);

// Passport size photo

$pdf->MultiCell(150,10.5,"\n\n\nSECTION 1: PRIMARY MEMBER CONTACT INFORMATION",0,'L');

$pdf->SetY(65);
$pdf->SetX(160);

$pdf->MultiCell(40,14,"Please paste\nyour passport\nsize photo here",1,'C');

// Title

$pdf->SetFillColor(0, 0, 0);

$pdf->SetTextColor(255,255,255);

$pdf->Ln(3);

$pdf->SetFont('Arial','',9);

$pdf->Cell(35,7,'TITLE','B',0,'L',true);
$pdf->Cell(155,7,'',1,1,'L',false);

// Check Boxes

$pdf->SetTextColor(0,0,0);

$pdf->Rect(48,111,5,5);

$pdf->Text(55,115,'Mr');

$pdf->Rect(68,111,5,5);

$pdf->Text(75,115,'Mrs');

$pdf->Rect(88,111,5,5);

$pdf->Text(95,115,'Miss');

$pdf->Rect(108,111,5,5);

$pdf->Text(115,115,'M/s');

// Name

$pdf->SetTextColor(255,255,255);

$pdf->Cell(35,6,'NAME','B',0,'L',true);
$pdf->Cell(155,6,'',1,1,'L',false);

// Date of Birth

$pdf->Cell(35,6,'DATE OF BIRTH','B',0,'L',true);
$pdf->Cell(155,6,'',1,1,'L',false);

// Pan no.

$pdf->Cell(35,6,'PASS NO.','B',0,'L',true);
$pdf->Cell(155,6,'',1,1,'L',false);

// => URBANA FLAT NO.

$pdf->Cell(35,6,'URBANA FLAT NO.','B',0,'L',true);
$pdf->Cell(60,6,'',1,0,'L',false);

// MAIN TELEPHONE

$pdf->Cell(35,6,'MAIN TELEPHONE','B',0,'L',true);
$pdf->Cell(60,6,'',1,1,'L',false);

// => ADDRESS 1

$pdf->Cell(35,6,'ADDRESS 1','B',0,'L',true);
$pdf->Cell(60,6,'',1,0,'L',false);

// WORK TELEPHONE

$pdf->Cell(35,6,'WORK TELEPHONE','B',0,'L',true);
$pdf->Cell(60,6,'',1,1,'L',false);

// => ADDRESS 1

$pdf->Cell(35,6,'ADDRESS 1','B',0,'L',true);
$pdf->Cell(60,6,'',1,0,'L',false);

// WORK TELEPHONE

$pdf->Cell(35,6,'WORK TELEPHONE','B',0,'L',true);
$pdf->Cell(60,6,'',1,1,'L',false);

// => ADDRESS 2

$pdf->Cell(35,6,'ADDRESS 2','B',0,'L',true);
$pdf->Cell(60,6,'',1,0,'L',false);

// HOME TELEPHONE

$pdf->Cell(35,6,'HOME TELEPHONE','B',0,'L',true);
$pdf->Cell(60,6,'',1,1,'L',false);

// => TOWN/CITY

$pdf->Cell(35,6,'TOWN/CITY','B',0,'L',true);
$pdf->Cell(60,6,'',1,0,'L',false);

// MOBILE TELEPHONE

$pdf->Cell(35,6,'MOBILE TELEPHONE','B',0,'L',true);
$pdf->Cell(60,6,'',1,1,'L',false);

// => PINCODE

$pdf->Cell(35,6,'PINCODE','B',0,'L',true);
$pdf->Cell(60,6,'',1,0,'L',false);

// PRIMARY TEL.

$pdf->Cell(35,6,'PRIMARY TEL.','B',0,'L',true);
$pdf->Cell(60,6,'',1,1,'L',false);

// => JOB TITLE

$pdf->Cell(35,6,'JOB TITLE','B',0,'L',true);
$pdf->Cell(60,6,'',1,0,'L',false);

// SECONDARY TEL.

$pdf->Cell(35,6,'SECONDARY TEL.','B',0,'L',true);
$pdf->Cell(60,6,'',1,1,'L',false);








// FORM 2

$pdf->SetFont('Arial','B',12);

$pdf->SetTextColor(0,0,0);

$pdf->SetY(182);

// Passport size photo

$pdf->MultiCell(150,10.5,"\n\nSECTION 2: INFORMATION FOR ADD-ON CARD(S)\nCARD NO.2",0,'L');

$pdf->SetY(182);
$pdf->SetX(160);

$pdf->MultiCell(40,14,"Please paste\nyour passport\nsize photo here",1,'C');

// Title

$pdf->SetFillColor(0, 0, 0);

$pdf->SetTextColor(255,255,255);

$pdf->Ln(3);

$pdf->SetFont('Arial','',9);

$pdf->Cell(35,7,'TITLE','B',0,'L',true);
$pdf->Cell(155,7,'',1,1,'L',false);

// Check Boxes

$pdf->SetTextColor(0,0,0);

$pdf->Rect(48,228,5,5);

$pdf->Text(55,232,'Mr');

$pdf->Rect(68,228,5,5);

$pdf->Text(75,232,'Mrs');

$pdf->Rect(88,228,5,5);

$pdf->Text(95,232,'Miss');

$pdf->Rect(108,228,5,5);

$pdf->Text(115,232,'M/s');

// Name

$pdf->SetTextColor(255,255,255);

$pdf->Cell(35,6,'NAME','B',0,'L',true);
$pdf->Cell(155,6,'',1,1,'L',false);

// Date of Birth

$pdf->Cell(35,6,'DATE OF BIRTH','B',0,'L',true);
$pdf->Cell(155,6,'',1,1,'L',false);

// Pan no.

$pdf->Cell(35,6,'PASS NO.','B',0,'L',true);
$pdf->Cell(155,6,'',1,1,'L',false);

// => URBANA FLAT NO.

$pdf->Cell(35,6,'URBANA FLAT NO.','B',0,'L',true);
$pdf->Cell(60,6,'',1,0,'L',false);

// MOBILE NO.

$pdf->Cell(35,6,'MOBILE NO.','B',0,'L',true);
$pdf->Cell(60,6,'',1,1,'L',false);

// => ADDRESS 1

$pdf->Cell(35,6,'ADDRESS 1','B',0,'L',true);
$pdf->Cell(60,6,'',1,0,'L',false);

// WORK TELEPHONE

$pdf->Cell(35,6,'WORK TELEPHONE','B',0,'L',true);
$pdf->Cell(60,6,'',1,1,'L',false);

// => RELATIONSHIP

$pdf->Cell(35,6,'','B',0,'L',true);
$pdf->Cell(60,6,'','TR',0,'L',false);
$pdf->Text(11,269,"RELATIONSHIP TO");

// EMAIL

$pdf->Cell(35,6,'','B',0,'L',true);
$pdf->Cell(60,6,'','TR',1,'L',false);

// => RELATIONSHIP

$pdf->Cell(35,6,'','B',0,'L',true);
$pdf->Cell(60,6,'','BR',0,'L',false);
$pdf->Text(11,272,"PRIMARY CARD");
$pdf->Text(11,275,"HOLDER");

// EMAIL

$pdf->Cell(35,6,'','B',0,'L',true);
$pdf->Cell(60,6,'','BR',1,'L',false);
$pdf->Text(106,271,"EMAIL");



$pdf->Output();



 ?>