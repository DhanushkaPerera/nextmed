<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale: 1.0, user-scaleable=no">
	<meta property="og:image" content="http://www.mhwebdesigns.com/templates/panel/images/preview.jpg"/>
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
<body>
	<div class="header">
		<div class="header1">
			<h1 id="name">User Management Center</h1>
		</div>
	</div>
	<div class="content">
	<div class="content_container">
	<table>
	<ul class="tab" >
		  
		 <li><a href="#" class="tablinks" onClick="openCity(event, 'London')">Handle Customers</a></li>
		 <li><a href="#" class="tablinks" onClick="openCity(event, 'Paris')">Handle Suppliers</a></li>
		 <li><a href="#" class="tablinks" onClick="openCity(event, 'Tokyo')">Handle Trainees</a></li>
		</ul>
	<div id="London" class="tabcontent">
		  <br><h3 style="color:black;"><a href="Customer_registration">New Customer</h3><br>
		  <h3 style="color:black;"><a href="adcust.php">View Customers</h3></a>
	</div>
	<div id="Paris" class="tabcontent">
		  <br><h3 style="color:black;">New Supplier</h3><br>
		  <h3 style="color:black;">View Suppliers</h3>
	</div>

		<div id="Tokyo" class="tabcontent">
		  <br><h3 style="color:black;"><a href="addtrainee.php">New Trainee</h3></a>
		  <h3 style="color:black;"><a href="trainee.php">View Trainees</h3></a>
		  <h3 style="color:black;"><a href="adminques.php">Add Questions - Trainee quiz</h3></a>
		  <h3 style="color:black;"><a href="adminpage.php">View Questions - Trainee quiz</h3></a>
		</div>
	
	</div>
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
