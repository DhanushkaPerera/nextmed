<html>
<head>
<title>Remove Supplier</title>

<link rel = "stylesheet" href = "table.css" />

</head>


<link rel="stylesheet" type="text/css" href="">

<body>
<div class="page">
<h1>Remove Supplier</h1>
	<div class="main">
	
	


        <form id="" name="remove" action="" method="post" >
            <table border=0>
                <thead>
			<tr>
			<th colspan=2>Supplier Id</th>
			</tr>
            </thead>

                    <tr><td><input type="number" name="supplierid" size="10" class="inputs"></td></tr>
                    <td align=center ><input type="submit" value="DELETE" name="delete" class="buttonSub"></td>

            </table>
        </form>
		
		<?php

require("../db/db.php");
    if (isset($_POST["delete"])){

            /*include('dbase.php');*/

            $supplierid=$_POST["supplierid"];

            //$sql_1="DELETE FROM supplier WHERE supplierid='$supplierid'";

            if (mysqli_query($connection,"DELETE FROM supplier WHERE supplier_No='$supplierid' ")){
                echo "<div class='ech' ><h6>One supplier deleted</h6></div>";
            }else{
			 echo "Something Went Wrong!";
			  printf("error: %s\n", mysqli_error($connection));
		}
    }
?>
</div>
<INPUT Type="BUTTON" name="back" class="back" Value="X" Onclick="window.location.href='../admin.php'">
</div>
</body>
</html>