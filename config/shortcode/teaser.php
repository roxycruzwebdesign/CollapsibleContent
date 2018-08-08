<?php
/**
* Runtime configuration defaults for the 'teaser' shortcode
*
* @package      RoxyCruzWebDesign\Module\FAQ
* @author       Roxy Cruz 
* @license      GPL-2.0+
* @link         https://roxycruzwebdesign.com 
*/

namespace RoxyCruzWebDesign\CollapsibleContent\Shortcode;

return array(

	/**=================================================
	 * Shortcode name [qa]
	 *==================================================*/
	'shortcode_name'              => 'teaser',

	/**=================================================
	 * Specify if you want do_shortcode() to run on the
	 * content between the shortcode opening and closing
	 * brackets. Defaults to true.
	 *==================================================*/
	//'do_shortcode_within_content' => true,

	/**=================================================
	 * Specify the processing function when you want
	 * your code to handle the output buffer, view, and
	 * processing.
	 *==================================================*/
	//'processing_function'         => null,

	/**=================================================
	 * Paths to the view files
	 *==================================================*/
	'view'                        => COLLAPSIBLE_CONTENT_DIR . 'src/shortcode/views/teaser.php',

	/**=================================================
	 * Defined shortcode default attributes.  Each is
	 * overridable by the author.
	 *==================================================*/
	'defaults'                    => array(
		'show_icon'       => 'dashicons dashicons-arrow-down-alt2',
		'hide_icon'       => 'dashicons dashicons-arrow-up-alt2',
		'visible_message' => '',
	),
);