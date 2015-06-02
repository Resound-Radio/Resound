/*global $*/

var time = 200;

$(document).ready(function () {
    "use strict";
    $("html").css("height", "150%");
    $("body").css("height", "100%");
    
    
    var collapsed = false; // keep track of the state
    
    $(window).scroll(function (e) {
        if ($(this).scrollTop && !(collapsed)) {
            $("#social-media,#logo-text").fadeOut(time);
            $("#menu-row").animate({height: "40px", padding: "4px"}, time);
            $("#logo img").animate({height: "32px"}, time);
            
            collapsed = true;
        } else if (!($(this).scrollTop()) && collapsed) {
            $("#menu-row").animate({height: "80px", padding: "8px"}, time);
            $("#logo img").animate({height: "64px"}, time);
            $("#social-media,#logo-text").fadeIn(time);
            
            collapsed = false;
        }
    });
});
