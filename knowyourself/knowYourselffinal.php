<html>
<head>
<title>Know about Yourself</title>
    <link rel="stylesheet" type="text/css" href="knowYourself.css">
	<script type="text/javascript" src="KnowYourself.js"></script>
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
                           
                             
            
        
    
	
</body>
</html>