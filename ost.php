<?php $title="Online Satellite Tracking"; include "header.php"; ?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/hos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<section style="flex-direction: column; height: auto;">
    <div class="container reveal">
        <div class="text-container reveal">
            <div class="text-box">
            <br>
                <p class="para">
                Due to the coronavirus pandemic and lack of access to our ground station and equipment, we decided to widen our scope and explore virtual tracking with the help of webSDRs. It enables anyone to track satellites by accessing other ground stations using just the internet. Attendees and enthusiasts are acquainted with N2YO.com, webSDR and gain first-hand experience with software like Orbitron, MMSSTV, WxToImg, and ROBOT36. 
                </p>
                <!-- carousel starts -->
                <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel" style="text-align: center;">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./img/hos/ost/ost1.jpg" class="d-block" alt=".." id="testi-imgs">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/hos/ost/ost3.jpeg" class="d-block" alt=".." id="testi-imgs">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/hos/ost/ost2.jpg" class="d-block" alt=".." id="testi-imgs">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            <!-- carousel ends -->
            </div>
        </div>
    </div>
</section>


<section style="flex-direction: column; height: auto;">
    <div class="container reveal">
        <div class="text-container reveal">
            <div class="text-box">
            <br>
                <p class="para">
                The entire process of online tracking can be found on our blog <a href="https://hrciitb.wordpress.com/2020/08/24/ham-radio-101/" class = "ham-link" target="_blank"><i>Ham Radio 101</i></a> and the event videos are present on our Youtube Channel:
                </p>
                <div class = "yt-links">
                    <div class="yt-child">
                        <iframe src="https://www.youtube.com/embed/W2lVmWI31SY" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="yt-child">
                        <iframe src="https://www.youtube.com/embed/XekmcHyvoYo" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            <!-- carousel ends -->
            </div>
        </div>
    </div>
</section>

<div style="height:200px">  
    <center><a href="hos.php"><button>Back To Hands On Session!</button></a><center>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php include 'footer.php'; ?>