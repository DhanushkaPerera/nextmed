<?php
require("../db/db.php");

$email=$_REQUEST["email"];
$password=$_REQUEST["password"];

//dealing with scripting attacks(unwanted html)
$email = htmlspecialchars($email);
$password = htmlspecialchars($password);


$sql="SELECT * FROM customer where email='$email' ";
$result = $db->query($sql);
$row=$result->fetch_assoc();

    $hashpwd= $row['Password'];
    $hash=password_verify($password,$hashpwd);
    
    if($hash==0){
        echo"Passwords don't match";
    }else{



$sql="SELECT * FROM customer where Email='$email' AND Password='$hashpwd'";
$result = mysqli_query($db,$sql);

if(mysqli_num_rows($result)==1){ //Each entry is unique so the number of rows returned from the db table should be 1
    session_start();          //starting a session if login is successful
    $_SESSION['loginCst']='1'; //creating a session variable
    $result=mysqli_fetch_array($result);
    $_SESSION['username']=$result['FName']." ".$result['LName'];
    $_SESSION['userNIC'] = $result['NIC'];
    $_SESSION['useremail']=$result['Email'];
	echo "Success";
    //header('location:/../testing/indexreg.htm');
    
    
}

else{
    echo "Failed";
    session_start(); //starting a session if login is successful
    $_SESSION['login']=''; //unsucce
    
}
    }















?>