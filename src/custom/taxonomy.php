<?php
/**
* Custom Taxonomy Handler
*
* This code generator handles building the labels, arguments
* and then registering the taxonomy with WordPress. 
* 
* @package      RoxyCruzWebDesign\Module\Custom
* @author       Roxy Cruz 
* @license      GPL-2.0+
* @link         https://roxycruzwebdesign.com 
*/
namespace RoxyCruzWebDesign\Module\Custom;

add_action( 'init', __NAMESPACE__ . '\register_the_custom_taxonomies' );
/**
 * Register the custom taxonomies.
 *
 * @since 1.0.0
 *
 * @return void
 */
function register_the_custom_taxonomies(){
  
  $configs = array();
  
  /**
   * Add taxonomy runtime configurations for generating and
   * registering each with WordPress.
   *
   * @since 1.3.0
   *
   * @param array Array of configurations.
   */
  $configs = (array) apply_filters( 'add_custom_taxonomy_runtime_config', $configs );
  
  foreach ( $configs as $taxonomy => $config ) {
    register_the_custom_taxonomy( $taxonomy, $config );
  }
}

/**
 * Register the taxonomy.
 *
 * @since 1.0.0
 *
 * @param  string $taxonomy Taxonomy name to be registered with WordPress
 * @param  array  $config    An array of taxonomy runtime configuration parameters
 * 
 * @return void
 */
function register_the_custom_taxonomy( $taxonomy, array $config ) {
  
  // grab the config args, so we can use them in the function
  $args = $config['args'];
  
  if ( ! $args['labels'] ) {
    $args['labels'] = generate_the_custom_labels( $config['labels'], 'taxonomy' );
  }

	register_taxonomy( $taxonomy, $config['post_types'], $args );
}