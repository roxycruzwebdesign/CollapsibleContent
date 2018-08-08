<?php
/**
* Runtime configuration for the Topic taxonomy
*
* @package      RoxyCruzWebDesign\Module\FAQ
* @author       Roxy Cruz 
* @license      GPL-2.0+
* @link         https://roxycruzwebdesign.com 
*/

namespace RoxyCruzWebDesign\Module\FAQ;

return array(
  
	/**=====================================
	 * The taxonomy name.
	 *======================================*/
	'taxonomy' => 'topic',

	/**=====================================
	 * These are label configuration.
	 *======================================*/
	'labels' => array(
		'custom_type'          => 'topic',
		'singular_label'    => 'Topic',
		'plural_label'      => 'Topics',
		'in_sentence_label' => 'topics',
		'text_domain'       => FAQ_MODULE_TEXT_DOMAIN,
    'specific_labels'   => array(),
	),

	/**=====================================
	 * These are the arguments for registering the taxonomy.
	 *======================================*/
	'args' => array(
		'label'             => __( 'Topics', FAQ_MODULE_TEXT_DOMAIN ),
		'labels'            => '', // automatically generate the labels.
		'hierarchical'      => true,
		'show_admin_column' => true,
		'public'            => false,
		'show_ui'           => true,
	),

	/**=====================================
	 * These are the post types to bind the taxonomy to.
	 *======================================*/
	'post_types' => array( 'faq' ),
  
);