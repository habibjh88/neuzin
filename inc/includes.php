<?php
/**
 * @author  RadiusTheme
 *
 * @since   1.0
 *
 * @version 1.0
 */

use radiustheme\Neuzin\Helper;

Helper::requires( 'icon-trait.php' );
Helper::requires( 'icon-trait.php' );
// Includes
Helper::requires( 'helper-functions.php' );
Helper::requires( 'redux-config.php' );
Helper::requires( 'theme.php' );
Helper::requires( 'general.php' );
Helper::requires( 'scripts.php' );
Helper::requires( 'template-vars.php' );
Helper::requires( 'lc-helper.php' );
Helper::requires( 'lc-utility.php' );

// Includes Modules
Helper::requires( 'rt-post-related.php', 'inc/modules' );
Helper::requires( 'rt-breadcrumbs.php', 'inc/modules' );
Helper::requires( 'rt-portfolio-related.php', 'inc/modules' );

// WooCommerce
if ( class_exists( 'WooCommerce' ) ) {
	Helper::requires( 'woo-functions.php' );
	Helper::requires( 'woo-hooks.php' );
}

// TGM Plugin Activation
require_once NEUZIN_BASE_DIR . 'lib/class-tgm-plugin-activation.php';
Helper::requires( 'tgm-config.php' );