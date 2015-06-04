/*global $*/

var time = 200;

$(document).ready(function () {
    "use strict";
    $("html").css("height", "150%");
    $("body").css("height", "100%");
    
    $(window).scroll(function (e) {
        if ($(this).scrollTop && !($("header").hasClass("collapsed"))) {
            $("#social-media,#logo-text").fadeOut(time);
            $("header").addClass("collapsed");
        } else if (!($(this).scrollTop()) && $("header").hasClass("collapsed")) {
            $("header").removeClass("collapsed");
            $("#social-media,#logo-text").fadeIn(time);
        }
    });
});
