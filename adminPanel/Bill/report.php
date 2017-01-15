<?php
require("../../db/db.php");

require("fpdf/fpdf.php");


class PDF extends FPDF{
function Header(){
    
$this->setFont('Arial','B',14);
$this->Image("logo.png");    

$this->ln(20);
}
    

    
}

$sql="Select count(Email) as Number,Date from reportorder GROUP BY date";
$result=mysqli_query($db,$sql);
$pdf=new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',20);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(45,20,' ',0,0,'C',1);
$pdf->Cell(90,20,'Online orders on daily basis',0,1,'C',1);
$pdf->SetFont('Arial','B',16);
$pdf->SetFillColor(51,153,255);
$pdf->Cell(90,15,'Date',1,0,'C',1);
$pdf->Cell(90,15,'Number of orders',1,1,'C',1);
 
 

while($row=mysqli_fetch_array($result))
{
  
  // cell with left and right borders
$pdf->SetFont('Arial','B',13);	
$pdf->SetFillColor(153,153,255);
$pdf->Cell(90,10,$row['Date'],1,0,'C',1); // 1,0 
$pdf->Cell(90,10,$row['Number'] ,1,1,'C',1);
   
   
}


$pdf->output();


?>