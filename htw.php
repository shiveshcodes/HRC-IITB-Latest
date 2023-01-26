<?php $title="How Things Work"; include "header.php"; ?>

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
                These are talks given by the senior members of the satellite team on how wireless devices and communication works. These talks will give you a good insight into topics like satellite communication, SSTV, etc.
                </p>
                <div style="htw-link">
                    <iframe src="https://www.youtube.com/embed/zcpHzKjDD6s" frameborder="0" allowfullscreen class="htw-child"></iframe>
                </div>
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
                The latest session was a live demonstration by Vaishnavi Agarwal on SSTV (slow-scan television) held on 10th January 2021. SSTV is a widely-used communication protocol in the amateur radio community and also by ARISS (Amateur radio on the International Space Station). Attendees were taught about the underlying theory of the SSTV protocol and how the encoding/decoding of an image/audio respectively is done in an SSTV interface. 
                </p>
                <!-- carosuel starts -->
                <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel" style="text-align: center;">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./img/hos/htw/htw1.jpg" class="d-block" alt=".." id="testi-imgs">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/hos/htw/htw2.jpg" class="d-block" alt=".." id="testi-imgs">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3"
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

<div style="height:200px"> 
    <center><a href="hos.php"><button>Back To Hands On Session!</button></a><center>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php include 'footer.php'; ?>