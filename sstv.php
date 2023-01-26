<?php $title="SSTV Module"; include "header.php"; ?>

<head>
    <link rel="stylesheet" href="./styles/sstv.css">
</head>

<div class="sstv-container">

    <section class="div1">
        <div class="section">
            <p class="text">
                <b>Slow Scan Television</b> is a picture transmission method used mainly by ham radio operators. Static pictures
                are transmitted and received via analog frequency modulation in HF, UHF and VHF bands. Every pixel in an
                image is represented as a sinusoid of different frequencies and color is achieved by encoding the brightness
                of each color component separately. Demodulation can generate an audio representation of the image.
            </p>
            
            <div class="start text">Aim of the Mission</div>
            <ul class="aim-ul">
                <li class="aim text">
                    To design and build a satellite-borne transmitter for broadcasting images using the SSTV communication
                    protocol.
                </li>
                <br>
                <li class="aim text">
                    Equip and train a layperson (especially school students) to build a low-cost receiver (5000 INR) to
                    intercept the signal and get images.
                </li>
            </ul>
        </div>
        <img src="./img/sstv/sstv_module2.jpg" alt="" class="tablesideimg">
    </section>

    <!-- 
    <section>
        <div class="images">
            <img src="./img/sstv/sstv_1.png" alt="" class="introimg">
            <img src="./img/sstv/sstv_2.png" alt="" class="introimg">
        </div>
    </section> -->

    <div class="start text" style="text-align:center;   padding-top: 100px;">Specifications of the system</div>
    <section class="div2">
    <!-- <div class="tablesec"> -->
        <table>
            <tr>
                <th>SSTV Module</th>
                <td>PD90 (90 seconds)</td>
            </tr>
            <tr>
                <th>Display resolution</th>
                <td>320x256</td>
            </tr>
            <tr>
                <th>Operating Frequency Band</th>
                <td>UHF (434-440 Mhz)</td>
            </tr>
            <tr>
                <th>Power consumption</th>
                <td> &lt; 5.5W</td>
            </tr>
            <tr>
                <th>Cost (approx.) of Module</th>
                <td>INR 10,000</td>
            </tr>
            <tr>
                <th>Cost (approx.) of Receiver</th>
                <td>INR 5,000</td>
            </tr>
        </table>
    <!-- </div> -->
    </section>

    <div style="height:200px">
    <center><a href="ta.php"><button>Back To Technical Activities!</button></a><center>
    </div>

</div>

<?php include 'footer.php'; ?>