<?php
	session_start();
	if(isset($_SESSION['loginCst'])&&$_SESSION['loginCst']==1){
		header('location:/../testing/indexreg.php');
	}
	else if(isset($_SESSION['loginEmp'])&&$_SESSION['loginEmp']==1){
		header('location:/../testing/adminPanel/index.php');
	}
	else{
		
	}
?>
<!DOCTYPE html>
<html>
<title> NextMEd </title>
<head>
	<meta http-Equiv="Cache-Control" Content="no-cache" />
	<meta http-Equiv="Pragma" Content="no-cache" />
	<meta http-Equiv="Expires" Content="0" />
	<meta charset="utf-8">
   	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<script src="jquery/jquery.min.js"></script>

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



	window.onclick = function(event) {
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

			}
	}

	$(document).ready(function(){
		$("#loginIcon").click(function(event){
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
	
<div id="myModal" class="modal">
	<div class="modal-content">

	<iframe id="modalFrame" src="Signup/signup.htm" onload="resizeIframe(this)"></iframe>
	</div>
</div>

</div>

	<div class="nav">
		<img class="boxshadow" src="media\logo.png" style="max-width:120px;height:60px;" >
		<div class="sidemenuitem activemenu" onclick="hideContents();showSlides();activeMenu(this);" onmouseover="menuText(this);" onmouseout="menuImage(this);"> <img class="center" src="media\home.png" alt="Home" style="max-width:60px;height:90%;"> </div>
		<div class="sidemenuitem" onclick="showContents();showContent('knowyourself');hideSlides();activeMenu(this);" onmouseover="menuText(this);" onmouseout="menuImage(this);"> <img class="center" src="media\knowyourself.png" alt="About you" style="max-width:60px;height:90%;"> </a> </div>
		<div class="sidemenuitem" onclick="showContents();showContent('aroundus');hideSlides();activeMenu(this);" onmouseover="menuText(this);" onmouseout="menuImage(this);"> <img class="center" src="media\aroundus.png" alt="Around us" style="max-width:60px;height:90%;"> </a></div>
			
		<div class="sidemenuitem" onclick="showContents();showContent('news');hideSlides();activeMenu(this);" onmouseover="menuText(this);" onmouseout="menuImage(this);"> <img class="center" src="media\news.png" alt="News" style="max-width:60px;height:90%;">  </div>
		<div class="sidemenuitem" onclick="showContents();showContent('healthtips');hideSlides();activeMenu(this);" onmouseover="menuText(this);" onmouseout="menuImage(this);" > <img class="center" src="media\healthtips.png" alt="Healthtips" style="max-width:60px;height:90%;">  </div>
		<div class="sidemenuitem" onclick="showContents();showContent('leaveorder');hideSlides();activeMenu(this);" onmouseover="menuText(this);" onmouseout="menuImage(this);" > <img class="center" src="media\leaveyourorder.png" alt="Order Online" style="max-width:60px;height:90%;"> </div>

	</div>


<div id="cf" class="slideshow">
	<img src="media\transimg1.jpg" style="width:100%;" >
	<img src="media\transimg2.jpg" style="width:100%;">
	<img src="media\transimg3.jpg" style="width:100%;">
	<img src="media\transimg4.jpg" style="width:100%;">
</div>

		<div class="contents" id="contentsID" >


			<div class="contentitem" id="home" style="height:100%">
				<iframe src="AroundUs/aroundusnew.php" id="iFrame1" frameborder="0"></iframe>
			</div>

			<div class="contentitem showitem" id="knowyourself"><div class="heading1"> Know About Yourself </div>
			<iframe src="knowyourself/knowYourselffinal.php" id="iFrameknow" frameborder="0" frameborder="0" scrolling="no" onload="resizeIframe(this)"></iframe>

			</div>
			
			<div class="contentitem" id="aroundus" style="height:100%">
			<div class="heading1"> Around Us </div>
			<iframe src="AroundUs/aroundusnew.php" id="iFrame1" frameborder="0" onload="resizeIframe(this)" allowfullscreen></iframe>
			</div>

			
			<div class="contentitem" id="news"> <div class="heading1">News </div>
			<div id="myModal" class="modalBlock">
			
				<div class="modalBlock-content">
				<br>
				 <h3>It appears that you are not logged in to view these contents. </h3><br> <br>
				<button id="loginb3" style="" class="button buttonlogin modalbtn" name="submit" > Login / Sign Up </button>
				<br>
			</div></div>
			
			<iframe src="News/Newsnew.php" id="iFrame1" onload="resizeIframe(this)" onload="resizeIframe(this)" frameborder="0" style="width:100%;position:relative;border:5px solid #d1eefd" allowfullscreen></iframe>

			</div>
			
			<div class="contentitem" id="healthtips"> 
			<div class="heading1">Healthtips </div>
			<iframe src="healthtips/healthtips.html" id="iFrame1" frameborder="0"  onload="resizeIframe(this)" allowfullscreen></iframe>
			</div>
			
			
			<div class="contentitem" id="leaveorder"> <div class="heading1">Order Online</div>
			
			<div id="myModal" class="modalBlock">
			
				<div class="modalBlock-content">
				<br>
				 <h3>It appears that you are not logged in to view these contents. </h3><br> <br>
				<button id="loginb4" style="" class="button buttonlogin modalbtn" name="submit" > Login / Sign Up </button>
				<br>
			</div></div>
			
			<iframe src="adminPanel/ordering/orders.php" id="iFrame1" frameborder="0" onload="resizeIframe(this)" allowfullscreen></iframe>
			
				
			</div>

		</div>


	
	<div class="header">
		<div style="display:table">
		<div style="display: table-row;height: 100%;">
		<div class="menubuttonimg"> 
			<div style="display: table-cell;vertical-align: middle;height:100%;padding: 10px">
				<img src="media\notification.png"  alt="notifications" style="width:auto;height:30px" onclick="toggleElement('note')">
			</div>	
		</div>
		
		<div class="menubuttonimg login" >
				<div id="loginIcon">
					<div style="display: table-cell;vertical-align: middle;height:100%;padding: 10px;">
						<img src="media\login.png" style="width:auto;height:30px;"  >
					</div>
					<div class="userlabel login">
					Guest
					</div>
				</div>
			
			<div class="loginbox login" id="loginB">
			<br>
				<div class="textnote login">
				
				<h1> Login </h1>
				<br>
				<hr class="login">
				<div class="inputs">
				<br>
				<input type="text" style="width:200px;" placeholder="User Id (email)" class="login" name="email" id="emailin" ><br>
				<input type="password" style="width:200px;" placeholder="Password"  class="login" name="password" id="passin" ><br>
				</div>
				<div class="error" id="passError"> error </div>
				<br>
				<input class="button buttonlogin login" name="submit" value="Login" onclick="authenticateUser('emailin', 'passin', 'passError')" >
				<br>
				<br>
				<hr class="login">
				Or<br>
				<input class="button buttonlogin login" value="Sign up" style="vertical-align:middle;" onclick="showSignUp()">
				</div>
			</form>
			</div>
		</div>
		</div>
		</div>
	</div>
	
	<div id="cf1" class="header1">
	<img src="media\log1.png">
	</div>



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
		<div class="btn btnln">
		<img src="media\follow\in.png" style="width:100%;">
		</div>
		<div class="btn btntwt">
		<img src="media\follow\tw.png" style="width:100%;">
		</div>
		<div class="btn btnyt">
		<img src="media\follow\yt.png" style="width:100%;">
		</div>
		</div>

		
		</div>

		


		<div class="footerB">
		<hr>
		Copyright &copy 2016 vLink Solutions

		</div>
	</div>
	</body>
	
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
		//slides.style.opacity = "0";
		header.style.opacity = "0";
		setTimeout(function(){slides.style.position = "absolute";}, 700);
		
		
	}
	
	function showSlides() {
		var slides = document.getElementById("cf");
		var header = document.getElementById("cf1");
		//slides.style.opacity = "1";
		header.style.opacity = "1";
		//slides.style.position = "relative";
	}
	
	
	function authenticateUser(email, password, notify)
    {
		var emailIn = document.getElementById(email);
		var passwordIn = document.getElementById(password);
		var note = document.getElementById(notify);
		note.style.opacity="0";
		if(validateoutNIC(emailIn)){
			authenticateEmp(emailIn, passwordIn, note);
		}
		else{
			authenticateCst(emailIn, passwordIn, note);
		}
		
	}
	
	function authenticateCst(email, password, note)
    {
		note.style.opacity="0";

		var xmlhttp = new XMLHttpRequest();
		
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				var str = xmlhttp.responseText;
				
				if(str.localeCompare("Success")==0){
					window.location = "indexreg.php";
				}
				else{
					note.style.opacity="1";
					note.innerHTML = "invalid username or password";
					note.innerHTML = str;
				}
			}
		};
		xmlhttp.open("GET", "php/login_action_cst.php?email=" + email.value + "&password=" + password.value, true);
		xmlhttp.send();
	}
	
	function authenticateEmp(nic, password, note)
    {
    	alert("EMP");
	note.style.opacity="0";
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var str = xmlhttp.responseText;
			if(str.localeCompare("Success")==0){
				window.location = "adminPanel/index.php";
			}
			else{

				note.style.opacity="1";
				note.innerHTML = xmlhttp.responseText;
				
			}
		}
	};
		xmlhttp.open("GET", "php/login_action_emp.php?nic=" + nic.value + "&password=" + password.value, true);
		xmlhttp.send();
    
	}
	
	function validateoutNIC(element){
		var nicValid = false;
		var str = element.value;
		var strl = str.length;
		var charsToSearch = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "V", "v"];
		var charsToSearch1 = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
		
		if(strl==0){
			nicValid = false;
		}
		else if(strl!=10 && strl!=13&&strl!=0){
			nicValid = false;
		}
		else{
			if(str.length>10){
				if(str.charAt(0)!="1" && str.charAt(0)!="2"){
					nicValid = false;
				}
				else if(str.charAt(0)=="1" && str.charAt(1)!="9"){
					nicValid = false;
				}
				else{
					for(i=0;i<str.length;i++){
						theChar = str.charAt(i);
						if (charsToSearch1.indexOf(theChar) == -1) {
							nicValid = false;
							break;
						}
						if(i==str.length-1) {
							nicValid = true;
						}
					}
				}
			}
			else{
			for(i=0;i<str.length;i++){
					theChar = str.charAt(i);
					if (charsToSearch.indexOf(theChar) == -1) {
						nicValid = false;
						break;
					}
					if(i==str.length-1){
						nicValid = true;
					}
				}
			}
		}
		return nicValid;
   }
   
    function closeIFrame(){
		$('#modalFrame').hide();
		$('#myModal').hide();
	}
	function showSignUp(){
		$('#myModal').show();
		$('#modalFrame').show();
		var modal = document.getElementById("myModal");
		toggleElement('loginB');
		modal.style.display = "block";
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

</html>
