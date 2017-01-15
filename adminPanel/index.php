<?php
session_start();
if(isset($_SESSION['loginEmp'])&&$_SESSION['loginEmp']==1){

}
else{
	header('location:/../testing/index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="stylesheet.css">
	<script src="../jquery/jquery.min.js"></script>
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
	});
	</script>
	<script>
	function toggleElement(elementID){
			var element = document.getElementById(elementID);
			console.log(element.innerHTML);
			if(element.style.visibility=="hidden"){
				element.style.visibility="visible";
				element.style.opacity="1";
			}
			else{
				element.style.opacity="0";
				setTimeout(function(){element.style.visibility="hidden";}, 500);
			}
		}
	</script>
</head>
<body>
	


</div>

	<div class="nav">
		<img class="boxshadow" src="..\media\logo.png" style="max-width:120px;height:60px;" >
		<div class="sidemenuitem  activemenu" onclick="showContent('Search');activeMenu(this);" onmouseover="menuText(this);" onmouseout="menuImage(this);"> <img class="center"  src="media\search.png" alt="Search" style="height:90%;"> </div>
		
		<div class="sidemenuitem" onclick="showContent('Billing');activeMenu(this);" onmouseover="menuText(this);" onmouseout="menuImage(this);"> <img class="center" src="media\billing-icon.png" alt="Billing" style="height:90%;"> </a> </div>
		<div class="sidemenuitem" onclick="showContent('Stock');activeMenu(this);" onmouseover="menuText(this);" onmouseout="menuImage(this);"> <img class="center" src="media\stock-manage.png" alt="Stock Management" style="height:90%;"> </div>
		<div class="sidemenuitem" onclick="showContent('Backup');activeMenu(this);" onmouseover="menuText(this);" onmouseout="menuImage(this);"> <img class="center" src="media\backup.png" alt="Backup" style="height:90%;"> </div>
		<div class="sidemenuitem" onclick="showContent('Notice');activeMenu(this);" onmouseover="menuText(this);" onmouseout="menuImage(this);"> <img class="center" src="media\notice.png" alt="Operations" style="height:90%;"> </div>
		<!--div class="sidemenuitem" onclick="showContent('UserManage');activeMenu(this);" onmouseover="menuText(this);" onmouseout="menuImage(this);"> <img class="center" src="media\user-manage.png" alt="User Management" style="height:90%;"> </div-->
	</div>
	

	<div class="contents">
			<div class="contentitem showitem" id="Search">
				<div class="heading1" style="display: inline-block;">Search for Alternatives</div><br>
				<iframe id="iFrameSearch" src="Search/Search.php" style="height:900px;width:100%" frameborder="0" onload="resizeIframe(this)" > </iframe>
				
			</div>
			
			<div class="contentitem" id="Billing"><div class="heading1"> Billing </div>
			<iframe src="Bill/billing.php" style="height:1300px;width:100%" frameborder="0" onload="resizeIframe(this)" > </iframe>
			</div>
			
			
			<div class="contentitem" id="Stock"> <div class="heading1">Stock Management</div>
			<iframe src="Stock/admin.php" style="height:800px;width:120%" frameborder="0"  > </iframe>
			</div>
		<div class="contentitem" id="Backup"> <div class="heading1">Backup System</div>
			<iframe  src="BackupSystem/backup.php" style="width:120%" frameborder="0" onload="resizeIframe(this)" > </iframe>
		</div>
			<div class="contentitem" id="Notice"> <div class="heading1">Operations </div>
				<iframe  src="addinfo/addinfo.html" style="width:120%" frameborder="0" onload="resizeIframe(this)" > </iframe>
			</div>
		<!--div class="contentitem" id="UserManage"> <div class="heading1">User Manage </div>
			<iframe  src="" style="width:120%" frameborder="0" onload="resizeIframe(this)" > </iframe>
		</div-->


	</div>


	<div class="header">
		<div class="menubuttonimg">
			<img src="media\notification.png"  alt="notifications" style="height:100%" onclick="toggleElement('notify')">
			<div class="notifybox" id="notify">
				<img src="media\under-construction.gif"  alt="notifications" style="height:100%">
			</div>
			</div>
		<div class="menubuttonimg login"  >
			<img src="media\login.png" style="height:100%;" id="loginIcon" >
			<div class="loginbox login" id="loginB">
			<form action="logout.php" method="post">
			<br>
				<div class="textnotify login">
				<h1> You are logged in </h1>
				<br>
				<hr class="login">
				<input class="button buttonlogin login" type="submit" name="submit" value="Log out">
				<br>
				<br>
				</div>
			</form>
			</div>

		</div>
	</div>

<script>
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
	function resizeIframeID(elemelentID) {

		var obj = document.getElementById(elemelentID);
		var table = obj.contentWindow.document.getElementById('tableDrug');
		$(table).height();
		console.log(table.id);
		var obj = document.getElementById(elemelentID);
		console.log(obj.id);
		$(obj).height(170+ $(table).height());
		//alert( obj.contentWindow.document.body.scrollHeight);
	}
</script>


</body>

</html>
