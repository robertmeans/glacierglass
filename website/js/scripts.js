function smMenu(){$(".menuToggle a").off("click"),$(".topMenu h3").off("click touchstart"),$("html").off("touchstart"),$("#main-nav").off("touchstart"),$(".expand").removeClass("expand"),$(".menuToggle").remove(),$(".topMenu").before('<div class="menuToggle"><a href="javascript:void(0)" class="no-default">menu<span class="indicator">+</span></a></div>'),$(".topMenu h3").append('<span class="indicator">+</span>'),$(".menuToggle a").click(function(){$(".topMenu").toggleClass("expand");var a="+"==$(this).find("span.indicator").text()?"-":"+";$(this).find("span.indicator").text(a)}),$(".topMenu h3").click(function(){var a=$(this).siblings(".submenu");$("ul.submenu").not(a).removeClass("expand"),$(".topMenu h3").not(this).find('span.indicator:contains("-")').text("+"),$(this).siblings(".submenu").toggleClass("expand");var b="+"==$(this).find("span.indicator").text()?"-":"+";$(this).find("span.indicator").text(b)}),windowState="small"}function lgMenu(){$(".menuToggle a").off("click"),$(".topMenu h3").off("click"),$(".expand").removeClass("expand"),$(".topMenu h3").find("span.indicator").remove(),$(".menuToggle").remove(),"ontouchstart"in document.documentElement&&($(".topMenu").find("li.hover").removeClass("hover"),$(".topMenu h3").bind("touchstart",function(a){var b=$(this).siblings(".submenu");$("ul.submenu").not(b).removeClass("expand"),$(this).siblings(".submenu").toggleClass("expand")}),$("html").bind("touchstart",function(a){$(".topMenu").find("ul.submenu").removeClass("expand")}),$("#main-nav").bind("touchstart",function(a){a.stopPropagation()})),windowState="large"}var mn=$(".main-nav");mns="main-nav-scrolled",hdr=$("header").height(),$(window).scroll(function(){$(this).scrollTop()>hdr?mn.addClass(mns):mn.removeClass(mns)}),$("a.no-default").click(function(a){a.preventDefault()});var windowState="large";$(document).ready(function(){var a=document.body.clientWidth;a<1074?smMenu():a>=1073&&a<=8e3&&lgMenu()}),$(window).resize(function(){var a=document.body.clientWidth;a<1074&&"small"!=windowState&&smMenu(),a>1073&&a<8e3&&"large"!=windowState&&lgMenu()});