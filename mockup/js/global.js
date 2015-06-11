/*global $*/

var time = 200;

$(document).ready(function () {
    "use strict";
    $("html").css("height", "150%");
    $("body").css("height", "100%");
    
    if ($(window).width() >= 1024) {
        $(window).scroll(function (e) {
            if ($(this).scrollTop && !($("#page-header").hasClass("collapsed"))) {
                $("#social-media,#logo-text").fadeOut(time);
                $("#page-header").addClass("collapsed");
            } else if (!($(this).scrollTop()) && $("#page-header").hasClass("collapsed")) {
                $("#page-header").removeClass("collapsed");
                $("#social-media,#logo-text").fadeIn(time);
            }
        });
    }
    
    if ($(window).width() <= 480) {
        $("#menu-toggle").click(function (e) {
            $("#menu").fadeToggle(time);
        });
    }
});
