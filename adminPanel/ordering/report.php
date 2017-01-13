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

$sql="SELECT count(Email) as Number, Date from reportorder";
$result=mysqli_query($db,$sql);
$pdf=new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);

$pdf->Cell(90,10,'Date',1,0,'C',0);
$pdf->Cell(90,10,'Number of orders',1,1,'C',0);
 

while($row=mysqli_fetch_array($result))
{
  
  // cell with left and right borders

$pdf->Cell(90,10,$row['Date'],1,0,'C',0); // 1,0 
$pdf->Cell(90,10,$row['Number'] ,1,1,'C',0);
   
   
}

$pdf->output();


?>