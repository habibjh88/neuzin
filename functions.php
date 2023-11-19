<?php
/**
 * @author  DevOfWP
 *
 * @since   1.0
 *
 * @version 1.0
 */


use devofwp\Neuzin\Theme;


$neuzin_theme_data = wp_get_theme();
do_action( 'neuzin_theme_init' );

define( 'NEUZIN_VERSION', ( WP_DEBUG ) ? time() : '1.0.0' );
// DIR
define( 'NEUZIN_BASE_DIR', get_template_directory() . '/' );
define( 'NEUZIN_AUTHOR_URI', 'http://devofwp.com' );
define( 'NEUZIN_INC_DIR', NEUZIN_BASE_DIR . 'inc/' );

// URL
define( 'NEUZIN_BASE_URL', get_template_directory_uri() . '/' );
define( 'NEUZIN_ASSETS_URL', NEUZIN_BASE_URL . 'assets/' );
define( 'NEUZIN_CSS_URL', NEUZIN_ASSETS_URL . 'css/' );
define( 'NEUZIN_JS_URL', NEUZIN_ASSETS_URL . 'js/' );
define( 'NEUZIN_IMG_URL', NEUZIN_ASSETS_URL . 'img/' );


require_once get_template_directory() . '/inc/icon-trait.php';
require_once get_template_directory() . '/inc/helper.php';
require_once get_template_directory() . '/inc/includes.php';

add_editor_style( 'style-editor.css' );
var_dump([ "func-2" =>Theme::$header_style]);
