<?php

// Register Google Fonts that we're using for the theme;
wp_register_style("google-fonts", "//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,400italic");

// Register the version of JQuery we're using:
wp_register_script("jquery", "//code.jquery.com/jquery-1.11.3.min.js", false, "1.11.3", true);

// Register our local javascript functions
wp_register_script("local", get_template_directory_uri() . "/js/global.js", array("jquery"), true);