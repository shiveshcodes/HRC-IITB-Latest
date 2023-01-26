
var showedNav = false;
function navSwitch()
{
    !showedNav?openNav():closeNav();
    showedNav=!showedNav;
    document.getElementsByClassName("ham")[0].classList.toggle('active')
}

function openNav() {
    var logo = document.getElementsByClassName("alogo")[0];
    logo.style.left="50%";
    logo.style.transform="translateX(-50%)";
    var logo = document.getElementsByClassName("navlogo")[0];
    logo.style.left="50%";
    logo.style.transform="translateX(-50%)";
    document.getElementById("myNav").style.height = "100%";
    document.getElementsByClassName("overlay-content")[0].style.display="block"
  }
  
  function closeNav() {
    var logo = document.getElementsByClassName("alogo")[0];
    logo.style.left="1%";
    logo.style.transform="translateX(0%)";
    var logo = document.getElementsByClassName("navlogo")[0];
    logo.style.left="0%";
    logo.style.transform="translateX(0%)";
    document.getElementsByClassName("overlay-content")[0].style.display="none";
    document.getElementById("myNav").style.height = "98px";
  }

  // function openDropTA() {
  //   document.querySelector("#TA").style.maxHeight = "200px";
  // }
  
  // function closeDropTA() {
  //   document.querySelector("#TA").style.maxHeight = "0px";
  // }
  
  function openDropEvents() {
    document.querySelector("#events").style.maxHeight = "200px";
  }
  
  function closeDropEvents() {
    document.querySelector("#events").style.maxHeight = "0px";
  }
  var open = false;
  function toggleDropEvents() {
    if(open) {
      closeDropEvents();
      open=!open;
      
    }
    else{
      openDropEvents();
      open=!open;
    }
  }

  function reveal(){
    var reveals = document.querySelectorAll(".reveal");
    for( var i = 0; i < reveals.length; i++){
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
      if ((elementTop < windowHeight - elementVisible)){
        reveals[i].classList.add("active");
      }
      else{
        reveals[i].classList.remove("active");
    }

  }
}

window.addEventListener("scroll", reveal);