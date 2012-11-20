<?php

register_activation_hook(__FILE__,'szbl_mailcheck_install');

register_deactivation_hook( __FILE__, 'szbl_mailcheck_remove' );

function szbl_mailcheck_install() {
add_option("mailcheck_domain_inputs", 'Testing !! My Plugin is Working Fine.', 'This is my first plugin panel data.', 'yes');
add_option("mailcheck_tld_inputs", 'Testing !! My Plugin is Working Fine.', 'This is my first plugin panel data.', 'yes');
add_option("mailcheck_activate_on_wplogin", 'Testing !! My Plugin is Working Fine.', 'This is my first plugin panel data.', 'yes')
}

function szbl_mailcheck_remove() {
delete_option('mailcheck_domain_inputs');
delete_option('mailcheck_tld_inputs');
delete_option('mailchecK_activate_on_wplogin')
}



?>