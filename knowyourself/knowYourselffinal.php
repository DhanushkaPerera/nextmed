<html>
<head>
<title>Know about Yourself</title>
    <link rel="stylesheet" type="text/css" href="knowYourself.css">
</head>

<body>
<div id=header><h1  align = center> Get a Checkup by Yourself ! </h1></div>
<!--<p align=center><b><font size=4 >Grab the opportunity to determine your current health status by yourself.</b></font></p> -->

<!--<br><h2> What are the privileges you get through the agreement?</h2>-->

<div id=column align=center>
	<div class=logo><img src="image/bmi1.png"></div>
	<div class=topic><h3>How much should<br> I weigh for my height? </h3></div>
	<div class=privilege><p><b>B</b>ody <b>M</b>ass <b>I</b>ndex (BMI) is an measurement used to 
			determine weight status (eg. Underweight, Healthy weight Overweight). Use this 
			calculator to find out what your BMI can tell about your health.</p></div>

				<form align = center>
					<label >Height : </label>
						<input id="height" type=text name="h" placeholder="1.58" required > m	<br>							
					<label>Weight : </label>
						<input id="weight" type=text name="w" placeholder="62.4" required > kg  <br>
					<input class=btn type="button" value="CALCULATE"   onclick="calBMI();result();">					
					<input class=btnreset type="reset" value="RESET"  onclick="erase()">  <br><br>
						
                    Your BMI = <label id = "bmi"></label><br>
                    <label id = "result"></label>  <br><br>

					<a href="bmiinfo.html#top" ><b>For More Info:</b> </a>	
				</form>  <br><br>								
</div>
<a name=back></a>


<!-- source: http://bmicalculator.cc/bmi-chart -->

<div id=column align=center>
	<div class=logo><img src="image/donate1.ico"></div>
	<div class=topic><h3>What does depend<br>on your blood group?</h3></div>
	<div class=privilege align=justify><p>If you are willing to donate blood, you should know to whom you can donate. 
Also, in an emergency it will be very useful if you know from whom you can receive blood.</p></div>

					<form align = center>
						<label>Blood Group : </label>					
						<select id="group" name=bg>
							<option >Your Blood Group</option>
							<option value="o-">O-</option>
							<option value="o+">O+</option>
							<option value="a-">A-</option>
							<option value="a+">A+</option>
							<option value="b-">B-</option>
							<option value="b+">B+</option>
							<option value="ab-">AB-</option>
							<option value="ab+">AB+</option>
						</select>  <br><br>
						<input type="button"  class=btn value="TO WHOM ?"   onclick="donate()">
						<input class=btnreset type="reset" value="RESET"  onclick="erase()">  	<br><br>
                            
						You can donate to <br><label id = "donate"></label>  <br><br>
                            
						<input type="button"  class=btn value="FROM WHOM ?" onclick="receive()">
                        <input class=btnreset type="reset" value="RESET"  onclick="erase()">  <br><br>
						
                        You can receive from <br><label id = "receive"></label> <br><br>
						<a href="blooddonation.html#top"><b>For More Info:</b> </a>
					</form>	                        
</div>
<!-- source: http://www.thebloodcenter.org/donor/BloodFacts.aspx-->

<div id=column align=center>
	<div class=logo><img src="image/pulse1.png"></div>
	<div class=topic><h3>What about <br> your heart rate?</h3></div>
	<div class=privilege align=justify><p>Pulse rate is the number of times a person's heart beats 
	per minute.It monitors your fitness level and it might even help you spot developing health problems.</p></div>

					<form align = center>                
						<label>Pulse rate : </label>
                        <input id="rate" type=text  placeholder="76"> /min  <br> 
						<label>Age : </label>
						<select id="age" name=age>
								<option>Your Age Range</option>
								<option value="age1">0-12 months</option>								
								<option value="age2">1-5 years</option>
								<option value="age3">6-10 years</option>
								<option value="age4">11-15 years</option>
								<option value="age5">16-20 years</option>
								<option value="age6">21+ years</option>
						</select>  <br><br>				
						<input type="button" class=btncheck value="CHECK"   onclick="pulse();">   <br><br>							

						Your pulse rate is <label id = "check"></label>  <br><br>	
				        <a href="heartrate.html#top"><b>For More Info:</b> </a>
</form>
                           
                             
<script type="text/javascript">
    function donate(){
    var a = document.getElementById("group");
    var group = a.options[a.selectedIndex].value;
    
    switch(group){
        case "o-":
           document.getElementById("donate").innerHTML="<font color=red>You can donate to anybody</font>  ";
            break;
          
		case "o+":
           document.getElementById("donate").innerHTML="<font color=green>O+<br>  A+<br>  B+<br>  AB+</font> ";
            break;
            
        case "a-":
             document.getElementById("donate").innerHTML="<font color=green>A- <br> A+<br> AB- <br> AB+</font>";
             
             break;
			 
		case "a+":
             document.getElementById("donate").innerHTML="<font color=green>A+<br> AB+</font>";
             
             break;
            
        case "b+":
            document.getElementById("donate").innerHTML="<font color=green>B+<br> AB+</font>";
            break;
			
		case "b-":
            document.getElementById("donate").innerHTML="<font color=green>B-<br> B+<br> AB-<br> AB+</font>";
            break;
            
        case "ab-":
            document.getElementById("donate").innerHTML=" <font color=green>AB-<br> AB+</font>";
            break;
    
		case "ab+":
            document.getElementById("donate").innerHTML=" <font color=red>You can donate only to AB+</font>";
            break;
	}
    }
     function receive(){
    var b = document.getElementById("group");
    var group = b.options[b.selectedIndex].value;
    
    switch(group){
        case "o+":
           document.getElementById("receive").innerHTML="<font color=green>O-<br> O+<br><br></font>";
            break;
			
		case "o-":
           document.getElementById("receive").innerHTML="<font color=red>You can receive only from O-<br><br></font>";
            break;
            
        case "a+":
             document.getElementById("receive").innerHTML="<font color=green>A- <br> A+<br> O- <br> O+<br><br></font>";
            break;
			 
		case "a-":
             document.getElementById("receive").innerHTML="<font color=green>A- <br> O- <br><br></font>";
             break;             
            
        case "b+":
            document.getElementById("receive").innerHTML="<font color=green>B- <br>B+<br> O- <br> O+<br><br></font>";
            break;
			
		 case "b-":
            document.getElementById("receive").innerHTML="<font color=green>B- <br> O- <br> <br></font>";
            break;
            
        case "ab+":
            document.getElementById("receive").innerHTML=" <font color=red>You can receive from anybody<br><br></font>";
            break;
			
		 case "ab-":
            document.getElementById("receive").innerHTML=" <font color=green>A- <br>B-<br> O- <br> AB-<br><br></font>";
            break;
    }
    }
    
            
         function pulse(){
         var c = document.getElementById("age");
         var age = c.options[c.selectedIndex].value;
        var rate =  document.getElementById("rate").value;
        
        switch(age){
            case "age1":
                if((rate>=105) && (rate<=165)){
                    document.getElementById("check").innerHTML="<font color=green size=6px><b>Normal<b></font>";
                }
                
                else{
                    document.getElementById("check").innerHTML="<font color=red size=6px><b>Abnormal<b></font>";
                }
                    
                break;    
                        
            case "age2":
                    if((rate>=85) && (rate<=150)){
                    document.getElementById("check").innerHTML="<font color=green size=6px><b>Normal<b></font>";
                    }
               
                else{
                    document.getElementById("check").innerHTML="<font color=red size=6px><b>Abnormal<b></font>";
                }
                    
                break;   
                    
                
            case "age3":
                        if((rate>=75) && (rate<=135)){
                    document.getElementById("check").innerHTML="<font color=green size=6px><b>Normal<b></font>";
                        }
                
                else{
                    document.getElementById("check").innerHTML="<font color=red size=6px><b>Abnormal<b></font>";
                }
                    
                break;
						
						
			case "age4":
                        if((rate>=70) && (rate<=120)){
                    document.getElementById("check").innerHTML="<font color=green size=6px><b>Normal<b></font>";
                        }
                
                else{
                    document.getElementById("check").innerHTML="<font color=red size=6px><b>Abnormal<b></font>";
                }
                    
                break; 
				
			case "age5":
                        if((rate>=65) && (rate<=110)){
                    document.getElementById("check").innerHTML="<font color=green size=6px><b>Normal<b></font>";
                        }
                
                else{
                    document.getElementById("check").innerHTML="<font color=red size=6px><b>Abnormal<b></font>";
                }
                    
                break; 
				
			case "age6":
                        if((rate>=60) && (rate<=100)){
                    document.getElementById("check").innerHTML="<font color=green size=6px><b>Normal<b></font>";
                        }
                
                else{
                    document.getElementById("check").innerHTML="<font color=red size=6px><b>Abnormal<b></font>";
                }
                    
                break; 
                        }
                    }
					
					
    function calBMI(){
        var ht = document.getElementById("height").value;
        var wt = document.getElementById("weight").value;
        var bm = wt/(ht*ht);
        document.getElementById("bmi").innerHTML=bm.toFixed();
    }
    function result(){
        var ht = document.getElementById("height").value;
        var wt = document.getElementById("weight").value;
        var bm = wt/(ht*ht);
        if(bm<=18){
            document.getElementById("result").innerHTML="<font color=red size=6px><b>You are Underweight<b></font>";
        }
   else if((bm>18)&&(bm<25)||(bm==25)){
    document.getElementById("result").innerHTML="<font color=green size=6px><b>You are a Healthy Weight <b></font>";
   }
   
   else if((bm>25)&&(bm<29)||(bm==29)){
    document.getElementById("result").innerHTML="<font color=red size=6px><b>You are Overweight<b></font>";
   }
   
   else if((bm>29)&&(bm<39)||(bm==39)){
    document.getElementById("result").innerHTML="<font color=red size=6px><b>You are Obese<b></font>";
   }
   
        else{
            document.getElementById("result").innerHTML="<font color=red size=6px><b>You are Extremely Overweight<b></font>";
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