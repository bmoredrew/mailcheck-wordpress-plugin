<?php
// create custom plugin settings menu
add_action('admin_menu', 'mailcheck_create_menu');

function mailcheck_create_menu() {

	//create new top-level menu -- SHOULD MAKE THIS SUBMENU INSTEAD OF TOP LEVEL ?
	add_menu_page('Mailcheck Plugin Settings', 'Mailcheck', 'administrator', __FILE__, 'mailcheck_settings_page',plugins_url('settings.png', __FILE__));

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
		<div class="left">
			<form method="post" action="wp-mailcheck-options.php">
			    <?php settings_fields( 'mailcheck-settings-group' ); ?>
			    <?php do_settings( 'mailcheck-settings-group' ); ?>
			    <table class="form-table">
			        <tr valign="top">
			        <th scope="row">Domains:</th>
			        <td><input type="text" name="option1" value="<?php echo get_option('mailcheck_domain_inputs'); ?>" /></td>
			        </tr>
         
			        <tr valign="top">
			        <th scope="row">Top Level Domains:</th>
			        <td><input type="text" name="option2" value="<?php echo get_option('mailcheck_tld_inputs'); ?>" /></td>
			        </tr>
        
			        <tr valign="top">
			        <th scope="row">Activate for WordPress Registration Screen?</th>
			        <td><input type="checkbox" name="option3" value="<?php echo get_option('mailcheck_activate_on_wplogin'); ?>" /></td>
			        </tr>
			    </table>
			    <?php submit_button(); ?>
			</form>
		</div> <!-- left -->
		<div class="right">
			<p> Box here with links to Github, Sizeable, and Maintainer ? </p>
		</div> <!-- right -->
</div> <!-- wrap -->
<?php } ?>