<html>
  <head>
    
    <link type="text/css" rel="stylesheet" href="stock.css" >
           
    </head>

<body bgcolor="#E6E6FA">
  <form id=orders name="orders" action="deletestock_action.php" method="post" enctype="multipart/form-data" onsubmit="return Validate(this);">
    <table align="">
      <tr>
        <td height="40">
          <br>
          <span class="headingbox" > Product ID  &nbsp&nbsp&nbsp &nbsp &nbsp </span>
          <span style="width:100%;text-align:center;">
            <input type="text"  name=PID required  />
          </span>
        </td>
      </tr>
     
     <tr>
    
      
           
        
      <tr>
        <td colspan=5 align=center>
          <input class="button" type=submit name=submit value=Delete>
          <input class="button" type=reset name=reset value=Cancel> </td>
      </tr>
    </table>
  </form>




    </body>
</html>