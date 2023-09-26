import domReady from '@roots/sage/client/dom-ready';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);


var hamburger = document.querySelector('.hamburger');
var menu = document.querySelector('.menu');
var menuItems = document.querySelectorAll('.menu-item a');

// On click
hamburger.addEventListener("click", function() {
// Toggle class "is-active"
hamburger.classList.toggle("is-active");
// Toggle menu
menu.classList.toggle("menu-active");

});

// Close menu when menu item is clicked 

menuItems.forEach(function(link) {
  link.addEventListener("click", function(event) {
    // Remove class "is-active"
     menu.classList.remove("menu-active");
     hamburger.classList.remove("is-active");
  });
});

// Slide in timeline items on scroll

function reveal() {
  var reveals = document.querySelectorAll(".slide-in");
  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 100;
    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("slide-active");
    } else {
      reveals[i].classList.remove("slide-active");
    }
  }
}

window.addEventListener("scroll", reveal);

// To check the scroll position on page load
// reveal();

// Rainbow animation 

function rainbow () {
  Array.from(document.getElementsByClassName("path")).forEach(pathElement => {
    pathElement.setAttribute('style', 'stroke-dasharray:'+pathElement.getTotalLength()+';stroke-dashoffset:'+pathElement.getTotalLength())
  })
}

window.addEventListener("scroll", rainbow);
 
