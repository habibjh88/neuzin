<?php
/**
 * @author  DevOfWP
 *
 * @since   1.0
 *
 * @version 1.0
 */

namespace devofwp\Neuzin;

// Includes
//Helper::requires( 'icon-trait.php' );
Helper::requires( 'helper-functions.php' );
Helper::requires( 'redux-config.php' );
Helper::requires( 'theme.php' );
Helper::requires( 'hooks.php' );
Helper::requires( 'fns.php' );
Helper::requires( 'scripts.php' );
Helper::requires( 'theme-config.php' );
//Helper::requires( 'lc-helper.php' );
//Helper::requires( 'lc-utility.php' );

// Includes Modules
Helper::requires( 'related-post.php', 'inc/modules' );
Helper::requires( 'breadcrumbs.php', 'inc/modules' );
Helper::requires( 'related-portfolio.php', 'inc/modules' );

// WooCommerce
if ( class_exists( 'WooCommerce' ) ) {
	Helper::requires( 'woo-functions.php' );
	Helper::requires( 'woo-hooks.php' );
}

// TGM Plugin Activation
require_once NEUZIN_BASE_DIR . 'lib/class-tgm-plugin-activation.php';
Helper::requires( 'tgm-config.php' );