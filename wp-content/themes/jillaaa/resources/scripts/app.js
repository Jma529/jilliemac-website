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
var menuItem = document.querySelector('.menu-item');

// On click
hamburger.addEventListener("click", function() {
// Toggle class "is-active"
hamburger.classList.toggle("is-active");
// Toggle menu
menu.classList.toggle("menu-active");

});

// Close menu when menu item is clicked 

menuItem.addEventListener("click", function () {
// Remove class "is-active"
menu.classList.remove("menu-active");
hamburger.classList.remove("is-active");
});