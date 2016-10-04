<html>
<head>
<title>Remove drugs</title>

<link rel = "stylesheet" href = "table.css" />

</head>




<body>
<div class="page">
<h1>Delete Drugs</h1>
	<div class="main">
	
	


        <form id="" name="delete" action="" method="post" >
            <table border=0>
                <thead>
			<tr>
			<th colspan=2>Drug Id</th>
			</tr>
            </thead>

                    <tr><td><input type="number" name="drugid" size="10" class="inputs"></td></tr>
                    <td align=center ><input type="submit" value="DELETE" name="delete" class="buttonSub"></td>

            </table>
        </form>

	
	<?php
    
 require("../db/db.php") ;


    if (isset($_POST["delete"])){
        
           /* include('dbase.php');*/

            $id=$_POST["drugid"];

            //$sql_1="DELETE FROM drug WHERE qId='$qid'";

            if (mysqli_query($con,"DELETE FROM drug WHERE DrugNo='$id'")){
                echo "<div class='ech' ><h6>One drug deleted</h6></div>";
            }else{
			 echo "Something Went Wrong!";
		}
    }
?>
</div>
<INPUT Type="BUTTON" name="back" class="back" Value="X" Onclick="window.location.href='admin.php'">
</div>
</body>
		
</html>