(()=>{var e={227:()=>{jQuery(".faq-container"),jQuery(".faq-paragraph").hide(),jQuery(".faq-question").click((e=>{jQuery(e.target).closest(".faq-container").find(".faq-paragraph").slideToggle(300)}))},43:()=>{function e(e){e.fadeOut(200),jQuery("body").css("overflow","scroll")}jQuery(".staff-block-modal").hide(),jQuery(".staff-block-name, .staff-block-profile").click((e=>{const r=jQuery(e.target).parents(".wp-block-sf-staff-block");jQuery(r).children(".staff-block-modal").fadeIn(200),jQuery("body").css("overflow","hidden")})),jQuery(".staff-block-modal").click((r=>{e(jQuery(r.target))})),jQuery(".modal-close-btn").click((r=>{const o=jQuery(r.target).parents(".staff-block-modal");e(jQuery(o))})),jQuery(".modal-container").click((e=>{e.stopPropagation()}))},698:()=>{const e=jQuery("#menu-expand-btn"),r=jQuery("#menu-close-btn"),o=jQuery("#menu-mobile-full");e.click((()=>{o.slideDown(200)})),r.click((()=>{o.slideUp(200)})),o.click((()=>{o.slideUp(200)}))}},r={};function o(t){var a=r[t];if(void 0!==a)return a.exports;var l=r[t]={exports:{}};return e[t](l,l.exports,o),l.exports}o.n=e=>{var r=e&&e.__esModule?()=>e.default:()=>e;return o.d(r,{a:r}),r},o.d=(e,r)=>{for(var t in r)o.o(r,t)&&!o.o(e,t)&&Object.defineProperty(e,t,{enumerable:!0,get:r[t]})},o.o=(e,r)=>Object.prototype.hasOwnProperty.call(e,r),(()=>{"use strict";o(698),o(43),o(227)})()})();