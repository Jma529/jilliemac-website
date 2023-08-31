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

// Slide in timeline items on scroll

function debounce(func, wait, immediate) {
  var timeout;
  return function () {
    var context = this,
      args = arguments;
    var later = function () {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
}

const sliderItems = document.querySelectorAll(".slide-in");

function checkSlide(e) {
  // loop over timeline iteme

  sliderItems.forEach((sliderItem) => {
    //half way through Items
    const slideInAt =
      window.scrollY + window.innerHeight - sliderItem.height / 2;
    // bottom of the item
    const itemBottom = sliderItem.offsetTop + sliderItem.height;
    // half way in the Items
    const isHalfShown = slideInAt > sliderItem.offsetTop;

    const isNoScrolledPast = window.scrollY < itemBottom;

    if (isHalfShown && isNoScrolledPast) {
      sliderItem.classList.add("slide-active");
    } else {
      sliderItem.classList.remove("slide-active");
    }
  });
}

window.addEventListener("scroll", debounce(checkSlide));
