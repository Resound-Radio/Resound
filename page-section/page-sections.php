<?php
/*
Plugin Name: Page Sections
Plugin URI: http://danrobinsonmedia.com
Description: Adds a shortcode for creating sections in posts and pages
Version: 1
Author: Dan Robinson
Author URI: http://danrobinsonmedia.com
License: MIT
License URI: http://opensource.org/licenses/MIT
Text-Domain: page-sections
Domain Paith: /languages

Copyright (c) 2015 Dan Robinson

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/

if(!defined('WPINC')) {
    die;
}

if(!function_exists('ps_section_shortcode')) {
    function ps_section_shortcode($atts, $content = null) {
        return '<section class="page-section">' . do_shortcode($content) . '</section>';
    }
}

if(!function_exists('ps_section_register_shortcode')) {
    function ps_section_register_shortcode() {
        add_shortcode('section', 'ps_section_shortcode');
    }
    
    add_action('init', 'ps_section_register_shortcode');
}