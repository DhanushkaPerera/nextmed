<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale: 1.0, user-scaleable=no">

	<style>
				/* Style the list */
		ul.tab {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			border: 1px solid #ccc;
			background-color: #f1f1f1;
		}

		/* Float the list items side by side */
		ul.tab li {float: left;}

		/* Style the links inside the list items */
		ul.tab li a {
			display: inline-block;
			color: black;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			transition: 0.3s;
			font-size: 17px;
		}

		/* Change background color of links on hover */
		ul.tab li a:hover {background-color: #ddd;}

		/* Create an active/current tablink class */
		ul.tab li a:focus, .active {background-color: #ccc;}

		/* Style the tab content */
		.tabcontent {
			display: none;
			padding: 6px 12px;
			border: 1px solid #ccc;
			border-top: none;
		}
		.tabcontent {
			-webkit-animation: fadeEffect 1s;
			animation: fadeEffect 1s; /* Fading effect takes 1 second */
		}

		@-webkit-keyframes fadeEffect {
			from {opacity: 0;}
			to {opacity: 1;}
		}

		@keyframes fadeEffect {
			from {opacity: 0;}
			to {opacity: 1;}
		}
		
	</style>
</head> 
<body bgcolor="#D0D0D0 ">
	<div class="header">
		<div class="header1">
			<img src="images/next" class="imgleft">
			<h1 id="name">Trainee Pharmacists Manage Center</h1>
		</div>
		<div class="header2">
			Add New Trainee
		</div>
	</div>
	
    <div style="padding-top:15%">
     	<center> <a href="trainee.php">  View Admin Page  </a> </center>
	</div>
	<div class="col-12" style="padding-top:5%" >
	<form action="controllers/addaTrainee.php" method="post">
		<ul class="tab" >
		  
		  <li><a href="#" class="tablinks" onClick="openCity(event, 'Paris')">Add Trainee Details</a></li>
		  <li><a href="#" class="tablinks" onClick="openCity(event, 'Tokyo')">Allow the rights as the Trainee </a></li>
		</ul>

		<div id="Paris" class="tabcontent">
		  <h3 style="color:black;">Name</h3>
		  <input type="text" name="Name" placeholder="Full Name" required>
		  <hr>
		  <h3 style="color:black;">Personal information</h3>
		  <table>
			<tr><input type="text" name="NIC" placeholder="NIC" required></tr><br>
			<tr><input type="text" name="ContactNo" placeholder="Contact No" required></tr><br>
			<tr><input type="text" name="Email" placeholder="email" required></tr><br>
			<tr><input type="text" name="UserName" placeholder="User Name" required></tr><br>
			<tr><input type="text" name="PassWord" placeholder="Password" required></tr><br>
			
		  </table>
		  
		</div>

		<div id="Tokyo" class="tabcontent">
		  <h3 style="color:black;"></h3>
		  <p> By clicking on the Agree Button below, You allow the new trainee to do authorized changes in your system. </p>
		  <p><input type="submit" name="addTrai" value="Agree"></p>
		</div>
	</form>
	
	</div>
	
	
	
<script>
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}


</script>
</body>
</html>