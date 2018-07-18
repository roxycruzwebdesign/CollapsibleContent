<?php
/**
* Collapsible Content plugin  
*
* @package      RoxyCruzWebDesign\CollapsibleContent
* @author       Roxy Cruz 
* @license      GPL-2.0+
* @link         https://roxycruzwebdesign.com 
*
* @wordpress-plugin
* Plugin Name:  Collapsible Content
* Plugin URI:   https://github.com/roxycruzwebdesign/CollapsibleContent
* Description:  Collapsible Content is a WordPress Plugin that shows and hides content.
* Version:      1.0.0
* Author:       Roxy Cruz
* Author URI:   https://roxycruzwebdesign.com
* Text Domain:  collapsible_content
* Requires WP:     4.7
* Requires PHP:    5.5
*/


/*
 This program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License
 as published by the Free Software Foundation; either version 2
 of the License, or (at your option) any later version.
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.
 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

namespace RoxyCruzWebDesign\CollapsibleContent;

if ( ! defined( 'ABSPATH' ) ) {
  die ( "Nothing to see here." );
}

define( 'COLLAPSIBLE_CONTENT_PLUGIN', __FILE__ );
define( 'COLLAPSIBLE_CONTENT_DIR', plugin_dir_path( __FILE__ ) );
$plugin_url = plugin_dir_url( __FILE__ );
if ( is_ssl() ) {
	$plugin_url = str_replace( 'http://', 'https://', $plugin_url );
}
define( 'COLLAPSIBLE_CONTENT_URL', $plugin_url );
define( 'COLLAPSIBLE_CONTENT_TEXT_DOMAIN', 'collapsible_content' );

include( __DIR__ . '/src/plugin.php' );