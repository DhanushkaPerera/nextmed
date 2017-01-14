<?php
	session_start();
	if(isset($_SESSION['loginCst'])&&$_SESSION['loginCst']==1){
		
	}
	else{
		header('location:/../testing/index.php');
	}
?>
<!DOCTYPE html>
<html>
<title> NextMEd </title>
<head>
	<meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="stylesheet.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

   <script>
	function showContent(element) {
		var contentitems = document.querySelectorAll(".showitem");
		contentitems[0].className = 'contentitem';
		document.getElementById(element).className = 'contentitem showitem';
	}
	
	</script>
	
	<script>
	function showLogin(){
		var modal = document.querySelectorAll(".modal");
		modal[0].style.display = "block";
	}
	function closewindow(){
		var modal = document.querySelectorAll(".modal");
		modal[0].style.display = "none";
	}
	</script>
	<script>
	
	function toggleElement(element){
	  if(document.getElementById(element).style.visibility=="hidden"){
	  document.getElementById(element).style.visibility="visible";
	  document.getElementById(element).style.opacity="1";
	  }
	  else{
	  document.getElementById(element).style.opacity="0";
	  setTimeout(function(){document.getElementById(element).style.visibility="hidden";}, 500);
	  
	  }
	}
	
	function hideElement(element){
	  document.getElementById(element).style.opacity="0";
	  setTimeout(function(){document.getElementById(element).style.visibility="hidden";}, 500);
	}
	
	function showSignUp(){
		var modal = document.getElementById("myModal");
		toggleElement('loginB');
		modal.style.display = "block";
	}

	window.onclick = function(event) {
		/// hide login menu when clicked outside
		var items = document.querySelectorAll(".login");
		var element = document.getElementById("loginB");
		var lng = items.length;
		var clicked = 0;
		for(i=0;i<lng;i++){
			if(event.target==items[i]){
				clicked=1;
				break;
			}
		}
		if (clicked==0) {
			element.style.opacity="0";
			setTimeout(function(){element.style.visibility="hidden";}, 500);
		}

		var modal = document.getElementById("myModal");
			if(event.target==modal){
				modal.style.display = "none";
			}
	}
	</script>
	<script>
	$(document).ready(function(){
		$("#loginIcon").click(function(event){
			toggleElement('loginB');
			event.stopPropagation();
		});
		$("#loginb1").click(function(event){
			toggleElement('loginB');
			event.stopPropagation();
		});
		$("#loginb2").click(function(event){
			toggleElement('loginB');
			event.stopPropagation();
		});
		$("#loginb3").click(function(event){
			toggleElement('loginB');
			event.stopPropagation();
		});
		$("#loginb4").click(function(event){
			toggleElement('loginB');
			event.stopPropagation();
		});
	});
	</script>
</head>
<body>


	<div class="nav">
		<div class="sidemenuitem activemenu" onclick="hideContents();showSlides();activeMenu(this);" onmouseover="menuText(this);" onmouseout="menuImage(this);"> <img class="center" src="media\home.png" alt="Home" style="max-width:60px;height:90%;"> </div>
		<div class="sidemenuitem" onclick="showContents();showContent('knowyourself');hideSlides();activeMenu(this);" onmouseover="menuText(this);" onmouseout="menuImage(this);"> <img class="center" src="media\knowyourself.png" alt="About you" style="max-width:60px;height:90%;"> </a> </div>
		<div class="sidemenuitem" onclick="showContents();showContent('aroundus');hideSlides();activeMenu(this);" onmouseover="menuText(this);" onmouseout="menuImage(this);"> <img class="center" src="media\aroundus.png" alt="Around us" style="max-width:60px;height:90%;"> </a></div>
			
		<div class="sidemenuitem" onclick="showContents();showContent('news');hideSlides();activeMenu(this);" onmouseover="menuText(this);" onmouseout="menuImage(this);"> <img class="center" src="media\news.png" alt="News" style="max-width:60px;height:90%;">  </div>
		<div class="sidemenuitem" onclick="showContents();showContent('healthtips');hideSlides();activeMenu(this);" onmouseover="menuText(this);" onmouseout="menuImage(this);" > <img class="center" src="media\healthtips.png" alt="Healthtips" style="max-width:60px;height:90%;">  </div>
		<div class="sidemenuitem" onclick="showContents();showContent('leaveorder');hideSlides();activeMenu(this);" onmouseover="menuText(this);" onmouseout="menuImage(this);" > <img class="center" src="media\leaveyourorder.png" alt="Order Online" style="max-width:60px;height:90%;"> </div>
		<img class="boxshadow" src="media\logo.png" style="max-width:90px;height:100px;" >
	</div>

    <div id="cf" class="slideshow">
	<img src="media\transimg1.png" style="width:100%;" >
	<img src="media\transimg2.png" style="width:100%;">
	<img src="media\transimg3.png" style="width:100%;">
	<img src="media\transimg4.png" style="width:100%;">
</div>

		<div class="contents" id="contentsID" > 

			<div class="contentitem showitem" id="knowyourself"><div class="heading1"> Know About Yourself </div>
			<iframe src="knowyourself/knowYourselffinal.php" id="iFrame1" onload="resizeIframe(this)" frameborder="0"></iframe>
			

			</div>
            <div class="contentitem" id="aroundus" style="height:100%">
			<div class="heading1"> Around Us </div>
			<iframe src="AroundUs/aroundusnew.php" id="iFrame1" frameborder="0" onload="resizeIframe(this)" allowfullscreen></iframe>
			</div>
			
			
			
			
			<div class="contentitem" id="news"> <div class="heading1">News </div>

			<iframe src="News/Newsnew.php" id="iFrame1" frameborder="0" onload="resizeIframe(this)" allowfullscreen></iframe>
			</div>
			
			<div class="contentitem" id="healthtips"> 
			<div class="heading1">Healthtips </div>
			<iframe src="healthtips/healthtips.html" id="iFrame1" onload="resizeIframe(this)" frameborder="0" style="width:100%;height:1800px;position:relative;border:5px solid #d1eefd" allowfullscreen></iframe>
			</div>
			
			
			<div class="contentitem" id="leaveorder"> <div class="heading1">Order Online</div>
			

			
			<iframe src="adminPanel/ordering/orders.php" id="iFrame1" onload="resizeIframe(this)" frameborder="0" style="width:100%;height:1800px;position:relative;border:5px solid #d1eefd" allowfullscreen></iframe>
			
				
			</div>

		</div>


	
	<div class="header">
		<div style="display:table">
		<div style="display: table-row;height: 100%;">

		
		<div class="menubuttonimg login" id="loginIcon">
			
				<div style="display: table-cell;vertical-align: middle;height:100%;padding: 10px;">
					<img src="media\login.png" style="width:auto;height:30px;"  >
				</div>
				<div class="userlabel">
				<?php echo $_SESSION['username'] ?>
				</div>
			
			<div class="loginbox login" id="loginB">
			<br>
				<form action="php/logout.php" method="post">
			<br>
				<div class="textnotify login">
				<h1> Hi
				<?php
					echo $_SESSION['username'];
				?>
				 </h1>
				<br>
				<hr class="login">
				<input class="button buttonlogin login" type="submit" name="submit" value="Log out">
				<br>
				<hr>
					<input class="button buttonlogin login" value="My Account">
                    <hr>
				</div>
			</form>
			</div>
		</div>
		</div>
		</div>
	</div>


	<!--div id="cf1" class="header1">
	<img src="media\log1.png">
	</div-->



	<div class="footer">
		<div class="footerAdr">

		
		<div style="margin:3px;line-height:20px;float:left;">
		No. 112/A, Hospital Road,
		Gampaha, 
		Sri Lanka.
		Tel:033 22 321 12  |  Fax: 033 22 321 10
		</div>
				
		</div>
		
		<div class="footerSec1">
		
		<div style="display:table-cell;vertical-align:inline">
		<div class="btn">
		<a target="_blank" href="https://www.facebook.com/Nextmed-1257898250911790/?skip_nax_wizard=true"><img src="media\follow\fb.png" style="width:100%;" ><a>
		</div>
		</div>

		
		</div>

		


		<div class="footerB">
		<hr>
		Copyright &copy 2016 vLink Solutions

		</div>
	</div>
	<script type="application/javascript">
	function hideContents(){
		var element = document.getElementById('contentsID');
		element.style.display="none";
	}
	
	function showContents(){
		var element = document.getElementById('contentsID');
		element.style.display="inline";
	}


	function hideSlides() {
		var slides = document.getElementById("cf");
		var header = document.getElementById("cf1");
		slides.style.opacity = "0";
		header.style.opacity = "0";
		setTimeout(function(){slides.style.position = "absolute";}, 700);
		
		
	}
	
	function showSlides() {
		var slides = document.getElementById("cf");
		var header = document.getElementById("cf1");
		slides.style.opacity = "1";
		header.style.opacity = "1";
		slides.style.position = "relative";
	}
	
	function activeMenu(menu){
		var menus = document.getElementsByClassName("activemenu");
		menus[0].classList.remove("activemenu");
		menu.classList.add("activemenu");
	}
	
	function menuText(menu){
		var image = menu.querySelectorAll(".center");
		image[0].style.visibility="hidden";
		menu.innerHTML = "";
		menu.innerHTML = image[0].alt;
		menu.appendChild(image[0]);
		
	}
	
	function menuImage(menu){
		var image = menu.querySelectorAll(".center");
		menu.innerHTML = "";
		menu.appendChild(image[0]);
		image[0].style.visibility="visible";
	}
	</script>
<script>
	function resizeIframe(obj) {

		obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
		//alert( obj.contentWindow.document.body.scrollHeight);
	}
</script>
</body>
</html>
