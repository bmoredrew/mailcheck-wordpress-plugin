<?php
/*
Plugin Name: Mailcheck.js WordPress Plugin
Plugin URI: http://www.baltimoredrew.com/mailcheck-wordpress-plugin/
Description: Mailcheck.js integration for WordPress
Version: 0.1.0
Author: Drew Poland / Baltimore Drew
Author URI: http://www.baltimoredrew.com/
License: GPL2
*/

/*  Copyright 2012  Drew Poland  (email: drew@iheartargyle.com )

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>

<?php

// load jquery

// Register & Enqueue mailcheck.min.js

function bd_mailcheck_js()
{
	wp_register_script( 'bd-mailcheck-js', plugins_url( '/src/mailcheck.min.js', __FILE__ ), array( 'jquery' ), true );
	
	wp_enqueue_script( 'bd-mailcheck-js' );
}
add_action( 'wp_enqueue_scripts', 'bd_mailcheck_js' );


// convert ID selection to admin option
// convert domains & TLD to admin options


// function load_bd_mailcheck() {
//    echo 'script?';
// }
// add_action('wp_footer', 'load_bd_mailcheck');

// note from andy

// jQuery(document).ready(function($){

// your JS code

// });


<script>
var domains = ['hotmail.com', 'gmail.com', 'aol.com'];
var topLevelDomains = ["com", "net", "org"];

var superStringDistance = function(string1, string2) {
  // a string distance algorithm of your choosing
}

$('#email').on('blur', function() {
  $(this).mailcheck({
    domains: domains,                       
    topLevelDomains: topLevelDomains,       
    distanceFunction: superStringDistance,
    suggested: function(element, suggestion) {

    },
    empty: function(element) {

    }
  });
});
</script>


?>