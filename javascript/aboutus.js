function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;
    var img_var0 = document.getElementById("fix-img0");
    var img_var1 = document.getElementById("fix-img1");
    var img_var2 = document.getElementById("fix-img2");
    var img_var3 = document.getElementById("fix-img3");
    var img_var4 = document.getElementById("fix-img4");
    var img_var5 = document.getElementById("fix-img5");
    var img_var6 = document.getElementById("fix-img6");
    var img_var7 = document.getElementById("fix-img7");
    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");

      if (i == 5) {
        img_var0.classList.add("active");
        img_var0.style["visibility"] = "visible";
      } else {
        img_var0.classList.remove("active");
        img_var0.style["visibility"] = "hidden";
      }

      if (i == 6) {
        img_var1.classList.add("active");
        img_var1.style["visibility"] = "visible";
      } else {
        img_var1.classList.remove("active");
        img_var1.style["visibility"] = "hidden";
      }

      if (i == 7) {
        img_var2.classList.add("active");
        img_var2.style["visibility"] = "visible";
      } else {
        img_var2.classList.remove("active");
        img_var2.style["visibility"] = "hidden";
      }

      if (i == 8) {
        img_var3.classList.add("active");
        img_var3.style["visibility"] = "visible";
      } else {
        img_var3.classList.remove("active");
        img_var3.style["visibility"] = "hidden";
      }

      if (i == 9) {
        img_var4.classList.add("active");
        img_var4.style["visibility"] = "visible";
      } else {
        img_var4.classList.remove("active");
        img_var4.style["visibility"] = "hidden";
      }

      if (i == 10) {
        img_var5.classList.add("active");
        img_var5.style["visibility"] = "visible";
      } else {
        img_var5.classList.remove("active");
        img_var5.style["visibility"] = "hidden";
      }

      if (i == 11) {
        img_var6.classList.add("active");
        img_var6.style["visibility"] = "visible";
      } else {
        img_var6.classList.remove("active");
        img_var6.style["visibility"] = "hidden";
      }

      if (i == 12) {
        img_var7.classList.add("active");
        img_var7.style["visibility"] = "visible";
      } else {
        img_var7.classList.remove("active");
        img_var7.style["visibility"] = "hidden";
      }

    } 
    
    else {
      reveals[i].classList.remove("active");
    }

  }

}

window.addEventListener("scroll", reveal);


