<?php
require("../db/db.php");

$nic = $_REQUEST["nicN"];

//dealing with scripting attacks(unwanted html)
//$nic = htmlspecialchars($nic);


//deal with sql injection attacks
//$email = quote_smart($email, $db);
//$password = quote_smart($password, $db);


$sql="SELECT * FROM customer where nic='$nic'";
$result = mysqli_query($db,$sql);


if(mysqli_num_rows($result)==1){ //Each entry is unique so the number of rows returned from the db table should be 1
    echo "This nic is already registered as a user.";   
}
else{
	echo "";
}

?>