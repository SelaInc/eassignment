<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Admin Class
 * 
 * Handles generic Admin functionality and AJAX requests.
 * 
 * @package Easy Digital Downloads - Social Login
 * @since 1.0.0
 */
class EDD_Slg_Admin {
	
	var $model, $scripts;
	
	public function __construct() {
		
		global $edd_slg_model, $edd_slg_scripts;
		
		$this->model	= $edd_slg_model;
		$this->scripts	= $edd_slg_scripts;
	}
	
	/**
	 * Register All need admin menu page
	 * 
	 * @package Easy Digital Downloads - Social Login
	 * @since 1.0.0
	 */
	public function edd_slg_admin_menu_pages(){
		
		$edd_slg_social_login = add_submenu_page( 'edit.php?post_type=download', __( 'Easy Digital Download Social Login', 'eddslg' ), __( 'Social Login', 'eddslg' ), 'manage_shop_settings', 'edd-social-login', array( $this, 'edd_slg_social_login' ));
		//script for social login page
		
	}
	
	/**
	 * Add Social Login Page
	 * 
	 * Handles to load social login
	 * page to show social login register data
	 * 
	 * @package Easy Digital Downloads - Social Login
	 * @since 1.0.0
	 */
	public function edd_slg_social_login() {
		
		include_once( EDD_SLG_ADMIN . '/forms/edd-social-login-data.php' );
		
	}
	
	/**
	 * Pop Up On Editor
	 * 
	 * Includes the pop up on the WordPress editor
	 * 
	 * @package Easy Digital Downloads - Social Login
	 * @since 1.1.1
	 */
	public function edd_slg_shortcode_popup() {
		
		include_once( EDD_SLG_ADMIN . '/forms/edd-slg-admin-popup.php' );
	}
	
	/**
	 * Validate Settings
	 * 
	 * Handles to validate settings
	 * 
	 * @package Easy Digital Downloads - Social Login
	 * @since 1.1.1
	 */
	function edd_slg_settings_validate( $input ) {		
		// General Settings
		$input['edd_slg_login_heading'] 	= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_login_heading']) );
		$input['edd_slg_redirect_url'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_redirect_url']) );
		
		// Facebook Settings
		$input['edd_slg_fb_app_id'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_fb_app_id']) );
		$input['edd_slg_fb_app_secret'] 	= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_fb_app_secret']) );
		$input['edd_slg_fb_icon_url'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_fb_icon_url']) );
		$input['edd_slg_fb_link_icon_url'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_fb_link_icon_url']) );
		
		// Google+ Settings 
		$input['edd_slg_gp_client_id'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_gp_client_id']) );
		$input['edd_slg_gp_client_secret'] 	= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_gp_client_secret']) );
		$input['edd_slg_gp_icon_url'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_gp_icon_url']) );
		$input['edd_slg_gp_link_icon_url'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_gp_link_icon_url']) );
		
		// LinkedIn Settings
		$input['edd_slg_li_app_id'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_li_app_id']) );
		$input['edd_slg_li_app_secret'] 	= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_li_app_secret']) );
		$input['edd_slg_li_icon_url'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_li_icon_url']) );
		$input['edd_slg_li_link_icon_url'] 	= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_li_link_icon_url']) );
		
		// Twitter Settings
		$input['edd_slg_tw_consumer_key'] 	= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_tw_consumer_key']) );
		$input['edd_slg_tw_consumer_secret']= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_tw_consumer_secret']) );
		$input['edd_slg_tw_icon_url'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_tw_icon_url']) );
		$input['edd_slg_tw_link_icon_url'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_tw_link_icon_url']) );
		
		// Yahoo Settings
		$input['edd_slg_yh_consumer_key'] 	= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_yh_consumer_key']) );
		$input['edd_slg_yh_consumer_secret']= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_yh_consumer_secret']) );
		$input['edd_slg_yh_app_id'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_yh_app_id']) );
		$input['edd_slg_yh_icon_url'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_yh_icon_url']) );
		$input['edd_slg_yh_link_icon_url'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_yh_link_icon_url']) );
		
		// Foursquare Settings
		$input['edd_slg_fs_client_id'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_fs_client_id']) );
		$input['edd_slg_fs_client_secret'] 	= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_fs_client_secret']) );
		$input['edd_slg_fs_icon_url'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_fs_icon_url']) );
		$input['edd_slg_fs_link_icon_url'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_fs_link_icon_url']) );
		
		// Windows Live Settings
		$input['edd_slg_wl_client_id'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_wl_client_id']) );
		$input['edd_slg_wl_client_secret'] 	= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_wl_client_secret']) );
		$input['edd_slg_wl_icon_url'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_wl_icon_url']) );
		$input['edd_slg_wl_link_icon_url'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_wl_link_icon_url']) );
		
		// VK Settings
		$input['edd_slg_vk_app_id'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_vk_app_id']) );
		$input['edd_slg_vk_app_secret'] 	= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_vk_app_secret']) );
		$input['edd_slg_vk_icon_url'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_vk_icon_url']) );
		$input['edd_slg_vk_link_icon_url'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_vk_link_icon_url']) );
		
		// Instagram Settings
		$input['edd_slg_inst_app_id'] 		= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_inst_app_id']) );
		$input['edd_slg_inst_app_secret'] 	= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_inst_app_secret']) );
		$input['edd_slg_inst_icon_url'] 	= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_inst_icon_url']) );
		$input['edd_slg_inst_link_icon_url'] 	= $this->model->edd_slg_escape_slashes_deep( trim($input['edd_slg_inst_link_icon_url']) );
		
		return $input;
	}
	
	/**
	 * Reset Social Settings
	 * 
	 * Handle to reset social settings
	 * 
	 * @package Easy Digital Downloads - Social Login
	 * @since 1.5.3
	 */
	function edd_slg_reset_social_settings() {
		
		if( isset( $_GET['edd_slg_reset'] ) && $_GET['edd_slg_reset'] == 'reset_settings'
			&& isset( $_GET['page'] ) && $_GET['page'] == 'edd-settings' ) {
				
				global $edd_options;
				
				$edd_options['edd_slg_login_heading'] =  __( 'Prefer to Login with Social Media', 'eddslg' );
				$edd_options['edd_slg_enable_notification'] =  '';
				$edd_options['edd_slg_redirect_url'] =  '';
				$edd_options['edd_slg_enable_login_page']='';
				$edd_options['edd_slg_display_link_thank_you']='';
				$edd_options['edd_slg_enable_facebook'] =  '';
				$edd_options['edd_slg_fb_app_id'] =  '';
				$edd_options['edd_slg_fb_app_secret'] =  '';
				$edd_options['edd_slg_fb_language'] =  'en_US';
				$edd_options['edd_slg_fb_icon_url'] =  EDD_SLG_IMG_URL . '/facebook.png';
				$edd_options['edd_slg_fb_link_icon_url'] = EDD_SLG_IMG_URL . '/facebook-link.png';
				$edd_options['edd_slg_enable_fb_avatar'] =  '';
				$edd_options['edd_slg_enable_googleplus'] =  '';
				$edd_options['edd_slg_gp_client_id'] =  '';
				$edd_options['edd_slg_gp_client_secret'] =  '';
				$edd_options['edd_slg_gp_icon_url'] =  EDD_SLG_IMG_URL . '/googleplus.png';
				$edd_options['edd_slg_gp_link_icon_url'] =  EDD_SLG_IMG_URL . '/googleplus-link.png';				
				$edd_options['edd_slg_enable_gp_avatar'] =  '';
				$edd_options['edd_slg_enable_linkedin'] =  '';
				$edd_options['edd_slg_li_app_id'] =  '';
				$edd_options['edd_slg_li_app_secret'] =  '';
				$edd_options['edd_slg_li_icon_url'] =  EDD_SLG_IMG_URL . '/linkedin.png';
				$edd_options['edd_slg_li_link_icon_url'] =  EDD_SLG_IMG_URL . '/linkedin-link.png';
				$edd_options['edd_slg_enable_li_avatar'] =  '';
				$edd_options['edd_slg_enable_twitter'] =  '';
				$edd_options['edd_slg_tw_consumer_key'] =  '';
				$edd_options['edd_slg_tw_consumer_secret'] =  '';
				$edd_options['edd_slg_tw_icon_url'] =  EDD_SLG_IMG_URL . '/twitter.png';
				$edd_options['edd_slg_tw_link_icon_url'] =  EDD_SLG_IMG_URL . '/twitter-link.png';
				$edd_options['edd_slg_enable_tw_avatar'] =  '';
				$edd_options['edd_slg_enable_yahoo'] =  '';
				$edd_options['edd_slg_yh_consumer_key'] =  '';
				$edd_options['edd_slg_yh_consumer_secret'] =  '';
				$edd_options['edd_slg_yh_app_id'] =  '';
				$edd_options['edd_slg_yh_icon_url'] =  EDD_SLG_IMG_URL . '/yahoo.png';
				$edd_options['edd_slg_yh_link_icon_url'] =  EDD_SLG_IMG_URL . '/yahoo-link.png';
				$edd_options['edd_slg_enable_yh_avatar'] =  '';
				$edd_options['edd_slg_enable_foursquare'] =  '';
				$edd_options['edd_slg_fs_client_id'] =  '';
				$edd_options['edd_slg_fs_client_secret'] =  '';
				$edd_options['edd_slg_fs_icon_url'] =  EDD_SLG_IMG_URL . '/foursquare.png';
				$edd_options['edd_slg_fs_link_icon_url'] =  EDD_SLG_IMG_URL . '/foursquare-link.png';
				$edd_options['edd_slg_enable_fs_avatar'] =  '';
				$edd_options['edd_slg_enable_windowslive'] =  '';
				$edd_options['edd_slg_wl_client_id'] =  '';
				$edd_options['edd_slg_wl_client_secret'] =  '';
				$edd_options['edd_slg_wl_icon_url'] =  EDD_SLG_IMG_URL . '/windowslive.png';
				$edd_options['edd_slg_wl_link_icon_url'] =  EDD_SLG_IMG_URL . '/windowslive-link.png';
				$edd_options['edd_slg_enable_vk'] =  '';
				$edd_options['edd_slg_vk_app_id'] =  '';
				$edd_options['edd_slg_vk_app_secret'] =  '';
				$edd_options['edd_slg_vk_icon_url'] =  EDD_SLG_IMG_URL . '/vk.png';
				$edd_options['edd_slg_vk_link_icon_url'] =  EDD_SLG_IMG_URL . '/vk-link.png';
				$edd_options['edd_slg_enable_vk_avatar'] =  '';
				$edd_options['edd_slg_enable_instagram'] =  '';
				$edd_options['edd_slg_inst_app_id'] =  '';
				$edd_options['edd_slg_inst_app_secret'] =  '';
				$edd_options['edd_slg_inst_icon_url'] =  EDD_SLG_IMG_URL . '/instagram.png';
				$edd_options['edd_slg_inst_link_icon_url'] =  EDD_SLG_IMG_URL . '/instagram-link.png';
				$edd_options['edd_slg_enable_inst_avatar'] =  '';
				
				update_option( 'edd_settings', $edd_options );
				
				$edd_social_order = array( 'facebook', 'twitter', 'googleplus', 'linkedin', 'yahoo', 'foursquare', 'windowslive', 'vk', 'instagram' );
				update_option( 'edd_social_order', $edd_social_order );
				
				$redirectargs = array( 
									'post_type'			=>	'download', 
									'page'				=>	'edd-settings', 
									'tab'				=>	'extensions', 
									'settings-updated' 	=>	'edd_slg_reset',
									'edd_slg_reset' 	=>	false
								);
				
				$redirect_url = add_query_arg( $redirectargs, admin_url( 'edit.php' ) );
				wp_redirect( $redirect_url );
				exit;
		}
	}
	
	/**
	 * Adding Hooks
	 * 
	 * @package Easy Digital Downloads - Social Login
	 * @since 1.0.0
	 */
	public function add_hooks() {
		
		//add admin menu pages
		add_action ( 'admin_menu', array($this,'edd_slg_admin_menu_pages' ));
		
		//add filter to add settings
		add_filter( 'edd_settings_extensions', array( $this->model , 'edd_slg_settings') );
		
		//add filter to add settings
		add_filter( 'edd_settings_extensions_sanitize', array( $this, 'edd_slg_settings_validate') );
		
		// mark up for popup
		add_action( 'admin_footer-post.php', array( $this,'edd_slg_shortcode_popup' ) );
		add_action( 'admin_footer-post-new.php', array( $this,'edd_slg_shortcode_popup' ) );
		
		// add action to reset social settings
		add_action( 'admin_init', array( $this, 'edd_slg_reset_social_settings' ) );
	}
}