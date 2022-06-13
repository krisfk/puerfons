/**
* Copyright (c) 2017-present, Facebook, Inc. All rights reserved.
*
* You are hereby granted a non-exclusive, worldwide, royalty-free license to use,
* copy, modify, and distribute this software in source code or binary form for use
* in connection with the web services and APIs provided by Facebook.
*
* As with any software that integrates with the Facebook platform, your use of
* this software is subject to the Facebook Platform Policy
* [http://developers.facebook.com/policy/]. This copyright notice shall be
* included in all copies or substantial portions of the software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
* FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
* COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
* IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
* CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/
(function(a,b,c,d){var e={exports:{}};e.exports;(function(){var f=a.fbq;f.execStart=a.performance&&a.performance.now&&a.performance.now();if(!function(){var b=a.postMessage||function(){};if(!f){b({action:"FB_LOG",logType:"Facebook Pixel Error",logMessage:"Pixel code is not installed correctly on this page"},"*");"error"in console&&console.error("Facebook Pixel Error: Pixel code is not installed correctly on this page");return!1}return!0}())return;var g=typeof Symbol==="function"&&typeof (typeof Symbol==="function"?Symbol.iterator:"@@iterator")==="symbol"?function(a){return typeof a}:function(a){return a&&typeof Symbol==="function"&&a.constructor===Symbol&&a!==(typeof Symbol==="function"?Symbol.prototype:"@@prototype")?"symbol":typeof a},h=function(){function a(a,b){for(var c=0;c<b.length;c++){var d=b[c];d.enumerable=d.enumerable||!1;d.configurable=!0;"value"in d&&(d.writable=!0);Object.defineProperty(a,d.key,d)}}return function(b,c,d){c&&a(b.prototype,c);d&&a(b,d);return b}}();function i(a,b,c){b in a?Object.defineProperty(a,b,{value:c,enumerable:!0,configurable:!0,writable:!0}):a[b]=c;return a}function j(a,b){if(!a)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return b&&(typeof b==="object"||typeof b==="function")?b:a}function k(a,b){if(typeof b!=="function"&&b!==null)throw new TypeError("Super expression must either be null or a function, not "+typeof b);a.prototype=Object.create(b&&b.prototype,{constructor:{value:a,enumerable:!1,writable:!0,configurable:!0}});b&&(Object.setPrototypeOf?Object.setPrototypeOf(a,b):a.__proto__=b)}function l(a){if(Array.isArray(a)){for(var b=0,c=Array(a.length);b<a.length;b++)c[b]=a[b];return c}else return Array.from(a)}function m(a,b){if(!(a instanceof b))throw new TypeError("Cannot call a class as a function")}f.__fbeventsModules||(f.__fbeventsModules={},f.__fbeventsResolvedModules={},f.getFbeventsModules=function(a){f.__fbeventsResolvedModules[a]||(f.__fbeventsResolvedModules[a]=f.__fbeventsModules[a]());return f.__fbeventsResolvedModules[a]},f.fbIsModuleLoaded=function(a){return!!f.__fbeventsModules[a]},f.ensureModuleRegistered=function(b,a){f.fbIsModuleLoaded(b)||(f.__fbeventsModules[b]=a)});f.ensureModuleRegistered("SignalsFBEventsBaseEvent",function(){return function(g,i,j,k){var e={exports:{}};e.exports;(function(){"use strict";var a=f.getFbeventsModules("SignalsFBEventsUtils"),b=a.map,c=a.keys;a=function(){function a(b){m(this,a),this._regKey=0,this._subscriptions={},this._coerceArgs=b||null}h(a,[{key:"listen",value:function(a){var b=this,c=""+this._regKey++;this._subscriptions[c]=a;return function(){delete b._subscriptions[c]}}},{key:"listenOnce",value:function(a){var b=null,c=function(){b&&b();b=null;return a.apply(void 0,arguments)};b=this.listen(c);return b}},{key:"trigger",value:function(){var a=this;for(var d=arguments.length,e=Array(d),f=0;f<d;f++)e[f]=arguments[f];return b(c(this._subscriptions),function(b){var c;return(c=a._subscriptions)[b].apply(c,e)})}},{key:"triggerWeakly",value:function(){var a=this._coerceArgs!=null?this._coerceArgs.apply(this,arguments):null;return a==null?[]:this.trigger.apply(this,l(a))}}]);return a}();e.exports=a})();return e.exports}(a,b,c,d)});f.ensureModuleRegistered("signalsFBEventsCoercePixelID",function(){return function(g,h,i,j){var k={exports:{}};k.exports;(function(){"use strict";var a=f.getFbeventsModules("SignalsFBEventsLogging"),b=a.logUserError;a=f.getFbeventsModules("SignalsFBEventsTyped");var c=a.Typed,d=a.coerce;function e(a){a=d(a,c.fbid());if(a==null){var e=JSON.stringify(a);b({pixelID:e!=null?e:"undefined",type:"INVALID_PIXEL_ID"});return null}return a}k.exports=e})();return k.exports}(a,b,c,d)});f.ensureModuleRegistered("signalsFBEventsGetIwlUrl",function(){return function(g,h,i,j){var k={exports:{}};k.exports;(function(){"use strict";var a=f.getFbeventsModules("signalsFBEventsGetTier");k.exports=function(b,c){c=a(c);c=c==null?"www.facebook.com":"www."+c+".facebook.com";return"https://"+c+"/signals/iwl.js?pixel_id="+b}})();return k.exports}(a,b,c,d)});f.ensureModuleRegistered("signalsFBEventsGetTier",function(){return function(f,g,h,i){var j={exports:{}};j.exports;(function(){"use strict";var a=/^https:\/\/www\.([A-Za-z0-9\.]+)\.facebook\.com\/tr\/?$/,b=["https://www.facebook.com/tr","https://www.facebook.com/tr/"];j.exports=function(c){if(b.indexOf(c)!==-1)return null;var d=a.exec(c);if(d==null)throw new Error("Malformed tier: "+c);return d[1]}})();return j.exports}(a,b,c,d)});f.ensureModuleRegistered("SignalsFBEventsIWLBootStrapEvent",function(){return function(h,i,j,k){var l={exports:{}};l.exports;(function(){"use strict";var a=f.getFbeventsModules("SignalsFBEventsBaseEvent"),b=f.getFbeventsModules("signalsFBEventsCoercePixelID");function c(){for(var a=arguments.length,c=Array(a),d=0;d<a;d++)c[d]=arguments[d];var e=c[0];if(e==null||(typeof e==="undefined"?"undefined":g(e))!=="object")return null;var f=e.graphToken,h=e.pixelID,i=b(h);return f!=null&&typeof f==="string"&&i!=null?[{graphToken:f,pixelID:i}]:null}a=new a(c);l.exports=a})();return l.exports}(a,b,c,d)});f.ensureModuleRegistered("SignalsFBEventsJSLoader",function(){return function(f,g,h,i){var j={exports:{}};j.exports;(function(){"use strict";var a={CDN_BASE_URL:"https://connect.facebook.net/"};function b(){var b=g.getElementsByTagName("script");for(var c=0;c<b.length;c++){var d=b[c];if(d&&d.src&&d.src.indexOf(a.CDN_BASE_URL)!==-1)return d}return null}function c(a){var c=g.createElement("script");c.src=a;c.async=!0;a=b();a&&a.parentNode?a.parentNode.insertBefore(c,a):g.head&&g.head.firstChild&&g.head.appendChild(c)}j.exports={CONFIG:a,loadJSFile:c}})();return j.exports}(a,b,c,d)});f.ensureModuleRegistered("SignalsFBEventsLogging",function(){return function(g,h,i,j){var k={exports:{}};k.exports;(function(){"use strict";var a=f.getFbeventsModules("SignalsFBEventsUtils"),b=a.isArray,c=a.isInstanceOf,d=a.map,e=f.getFbeventsModules("SignalsParamList"),h=f.getFbeventsModules("signalsFBEventsSendGET"),i=f.getFbeventsModules("SignalsFBEventsJSLoader"),j=!1;function l(){j=!0}var m=!0;function n(){m=!1}var o=!1;function p(){o=!0}var q="console",r="warn",s=[];function t(a){g[q]&&g[q][r]&&(g[q][r](a),o&&s.push(a))}var u=!1;function v(){u=!0}function w(a){if(u)return;t("[Facebook Pixel] - "+a)}var x="Facebook Pixel Error",y=function(){g.postMessage!=null&&g.postMessage.apply(g,arguments)},z={};function A(a){switch(a.type){case"FBQ_NO_METHOD_NAME":return"You must provide an argument to fbq().";case"INVALID_FBQ_METHOD":var b=a.method;return"\"fbq('"+b+"', ...);\" is not a valid fbq command.";case"INVALID_FBQ_METHOD_PARAMETER":b=a.invalidParamName;var c=a.invalidParamValue,d=a.method,e=a.params;return"Call to \"fbq('"+d+"', "+C(e)+');" with parameter "'+b+'" has an invalid value of "'+B(c)+'"';case"INVALID_PIXEL_ID":d=a.pixelID;return"Invalid PixelID: "+d+".";case"DUPLICATE_PIXEL_ID":e=a.pixelID;return"Duplicate Pixel ID: "+e+".";case"SET_METADATA_ON_UNINITIALIZED_PIXEL_ID":b=a.metadataValue;c=a.pixelID;return"Trying to set argument "+b+" for uninitialized Pixel ID "+c+".";case"CONFLICTING_VERSIONS":return"Multiple pixels with conflicting versions were detected on this page.";case"MULTIPLE_PIXELS":return"Multiple pixels were detected on this page.";case"UNSUPPORTED_METADATA_ARGUMENT":d=a.metadata;return"Unsupported metadata argument: "+d+".";case"REQUIRED_PARAM_MISSING":e=a.param;b=a.eventName;return"Required parameter '"+e+"' is missing for event '"+b+"'.";case"INVALID_PARAM":c=a.param;d=a.eventName;return"Parameter '"+c+"' is invalid for event '"+d+"'.";case"NO_EVENT_NAME":return'Missing event name. Track events must be logged with an event name fbq("track", eventName)';case"NONSTANDARD_EVENT":e=a.eventName;return"You are sending a non-standard event '"+e+"'. The preferred way to send these events is using trackCustom. See 'https://developers.facebook.com/docs/ads-for-websites/pixel-events/#events' for more information.";case"NEGATIVE_EVENT_PARAM":b=a.param;c=a.eventName;return"Parameter '"+b+"' is negative for event '"+c+"'.";case"PII_INVALID_TYPE":d=a.key_type;e=a.key_val;return"An invalid "+d+" was specified for '"+e+"'. This data will not be sent with any events for this Pixel.";case"PII_UNHASHED_PII":b=a.key;return"The value for the '"+b+"' key appeared to be PII. This data will not be sent with any events for this Pixel.";case"INVALID_CONSENT_ACTION":c=a.action;return"\"fbq('"+c+"', ...);\" is not a valid fbq('consent', ...) action. Valid actions are 'revoke' and 'grant'.";case"INVALID_JSON_LD":d=a.jsonLd;return"Unable to parse JSON-LD tag. Malformed JSON found: '"+d+"'.";case"SITE_CODELESS_OPT_OUT":e=a.pixelID;return"Unable to open Codeless events interface for pixel as the site has opted out. Pixel ID: "+e+".";case"PIXEL_NOT_INITIALIZED":b=a.pixelID;return"Pixel "+b+" not found";case"UNWANTED_CUSTOM_DATA":return"Removed keys from custom data.";default:F(new Error("INVALID_USER_ERROR - "+a.type+" - "+JSON.stringify(a)));return"Invalid User Error."}}var B=function(a){if(typeof a==="string")return"'"+a+"'";else if(typeof a=="undefined")return"undefined";else if(a===null)return"null";else if(!b(a)&&a.constructor!=null&&a.constructor.name!=null)return a.constructor.name;try{return JSON.stringify(a)||"undefined"}catch(a){return"undefined"}},C=function(a){return d(a,B).join(", ")};function D(a,b){try{var d=g.fbq.instance.pluginConfig.get(null,"dataProcessingOptions");if(d!=null&&d.dataPrivacyOptions.includes("LDU"))return;d=Math.random();var f=g.fbq&&g.fbq._releaseSegment?g.fbq._releaseSegment:"unknown";if(m&&d<.01||f==="canary"){d=new e(null);d.append("p","pixel");d.append("v",g.fbq&&g.fbq.version?g.fbq.version:"unknown");d.append("e",a.toString());c(a,Error)&&(d.append("f",a.fileName),d.append("s",a.stackTrace||a.stack));d.append("ue",b?"1":"0");d.append("rs",f);h(d,{url:i.CONFIG.CDN_BASE_URL+"/log/error",ignoreRequestLengthCheck:!0})}}catch(a){}}function E(a){var b=JSON.stringify(a);if(!Object.prototype.hasOwnProperty.call(z,b))z[b]=!0;else return;b=A(a);w(b);y({action:"FB_LOG",logMessage:b,logType:x},"*");D(new Error(b),!0)}function F(a){D(a,!1),j&&w(a.toString())}a={consoleWarn:t,disableAllLogging:v,disableSampling:n,enableVerboseDebugLogging:l,logError:F,logUserError:E,enableBufferedLoggedWarnings:p,bufferedLoggedWarnings:s};k.exports=a})();return k.exports}(a,b,c,d)});f.ensureModuleRegistered("SignalsFBEventsNetworkConfig",function(){return function(f,g,h,i){var j={exports:{}};j.exports;(function(){"use strict";var a={ENDPOINT:"https://www.facebook.com/tr/"};j.exports=a})();return j.exports}(a,b,c,d)});f.ensureModuleRegistered("SignalsFBEventsPlugin",function(){return function(f,g,h,i){var j={exports:{}};j.exports;(function(){"use strict";var a=function a(b){m(this,a),this.__fbEventsPlugin=1,this.plugin=b,this.__fbEventsPlugin=1};j.exports=a})();return j.exports}(a,b,c,d)});f.ensureModuleRegistered("signalsFBEventsSendGET",function(){return function(g,h,i,j){var k={exports:{}};k.exports;(function(){"use strict";var a=f.getFbeventsModules("SignalsFBEventsNetworkConfig"),b=2048;function c(c,d){d=d||{};var e=d.ignoreRequestLengthCheck;e=e===void 0?!1:e;d=d.url;d=d===void 0?a.ENDPOINT:d;c.replaceEntry("rqm",e?"FGET":"GET");c=c.toQueryString();d=d+"?"+c;if(e||d.length<b){c=new Image();c.src=d;return!0}return!1}k.exports=c})();return k.exports}(a,b,c,d)});f.ensureModuleRegistered("SignalsFBEventsTyped",function(){return function(h,l,c,d){var e={exports:{}};e.exports;(function(){"use strict";var a=Object.assign||function(a){for(var b=1;b<arguments.length;b++){var c=arguments[b];for(var d in c)Object.prototype.hasOwnProperty.call(c,d)&&(a[d]=c[d])}return a},b=f.getFbeventsModules("SignalsFBEventsUtils");b.filter;b.map;var c=b.reduce;b=f.getFbeventsModules("SignalsFBEventsUtils");var d=b.isSafeInteger,h=function(b){k(a,b);function a(){var b=arguments.length>0&&arguments[0]!==void 0?arguments[0]:"";m(this,a);var c=j(this,(a.__proto__||Object.getPrototypeOf(a)).call(this,b));c.name="FBEventsCoercionError";return c}return a}(Error);function l(a){return Object.values(a)}function n(){return function(a){if(typeof a!=="boolean")throw new h();return a}}function o(){return function(a){if(typeof a!=="number")throw new h();return a}}function p(){return function(a){if(typeof a!=="string")throw new h();return a}}function q(){return function(a){if((typeof a==="undefined"?"undefined":g(a))!=="object"||Array.isArray(a)||a==null)throw new h();return a}}function r(){return function(a){if(a==null||!Array.isArray(a))throw new h();return a}}function s(a){return function(b){if(l(a).includes(b))return b;throw new h()}}function t(a){return function(b){return y(b,F.array()).map(a)}}function u(b){return function(e){var d=y(e,F.object());return c(Object.keys(d),function(c,e){return a({},c,i({},e,b(d[e])))},{})}}function v(a){return function(b){return b==null?null:a(b)}}function w(b){return function(e){var d=y(e,F.object());e=c(Object.keys(b),function(c,e){if(c==null)return null;var f=b[e],g=d[e];f=f(g);return a({},c,i({},e,f))},{});return e}}function x(a,b){try{return b(a)}catch(a){if(a.name==="FBEventsCoercionError")return null;throw a}}function y(a,b){return b(a)}function z(a){return function(b){b=y(b,F.string());if(a.test(b))return b;throw new h()}}function A(a){if(!a)throw new h()}function B(a){return function(b){b=y(b,r());A(b.length===a.length);return b.map(function(b,c){return y(b,a[c])})}}function C(a){var b=a.def,c=a.validators;return function(a){var d=y(a,b);c.forEach(function(a){if(!a(d))throw new h()});return d}}var D=/^[1-9][0-9]{0,25}$/;function E(){return C({def:function(a){var b=x(a,F.number());if(b!=null){F.assert(d(b));return""+b}return y(a,F.string())},validators:[function(a){return D.test(a)}]})}var F={allowNull:v,array:r,arrayOf:t,assert:A,"boolean":n,enumeration:s,fbid:E,mapOf:u,matches:z,number:o,object:q,objectWithFields:w,string:p,tuple:B,withValidation:C};e.exports={Typed:F,coerce:x,enforce:y,FBEventsCoercionError:h}})();return e.exports}(a,b,c,d)});f.ensureModuleRegistered("SignalsFBEventsUtils",function(){return function(f,i,j,k){var l={exports:{}};l.exports;(function(){"use strict";var a=Object.prototype.toString,b=!("addEventListener"in i);function c(a,b){return b!=null&&a instanceof b}function d(b){return Array.isArray?Array.isArray(b):a.call(b)==="[object Array]"}function e(a){return typeof a==="number"||typeof a==="string"&&/^\d+$/.test(a)}function f(a){return a!=null&&(typeof a==="undefined"?"undefined":g(a))==="object"&&d(a)===!1}function j(a){return f(a)===!0&&Object.prototype.toString.call(a)==="[object Object]"}function k(a){if(j(a)===!1)return!1;a=a.constructor;if(typeof a!=="function")return!1;a=a.prototype;if(j(a)===!1)return!1;return Object.prototype.hasOwnProperty.call(a,"isPrototypeOf")===!1?!1:!0}var n=Number.isInteger||function(a){return typeof a==="number"&&isFinite(a)&&Math.floor(a)===a};function o(a){return n(a)&&a>=0&&a<=Number.MAX_SAFE_INTEGER}function p(a,c,d){var e=b?"on"+c:c;c=b?a.attachEvent:a.addEventListener;var f=b?a.detachEvent:a.removeEventListener,g=function b(){f&&f.call(a,e,b,!1),d()};c&&c.call(a,e,g,!1)}var q=Object.prototype.hasOwnProperty,r=!{toString:null}.propertyIsEnumerable("toString"),s=["toString","toLocaleString","valueOf","hasOwnProperty","isPrototypeOf","propertyIsEnumerable","constructor"],t=s.length;function u(a){if((typeof a==="undefined"?"undefined":g(a))!=="object"&&(typeof a!=="function"||a===null))throw new TypeError("Object.keys called on non-object");var b=[];for(var c in a)q.call(a,c)&&b.push(c);if(r)for(var d=0;d<t;d++)q.call(a,s[d])&&b.push(s[d]);return b}function v(a,b){if(a==null)throw new TypeError(" array is null or not defined");a=Object(a);var c=a.length>>>0;if(typeof b!=="function")throw new TypeError(b+" is not a function");var d=new Array(c),e=0;while(e<c){var f;e in a&&(f=a[e],f=b(f,e,a),d[e]=f);e++}return d}function w(a,b,c){if(a==null)throw new TypeError(" array is null or not defined");if(typeof b!=="function")throw new TypeError(b+" is not a function");var d=Object(a),e=d.length>>>0,f=0;if(c!=null)c=c;else{while(f<e&&!(f in d))f++;if(f>=e)throw new TypeError("Reduce of empty array with no initial value");c=d[f++]}while(f<e)f in d&&(c=b(c,d[f],f,a)),f++;return c}function x(a){if(typeof a!=="function")throw new TypeError();var b=Object(this),c=b.length>>>0,d=arguments.length>=2?arguments[1]:void 0;for(var e=0;e<c;e++)if(e in b&&a.call(d,b[e],e,b))return!0;return!1}function y(a){return u(a).length===0}function z(a){if(this===void 0||this===null)throw new TypeError();var b=Object(this),c=b.length>>>0;if(typeof a!=="function")throw new TypeError();var d=[],e=arguments.length>=2?arguments[1]:void 0;for(var f=0;f<c;f++)if(f in b){var g=b[f];a.call(e,g,f,b)&&d.push(g)}return d}function A(a,b){try{return b(a)}catch(a){if(a instanceof TypeError)if(B.test(a))return null;else if(C.test(a))return void 0;throw a}}var B=/^null | null$|^[^(]* null /i,C=/^undefined | undefined$|^[^(]* undefined /i;A["default"]=A;var D=function(){function a(b){m(this,a),this.items=b||[]}h(a,[{key:"has",value:function(a){return x.call(this.items,function(b){return b===a})}},{key:"add",value:function(a){this.items.push(a)}}]);return a}();function E(a){return a}function F(a,b){return a==null||b==null?!1:a.indexOf(b)>=0}function G(a,b){return a==null||b==null?!1:a.indexOf(b)===0}D={FBSet:D,castTo:E,each:function(a,b){v.call(this,a,b)},filter:function(a,b){return z.call(a,b)},idx:A,isArray:d,isEmptyObject:y,isInstanceOf:c,isInteger:n,isNumber:e,isObject:f,isPlainObject:k,isSafeInteger:o,keys:u,listenOnce:p,map:v,reduce:w,some:function(a,b){return x.call(a,b)},stringIncludes:F,stringStartsWith:G};l.exports=D})();return l.exports}(a,b,c,d)});f.ensureModuleRegistered("SignalsParamList",function(){return function(f,i,j,k){var l={exports:{}};l.exports;(function(){"use strict";var a="deep",b="shallow";function c(a){return JSON===void 0||JSON===null||!JSON.stringify?Object.prototype.toString.call(a):JSON.stringify(a)}function d(a){if(a===null||a===void 0)return!0;a=typeof a==="undefined"?"undefined":g(a);return a==="number"||a==="boolean"||a==="string"}var e=function(){function e(a){m(this,e),this._params=[],this._piiTranslator=a}h(e,[{key:"containsKey",value:function(a){for(var b=0;b<this._params.length;b++)if(this._params[b].name===a)return!0;return!1}},{key:"get",value:function(a){a=a;for(var b=0;b<this._params.length;b++)if(this._params[b].name===a)return this._params[b].value;return null}},{key:"getAllParams",value:function(){return this._params}},{key:"replaceEntry",value:function(a,b){var c=0;while(c<this._params.length)this._params[c].name===a?this._params.splice(c,1):c++;this.append(a,b)}},{key:"addRange",value:function(a){var c=this;a.each(function(a,d){return c._append({name:a,value:d},b,!1)})}},{key:"append",value:function(b,c){var d=arguments.length>2&&arguments[2]!==void 0?arguments[2]:!1;this._append({name:encodeURIComponent(b),value:c},a,d);return this}},{key:"appendHash",value:function(b){var c=arguments.length>1&&arguments[1]!==void 0?arguments[1]:!1;for(var d in b)Object.prototype.hasOwnProperty.call(b,d)&&this._append({name:encodeURIComponent(d),value:b[d]},a,c);return this}},{key:"_append",value:function(b,e,f){var g=b.name;b=b.value;d(b)?this._appendPrimitive(g,b,f):e===a?this._appendObject(g,b,f):this._appendPrimitive(g,c(b),f)}},{key:"_translateValue",value:function(a,b,c){if(typeof b==="boolean")return b?"true":"false";if(!c)return""+b;if(!this._piiTranslator)throw new Error();return this._piiTranslator(a,""+b)}},{key:"_appendPrimitive",value:function(a,b,c){if(b!=null){b=this._translateValue(a,b,c);b!=null&&this._params.push({name:a,value:b})}}},{key:"_appendObject",value:function(a,c,d){var e=null;for(var f in c)if(Object.prototype.hasOwnProperty.call(c,f)){var g=a+"["+encodeURIComponent(f)+"]";try{this._append({name:g,value:c[f]},b,d)}catch(a){e==null&&(e=a)}}if(e!=null)throw e}},{key:"each",value:function(a){for(var b=0;b<this._params.length;b++){var c=this._params[b],d=c.name;c=c.value;a(d,c)}}},{key:"toQueryString",value:function(){var a=[];this.each(function(b,c){a.push(b+"="+encodeURIComponent(c))});return a.join("&")}},{key:"toFormData",value:function(){var a=new FormData();this.each(function(b,c){a.append(b,c)});return a}}],[{key:"fromHash",value:function(a,b){return new e(b).appendHash(a)}}]);return e}();l.exports=e})();return l.exports}(a,b,c,d)});f.ensureModuleRegistered("SignalsFBEvents.plugins.iwlbootstrapper",function(){return function(g,h,i,j){var k={exports:{}};k.exports;(function(){"use strict";var a=f.getFbeventsModules("SignalsFBEventsIWLBootStrapEvent"),b=f.getFbeventsModules("SignalsFBEventsLogging"),c=f.getFbeventsModules("SignalsFBEventsNetworkConfig"),d=f.getFbeventsModules("SignalsFBEventsPlugin"),e=f.getFbeventsModules("signalsFBEventsGetIwlUrl"),i=f.getFbeventsModules("signalsFBEventsGetTier"),j=b.logUserError,l=/^https:\/\/.*\.facebook\.com$/i,m="FACEBOOK_IWL_CONFIG_STORAGE_KEY",n=g.sessionStorage?g.sessionStorage:{getItem:function(a){return null},removeItem:function(a){},setItem:function(a,b){}};k.exports=new d(function(b,d){function k(a,b){var d=h.createElement("script");d.async=!0;d.onload=function(){if(!g.FacebookIWL||!g.FacebookIWL.init)return;var a=i(c.ENDPOINT);a!=null&&g.FacebookIWL.set&&g.FacebookIWL.set("tier",a);b()};g.FacebookIWLSessionEnd=function(){n.removeItem(m),g.close()};d.src=e(a,c.ENDPOINT);h.body&&h.body.appendChild(d)}var o=!1,p=function(a){return!!(d&&d.pixelsByID&&Object.prototype.hasOwnProperty.call(d.pixelsByID,a))};function q(){if(o)return;var a=n.getItem(m);if(!a)return;a=JSON.parse(a);var b=a.pixelID,c=a.graphToken,d=a.sessionStartTime;o=!0;k(b,function(){var a=p(b)?b:null;g.FacebookIWL.init(a,c,d)})}function r(a){if(o)return;k(a,function(){return g.FacebookIWL.showConfirmModal(a)})}function s(a,b,c){n.setItem(m,JSON.stringify({graphToken:a,pixelID:b,sessionStartTime:c})),q()}a.listen(function(a){var b=a.graphToken;a=a.pixelID;s(b,a);g.FacebookIWLSessionEnd=function(){return n.removeItem(m)}});function b(a){var b=a.data,c=b.graphToken,e=b.msg_type,f=b.pixelID;b=b.sessionStartTime;if(d&&d.pixelsByID&&d.pixelsByID[f]&&d.pixelsByID[f].codeless==="false"){j({pixelID:f,type:"SITE_CODELESS_OPT_OUT"});return}if(n.getItem(m)||!l.test(a.origin)||!(a.data&&(e==="FACEBOOK_IWL_BOOTSTRAP"||e==="FACEBOOK_IWL_CONFIRM_DOMAIN")))return;switch(e){case"FACEBOOK_IWL_BOOTSTRAP":a.source.postMessage("FACEBOOK_IWL_BOOTSTRAP_ACK",a.origin);s(c,f,b);break;case"FACEBOOK_IWL_CONFIRM_DOMAIN":a.source.postMessage("FACEBOOK_IWL_CONFIRM_DOMAIN_ACK",a.origin);r(f);break}}if(n.getItem(m)){q();return}g.opener&&g.addEventListener("message",b)})})();return k.exports}(a,b,c,d)});e.exports=f.getFbeventsModules("SignalsFBEvents.plugins.iwlbootstrapper");f.registerPlugin&&f.registerPlugin("fbevents.plugins.iwlbootstrapper",e.exports);f.ensureModuleRegistered("fbevents.plugins.iwlbootstrapper",function(){return e.exports})})()})(window,document,location,history);
fbq.registerPlugin("fbevents.plugins.dwell", {__fbEventsPlugin: 1, plugin: function(fbq, instance, config) { /* empty plugin */ }});