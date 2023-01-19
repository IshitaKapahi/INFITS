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
    <link rel="stylesheet" href="client_detailed_progress.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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
                <div class="track_buttons">
                    <button id="btn2">On-Track</button>
                    <button id="btn2">Off-Track</button>
                </div>
                
            </div>
            <div class="container1_rightside">
                
            </div>
            
        </div>

        <div class="detailed_progress_container2">
            
        </div>
        
    </div>
    
</body>
</html>