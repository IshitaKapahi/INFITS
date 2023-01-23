<?php
include('event_calender.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='setgoals_clients.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
</head>
<body>
    <div class="setgoals">
        <p style="font-size:1.7rem; font-weight:600">Set Goals For Clients</p>
        <div class="generalgoals"><div style="font-size:1.3rem; font-weight:500">General Goals</div>
            <div class="hover-text"style="margin-top:0.3rem" ><span class="material-symbols-outlined" style="color:#9C74F5">error</span>
            <span class="tooltip-text" id="right">Set default daily fitness for all the clients from here!</span></div> 
        </div>

        <div class="setgoals_contaner1">
            <div class="container1_wrapper1">
                <div class="block1">
                    <div class="firstbutton">
                        <button class="setgoals_button" id="button1">
                        <span class="material-symbols-outlined" style="font-size:2.8rem;font-weight:500; margin-top:0.5rem;margin-left:0.3rem">footprint</span>
                        <span style=" margin-top:1rem;margin-left:0.5rem">Steps</span>   
                        </button>

                        
                        <div class="setgoals_popup2" id="setgoals1">
                            <div style="justify-content:space-between;display:flex;margin-top:0.5rem">
                                <span style="font-size:1.4rem; font-weight:400;margin-top:0.5rem">Set Goal</span>
                                <span class="close" id="close">&times;</span>
                            </div>
                            <span style="color:#FF8B8B">Daily Steps</span> <br>
                            <img src="images/setgoals.jpg" style="margin-left:4rem"><br>
                            <label id="label1">0000 Steps</label>
                            <button id="button2" class="setbutton">Set</button>  
                        </div>
                        

                    </div>

                    <div class="firstbutton">
                        <button class="setgoals_button" id="button3">
                        <span class="material-symbols-outlined" style="font-size:2.8rem;font-weight:500; margin-top:0.5rem;margin-left:0.3rem">monitor_heart</span>
                        <span style=" margin-top:1rem;margin-left:0.5rem">Heart Rate</span>   
                        </button>

                        
                        <div class="setgoals_popup2" id="setgoals2">
                            <div style="justify-content:space-between;display:flex;margin-top:0.5rem">
                                <span style="font-size:1.4rem; font-weight:400;margin-top:0.5rem">Heart Rate Goal</span>
                                <span class="close2" id="close">&times;</span>
                            </div>
                            <span style="color:#FF8B8B">Daily Heart Rate</span> <br>
                            <img src="images/heartrate.jpg" style="margin-left:3.8rem"><br>
                            <label id="label1">0000 BPM</label>
                            <button id="button4" class="setbutton">Set</button>  
                        </div>
                        

                    </div>


                    
                </div>

                <div class="block2">
                   <div class="firstbutton">
                        <button class="setgoals_button" id="button5">
                        <span class="material-symbols-outlined" style="font-size:2.8rem;font-weight:500; margin-top:0.5rem;margin-left:0.3rem">bedtime</span>
                        <span style=" margin-top:1rem;margin-left:0.5rem">Sleep</span>   
                        </button>

                        
                        <div class="setgoals_popup2" id="setgoals3">
                            <div style="justify-content:space-between;display:flex;margin-top:0.5rem">
                                <span style="font-size:1.4rem; font-weight:400;margin-top:0.5rem">Sleep Goal</span>
                                <span class="close3" id="close">&times;</span>
                            </div>
                            <span style="color: #633FDD;">Daily Sleep Hours</span> <br>
                            <img src="images/sleep.jpg" style="margin-left:3.5rem"><br>
                            <label id="label1">0000 Hours</label>
                            <button id="button6" class="setbutton">Set</button>  
                        </div>
                        

                    </div>

                    <div class="firstbutton">
                        <button class="setgoals_button" id="button7">
                        <span class="material-symbols-outlined" style="font-size:2.8rem;font-weight:500; margin-top:0.5rem;margin-left:0.3rem">weight</span>
                        <span style=" margin-top:1rem;margin-left:0.5rem">Weight</span>   
                        </button>

                        
                        <div class="setgoals_popup2" id="setgoals4">
                            <div style="justify-content:space-between;display:flex;margin-top:0.5rem">
                                <span style="font-size:1.4rem; font-weight:400;margin-top:0.5rem">Weight Goal</span>
                                <span class="close4" id="close">&times;</span>
                            </div>
                            <span style="color: #788F97">Daily Weight Count</span> <br>
                            <img src="images/weight.jpg" style="margin-left:3.5rem"><br>
                            <label id="label1">0000 BPM</label>
                            <button id="button8" class="setbutton">Set</button>  
                        </div>
                        

                    </div>
                    
                </div>
                
            </div>

            <div class="container1_wrapper2">
                 <div class="firstbutton">
                        <button class="setgoals_button" id="button9">
                        <span class="material-symbols-outlined" style="font-size:2.8rem;font-weight:500; margin-top:0.5rem;margin-left:0.3rem">local_drink</span>
                        <span style=" margin-top:1rem;margin-left:0.5rem">Water</span>   
                        </button>

                        
                        <div class="setgoals_popup2" id="setgoals5">
                            <div style="justify-content:space-between;display:flex;margin-top:0.5rem">
                                <span style="font-size:1.4rem; font-weight:400;margin-top:0.5rem">Water Intake Goal</span>
                                <span class="close5" id="close">&times;</span>
                            </div>
                            <span style="color: #5CA7F8">Daily Water Consumption</span> <br>
                            <img src="images/water.jpg" style="margin-left:4rem"><br>
                            <label id="label1">0000 litres</label>
                            <button id="button10" class="setbutton">Set</button>  
                        </div>
                        

                 </div>

                 <div class="firstbutton">
                        <button class="setgoals_button" id="button11">
                        <span class="material-symbols-outlined" style="font-size:2.8rem;font-weight:500; margin-top:0.5rem;margin-left:0.3rem">timer_10_alt_1</span>
                        <span style=" margin-top:1rem;margin-left:0.5rem">Calories</span>   
                        </button>

                        
                        <div class="setgoals_popup2" id="setgoals6">
                            <div style="justify-content:space-between;display:flex;margin-top:0.5rem">
                                <span style="font-size:1.4rem; font-weight:400;margin-top:0.5rem">Calorie Goal</span>
                                <span class="close6" id="close">&times;</span>
                            </div>
                            <span style="color:  #E48FA7">Daily Calorie Count</span> <br>
                            <img src="images/calorie.jpg" style="margin-left:3rem"><br>
                            <label id="label1">0000 BPM</label>
                            <button id="button12" class="setbutton">Set</button>  
                        </div>
                        

                    </div>
                
            </div>
            
        </div>


        <div class="generalgoals"><div style="font-size:1.3rem; font-weight:500">Past Goals</div>
            <div class="hover-text"style="margin-top:0.3rem" ><span class="material-symbols-outlined" style="color:#9C74F5">error</span>
            <span class="tooltip-text" id="right">View all the goals already set for the clients from here!!</span></div> 
        </div>



        <!--------------------------------------------------PAST REMINDERS START---------->
       
        <div class="setgoals_contaner2">
            <div class="container2_wrapper1">
                <div class="pastreminder">
                    <div class="upper">
                    <div style="display:flex; gap:0.5rem;color:#FFA578;font-weight:600"><div> <span class="material-symbols-outlined" >footprint</span></div><div>Step Goals</div></div>
                    <span style="color:#FF8B8B;margin-left:8rem;font-weight:600">Daily Steps</span>
                    </div>
                    <div class="middle">
                        <div>
                            <p style="font-weight:600; font-size:1.2rem">Select Clients</Select></p>
                            <div class="selectbar">
                                <button class="select1" id="selectbtn1">Ronald Richards, Ronalds   <span class="material-symbols-outlined">arrow_drop_down</span>  
                                    
                                </button>
                                <div class="selectdropdown1" id="selectdropdownlist1">
                                    <span>Search Clients</span>&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<span class="material-symbols-outlined">arrow_drop_down</span> 
                                    <div class="search"><button class="select2" id="select2">Search Clients &nbsp&nbsp &nbsp &nbsp &nbsp   <span class="material-symbols-outlined">arrow_drop_down</span></div>
                                    <form id="form1">
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    
                                    </form>   
                                </div>
                                <p style="font-weight:600; font-size:1.2rem; margin-top:1rem">No. Of steps</Select></p>
                                <label id="label2">0000 Steps</label>
                                <button class="lastsetbtn">Set</button>
                                
                            </div>
                        </div>
                        
                    </div>


                </div>


<!----------------------------------------------------------------------------------------------------------------->

                <div class="pastreminder">
                    <div class="upper">
                    <div style="display:flex; gap:0.5rem;color:#E882B8 ;font-weight:600"><div> <span class="material-symbols-outlined" >monitor_heart</span></div><div>Heart Rate Goal</div></div>
                    <span style="color:#FF8B8B;margin-left:5rem;font-weight:600">Daily Heart Rate</span>
                    </div>
                    <div class="middle">
                        <div>
                            <p style="font-weight:600; font-size:1.2rem">Select Clients</Select></p>
                            <div class="selectbar">
                                <button class="select1" id="selectbtn2">Ronald Richards, Ronalds   <span class="material-symbols-outlined">arrow_drop_down</span>  
                                    
                                </button>
                                <div class="selectdropdown1" id="selectdropdownlist2">
                                    <span>Search Clients</span>&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<span class="material-symbols-outlined">arrow_drop_down</span> 
                                    <div class="search"><button class="select2" id="select2">Search Clients &nbsp&nbsp &nbsp &nbsp &nbsp   <span class="material-symbols-outlined">arrow_drop_down</span></div>
                                    <form id="form1">
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    
                                    </form>   
                                </div>
                                <p style="font-weight:600; font-size:1.2rem; margin-top:1rem">Beats Per Minute</Select></p>
                                <label id="label2">0000 BPM</label>
                                <button class="lastsetbtn" id="lastsetbtn2">Set</button>
                                
                            </div>
                        </div>
                        
                    </div>


                </div>



                
                
            </div>


<!------------------------------------------------------------------------------------------------------------------------>

            <div class="container2_wrapper2">
                <div class="pastreminder">
                    <div class="upper">
                    <div style="display:flex; gap:0.5rem;color:#68A9F7;font-weight:600"><div> <span class="material-symbols-outlined" >local_drink</span></div><div>Water Goal</div></div>
                    <span style="color:#FF8B8B;margin-left:5rem;font-weight:600">Daily Water Intake</span>
                    </div>
                    <div class="middle">
                        <div>
                            <p style="font-weight:600; font-size:1.2rem">Select Clients</Select></p>
                            <div class="selectbar">
                                <button class="select1" id="selectbtn3">Ronald Richards, Ronalds   <span class="material-symbols-outlined">arrow_drop_down</span>  
                                    
                                </button>
                                <div class="selectdropdown1" id="selectdropdownlist3">
                                    <span>Search Clients</span>&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<span class="material-symbols-outlined">arrow_drop_down</span> 
                                    <div class="search"><button class="select2" id="select2">Search Clients &nbsp&nbsp &nbsp &nbsp &nbsp   <span class="material-symbols-outlined">arrow_drop_down</span></div>
                                    <form id="form1">
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    
                                    </form>   
                                </div>
                                <p style="font-weight:600; font-size:1.2rem; margin-top:1rem">Quantity</Select></p>
                                <label id="label2">0000 litres</label>
                                <button class="lastsetbtn" id="lastsetbtn3">Set</button>
                                
                            </div>
                        </div>
                        
                    </div>


                </div>


<!------------------------------------------------------------------------------------------------------------------->

                <div class="pastreminder">
                    <div class="upper">
                    <div style="display:flex; gap:0.5rem;color:#805AE5;font-weight:600"><div> <span class="material-symbols-outlined" >bedtime</span></div><div>Sleep Goal</div></div>
                    <span style="color:#FF8B8B;margin-left:6rem;font-weight:600">Daily Sleep Duration</span>
                    </div>
                    <div class="middle">
                        <div>
                            <p style="font-weight:600; font-size:1.2rem">Select Clients</Select></p>
                            <div class="selectbar">
                                <button class="select1" id="selectbtn4">Ronald Richards, Ronalds   <span class="material-symbols-outlined">arrow_drop_down</span>  
                                    
                                </button>
                                <div class="selectdropdown1" id="selectdropdownlist4">
                                    <span>Search Clients</span>&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<span class="material-symbols-outlined">arrow_drop_down</span> 
                                    <div class="search"><button class="select2" id="select2">Search Clients &nbsp&nbsp &nbsp &nbsp &nbsp   <span class="material-symbols-outlined">arrow_drop_down</span></div>
                                    <form id="form1">
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    
                                    </form>   
                                </div>
                                <p style="font-weight:600; font-size:1.2rem; margin-top:1rem">Sleep Tine</Select></p>
                                <label id="label2">0000 hours</label>
                                <button class="lastsetbtn" id="lastsetbtn4">Set</button>
                                
                            </div>
                        </div>
                        
                    </div>


                </div>



                
                
            </div>


<!------------------------------------------------------------------------------------------------------------>

            <div class="container2_wrapper3">
                <div class="pastreminder">
                    <div class="upper">
                    <div style="display:flex; gap:0.5rem;color:#7F9FA4;font-weight:600"><div> <span class="material-symbols-outlined" >weight</span></div><div>Weight Goal</div></div>
                    <span style="color:#FF8B8B;margin-left:4rem;font-weight:600">Daily Weight Count</span>
                    </div>
                    <div class="middle">
                        <div>
                            <p style="font-weight:600; font-size:1.2rem">Select Clients</Select></p>
                            <div class="selectbar">
                                <button class="select1" id="selectbtn5">Ronald Richards, Ronalds   <span class="material-symbols-outlined">arrow_drop_down</span>  
                                    
                                </button>
                                <div class="selectdropdown1" id="selectdropdownlist5">
                                    <span>Search Clients</span>&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<span class="material-symbols-outlined">arrow_drop_down</span> 
                                    <div class="search"><button class="select2" id="select2">Search Clients &nbsp&nbsp &nbsp &nbsp &nbsp   <span class="material-symbols-outlined">arrow_drop_down</span></div>
                                    <form id="form1">
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    
                                    </form>   
                                </div>
                                <p style="font-weight:600; font-size:1.2rem; margin-top:1rem">Weight Count</Select></p>
                                <label id="label2">0000 kg</label>
                                <button class="lastsetbtn" id="lastsetbtn5">Set</button>
                                
                            </div>
                        </div>
                        
                    </div>


                </div>


<!------------------------------------------------------------------------------------------------------------------------->

                <div class="pastreminder">
                    <div class="upper">
                    <div style="display:flex; gap:0.5rem;color:#E39F9A;font-weight:600"><div> <span class="material-symbols-outlined" >timer_10_alt_1</span></div><div>Calorie Goal</div></div>
                    <span style="color:#FF8B8B;margin-left:5rem;font-weight:600">Daily Calorie Count</span>
                    </div>
                    <div class="middle">
                        <div>
                            <p style="font-weight:600; font-size:1.2rem">Select Clients</Select></p>
                            <div class="selectbar">
                                <button class="select1" id="selectbtn6">Ronald Richards, Ronalds   <span class="material-symbols-outlined">arrow_drop_down</span>  
                                    
                                </button>
                                <div class="selectdropdown1" id="selectdropdownlist6">
                                    <span>Search Clients</span>&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<span class="material-symbols-outlined">arrow_drop_down</span> 
                                    <div class="search"><button class="select2" id="select2">Search Clients &nbsp&nbsp &nbsp &nbsp &nbsp   <span class="material-symbols-outlined">arrow_drop_down</span></div>
                                    <form id="form1">
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    <input type="checkbox" id="ronald" name="ronald" value="ronald">
                                    <label id="ronald"> Ronald Richards</label><br>
                                    
                                    </form>   
                                </div>
                                <p style="font-weight:600; font-size:1.2rem; margin-top:1rem">Calorie Count</Select></p>
                                <label id="label2">0000 kcal</label>
                                <button class="lastsetbtn" id="lastsetbtn6">Set</button>
                                
                            </div>
                        </div>
                        
                    </div>


                </div>



                
                
            </div>
            
        </div>




        
        

        
    </div>


                        <script>
                        var modal = document.getElementById("setgoals1");
                        var modal2 = document.getElementById("setgoals2");
                        var modal3 = document.getElementById("setgoals3");
                        var modal4 = document.getElementById("setgoals4");
                        var modal5 = document.getElementById("setgoals5");
                        var modal6 = document.getElementById("setgoals6");

                        // Get the button that opens the modal
                        var btn = document.getElementById("button1");
                        var btn3 = document.getElementById("button3");
                        var btn5 = document.getElementById("button5");
                        var btn7 = document.getElementById("button7");
                        var btn9 = document.getElementById("button9");
                        var btn11 = document.getElementById("button11");

                        // Get the button that sets the modal
                        var btn2 = document.getElementById("button2");
                        var btn4 = document.getElementById("button4");
                        var btn6 = document.getElementById("button6");
                        var btn8 = document.getElementById("button8");
                        var btn10 = document.getElementById("button10");
                        var btn12 = document.getElementById("button12");

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close")[0];
                        var span2 = document.getElementsByClassName("close2")[0];
                        var span3 = document.getElementsByClassName("close3")[0];
                        var span4 = document.getElementsByClassName("close4")[0];
                        var span5 = document.getElementsByClassName("close5")[0];
                        var span6 = document.getElementsByClassName("close6")[0];

                        // When the user clicks the button, open the modal 
                        btn.onclick = function() {
                        modal.style.display = "block";
                        }
                        btn3.onclick = function() {
                        modal2.style.display = "block";
                        }
                        btn5.onclick = function() {
                        modal3.style.display = "block";
                        }
                        btn7.onclick = function() {
                        modal4.style.display = "block";
                        }
                        btn9.onclick = function() {
                        modal5.style.display = "block";
                        }
                        btn11.onclick = function() {
                        modal6.style.display = "block";
                        }


                        // When the user clicks the button, sets the modal 
                        btn2.onclick = function() {
                        modal.style.display = "none";
                        }
                        btn4.onclick = function() {
                        modal2.style.display = "none";
                        }
                        btn6.onclick = function() {
                        modal3.style.display = "none";
                        }
                        btn8.onclick = function() {
                        modal4.style.display = "none";
                        }
                        btn10.onclick = function() {
                        modal5.style.display = "none";
                        }
                        btn12.onclick = function() {
                        modal6.style.display = "none";
                        }

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function() {
                        modal.style.display = "none";
                        }
                        span2.onclick = function() {
                        modal2.style.display = "none";
                        }
                        span3.onclick = function() {
                        modal3.style.display = "none";
                        }
                        span4.onclick = function() {
                        modal4.style.display = "none";
                        }
                        span5.onclick = function() {
                        modal5.style.display = "none";
                        }
                        span6.onclick = function() {
                        modal6.style.display = "none";
                        }
                      </script>

                      <script>
                        var drop1 = document.getElementById("selectdropdownlist1");
                        var selectbtn1 = document.getElementById("selectbtn1");
                        selectbtn1.onclick = function() {
                        drop1.style.display = "block";
                        }
                        
                        window.onclick = function(event) {
                        if (event.target == drop1) {
                         drop1.style.display = "none";
                          }
                        }





                        var drop2 = document.getElementById("selectdropdownlist2");
                        var selectbtn2 = document.getElementById("selectbtn2");
                        selectbtn2.onclick = function() {
                        drop2.style.display = "block";
                        }
                        
                        window.onclick = function(event) {
                        if (event.target == drop2) {
                         drop2.style.display = "none";
                          }
                        }






                        var drop3 = document.getElementById("selectdropdownlist3");
                        var selectbtn3 = document.getElementById("selectbtn3");
                        selectbtn3.onclick = function() {
                        drop3.style.display = "block";
                        }
                        
                        window.onclick = function(event) {
                        if (event.target == drop3) {
                         drop3.style.display = "none";
                          }
                        }



                        var drop4 = document.getElementById("selectdropdownlist4");
                        var selectbtn4 = document.getElementById("selectbtn4");
                        selectbtn4.onclick = function() {
                        drop4.style.display = "block";
                        }
                        
                        window.onclick = function(event) {
                        if (event.target == drop4) {
                         drop4.style.display = "none";
                          }
                        }

                        var drop5 = document.getElementById("selectdropdownlist5");
                        var selectbtn5 = document.getElementById("selectbtn5");
                        selectbtn5.onclick = function() {
                        drop5.style.display = "block";
                        }
                        
                        window.onclick = function(event) {
                        if (event.target == drop5) {
                         drop5.style.display = "none";
                          }
                        }

                        var drop6 = document.getElementById("selectdropdownlist6");
                        var selectbtn6 = document.getElementById("selectbtn6");
                        selectbtn6.onclick = function() {
                        drop6.style.display = "block";
                        }
                        
                        window.onclick = function(event) {
                        if (event.target == drop6) {
                         drop6.style.display = "none";
                          }
                        }
                      </script>
    
</body>
</html>