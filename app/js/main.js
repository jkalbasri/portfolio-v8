/*!

 * Licensed under MIT (https://github.com/jkalbasri)

 */
$(document).ready(function(){$('.header nav a').smoothScroll()});(function(){var docElem=window.document.documentElement,didScroll,scrollPosition;function noScrollFn(){window.scrollTo(scrollPosition?scrollPosition.x:0,scrollPosition?scrollPosition.y:0)}
function noScroll(){window.removeEventListener('scroll',scrollHandler);window.addEventListener('scroll',noScrollFn)}
function scrollFn(){window.addEventListener('scroll',scrollHandler)}
function canScroll(){window.removeEventListener('scroll',noScrollFn);scrollFn()}
function scrollHandler(){if(!didScroll){didScroll=!0;setTimeout(function(){scrollPage()},60)}};function scrollPage(){scrollPosition={x:window.pageXOffset||docElem.scrollLeft,y:window.pageYOffset||docElem.scrollTop};didScroll=!1};scrollFn();[].slice.call(document.querySelectorAll('.morph-button')).forEach(function(bttn){new UIMorphingButton(bttn,{closeEl:'.icon-close',onBeforeOpen:function(){noScroll()},onAfterOpen:function(){canScroll();classie.addClass(document.body,'noscroll');classie.addClass(bttn,'scroll')},onBeforeClose:function(){classie.removeClass(document.body,'noscroll');classie.removeClass(bttn,'scroll');noScroll()},onAfterClose:function(){canScroll()}})})})()
