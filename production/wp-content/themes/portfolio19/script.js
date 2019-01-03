$(document).ready(function() {
  // $(".animsition").animsition({
  //   inClass: 'fade-in-up-sm',
  //   outClass: 'fade-out-up-sm'
  // });

  ScrollReveal().reveal('.fade');


  // Look for .hamburger
  var hamburger = document.querySelector(".hamburger");
  var overlay = document.querySelector(".overlay-menu");
  // On click
  hamburger.addEventListener("click", function() {
    // Toggle class "is-active"
    if (overlay.classList.contains("is-active")) {
      overlay.classList.add("is-closing");
      overlay.classList.remove("is-active");
      hamburger.classList.remove("is-active");
    }else{
      hamburger.classList.add("is-active");
      overlay.classList.add("is-active");
      overlay.classList.remove("is-closing");
    }
    // Do something else, like open/close menu
  });


});
