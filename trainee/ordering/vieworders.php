
        <?php
            $dbhost="localhost";
$dbuser="User";
$dbpassword="abc123";
$dbname="project1";

//function to connect to the database
$db = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);



if ($db) {

print "";

}
else {

print "Unsuccessful Database connection <br>";

}



            $sql="SELECT * FROM `order` ";
            $result=mysqli_query($db,$sql);

echo "View Order";

echo "<table border=1 cellspacing=0 cellpadding=4>";
echo"<tr>";
echo"<td align=center>";
echo "<font size=4>";
echo "Order No.";
echo"</td>";
echo"<td align=center>";
echo "<font size=4>";
echo "NIC No.";
echo"</td>";
echo"<td align=center>";
echo "<font size=4>";
echo "Delivery/Pickup No.";
echo"</td>";
echo"<td align=center>";
echo "<font size=4>";
echo "Address";
echo"</td>";
echo"<td align=center>";
echo "<font size=4>";
echo "Time";
echo"</td>";
echo"<td align=center>";
echo "<font size=4>";
echo "Telephone";
echo"</td>";
echo"<td align=center>";
echo "<font size=4>";
echo "Email";
echo"</td>";
echo"<td align=center>";
echo "<font size=4>";
echo "Prescription-1";
echo"</td>";
echo"<td align=center>";
echo "<font size=4>";
echo "Prescription-2";
echo"</td>";
echo"<td align=center-3>";
echo "<font size=4>";
echo "Prescription-3";
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
     echo"<td >";
   
   echo '<a href='.( $row['Image1'] ).' >';
   echo "<img src='" .$row['Image1']. "' height='200' width='200'/>";
    echo "</a>";
    
    
    echo "<br>";
     echo"</td>";
    echo"<td >";
    
   
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
      echo"<td >";
   
  if($row['Image3']=="No copy"){
        echo "No copy";
    }
    else{
     echo '<a href='.( $row['Image3'] ).' >';
   echo "<img src='" . $row['Image3'] . "' height='200' width='200'/>";
    }
   echo "</a>";
   
    
    echo "<br>";
     echo"</td>";
    
     echo"</tr>";
   
}
echo "</table>";

   ?> 