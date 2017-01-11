<h2>Customer Details</h2>
            <div> 
			NIC 
			
			<input type="text" placeholder="920290505v" maxlength="13" class="form-control" name=nic onfocus="headingBoxActive('hBoxNIC')" onkeyup="validateNIC(this)" autofocus onfocusout="upperCASE(this);hide('NICerror');validateoutNIC(this);validatedAll();" />
	
			<!--input type="text" placeholder="Dhanushka Perera" maxlength="13" name=name onfocus="headingBoxActive('hBoxNIC')" onkeyup="validateNIC(this)" autofocus onfocusout="upperCASE(this);hide('NICerror');validateoutNIC(this);validatedAll();" /-->
			<input class="btnSearch"  type="submit" name=search value=SEARCH id="searchButton" >
			
<?php

require("../../db/db.php");


if(isset($_POST["search"])){
	
	
        $nic = $_POST["nic"];
		/*$name = $_POST["name"];*/
		
				
		$sql = "select * from customer where NIC='$nic' ";

			$res = mysqli_query($db,$sql);
			$count=mysqli_num_rows($res);
			if ($count>0){
			
			while($row = mysqli_fetch_array($res)){
				
			echo "<div>Registered Customer</div>";
			}}
			else{
				echo "Not Registered";
			}
			
			
}

?>