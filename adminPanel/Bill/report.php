<?php
require("../../db/db.php");

require("fpdf/fpdf.php");


class PDF extends FPDF{
function Header(){
    
//loading the image in the header
$this->Image("../../media/logo.png");    

$this->ln(20);
}
    

    
}

$sql="Select count(Email) as Number,Date from reportorder GROUP BY date"; //getting the number of online orders on each day
$result=mysqli_query($db,$sql);
$pdf=new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',16); //font settings

$pdf->SetFillColor(51,153,255); //colour settings
$pdf->Cell(90,15,'Date',1,0,'C',1);
$pdf->Cell(90,15,'Number of orders',1,1,'C',1);
 

while($row=mysqli_fetch_array($result))
{
  
  // cell with left and right borders
$pdf->SetFont('Arial','B',13);	 //font settings
$pdf->SetFillColor(153,153,255); //colour settings
$pdf->Cell(90,10,$row['Date'],1,0,'C',1);  //displaying the date
$pdf->Cell(90,10,$row['Number'] ,1,1,'C',1); //displaying number of orders
   
   
}


$pdf->output(); //Displaying  the report


?>