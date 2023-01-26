<?php $title="Home"; include "header.php"; ?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/home.css">
</head>

<section style="flex-direction: column; height: auto;">
    <div class="container reveal">
        <div class="text-container reveal">
            <div class="text-box">
                <br>
                <p class="para">
                Ham Radio Club has the vision to foster and grow the amateur radio community at IIT Bombay and beyond. Ham radio is a hobby and technology that allows us to interact with people across the globe using wireless communication. As a subsidiary of the IIT Bombay Student Satellite Program, we aim to set up a full-fledged autonomous ground station with advanced and updated technology while attaining numerous ham radio licenses.
                </p>
                <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel" style="text-align: center;">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="6" aria-label="Slide 7"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" >
                            <img src="./img/homepage/home1.jpg" class="d-block" alt="..." class="testi-imgs" >
                            <div class="carousel-caption" style="left:0%;">
                                <!-- <h5>Antenna Theory and Making Session</h5> -->
                                <p>Our radio shack with all the equipment we use to perform ham radio activities</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./img/homepage/home2.jpeg" class="d-block" alt="..." class="testi-imgs">
                            <div class="carousel-caption" style="left:0%;">
                                <!-- <h5>Antenna Theory and Making Session</h5> -->
                                <p>Ground Station Workshop 2022</p>
                            </div>
                        </div>
                        <div class="carousel-item" style="left:0%;">
                            <img src="./img/homepage/home3.jpg" class="" alt="..." class="testi-imgs">
                            <div class="carousel-caption">
                                <!-- <h5>Antenna Theory and Making Session</h5> -->
                                <p>Team HRC after successfully conducting the first offline event after pandemic</p>
                            </div>
                        </div>
                        <div class="carousel-item" style="left:0%;">
                            <img src="./img/homepage/home4.JPG" class="" alt="..." class="testi-imgs">
                            <div class="carousel-caption">
                                <!-- <h5>Antenna Theory and Making Session</h5> -->
                                <p>‘Track with us’: Demonstration of LIVE satellite tracking at IIT Bombay</p>
                            </div>
                        </div>
                        <div class="carousel-item" style="left:0%;">
                            <img src="./img/homepage/home5.jpeg" class="" alt="..." class="testi-imgs">
                            <div class="carousel-caption">
                                <!-- <h5>Antenna Theory and Making Session</h5> -->
                                <p>Tracking of ISS using the Yagi antenna + hand-held radio setup to receive SSTV images</p>
                            </div>
                        </div>
                        <div class="carousel-item" style="left:0%;">
                            <img src="./img/homepage/home6.jpg" class="" alt="..." class="testi-imgs">
                            <div class="carousel-caption">
                                <!-- <h5>Antenna Theory and Making Session</h5> -->
                                <p>Collaboration between MARI & HRC</p>
                            </div>
                        </div>
                        <div class="carousel-item" style="left:0%;">
                            <img src="./img/homepage/home7.jpg" class="" alt="..." class="testi-imgs">
                            <div class="carousel-caption">
                                <!-- <h5>Antenna Theory and Making Session</h5> -->
                                <p>A talk on the overview of ham radio by the Mumbai Amateur Radio Organisation</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div> 
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php include 'footer.php'; ?>

