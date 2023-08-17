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

	// URL
	define('NEUZIN_BASE_URL', get_template_directory_uri() . '/');
	define('NEUZIN_ASSETS_URL', NEUZIN_BASE_URL . 'assets/');
	define('NEUZIN_CSS_URL', NEUZIN_ASSETS_URL . 'css/');
	define('NEUZIN_JS_URL', NEUZIN_ASSETS_URL . 'js/');
	define('NEUZIN_IMG_URL', NEUZIN_ASSETS_URL . 'img/');

	require_once get_template_directory() . '/inc/helper.php';
	require_once get_template_directory() . '/inc/includes.php';


	function neuzin_loadtemplate($templateurl, $data = []) {
		extract($data);
		include locate_template($templateurl . '.php', false, false);
	}

	add_editor_style('style-editor.css');
