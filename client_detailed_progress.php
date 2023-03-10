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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <style>
    
.detailed_progress_container1{
    display: flex;
}
.container1_leftside{
    margin-left: 5rem;
    margin-top: 2rem;
}
.search_client{ 
    margin: 1.5rem;
    margin-top: 2.5rem;
    width: 25rem; 
    color: #ACACAC;   
    background-color:white;
    box-shadow: 0.6px 0.6px 2px 1px #ccc;
    border-radius:0.6rem;
    font-size: medium;
    border: none;
    display: flex;
    padding-top: 0.5rem;
    padding-right: 0.5rem;
}
#btn1{
    width: auto;
    background-color:white;
    border: none; 
    color: #ACACAC;    
}
.seach_clients_text{
  border: none;  
}
.track_buttons{
  margin-left: 20rem;
}
#btn2{
    background-color: white;
    color: black;
    border: none;
    font-size: larger;
    font-weight: 500;
    padding: 0.5rem;
    padding-left: 2rem;
    padding-right: 2rem;

}
#btn2:hover{
    border-bottom:0.25rem solid #4B9AFB; 
}
.container1_rightside{
    margin-left: 14rem;
}
.container2_wrapper1{
  width: 42rem;
  display: flex;
  gap: 2rem;
  padding: 0.3rem;
  border-radius: 0.7rem;
  background-color: #FDFDFD;
  margin-left: 20rem;
}
.info{
  display: flex;
  flex-direction: column;

}
.symbols{
  display: flex;
}
.detailed_progress_container2{
  display: none;
}


/* Calender css starts */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
.wrapper{
  width: 450px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 3px 5px rgba(0,0,0,0.12);
  margin-top: 0.5rem;
}
.wrapper header{
  display: flex;
  align-items: center;
  padding: 0.5rem;
  justify-content: space-between;
 
}
header .icons{
  display: flex;
}
header .icons span{
  height: 38px;
  width: 38px;
  margin: 0 1px;
  cursor: pointer;
  color: #878787;
  text-align: center;
  line-height: 38px;
  font-size: 1.9rem;
  user-select: none;
  border-radius: 50%;
}
.icons span:last-child{
  margin-right: -10px;
}
header .icons span:hover{
  background: #f2f2f2;
}
header .current-date{
  font-size: 1.45rem;
  font-weight: 500;
}
.calendar{
  padding: 1px;
}
.calendar ul{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  text-align: center;
}
.weeks{
    margin-bottom:0%;
}
.calendar .days{
  margin-bottom: 20px;
}
.calendar li{
  color: #333;
  width: calc(90% / 7);
  font-size: 0.8rem;
  font-weight: 600;
}
.calendar .weeks li{
  font-weight: 500;
  cursor: default;
}
.calendar .days li{
  z-index: 1;
  cursor: pointer;
  position: relative;
  margin-top: 10px;
}
.days li.inactive{
  color: #aaa;
}
.days li.active{
  color: #fff;
}
.days li::before{
  position: absolute;
  content: "";
  left: 50%;
  top: 50%;
  height: 40px;
  width: 40px;
  z-index: -1;
  border-radius: 50%;
  transform: translate(-50%, -50%);
  color: black;
}
.days li.active::before{
  background: #a6b0fc;
}
.days li:not(.active):hover::before{
  border: 2px solid #7282FB;
}
.mobview_progressdetails{
  display: none;
}
.steps{
  margin-top: 1rem;
}
.mob_container1_wrapper1{
  margin-left: 5rem;
  border: 1px solid  #e4e1e1;
  box-shadow: 0 4px 7px rgba(0,0,0,0.12);
  border-radius: 0.7rem;
  padding: 1rem;
  width: 260px;
  height: 200px;
}


@media screen and (max-width: 720px) {
  .detailed_progress_container1{
    display: flex;
    flex-direction: column;
    gap: 1rem;
  }
  .container1_leftside{
    margin-left: 1rem;
  }
  .container1_rightside{
    margin-left: 2rem;
}
.track_buttons{
  margin-left: 1rem;
  margin-top: 2rem;
}
.search_client{
  width: auto;
}
.webview_progressdetails{
  display: none;
}
.mobview_progressdetails{
  display: flex;
  flex-direction: column;
  gap: 1rem;
}
.mobview_container1{
  display: none;
}
}
    </style>
</head>
<body>
    <div class="client_detailed_progress">


        <div class="detailed_progress_container1">
            <div class="container1_leftside">
                <p style="font-size:1.7rem;font-weight:700">Client Progress Details</p>
                <div class="search_client">
                    <div><button id="btn1"><span class="material-symbols-outlined">search</span></button> </div>
                    <div>&nbsp&nbsp&nbsp&nbsp <input type="text" name="search_client" placeholder="Search Clients" class="seach_clients_text">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>   
                </div>
                
                
            </div>
           

<!---------------callender code--------------->

            <div class="container1_rightside">
                <div class="wrapper">
                    <header>
                        <p style="margin-left:1.5rem" class="current-date"></p>
                        <div class="icons">
                        <span id="prev" class="material-symbols-rounded">chevron_left</span>
                        <span id="next" class="material-symbols-rounded">chevron_right</span>
                        </div>
                    </header>
                    <div class="calendar">
                        <ul class="weeks">
                        <li>Sun</li>
                        <li>Mon</li>
                        <li>Tue</li>
                        <li>Wed</li>
                        <li>Thu</li>
                        <li>Fri</li>
                        <li>Sat</li>
                        </ul>
                        <ul class="days"></ul>
                    </div>
                </div>

                <script>
                    const daysTag = document.querySelector(".days"),
                    currentDate = document.querySelector(".current-date"),
                    prevNextIcon = document.querySelectorAll(".icons span");

                    // getting new date, current year and month
                    let date = new Date(),
                    currYear = date.getFullYear(),
                    currMonth = date.getMonth();

                    // storing full name of all months in array
                    const months = ["January", "February", "March", "April", "May", "June", "July",
                                "August", "September", "October", "November", "December"];

                    const renderCalendar = () => {
                        let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // getting first day of month
                        lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // getting last date of month
                        lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // getting last day of month
                        lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // getting last date of previous month
                        let liTag = "";

                        for (let i = firstDayofMonth; i > 0; i--) { // creating li of previous month last days
                            liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
                        }

                        for (let i = 1; i <= lastDateofMonth; i++) { // creating li of all days of current month
                            // adding active class to li if the current day, month, and year matched
                            let isToday = i === date.getDate() && currMonth === new Date().getMonth() 
                                        && currYear === new Date().getFullYear() ? "active" : "";
                            liTag += `<li class="${isToday}">${i}</li>`;
                        }

                        for (let i = lastDayofMonth; i < 6; i++) { // creating li of next month first days
                            liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`
                        }
                        currentDate.innerText = `${months[currMonth]} ${currYear}`; // passing current mon and yr as currentDate text
                        daysTag.innerHTML = liTag;
                    }
                    renderCalendar();

                    prevNextIcon.forEach(icon => { // getting prev and next icons
                        icon.addEventListener("click", () => { // adding click event on both icons
                            // if clicked icon is previous icon then decrement current month by 1 else increment it by 1
                            currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

                            if(currMonth < 0 || currMonth > 11) { // if current month is less than 0 or greater than 11
                                // creating a new date of current year & month and pass it as date value
                                date = new Date(currYear, currMonth, new Date().getDate());
                                currYear = date.getFullYear(); // updating current year with new date year
                                currMonth = date.getMonth(); // updating current month with new date month
                            } else {
                                date = new Date(); // pass the current date as date value
                            }
                            renderCalendar(); // calling renderCalendar function
                        });
                    });
                                    
                </script>
    
                
            </div>
            
        </div>
        
<!--------------------------------------- webview of progress details--------------------------------------------------->

        <div class="webview_progressdetails">
                    <div class="track_buttons">
                        <button id="btn2" onclick="myFunction()">On-Track</button>
                        <button id="btn2" onclick="myFunction2()">Off-Track</button>
                    </div>

                    <script>
                    function myFunction() {
                    var x = document.getElementById("container2");
                    var y = document.getElementById("container3");
                    
                    if (x.style.display === "block") {
                        x.style.display = "none";
                    } else {
                        x.style.display = "block";
                        y.style.display = "none";
                    }
                    }
                    function myFunction2() {
                    var x = document.getElementById("container3");
                    var y = document.getElementById("container2");
                    if (x.style.display === "block") {
                        x.style.display = "none";
                    } else {
                        x.style.display = "block";
                        y.style.display = "none";
                    }
                    }
                </script>




            <div class="detailed_progress_container2" id="container2">
                <div class="container2_wrapper1">
                <div style="margin-top:0.5rem"><span><img src="images/ronald.jpg" style="width:2rem; background-color:#f8f6f6;border-radius:1rem"> Ronald Richards</span></a></span></div>
                <div class="info"><span>Steps</span> <div class="symbols"><div style="color:#FDA184"><span class="material-symbols-outlined" style="font-size:2rem;font-weight:600">line_end</span></div><div style="margin-top:0.3rem"><span >4855 steps</span></div></div></div>
                <div class="info"><span>Heart Rate</span> <div class="symbols"><div style="color:#F080B2"><span class="material-symbols-outlined" style="font-size:2rem;font-weight:600">line_end</span></div><div style="margin-top:0.3rem"><span >150 bpm</span></div></div></div>
                <div class="info"><span>Weight</span> <div class="symbols"><div style="color:#7B979D"><span class="material-symbols-outlined" style="font-size:2rem;font-weight:600">line_end</span></div><div style="margin-top:0.3rem"><span >1.6kg</span></div></div></div>
                <div class="info"><span>Sleep</span> <div class="symbols"><div style="color:#7853E3"><span class="material-symbols-outlined" style="font-size:2rem;font-weight:600">line_end</span></div><div style="margin-top:0.3rem"><span >7 hrs</span></div></div></div>
                

                </div>
                
            </div>


            
            <div class="detailed_progress_container2" id="container3">
                <div class="container2_wrapper1">
                <div style="margin-top:0.5rem"><span><img src="images/ronald.jpg" style="width:2rem; background-color:#f8f6f6;border-radius:1rem"> Ronald Richards</span></a></span></div>
                <div class="info"><span>Steps</span> <div class="symbols"><div style="color:#FDA184"><span class="material-symbols-outlined" style="font-size:2rem;font-weight:600">line_end</span></div><div style="margin-top:0.3rem"><span >2356 steps</span></div></div></div>
                <div class="info"><span>Heart Rate</span> <div class="symbols"><div style="color:#F080B2"><span class="material-symbols-outlined" style="font-size:2rem;font-weight:600">line_end</span></div><div style="margin-top:0.3rem"><span >150 bpm</span></div></div></div>
                <div class="info"><span>Weight</span> <div class="symbols"><div style="color:#7B979D"><span class="material-symbols-outlined" style="font-size:2rem;font-weight:600">line_end</span></div><div style="margin-top:0.3rem"><span >1.6kg</span></div></div></div>
                <div class="info"><span>Sleep</span> <div class="symbols"><div style="color:#7853E3"><span class="material-symbols-outlined" style="font-size:2rem;font-weight:600">line_end</span></div><div style="margin-top:0.3rem"><span >7 hrs</span></div></div></div>
                

                </div>
                
            </div>


            
        </div>





        <!--------------------------------------- mobview of progress details--------------------------------------------------->

        <div class="mobview_progressdetails">
                    <div class="track_buttons">
                        <button id="btn2" onclick="myFunction3()">On-Track</button>
                        <button id="btn2" onclick="myFunction4()">Off-Track</button>
                    </div>

                    <script>
                    function myFunction3() {
                    var x = document.getElementById("container4");
                    var y = document.getElementById("container5");
                    
                    if (x.style.display === "block") {
                        x.style.display = "none";
                    } else {
                        x.style.display = "block";
                        y.style.display = "none";
                    }
                    }
                    function myFunction4() {
                    var x = document.getElementById("container5");
                    var y = document.getElementById("container4");
                    if (x.style.display === "block") {
                        x.style.display = "none";
                    } else {
                        x.style.display = "block";
                        y.style.display = "none";
                    }
                    }
                </script>


            <div class="mobview_container1" id="container4">
                    <div class="mob_container1_wrapper1" >
                            <span><a href="" style=" color:black;font-weight:500; border:none; margin-top:1rem;background-color:white; margin-left:1rem"><span><img src="images/ronald.jpg" style="width:2rem;border-radius:1rem"> Ronald Richards</span></a></span>
                            <div class="row1" style="display:flex ; gap:2rem ">
                                    <div class="steps">
                                        <div class="symbols">
                                        <div style="color:#F6A682"><span class="material-symbols-outlined">footprint</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Steps</span></div></div>
                                        <span style="font-size:0.9rem;color:#454545">5256 steps</span>
                                    </div>
                                    <div class="steps">
                                        <div class="symbols">
                                        <div style="color:#EF80B2"><span class="material-symbols-outlined">monitor_heart</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Heart Rate</span></div></div>
                                        <span style="font-size:0.9rem;color:#454545">150 bpm</span>
                                    </div>
                            </div>

                            <div class="row2" style="display:flex ; gap:2rem">
                                    <div class="steps">
                                        <div class="symbols">
                                        <div style="color:#788F96"><span class="material-symbols-outlined">weight</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Weight</span></div></div>
                                        <span style="font-size:0.9rem;color:#454545">1.6 kg</span>
                                    </div>
                                    <div class="steps">
                                        <div class="symbols">
                                        <div style="color:#7550E2"><span class="material-symbols-outlined">bedtime</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Sleep</span></div></div>
                                        <span style="font-size:0.9rem;color:#454545">7 hrs.</span>
                                    </div>
                            </div>




            
                     </div>
                        
            </div>

            <div class="mobview_container1" id="container5">
                    <div class="mob_container1_wrapper1" >
                                    <span><a href="" style=" color:black;font-weight:500; border:none; margin-top:1rem;background-color:white; margin-left:1rem"><span><img src="images/ronald.jpg" style="width:2rem;border-radius:1rem"> Ronald Richards</span></a></span>
                                    <div class="row1" style="display:flex ; gap:2rem ">
                                            <div class="steps">
                                                <div class="symbols">
                                                <div style="color:#F6A682"><span class="material-symbols-outlined">footprint</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Steps</span></div></div>
                                                <span style="font-size:0.9rem;color:#454545">2356 steps</span>
                                            </div>
                                            <div class="steps">
                                                <div class="symbols">
                                                <div style="color:#EF80B2"><span class="material-symbols-outlined">monitor_heart</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Heart Rate</span></div></div>
                                                <span style="font-size:0.9rem;color:#454545">150 bpm</span>
                                            </div>
                                    </div>

                                    <div class="row2" style="display:flex ; gap:2rem">
                                            <div class="steps">
                                                <div class="symbols">
                                                <div style="color:#788F96"><span class="material-symbols-outlined">weight</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Weight</span></div></div>
                                                <span style="font-size:0.9rem;color:#454545">1.6 kg</span>
                                            </div>
                                            <div class="steps">
                                                <div class="symbols">
                                                <div style="color:#7550E2"><span class="material-symbols-outlined">bedtime</span></div><div style="margin-top:0.2rem; font-weight:500"><span>Sleep</span></div></div>
                                                <span style="font-size:0.9rem;color:#454545">7 hrs.</span>
                                            </div>
                                    </div>




            
                     </div>

            
                
            </div>



            
        </div>





        




        
    </div>
    
</body>
</html>