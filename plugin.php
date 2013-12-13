<?php
/*
Plugin Name: Infogeek Admin Themes
Plugin URI: http://www.infogeek.gr
Description: Adds some more themes to th admin layout
Version: 1.0
Author: Konstantinos Tsatsarounos
Author URI: http://www.infogeek.gr
License: GPLv2 or later
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


if( !defined( 'INFOTHEMES' ) )
    define( 'INFOTHEMES', true);


function infogeek_add_admin_themes() {
	infogeek_enqueue_necessary_stylesheets();
	
	wp_admin_css_color( 
		'infogeek-clear',
		_x( 'Infogeek Clear', 'Infogeek Clear' ),
		plugins_url( 'css/colors/infogeek_clear/colors.min.css', __FILE__ ),
		array( '#fff', '#E1E7F1', '#006bd6', '#0B83FC' ),
		array( 'base' => '#fff', 'focus' => '#b3b3b3', 'current' => '#fff' )
	);
	
	wp_admin_css_color( 
		'infogeek-high-contrast',
		_x( 'Infogeek High Contrast', 'Infogeek High Contrast' ),
		plugins_url( 'css/colors/infogeek_high_contrast/colors.min.css', __FILE__ ),
		array( '#0074A3', '#fff', '#d6ebff', '#003870' ),
		array( 'base' => '#006bd6', 'focus' => '#d6ebff', 'current' => '#fff' )
	);
	
	wp_admin_css_color( 
		'xtnd',
		_x('XTND', 'XTND' ),
		plugins_url( "css/colors/xtnd/colors.min.css", __FILE__ ),
		array( '#222', '#333', '#b3296b', '#cc3a7e' ),
		array( 'base' => '#999', 'focus' => '#ccc', 'current' => '#ccc' )
	);
}

function infogeek_enqueue_necessary_stylesheets(){
	wp_enqueue_style('admin_colors', admin_url( 'css/colors.css'), array(), '1.0', 'all');
}


add_action( 'admin_init', 'infogeek_add_admin_themes' );
