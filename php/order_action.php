<?php

//importing db.php in the includes folder
require("includes/db.php");


$nic = $_POST["NIC"];
$dp = $_POST["DP"];
$address = $_POST["Address"];
$time = $_POST["DPTime"];
$tele = $_POST["Tele"];
$mail = $_POST["Email"];
//$image=$_POST["Image"];



$sql="INSERT INTO `order` (NIC,DP,Address,DPTime,Telephone,Email) VALUES ('$nic ','$dp', '$address','$time','$tele','$mail')";



$result = mysqli_query($db,$sql);





 if (!$result) 
{
    echo "Order not properly place! Please place again!";
}
else
{
    echo "Order placed successfully ";
}


?>