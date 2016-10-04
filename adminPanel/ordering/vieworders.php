
        <?php
            require("includes/db.php");

            $sql="SELECT * FROM `order` ";
            $result=mysqli_query($db,$sql);
echo "<body bgcolor=#E6E6FA>";
echo "<table border=1 cellspacing=0 cellpadding=4 > " ;
echo"<tr bgcolor=grey>";
echo"<td align=center>";
echo "<font size=4>";
echo "<B>";
echo "Order No.";
echo "</B>";
echo"</td>";
echo"<td align=center>";
echo "<font size=4>";
echo "<B>";
echo "NIC No.";
echo"</td>";
echo"<td align=center>";
echo "<font size=4>";
echo "<B>";
echo "Delivery/Pickup No.";
echo"</td>";
echo"<td align=center>";
echo "<font size=4>";
echo "<B>";
echo "Address";
echo"</td>";
echo"<td align=center>";
echo "<font size=4>";
echo "<B>";
echo "Expect time";
echo"</td>";
echo"<td align=center>";
echo "<font size=4>";
echo "<B>";
echo "Telephone";
echo"</td>";
echo"<td align=center>";
echo "<font size=4>";
echo "<B>";
echo "Email";
echo"</td>";
echo"<td align=center>";
echo "<font size=4>";
echo "<B>";
echo "Prescription Copy-1";
echo"</td>";
echo"<td align=center>";
echo "<font size=4>";
echo "<B>";
echo "Prescription Copy-2";
echo"</td>";
echo"<td align=center>";
echo "<font size=4>";
echo "<B>";
echo "Prescription Copy-3";
echo"</td>";



echo"</tr>";

while($row=mysqli_fetch_array($result))
{
    
    echo"<tr>";
     echo"<td align=center>";
    echo $row["OrderNo."];
     echo "<br>";
     echo"</td>";
     echo"<td align=center>";
    echo $row["NIC"];
     echo "<br>";
     echo"</td >";
     echo"<td align=center>";
    echo $row["DP"];
     echo "<br>";
     echo"</td>";
     echo"<td align=center>";
    echo $row["Address"];
     echo "<br>";
     echo"</td>";
     echo"<td align=center>";
    echo $row["DPTime"];
     echo "<br>";
     echo"</td>";
     echo"<td align=center>";
    echo $row["Telephone"];
     echo "<br>";
     echo"</td>";
     echo"<td align=center>";
    echo $row["Email"];
     echo "<br>";
     echo"</td>";
     echo"<td align=center >";
   
   echo '<a href='.( $row['Image1'] ).' >';
   echo "<img src='" .$row['Image1']. "' height='200' width='200'/>";
    echo "</a>";
    
    
    echo "<br>";
     echo"</td>";
    echo"<td align=center >";
    
   
    if($row['Image2']=="No copy"){
        echo "No copy";
    }
    else{
     echo '<a href='.( $row['Image2'] ).' >';
   echo "<img src='" . $row['Image2'] . "' height='200' width='200'/>";
    }
    echo "</a>";
    
    
    echo "<br>";
     echo"</td>";
      echo"<td align=center >";
   
  if($row['Image3']=="No copy"){
        echo "No copy";
    }
    else{
     echo '<a href='.( $row['Image3'] ).' >';
   echo "<img src='" . $row['Image3'] . "' height='200' width='200'/>";
    }
   echo "</a>";
    
    
    echo "<br>";
     
    
     echo"</tr>";
   
}
echo "</table>";

   ?> 