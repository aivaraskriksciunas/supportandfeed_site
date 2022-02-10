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

/***/ "../../node_modules/@babel/runtime/helpers/esm/extends.js":
/*!****************************************************************!*\
  !*** ../../node_modules/@babel/runtime/helpers/esm/extends.js ***!
  \****************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ _extends)\n/* harmony export */ });\nfunction _extends() {\n  _extends = Object.assign || function (target) {\n    for (var i = 1; i < arguments.length; i++) {\n      var source = arguments[i];\n\n      for (var key in source) {\n        if (Object.prototype.hasOwnProperty.call(source, key)) {\n          target[key] = source[key];\n        }\n      }\n    }\n\n    return target;\n  };\n\n  return _extends.apply(this, arguments);\n}\n\n//# sourceURL=webpack:///../../node_modules/@babel/runtime/helpers/esm/extends.js?");

/***/ }),

/***/ "./blocks.js":
/*!*******************!*\
  !*** ./blocks.js ***!
  \*******************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

eval("__webpack_require__(/*! ./blocks/text-image-block */ \"./blocks/text-image-block.js\");\n\n__webpack_require__(/*! ./blocks/page-subtitle-block */ \"./blocks/page-subtitle-block.js\");\n\n__webpack_require__(/*! ./blocks/partner-block */ \"./blocks/partner-block.js\");\n\n__webpack_require__(/*! ./blocks/staff-block */ \"./blocks/staff-block.js\");\n\n//# sourceURL=webpack:///./blocks.js?");

/***/ }),

/***/ "./blocks/color-palette.js":
/*!*********************************!*\
  !*** ./blocks/color-palette.js ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ([{\n  name: 'black',\n  color: '#000'\n}, {\n  name: 'white',\n  color: '#fff'\n}, {\n  name: 'neon green',\n  color: '#00FA0D'\n}, {\n  name: 'light green',\n  color: '#1CD05A'\n}, {\n  name: 'darker green',\n  color: '#04A50C'\n}, {\n  name: 'orange',\n  color: '#FF9213'\n}, {\n  name: 'pink',\n  color: '#FF44EB'\n}, {\n  name: 'yellow',\n  color: '#F9F01E'\n}]);\n\n//# sourceURL=webpack:///./blocks/color-palette.js?");

/***/ }),

/***/ "./blocks/page-subtitle-block.js":
/*!***************************************!*\
  !*** ./blocks/page-subtitle-block.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/extends */ \"../../node_modules/@babel/runtime/helpers/esm/extends.js\");\n/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/element */ \"@wordpress/element\");\n/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/blocks */ \"@wordpress/blocks\");\n/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/block-editor */ \"@wordpress/block-editor\");\n/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__);\n/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/data */ \"@wordpress/data\");\n/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_data__WEBPACK_IMPORTED_MODULE_4__);\n/* harmony import */ var _wordpress_core_data__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @wordpress/core-data */ \"@wordpress/core-data\");\n/* harmony import */ var _wordpress_core_data__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_wordpress_core_data__WEBPACK_IMPORTED_MODULE_5__);\n\n\n\n\n\n\n(0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__.registerBlockType)('sf/page-subtitle-block', {\n  title: 'SF Page Subtitle',\n  icon: 'smiley',\n  category: 'sf_blocks',\n\n  edit({\n    setAttributes,\n    attributes\n  }) {\n    const blockProps = (0,_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.useBlockProps)();\n    const postType = (0,_wordpress_data__WEBPACK_IMPORTED_MODULE_4__.useSelect)(select => select('core/editor').getCurrentPostType());\n    const [meta, setMeta] = (0,_wordpress_core_data__WEBPACK_IMPORTED_MODULE_5__.useEntityProp)('postType', postType, 'meta');\n\n    const onSubtitleChange = val => {\n      setMeta({ ...meta,\n        page_subtitle: val\n      });\n    };\n\n    return [(0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", (0,_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0__.default)({}, blockProps, {\n      key: \"block\",\n      className: \"bg-gray-200 py-8 px-16 rounded-md\"\n    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"text-gray-500 text-center mb-8 text-lg\"\n    }, \"Meta block (invisible on the page)\"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"text-gray-800 mb-2\"\n    }, \"Specify page subtitle: \"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.RichText, {\n      className: \"w-full bg-white\",\n      value: meta['page_subtitle'],\n      onChange: onSubtitleChange\n    }))];\n  },\n\n  // No information saved to the block\n  // Data is saved to post meta via the hook\n  save() {\n    return null;\n  }\n\n});\n\n//# sourceURL=webpack:///./blocks/page-subtitle-block.js?");

/***/ }),

/***/ "./blocks/partner-block.js":
/*!*********************************!*\
  !*** ./blocks/partner-block.js ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/extends */ \"../../node_modules/@babel/runtime/helpers/esm/extends.js\");\n/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/element */ \"@wordpress/element\");\n/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/blocks */ \"@wordpress/blocks\");\n/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/block-editor */ \"@wordpress/block-editor\");\n/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__);\n/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/components */ \"@wordpress/components\");\n/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__);\n\n\n\n\n\nconst DEFAULT_BLOCK_CONTENTS = [['core/heading', {\n  placeholder: 'Title',\n  level: 2\n}], ['core/paragraph', {\n  placeholder: 'Type text here or add new blocks'\n}]];\n(0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__.registerBlockType)('sf/partner-block', {\n  title: 'SF Partner Block',\n  icon: 'smiley',\n  category: 'sf_blocks',\n  attributes: {\n    imageUrl: {\n      type: 'string'\n    }\n  },\n\n  edit({\n    setAttributes,\n    attributes\n  }) {\n    const blockProps = (0,_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.useBlockProps)();\n\n    const onChangeImgUrl = media => {\n      setAttributes({\n        imageUrl: media.url\n      });\n    };\n\n    return [(0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.InspectorControls, {\n      key: \"controls\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"px-4\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"fieldset\", null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"mb-3\"\n    }, \"Sponsor logo:\"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"mb-4 p-6 border-dashed border-gray-400 border-2\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"img\", {\n      className: \"\",\n      src: attributes.imageUrl\n    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.MediaUploadCheck, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.MediaUpload, {\n      onSelect: onChangeImgUrl // Save image\n      ,\n      allowedTypes: ['image'] // Only allow images to be selected\n      ,\n      value: attributes.imageUrl,\n      render: ({\n        open\n      }) => (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.Button, {\n        isSecondary: true,\n        onClick: open,\n        className: \"mb-4\"\n      }, \"Select Logo\")\n    }))))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", (0,_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0__.default)({}, blockProps, {\n      key: \"block\"\n    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"md:flex border-gray-300 border\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"md:w-1/3 flex items-center\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"img\", {\n      src: attributes.imageUrl\n    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"md:w-2/3 p-12\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.InnerBlocks, {\n      template: DEFAULT_BLOCK_CONTENTS\n    }))))];\n  },\n\n  // No information saved to the block\n  // Data is saved to post meta via the hook\n  save({\n    attributes\n  }) {\n    const blockProps = _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.useBlockProps.save();\n    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", blockProps, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"charity-block md:flex bg-white\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"charity-block-logo md:w-1/3 flex justify-center items-center\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"img\", {\n      src: attributes.imageUrl\n    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"charity-block-content md:w-2/3 p-12 text-justify\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.InnerBlocks.Content, null))));\n  }\n\n});\n\n//# sourceURL=webpack:///./blocks/partner-block.js?");

/***/ }),

/***/ "./blocks/staff-block.js":
/*!*******************************!*\
  !*** ./blocks/staff-block.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/extends */ \"../../node_modules/@babel/runtime/helpers/esm/extends.js\");\n/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/element */ \"@wordpress/element\");\n/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/blocks */ \"@wordpress/blocks\");\n/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/block-editor */ \"@wordpress/block-editor\");\n/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__);\n/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/components */ \"@wordpress/components\");\n/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__);\n\n\n\n\n\n(0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__.registerBlockType)('sf/staff-block', {\n  title: 'SF Staff Block',\n  icon: 'smiley',\n  category: 'sf_blocks',\n  attributes: {\n    profileUrl: {\n      type: 'string'\n    },\n    position: {\n      type: 'string'\n    },\n    name: {\n      type: 'string'\n    },\n    fullDescription: {\n      type: 'string'\n    },\n    linkedInUrl: {\n      type: 'string'\n    },\n    twitterUrl: {\n      type: 'string'\n    },\n    facebookUrl: {\n      type: 'string'\n    },\n    instagramUrl: {\n      type: 'string'\n    }\n  },\n\n  edit({\n    attributes,\n    setAttributes\n  }) {\n    const props = (0,_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.useBlockProps)();\n\n    const onChangeProfile = media => {\n      console.log(media);\n\n      try {\n        setAttributes({\n          profileUrl: media.sizes.medium.url\n        });\n      } catch {\n        setAttributes({\n          profileUrl: media.url\n        });\n      }\n    };\n\n    return [(0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.InspectorControls, {\n      key: \"controls\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"px-4\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"fieldset\", null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"mb-2\"\n    }, \"Selected profile image:\"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"p\", {\n      className: \"italic text-gray-500\"\n    }, \"A square image of 300x300 px is recommended.\"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"img\", {\n      className: \"mb-2\",\n      src: attributes.profileUrl\n    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.MediaUploadCheck, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.MediaUpload, {\n      onSelect: onChangeProfile // Save image\n      ,\n      allowedTypes: ['image'] // Only allow images to be selected\n      ,\n      value: attributes.profileUrl,\n      render: ({\n        open\n      }) => (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.Button, {\n        isSecondary: true,\n        onClick: open,\n        className: \"mb-4\"\n      }, \"Select image\")\n    }))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"h3\", null, \"Social media links (optional):\"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"fieldset\", null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.TextControl, {\n      label: \"LinkedIn link\",\n      value: attributes.linkedInUrl,\n      onChange: val => setAttributes({\n        linkedInUrl: val\n      })\n    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"fieldset\", null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.TextControl, {\n      label: \"Instagram link\",\n      value: attributes.instagramUrl,\n      onChange: val => setAttributes({\n        instagramUrl: val\n      })\n    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"fieldset\", null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.TextControl, {\n      label: \"Facebook link\",\n      value: attributes.facebookUrl,\n      onChange: val => setAttributes({\n        facebookUrl: val\n      })\n    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"fieldset\", null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.TextControl, {\n      label: \"Twitter link\",\n      value: attributes.twitterUrl,\n      onChange: val => setAttributes({\n        twitterUrl: val\n      })\n    })))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", (0,_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0__.default)({}, props, {\n      key: \"block\",\n      className: \"p-4 border border-gray-400\"\n    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"flex\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"img\", {\n      src: attributes.profileUrl\n    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"my-4\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", null, \"Name:\"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.TextControl, {\n      value: attributes.name,\n      onChange: val => setAttributes({\n        name: val\n      })\n    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"my-4\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", null, \"Position:\"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.TextControl, {\n      value: attributes.position,\n      onChange: val => setAttributes({\n        position: val\n      })\n    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"mb-4\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", null, \"Full description:\"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.RichText, {\n      className: \"border border-gray-300 text-sm\",\n      value: attributes.fullDescription,\n      onChange: val => setAttributes({\n        fullDescription: val\n      })\n    })))];\n  },\n\n  save({\n    attributes\n  }) {\n    const socialIcon = (url, iconName) => {\n      if (!url) return;\n      return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"a\", {\n        href: url,\n        target: \"_blank\",\n        rel: \"noopener\",\n        className: \"font-semibold text-gray-700 hover:text-gray-400 mr-4\"\n      }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"span\", {\n        className: 'text-xl ' + iconName\n      }));\n    };\n\n    const modalSocialIcon = (url, iconName) => {\n      if (!url) return;\n      return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"a\", {\n        href: url,\n        target: \"_blank\",\n        rel: \"noopener\",\n        className: \"font-semibold mr-10 text-gray-600 hover:text-green-darkened\"\n      }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"span\", {\n        className: 'text-2xl ' + iconName\n      }));\n    };\n\n    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.useBlockProps.save(), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"staff-block-container flex sm:block lg:flex\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"w-full lg:w-1/2 staff-block-profile\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"img\", {\n      src: attributes.profileUrl\n    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"w-full lg:w-1/2 flex flex-col\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"staff-block-name\"\n    }, attributes.name), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"staff-block-position flex-1\"\n    }, attributes.position), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"staff-block-social-links flex\"\n    }, socialIcon(attributes.linkedInUrl, 'icon-linkedin2'), socialIcon(attributes.facebookUrl, 'icon-facebook'), socialIcon(attributes.instagramUrl, 'icon-instagram'), socialIcon(attributes.twitterUrl, 'icon-twitter')))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"staff-block-modal hidden\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"modal-container\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"flex modal-header\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"modal-header-image\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"img\", {\n      src: attributes.profileUrl\n    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"w-full modal-header-infos\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"flex justify-end\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"svg\", {\n      className: \"modal-close-btn\",\n      xmlns: \"http://www.w3.org/2000/svg\",\n      height: \"48px\",\n      viewBox: \"0 0 24 24\",\n      width: \"48px\",\n      fill: \"#000\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"path\", {\n      d: \"M0 0h24v24H0z\",\n      fill: \"none\"\n    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"path\", {\n      d: \"M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z\"\n    }))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"h1\", null, attributes.name), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", null, attributes.position), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"modal-header-links flex mt-6\"\n    }, modalSocialIcon(attributes.linkedInUrl, 'icon-linkedin2'), modalSocialIcon(attributes.facebookUrl, 'icon-facebook'), modalSocialIcon(attributes.instagramUrl, 'icon-instagram'), modalSocialIcon(attributes.twitterUrl, 'icon-twitter')))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      class: \"modal-content\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      class: \"modal-content-text\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.RichText.Content, {\n      value: attributes.fullDescription\n    }))))));\n  }\n\n});\n\n//# sourceURL=webpack:///./blocks/staff-block.js?");

/***/ }),

/***/ "./blocks/text-image-block.js":
/*!************************************!*\
  !*** ./blocks/text-image-block.js ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/extends */ \"../../node_modules/@babel/runtime/helpers/esm/extends.js\");\n/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/element */ \"@wordpress/element\");\n/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/blocks */ \"@wordpress/blocks\");\n/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/block-editor */ \"@wordpress/block-editor\");\n/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__);\n/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/components */ \"@wordpress/components\");\n/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__);\n/* harmony import */ var _color_palette__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./color-palette */ \"./blocks/color-palette.js\");\n\n\n\n\n\n // Default items that are placed in the nested block\n\nconst DEFAULT_BLOCK_CONTENTS = [['core/heading', {\n  placeholder: 'Title',\n  level: 1\n}], ['core/paragraph', {\n  placeholder: 'Type text here or add new blocks'\n}]];\n(0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__.registerBlockType)('sf/text-image-block', {\n  title: 'SF Text block',\n  icon: 'smiley',\n  category: 'sf_blocks',\n  attributes: {\n    img: {\n      type: 'string'\n    },\n    bgColor: {\n      type: 'string'\n    },\n    reverse: {\n      type: 'boolean'\n    }\n  },\n\n  edit({\n    attributes,\n    setAttributes\n  }) {\n    const blockProps = (0,_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.useBlockProps)(); // Callbacks\n\n    const onChangeBGColor = hexColor => {\n      setAttributes({\n        bgColor: hexColor\n      });\n    };\n\n    const onChangeImgUrl = media => setAttributes({\n      img: media.url\n    });\n\n    const onChangeReverse = val => setAttributes({\n      reverse: val\n    }); // Construct the block\n\n\n    return [(0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.InspectorControls, {\n      key: \"setting\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"px-4\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"fieldset\", {\n      className: \"mb-4\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"legend\", {\n      className: \"blocks-base-control__label mb-2\"\n    }, \"Background color\"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.ColorPalette // Element Tag for Gutenberg standard colour selector\n    , {\n      onChange: onChangeBGColor // onChange event callback\n      ,\n      colors: _color_palette__WEBPACK_IMPORTED_MODULE_5__.default // Specify list of available colors\n\n    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"fieldset\", null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"mb-2\"\n    }, \"Selected image:\"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"img\", {\n      className: \"mb-2\",\n      src: attributes.img\n    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.MediaUploadCheck, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.MediaUpload, {\n      onSelect: onChangeImgUrl // Save image\n      ,\n      allowedTypes: ['image'] // Only allow images to be selected\n      ,\n      value: attributes.img,\n      render: ({\n        open\n      }) => (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.Button, {\n        isSecondary: true,\n        onClick: open,\n        className: \"mb-4\"\n      }, \"Select image\")\n    }))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"fieldset\", null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.ToggleControl, {\n      label: \"Reverse layout\",\n      help: attributes.reverse ? 'Image is on the left.' : 'Image is on the right.',\n      checked: attributes.reverse,\n      onChange: onChangeReverse\n    })))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", (0,_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0__.default)({}, blockProps, {\n      key: \"block\"\n    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: `w-full flex ${attributes.reverse ? 'flex-row-reverse' : ''}`,\n      style: {\n        backgroundColor: attributes.bgColor\n      }\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"w-1/2 border-r-2\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.InnerBlocks, {\n      template: DEFAULT_BLOCK_CONTENTS\n    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"w-1/2\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"img\", {\n      src: attributes.img\n    }))))];\n  },\n\n  save({\n    attributes\n  }) {\n    const blockProps = _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.useBlockProps.save();\n    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", (0,_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0__.default)({}, blockProps, {\n      className: `text-image-section w-full lg:flex ${attributes.reverse ? 'flex-row-reverse' : ''}`,\n      style: \"background-color: \" + attributes.bgColor\n    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      className: \"lg:w-1/2 px-16 py-16 text-justify font-light\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.InnerBlocks.Content, null)), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"div\", {\n      id: \"plantBasedImg\",\n      className: \"section-image lg:w-1/2\"\n    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(\"img\", {\n      src: attributes.img\n    })));\n  }\n\n});\n\n//# sourceURL=webpack:///./blocks/text-image-block.js?");

/***/ }),

/***/ "@wordpress/block-editor":
/*!*************************************!*\
  !*** external ["wp","blockEditor"] ***!
  \*************************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["blockEditor"];

/***/ }),

/***/ "@wordpress/blocks":
/*!********************************!*\
  !*** external ["wp","blocks"] ***!
  \********************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["blocks"];

/***/ }),

/***/ "@wordpress/components":
/*!************************************!*\
  !*** external ["wp","components"] ***!
  \************************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["components"];

/***/ }),

/***/ "@wordpress/core-data":
/*!**********************************!*\
  !*** external ["wp","coreData"] ***!
  \**********************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["coreData"];

/***/ }),

/***/ "@wordpress/data":
/*!******************************!*\
  !*** external ["wp","data"] ***!
  \******************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["data"];

/***/ }),

/***/ "@wordpress/element":
/*!*********************************!*\
  !*** external ["wp","element"] ***!
  \*********************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["element"];

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
/******/ 	var __webpack_exports__ = __webpack_require__("./blocks.js");
/******/ 	
/******/ })()
;