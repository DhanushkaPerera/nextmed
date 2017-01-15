<html>
  <head>
    <style>input.textfill {
        float: center;
    }
	  
		.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 60%;
	
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #e35152;
    color: white;
	
}

.modal-body {padding: 2px 16px;
height: 5%;
}

.modal-footer {
    padding: 2px 16px;
    background-color: #e35152Red;
    color: white;
}
	  </style>
    <link type="text/css" rel="stylesheet" href="ordering.css" >
            
	  
	  <script type="text/javascript">
                      
                
           var textbox = function(me){
  if(me.checked == false){
    var textb = document.createElement('textarea');
    
    textb.name = "Address";
      
      textb.id="Address";
      
      textb.required=true;
      
      
      
    
      textb.placeholder="Address";
    me.parentNode.appendChild(textb);
     
			
  }
  setInterval(function(){
    if(me.checked == false){
       me.parentNode.removeChild(textb);
       return false;
    }
  });
}; 
    
            var i = 1;

function addkid() {
    if (i <= 2) {
        i++;
        var div = document.createElement('div');
        div.innerHTML ='<br><div class="headingbox">'+ 'Prescription Copy-'+i+':'+'</div>'+'<br><input id="uploadFile-' + i + '" class="disableInputField" placeholder="Choose File" disabled="disabled" />'+'<label class="fileUpload">'+'<input id="uploadBtn-' + i + '" type="file" required class="upload" name="Image'+i+'" />'+'<span class="uploadBtn-' + i + '">Upload</span>'+'</label>'+'  <input id=remove type="button" value="-" onclick="removekid(this)">';
        document.getElementById('kids').appendChild(div);
        
        document.getElementById("uploadBtn-" + i).onchange = function()  {
            document.getElementById("uploadFile-"+i).value = this.value;
        };
    }
}
   


function removekid(div) {
  document.getElementById('kids').removeChild(div.parentNode);
  i--;
}

         
            
            </script>
    </head>

<body bgcolor="#E6E6FA">
  <form id=orders name="orders" action="orders_action.php" method="post" enctype="multipart/form-data" onsubmit="return Validate(this);">
    <table align="">
      <tr>
        <td height="40" width="500">
          <br>
          <span class="headingbox" id="hBoxNIC"> National ID &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </span>
          <span style="width:100%;text-align:center;">
            <input type="text" placeholder="920290505v" maxlength="13" name=NIC required autofocus />
          </span>
        </td>
      </tr>
      <tr>
        <td height=50 colspan="2">
          <span class="headingboxs"  style="align=center">Pick up</span>
          <input type=radio name=DP required value="Pickup" align=center>
          <span style="  float: center;">
            <span class="headingboxs">
              Delivery</span>
            <input class="textfill" type=radio name=DP required value="Delivery" onmouseup="textbox(this)" />
          </span>
          <br>
          <br>
        </td>
      </tr>
      <tr>
        <td height="50">
          <span class="headingbox">Expected Time &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </span>
          <span style="width:100%;text-align:center;">
            <input type="time" id=time autofocus name=DPTime onfocusout="hid('timeerror2');" onfocus="show('timeerror2');" min="09:00:00" max="22:00:00" onblur="timeError()" />
            <br>
          </span>
          <span class="poperror" id="timeerror2"> Pharmacy is opened from 9AM to 10PM </span>
        </td>
      </tr>
      <tr>
        <td height="50">
          <span class="headingbox" id="hBoxPN"> Phone Number &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </span>
          <span style="width:100%;text-align:center;">
            <input type="text" maxlength=10; autofocus name=Tele />
            <br>
          </span>
          <span class="error" id="phoneerror"> error occured </span>
          <br>
        </td>
      </tr>
      <tr>
        <td height="50">
          <span class="headingbox" id="hBoxEM"> E-mail &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
          <span style="width:100%;text-align:center;">
            <input type="text" autofocus name=Email placeholder="xxx@gmail.com" />
           
          </span>
    
          
        </td>
      </tr>
         <tr>
                    <td height="50" width=330><br><div class="headingbox"> Prescription Copy-1 </div> <div id="kids">

<input id="uploadFile" class="disableInputField" placeholder="Choose File" disabled="disabled" />


<label class="fileUpload ">
    <input id="uploadBtn" type="file" class="upload" name=Image1 />
    <span class="uploadBtn">Upload </span>
</label>
    
    
        
        <input type="button" id="add" onclick="addkid()" value="+" />
                        
      </div></td></tr>
                <script>
                document.getElementById("uploadBtn" ).onchange = function()  {
            document.getElementById("uploadFile").value = this.value;
        };
    </script>
               
           
        </div></td></tr>
      <tr>
        <td colspan=5 align=center>
          <input class="button" type=submit name=submit value=Place>
          <input class="button" type=reset name=reset value=Cancel> </td>
      </tr>
    </table>
  </form>

<div id="white-background">
        </div>
        <div id="dlgbox">
            <div id="dlg-header"></div>
            <div id="dlg-body">Sorry a digital copy may be of a wrong file format! Formats allowed are ".jpg", ".jpeg", ".bmp", ".gif", ".png"</div>
            <div id="dlg-footer">
                <button onclick="dlgLogin()">Ok</button>
            </div>
</div>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Alert</h2>
    </div>
    <div class="modal-body">
      <p>Some text in the Modal Body</p>
      <p>Some other text...</p>
    </div>
    <div class="modal-footer">
      <h3></h3>
    </div>
  </div>

</div>






<script type="text/javascript">
        function hid(id){
		var element = document.getElementById(id);
		element.style.opacity = "0";
   }
   function show(id){
		var element = document.getElementById(id);
		element.style.opacity = "1";
   }
	
	
   


          
           var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];    
function Validate(oForm) {
    var arrInputs = oForm.getElementsByTagName("input");
    for (var i = 0; i < arrInputs.length; i++) {
        var oInput = arrInputs[i];
        if (oInput.type == "file") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }
                
                if (!blnValid) {
                   
                    showDialog();
                    
                    return false;
                }
            }
        }
    }
  
    return true;
}
    function dlgLogin(){
                var whitebg = document.getElementById("white-background");
                var dlg = document.getElementById("dlgbox");
                whitebg.style.display = "none";
                dlg.style.display = "none";
            }
         
	function showDialog(){
                var whitebg = document.getElementById("white-background");
                var dlg = document.getElementById("dlgbox");
                whitebg.style.display = "block";
                dlg.style.display = "block";
                
                var winWidth = window.innerWidth;
                var winHeight = window.innerHeight;
                
                dlg.style.left = (winWidth/2) - 480/2 + "px";
                dlg.style.top = "150px";
            }   
            
	
	
	
	
	
	function dlgLogin2(){
                var whitebg = document.getElementById("grey-background");
                var dlg = document.getElementById("dialogbox");
                whitebg.style.display = "none";
                dlg.style.display = "none";
            }
            
            function showDialog2(){
                var whitebg = document.getElementById("grey-background");
                var dlg = document.getElementById("dialogbox");
                whitebg.style.display = "block";
                dlg.style.display = "block";
                
                var winWidth = window.innerWidth;
                var winHeight = window.innerHeight;
                
                dlg.style.left = (winWidth/2) - 480/2 + "px";
                dlg.style.top = "150px";
            }
	
	
	function timeError(){
	var element = document.getElementById("time").value;
	var d = new Date();
  var m = d.getMinutes();
  var h = d.getHours();
   if(h == '0') {h = 24}
  
  var currentTime = h+"."+m;
  console.log(currentTime);
 
  // get input time
  var time = element.split(":");
  var hour = time[0];
  if(hour == '00') {hour = 24}
  var min = time[1];
  
  var inputTime = hour+"."+min;
  console.log(inputTime);
  
  var totalTime =   inputTime-currentTime;
  console.log(totalTime);
  
  if (totalTime<1  ) {
	  document.getElementById('time').style.background ='#e35152';
	modal.style.display = "block";
modal.querySelector('.modal-body').innerHTML="<p>Dear customer please enter a time one hour in advance! Thank you! </p>";
	  
  
 
  } 
  else {
	  	 document.getElementById('time').style.background ='white';
     
       
  }
}
	
	
          	
         </script> 
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

    </body>
</html>