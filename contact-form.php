<?php
/*
Plugin Name: Seos Contact Form
Plugin URI: http://seosthemes.com/seos-contact-form/
Description: Simple WordPress Contact Form. Seos Contact Form is easy to use with all the basic fields – Name, Phone Number, Email, Subject, Message. Seos Contact Form allows you to select the required fields, Custom text – Contact Form Title, Custom text – Required, Custom text – Your message is send, Custom text – Your message is not senа Admin Email, Shortcode – Include form in your website.
Version: 1.8.0
Contributors: seosbg
Author: seosbg
Author URI: http://seosthemes.com/
Text Domain: scf
*/

// ************** Include **************

include_once(plugin_dir_path(__FILE__) . 'inc/shortcode.php');
	
// ************* User Section **************


add_action('admin_menu', 'my_plugin_menu');

function my_plugin_menu() {
	add_menu_page('Seos Contact Form', 'Seos Contact Form', 'administrator', 'seos-form-plugin-settings', 'my_plugin_settings_page', plugins_url( 'seos-contact-form/images/icon.png' ));
}

add_action( 'admin_init', 'my_plugin_settings' );

function my_plugin_settings() {
	register_setting( 'seos-form-plugin-settings-group', 'seos_form_name' );
	register_setting( 'seos-form-plugin-settings-group', 'seos_form_phone' );
	register_setting( 'seos-form-plugin-settings-group', 'seos_form_email' );
	register_setting( 'seos-form-plugin-settings-group', 'seos_form_url' );
	register_setting( 'seos-form-plugin-settings-group', 'seos_form_select_title' );
	register_setting( 'seos-form-plugin-settings-group', 'seos_form_select' );
	register_setting( 'seos-form-plugin-settings-group', 'seos_form_message' );
	register_setting( 'seos-form-plugin-settings-group', 'seos_form_subject' );
	register_setting( 'seos-form-plugin-settings-group', 'seos_required' );
	register_setting( 'seos-form-plugin-settings-group', 'seos_form_title' );
	register_setting( 'seos-form-plugin-settings-group', 'seos_send' );
	register_setting( 'seos-form-plugin-settings-group', 'seos_not_send' );
	register_setting( 'seos-form-plugin-settings-group', 'seos_no_send' );
	register_setting( 'seos-form-plugin-settings-group', 'seos_spam' );
	register_setting( 'seos-form-plugin-settings-group', 'seos_send_button' );
	register_setting( 'seos-form-plugin-settings-group', 'required1' );
	register_setting( 'seos-form-plugin-settings-group', 'required2' );
	register_setting( 'seos-form-plugin-settings-group', 'required3' );
	register_setting( 'seos-form-plugin-settings-group', 'required4' );
	register_setting( 'seos-form-plugin-settings-group', 'required5' );
	register_setting( 'seos-form-plugin-settings-group', 'required6' );
	register_setting( 'seos-form-plugin-settings-group', 'required7' );
	register_setting( 'seos-form-plugin-settings-group', 'required8' );
	register_setting( 'seos-form-plugin-settings-group', 'required9' );
	register_setting( 'seos-form-plugin-settings-group', 'seos_form_antispam' );
	register_setting( 'seos-form-plugin-settings-group', 'seos_admin_email' );
	register_setting( 'seos-form-plugin-settings-group', 'seos_form_checkbox_text' );
	register_setting( 'seos-form-plugin-settings-group', 'seos_form_checked' );
	register_setting( 'seos-form-plugin-settings-group', 'seos_form_radio' );
	register_setting( 'seos-form-plugin-settings-group', 'seos_form_radio' );

	
	register_setting( 'seos-form-plugin-settings-group', 'count_rad' );
	$count_rad = get_option('count_rad');
	for($rad_num=1; $rad_num<=$count_rad; $rad_num++) {
		register_setting( 'seos-form-plugin-settings-group', 'seos_form_radio_text'.$rad_num);
	}

	
	register_setting( 'seos-form-plugin-settings-group', 'seos_form_select_number' );	
	$count = get_option('seos_form_select_number');
	for($num=1; $num<=$count; $num++) {
		register_setting( 'seos-form-plugin-settings-group', 'scf_select_'.$num);
	}
	
}


/*********************** Admin Scripts and Styles **************************/

function scf_form_admin() {
	wp_enqueue_style( 'scf-admin-css', plugin_dir_url(__FILE__) . '/css/admin.css' );
}
 
add_action( 'admin_enqueue_scripts', 'scf_form_admin' );	

/*********************** Scripts and Styles **************************/

function scf_form_styles() {
	wp_enqueue_style( 'scf-styles-css', plugin_dir_url(__FILE__) . '/css/scf-style.css' );
}
 
add_action( 'wp_enqueue_scripts', 'scf_form_styles' );	

function my_plugin_settings_page() {
?>

<div class="seos-form-wrap">

    <div class="scf-seos">
		<div>
			<a target="_blank" href="http://seosthemes.com/seos-contact-form/">
				<div class="btn s-red">
					 <?php _e('Buy ', 'scf'); echo ' <img class="ss-logo" src="' . plugins_url( 'images/logo.png' , __FILE__ ) . '" alt="logo" />';  _e(' Premium', 'scf'); ?>
				</div>
			</a>
		</div>
	</div>	
			
	<h1><?php _e('Seos Contact Form', 'scf'); ?></h1>
	
    <a href="http://seosthemes.com/seos-contact-form/"><button type="button" class="button button-primary"><?php _e('How to use - Seos Contact Form', 'scf'); ?></button></a>
   
	<?php include_once(plugin_dir_path(__FILE__) . 'inc/form.php'); ?>
	
	<?php include_once(plugin_dir_path(__FILE__) . 'inc/input-code.php'); ?>

</div>
<?php }

	function scf_language_load() {
	  load_plugin_textdomain('scf_language_load', FALSE, basename(dirname(__FILE__)) . '/languages');
	}
	add_action('init', 'scf_language_load');