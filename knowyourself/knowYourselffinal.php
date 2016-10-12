<html>
<head>
<title>Know yourself</title>
</head>
<link rel="stylesheet" type="text/css" href="knowYourself.css">
<link rel="stylesheet" type="text/css" href="signup.css">

<body>

	<h1 align=center> Get a Checkup!</h1>
	
		<div id=column1 align=center>
			<div><img class=logo src="image/bmiiii.png"></div>
			
			<table id="inputtable">
				<tr>
					<td>
					<form>
						<label >Height : </label>
							<input id="height" type=text name="h" placeholder="x.xx"> m
							<br><br>
						<label>Weight : </label>
							<input id="weight" type=text name="w" placeholder="xxx.xx"> kg
							<br><br>
						<input type="button" value="CALCULATE"   onclick="calBMI();result();">
						<input type="reset" value="RESET"  onclick="erase()">
						<br><br>
                        <label id = "bmi"></label><br>
                        <label id = "result"></label>
					</form>
					</td>
				</tr>
			</table>
			
			
		<!--<img src="image/bmii.png">-->
		</div>
		<br>
		<br>
		
		<div id=column2 align=center>

		
			<img class=logo src="image/donate.png">
			
			<table id="inputtable">
				<tr>
					<td>
						<form>
						<label>Blood Group : </label>
					
						<select id="group" name=bg>
							<option value="o">O</option>
							<option value="a">A</option>
							<option value="b">B</option>
							<option value="ab">AB</option>
						</select>
						<br><br>
						<input type="button" value="To whom can I donate ?"   onclick="donate()">							
						<br><br>
                            <label id = "donate"></label>
                            <br><br>
						<input type="button" value="From whom can I receive ?" onclick="receive()">
                            <br><br>
                             <label id = "receive"></label>
                            
						</form>						
					</td>	
				</tr>
			</table>
			<!--<img src="image/bloodgroup.png">-->	
		</div>
		<br>
		<br><br>
		

		<div id=column3 align=center>
		
			<img class=logo src="image/pulse.png">
       <form>
                <table id="inputtable">
				<tr>
					<td align="center">
                        
						
						<label>Pulse rate : </label>
                        <input id="rate" type=text  placeholder="xxx"> per minute <br><br>
					
						<select id="age" name=age>
								<option value="age1">0-12 months</option>								
								<option value="age2">1-18 years</option>
								<option value="age3">18+ years</option>
							</select>
						<br><br>
						<input type="button" value="CHECK"   onclick="pulse()">							
						<br><br>
                            
                             <label id = "check"></label>
                            
											
					</td>	
				</tr>
			</table>
			
        
        
        
        
        </form>
			
			
			<!--<img src="image/wrist.png">
			<br>
			<img src="image/throat.png">
			</div>-->


<script type="text/javascript">
    function donate(){
    var a = document.getElementById("group");
    var group = a.options[a.selectedIndex].value;
    
    switch(group){
        case "o":
           document.getElementById("donate").innerHTML="A or B or AB or O";
            break;
            
        case "a":
             document.getElementById("donate").innerHTML="A or AB";
             
             break;
            
        case "b":
            document.getElementById("donate").innerHTML="B or AB";
            break;
            
        case "ab":
            document.getElementById("donate").innerHTML=" AB";
            break;
    }
    }
     function receive(){
    var b = document.getElementById("group");
    var group = b.options[b.selectedIndex].value;
    
    switch(group){
        case "o":
           document.getElementById("receive").innerHTML="From O";
            break;
            
        case "a":
             document.getElementById("receive").innerHTML="From A";
             
             break;
            
        case "b":
            document.getElementById("receive").innerHTML="From B";
            break;
            
        case "ab":
            document.getElementById("receive").innerHTML=" From A,B,AB or O";
            break;
    }
    }
    
            
         function pulse(){
         var c = document.getElementById("age");
         var age = c.options[c.selectedIndex].value;
        var rate =  document.getElementById("rate").value;
        
        switch(age){
            case "age1":
                if((rate>=115) && (rate<=130)){
                    document.getElementById("check").innerHTML="Normal";
                }
                else if(( rate<115)){
                    document.getElementById("check").innerHTML="Too low";
                }
                else{
                    document.getElementById("check").innerHTML="Too High";
                }
                    
                break;    
                        
            case "age2":
                    if((rate>=80) && (rate<=115)){
                    document.getElementById("check").innerHTML="Normal";
                    }
                else if(( rate<80)){
                    document.getElementById("check").innerHTML="Too low";
                }
                else{
                    document.getElementById("check").innerHTML="Too High";
                }
                    
                break;   
                    
                
            case "age3":
                        if((rate>=60) && (rate<=80)){
                    document.getElementById("check").innerHTML="Normal";
                        }
                else if(( rate<60)){
                    document.getElementById("check").innerHTML="Too low";
                }
                else{
                    document.getElementById("check").innerHTML="Too High";
                }
                    
                break;  
                        }
                    }
    function calBMI(){
        var ht = document.getElementById("height").value;
        var wt = document.getElementById("weight").value;
        var bm = wt/(ht*ht);
        document.getElementById("bmi").innerHTML=bm.toString();
    }
        function result(){
            var ht = document.getElementById("height").value;
        var wt = document.getElementById("weight").value;
        var bm = wt/(ht*ht);
        if(bm<18.5){
            document.getElementById("result").innerHTML="Under weight";
        }
        else if((bm>18.5)&&(bm<25)){
            document.getElementById("result").innerHTML="Healthy weight";
        }
        else if((bm>25)&&(bm<30)){
            document.getElementById("result").innerHTML="Overweight";
        }
        else{
            document.getElementById("result").innerHTML="Heavily overweight";
        }
        }
            
       
            
    
    function erase(){
                document.getElementById("bmi").innerHTML="";
                document.getElementById("height").innerHTML="";
                document.getElementById("weight").innerHTML="";
    }

                    
        
    </script>
</body>
</html>



	

