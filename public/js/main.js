/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/main.js":
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
/***/ (() => {

(function ($) {
  "use strict";

  // Dropdown on mouse hover
  $(document).ready(function () {
    function toggleNavbarMethod() {
      if ($(window).width() > 992) {
        $('.navbar .dropdown').on('mouseover', function () {
          $('.dropdown-toggle', this).trigger('click');
        }).on('mouseout', function () {
          $('.dropdown-toggle', this).trigger('click').blur();
        });
      } else {
        $('.navbar .dropdown').off('mouseover').off('mouseout');
      }
    }
    toggleNavbarMethod();
    $(window).resize(toggleNavbarMethod);
  });

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function () {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  // Facts counter
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 2000
  });

  // Date and time picker
  $('#date').datetimepicker({
    format: 'L'
  });
  $('#time').datetimepicker({
    format: 'LT'
  });

  // Service carousel
  $(".service-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1500,
    loop: true,
    dots: false,
    nav: false,
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 2
      },
      768: {
        items: 3
      },
      992: {
        items: 4
      },
      1200: {
        items: 5
      }
    }
  });

  // Pricing carousel
  $(".pricing-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1500,
    margin: 30,
    loop: true,
    dots: false,
    nav: false,
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 1
      },
      768: {
        items: 2
      }
    }
  });

  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1500,
    margin: 30,
    dots: true,
    loop: true,
    items: 1
  });
})(jQuery);

/***/ }),

/***/ "./resources/css/style.css":
/*!*********************************!*\
  !*** ./resources/css/style.css ***!
  \*********************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/css-loader/dist/cjs.js):\nError: Can't resolve '../../../../../../laragon/www/BeautySalon/img/carousel-1.jpg' in 'C:\\laragon\\www\\BeautySalon\\resources\\css'\n    at finishWithoutResolve (C:\\laragon\\www\\BeautySalon\\node_modules\\enhanced-resolve\\lib\\Resolver.js:564:18)\n    at C:\\laragon\\www\\BeautySalon\\node_modules\\enhanced-resolve\\lib\\Resolver.js:656:15\n    at C:\\laragon\\www\\BeautySalon\\node_modules\\enhanced-resolve\\lib\\Resolver.js:718:5\n    at eval (eval at create (C:\\laragon\\www\\BeautySalon\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:16:1)\n    at C:\\laragon\\www\\BeautySalon\\node_modules\\enhanced-resolve\\lib\\Resolver.js:718:5\n    at eval (eval at create (C:\\laragon\\www\\BeautySalon\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:27:1)\n    at C:\\laragon\\www\\BeautySalon\\node_modules\\enhanced-resolve\\lib\\DescriptionFilePlugin.js:89:43\n    at C:\\laragon\\www\\BeautySalon\\node_modules\\enhanced-resolve\\lib\\Resolver.js:718:5\n    at eval (eval at create (C:\\laragon\\www\\BeautySalon\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:15:1)\n    at C:\\laragon\\www\\BeautySalon\\node_modules\\enhanced-resolve\\lib\\Resolver.js:718:5\n    at eval (eval at create (C:\\laragon\\www\\BeautySalon\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:16:1)\n    at C:\\laragon\\www\\BeautySalon\\node_modules\\enhanced-resolve\\lib\\Resolver.js:718:5\n    at eval (eval at create (C:\\laragon\\www\\BeautySalon\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:16:1)\n    at C:\\laragon\\www\\BeautySalon\\node_modules\\enhanced-resolve\\lib\\Resolver.js:718:5\n    at eval (eval at create (C:\\laragon\\www\\BeautySalon\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:27:1)\n    at C:\\laragon\\www\\BeautySalon\\node_modules\\enhanced-resolve\\lib\\DescriptionFilePlugin.js:89:43\n    at C:\\laragon\\www\\BeautySalon\\node_modules\\enhanced-resolve\\lib\\Resolver.js:718:5\n    at eval (eval at create (C:\\laragon\\www\\BeautySalon\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:16:1)\n    at C:\\laragon\\www\\BeautySalon\\node_modules\\enhanced-resolve\\lib\\Resolver.js:718:5\n    at eval (eval at create (C:\\laragon\\www\\BeautySalon\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:15:1)\n    at C:\\laragon\\www\\BeautySalon\\node_modules\\enhanced-resolve\\lib\\DirectoryExistsPlugin.js:41:15\n    at process.processTicksAndRejections (node:internal/process/task_queues:81:21)\n    at processResult (C:\\laragon\\www\\BeautySalon\\node_modules\\webpack\\lib\\NormalModule.js:841:19)\n    at C:\\laragon\\www\\BeautySalon\\node_modules\\webpack\\lib\\NormalModule.js:971:5\n    at C:\\laragon\\www\\BeautySalon\\node_modules\\loader-runner\\lib\\LoaderRunner.js:400:11\n    at C:\\laragon\\www\\BeautySalon\\node_modules\\loader-runner\\lib\\LoaderRunner.js:252:18\n    at context.callback (C:\\laragon\\www\\BeautySalon\\node_modules\\loader-runner\\lib\\LoaderRunner.js:124:13)\n    at Object.loader (C:\\laragon\\www\\BeautySalon\\node_modules\\css-loader\\dist\\index.js:155:5)\n    at process.processTicksAndRejections (node:internal/process/task_queues:95:5)");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	__webpack_modules__["./resources/js/main.js"]();
/******/ 	// This entry module doesn't tell about it's top-level declarations so it can't be inlined
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/css/style.css"]();
/******/ 	
/******/ })()
;