<html>
  <head>
    <style>input.textfill {
        float: right;
    }</style>
    <link type="text/css" rel="stylesheet" href="order.css" >
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
        <td height="40">
          <br>
          <span class="headingbox" id="hBoxNIC"> National ID &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp </span>
          <span style="width:100%;text-align:center;">
            <input type="text" placeholder="920290505v" maxlength="13" name=NIC required autofocus />
          </span>
        </td>
      </tr>
      <tr>
        <td height=50>
          <span class="headingboxs">Pick up</span>
          <input type=radio name=DP required value="Pickup">
          <span style="  float: right;">
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
            <input type="time" id=time autofocus name=DPTime onfocusout="hid('timeerror2');" onfocus="show('timeerror2');" min="09:00:00" max="22:00:00" />
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
          <span class="error" id="emailerror"> error occured </span>
          
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
          	
         </script> 

    </body>
</html>