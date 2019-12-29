$(document).ready(function() {
  // $(".animsition").animsition({
  //   inClass: 'fade-in-up-sm',
  //   outClass: 'fade-out-up-sm'
  // });

  AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 200, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 800, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});

  // ScrollReveal().reveal('.fade');


  // // Look for .hamburger
  // var hamburger = document.querySelector(".hamburger");
  // var overlay = document.querySelector(".overlay-menu");
  // // On click
  // hamburger.addEventListener("click", function() {
  //   // Toggle class "is-active"
  //   if (overlay.classList.contains("is-active")) {
  //     overlay.classList.add("is-closing");
  //     overlay.classList.remove("is-active");
  //     hamburger.classList.remove("is-active");
  //   }else{
  //     hamburger.classList.add("is-active");
  //     overlay.classList.add("is-active");
  //     overlay.classList.remove("is-closing");
  //   }
  //   // Do something else, like open/close menu
  // });

  // $('.gallery').slick({
  //   infinite: true,
  //   slidesToShow: 3,
  //   slidesToScroll: 3
  // });



});
