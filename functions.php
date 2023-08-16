<?php
/**
 * @author  RadiusTheme
 *
 * @since   1.0
 *
 * @version 1.0
 */
$neuzin_theme_data = wp_get_theme();
	$action           = 'neuzin_theme_init';
	do_action($action);

	define('NEUZIN_VERSION', (WP_DEBUG) ? time() : $neuzin_theme_data->get('Version'));
	define('NEUZIN_AUTHOR_URI', $neuzin_theme_data->get('AuthorURI'));
	define('NEUZIN_NAME', 'neuzin');

	// DIR
	define('NEUZIN_BASE_DIR', get_template_directory() . '/');
	define('NEUZIN_INC_DIR', NEUZIN_BASE_DIR . 'inc/');
	define('NEUZIN_VIEW_DIR', NEUZIN_INC_DIR . 'views/');
	define('NEUZIN_LIB_DIR', NEUZIN_BASE_DIR . 'lib/');
	define('NEUZIN_WID_DIR', NEUZIN_INC_DIR . 'widgets/');
	define('NEUZIN_PLUGINS_DIR', NEUZIN_INC_DIR . 'plugins/');
	define('NEUZIN_MODULES_DIR', NEUZIN_INC_DIR . 'modules/');
	define('NEUZIN_ASSETS_DIR', NEUZIN_BASE_DIR . 'assets/');
	define('NEUZIN_CSS_DIR', NEUZIN_ASSETS_DIR . 'css/');
	define('NEUZIN_JS_DIR', NEUZIN_ASSETS_DIR . 'js/');

	// URL
	define('NEUZIN_BASE_URL', get_template_directory_uri() . '/');
	define('NEUZIN_ASSETS_URL', NEUZIN_BASE_URL . 'assets/');
	define('NEUZIN_CSS_URL', NEUZIN_ASSETS_URL . 'css/');
	define('NEUZIN_JS_URL', NEUZIN_ASSETS_URL . 'js/');
	define('NEUZIN_IMG_URL', NEUZIN_ASSETS_URL . 'img/');
	define('NEUZIN_LIB_URL', NEUZIN_BASE_URL . 'lib/');

	//Other Plugins active or not
	define('NEUZIN_BBPRESS_IS_ACTIVE', class_exists('bbPress'));
	// icon trait Plugin Activation
	require_once NEUZIN_INC_DIR . 'icon-trait.php';
	// Includes
	require_once NEUZIN_INC_DIR . 'helper-functions.php';
	require_once NEUZIN_INC_DIR . 'redux-config.php';
	require_once NEUZIN_INC_DIR . 'theme.php';
	require_once NEUZIN_INC_DIR . 'general.php';
	require_once NEUZIN_INC_DIR . 'scripts.php';
	require_once NEUZIN_INC_DIR . 'template-vars.php';
	require_once NEUZIN_INC_DIR . 'lc-helper.php';
	require_once NEUZIN_INC_DIR . 'lc-utility.php';

	// Includes Modules
	require_once NEUZIN_MODULES_DIR . 'rt-post-related.php';
	require_once NEUZIN_MODULES_DIR . 'rt-breadcrumbs.php';
	require_once NEUZIN_MODULES_DIR . 'rt-portfolio-related.php';

	// WooCommerce
	if (class_exists('WooCommerce')) {
		require_once NEUZIN_INC_DIR . 'woo-functions.php';
		require_once NEUZIN_INC_DIR . 'woo-hooks.php';
	}

	// TGM Plugin Activation
	require_once NEUZIN_LIB_DIR . 'class-tgm-plugin-activation.php';
	require_once NEUZIN_INC_DIR . 'tgm-config.php';

	function neuzin_loadtemplate($templateurl, $data = []) {
		extract($data);
		include locate_template($templateurl . '.php', false, false);
	}

	add_editor_style('style-editor.css');
