<?php
/*
Plugin Name: WP HTML Mail
Plugin URI: http://wp-html-mail.com/
Description: Use custom HTML mail templates for your WordPress mails
Version: 2.2.2
Author: Hannes Etzelstorfer
Author URI: http://etzelstorfer.com/en/
License: GPLv2 or later
*/

/*  Copyright 2016 Hannes Etzelstorfer (email : hannes@etzelstorfer.com) */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

define( 'HAET_MAIL_PATH', plugin_dir_path(__FILE__) );
define( 'HAET_MAIL_URL', plugin_dir_url(__FILE__) );


require HAET_MAIL_PATH . 'includes/class-haet-mail.php';
require HAET_MAIL_PATH . 'includes/class-haet-sender-plugin.php';

load_plugin_textdomain('haet_mail', false, dirname( plugin_basename( __FILE__ ) ) . '/translations' );



//Actions and Filters	
if ( class_exists("Haet_Mail") ) {
    if(is_plugin_active( 'wpmandrill/wpmandrill.php' ))
        add_filter( 'mandrill_payload', array(Haet_Mail(), 'style_mail_wpmandrill') );
    else
        add_filter( 'wp_mail',array(Haet_Mail(), 'style_mail'),12,1);

    add_action( 'admin_menu', array(Haet_Mail(), 'admin_page'),20);
    add_action( 'admin_enqueue_scripts', array(Haet_Mail(), 'admin_page_scripts_and_styles'));

    add_action( 'wp_ajax_haet_mail_send_test', array(Haet_Mail(), 'send_test') );
}



// delete_option('haet_mail_theme_options');
// delete_option('haet_mail_options');
// delete_option('haet_mail_plugin_options');


	

