
        <?php
            require("includes/db.php");

            $sql="SELECT * FROM `order` ";
            $result=mysqli_query($db,$sql);
echo"<head>";
echo'
        <link rel="stylesheet" href="view.css">
        
        ';
echo"</head>";
    
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
echo "Delivery/Pickup ";
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
echo "Copy1";
echo"</td>";
echo"<td align=center>";
echo "<font size=4>";
echo "<B>";
echo " Copy2";
echo"</td>";
echo"<td align=center>";
echo "<font size=4>";
echo "<B>";
echo "Copy3";
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
 
    
   echo '<a class="lightbox" href='.( $row['Image1'] ).'    >';
    
    
   echo "<img id='myImg1' src='" .$row['Image1']. "' height='70' width='100' class='lightbox' />";
    
echo "</a>";
   
    
    echo "<br>";
     echo"</td>";
    echo"<td align=center >";
    
   
    if($row['Image2']=="No copy"){
        echo "No copy";
    }
    else{
      
     echo '<a class="lightbox" href='.( $row['Image2'] ).'>';
    
    
   echo "<img id='myImg1' src='" .$row['Image2']. "' height='70' width='100' class='lightbox' />";
    
echo "</a>";
    }
   
    
    
    echo "<br>";
     echo"</td>";
      echo"<td align=center >";
   
  if($row['Image3']=="No copy"){
        echo "No copy";
    }
    else{
       
      echo '<a class="lightbox" href='.( $row['Image3'] ).'    >';
    
    
   echo "<img id='myImg1' src='" .$row['Image3']. "' height='70' width='100' class='lightbox' />";
    
echo "</a>";
    }
   
    
    
    echo "<br>";
     
    
     echo"</tr>";
   echo "</div>";
}

echo"</body>";

   ?> 