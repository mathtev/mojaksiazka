var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("lower-header").style.display = "initial";
    } else {
        document.getElementById("lower-header").style.display = "none";
    }
    prevScrollpos = currentScrollPos;
}


$(document).ready(function() {
    $(".upper-list").click(function(){
      var x = document.getElementById("navigation");
      if (x.style.display === "flex") {
        x.style.display = "none";
      } else {
        x.style.display = "flex";
      }
    });
});