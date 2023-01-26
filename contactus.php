<?php $title="Contact Us"; include "header.php"; ?>

<link rel="stylesheet" href=".\styles/contactus.css">


<div class="contact-wrapper">

    <!-- Left contact page starts -->
    <div class="contact-form">
        <div class="loginform">
            <div class="title">
                Write To Us!
            </div>
            <form method="POST" name="form1">
                <div class="input-form username">
                    <input type="text" class="input" id="username" placeholder="Name" required>
                    <i class="fas fa-user"></i>
                </div>
                <div class="input-form email">
                    <input  type="email" class="input"  id ="email" placeholder="Email address" name="text1" required ">
                    <i class="fas fa-at"></i>
                </div>
                <div class="input-form password">
                    <textarea type="message" class="input" id = "message" placeholder="Message" required></textarea>
                    <i class="fas fa-comment-alt"></i>
                </div>
                <div class="g-recaptcha" data-sitekey="6LcUfn0gAAAAAEfxm7ufMOEsShJbDcgg7PhH4S7j" id="contact-recaptcha" style="width: 60%; position: relative;
                left: 12%; margin-bottom: 20px; ">
                </div>
                <input class="btn a" type="submit" name="submit" id="submit" value="SUBMIT">
            </form>
        </div>
    </div>
    <!-- Left carousel page ends -->


    <!-- Right contact page starts-->
    <div class="infoform">
        <div class="direct-contact-container">

            <ul class="contact-list">

                <li class="list-item">
                    <div class="row">
                        <div>
                            <i class="fas fa-user-alt fa-2x"></i>
                        </div>
                        <div>
                        <span>Neeraj Prabhu</span><br>
                            <span> Manager</span><br>
                            <span>Ham Radio Club</span><br/>
                        </div>
                    </div>
                </li>
                <br/>
                <li class="list-item">
                    <div class="row">
                        <div>
                        <i class="fa-solid fa-address-card fa-2x"></i>
                        </div>
                        <div>
                        <span ><a href="mailto:hamradioclub.iitb@gmail.com" title="" class="contact-right-link">hamradioclub.iitb@gmail.com</a></span><br>
                            <span ><a href="https://wa.me/+917738367885" title="" class="contact-right-link" target="_blank">+91 7738367885</a></span>
                        </div>
                    </div>
                </li>
                <br/>
                <li class="list-item">
                    <div class="row">
                        <div>
                        <i class="fas fa-map-marker-alt fa-2x"></i>
                        </div>
                        <div>
                        <span >Student Satellite Lab</span><br>
                            <span >Aerospace Engineering Department</span><br>
                            <span>IIT Bombay, Powai</span>
                        </div>
                    </div>
                </li>

                <!-- <li class="list-item"><i class="fa fa-envelope-open fa-2x"><span class="contact-text gmail"><a
                                href="mailto:hamradioclub.iitb@gmail.com" title="">Send an email</a></span></i></li> -->

            </ul>

            <hr>

            <ul class="social-media-list">
                <a href="https://discord.gg/bMFkEQPtdH" target="_blank" class="contact-icon">
                    <li>
                        <i class="fab fa-github" aria-hidden="true"></i>
                    </li>
                </a>
                <a href="https://www.youtube.com/channel/UCM-huMvA7y-FYloRkw3beKA" target="_blank" class="contact-icon">
                    <li>
                        <i class="fab fa-youtube" aria-hidden="true"></i>
                    </li>
                </a>
                <a href="https://www.facebook.com/HamclubIITB" target="_blank" class="contact-icon">
                    <li> <i class="fab fa-facebook" aria-hidden="true"></i></li>
                </a>

                <a href="https://www.instagram.com/hrc.iitb/" target="_blank" class="contact-icon">
                    <li> <i class="fab fa-instagram " aria-hidden="true"></i></li>
                </a>

                <a href="https://www.linkedin.com/company/ham-radio-club-iit-bombay/" target="_blank"
                    class="contact-icon">
                    <li><i class="fab fa-linkedin" aria-hidden="true"></i></li>
                </a>

            </ul>

            <hr>

        </div>
    </div>

    <!-- Right contact page ends -->

</div>


<div style="padding-top:100px"></div>


<!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
<script src="https://www.google.com/recaptcha/api.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">


      eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('0 v(1){1h y=/^[a-m-l-9.!#$%&\'*+/=?^1g`{|}~-]+@[a-m-l-9-]+(?:\\.[a-m-l-9-]+)*$/;f(1.2.1f(y)){x 1e}d{3();x 1d}}(0(){s.1c("1b")})();0 u(){i 5=h.g("#1a");i 1=h.g("#1");i 4=h.g("#j");i w=h.g("#19");w.18("17",(e)=>{e.16();f(5.2==""||1.2==""||4.2==""){r()}d f(!v(1)){3()}d f(!15.14()){q()}d{t(5.2,1.2,4.2);k();13(0(){12.11.10=\'Z.Y\'},X)}})}u();0 t(5,1,4){s.W("V","U",{T:5,S:"R Q P, O N",j:4,M:1,})}0 r(){c.b({8:"3",7:"L...",6:"K o n J!",})}0 3(){c.b({8:"3",7:"p...",6:"I H G F!",})}0 q(){c.b({8:"3",7:"p...",6:"E D, o n C!",})}0 k(){c.b({8:"k",7:"B...",6:"A z j",})}',62,80,'function|email|value|error|msg|name|text|title|icon|||fire|Swal|else||if|querySelector|document|let|message|success|Z0|zA|be|cannot|Error|g_error|emptyerror|emailjs|sendmail|validate|ValidateEmail|btn|return|validRegex|sent|Successfully|Success|validated|again|Try|incorrectly|written|Id|Email|empty|Fields|Oops|to_email|Bombay|IIT|Club|Radio|Ham|from_name|to_name|template_tbnp37z|service_4lb2l9r|send|1000|php|contactus|href|location|window|setTimeout|getResponse|grecaptcha|preventDefault|click|addEventListener|submit|username|yFogjqh6tlxZQHGGu|init|false|true|match|_|var'.split('|'),0,{}))

    </script>


<?php include 'footer.php'; ?>