<?php 

/*

Note: 
Name attribute of the input fields should be given, otherwise they won't be displayed

*/

require_once('tcpdf.php');

$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// Adding 1st page

$pdf->AddPage();

// set font
$pdf->SetFont('helvetica', '', 14);

//$pdf->SetTextColor(0,0,0);

/* Text Box using code & coordinates 

$prop = array();

$opt = array();

$pdf->TextField('name',96,10,$prop,$opt,77,60);
$pdf->TextField('age',96,10,$prop,$opt,77,73);
$pdf->TextField('email',96,10,$prop,$opt,77,87);
$pdf->TextField('phone',96,10,$prop,$opt,77,100);
$pdf->TextField('address',96,10,$prop,$opt,77,113);

*/

/* Gender RadioButton using code

$pdf->RadioButton('gender',5,$prop,$opt,'On',false,80,129,false);
$pdf->Text(88,129,'Male');

$pdf->RadioButton('gender',5,$prop,$opt,'On',false,110,129,false);
$pdf->Text(118,129,'Female');

*/

// HTML Code

$html =<<<DELIMITER
<form action="">
<table width="400px" align="center" border="1" cellpadding="5" cellspacing="10">
	<tr>
		<td colspan="2"><br><h2>Registration Form</h2><br></td>
	</tr>
	<tr>
		<td width="100px">Name</td>
		<td width="270" align="left">
			<input type="text" name="name" size="33" style="height: 20px;">
		</td>
	</tr>
	<tr>
		<td width="100px">Age</td>
		<td width="270" align="left">
			<input type="text" name="age" size="33" style="height: 20px;">
		</td>
	</tr>
	<tr>
		<td width="100px">Email</td>
		<td width="270" align="left">
			<input type="text" name="email" size="33" style="height: 20px;">
		</td>
	</tr>
	<tr>
		<td width="100px">Phone No.</td>
		<td width="270" align="left">
			<input type="text" name="phone" size="33" style="height: 20px;">
		</td>
	</tr>
	<tr>
		<td width="100px">Address</td>
		<td width="270" align="left">
			<input type="text" name="address" size="33" style="height: 20px;">
		</td>
	</tr>
	<tr>
		<td width="100px">Gender</td>
		<td width="270px" align="left">
			<input type="radio" name="gender" id="male" value="male"> <label for="male">Male</label>
			&nbsp; &nbsp; &nbsp;
			<input type="radio" name="gender" id="female" value="female"> <label for="female">Female</label>
		</td>
	</tr>
</table>
DELIMITER;

// Positioning table on the PDF

$pdf->SetY(20);
$pdf->SetX(35);

// Rendering HTML on the PDF

$pdf->writeHTML($html, true, false, false, false, '');

// Positioning reset/print buttons on the PDF

$pdf->SetY(150);
$pdf->SetX(80);

$btn =<<<DELIMITER
<input type="reset" name="reset" value="Reset" />&nbsp; &nbsp;
<input type="button" name="print" value="Print" onclick="print()" />
</form>
DELIMITER;

// Rendering HTML on the PDF

$pdf->writeHTML($btn, true, false, false, false, '');

// Displaying output on the screen

$pdf->Output('example_001.pdf', 'I');

 ?>