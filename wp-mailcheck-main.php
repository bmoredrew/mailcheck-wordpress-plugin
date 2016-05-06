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
		add_action( 'login_enqueue_scripts', array( $this, 'login_enqueue_scripts' ) );
		add_action( 'login_head', array( $this, 'login_head' ) );
	}

	public function wp_enqueue_scripts()
	{
		wp_enqueue_script( 'jquery' );
		wp_register_script( 'szbl-mailcheck-js', plugins_url( '/js/mailcheck.min.js', __FILE__ ), array( 'jquery' ), true );
		wp_enqueue_script( 'szbl-mailcheck-js' );
	}

	public function wp_footer()
	{
		$this->selector = '#email';
		include dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'mailcheck-inline-script.php';
	}

	public function login_enqueue_scripts()
	{
		$this->wp_enqueue_scripts();
	}

	public function login_head()
	{
		$this->selector = '#user_login';
		include dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'mailcheck-inline-script.php';
	}

}
Szbl_Mailcheck_Js::getInstance();
