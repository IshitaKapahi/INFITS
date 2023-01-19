<?php
include('event_calender.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="Dashboard.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <div class="dashboard">


        <div class="dashboard_comtainer1">
            <div class="container1_leftside">
                <p style="font-size:1.3rem; font-weight:600">Dashboard</p>
                <p style="font-weight:600;font-size:1.1rem">Upcoming Events</p>
                
            </div>
            <div class="container2_rightside" >
                <button id="btn1" >+</button> 
                 
            </div>
            
        </div>

        <div class="dashboard_container2">
            <div class="container2_wrapper">
                <div class="container2_upper">
                    <span>Oct.23</span>
                    <span>5:00 PM</span>
                </div>
                <div class="container2_middle"><p>Micheal Simpson</p></div>
                <div><button id="btn2">Join the call</button></div>
                
            </div>
            <div class="container2_wrapper" id="box1">
                <div class="container2_upper">
                    <span>Oct.23</span>
                    <span>5:00 PM</span>
                </div>
                <div class="container2_middle"><p>Live Class</p></div>
                <div><button id="btn2" class="btn3">Join the call</button></div>
                
            </div>
            <div class="container2_wrapper" id="box2">
                <div class="container2_upper">
                    <span>Oct.23</span>
                    <span>5:00 PM</span>
                </div>
                <div class="container2_middle"><p>Client Meeting</p></div>
                <div><button id="btn2" class="btn4">Join the call</button></div>
                
            </div>

            <div class="container2_wrapper" id="box3">
                <div class="container2_upper">
                    <span>Oct.23</span>
                    <span>5:00 PM</span>
                </div>
                <div class="container2_middle"><p>Micheal Simpson</p></div>
                <div><button id="btn2" class="btn5">Join the call</button></div>
                
            </div>

            <div class="container2_wrapper" id="box3">
                <div class="container2_upper">
                    <span>Oct.23</span>
                    <span>5:00 PM</span>
                </div>
                <div class="container2_middle"><p>Micheal Simpson</p></div>
                <div><button id="btn2" class="btn5">Join the call</button></div>
                
            </div>
            
        </div>

        <div class="dashboard_container3">
            <div style="font-size:1.4rem; font-weight:600"> Client Progress</div>
            <div class="details">
                <a href=""><button id="details">View All</button></a>
                <a href="client_detailed_progress.php"><button id="details">View Detailed Progress</button></a>
            </div>
            
        </div>

        <div class="dashboard_container4">

            <div class="container4_wrapper1">
                <div class="symbols"><div style="color:#F6A682"><span class="material-symbols-outlined">footprint</span></div><div><span>Steps</span></div></div>
                <div class="symbols"><div style="color:#EF80B2"><span class="material-symbols-outlined">monitor_heart</span></div><div><span>Heart Rate</span></div></div>
                <div class="symbols"><div style="color:#8FAFF3"><span class="material-symbols-outlined">local_drink</span></div><div><span>Water</span></div></div>
                <div class="symbols"><div style="color:#7550E2"><span class="material-symbols-outlined">bedtime</span></div><div><span>Sleep</span></div></div>
                <div class="symbols"><div style="color:#788F96"><span class="material-symbols-outlined">weight</span></div><div><span>Weight</span></div></div>
                <div class="symbols"><div style="color:#E388A0"><span class="material-symbols-outlined">timer_10_alt_1</span></div><div><span>Calories</span></div></div>
                
            </div>

            <div class="container4_wrapper2">
                <span><a href="" style="background-color:#f8f6f6; color:black;font-weight:500; border:none; margin-top:1rem"><span><img src="images/ronald.jpg" style="width:2rem; background-color:#f8f6f6;border-radius:1rem"> Ronald Richards</span></a></span>
                <span><a href="" id="values" style="margin-left:9rem">5256/6000</a></span>
                <span><a href="" id="values" style=" margin-left:3rem">123 bpm</a></span>
                <span><a href="" id="values" style=" margin-left:4rem">2/3 ltrs</a></span>
                <span><a href="" id="values" style=" margin-left:3rem">7/8 hrs.</a></span>
                <span><a href="" id="values" style="margin-left:3rem">0.53/2 kg</a></span>
                <span><a href="" id="values" style=" margin-left:2rem">122/300 kcal</a></span>
            </div>
            <div class="container4_wrapper2">
                <span><a href="" style="background-color:#f8f6f6; color:black;font-weight:500; border:none; margin-top:1rem"><span><img src="images/ronald.jpg" style="width:2rem; background-color:#f8f6f6;border-radius:1rem"> Ronald Richards</span></a></span>
                <span><a href="" id="values" style="margin-left:9rem">5256/6000</a></span>
                <span><a href="" id="values" style=" margin-left:3rem">123 bpm</a></span>
                <span><a href="" id="values" style=" margin-left:4rem">2/3 ltrs</a></span>
                <span><a href="" id="values" style=" margin-left:3rem">7/8 hrs.</a></span>
                <span><a href="" id="values" style="margin-left:3rem">0.53/2 kg</a></span>
                <span><a href="" id="values" style=" margin-left:2rem">122/300 kcal</a></span>
            </div>
            <div class="container4_wrapper2">
                <span><a href="" style="background-color:#f8f6f6; color:black;font-weight:500; border:none; margin-top:1rem"><span><img src="images/ronald.jpg" style="width:2rem; background-color:#f8f6f6;border-radius:1rem"> Ronald Richards</span></a></span>
                <span><a href="" id="values" style="margin-left:9rem">5256/6000</a></span>
                <span><a href="" id="values" style=" margin-left:3rem">123 bpm</a></span>
                <span><a href="" id="values" style=" margin-left:4rem">2/3 ltrs</a></span>
                <span><a href="" id="values" style=" margin-left:3rem">7/8 hrs.</a></span>
                <span><a href="" id="values" style="margin-left:3rem">0.53/2 kg</a></span>
                <span><a href="" id="values" style=" margin-left:2rem">122/300 kcal</a></span>
            </div>
            <div class="container4_wrapper2">
                <span><a href="" style="background-color:#f8f6f6; color:black;font-weight:500; border:none; margin-top:1rem"><span><img src="images/ronald.jpg" style="width:2rem; background-color:#f8f6f6;border-radius:1rem"> Ronald Richards</span></a></span>
                <span><a href="" id="values" style="margin-left:9rem">5256/6000</a></span>
                <span><a href="" id="values" style=" margin-left:3rem">123 bpm</a></span>
                <span><a href="" id="values" style=" margin-left:4rem">2/3 ltrs</a></span>
                <span><a href="" id="values" style=" margin-left:3rem">7/8 hrs.</a></span>
                <span><a href="" id="values" style="margin-left:3rem">0.53/2 kg</a></span>
                <span><a href="" id="values" style=" margin-left:2rem">122/300 kcal</a></span>
            </div>

    </div>  
    
    


    <!----------------------------MOBILE VIEW OF CLIENT PROGRESSS-------------------->

    <div class="mobileview_clientprogress">



                <div class="mob_wrapper1" >
                    <span><a href="" style=" color:black;font-weight:500; border:none; margin-top:1rem;background-color:white; margin-left:1rem"><span><img src="images/ronald.jpg" style="width:2rem;border-radius:1rem"> Ronald Richards</span></a></span>
                    <div class="row1" style="display:flex ; gap:2rem ">
                            <div class="steps">
                                <div class="symbols">
                                <div style="color:#F6A682"><span class="material-symbols-outlined">footprint</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Steps</span></div></div>
                                <span style="font-size:0.9rem;color:#454545">5256/6000</span>
                            </div>
                            <div class="steps">
                                <div class="symbols">
                                <div style="color:#EF80B2"><span class="material-symbols-outlined">monitor_heart</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Heart Rate</span></div></div>
                                <span style="font-size:0.9rem;color:#454545">123 bpm</span>
                            </div>
                    </div>

                    <div class="row2" style="display:flex ; gap:2rem">
                            <div class="steps">
                                <div class="symbols">
                                <div style="color:#8FAFF3"><span class="material-symbols-outlined">local_drink</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Water</span></div></div>
                                <span style="font-size:0.9rem;color:#454545">2/3 ltrs</span>
                            </div>
                            <div class="steps">
                                <div class="symbols">
                                <div style="color:#7550E2"><span class="material-symbols-outlined">bedtime</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Sleep</span></div></div>
                                <span style="font-size:0.9rem;color:#454545">7/8 hrs.</span>
                            </div>
                    </div>

                    <div class="row3" style="display:flex ; gap:2rem">
                            <div class="steps">
                                <div class="symbols">
                                <div style="color:#788F96"><span class="material-symbols-outlined">weight</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Weight</span></div></div>
                                <span style="font-size:0.9rem;color:#454545">0.53/2 kg</span>
                            </div>
                            <div class="steps">
                                <div class="symbols">
                                <div style="color:#E388A0"><span class="material-symbols-outlined">timer_10_alt_1</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Calories</span></div></div>
                                <span style="font-size:0.9rem;color:#454545">122/300 kcal</span>
                            </div>
                    </div>



    
        </div>







</div>







             

<!------------------------------------------------------------------------------------------------------------------------------------->
        <div class="dashboard_container5">


            <div class="container5_wrapper1">
                <div class="tasklist">
                    <p style="font-size:1.3rem ; font-weight:600">My Task List</p>
                    <span><a href="" style="background-color:white; color:#717171; border:none" >View All</a></span> 
                </div>
                <div class="list_tasklist">
                    <button id="btn6" onclick="openPage('tasklist', this)">Today</button>
                    <button id="btn6" class="btn6">Upcoming</button>
                    <div id="tasklist">
                    <div class="list_tasklist_container" >
                        <div class="tasklist_wrapper1">
                            <div><img src="images/foodrecipe.jpeg" style="width:2rem; background-color:#f8f6f6;border-radius:0.5rem"></div>
                        </div>
                        <div class="tasklist_wrapper2">
                            <span style="font-weight:600">Client Recipe Design</span>
                            <span style="margin-botton:4rem; color:#717171">10am to 11 am</span>
                            
                        </div>
                        <div class="tasklist_wrapper3"><span class="material-symbols-outlined" style="font-weight:800">more_vert</span></div>
                        
                    </div>
                    </div>
                </div>
                
            </div>


            <div class="container5_wrapper2">
                <div class="tasklist">
                    <p style="font-size:1.3rem ; font-weight:600">Messages</p>
                
                    <span><a href="" style="background-color:white; color:#717171 ; border:none" >View All</a></span>
                </div>
                    <div class="meassages">
                       <div class="tasklist_wrapper1">
                            <div><img src="images/ronald.jpg" style="width:2rem; background-color:#f8f6f6;border-radius:0.5rem"></div>
                        </div>
                        <div class="tasklist_wrapper2">
                            <span style="font-weight:600">Rick Owens</span>
                            <span style="margin-botton:4rem; color:#717171">Its Awesome</span>
                            
                        </div>
                        
                    </div> 


            
                
            </div>
         
        </div>

       







            
        

    </div>
    
</body>
</html>