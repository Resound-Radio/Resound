/*global jQuery*/

jQuery(document).ready(function ($) {
    "use strict";
    $("a[data-popup]").click(function (e) {
        window.open($(this).attr("href"), $(this).attr("data-popup-title"), $(this).attr("data-popup-options"));
        e.preventDefault();
    });
});