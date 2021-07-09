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

/***/ "./front-page.js":
/*!***********************!*\
  !*** ./front-page.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nObject(function webpackMissingModule() { var e = new Error(\"Cannot find module './scss/front-page.scss'\"); e.code = 'MODULE_NOT_FOUND'; throw e; }());\n/* harmony import */ var _js_slideshow__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./js/slideshow */ \"./js/slideshow.js\");\n/* harmony import */ var _js_slideshow__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_js_slideshow__WEBPACK_IMPORTED_MODULE_1__);\n\n\n\n//# sourceURL=webpack:///./front-page.js?");

/***/ }),

/***/ "./js/slideshow.js":
/*!*************************!*\
  !*** ./js/slideshow.js ***!
  \*************************/
/***/ (() => {

eval("const slideshow = jQuery('#main-slideshow');\nconst images = slideshow.find('#image-container').first().children('.slideshow-image');\nconst SLIDESHOW_INTERVAL = 10000;\nconst TRANSITION_SPEED = 1500;\nlet current_image = 0;\n\nfunction init_slideshow() {\n  // Initialize slideshow elements\n  for (let i = 0; i < images.length; i++) {\n    // Set element background images\n    let img = jQuery(images[i]); // Url for each element is stored in src attribute\n\n    let img_src = img.attr('src'); // Set image for this item\n\n    img.css('background-image', `url(${img_src})`); // If this is not the first item, hide it\n\n    if (i == 0) continue;\n    jQuery(images[i]).hide();\n  }\n}\n\nsetInterval(() => {\n  let prev = current_image;\n  current_image++;\n  if (current_image >= images.length) current_image = 0;\n  jQuery(images[current_image]).fadeIn(TRANSITION_SPEED);\n  jQuery(images[prev]).fadeOut(TRANSITION_SPEED);\n}, SLIDESHOW_INTERVAL);\ninit_slideshow();\n\n//# sourceURL=webpack:///./js/slideshow.js?");

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
/******/ 	var __webpack_exports__ = __webpack_require__("./front-page.js");
/******/ 	
/******/ })()
;