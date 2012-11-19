<?php
// create custom plugin settings menu
add_action('admin_menu', 'mailcheck_create_menu');

function mailcheck_create_menu() {

	//create new top-level menu
	add_menu_page('Mailcheck Plugin Settings', 'Mailcheck', 'administrator', __FILE__, 'mailcheck_settings_page',plugins_url('/images/icon.png', __FILE__));

	//call register settings function
	add_action( 'admin_init', 'register_mailcheck_settings' );
}


function register_mailcheck_settings() {
	//register our settings
	register_setting( 'mailcheck-settings-group', 'mailcheck_domain_inputs' );
	register_setting( 'mailcheck-settings-group', 'mailcheck_tld_inputs' );
	register_setting( 'mailcheck-settings-group', 'mailcheck_activate_on_wplogin' );
}

function mailcheck_settings_page() {
?>
<div class="wrap">
<h2>Mailcheck WordPress Plugin Options</h2>

<!-- see action on line 27 for filename of options -->

<form method="post" action="wp-mailcheck-options.php">
    <?php settings_fields( 'mailcheck-settings-group' ); ?>
    <?php do_settings( 'mailcheck-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">New Option Name</th>
        <td><input type="text" name="new_option_name" value="<?php echo get_option('new_option_name'); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Some Other Option</th>
        <td><input type="text" name="some_other_option" value="<?php echo get_option('some_other_option'); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Options, Etc.</th>
        <td><input type="text" name="option_etc" value="<?php echo get_option('option_etc'); ?>" /></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php } ?>