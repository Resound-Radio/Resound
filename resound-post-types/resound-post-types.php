<?php
/*
Plugin Name: Resound Post Types
Description: Defines custom post types for use with the Resound Radio theme
Version: 1
Author: Dan Robinson
Author URI: http://danrobinsonmedia.com
License: MIT
License URI: http://opensource.org/licenses/MIT
Text-Domain: resound-post-types
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

if(!function_exists('resound_radio_register_post_types')) {
    function resound_radio_register_post_types() {
        register_post_type('resound_staff', array(
            'labels' => array(
                'name' => 'Staff Bios',
                'singular_name' => 'Staff Bio'),
            'description' => 'Information about one of our excellent staff members',
            'public' => true,
            'show_in_nav_menus' => false,
            'menu_icon' => 'dashicons-businessman',
            'menu_position' => 20,
            'supports' => array(
                'title',
                'editor',
                'revisions',
                'excerpt',
                'thumbnail',
                'page-attributes'),
            'rewrite' => 'staff'));
    }
    
    add_action('init', 'resound_radio_register_post_types');
}