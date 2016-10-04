<!DOCTYPE html>
<html>
<head><link type="text/css" rel="stylesheet" href="order.css" ></head>
<body bgcolor="#E6E6FA">
    <form action="order_action.php" method="post" enctype="multipart/form-data" >
  
        <table align="Center"  >
        <tr ><th   >Leave your order</th></tr>
        <tr><td height="40">NIC </td>
        <td><input class="textfill" type=text name=NIC placeholder="XXXXXXXXXV"  ></td></tr>
        <tr><td height="50">Delivery
        <input  class="textfill" type=radio name=DP value="Delivery"></td>
        <td><label>Pick up</label>
        <input   type=radio name=DP value="Pickup"></td></tr>
        <tr><td  height="50">Address<br>(For deliveries only)</td>
            <td><textarea  class="textfill" name=Address></textarea></td></tr>
        
        <tr><td height="50">Delivery/Pickup time</td>
        <td><input  class="textfill" type=time name=DPTime></td></tr>
        <tr><td height="50">Telephone(Mandatory)</td>
        <td><input  class="textfill" type=text name=Tele   ></td></tr> 
        <tr><td height="50">Email</td>
         <td><input  class="textfill" type=email name=Email placeholder="mymail@mail.com"  ></td></tr>
        
        <tr><td height="50">Upload prescription</td>
        <td><input type="file" name="Image" >
            
           
            
            
            </td></tr> 
        
        <tr><td colspan=5 align=center>
            <input class="button" type=submit name=submit value=Send>
            <input class="button" type=reset name=reset value=Cancel> </td></tr>
        </table>
        
               
        
          
          
          </form>
    </body>
</html>