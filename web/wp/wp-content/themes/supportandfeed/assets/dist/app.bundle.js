/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./app.js":
/*!****************!*\
  !*** ./app.js ***!
  \****************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_index_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./scss/index.scss */ \"./scss/index.scss\");\n/* harmony import */ var _js_navmenu__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./js/navmenu */ \"./js/navmenu.js\");\n/* harmony import */ var _js_navmenu__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_js_navmenu__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _js_modal__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./js/modal */ \"./js/modal.js\");\n/* harmony import */ var _js_modal__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_js_modal__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _js_faq__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./js/faq */ \"./js/faq.js\");\n/* harmony import */ var _js_faq__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_js_faq__WEBPACK_IMPORTED_MODULE_3__);\n\n\n\n // Get the navbar\n\nvar navbar = document.getElementById('mainNavbar');\nvar mobileNavbar = document.getElementById('mobileNavbar');\nvar pageContainer = document.getElementsByClassName('page')[0]; // Get the offset position of the navbar\n\nvar sticky = navbar.offsetTop + 10; // Check if the navbar is still visible after scroll\n\nwindow.onscroll = () => {\n  if (window.pageYOffset >= sticky) {\n    navbar.classList.add('navbar-sticky');\n    mobileNavbar.classList.add('navbar-sticky');\n    pageContainer.classList.add('mt-16');\n  } else {\n    navbar.classList.remove('navbar-sticky');\n    mobileNavbar.classList.remove('navbar-sticky');\n    pageContainer.classList.remove('mt-16');\n  }\n};\n\n//# sourceURL=webpack:///./app.js?");

/***/ }),

/***/ "./js/faq.js":
/*!*******************!*\
  !*** ./js/faq.js ***!
  \*******************/
/***/ (() => {

eval("const faqSections = jQuery('.faq-container');\njQuery('.faq-paragraph').hide();\njQuery('.faq-question').click(ev => {\n  const section = jQuery(ev.target).closest('.faq-container');\n  section.find('.faq-paragraph').slideToggle(300);\n});\n\n//# sourceURL=webpack:///./js/faq.js?");

/***/ }),

/***/ "./js/modal.js":
/*!*********************!*\
  !*** ./js/modal.js ***!
  \*********************/
/***/ (() => {

eval("// By default, hide all staff blocks\njQuery('.staff-block-modal').hide(); // Open staff block modal\n\njQuery('.staff-block-name, .staff-block-profile').click(item => {\n  const parent = jQuery(item.target).parents('.wp-block-sf-staff-block');\n  const modal = jQuery(parent).children('.staff-block-modal');\n  show_modal(modal);\n}); // Close modal when clicking on the backdrop\n\njQuery('.staff-block-modal').click(item => {\n  hide_modal(jQuery(item.target));\n});\njQuery('.modal-close-btn').click(item => {\n  const parentModal = jQuery(item.target).parents('.staff-block-modal');\n  hide_modal(jQuery(parentModal));\n}); // Prevent closing of the modal when clicking inside of it\n\njQuery('.modal-container').click(ev => {\n  ev.stopPropagation();\n});\n\nfunction show_modal(modal) {\n  modal.fadeIn(200);\n  jQuery('body').css('overflow', 'hidden');\n}\n\nfunction hide_modal(modal) {\n  modal.fadeOut(200);\n  jQuery('body').css('overflow', 'scroll');\n}\n\n//# sourceURL=webpack:///./js/modal.js?");

/***/ }),

/***/ "./js/navmenu.js":
/*!***********************!*\
  !*** ./js/navmenu.js ***!
  \***********************/
/***/ (() => {

eval("const expandBtn = jQuery('#menu-expand-btn');\nconst closeBtn = jQuery('#menu-close-btn');\nconst mobileMenu = jQuery('#menu-mobile-full');\nexpandBtn.click(() => {\n  mobileMenu.slideDown(200);\n});\ncloseBtn.click(() => {\n  mobileMenu.slideUp(200);\n});\nmobileMenu.click(() => {\n  mobileMenu.slideUp(200);\n});\n\n//# sourceURL=webpack:///./js/navmenu.js?");

/***/ }),

/***/ "./scss/index.scss":
/*!*************************!*\
  !*** ./scss/index.scss ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack:///./scss/index.scss?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./app.js");
/******/ 	
/******/ })()
;