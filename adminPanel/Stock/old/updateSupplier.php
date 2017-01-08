<html>
<head>
<title>Update supplier</title>

<link rel = "stylesheet" href = "table.css" />

</head>

<body>
<div class="page">
<h1>Update Supplier</h1>
	<div class="main">
	
	
	<form id="" name="" action="" method="post" >
            <table border=0>
                <thead>
			<tr>
			<th colspan=2>Supplier Id</th>
			</tr>
            </thead>

                    <tr><td><input type="number" name="supplierId" size="10" class="inputs"></td></tr>
                    <td align=center ><input type="submit" value="SEARCH" name="search" class="buttonSub"><a href=#result></a></td>

            </table>
        </form>

 <?php 
require("../db/db.php");

			if (isset($_POST["search"])){
                
               /* include('dbase.php');*/
				
				$id=$_POST["supplierId"];
				
			$sql = "select * from supplier where supplier_No='$id' " ;

			$res = mysqli_query($connection,$sql);
			
if (!mysqli_query($connection,$sql))
  {
  die('Error: ' . mysqli_error($connection));
  }
			
			while($row = mysqli_fetch_array($res)){
				
				
echo "<table  align=left border=0>
<form method='POST' action='' >
<link rel = 'stylesheet' href = 'supplier.css' />		
	
	
<tr>
<td>ID</td>
<td><input type=text name=supplier_No size=55 maxlength=50 value=" .$row['supplier_No']."></td>
</tr> 

<tr>
<td>Company Name</td>
<td><input type=text name=Company_Name size=55 maxlength=50 value=".$row['Company_Name']."></td>
</tr>

<tr>
<td>Permanent Address</td>
<td><input type=text name=Permenant_Address size=55 maxlength=50 value=".$row['Permenant_Address']."></td>
</tr>

<tr>
<td>Contact Number</td>
<td><input type=text name=Contact_No size=55 maxlength=50 value=".$row['Contact_No']."></td>
</tr>

<tr>
<td>E-mail</td>
<td><input type=text name=Email_Address size=55 maxlength=50 value=".$row['Email_Address']."></td>
</tr>
<tr class='up'>
<td ></td>
<td><input type='submit' name='update' value=UPDATE class=buttonSub />
<input type=reset name=reset value=CANCEL class=buttonSub /></td>
</tr>
</form>
</table>
";


}
}

	if (isset($_POST["update"])){
				/*include('dbase.php');*/
				$supplier_No=isset($array['supplier_No']) ? $array['supplier_No'] : '';
				$Company_Name= isset($array['Company_Name']) ? $array['Company_Name'] : '';
				$Permenant_Address= isset($array['Permenant_Address']) ? $array['Permenant_Address'] : '';
				$Contact_No= isset($array['Contact_No']) ? $array['Contact_No'] : '';
				$Email_Address=isset($array['Email_Address']) ? $array['Email_Address'] : '';
				

            $sql="update  supplier set 
			
			Company_Name='$Company_Name',
			Permenant_Address='$Permenant_Address',
			Contact_No='$Contact_No',
			Email_Address='$Email_Address' 
				where supplier_No='$supplier_No' " ;

            if (mysqli_query($connection,$sql)){
                echo "<div class='ech' ><h6>Record updated</h6></div>";
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
