<?php
/**
 * Asipi Sociedades Colectivas
 *
 * @package           IDXCAROUSELSHORTCODE
 * @author            Juan Carlos Avila
 * @copyright         2022 TREMPGROUP
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       IDX Carousel Shortcodes Plugins
 *
 * Description:       IDX Carousel Shortcodes
 * Version:           2.0.0
 * Author:            TREMPGROUP
 * Text Domain:       idx_carousel_shortcode
 *
 */
define('IDXCAROUSELSHORTCODE_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('IDXCAROUSELSHORTCODE_PLUGIN_URL', plugin_dir_url(__FILE__));
define('IDXCAROUSELSHORTCODE_PLUGIN_FILE', __FILE__);
define('IDXCAROUSELSHORTCODE_PLUGIN_VERSION', '1.0.0');


//Language domain
add_action( 'plugins_loaded', 'idx_carousel_shortcode_textdomain' );
   function idx_carousel_shortcode_textdomain() {
       load_plugin_textdomain( 'idx_carousel_shortcode', false, dirname( plugin_basename( IDXCAROUSELSHORTCODE_PLUGIN_DIR ) ) . '/languages/' );
   }

 //activate plugin
function idx_carousel_shortcode_activate() { 
   
}
register_activation_hook( __FILE__, 'idx_carousel_shortcode_activate' );
require_once IDXCAROUSELSHORTCODE_PLUGIN_DIR . '/functions.php';