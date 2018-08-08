<?php
/**
* Runtime configuration for the FAQ custom post type.
*
* @package      RoxyCruzWebDesign\Module\FAQ
* @author       Roxy Cruz 
* @license      GPL-2.0+
* @link         https://roxycruzwebdesign.com 
*/

namespace RoxyCruzWebDesign\Module\FAQ;

return array(

  /**=====================================
	 * The post type name.
	 *======================================*/  
  'post_type' => 'faq',

  /**=====================================
	 * These are label configuration.
	 *======================================*/  
  'labels'    => array(
    'custom_type'                 => 'faq',
    'singular_label'            => 'FAQ',
    'plural_label'              => 'FAQs',
    'in_sentence_label'         => 'frequently asked questions (FAQs)',
    'text_domain'               => FAQ_MODULE_TEXT_DOMAIN,
  ),

  /**=====================================
	 * Supported features for this post type
	 *======================================*/  
  'features'  =>  array(
    'base_post_type'  => 'post',
    'exclude'         => array(
  		'excerpt',
  		'comments',
  		'trackbacks',
  		'custom-fields',
  		//'thumbnail',
  	),
    'additional'  => array(
      'page-attributes',
    ),     
    
  ),

  /**=====================================
	 * Registration arguments
	 *======================================*/  
  'args'      =>  array(
		'description'   => 'Frequently Asked Questions (FAQ)',
		'label'         => __( 'FAQs', FAQ_MODULE_TEXT_DOMAIN ),
		'labels'        => '', // automatically generate the labels
		'public'        => true,
		'supports'      => '', // automatically generate the support features
		'menu_icon'     => 'dashicons-editor-help',
		'has_archive'   => true,
	),
  
);