(()=>{var e={560:(e,t,l)=>{"use strict";function r(){return(r=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var l=arguments[t];for(var r in l)Object.prototype.hasOwnProperty.call(l,r)&&(e[r]=l[r])}return e}).apply(this,arguments)}l.d(t,{Z:()=>r})},450:(e,t,l)=>{"use strict";l.r(t);var r=l(560),a=l(27),n=l(314),c=l(399);const s=window.wp.data,o=window.wp.coreData;(0,n.registerBlockType)("sf/page-subtitle-block",{title:"SF Page Subtitle",icon:"smiley",category:"sf_blocks",edit({setAttributes:e,attributes:t}){const l=(0,c.useBlockProps)(),n=(0,s.useSelect)((e=>e("core/editor").getCurrentPostType())),[i,m]=(0,o.useEntityProp)("postType",n,"meta");return[(0,a.createElement)("div",(0,r.Z)({},l,{key:"block",className:"bg-gray-200 py-8 px-16 rounded-md"}),(0,a.createElement)("div",{className:"text-gray-500 text-center mb-8 text-lg"},"Meta block (invisible on the page)"),(0,a.createElement)("div",{className:"text-gray-800 mb-2"},"Specify page subtitle: "),(0,a.createElement)(c.RichText,{className:"w-full bg-white",value:i.page_subtitle,onChange:e=>{m({...i,page_subtitle:e})}}))]},save:()=>null})},111:(e,t,l)=>{"use strict";l.r(t);var r=l(560),a=l(27),n=l(314),c=l(399),s=l(997);const o=[["core/heading",{placeholder:"Title",level:2}],["core/paragraph",{placeholder:"Type text here or add new blocks"}]];(0,n.registerBlockType)("sf/partner-block",{title:"SF Partner Block",icon:"smiley",category:"sf_blocks",attributes:{imageUrl:{type:"string"}},edit({setAttributes:e,attributes:t}){const l=(0,c.useBlockProps)();return[(0,a.createElement)(c.InspectorControls,{key:"controls"},(0,a.createElement)("div",{className:"px-4"},(0,a.createElement)("fieldset",null,(0,a.createElement)("div",{className:"mb-3"},"Sponsor logo:"),(0,a.createElement)("div",{className:"mb-4 p-6 border-dashed border-gray-400 border-2"},(0,a.createElement)("img",{className:"",src:t.imageUrl})),(0,a.createElement)(c.MediaUploadCheck,null,(0,a.createElement)(c.MediaUpload,{onSelect:t=>{e({imageUrl:t.url})},allowedTypes:["image"],value:t.imageUrl,render:({open:e})=>(0,a.createElement)(s.Button,{isSecondary:!0,onClick:e,className:"mb-4"},"Select Logo")}))))),(0,a.createElement)("div",(0,r.Z)({},l,{key:"block"}),(0,a.createElement)("div",{className:"md:flex border-gray-300 border"},(0,a.createElement)("div",{className:"md:w-1/3 flex items-center"},(0,a.createElement)("img",{src:t.imageUrl})),(0,a.createElement)("div",{className:"md:w-2/3 p-12"},(0,a.createElement)(c.InnerBlocks,{template:o}))))]},save({attributes:e}){const t=c.useBlockProps.save();return(0,a.createElement)("div",t,(0,a.createElement)("div",{className:"charity-block md:flex bg-white"},(0,a.createElement)("div",{className:"charity-block-logo md:w-1/3 flex justify-center items-center"},(0,a.createElement)("img",{src:e.imageUrl})),(0,a.createElement)("div",{className:"charity-block-content md:w-2/3 p-12 text-justify"},(0,a.createElement)(c.InnerBlocks.Content,null))))}})},706:(e,t,l)=>{"use strict";l.r(t);var r=l(560),a=l(27),n=l(314),c=l(399),s=l(997);(0,n.registerBlockType)("sf/staff-block",{title:"SF Staff Block",icon:"smiley",category:"sf_blocks",attributes:{profileUrl:{type:"string"},position:{type:"string"},name:{type:"string"},fullDescription:{type:"string"},linkedInUrl:{type:"string"},twitterUrl:{type:"string"},facebookUrl:{type:"string"},instagramUrl:{type:"string"}},edit({attributes:e,setAttributes:t}){const l=(0,c.useBlockProps)();return[(0,a.createElement)(c.InspectorControls,{key:"controls"},(0,a.createElement)("div",{className:"px-4"},(0,a.createElement)("fieldset",null,(0,a.createElement)("div",{className:"mb-2"},"Selected profile image:"),(0,a.createElement)("p",{className:"italic text-gray-500"},"A square image of 300x300 px is recommended."),(0,a.createElement)("img",{className:"mb-2",src:e.profileUrl}),(0,a.createElement)(c.MediaUploadCheck,null,(0,a.createElement)(c.MediaUpload,{onSelect:e=>{try{t({profileUrl:e.sizes.medium.url})}catch{t({profileUrl:e.url})}},allowedTypes:["image"],value:e.profileUrl,render:({open:e})=>(0,a.createElement)(s.Button,{isSecondary:!0,onClick:e,className:"mb-4"},"Select image")}))),(0,a.createElement)("h3",null,"Social media links (optional):"),(0,a.createElement)("fieldset",null,(0,a.createElement)(s.TextControl,{label:"LinkedIn link",value:e.linkedInUrl,onChange:e=>t({linkedInUrl:e})})),(0,a.createElement)("fieldset",null,(0,a.createElement)(s.TextControl,{label:"Instagram link",value:e.instagramUrl,onChange:e=>t({instagramUrl:e})})),(0,a.createElement)("fieldset",null,(0,a.createElement)(s.TextControl,{label:"Facebook link",value:e.facebookUrl,onChange:e=>t({facebookUrl:e})})),(0,a.createElement)("fieldset",null,(0,a.createElement)(s.TextControl,{label:"Twitter link",value:e.twitterUrl,onChange:e=>t({twitterUrl:e})})))),(0,a.createElement)("div",(0,r.Z)({},l,{key:"block",className:"p-4 border border-gray-400"}),(0,a.createElement)("div",{className:"flex"},(0,a.createElement)("img",{src:e.profileUrl})),(0,a.createElement)("div",{className:"my-4"},(0,a.createElement)("div",null,"Name:"),(0,a.createElement)(s.TextControl,{value:e.name,onChange:e=>t({name:e})})),(0,a.createElement)("div",{className:"my-4"},(0,a.createElement)("div",null,"Position:"),(0,a.createElement)(s.TextControl,{value:e.position,onChange:e=>t({position:e})})),(0,a.createElement)("div",{className:"mb-4"},(0,a.createElement)("div",null,"Full description:"),(0,a.createElement)(c.RichText,{className:"border border-gray-300 text-sm",value:e.fullDescription,onChange:e=>t({fullDescription:e})})))]},save({attributes:e}){const t=(e,t)=>{if(e)return(0,a.createElement)("a",{href:e,target:"_blank",className:"font-semibold text-gray-700 hover:text-gray-400 mr-4"},(0,a.createElement)("span",{className:"text-xl "+t}))},l=(e,t)=>{if(e)return(0,a.createElement)("a",{href:e,target:"_blank",className:"font-semibold mr-10 text-gray-600 hover:text-green-darkened"},(0,a.createElement)("span",{className:"text-2xl "+t}))};return(0,a.createElement)("div",c.useBlockProps.save(),(0,a.createElement)("div",{className:"staff-block-container flex sm:block lg:flex"},(0,a.createElement)("div",{className:"w-1/2 sm:w-full lg:w-1/2 staff-block-profile"},(0,a.createElement)("img",{src:e.profileUrl})),(0,a.createElement)("div",{className:"w-1/2 sm:w-full lg:w-1/2 flex flex-col"},(0,a.createElement)("div",{className:"staff-block-name"},e.name),(0,a.createElement)("div",{className:"staff-block-position flex-1"},e.position),(0,a.createElement)("div",{className:"staff-block-social-links flex"},t(e.linkedInUrl,"icon-linkedin2"),t(e.facebookUrl,"icon-facebook"),t(e.instagramUrl,"icon-instagram"),t(e.twitterUrl,"icon-twitter")))),(0,a.createElement)("div",{className:"staff-block-modal hidden"},(0,a.createElement)("div",{className:"modal-container"},(0,a.createElement)("div",{className:"flex modal-header"},(0,a.createElement)("div",{className:"modal-header-image"},(0,a.createElement)("img",{src:e.profileUrl})),(0,a.createElement)("div",{className:"w-full modal-header-infos"},(0,a.createElement)("div",{className:"flex justify-end"},(0,a.createElement)("svg",{className:"modal-close-btn",xmlns:"http://www.w3.org/2000/svg",height:"48px",viewBox:"0 0 24 24",width:"48px",fill:"#000"},(0,a.createElement)("path",{d:"M0 0h24v24H0z",fill:"none"}),(0,a.createElement)("path",{d:"M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"}))),(0,a.createElement)("h1",null,e.name),(0,a.createElement)("div",null,e.position),(0,a.createElement)("div",{className:"modal-header-links flex mt-6"},l(e.linkedInUrl,"icon-linkedin2"),l(e.facebookUrl,"icon-facebook"),l(e.instagramUrl,"icon-instagram"),l(e.twitterUrl,"icon-twitter")))),(0,a.createElement)("div",{class:"modal-content"},(0,a.createElement)("div",{class:"modal-content-text"},(0,a.createElement)(c.RichText.Content,{value:e.fullDescription}))))))}})},108:(e,t,l)=>{"use strict";l.r(t);var r=l(560),a=l(27),n=l(314),c=l(399),s=l(997);const o=[{name:"black",color:"#000"},{name:"white",color:"#fff"},{name:"neon green",color:"#00FA0D"},{name:"light green",color:"#1CD05A"},{name:"darker green",color:"#04A50C"},{name:"orange",color:"#FF9213"},{name:"pink",color:"#FF44EB"},{name:"yellow",color:"#F9F01E"}],i=[["core/heading",{placeholder:"Title",level:1}],["core/paragraph",{placeholder:"Type text here or add new blocks"}]];(0,n.registerBlockType)("sf/text-image-block",{title:"SF Text block",icon:"smiley",category:"sf_blocks",attributes:{img:{type:"string"},bgColor:{type:"string"},reverse:{type:"boolean"}},edit({attributes:e,setAttributes:t}){const l=(0,c.useBlockProps)();return[(0,a.createElement)(c.InspectorControls,{key:"setting"},(0,a.createElement)("div",{className:"px-4"},(0,a.createElement)("fieldset",{className:"mb-4"},(0,a.createElement)("legend",{className:"blocks-base-control__label mb-2"},"Background color"),(0,a.createElement)(c.ColorPalette,{onChange:e=>{t({bgColor:e})},colors:o})),(0,a.createElement)("fieldset",null,(0,a.createElement)("div",{className:"mb-2"},"Selected image:"),(0,a.createElement)("img",{className:"mb-2",src:e.img}),(0,a.createElement)(c.MediaUploadCheck,null,(0,a.createElement)(c.MediaUpload,{onSelect:e=>t({img:e.url}),allowedTypes:["image"],value:e.img,render:({open:e})=>(0,a.createElement)(s.Button,{isSecondary:!0,onClick:e,className:"mb-4"},"Select image")}))),(0,a.createElement)("fieldset",null,(0,a.createElement)(s.ToggleControl,{label:"Reverse layout",help:e.reverse?"Image is on the left.":"Image is on the right.",checked:e.reverse,onChange:e=>t({reverse:e})})))),(0,a.createElement)("div",(0,r.Z)({},l,{key:"block"}),(0,a.createElement)("div",{className:"w-full flex "+(e.reverse?"flex-row-reverse":""),style:{backgroundColor:e.bgColor}},(0,a.createElement)("div",{className:"w-1/2 border-r-2"},(0,a.createElement)(c.InnerBlocks,{template:i})),(0,a.createElement)("div",{className:"w-1/2"},(0,a.createElement)("img",{src:e.img}))))]},save({attributes:e}){const t=c.useBlockProps.save();return(0,a.createElement)("div",(0,r.Z)({},t,{className:"text-image-section w-full flex "+(e.reverse?"flex-row-reverse":""),style:"background-color: "+e.bgColor}),(0,a.createElement)("div",{className:"md:w-1/2 px-24 py-16 text-justify font-light"},(0,a.createElement)(c.InnerBlocks.Content,null)),(0,a.createElement)("div",{id:"plantBasedImg",className:"section-image md:w-1/2"},(0,a.createElement)("img",{src:e.img})))}})},399:e=>{"use strict";e.exports=window.wp.blockEditor},314:e=>{"use strict";e.exports=window.wp.blocks},997:e=>{"use strict";e.exports=window.wp.components},27:e=>{"use strict";e.exports=window.wp.element}},t={};function l(r){var a=t[r];if(void 0!==a)return a.exports;var n=t[r]={exports:{}};return e[r](n,n.exports,l),n.exports}l.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return l.d(t,{a:t}),t},l.d=(e,t)=>{for(var r in t)l.o(t,r)&&!l.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},l.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),l.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},l(108),l(450),l(111),l(706)})();