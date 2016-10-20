<?php
/*
Plugin Name: Login Theme
Plugin URI: http://paratheme.com
Description: Awsome login theme for WordPress Login page.
Version: 1.0
Author: paratheme
Author URI: http://paratheme.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

define('login_theme_plugin_url', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );
define('login_theme_plugin_dir', plugin_dir_path( __FILE__ ) );
define('login_theme_wp_url', 'https://wordpress.org/plugins/login-theme/' );
define('login_theme_wp_reviews_url', 'https://wordpress.org/support/view/plugin-reviews/login-theme' );
define('login_theme_pro_url','' );
define('login_theme_demo_url', 'http://paratheme.com' );
define('login_theme_conatct_url', 'http://paratheme.com/contact' );
define('login_theme_qa_url', 'http://paratheme.com/qa/' );
define('login_theme_plugin_name', 'Login Theme' );
define('login_theme_share_url', 'http://paratheme.com/' );
define('login_theme_tutorial_video_url', '//www.youtube.com/embed/8OiNCDavSQg?rel=0' );


require_once( plugin_dir_path( __FILE__ ) . 'includes/login-theme-functions.php');






function login_theme_init_scripts()
	{

		wp_enqueue_script('jquery');
		wp_enqueue_script('login_theme_js', plugins_url( '/js/scripts.js' , __FILE__ ) , array( 'jquery' ));
		wp_enqueue_style('login_theme_style', login_theme_plugin_url.'css/style.css');		

		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'login_theme_color_picker', plugins_url('/js/color-picker.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
		


		//ParaAdmin
		wp_enqueue_style('ParaAdmin', login_theme_plugin_url.'ParaAdmin/css/ParaAdmin.css');
		//wp_enqueue_style('ParaIcons', login_theme_plugin_url.'ParaAdmin/css/ParaIcons.css');		
		wp_enqueue_script('ParaAdmin', plugins_url( 'ParaAdmin/js/ParaAdmin.js' , __FILE__ ) , array( 'jquery' ));
	
		
	}
add_action("init","login_theme_init_scripts");


register_activation_hook(__FILE__, 'login_theme_activation');


function login_theme_activation()
	{
		$login_theme_version= "1.0";
		update_option('login_theme_version', $login_theme_version); //update plugin version.
		
		$login_theme_customer_type= "free"; //customer_type "pro"
		update_option('login_theme_customer_type', $login_theme_customer_type); //update plugin version.
	}





add_action('admin_menu', 'login_theme_menu_init');
	
function login_theme_settings(){
	include('login-theme-settings.php');	
}

function login_theme_menu_init()
	{

		add_menu_page(__('Login Theme - Settings','login_theme'), __('Login Theme','login_theme'), 'manage_options', 'login_theme_settings', 'login_theme_settings');
	
	}





?>