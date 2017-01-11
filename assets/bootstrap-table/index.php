<?php
session_start();
if(isset($_SESSION['loginEmp'])&&$_SESSION['loginEmp']==1){

}
else{
    header('location:/../testing/index.php');
}
?>