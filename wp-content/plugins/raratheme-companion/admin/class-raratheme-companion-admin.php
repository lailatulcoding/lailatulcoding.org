<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://raratheme.com/
 * @since      1.0.0
 *
 * @package    Raratheme_Companion
 * @subpackage Raratheme_Companion/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Raratheme_Companion
 * @subpackage Raratheme_Companion/admin
 * @author     Rara Theme <raratheme@gmail.com>
 */
class Raratheme_Companion_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Get the allowed socicon lists.
	 * @return array
	 */
	function raratheme_get_allowed_socicons() {
		return apply_filters( 'raratheme_social_icons_allowed_socicon', array( 'modelmayhem', 'mixcloud', 'drupal', 'swarm', 'istock', 'yammer', 'ello', 'stackoverflow', 'persona', 'triplej', 'houzz', 'rss', 'paypal', 'odnoklassniki', 'airbnb', 'periscope', 'outlook', 'coderwall', 'tripadvisor', 'appnet', 'goodreads', 'tripit', 'lanyrd', 'slideshare', 'buffer', 'disqus', 'vk', 'whatsapp', 'patreon', 'storehouse', 'pocket', 'mail', 'blogger', 'technorati', 'reddit', 'dribbble', 'stumbleupon', 'digg', 'envato', 'behance', 'delicious', 'deviantart', 'forrst', 'play', 'zerply', 'wikipedia', 'apple', 'flattr', 'github', 'renren', 'friendfeed', 'newsvine', 'identica', 'bebo', 'zynga', 'steam', 'xbox', 'windows', 'qq', 'douban', 'meetup', 'playstation', 'android', 'snapchat', 'twitter', 'facebook', 'google-plus', 'pinterest', 'foursquare', 'yahoo', 'skype', 'yelp', 'feedburner', 'linkedin', 'viadeo', 'xing', 'myspace', 'soundcloud', 'spotify', 'grooveshark', 'lastfm', 'youtube', 'vimeo', 'dailymotion', 'vine', 'flickr', '500px', 'instagram', 'wordpress', 'tumblr', 'twitch', '8tracks', 'amazon', 'icq', 'smugmug', 'ravelry', 'weibo', 'baidu', 'angellist', 'ebay', 'imdb', 'stayfriends', 'residentadvisor', 'google', 'yandex', 'sharethis', 'bandcamp', 'itunes', 'deezer', 'medium', 'telegram', 'openid', 'amplement', 'viber', 'zomato', 'quora', 'draugiem', 'endomodo', 'filmweb', 'stackexchange', 'wykop', 'teamspeak', 'teamviewer', 'ventrilo', 'younow', 'raidcall', 'mumble', 'bebee', 'hitbox', 'reverbnation', 'formulr', 'battlenet', 'chrome', 'diablo', 'discord', 'issuu', 'macos', 'firefox', 'heroes', 'hearthstone', 'overwatch', 'opera', 'warcraft', 'starcraft', 'keybase', 'alliance', 'livejournal', 'googlephotos', 'horde', 'etsy', 'zapier', 'google-scholar', 'researchgate' ) );
	}

	/**
	 * Get the icon from supported URL lists.
	 * @return array
	 */
	function raratheme_get_supported_url_icon() {
		return apply_filters( 'raratheme_social_icons_get_supported_url_icon', array(
			'feed'                  => 'rss',
			'ok.ru'                 => 'odnoklassniki',
			'vk.com'                => 'vk',
			'last.fm'               => 'lastfm',
			'youtu.be'              => 'youtube',
			'battle.net'            => 'battlenet',
			'blogspot.com'          => 'blogger',
			'play.google.com'       => 'play',
			'plus.google.com'       => 'google-plus',
			'photos.google.com'     => 'googlephotos',
			'chrome.google.com'     => 'chrome',
			'scholar.google.com'    => 'google-scholar',
			'feedburner.google.com' => 'mail',
		) );
	}

	public function rtc_icon_list_enqueue(){
		$obj = new RaraTheme_Companion_Functions;
		$socicons = $obj->rtc_icon_list();
		echo '<div class="rtc-icons-wrap-template"><div class="rtc-icons-wrap"><ul class="rtc-icons-list">';
		foreach ($socicons as $socicon) {
			echo '<li><i class="fa '.$socicon.'"></i></li>';
		}
		echo'</ul></div></div>';
		echo '<style>
		.rtc-icons-wrap{
			display:none;
		}
		</style>';
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Raratheme_Companion_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Raratheme_Companion_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/raratheme-companion-admin.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name.'fontawesome', plugin_dir_url( __FILE__ ) . 'css/font-awesome.css', array(), $this->version, 'all' );
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Raratheme_Companion_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Raratheme_Companion_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/raratheme-companion-admin.js', array( 'jquery', 'wp-color-picker'  ), $this->version, false );
		wp_localize_script( $this->plugin_name, 'raratheme_companion_uploader', array(
        	'upload' => __( 'Upload', 'raratheme-companion' ),
        	'change' => __( 'Change', 'raratheme-companion' ),
        	'msg'    => __( 'Please upload valid image file.', 'raratheme-companion' )
    	));
    	$socicons_params = array(
			'allowed_socicons'   => $this->raratheme_get_allowed_socicons(),
			'supported_url_icon' => $this->raratheme_get_supported_url_icon(),
		);
		$confirming = array( 
					'are_you_sure'       => __( 'Are you sure?', 'raratheme-companion' ),
					);
		wp_localize_script( $this->plugin_name, 'rara_theme_toolkit_pro_uploader', array(
        	'upload' => __( 'Upload', 'raratheme-companion' ),
        	'change' => __( 'Change', 'raratheme-companion' ),
        	'msg'    => __( 'Please upload valid image file.', 'raratheme-companion' )
    	));
		wp_localize_script( $this->plugin_name, 'social_icons_admin_widgets', $socicons_params );
		wp_localize_script( $this->plugin_name, 'confirming', $confirming );
	}

	function rrtc_client_logo_template()
	{ ?>
		<div class="rrtc-client-logo-template">
			<div class="link-image-repeat" data-id=""><span class="fa fa-times cross"></span>
	            <p>
	            <div class="widget-upload">
	            	<label for="widget-raratheme_client_logo_widget-2-image">Upload Image</label><br>
	            	<input id="widget-raratheme_client_logo_widget-2-image" class="rara-upload link" type="hidden" name="widget-raratheme_client_logo_widget[2][image][]" value="" placeholder="No file chosen">
					<input id="upload-widget-raratheme_client_logo_widget-2-image" class="rara-upload-button button" type="button" value="Upload">
					<div class="rara-screenshot" id="widget-raratheme_client_logo_widget-2-image-image"></div>
				</div>
				</p>
	            <p>
	                <label for="widget-raratheme_client_logo_widget-2-link">Featured Link</label> 
	                <input class="widefat featured-link" id="widget-raratheme_client_logo_widget-2-link" name="widget-raratheme_client_logo_widget[2][link][]" type="text" value="">            
	            </p>
        	</div>
	    </div>
	<?php
	echo '<style>.rrtc-client-logo-template{display:none;}</style>';
	}

	function rrtc_faq_template()
	{?> 
		<div class="rrtc-faq-template">
			<div class="faqs-repeat" data-id=""><span class="fa fa-times cross"></span>
	            <label for="widget-raratheme_companion_faqs_widget-2-question-1"><?php _e('Question','raratheme-companion');?></label> 
	            <input class="widefat question" id="widget-raratheme_companion_faqs_widget-2-question-1" name="widget-raratheme_companion_faqs_widget[2][question][1]" type="text" value="">   
	            <label for="widget-raratheme_companion_faqs_widget-2-answer-1"><?php _e('Answer','raratheme-companion');?></label> 
	            <textarea class="answer" id="widget-raratheme_companion_faqs_widget-2-answer-1" name="widget-raratheme_companion_faqs_widget[2][answer][1]"></textarea>         
	        </div>
	    </div>
        <?php
		echo '<style>.rrtc-faq-template{display:none;}</style>';
    }

    	  /**
	* Get post types for templates
	*
	* @return array of default settings
	*/
	public function rc_get_posttype_array() {

		$posts = array(
			'rara-portfolio' => array( 
						'singular_name'			=> 'Rara Portfolio',
						'general_name'			=> 'Rara Portfolios',
						'dashicon'				=> 'dashicons-portfolio',
						'taxonomy'				=> 'rara_portfolio_categories',
						'taxonomy_slug'			=> 'rara-portfolios',
						'has_archive'           => true,		
						'exclude_from_search'   => false,
						'show_in_nav_menus'		=> true,
						'supports' 			 	=> array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
						'rewrite' 				=> array('slug' => 'rara-portfolio'),
						),
			);
		$posts = apply_filters( 'rc_get_posttype_array', $posts );
		return $posts;
	}

	/**
	 * Register post types.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 */
	function rc_register_post_types() {
		$myarray = $this->rc_get_posttype_array();
		foreach ($myarray as $key => $value) {
			$labels = array(
		'name'                  => _x( $value['general_name'], 'Post Type General Name', 'raratheme-companion' ),
		'singular_name'         => _x( $value['singular_name'], 'Post Type Singular Name', 'raratheme-companion' ),
		'menu_name'             => __( $value['general_name'], 'raratheme-companion' ),
		'name_admin_bar'        => __( $value['singular_name'], 'raratheme-companion' ),
		'archives'              => __( $value['singular_name'].' Archives', 'raratheme-companion' ),
		'attributes'            => __( $value['singular_name'].' Attributes', 'raratheme-companion' ),
		'parent_item_colon'     => __( 'Parent '. $value['singular_name'].':', 'raratheme-companion' ),
		'all_items'             => __( 'All '. $value['general_name'], 'raratheme-companion' ),
		'add_new_item'          => __( 'Add New '. $value['singular_name'], 'raratheme-companion' ),
		'add_new'               => __( 'Add New', 'raratheme-companion' ),
		'new_item'              => __( 'New '. $value['singular_name'], 'raratheme-companion' ),
		'edit_item'             => __( 'Edit '. $value['singular_name'], 'raratheme-companion' ),
		'update_item'           => __( 'Update '. $value['singular_name'], 'raratheme-companion' ),
		'view_item'             => __( 'View '. $value['singular_name'], 'raratheme-companion' ),
		'view_items'            => __( 'View '. $value['general_name'], 'raratheme-companion' ),
		'search_items'          => __( 'Search '. $value['singular_name'], 'raratheme-companion' ),
		'not_found'             => __( 'Not found', 'raratheme-companion' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'raratheme-companion' ),
		'featured_image'        => __( 'Featured Image', 'raratheme-companion' ),
		'set_featured_image'    => __( 'Set featured image', 'raratheme-companion' ),
		'remove_featured_image' => __( 'Remove featured image', 'raratheme-companion' ),
		'use_featured_image'    => __( 'Use as featured image', 'raratheme-companion' ),
		'insert_into_item'      => __( 'Insert into '.$value['singular_name'], 'raratheme-companion' ),
		'uploaded_to_this_item' => __( 'Uploaded to this '.$value['singular_name'], 'raratheme-companion' ),
		'items_list'            => __( $value['general_name'] .' list', 'raratheme-companion' ),
		'items_list_navigation' => __( $value['general_name'] .' list navigation', 'raratheme-companion' ),
		'filter_items_list'     => __( 'Filter '. $value['general_name'] .'list', 'raratheme-companion' ),
	);
	$args = array(
		'label'                 => __( $value['singular_name'].'', 'raratheme-companion' ),
		'description'           => __( $value['singular_name'].' Post Type', 'raratheme-companion' ),
		'labels'                => $labels,
		'supports'              =>  $value['supports'],
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_icon'             => $value['dashicon'],
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => $value['show_in_nav_menus'],
		'can_export'            => true,
		'has_archive'           => $value['has_archive'],		
		'exclude_from_search'   => $value['exclude_from_search'],
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'rewrite'               => $value['rewrite'],
	);
		register_post_type( $key, $args );
	    flush_rewrite_rules();
		}
	}

	/**
	 * Register a taxonomy, post_types_categories for the post types.
	 *
	 * @link https://codex.wordpress.org/Function_Reference/register_taxonomy
	 */
	function rc_create_post_type_taxonomies() {
		// Add new taxonomy, make it hierarchical
		$myarray = $this->rc_get_posttype_array();
		foreach ($myarray as $key => $value) {
			if(isset($value['taxonomy']))
			{
				$labels = array(
					'name'              => _x( $value['singular_name'].' Categories', 'taxonomy general name', 'raratheme-companion' ),
					'singular_name'     => _x( $value['singular_name'].' Categories', 'taxonomy singular name', 'raratheme-companion' ),
					'search_items'      => __( 'Search Categories', 'raratheme-companion' ),
					'all_items'         => __( 'All Categories', 'raratheme-companion' ),
					'parent_item'       => __( 'Parent Categories', 'raratheme-companion' ),
					'parent_item_colon' => __( 'Parent Categories:', 'raratheme-companion' ),
					'edit_item'         => __( 'Edit Categories', 'raratheme-companion' ),
					'update_item'       => __( 'Update Categories', 'raratheme-companion' ),
					'add_new_item'      => __( 'Add New Categories', 'raratheme-companion' ),
					'new_item_name'     => __( 'New Categories Name', 'raratheme-companion' ),
					'menu_name'         => __( $value['singular_name'].' Categories', 'raratheme-companion' ),
				);

				$args = array(
					'hierarchical'      => true,
					'labels'            => $labels,
					'show_ui'           => true,
					'show_admin_column' => true,
					'show_in_nav_menus' => true,
					'rewrite'           => array( 'slug' => $value['taxonomy_slug'], 'hierarchical' => true ),
				);
				register_taxonomy( $value['taxonomy'], array( $key ), $args );
			}
		}
	}
}
