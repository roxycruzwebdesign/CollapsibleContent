<?php
/**
* Runtime configuration for a custom post type.
*
* @package      RoxyCruzWebDesign\Module\FAQ
* @since        1.0.0
* @author       Roxy Cruz 
* @link         https://roxycruzwebdesign.com 
* @license      GPL-2.0+
*/
namespace RoxyCruzWebDesign\Module\Custom;

return array(
	/**=====================================
	 * The post type name.
	 *======================================*/
	'post_type' => '',
	/**=====================================
	 * These are label configuration.
	 *======================================*/
	'labels'    => array(
		'custom_type'       => '', // the post type from above.
		'singular_label'    => '',
		'plural_label'      => '',
		'in_sentence_label' => '', // the label used within a sentence
		'text_domain'       => '',
	),
	/**=====================================
	 * Supported features for this post type.
	 *======================================*/
	'features'  => array(
		'base_post_type' => 'post',
		'exclude'        => array(),
		'additional'     => array(),
	),
	/**=====================================
	 * Registration arguments.
	 *======================================*/
	'args'      => array(
		'description' => '',
		'label'       => '',
		'labels'      => '', // automatically generate the labels.
		'public'      => true,
		'supports'    => '', // automatically generate the support features.
		'menu_icon'   => '',
		'has_archive' => false,
	),
);