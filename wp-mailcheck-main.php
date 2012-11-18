<?php
class Szbl_Mailcheck_Js
{
	public static $instance;
	
	public static function getInstance()
	{
		if ( is_null( self::$instance ) ) 
			self::$instance = new Szbl_Mailcheck_Js();
		return self::$instance;
	}
	
	public function __construct()
	{
		add_action( 'wp_enqueue_scripts', array( $this, 'wp_enqueue_scripts' ) );
		add_action( 'wp_footer', array( $this, 'wp_footer' ) );
	}
	
	public function wp_enqueue_scripts()
	{
		wp_enqueue_script( 'jquery' );
		wp_register_script( 'bd-mailcheck-js', plugins_url( '/js/mailcheck.min.js', __FILE__ ), array( 'jquery' ), true );
		wp_enqueue_script( 'bd-mailcheck-js' );
	}
	
	public function wp_footer()
	{
		include dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'wp-footer.php';
	}
	
}
Szbl_Mailcheck_Js::getInstance();