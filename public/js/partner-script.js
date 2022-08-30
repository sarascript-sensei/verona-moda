/*!
 * 
 *     Name: Yandex Business Partner Script
 *     Generated on: Wed, 26 Jan 2022 15:18:21 GMT
 *     Version: v0.0.4924
 * 
 */!function(e){var t={};function n(r){if(t[r])return t[r].exports;var i=t[r]={i:r,l:!1,exports:{}};return e[r].call(i.exports,i,i.exports,n),i.l=!0,i.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var i in e)n.d(r,i,function(t){return e[t]}.bind(null,i));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=6)}([function(e,t,n){"use strict";var r=Object.prototype.hasOwnProperty,i=function(){for(var e=[],t=0;t<256;++t)e.push("%"+((t<16?"0":"")+t.toString(16)).toUpperCase());return e}();t.arrayToObject=function(e,t){for(var n=t&&t.plainObjects?Object.create(null):{},r=0;r<e.length;++r)void 0!==e[r]&&(n[r]=e[r]);return n},t.merge=function(e,n,i){if(!n)return e;if("object"!=typeof n){if(Array.isArray(e))e.push(n);else{if("object"!=typeof e)return[e,n];(i.plainObjects||i.allowPrototypes||!r.call(Object.prototype,n))&&(e[n]=!0)}return e}if("object"!=typeof e)return[e].concat(n);var o=e;return Array.isArray(e)&&!Array.isArray(n)&&(o=t.arrayToObject(e,i)),Array.isArray(e)&&Array.isArray(n)?(n.forEach((function(n,o){r.call(e,o)?e[o]&&"object"==typeof e[o]?e[o]=t.merge(e[o],n,i):e.push(n):e[o]=n})),e):Object.keys(n).reduce((function(e,o){var a=n[o];return r.call(e,o)?e[o]=t.merge(e[o],a,i):e[o]=a,e}),o)},t.assign=function(e,t){return Object.keys(t).reduce((function(e,n){return e[n]=t[n],e}),e)},t.decode=function(e){try{return decodeURIComponent(e.replace(/\+/g," "))}catch(t){return e}},t.encode=function(e){if(0===e.length)return e;for(var t="string"==typeof e?e:String(e),n="",r=0;r<t.length;++r){var o=t.charCodeAt(r);45===o||46===o||95===o||126===o||o>=48&&o<=57||o>=65&&o<=90||o>=97&&o<=122?n+=t.charAt(r):o<128?n+=i[o]:o<2048?n+=i[192|o>>6]+i[128|63&o]:o<55296||o>=57344?n+=i[224|o>>12]+i[128|o>>6&63]+i[128|63&o]:(r+=1,o=65536+((1023&o)<<10|1023&t.charCodeAt(r)),n+=i[240|o>>18]+i[128|o>>12&63]+i[128|o>>6&63]+i[128|63&o])}return n},t.compact=function(e,n){if("object"!=typeof e||null===e)return e;var r=n||[],i=r.indexOf(e);if(-1!==i)return r[i];if(r.push(e),Array.isArray(e)){for(var o=[],a=0;a<e.length;++a)e[a]&&"object"==typeof e[a]?o.push(t.compact(e[a],r)):void 0!==e[a]&&o.push(e[a]);return o}return Object.keys(e).forEach((function(n){e[n]=t.compact(e[n],r)})),e},t.isRegExp=function(e){return"[object RegExp]"===Object.prototype.toString.call(e)},t.isBuffer=function(e){return null!=e&&!!(e.constructor&&e.constructor.isBuffer&&e.constructor.isBuffer(e))}},function(e,t,n){"use strict";var r=String.prototype.replace,i=/%20/g;e.exports={default:"RFC3986",formatters:{RFC1738:function(e){return r.call(e,i,"+")},RFC3986:function(e){return e}},RFC1738:"RFC1738",RFC3986:"RFC3986"}},function(e,t,n){"use strict";var r=n(3),i=n(4),o=n(1);e.exports={formats:o,parse:i,stringify:r}},function(e,t,n){"use strict";var r=n(0),i=n(1),o={brackets:function(e){return e+"[]"},indices:function(e,t){return e+"["+t+"]"},repeat:function(e){return e}},a=Date.prototype.toISOString,c={delimiter:"&",encode:!0,encoder:r.encode,encodeValuesOnly:!1,serializeDate:function(e){return a.call(e)},skipNulls:!1,strictNullHandling:!1},s=function e(t,n,i,o,a,s,l,u,d,f,p,m){var g=t;if("function"==typeof l)g=l(n,g);else if(g instanceof Date)g=f(g);else if(null===g){if(o)return s&&!m?s(n,c.encoder):n;g=""}if("string"==typeof g||"number"==typeof g||"boolean"==typeof g||r.isBuffer(g))return s?[p(m?n:s(n,c.encoder))+"="+p(s(g,c.encoder))]:[p(n)+"="+p(String(g))];var y,h=[];if(void 0===g)return h;if(Array.isArray(l))y=l;else{var w=Object.keys(g);y=u?w.sort(u):w}for(var b=0;b<y.length;++b){var v=y[b];a&&null===g[v]||(h=Array.isArray(g)?h.concat(e(g[v],i(n,v),i,o,a,s,l,u,d,f,p,m)):h.concat(e(g[v],n+(d?"."+v:"["+v+"]"),i,o,a,s,l,u,d,f,p,m)))}return h};e.exports=function(e,t){var n=e,a=t?r.assign({},t):{};if(null!==a.encoder&&void 0!==a.encoder&&"function"!=typeof a.encoder)throw new TypeError("Encoder has to be a function.");var l=void 0===a.delimiter?c.delimiter:a.delimiter,u="boolean"==typeof a.strictNullHandling?a.strictNullHandling:c.strictNullHandling,d="boolean"==typeof a.skipNulls?a.skipNulls:c.skipNulls,f="boolean"==typeof a.encode?a.encode:c.encode,p="function"==typeof a.encoder?a.encoder:c.encoder,m="function"==typeof a.sort?a.sort:null,g=void 0!==a.allowDots&&a.allowDots,y="function"==typeof a.serializeDate?a.serializeDate:c.serializeDate,h="boolean"==typeof a.encodeValuesOnly?a.encodeValuesOnly:c.encodeValuesOnly;if(void 0===a.format)a.format=i.default;else if(!Object.prototype.hasOwnProperty.call(i.formatters,a.format))throw new TypeError("Unknown format option provided.");var w,b,v=i.formatters[a.format];"function"==typeof a.filter?n=(b=a.filter)("",n):Array.isArray(a.filter)&&(w=b=a.filter);var O,x=[];if("object"!=typeof n||null===n)return"";O=a.arrayFormat in o?a.arrayFormat:"indices"in a?a.indices?"indices":"repeat":"indices";var j=o[O];w||(w=Object.keys(n)),m&&w.sort(m);for(var I=0;I<w.length;++I){var F=w[I];d&&null===n[F]||(x=x.concat(s(n[F],F,j,u,d,f?p:null,b,m,g,y,v,h)))}var A=x.join(l),R=!0===a.addQueryPrefix?"?":"";return A.length>0?R+A:""}},function(e,t,n){"use strict";var r=n(0),i=Object.prototype.hasOwnProperty,o={allowDots:!1,allowPrototypes:!1,arrayLimit:20,decoder:r.decode,delimiter:"&",depth:5,parameterLimit:1e3,plainObjects:!1,strictNullHandling:!1},a=function(e,t,n){if(!e.length)return t;var r,i=e.shift();if("[]"===i)r=(r=[]).concat(a(e,t,n));else{r=n.plainObjects?Object.create(null):{};var o="["===i.charAt(0)&&"]"===i.charAt(i.length-1)?i.slice(1,-1):i,c=parseInt(o,10);!isNaN(c)&&i!==o&&String(c)===o&&c>=0&&n.parseArrays&&c<=n.arrayLimit?(r=[])[c]=a(e,t,n):r[o]=a(e,t,n)}return r},c=function(e,t,n){if(e){var r=n.allowDots?e.replace(/\.([^.[]+)/g,"[$1]"):e,o=/(\[[^[\]]*])/g,c=/(\[[^[\]]*])/.exec(r),s=c?r.slice(0,c.index):r,l=[];if(s){if(!n.plainObjects&&i.call(Object.prototype,s)&&!n.allowPrototypes)return;l.push(s)}for(var u=0;null!==(c=o.exec(r))&&u<n.depth;){if(u+=1,!n.plainObjects&&i.call(Object.prototype,c[1].slice(1,-1))&&!n.allowPrototypes)return;l.push(c[1])}return c&&l.push("["+r.slice(c.index)+"]"),a(l,t,n)}};e.exports=function(e,t){var n=t?r.assign({},t):{};if(null!==n.decoder&&void 0!==n.decoder&&"function"!=typeof n.decoder)throw new TypeError("Decoder has to be a function.");if(n.ignoreQueryPrefix=!0===n.ignoreQueryPrefix,n.delimiter="string"==typeof n.delimiter||r.isRegExp(n.delimiter)?n.delimiter:o.delimiter,n.depth="number"==typeof n.depth?n.depth:o.depth,n.arrayLimit="number"==typeof n.arrayLimit?n.arrayLimit:o.arrayLimit,n.parseArrays=!1!==n.parseArrays,n.decoder="function"==typeof n.decoder?n.decoder:o.decoder,n.allowDots="boolean"==typeof n.allowDots?n.allowDots:o.allowDots,n.plainObjects="boolean"==typeof n.plainObjects?n.plainObjects:o.plainObjects,n.allowPrototypes="boolean"==typeof n.allowPrototypes?n.allowPrototypes:o.allowPrototypes,n.parameterLimit="number"==typeof n.parameterLimit?n.parameterLimit:o.parameterLimit,n.strictNullHandling="boolean"==typeof n.strictNullHandling?n.strictNullHandling:o.strictNullHandling,""===e||null==e)return n.plainObjects?Object.create(null):{};for(var a="string"==typeof e?function(e,t){for(var n={},r=t.ignoreQueryPrefix?e.replace(/^\?/,""):e,a=t.parameterLimit===1/0?void 0:t.parameterLimit,c=r.split(t.delimiter,a),s=0;s<c.length;++s){var l,u,d=c[s],f=d.indexOf("]="),p=-1===f?d.indexOf("="):f+1;-1===p?(l=t.decoder(d,o.decoder),u=t.strictNullHandling?null:""):(l=t.decoder(d.slice(0,p),o.decoder),u=t.decoder(d.slice(p+1),o.decoder)),i.call(n,l)?n[l]=[].concat(n[l]).concat(u):n[l]=u}return n}(e,n):e,s=n.plainObjects?Object.create(null):{},l=Object.keys(a),u=0;u<l.length;++u){var d=l[u],f=c(d,a[d],n);s=r.merge(s,f,n)}return r.compact(s)}},function(e,t,n){var r,i,o;
/*! iFrame Resizer (iframeSizer.min.js ) - v4.1.1 - 2019-04-10
 *  Desc: Force cross domain iframes to size to content.
 *  Requires: iframeResizer.contentWindow.min.js to be loaded into the target frame.
 *  Copyright: (c) 2019 David J. Bradshaw - dave@bradshaw.net
 *  License: MIT
 */!function(n){if("undefined"!=typeof window){var a,c=0,s=!1,l=!1,u="message".length,d="[iFrameSizer]",f=d.length,p=null,m=window.requestAnimationFrame,g={max:1,scroll:1,bodyScroll:1,documentElementScroll:1},y={},h=null,w={autoResize:!0,bodyBackground:null,bodyMargin:null,bodyMarginV1:8,bodyPadding:null,checkOrigin:!0,inPageLinks:!1,enablePublicMethods:!0,heightCalculationMethod:"bodyOffset",id:"iFrameResizer",interval:32,log:!1,maxHeight:1/0,maxWidth:1/0,minHeight:0,minWidth:0,resizeFrom:"parent",scrolling:!1,sizeHeight:!0,sizeWidth:!1,warningTimeout:5e3,tolerance:0,widthCalculationMethod:"scroll",onClosed:function(){},onInit:function(){},onMessage:function(){A("onMessage function not defined")},onResized:function(){},onScroll:function(){return!0}},b={};window.jQuery&&((a=window.jQuery).fn?a.fn.iFrameResize||(a.fn.iFrameResize=function(e){return this.filter("iframe").each((function(t,n){D(n,e)})).end()}):F("","Unable to bind to jQuery, it is not fully loaded.")),i=[],void 0!==(o="function"==typeof(r=q)?r.apply(t,i):r)&&(e.exports=o),window.iFrameResize=window.iFrameResize||q()}function v(){return window.MutationObserver||window.WebKitMutationObserver||window.MozMutationObserver}function O(e,t,n){e.addEventListener(t,n,!1)}function x(e,t,n){e.removeEventListener(t,n,!1)}function j(e){return y[e]?y[e].log:s}function I(e,t){R("log",e,t,j(e))}function F(e,t){R("info",e,t,j(e))}function A(e,t){R("warn",e,t,!0)}function R(e,t,n,r){!0===r&&"object"==typeof window.console&&console[e](function(e){return d+"["+(n="Host page: "+(t=e),window.top!==window.self&&(n=window.parentIFrame&&window.parentIFrame.getId?window.parentIFrame.getId()+": "+t:"Nested host page: "+t),n+"]");var t,n}(t),n)}function N(e){function t(){n("Height"),n("Width"),H((function(){C(j),z(R),s("onResized",j)}),j,"init")}function n(e){var t=Number(y[R]["max"+e]),n=Number(y[R]["min"+e]),r=e.toLowerCase(),i=Number(j[r]);I(R,"Checking "+r+" is in range "+n+"-"+t),i<n&&(i=n,I(R,"Set "+r+" to min value")),t<i&&(i=t,I(R,"Set "+r+" to max value")),j[r]=""+i}function r(e){return v.substr(v.indexOf(":")+u+e)}function i(e,t){var n,r;n=function(){var n,r;L("Send Page Info","pageInfo:"+(n=document.body.getBoundingClientRect(),r=j.iframe.getBoundingClientRect(),JSON.stringify({iframeHeight:r.height,iframeWidth:r.width,clientHeight:Math.max(document.documentElement.clientHeight,window.innerHeight||0),clientWidth:Math.max(document.documentElement.clientWidth,window.innerWidth||0),offsetTop:parseInt(r.top-n.top,10),offsetLeft:parseInt(r.left-n.left,10),scrollTop:window.pageYOffset,scrollLeft:window.pageXOffset,documentHeight:document.documentElement.clientHeight,documentWidth:document.documentElement.clientWidth,windowHeight:window.innerHeight,windowWidth:window.innerWidth})),e,t)},b[r=t]||(b[r]=setTimeout((function(){b[r]=null,n()}),32))}function o(e){var t=e.getBoundingClientRect();return T(R),{x:Math.floor(Number(t.left)+Number(p.x)),y:Math.floor(Number(t.top)+Number(p.y))}}function a(e){var t=e?o(j.iframe):{x:0,y:0},n={x:Number(j.width)+t.x,y:Number(j.height)+t.y};I(R,"Reposition requested from iFrame (offset x:"+t.x+" y:"+t.y+")"),window.top!==window.self?window.parentIFrame?window.parentIFrame["scrollTo"+(e?"Offset":"")](n.x,n.y):A(R,"Unable to scroll to requested position, window.parentIFrame not found"):(p=n,c(),I(R,"--"))}function c(){!1!==s("onScroll",p)?z(R):P()}function s(e,t){return k(R,e,t)}var l,m,g,h,w,v=e.data,j={},R=null;"[iFrameResizerChild]Ready"===v?function(){for(var e in y)L("iFrame requested init",W(e),document.getElementById(e),e)}():d===(""+v).substr(0,f)&&v.substr(f).split(":")[0]in y?(w=v.substr(f).split(":"),j={iframe:y[w[0]]&&y[w[0]].iframe,id:w[0],height:w[1],width:w[2],type:w[3]},R=j.id,y[R]&&(y[R].loaded=!0),(h=j.type in{true:1,false:1,undefined:1})&&I(R,"Ignoring init message from meta parent page"),!h&&(g=!0,y[m=R]||(g=!1,A(j.type+" No settings for "+m+". Message was: "+v)),g)&&(I(R,"Received: "+v),l=!0,null===j.iframe&&(A(R,"IFrame ("+j.id+") not found"),l=!1),l&&function(){var t,n=e.origin,r=y[R]&&y[R].checkOrigin;if(r&&""+n!="null"&&!(r.constructor===Array?function(){var e=0,t=!1;for(I(R,"Checking connection is from allowed list of origins: "+r);e<r.length;e++)if(r[e]===n){t=!0;break}return t}():(t=y[R]&&y[R].remoteHost,I(R,"Checking connection is from: "+t),n===t)))throw new Error("Unexpected message received from: "+n+" for "+j.iframe.id+". Message was: "+e.data+". This error can be disabled by setting the checkOrigin: false option or by providing of array of trusted domains.");return!0}()&&function(){switch(y[R]&&y[R].firstRun&&y[R]&&(y[R].firstRun=!1),j.type){case"close":y[R].closeRequeston?k(R,"onCloseRequest",y[R].iframe):E(j.iframe);break;case"message":d=r(6),I(R,"onMessage passed: {iframe: "+j.iframe.id+", message: "+d+"}"),s("onMessage",{iframe:j.iframe,message:JSON.parse(d)}),I(R,"--");break;case"scrollTo":a(!1);break;case"scrollToOffset":a(!0);break;case"pageInfo":i(y[R]&&y[R].iframe,R),function(){function e(e,r){function o(){y[n]?i(y[n].iframe,n):t()}["scroll","resize"].forEach((function(t){I(n,e+t+" listener for sendPageInfo"),r(window,t,o)}))}function t(){e("Remove ",x)}var n=R;e("Add ",O),y[n]&&(y[n].stopPageInfo=t)}();break;case"pageInfoStop":y[R]&&y[R].stopPageInfo&&(y[R].stopPageInfo(),delete y[R].stopPageInfo);break;case"inPageLink":n=r(9).split("#")[1]||"",l=decodeURIComponent(n),(u=document.getElementById(l)||document.getElementsByName(l)[0])?(e=o(u),I(R,"Moving to in page link (#"+n+") at x: "+e.x+" y: "+e.y),p={x:e.x,y:e.y},c(),I(R,"--")):window.top!==window.self?window.parentIFrame?window.parentIFrame.moveToAnchor(n):I(R,"In page link #"+n+" not found and window.parentIFrame not found"):I(R,"In page link #"+n+" not found");break;case"reset":S(j);break;case"init":t(),s("onInit",j.iframe);break;default:t()}var e,n,l,u,d}())):F(R,"Ignored: "+v)}function k(e,t,n){var r=null,i=null;if(y[e]){if("function"!=typeof(r=y[e][t]))throw new TypeError(t+" on iFrame["+e+"] is not a function");i=r(n)}return i}function M(e){var t=e.id;delete y[t]}function E(e){var t=e.id;I(t,"Removing iFrame: "+t);try{e.parentNode&&e.parentNode.removeChild(e)}catch(e){A(e)}k(t,"onClosed",t),I(t,"--"),M(e)}function T(e){null===p&&I(e,"Get page position: "+(p={x:window.pageXOffset!==n?window.pageXOffset:document.documentElement.scrollLeft,y:window.pageYOffset!==n?window.pageYOffset:document.documentElement.scrollTop}).x+","+p.y)}function z(e){null!==p&&(window.scrollTo(p.x,p.y),I(e,"Set page position: "+p.x+","+p.y),P())}function P(){p=null}function S(e){I(e.id,"Size reset requested by "+("init"===e.type?"host page":"iFrame")),T(e.id),H((function(){C(e),L("reset","reset",e.iframe,e.id)}),e,"reset")}function C(e){function t(t){l||"0"!==e[t]||(l=!0,I(r,"Hidden iFrame detected, creating visibility listener"),function(){function e(){Object.keys(y).forEach((function(e){!function(e){function t(t){return"0px"===(y[e]&&y[e].iframe.style[t])}y[e]&&null!==y[e].iframe.offsetParent&&(t("height")||t("width"))&&L("Visibility change","resize",y[e].iframe,e)}(y[e])}))}var t,n,r=v();r&&(t=document.querySelector("body"),n={attributes:!0,attributeOldValue:!1,characterData:!0,characterDataOldValue:!1,childList:!0,subtree:!0},new r((function(t){I("window","Mutation observed: "+t[0].target+" "+t[0].type),V(e,16)})).observe(t,n))}())}function n(n){var i;i=n,e.id?(e.iframe.style[i]=e[i]+"px",I(e.id,"IFrame ("+r+") "+i+" set to "+e[i]+"px")):I("undefined","messageData id not set"),t(n)}var r=e.iframe.id;y[r]&&(y[r].sizeHeight&&n("height"),y[r].sizeWidth&&n("width"))}function H(e,t,n){n!==t.type&&m?(I(t.id,"Requesting animation frame"),m(e)):e()}function L(e,t,n,r,i){var o,a=!1;r=r||n.id,y[r]&&(n&&"contentWindow"in n&&null!==n.contentWindow?(o=y[r]&&y[r].targetOrigin,I(r,"["+e+"] Sending msg to iframe["+r+"] ("+t+") targetOrigin: "+o),n.contentWindow.postMessage(d+t,o)):A(r,"["+e+"] IFrame("+r+") not found"),i&&y[r]&&y[r].warningTimeout&&(y[r].msgTimeout=setTimeout((function(){!y[r]||y[r].loaded||a||(a=!0,A(r,"IFrame has not responded within "+y[r].warningTimeout/1e3+" seconds. Check iFrameResizer.contentWindow.js has been loaded in iFrame. This message can be ignored if everything is working, or you can set the warningTimeout option to a higher value or zero to suppress this warning."))}),y[r].warningTimeout)))}function W(e){return e+":"+y[e].bodyMarginV1+":"+y[e].sizeWidth+":"+y[e].log+":"+y[e].interval+":"+y[e].enablePublicMethods+":"+y[e].autoResize+":"+y[e].bodyMargin+":"+y[e].heightCalculationMethod+":"+y[e].bodyBackground+":"+y[e].bodyPadding+":"+y[e].tolerance+":"+y[e].inPageLinks+":"+y[e].resizeFrom+":"+y[e].widthCalculationMethod}function D(e,t){var r,i,o,a,l,u,d,f=(""===(r=e.id)&&(e.id=(i=t&&t.id||w.id+c++,null!==document.getElementById(i)&&(i+=c++),r=i),s=(t||{}).log,I(r,"Added missing iframe ID: "+r+" ("+e.src+")")),r);f in y&&"iFrameResizer"in e?A(f,"Ignored iFrame, already setup."):(u=(u=t)||{},y[f]={firstRun:!0,iframe:e,remoteHost:e.src.split("/").slice(0,3).join("/")},function(e){if("object"!=typeof e)throw new TypeError("Options is not an object")}(u),Object.keys(u).forEach((function(e){var t=e.split("Callback");if(2===t.length){var n="on"+t[0].charAt(0).toUpperCase()+t[0].slice(1);this[n]=this[e],delete this[e],A(f,"Deprecated: '"+e+"' has been renamed '"+n+"'. The old method will be removed in the next major version.")}}),u),function(e){for(var t in w)Object.prototype.hasOwnProperty.call(w,t)&&(y[f][t]=Object.prototype.hasOwnProperty.call(e,t)?e[t]:w[t])}(u),y[f]&&(y[f].targetOrigin=!0===y[f].checkOrigin?""===(d=y[f].remoteHost)||"file://"===d?"*":d:"*"),function(){switch(I(f,"IFrame scrolling "+(y[f]&&y[f].scrolling?"enabled":"disabled")+" for "+f),e.style.overflow=!1===(y[f]&&y[f].scrolling)?"hidden":"auto",y[f]&&y[f].scrolling){case"omit":break;case!0:e.scrolling="yes";break;case!1:e.scrolling="no";break;default:e.scrolling=y[f]?y[f].scrolling:"no"}}(),function(){function t(t){1/0!==y[f][t]&&0!==y[f][t]&&(e.style[t]=y[f][t]+"px",I(f,"Set "+t+" = "+y[f][t]+"px"))}function n(e){if(y[f]["min"+e]>y[f]["max"+e])throw new Error("Value for min"+e+" can not be greater than max"+e)}n("Height"),n("Width"),t("maxHeight"),t("minHeight"),t("maxWidth"),t("minWidth")}(),"number"!=typeof(y[f]&&y[f].bodyMargin)&&"0"!==(y[f]&&y[f].bodyMargin)||(y[f].bodyMarginV1=y[f].bodyMargin,y[f].bodyMargin=y[f].bodyMargin+"px"),o=W(f),(l=v())&&(a=l,e.parentNode&&new a((function(t){t.forEach((function(t){Array.prototype.slice.call(t.removedNodes).forEach((function(t){t===e&&E(e)}))}))})).observe(e.parentNode,{childList:!0})),O(e,"load",(function(){var t,r;L("iFrame.onload",o,e,n,!0),t=y[f]&&y[f].firstRun,r=y[f]&&y[f].heightCalculationMethod in g,!t&&r&&S({iframe:e,height:0,width:0,type:"init"})})),L("init",o,e,n,!0),y[f]&&(y[f].iframe.iFrameResizer={close:E.bind(null,y[f].iframe),removeListeners:M.bind(null,y[f].iframe),resize:L.bind(null,"Window resize","resize",y[f].iframe),moveToAnchor:function(e){L("Move to anchor","moveToAnchor:"+e,y[f].iframe,f)},sendMessage:function(e){L("Send Message","message:"+(e=JSON.stringify(e)),y[f].iframe,f)}}))}function V(e,t){null===h&&(h=setTimeout((function(){h=null,e()}),t))}function B(){"hidden"!==document.visibilityState&&(I("document","Trigger event: Visiblity change"),V((function(){_("Tab Visable","resize")}),16))}function _(e,t){Object.keys(y).forEach((function(n){var r;y[r=n]&&"parent"===y[r].resizeFrom&&y[r].autoResize&&!y[r].firstRun&&L(e,t,document.getElementById(n),n)}))}function q(){function e(e,n){n&&(function(){if(!n.tagName)throw new TypeError("Object is not a valid DOM element");if("IFRAME"!==n.tagName.toUpperCase())throw new TypeError("Expected <IFRAME> tag, found <"+n.tagName+">")}(),D(n,e),t.push(n))}var t;return function(){var e,t=["moz","webkit","o","ms"];for(e=0;e<t.length&&!m;e+=1)m=window[t[e]+"RequestAnimationFrame"];m||I("setup","RequestAnimationFrame not supported")}(),O(window,"message",N),O(window,"resize",(function(){I("window","Trigger event: resize"),V((function(){_("Window resize","resize")}),16)})),O(document,"visibilitychange",B),O(document,"-webkit-visibilitychange",B),function(r,i){var o;switch(t=[],(o=r)&&o.enablePublicMethods&&A("enablePublicMethods option has been removed, public methods are now always available in the iFrame"),typeof i){case"undefined":case"string":Array.prototype.forEach.call(document.querySelectorAll(i||"iframe"),e.bind(n,r));break;case"object":e(r,i);break;default:throw new TypeError("Unexpected data type ("+typeof i+")")}return t}}}()},function(e,t,n){"use strict";n.r(t);var r,i=n(2),o=n.n(i);!function(e){e.NAVIGATION="YA_PARTNER_FRAME_NAVIGATION"}(r||(r={}));n(5);function a(e){try{var t=JSON.parse(e);if(t.messageId===r.NAVIGATION){if(function(){try{return window.self!==window.top}catch(e){return!0}}())return void window.top.postMessage(e,"*");window.location.href=t.data.url.replace("__CURRENT_LOCATION__",encodeURIComponent(window.location.href))}}catch(e){}}if("undefined"!=typeof window){var c={init:function(e){var t,n=e.container,r=e.partnerName,i=e.partnerSiteId,c=e.siteName,s=e.companySearchText,l=e.products,u=e.appearance,d=e.iframeDomain,f=void 0===d?"yandex.ru":d;if(n){var p=function(){for(var e=arguments.length,t=new Array(e),n=0;n<e;n++)t[n]=arguments[n];return t.join("/").replace(/\/+/g,"/")}(f,"business/partner-widget",r,String(i)),m=((t={}).partnerSiteName=c||s,t.inFrame=!0,t.products=l,t.appearance=u,t),g="https://"+p+o.a.stringify(m,{addQueryPrefix:!0}),y=document.createElement("iframe");y.src=g,y.setAttribute("style","width:100%;border:none;min-height:300px;"),y.onload=function(){window.iFrameResize({checkOrigin:!1},y),y.onload=null},window.addEventListener("message",(function(e){e.origin.includes(f)&&a(e.data)})),n.appendChild(y)}}};window.YaPartnerWidget=c}}]);