/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/assets/js/basket/basket.js":
/*!****************************************!*\
  !*** ./src/assets/js/basket/basket.js ***!
  \****************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _firstpage_burger__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../firstpage/burger */ \"./src/assets/js/firstpage/burger.js\");\n/* harmony import */ var _firstpage_search__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../firstpage/search */ \"./src/assets/js/firstpage/search.js\");\n\r\n\r\n\r\n// searchInput();\r\n(0,_firstpage_burger__WEBPACK_IMPORTED_MODULE_0__.burger)();\r\n\r\n\r\nfunction counterbasket() {\r\n    // let containerCount = document.querySelector('.productinfo__inner__right__dataprice');\r\n    // let counter = document.querySelector('#digit__count');\r\n    let operationMinus = document.querySelector('[data-operation=\"minus\"]');\r\n    let operationPlus = document.querySelector('[data-operation=\"plus\"]');\r\n\r\n    //запускаем обработчик кликов по разделу счетчика.\r\n\r\n    window.addEventListener('click', (event) => {\r\n        let currentClick = event.target;\r\n\r\n        if (currentClick.dataset.operation === \"plus\") {\r\n            let containerCount = currentClick.closest('.basket__inner__container__left__item__counter__digit');\r\n            let counter = containerCount.querySelector('[data-count=\"digit__count\"]');\r\n            counter.stepUp();\r\n        }\r\n\r\n        else if (currentClick.dataset.operation === \"minus\") {\r\n            let containerCount = currentClick.closest('.basket__inner__container__left__item__counter__digit');\r\n            let counter = containerCount.querySelector('[data-count=\"digit__count\"]');\r\n\r\n            if (counter.value > 1) {\r\n                counter.stepDown();\r\n            }\r\n        }\r\n      \r\n    })\r\n\r\n}\r\n\r\ncounterbasket();\r\n\n\n//# sourceURL=webpack://rvitalia/./src/assets/js/basket/basket.js?");

/***/ }),

/***/ "./src/assets/js/firstpage/burger.js":
/*!*******************************************!*\
  !*** ./src/assets/js/firstpage/burger.js ***!
  \*******************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"burger\": function() { return /* binding */ burger; }\n/* harmony export */ });\nfunction burger() {\r\n    let burger = document.querySelector('#burger');\r\n    let burgermenu = document.querySelector('#menu__burger');\r\n    let closeButton = document.querySelector('[data-close]');\r\n    let buttonsMenu = document.querySelectorAll('[data-select]');\r\n    let iconSearch = document.querySelector('[data-search=\"icon\"]');\r\n    let searchInput = document.querySelector('[data-search=\"input\"]');\r\n   // console.log(burger);\r\n    burger.addEventListener('click', () => {\r\n\r\n        burgermenu.classList.add('burger-active');\r\n        setTimeout(function () {\r\n            burgermenu.style.opacity = '1';\r\n            burgermenu.style.transform = 'translateX(0)';\r\n\r\n        }, 200)\r\n    })\r\n    closeButton.addEventListener('click', () => {\r\n        burgermenu.style.opacity = '0';\r\n        burgermenu.style.transform = 'translateX(-200%)';\r\n        setTimeout(function () {\r\n            burgermenu.classList.remove('burger-active');\r\n        }, 200)\r\n    })\r\n\r\n    buttonsMenu.forEach(element => {\r\n        element.addEventListener('click', () => {\r\n            burgermenu.style.opacity = '0';\r\n            burgermenu.style.transform = 'translateX(-200%)';\r\n            setTimeout(function () {\r\n                burgermenu.classList.remove('burger-active');\r\n            }, 200)\r\n        })\r\n    });\r\n\r\n    iconSearch.addEventListener('click', (event) => {\r\n        event.preventDefault();\r\n        searchInput.classList.toggle('search-active');\r\n    })\r\n\r\n\r\n}\n\n//# sourceURL=webpack://rvitalia/./src/assets/js/firstpage/burger.js?");

/***/ }),

/***/ "./src/assets/js/firstpage/search.js":
/*!*******************************************!*\
  !*** ./src/assets/js/firstpage/search.js ***!
  \*******************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"searchInput\": function() { return /* binding */ searchInput; }\n/* harmony export */ });\nfunction searchInput() {\r\n\r\n    let search = document.querySelector('#header__search');\r\n    let widgets = document.querySelector('#widgets');\r\n\r\n    search.addEventListener('click', () => {\r\n        widgets.classList.toggle('active__input');\r\n    });\r\n}\n\n//# sourceURL=webpack://rvitalia/./src/assets/js/firstpage/search.js?");

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
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/assets/js/basket/basket.js");
/******/ 	
/******/ })()
;