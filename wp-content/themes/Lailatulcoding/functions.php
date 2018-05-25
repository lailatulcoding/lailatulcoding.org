<?php
/**
 * Rara Business functions 
 * 
 * @package Rara_Business
 */

function annointed_admin_bar_remove() {
        global $wp_admin_bar;

        /* Remove their stuff */
        $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);

//define theme version
if ( ! defined( 'RARA_BUSINESS_THEME_VERSION' ) ) {
	$theme_data = wp_get_theme();	
	define ( 'RARA_BUSINESS_THEME_VERSION', $theme_data->get( 'Version' ) );
}

/**
 * Implement the Custom Functions
 */
require get_template_directory() . '/inc/custom-functions.php';

/**
 * Custom independent extra functions for this theme.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Modify filter hooks of RTC plugin.
 */
require get_template_directory() . '/inc/rtc-filters.php';

/**
 * Customizer Custom controls.
 */
require get_template_directory() . '/inc/custom-controls/custom-control.php';

/**
 * Load Sanitization functions.
 */
require get_template_directory() . '/inc/customizer/sanitization-functions.php';

/**
 * Customizer default theme options.
 */
require get_template_directory() . '/inc/customizer/default-theme-options.php';

/**
 * Customizer selective refresh.
 */
require get_template_directory() . '/inc/customizer/selective-refresh.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Metabox additions.
 */
require get_template_directory() . '/inc/metabox.php';

/**
 * Widgets addition.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * TGMPA Plugin Recommendation
 */
require get_template_directory() . '/inc/tgmpa/recommended-plugins.php';

if ( rara_business_is_woocommerce_activated() ) :
	/**
	 * Load woocommerce
	 */
	require get_template_directory() . '/inc/woocommerce-functions.php';
endif;