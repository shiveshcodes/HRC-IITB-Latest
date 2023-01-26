<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Cache-Control: no-store, no-cache, must-revalidate');
        header('Cache-Control: post-check=0, pre-check=0', FALSE);
        header('Pragma: no-cache');
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./img/hrc_logo3.jpg">
    <link rel="stylesheet" href="./styles/header.css">
    <title><?php if (isset($title)) {echo $title;}?> | HRC, IIT Bombay</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
<style>
    .gswlink{
        position: absolute;
        font-size: 25px;
        top: 100px;
        left: 50%;
        z-index: 1;
        transform: translateX(-50%);
        text-align: center;
        animation: blink 1s linear infinite;
        background-image: linear-gradient(to right, red, yellow);
    }


    @keyframes blink{
        0%{
            opacity: 0;
        }
        50%{
            opacity: 1;
        }
        100%{
            opacity: 0;
        }
    }
</style>
</head>

<body>

    <div id="myNav" class="overlay">
        <div id="togglebtn">
            <a href="index.php" class="alogo">
            <img src="./img/hrc_logo3.jpg" alt="" class="navlogo">
            </a>

            <svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="70" onclick="navSwitch()">
                <path class="line top"
                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
                <path class="line middle" d="m 30,50 h 40" />
                <path class="line bottom"
                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
            </svg>
        </div>
        <div class="overlay-content">
            <a class="menu" href="index.php">Home</a>
            <a class="menu" href="aboutus.php">About Us</a>
            <!-- <hr/> -->
            <a class="menu" href="#" onclick="toggleDropEvents()">What We Do &nbsp <i class="fa fa-caret-down"></i></a>
            <div id="events" onclick="toggleDropEvents()">
                <a class="menu dropdown" href="ta.php">Technical Activities</a>
                <a class="menu dropdown" href="events.php">Events</a>
                <a class="menu dropdown" href="gsw.php">Ground Station Workshop</a>
                <a class="menu dropdown" href="hos.php">Hands-on Sessions</a>
            </div>
            <!-- <a class="menu" href="#" onmouseover="openDropTA()">Technical Activities &nbsp <i class="fa fa-caret-down"></i></a>
            <div id="TA"  onmouseleave="closeDropTA()">
                <a class="menu dropdown" href="satellite.php">Antenna Making</a>
                <a class="menu dropdown" href="radio.php">Radio Astronomy</a>
                <a class="menu dropdown" href="sstv.php">SSTV Module</a>
            </div> -->
            <!-- <hr/> -->
            <a class="menu" href="hamexam.php">Ham Exam</a>
            <!-- <hr/> -->
            <a class="menu" href="blogs.php">Blogs</a>
            <!-- <hr/> -->
            <a class="menu" href="media.php">Media</a>
            <!-- <hr/> -->
            <a class="menu" href="team.php">Team</a>
            <!-- <hr/> -->
            <a class="menu" href="contactus.php">Contact Us</a>
        </div>
    </div>

    <div class="gswlink"><a href="https://forms.gle/dMjMR2Q29Vs6kQmWA" target="blank">Register Here!<br>Ground Station Workshop</a></div>

    <div class="container">
    <section class="pagehead">
        <h1 style="margin: auto; text-transform:uppercase; color:white;"><?php if ($title=='Home' && isset($title)) {$hrc = 'HAM RADIO CLUB, IIT BOMBAY'; echo $hrc;}
        elseif($title=="GSW"){ echo 'Ground Station Workshop'; }
        else{ echo $title;}
        ?></h1>
        <br>
        <h4><i><?php if ($title=='Home' && isset($title)) {$message='"We bring people, communication and electronics together"'; echo $message;}
        ?></i></h4>
    </section>

    </div>

