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
	<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
	<td><li><a href="#" class="tablinks" onClick="openCity(event, 'London')">Handle Customers</a></li><center><button  id="button">Customers</button></center> <br></td>
	<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
	<td><center><button  id="button">Trainees</button></center><br></td>
	<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
	<td><center><button  id="button">Suppliers</button><br><br></center></td>
	</table>
	</div>
	
</body>
</html>