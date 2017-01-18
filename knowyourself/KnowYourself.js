
    function donate(){
    var a = document.getElementById("group"); //get the set of values in the drop down list
    var group = a.options[a.selectedIndex].value; //get individual values from the list
    
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
           document.getElementById("receive").innerHTML="<font color=green>O-<br> O+<br><br></font>"; //print the values to the label
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
         var c = document.getElementById("age");   //get the set of values in the drop down list
         var age = c.options[c.selectedIndex].value;  //get the individual values in the drop down list
        var rate =  document.getElementById("rate").value; //get the value in the text bosx
        
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

        