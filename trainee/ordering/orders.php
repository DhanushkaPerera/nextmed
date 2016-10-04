<!DOCTYPE html>
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
      textb.style="border: 3px solid CadetBlue;border-radius: 5px";
      
      
    
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
    div.innerHTML = '<br> Prescription '+i+':<br> <input type="file" required name="Image'+i+'">'
      
      + ' <input type="button" value="-" onclick="removekid(this)">';
    document.getElementById('kids').appendChild(div);
  }
}

function removekid(div) {
  document.getElementById('kids').removeChild(div.parentNode);
  i--;
}
            
            
            </script>
    </head>

     <body bgcolor="#E6E6FA">
        <form name="orders" action="ordering_action.php" method="post" enctype="multipart/form-data" onsubmit="validate()">

            <table align="Center"  >
                <tr>
                <td height="50" width=330>Prescriptions:<div id="kids">

        <input type="file" required name="Image1">
        <input type="button" id="add_kid()" onclick="addkid()" value="+" />(MAX 3)
      </div></td></tr>
               <tr><td height="40">NIC
            <input class="textfill" type=text required name=NIC placeholder="XXXXXXXXXV"  ></td></tr>
            <tr><td >Pick up
                <input   type=radio name=DP  required value="Pickup">

<div style="  float: right;">
                 Delivery
                    <input  class="textfill" type=radio name=DP required value="Delivery" onmouseup="textbox(this)"/></div></td></tr>



            <tr><td height="50"><div>Time
            <input  class="textfill" type=time name=DPTime required></div></td></tr>
            <tr><td height="50"><div>Telephone
            <input  class="textfill" type=text name=Tele required  ></div></td></tr>
            <tr><td height="50"><div>Email
            <input  class="textfill" type=email required name=Email placeholder="mymail@mail.com"  ></div></td></tr>



            <tr><td colspan=5 align=center>
                <input class="button" type=submit name=submit value=Send>
                <input class="button" type=reset name=reset value=Cancel> </td></tr>
            </table>

              </form>

       

    </body>
</html>