<?php
/**
* Plugin handler 
*
* @package      RoxyCruzWebDesign\CollapsibleContent
* @author       Roxy Cruz 
* @license      GPL-2.0+
* @link         https://roxycruzwebdesign.com 
*/
namespace RoxyCruzWebDesign\CollapsibleContent;


add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );
/**
 * Enqueue the plugin assets (scripts and styles)
 *
 * @since 1.0.0
 *
 * @return void
 */
function enqueue_assets() {
  wp_enqueue_style( 'dashicons' );
  
  wp_enqueue_script( 
    'collapsible-content-plugin-script', 
    COLLAPSIBLE_CONTENT_URL . 'assets/dist/js/jquery.project.js',
    array( 'jquery'),
    '1.0.0',
    true
  );
  
  // $script_parameters = array(
  //   'showIcon' => 'dashicons dashicons-arrow-down-alt2',
  //   'hideIcon' => 'dashicons dashicons-arrow-up-alt2',
  // );
  // 
  // wp_localize_script( 'collapsible-content-plugin-script', 'collapsibleContentParameters', $script_parameters );
  
}
/**
 * Autoload plugin files
 *
 * @since 1.0.0
 *
 * @return void
 */
function autoload() {
  $files = array(
    'shortcode/shortcodes.php',
    'faq/module.php'
    
  );
  
  foreach ( $files as $file ) {
    include( __DIR__ . '/' . $file );
  }
}
autoload();