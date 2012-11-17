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

// check for jquery, if not, enqueue to footer - is this necessary?

// enqueue mailcheck.min.js into footer from /src/

// convert #email to admin option

<script>
var domains = ['hotmail.com', 'gmail.com', 'aol.com'];
var topLevelDomains = ["com", "net", "org"];

var superStringDistance = function(string1, string2) {
  // a string distance algorithm of your choosing
}

$('#email').on('blur', function() {
  $(this).mailcheck({
    domains: domains,                       // optional
    topLevelDomains: topLevelDomains,       // optional
    distanceFunction: superStringDistance,  // optional
    suggested: function(element, suggestion) {
      // callback code
    },
    empty: function(element) {
      // callback code
    }
  });
});
</script>


?>