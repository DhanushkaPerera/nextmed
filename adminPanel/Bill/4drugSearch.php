<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="style.css">
   

</head>
<body>
    <div id="signup" name="Signup" action="All/signup_action.php" method="post" onsubmit="return password()">
	<div class="close" onclick="parent.closeIFrame();"> X </div>
			<br>
			<div style="width:100%;text-align:center; ">
            <h3>Drug Search</h3> </div>
        <div class="sep"></div>
		
            <div class="inputs">
                <!-- user NIC input -->
                <div class="column">
                    <div class="headingbox" id="hBoxNIC" > Brand Name  </div>
                    <div class="inputboxWrap">
                        <input type="text" placeholder="" maxlength="13" name=nic onfocus="headingBoxActive('hBoxNIC')" onkeyup="validateNIC(this)"   onfocusout="upperCASE(this);hide('NICerror');validateoutNIC(this);validatedAll();" />
                    </div>
                    <div class="poperror" id="NICerror" ></div>
                    <div class="error" id="nicerror2" > error occured </div><br>

                    


                </div>

                <div class="column" style="clear: right;">
                     <!-- user First Name input -->
                    <div class="headingbox" id="hBoxFN" >   Generic Name </div>
                    <div class="inputboxWrap" >
                        <input type="text"   name=firstname onfocus="headingBoxActive('hBoxFN')" onkeydown="validateString(this, 'nameerror')" onfocusout="hide('nameerror');validateoutString(this, 'nameerror2');validatedAll();" /><br>
                    </div>
                    <div class="poperror" id="nameerror" ></div>
                    <div class="error" id="nameerror2" > error occured </div><br>


                    


                </div>
				
				<div class="column">
                    <div class="headingbox" id="hBoxNIC" > Dosage Form </div>
                    <div class="inputboxWrap">
                        <select>
						<option value="Capsule">Dosage Form</option>
							<option value="Capsule">Capsule</option>
	<option value="Tablet">Tablet</option>
	<option value="Pill">Pill</option>
	<option value="Syrup">Syrup</option>
	<option value="Cream">Cream</option>
	<option value="Liquid">Liquid</option>
	<option value="Gel">Gel</option>
	<option value="Balm">Balm</option>
	<option value="Lotion">Lotion</option>
	<option value="Ointment">Ointment</option>
	<option value="Ear drops">Ear drops</option>
	<option value="Eye drops">Eye drops</option>
</select>
						
                    </div>
                    <div class="poperror" id="NICerror" ></div>
                    <div class="error" id="nicerror2" > error occured </div><br>

                    


                </div>
				
				<div class="column">
                    <div class="headingbox" id="hBoxNIC" > Strength </div>
                    <div class="inputboxWrap">
                        <select name=Strength  onfocus="headingBoxActive('hBoxSTR')" onfocusout="headingBoxInactive('hBoxSTR')" >
	<option value="" disabled selected  > Strength </option>
	<option value="10mg">10mg</option>
	<option value="10ml">10ml</option>
	<option value="1spoon">1spoon</option>
	<option value="1drop">1drop</option>
	<option value="1capsule">1capsule</option>
	<option value="1tablet">1tablet</option>
	<option value="1pill">1pill</option>
	</select>
                    </div>
                    <div class="poperror" id="NICerror" ></div>
                    <div class="error" id="nicerror2" > error occured </div><br>

                    


                </div>

                

                <div style="width:100%;text-align:center; " >
                

                <input class="buttonDis"  type="submit" name=submit value=Search id="submitButton" disabled onclick="validatedAll();parent.parent.closeIFrame();" >
				                <button class="buttonS" onclick="parent.parent.closeIFrame();" > Cancel </button>

                </div>

		</div>
    </div>
</body>
   <script>
   var nicValid = false;
   var fnameValid = false;
   var lnameValid = false;
   var genderValid = false;
   var bdayValid = false;
   var addressValid = false;
   var civilStatValid = false;
   var occpValid = false;
   var phNoValid = false;
   var bdGrpValid = false;
   var emailValid = false;
   var passValid = false;
   var passfirst = true;

   function headingBoxActive(box){
	var element = document.getElementById(box);
	element.style.background =  "#0099cc";
	element.style.color = "white";
   }

   function headingBoxAlert(box, thisValid){
	if(!thisValid){
		var element = document.getElementById(box);
		element.style.background =  "#ff6768";
		element.style.color = "white";
	}
	else{
		var element = document.getElementById(box);
		element.style.background =  "white";
		element.style.color = "black";
	}
   }

   function headingBoxInactive(box){

   }

   function hide(id){
		var element = document.getElementById(id);
		element.style.opacity = "0";
   }
   function show(id){
		var element = document.getElementById(id);
		element.style.opacity = "1";
   }
	function validateoutNIC(element){
		var str = element.value;
		var strl = str.length;
		var notify = document.getElementById("nicerror2");
		var charsToSearch = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "V", "v"];
		var charsToSearch1 = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

		if(strl==0){
		notify.innerHTML = "Not a valid NIC";
			nicValid = false;
			headingBoxAlert('hBoxNIC', nicValid);
			element.style.border = "2px solid #ff6768";
			notify.style.opacity="1";
		}
		else if(strl!=10 && strl!=13&&strl!=0){
			notify.innerHTML = "Not a valid NIC";
			nicValid = false;
			headingBoxAlert('hBoxNIC', nicValid);
			element.style.border = "2px solid #ff6768";
			notify.style.opacity="1";
		}
		else{
			if(str.length>10){
				if(str.charAt(0)!="1" && str.charAt(0)!="2"){
					notify.innerHTML = "Not a valid NIC";
					element.style.border = "2px solid #ff6768";
					notify.style.opacity="1";
					nicValid = false;
					headingBoxAlert('hBoxNIC', nicValid);
				}
				else if(str.charAt(0)=="1" && str.charAt(1)!="9"){
					notify.innerHTML = "Not a valid NIC";
					element.style.border = "2px solid #ff6768";
					notify.style.opacity="1";
					nicValid = false;
					headingBoxAlert('hBoxNIC', nicValid);
				}
				else{
					for(i=0;i<str.length;i++){
						theChar = str.charAt(i);

						if (charsToSearch1.indexOf(theChar) == -1) {
							notify.innerHTML = "Not a valid NIC";
							element.style.border = "2px solid #ff6768";
							notify.style.opacity="1";
							nicValid = false;
							headingBoxAlert('hBoxNIC', nicValid);
							break;
						}
						if(i==str.length-1) {
							notify.style.opacity="0";
							element.style.border = "none";
							verifyNIC(element, notify);
						}
					}
				}
			}
			else{
			for(i=0;i<str.length;i++){
					theChar = str.charAt(i);
					if (charsToSearch.indexOf(theChar) == -1) {
						notify.innerHTML = "Not a valid NIC";
						element.style.border = "2px solid #ff6768";
						notify.style.opacity="1";
						nicValid = false;
						headingBoxAlert('hBoxNIC', nicValid);
						break;
					}
					if(i==str.length-1){
						notify.style.opacity="0";
						element.style.border = "none";
						verifyNIC(element, notify);
					}
				}
			}
		}
   }

   	function validateString(element, errorPOP){
		var str = element.value;
		var strl = str.length;
		var notify = document.getElementById(errorPOP);
		var lastChar = str.charCodeAt(strl-1);

		if(strl<2) element.value = element.value.toUpperCase();
		if(strl>=2){
			if (!((64<lastChar && lastChar<91) ||(96<lastChar && lastChar<123))) {
				element.value = str.substring(0, strl-1);
				notify.innerHTML = "Can contain only letters.";
				notify.style.opacity="1";
			}
			else{
				notify.style.opacity="0";
			}
		}
	}

	function validateoutString(element, errorCODE){
		var str = element.value;
		var validateThis = false;
		var strl = str.length;
		var notify = document.getElementById(errorCODE);
		var name = element.getAttribute("name");
		if(strl<2) element.value = element.value.toUpperCase();
		if(strl==0) {
			notify.innerHTML = "Please recheck, not a valid input";
			element.style.border = "2px solid #ff6768";
			notify.style.opacity="1";
			validateThis = false;
		}
		for(i=0;i<strl;i++){
			var lastChar = str.charCodeAt(i);
			if (!((64<lastChar && lastChar<91) ||(96<lastChar && lastChar<123))) {
				notify.innerHTML = "Please recheck, not a valid input";
				element.style.border = "2px solid #ff6768";
				notify.style.opacity="1";
				validateThis = false;
				break
			}
			if(i==strl-1){
				notify.style.opacity="0";
				element.style.border = "none";
				validateThis = true;

			}
		}
		if(name=="firstname") {
			fnameValid = validateThis;
			headingBoxAlert('hBoxFN', fnameValid);
		}
		else if(name=="lastname") {
			lnameValid = validateThis;
			headingBoxAlert('hBoxLN', lnameValid);
			}
		else if(name=="occupation") {
			occpValid = validateThis;
			headingBoxAlert('hBoxOC', lnameValid);
		}
	}


   function validateNIC(element){
		var notify = document.getElementById("NICerror");
		var str = element.value;
		var charsToSearch = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "V", "v"];
		var charsToSearch1 = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
		if(str.length>10){
			for(i=0;i<str.length;i++){
				theChar = str.charAt(i);
				if (charsToSearch1.indexOf(theChar) == -1) {
					notify.style.opacity="1";
					notify.innerHTML = "New NIC can contain only numbers";
					break;
				}
				if(i==str.length-1) notify.style.opacity="0";
			}
		}
		else{
			for(i=0;i<str.length;i++){
				theChar = str.charAt(i);
				if (charsToSearch.indexOf(theChar) == -1) {
					notify.style.opacity="1";
					notify.innerHTML = "Old NIC can contain only numbers and V";
					break;
				}
				if(i==str.length-1) notify.style.opacity="0";
			}
		}

   }



   function upperCASE(element){
		element.value = element.value.toUpperCase();
   }

	function validateDate(element, errorCODE){
		var strN = element.value;
		var str = element.value.split("-");
		var notify = document.getElementById(errorCODE);
		var age = calculate_age(str[1],str[2],str[0]);

		if(strN.length==0) {
			notify.innerHTML = "Birthday must be specified";
			element.style.border = "2px solid #ff6768";
			notify.style.opacity="1";
			bdayValid = false;
			headingBoxAlert('hBoxBdate', bdayValid);
		}

		else if(age<18){
			notify.innerHTML = "sorry you must be at least 18 years old.";
			element.style.border = "2px solid #ff6768";
			notify.style.opacity="1";
			bdayValid = false;
			headingBoxAlert('hBoxBdate', bdayValid);
		}
		else{
			notify.style.opacity="0";
			element.style.border = "none";
			bdayValid = true;
			headingBoxAlert('hBoxBdate', bdayValid);
		}

	}

	function calculate_age(birth_month,birth_day,birth_year)
	{
	today_date = new Date();
	today_year = today_date.getFullYear();
	today_month = today_date.getMonth();
	today_day = today_date.getDate();
	age = today_year - birth_year;

	if ( today_month < (birth_month - 1))
	{
		age--;
	}
	if (((birth_month - 1) == today_month) && (today_day < birth_day))
	{
		age--;
	}
	return age;
	}

	function validatePhoneNo(element, errorCODE){
		var str = element.value;
		var charsToSearch = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
		var notify = document.getElementById(errorCODE);
		if(str==null) {
			notify.innerHTML = "Phone no must be specified";
			element.style.border = "2px solid #ff6768";
			notify.style.opacity="1";
			phNoValid = false;
			headingBoxAlert('hBoxPN', phNoValid);
		}
		else if(str.length!=10){
			notify.innerHTML = "Invalid phone number.";
			element.style.border = "2px solid #ff6768";
			notify.style.opacity="1";
			phNoValid = false;
			headingBoxAlert('hBoxPN', phNoValid);
		}
		else{

		for(i=0;i<str.length;i++){
				theChar = str.charAt(i);
				if (charsToSearch.indexOf(theChar) == -1) {
					notify.style.opacity="1";
					notify.innerHTML = "Invalid phone number.";
					element.style.border = "2px solid #ff6768";
					phNoValid = false;
					headingBoxAlert('hBoxPN', phNoValid);
					break;
				}
				if(i==str.length-1) {
					notify.style.opacity="0";
					element.style.border = "none";
					phNoValid = true;
					headingBoxAlert('hBoxPN', phNoValid);
				}
			}
		}
	}
	function hideElement(elementID) {
        element = document.getElementById(elementID);
        element.style.display="none";
    }
	function validateEmail(element, errorCODE){
		var str = element.value;
		var dotCount = 0;
		var atCount = 0;
		var notify = document.getElementById(errorCODE);
		if(str==null) {
			notify.innerHTML = "Email must be specified";
			element.style.border = "2px solid #ff6768";
			notify.style.opacity="1";
			emailValid = false;
			headingBoxAlert('hBoxEM', emailValid);
		}
		else if(str.length<6){
			notify.innerHTML = "Invalid email.";
			element.style.border = "2px solid #ff6768";
			notify.style.opacity="1";
			emailValid = false;
			headingBoxAlert('hBoxEM', emailValid);
		}
		else{
			for(i=0;i<str.length;i++){
					theChar = str.charAt(i);
					if ('@'== str.charAt(i)) {
						atCount++;
					}
					else if('.'==str.charAt(i)) {
						dotCount++;
					}
			}
			if(atCount==dotCount && atCount==1){
				element.style.border = "none";
				notify.style.opacity="0";
				emailValid = true;
				headingBoxAlert('hBoxEM', emailValid);
			}
			else{
				notify.innerHTML = "Invalid email.";
				element.style.border = "2px solid #ff6768";
				notify.style.opacity="1";
				emailValid = false;
				headingBoxAlert('hBoxEM', emailValid);
			}
		}
	}
	function validatePassC(element, errorCODE, elementPass){
		if(passfirst){
			validatePass(element, errorCODE, elementPass);
		}
		else{
			headingBoxAlert('hBoxPS', !passValid);
		}
	}

	function validatePass(element, errorCODE, elementPass){

		var str = element.value;
		var dotCount = 0;
		var atCount = 0;
		var notify = document.getElementById(errorCODE);
		var elementP = document.getElementById(elementPass);
		var strP = elementP.value;

		if(str!=strP) {
			element.style.border = "2px solid #ff6768";
			elementP.style.border = "2px solid #ff6768";
			notify.innerHTML = "passwords doesn't match.";
			notify.style.opacity="1";
			passValid = false;
			headingBoxAlert('hBoxPS', passValid);
			headingBoxAlert('hBoxCP', passValid);
		}
		else if(strP.length==0){
			element.style.border = "2px solid #ff6768";
			elementP.style.border = "2px solid #ff6768";
			notify.innerHTML = "password is required";
			notify.style.opacity="1";
			passValid = false;
			headingBoxAlert('hBoxPS', passValid);
			headingBoxAlert('hBoxCP', passValid);
		}
		else if(strP.length<6){
			element.style.border = "2px solid #ff6768";
			elementP.style.border = "2px solid #ff6768";
			notify.innerHTML = "password is too short";
			notify.style.opacity="1";
			passValid = false;
			headingBoxAlert('hBoxPS', passValid);
			headingBoxAlert('hBoxCP', passValid);
		}

 		else{
			element.style.border = "none";
			elementP.style.border = "none";
			notify.style.opacity="0";
			passValid = true;
			headingBoxAlert('hBoxPS', passValid);
			headingBoxAlert('hBoxCP', passValid);
		}
	}

	function validatedAll(){
		//alert("nic "+nicValid+",fname "+fnameValid+",lname "+lnameValid+",genderValid "+ genderValid+",bdayValid "+ "bday" + bdayValid+ +  "phpNo" + phNoValid  + "email" + emailValid + passValid);
		var element = document.getElementById("submitButton");
		var elementCheck = document.getElementById("checkAgree");
		var agree = elementCheck.checked;
		
		if(nicValid && fnameValid && lnameValid && genderValid && bdayValid&& phNoValid && emailValid && passValid && agree){
			element.className = "inputs buttonS";
			element.disabled = false;
		}
		else{
			element.className = "inputs buttonDis";
			element.disabled = true;
		}
	}
	
	function validateList(element, errorCODE){
		var validList = false;
		var name = element.getAttribute("name");
		var str = element.value;
		var notify = document.getElementById(errorCODE);

		if(str=="") {
			element.style.border = "2px solid #ff6768";
			notify.innerHTML = "please select a option.";
			notify.style.opacity="1";
			validList = false;
		}
 		else{
			element.style.border = "none";
			notify.style.opacity="0";
			validList = true;
		}
		if(name=="civil") {
			civilStatValid = validList;
			headingBoxAlert('hBoxCS', civilStatValid);
		}
		
		else if(name=="bloodgroup") {
			bdGrpValid = validList;
			headingBoxAlert('hBoxBG', bdGrpValid);
		
		}
		else if(name=="gender") {
		genderValid = validList;
		headingBoxAlert('hBoxGen', genderValid);
		}
	}
	
	function validateAddr(element, errorCODE){
		var str = element.value;
		var strl = str.length;
		var notify = document.getElementById(errorCODE);
		if(strl==0) {
			notify.innerHTML = "Not a valid address";
			element.style.border = "2px solid #ff6768";
			notify.style.opacity="1";
			addressValid = false;
			headingBoxAlert('hBoxAdrs', addressValid);
		}
		else{
			notify.style.opacity="0";
			element.style.border = "none";
			addressValid = true;
			headingBoxAlert('hBoxAdrs', addressValid);
		}

	}
	
	function notice(errorCODE){
		var notify = document.getElementById(errorCODE);
		notify.innerHTML = "this is a required field."
	}
	
	function verifyNIC(element, notify)
    {

	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			notify.innerHTML = xmlhttp.responseText;
			var str = xmlhttp.responseText;
			if(str.length>0){

				notify.style.opacity="1";
				notify.innerHTML = xmlhttp.responseText;
				element.style.border = "2px solid #ff6768";
				headingBoxAlert('hBoxNIC', nicValid);
				
			}
			else{
				notify.style.opacity="0";
				element.style.border = "none";
				nicValid = true;
				headingBoxAlert('hBoxNIC', nicValid);
			}
		}
	};
	xmlhttp.open("GET", "../php/checkNIC.php?nicN=" + element.value, true);
	xmlhttp.send();
    
	}

	function toggleAnimate(button, elementID) {
        element = document.getElementById(elementID);
        if (button.innerHTML=="Add more details"){
            button.innerHTML="Hide";
            element.style.maxHeight="300px";
        }
        else{
            button.innerHTML="Add more details";
            element.style.maxHeight="0px";
        }

    }

	</script>