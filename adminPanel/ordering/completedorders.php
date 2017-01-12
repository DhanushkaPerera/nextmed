 <?php
require("../../db/db.php");
$sql="SELECT * FROM complete ";
$result=mysqli_query($db,$sql);
echo"<head>";
echo'
<link rel="stylesheet" href="view.css">
</head>';
    
echo "<body >";
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
    
     

   echo'<div class="ienlarger"><a href='.( $row['Image1'] ).'><img src="' .$row['Image1']. '" alt="thumb" class="resize_thumb" /><span>
    <img src="' .$row['Image1']. '" alt="large" height=300 width=300 /><br />
    Copy-1</span></a></div>';


 
    
 
   
    
    echo "<br>";
     echo"</td>";
    echo"<td align=center >";
    
   
    if($row['Image2']=="No copy"){
        echo "No copy";
    }
    else{
      
     echo'<div class="ienlarger"><a href='.( $row['Image2'] ).'><img src="' .$row['Image2']. '" alt="thumb" class="resize_thumb" /><span>
    <img src="' .$row['Image2']. '" alt="large" height=300 width=300 /><br />
    Copy-2</span></a></div>';

    }
   
    
    
    echo "<br>";
     echo"</td>";
     echo"<td align=center >";
    
   
    if($row['Image3']=="No copy"){
        echo "No copy";
    }
    else{
      
     echo'<div class="ienlarger"><a href='.( $row['Image3'] ).'><img src="' .$row['Image3']. '" alt="thumb" class="resize_thumb" /><span>
    <img src="' .$row['Image3']. '" alt="large" height=300 width=300 /><br />
    Copy-3</span></a></div>';

    }
    
    
    echo "<br>";
      echo"</td>";
  
    echo "</tr>";
   
    
    
  


}

echo"</table>";

        
echo  "<div float=right>
 <a href='vieworders.php'>
    
    <input class='button1' type='button' value='Back'>
    </a>
    </div>";
        
echo"</body>";

   ?> 