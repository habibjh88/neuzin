<?php
/**
 * @author  RadiusTheme
 *
 * @since   1.0
 *
 * @version 1.0
 */
if (! class_exists('Redux')) {
	return;
}

$opt_name = 'neuzin';

$theme = wp_get_theme();
$args  = [
	// TYPICAL -> Change these values as you need/desire
	'opt_name'             => $opt_name,
	// This is where your data is stored in the database and also becomes your global variable name.
	'disable_tracking'     => true,
	'display_name'         => $theme->get('Name'),
	// Name that appears at the top of your panel
	'display_version'      => $theme->get('Version'),
	// Version that appears at the top of your panel
	'menu_type'            => 'submenu',
	//Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
	'allow_sub_menu'       => true,
	// Show the sections below the admin menu item or not
	'menu_title'           => esc_html__('Neuzin Options', 'neuzin'),
	'page_title'           => esc_html__('Neuzin Options', 'neuzin'),
	// You will need to generate a Google API key to use this feature.
	'google_update_weekly' => false,
	// Must be defined to add google fonts to the typography module
	'async_typography'     => true,
	// Use a asynchronous font on the front end or font string
	'admin_bar'            => true,
	// Show the panel pages on the admin bar
	'admin_bar_icon'       => 'dashicons-menu',
	// Choose an icon for the admin bar menu
	'admin_bar_priority'   => 50,
	// Choose an priority for the admin bar menu
	'global_variable'      => '',
	// Set a different name for your global variable other than the opt_name
	'dev_mode'             => false,
	'forced_dev_mode_off'  => false,
	// Show the time the page took to load, etc
	'update_notice'        => false,
	// If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
	'customizer'           => true,
	// Enable basic customizer support
	'page_priority'        => null,
	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_parent'          => 'themes.php',
	// For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
	'page_permissions'     => 'manage_options',
	// Permissions needed to access the options panel.
	'menu_icon'            => '',
	// Specify a custom URL to an icon
	'last_tab'             => '',
	// Force your panel to always open to a specific tab (by id)
	'page_icon'            => 'icon-themes',
	// Icon displayed in the admin panel next to your menu_title
	'page_slug'            => 'neuzin-options',
	// Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
	'save_defaults'        => true,
	// On load save the defaults to DB before user clicks save or not
	'default_show'         => true,
	// If true, shows the default value next to each field that is not the default value.
	'default_mark'         => '',
	// What to print by the field's title if the value shown is default. Suggested: *
	'show_import_export'   => true,
	// Shows the Import/Export panel when not used as a field.
	'transient_time'       => 60 * MINUTE_IN_SECONDS,
	'output'               => true,
	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
	'output_tag'           => true,
	// Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
	'database'             => '',
	// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	'use_cdn'              => true,
	// If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
];

Redux::setArgs($opt_name, $args);

// Fields
Redux::setSection(
	$opt_name,
	[
	'title'            => esc_html__('General', 'neuzin'),
	'id'               => 'general_section',
	'heading'          => '',
	'icon'             => 'el el-network',
	'fields'           => [
		[
			'id'          => 'primary_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Primary Color', 'neuzin'),
			'subtitle'    => esc_html__('Theme Default: #5a49f8', 'neuzin'),
			'default'     => '#5a49f8',
		],
		[
			'id'          => 'secondary_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Secondary Color', 'neuzin'),
			'subtitle'    => esc_html__('Theme Default: #7a64f2', 'neuzin'),
			'default'     => '#7a64f2',
		],
		[
			'id'          => 'tertiary_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Tertiary Color', 'neuzin'),
			'subtitle'    => esc_html__('Theme Default: #04d5f4', 'neuzin'),
			'default'     => '#04d5f4',
		],
		[
			'id'          => 'dark_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Dark Color', 'neuzin'),
			'subtitle'    => esc_html__('Theme Default: #750ed5', 'neuzin'),
			'default'     => '#750ed5',
		],
		[
			'id'       		  => 'body_color',
			'type'     		  => 'color',
			'transparent' 	=> false,
			'title'    		  => esc_html__('Body Color', 'neuzin'),
			'subtitle'     => esc_html__('Theme Default: #646464', 'neuzin'),
			'default'  		  => '#646464',
		],
		[
			'id'       => 'container_width',
			'type'     => 'select',
			'title'    => esc_html__('Container width( Bootstrap Grid )', 'neuzin'),
			'subtitle' => esc_html__('Bootstrap Grid Container Width size for site.', 'neuzin'),
			'options'  => [
				'1350' => esc_html__('1350px', 'neuzin'),
				'1200' => esc_html__('1200px', 'neuzin'),
				'1140' => esc_html__('1140px', 'neuzin'),
			],
			'default'  => '1200',
		],
		[
			'id'       => 'preloader',
			'type'     => 'switch',
			'title'    => esc_html__('Preloader', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'preloader_image',
			'type'     => 'media',
			'title'    => esc_html__('Preloader Image', 'neuzin'),
			'subtitle' => esc_html__('Please upload your choice of preloader image. Transparent GIF format is recommended', 'neuzin'),
			'default'  => [
				'url'=> NEUZIN_IMG_URL . 'preloder.png',
			],
			'required' => ['preloader', 'equals', true],
		],
		[
			'id'       => 'back_to_top',
			'type'     => 'switch',
			'title'    => esc_html__('Back to Top Arrow', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'display_no_preview_image',
			'type'     => 'switch',
			'title'    => esc_html__('Display No Preview Image on Blog/Archive', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'default'  => 'off',
		],
		[
			'id'       => 'display_no_prev_img_related_post',
			'type'     => 'switch',
			'title'    => esc_html__('Display No Preview Image on Related Post', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'default'  => 'off',
		],
		[
			'id'       => 'no_preview_image',
			'type'     => 'media',
			'title'    => esc_html__('Alternative Preview Image', 'neuzin'),
			'subtitle' => esc_html__('This image will be used as preview image in some archive pages if no featured image exists', 'neuzin'),
			'default'  => [
				'url'=> NEUZIN_IMG_URL . 'noimage.jpg',
			],
			'required' => ['display_no_preview_image', 'equals', true],
		],
		[
			'id'       => 'team_slug',
			'type'     => 'text',
			'title'    => esc_html__('Team Slug', 'neuzin'),
			'subtitle' => esc_html__('Will be used as slug in Team breadcrumb', 'neuzin'),
			'default'  => 'team',
		],
		[
			'id'       => 'service_slug',
			'type'     => 'text',
			'title'    => esc_html__('Service Slug', 'neuzin'),
			'subtitle' => esc_html__('Will be used as slug in Service breadcrumb', 'neuzin'),
			'default'  => 'service',
		],
		[
			'id'       => 'portfolio_slug',
			'type'     => 'text',
			'title'    => esc_html__('Portfolio Slug', 'neuzin'),
			'subtitle' => esc_html__('Will be used as slug in Portfolio breadcrumb', 'neuzin'),
			'default'  => 'portfolio',
		],
		[
			'id'       => 'testimonial_slug',
			'type'     => 'text',
			'title'    => esc_html__('Testimonial Slug', 'neuzin'),
			'subtitle' => esc_html__('Will be used as slug in Testimonial breadcrumb', 'neuzin'),
			'default'  => 'testimonial',
		],
		[
			'id'       => 'team_cat_slug',
			'type'     => 'text',
			'title'    => esc_html__('Team Category Slug', 'neuzin'),
			'subtitle' => esc_html__('Will be used as slug in Team breadcrumb', 'neuzin'),
			'default'  => 'team-category',
		],
		[
			'id'       => 'service_cat_slug',
			'type'     => 'text',
			'title'    => esc_html__('Service Category Slug', 'neuzin'),
			'subtitle' => esc_html__('Will be used as slug in Service breadcrumb', 'neuzin'),
			'default'  => 'service-category',
		],
		[
			'id'       => 'portfolio_cat_slug',
			'type'     => 'text',
			'title'    => esc_html__('Portfolio Category Slug', 'neuzin'),
			'subtitle' => esc_html__('Will be used as slug in Portfolio breadcrumb', 'neuzin'),
			'default'  => 'portfolio-category',
		],
		[
			'id'       => 'testim_cat_slug',
			'type'     => 'text',
			'title'    => esc_html__('Testimonial Category Slug', 'neuzin'),
			'subtitle' => esc_html__('Will be used as slug in Testimonial breadcrumb', 'neuzin'),
			'default'  => 'testimonial-category',
		],
	],
]
);

Redux::setSection($opt_name, [
	'title'            => esc_html__('Contact & Socials', 'neuzin'),
	'id'               => 'socials_section',
	'heading'          => '',
	'desc'             => esc_html__('In case you want to hide any field, keep that field empty', 'neuzin'),
	'icon'             => 'el el-twitter',
	'fields'           => [
		[
			'id'       => 'phone',
			'type'     => 'text',
			'title'    => esc_html__('Phone', 'neuzin'),
			'default'  => '',
		],
		[
			'id'       => 'email',
			'type'     => 'text',
			'title'    => esc_html__('Email', 'neuzin'),
			'validate' => 'email',
			'default'  => '',
		],
		[
			'id'       => 'address',
			'type'     => 'textarea',
			'title'    => esc_html__('Address', 'neuzin'),
			'default'  => '',
		],
		[
			'id'       => 'social_facebook',
			'type'     => 'text',
			'title'    => esc_html__('Facebook', 'neuzin'),
			'default'  => '',
		],
		[
			'id'       => 'social_twitter',
			'type'     => 'text',
			'title'    => esc_html__('Twitter', 'neuzin'),
			'default'  => '',
		],
		[
			'id'       => 'social_gplus',
			'type'     => 'text',
			'title'    => esc_html__('Google Plus', 'neuzin'),
			'default'  => '',
		],
		[
			'id'       => 'social_linkedin',
			'type'     => 'text',
			'title'    => esc_html__('Linkedin', 'neuzin'),
			'default'  => '',
		],
		[
			'id'       => 'social_behance',
			'type'     => 'text',
			'title'    => esc_html__('Behance', 'neuzin'),
			'default'  => '',
		],
		[
			'id'       => 'social_dribbble',
			'type'     => 'text',
			'title'    => esc_html__('Dribbble', 'neuzin'),
			'default'  => '',
		],
		[
			'id'       => 'social_youtube',
			'type'     => 'text',
			'title'    => esc_html__('Youtube', 'neuzin'),
			'default'  => '',
		],
		[
			'id'       => 'social_pinterest',
			'type'     => 'text',
			'title'    => esc_html__('Pinterest', 'neuzin'),
			'default'  => '',
		],
		[
			'id'       => 'social_instagram',
			'type'     => 'text',
			'title'    => esc_html__('Instagram', 'neuzin'),
			'default'  => '',
		],
		[
			'id'       => 'social_skype',
			'type'     => 'text',
			'title'    => esc_html__('Skype', 'neuzin'),
			'default'  => '',
		],
		[
			'id'       => 'social_rss',
			'type'     => 'text',
			'title'    => esc_html__('RSS', 'neuzin'),
			'default'  => '',
		],
		[
			'id'       => 'social_snapchat',
			'type'     => 'text',
			'title'    => esc_html__('Snapchat', 'neuzin'),
			'default'  => '',
		],
	],
]);

Redux::setSection(
	$opt_name,
	[
	'title'            => esc_html__('Header', 'neuzin'),
	'id'               => 'header_section',
	'heading'          => '',
	'icon'             => 'el el-caret-up',
	'fields'           => [
		[
			'id'       => 'logo',
			'type'     => 'media',
			'title'    => esc_html__('Main Logo', 'neuzin'),
			'default'  => [
				'url'=> NEUZIN_IMG_URL . 'logo.png',
			],
			'subtitle' => esc_html__('Logo height less than 90px is recommended', 'neuzin'),
		],
		[
			'id'       => 'logo_light',
			'type'     => 'media',
			'title'    => esc_html__('Light Logo', 'neuzin'),
			'default'  => [
				'url'  => NEUZIN_IMG_URL . 'logo2.png',
			],
			'subtitle' => esc_html__('Used when Transparent Header is enabled. Logo height less than 90px is recommended', 'neuzin'),
		],
		[
			'id'       => 'logo_width',
			'type'     => 'select',
			'title'    => esc_html__('Logo Area Width', 'neuzin'),
			'subtitle' => esc_html__('Width is defined by the number of bootstrap columns. Please note, navigation menu width will be decreased with the increase of logo width', 'neuzin'),
			'options'  => [
				'1' => esc_html__('1 Column', 'neuzin'),
				'2' => esc_html__('2 Column', 'neuzin'),
				'3' => esc_html__('3 Column', 'neuzin'),
				'4' => esc_html__('4 Column', 'neuzin'),
			],
			'default'  => '2',
		],

		[
			'id'       => 'desktop_logo_width',
			'type'     => 'slider',
			'title'    => esc_html__('Desktop logo width', 'neuzin'),
			'subtitle' => esc_html__('Recommended value is: 180', 'neuzin'),
			'default'  => 180,
			'min'      => 10,
			'step'     => 1,
			'max'      => 500,
		],

		[
			'id'       => 'mobile_logo_width',
			'type'     => 'slider',
			'title'    => esc_html__('Mobile logo width', 'neuzin'),
			'subtitle' => esc_html__('Recommended value is: 120', 'neuzin'),
			'default'  => 120,
			'min'      => 10,
			'step'     => 1,
			'max'      => 500,
		],

		[
			'id'       => 'sticky_menu',
			'type'     => 'switch',
			'title'    => esc_html__('Sticky Header', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => true,
			'subtitle' => esc_html__('Show header when scroll down', 'neuzin'),
		],
		[
			'id'       => 'tr_header',
			'type'     => 'switch',
			'title'    => esc_html__('Transparent Header', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => false,
			'subtitle' => esc_html__('You have to enable Banner or Slider in page to make it work properly. You can override this settings in individual pages', 'neuzin'),
		],
		[
			'id'       => 'header_opt',
			'type'     => 'switch',
			'title'    => esc_html__('Header On/Off', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => true,
			'subtitle' => esc_html__('You can override this settings in individual pages', 'neuzin'),
		],
		[
			'id'       => 'top_bar',
			'type'     => 'switch',
			'title'    => esc_html__('Top Bar', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => false,
			'subtitle' => esc_html__('You can override this settings in individual pages', 'neuzin'),
		],
		/*topbar style 1*/
		[
			'id'          => 'top_bar_bgcolor',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Top Bar Background Color', 'neuzin'),
			'default'     => '#5a49f8',
			'required'    => ['top_bar_style', 'equals', '1'],
		],
		[
			'id'          => 'top_bar_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Top Bar Text Color', 'neuzin'),
			'default'     => '#c6ceec',
			'required'    => ['top_bar_style', 'equals', '1'],
		],
		[
			'id'          => 'top_baricon_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Top Bar Icon Color', 'neuzin'),
			'default'     => '#c6ceec',
			'required'    => ['top_bar_style', 'equals', '1'],
		],
		[
			'id'          => 'top_bar_color_tr',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Transparent Top Bar Text Color', 'neuzin'),
			'subtitle'    => esc_html__('Applied when Transparent Header is enabled', 'neuzin'),
			'default'     => '#ffffff',
			'required'    => ['top_bar_style', 'equals', '1'],
		],
		[
			'id'          => 'top_baricon_color_tr',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Transparent Top Bar Icon Color', 'neuzin'),
			'subtitle'    => esc_html__('Applied when Transparent Header is enabled', 'neuzin'),
			'default'     => '#ffffff',
			'required'    => ['top_bar_style', 'equals', '1'],
		],
		/*topbar style 2*/
		[
			'id'          => 'top_bar_bgcolor_2',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Top Bar Background Color', 'neuzin'),
			'default'     => '#e7f1ff',
			'required'    => ['top_bar_style', 'equals', '2'],
		],
		[
			'id'          => 'top_bar_color_2',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Top Bar Text Color', 'neuzin'),
			'default'     => '#646464',
			'required'    => ['top_bar_style', 'equals', '2'],
		],
		[
			'id'          => 'top_baricon_color_2',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Top Bar Icon Color', 'neuzin'),
			'default'     => '#646464',
			'required'    => ['top_bar_style', 'equals', '2'],
		],
		[
			'id'       => 'top_bar_style',
			'type'     => 'image_select',
			'title'    => esc_html__('Top Bar Layout', 'neuzin'),
			'default'  => '1',
			'options'  => [
				'1' => [
					'title' => '<b>' . esc_html__('Layout 1', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'top-1.jpg',
				],
				'2' => [
					'title' => '<b>' . esc_html__('Layout 2', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'top-2.jpg',
				],
				'3' => [
					'title' => '<b>' . esc_html__('Layout 3', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'top-3.jpg',
				],
				'4' => [
					'title' => '<b>' . esc_html__('Layout 4', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'top-4.jpg',
				],
			],
			'subtitle' => esc_html__('You can override this settings in individual pages', 'neuzin'),
		],
		[
			'id'       => 'header_style',
			'type'     => 'image_select',
			'title'    => esc_html__('Header Layout', 'neuzin'),
			'default'  => '1',
			'options'  => [
				'1' => [
					'title' => '<b>' . esc_html__('Layout 1', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'header-1.jpg',
				],
				'2' => [
					'title' => '<b>' . esc_html__('Layout 2', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'header-2.jpg',
				],
				'3' => [
					'title' => '<b>' . esc_html__('Layout 3', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'header-3.jpg',
				],
				'4' => [
					'title' => '<b>' . esc_html__('Layout 4', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'header-4.jpg',
				],
				'5' => [
					'title' => '<b>' . esc_html__('Layout 5', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'header-5.jpg',
				],
				'6' => [
					'title' => '<b>' . esc_html__('Layout 6', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'header-6.jpg',
				],
				'7' => [
					'title' => '<b>' . esc_html__('Layout 7', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'header-7.jpg',
				],
			],
			'subtitle' => esc_html__('You can override this settings in individual pages', 'neuzin'),
		],
		[
			'id'       => 'search_icon',
			'type'     => 'switch',
			'title'    => esc_html__('Search Icon', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'cart_icon',
			'type'     => 'switch',
			'title'    => esc_html__('Cart Icon', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'vertical_menu_icon',
			'type'     => 'switch',
			'title'    => esc_html__('Vertical Menu Icon', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'online_button',
			'type'     => 'switch',
			'title'    => esc_html__('Online Button', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'online_button_text',
			'type'     => 'text',
			'title'    => esc_html__('Button Text', 'neuzin'),
			'default'  => esc_html__('Get A Quote', 'neuzin'),
			'required' => ['online_button', '=', true],
		],
		[
			'id'       => 'online_button_link',
			'type'     => 'text',
			'title'    => esc_html__('Button Link', 'neuzin'),
			'default'  => '#',
			'required' => ['online_button', '=', true],
		],
		[
			'id'       => 'quick_contact',
			'type'     => 'switch',
			'title'    => esc_html__('Quick Contact', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => false,
			'required' => ['header_style', 'equals', '5'],
		],
		[
			'id'       => 'header_hotline_txt',
			'type'     => 'text',
			'title'    => esc_html__('Header "Quick Contact" Text', 'neuzin'),
			'subtitle' => esc_html__('Used for header style 5', 'neuzin'),
			'default'  => esc_html__('Call Us Now', 'neuzin'),
			'required' => [
				['header_style', 'equals', '5'],
				['quick_contact', 'equals', '1'],
			],
		],

	],
]
);

Redux::setSection(
	$opt_name,
	[
	'title'            => esc_html__('Main Menu', 'neuzin'),
	'id'               => 'menu_section',
	'heading'          => '',
	'icon'             => 'el el-book',
	'fields'           => [
		[
			'id'       => 'section-mainmenu',
			'type'     => 'section',
			'title'    => esc_html__('Main Menu Items', 'neuzin'),
			'indent'   => true,
		],
		[
			'id'             => 'menu_typo',
			'type'           => 'typography',
			'title'          => esc_html__('Menu Font', 'neuzin'),
			'google'         => true,
			'subsets'        => false,
			'text-align'     => false,
			'color'          => false,
			'text-transform' => true,
			'default'        => [
				'font-family' 	  => 'Roboto',
				'google'      	  => true,
				'font-size'   	  => '16px',
				'font-weight' 	  => '500',
				'line-height' 	  => '22px',
				'text-transform' => 'capitalize',
			],
		],
		[
			'id'          => 'menu_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Menu Color', 'neuzin'),
			'default'     => '#4c4b4b',
		],
		[
			'id'          => 'menu_hover_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Menu Hover Color', 'neuzin'),
			'default'     => '#5a49f8',
		],
		[
			'id'          => 'menu_color_tr',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Transparent Menu Color', 'neuzin'),
			'subtitle'    => esc_html__('Applied when Transparent Header is enabled', 'neuzin'),
			'default'     => '#ffffff',
		],
		[
			'id'          => 'menu_hover_color_tr',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Transparent Menu Hover Color', 'neuzin'),
			'subtitle'    => esc_html__('Applied when Transparent Header is enabled', 'neuzin'),
			'default'     => '#ffffff',
		],
		[
			'id'       => 'section-submenu',
			'type'     => 'section',
			'title'    => esc_html__('Sub Menu Items', 'neuzin'),
			'indent'   => true,
		],
		[
			'id'             => 'submenu_typo',
			'type'           => 'typography',
			'title'          => esc_html__('Submenu Font', 'neuzin'),
			'google'         => true,
			'subsets'        => false,
			'text-align'     => false,
			'color'          => false,
			'text-transform' => true,
			'default'        => [
				'font-family'    => 'Roboto',
				'google'         => true,
				'font-size'      => '14px',
				'font-weight'    => '500',
				'line-height'    => '22px',
				'text-transform' => 'inherit',
			],
		],
		[
			'id'          => 'submenu_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Submenu Color', 'neuzin'),
			'default'     => '#4c4b4b',
		],
		[
			'id'          => 'submenu_hover_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Submenu Hover Color', 'neuzin'),
			'default'     => '#5a49f8',
		],
		[
			'id'          => 'submenu_bgcolor',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Submenu Background Color', 'neuzin'),
			'default'     => '#ffffff',
		],
		[
			'id'       => 'section-resmenu',
			'type'     => 'section',
			'title'    => esc_html__('Mobile Menu', 'neuzin'),
			'indent'   => true,
		],
		[
			'id'       => 'resmenu_width',
			'type'     => 'slider',
			'title'    => esc_html__('Screen width in which mobile menu activated', 'neuzin'),
			'subtitle' => esc_html__('Recommended value is: 992', 'neuzin'),
			'default'  => 992,
			'min'      => 0,
			'step'     => 1,
			'max'      => 2000,
		],
		[
			'id'             => 'resmenu_typo',
			'type'           => 'typography',
			'title'          => esc_html__('Mobile Menu Font', 'neuzin'),
			'google'         => true,
			'subsets'        => false,
			'text-align'     => false,
			'color'          => false,
			'text-transform' => true,
			'default'        => [
				'font-family'    => 'Roboto',
				'google'         => true,
				'font-size'      => '14px',
				'font-weight'    => '500',
				'line-height'    => '22px',
				'text-transform' => 'inherit',
			],
		],
	],
]
);

Redux::setSection(
	$opt_name,
	[
	'title'            => esc_html__('Banner', 'neuzin'),
	'id'               => 'banner_section',
	'heading'          => '',
	'icon'             => 'el el-picture',
	'fields'           => [
		[
			'id'          => 'banner_heading_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Banner Heading Color', 'neuzin'),
			'default'     => '#ffffff',
		],
		[
			'id'       => 'breadcrumb_active',
			'type'     => 'switch',
			'title'    => esc_html__('Enable Breadcrumb', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'breadcrumbs_delimiter',
			'type'     => 'text',
			'title'    => esc_html__('Breadcrumbs Delimiter', 'neuzin'),
			'default'  => '<i class="fas fa-angle-right"></i>',
		],
		[
			'id'       => 'breadcrumb_hide_mobile',
			'type'     => 'switch',
			'title'    => esc_html__('Show/Hide Breadcrumb in mobile', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => false,
		],
		[
			'id'          => 'breadcrumb_link_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Breadcrumb Link Color', 'neuzin'),
			'default'     => '#ffffff',
		],
		[
			'id'          => 'breadcrumb_link_hover_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Breadcrumb Link Hover Color', 'neuzin'),
			'default'     => '#cecece',
		],
		[
			'id'          => 'breadcrumb_active_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Active Breadcrumb Color', 'neuzin'),
			'default'     => '#cecece',
		],
		[
			'id'          => 'breadcrumb_seperator_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Breadcrumb Seperator Color', 'neuzin'),
			'default'     => '#ffffff',
		],
		[
			'id'       => 'banner_bg_opacity',
			'type'     => 'text',
			'title'    => esc_html__('Banner Background Overlay opacity', 'neuzin'),
			'default'  => '1',
		],
		[
		   'id'       => 'banner_top_padding',
		   'type'     => 'text',
		   'title'    => esc_html__('Banner Top Gap ( Top Padding ) ', 'neuzin'),
		   'default'  => '120',
		],
		[
		   'id'       => 'banner_bottom_padding',
		   'type'     => 'text',
		   'title'    => esc_html__('Banner Bottom Gap ( Bottom Padding ) ', 'neuzin'),
		   'default'  => '120',
		],

		/*banner shape*/
		[
			'id'       => 'banner_shape',
			'type'     => 'switch',
			'title'    => esc_html__('Banner Shape', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'banner_shape_animation',
			'type'     => 'switch',
			'title'    => esc_html__('Banner Shape Animation', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => true,
			'required' => ['banner_shape', 'equals', true],
		],
		[
			'id'          => 'banner_shape1',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Banner Shape1 Color', 'neuzin'),
			'default'     => '#523fff',
			'required'    => ['banner_shape', 'equals', true],
		],
		[
			'id'          => 'banner_shape2',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Banner Shape2 Color', 'neuzin'),
			'default'     => '#750ed5',
			'required'    => ['banner_shape', 'equals', true],
		],
		[
			'id'          => 'banner_shape3',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Banner Shape3 Color', 'neuzin'),
			'default'     => '#6d1adf',
			'required'    => ['banner_shape', 'equals', true],
		],
		[
			'id'          => 'banner_shape4',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Banner Shape4 Color', 'neuzin'),
			'default'     => '#8221dd',
			'required'    => ['banner_shape', 'equals', true],
		],

	],
]
);

/*advertisement*/
function neuzin_redux_advertisement_fields($prefix, $title, $subtitle = '') {
	return [
		[
			'id'       => $prefix . '_sec',
			'type'     => 'section',
			'title'    => $title,
			'subtitle' => $subtitle,
			'indent'   => true,
		],
		[
			'id'       => $prefix . '_activate',
			'type'     => 'switch',
			'title'    => esc_html__('Activate Ad', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => $prefix . '_type',
			'type'     => 'button_set',
			'title'    => esc_html__('Ad Type', 'neuzin'),
			'options'  => [
				'image'  => esc_html__('Image Link', 'neuzin'),
				'code'   => esc_html__('Custom Code', 'neuzin'),
			],
			'default'  => 'image',
			'required' => [$prefix . '_activate', 'equals', true],
		],
		[
			'id'       => $prefix . '_image',
			'type'     => 'media',
			'title'    => esc_html__('Image', 'neuzin'),
			'default'  => '',
			'required' => [$prefix . '_type', 'equals', 'image'],
		],
		[
			'id'       => $prefix . '_url',
			'type'     => 'text',
			'title'    => esc_html__('Link', 'neuzin'),
			'default'  => '',
			'required' => [$prefix . '_type', 'equals', 'image'],
		],
		[
			'id'       => $prefix . '_newtab',
			'type'     => 'switch',
			'title'    => esc_html__('Open Link in New Tab', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => true,
			'required' => [$prefix . '_type', 'equals', 'image'],
		],
		[
			'id'       => $prefix . '_nofollow',
			'type'     => 'switch',
			'title'    => esc_html__('Nofollow', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => true,
			'subtitle' => esc_html__('Make Link Nofollow', 'neuzin'),
			'required' => [$prefix . '_type', 'equals', 'image'],
		],
		[
			'id'       => $prefix . '_code',
			'type'     => 'textarea',
			'title'    => esc_html__('Custom Code', 'neuzin'),
			'default'  => '',
			'subtitle' => esc_html__('Supports: Shortcode, Adsense, Text, HTML, Scripts', 'neuzin'),
			'required' => [$prefix . '_type', 'equals', 'code'],
		],
	];
}

Redux::setSection($opt_name, [
	'title'            => esc_html__('Footer', 'neuzin'),
	'id'               => 'footer_section',
	'heading'          => '',
	'icon'             => 'el el-caret-down',
	'fields'           => [
		/*main footer part*/
		[
			'id'       => 'footer_style',
			'type'     => 'image_select',
			'title'    => esc_html__('Footer Layout', 'neuzin'),
			'default'  => '1',
			'options'  => [
				'1' => [
					'title' => '<b>' . esc_html__('Layout 1', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'footer-1.jpg',
				],
				'2' => [
					'title' => '<b>' . esc_html__('Layout 2', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'footer-2.jpg',
				],
				'3' => [
					'title' => '<b>' . esc_html__('Layout 3', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'footer-3.jpg',
				],
				'4' => [
					'title' => '<b>' . esc_html__('Layout 4', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'footer-4.jpg',
				],
				'5' => [
					'title' => '<b>' . esc_html__('Layout 5', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'footer-5.png',
				],
				'6' => [
					'title' => '<b>' . esc_html__('Layout 6', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'footer-6.jpg',
				],
				'7' => [
					'title' => '<b>' . esc_html__('Layout 7', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'footer-7.jpg',
				],
				'8' => [
					'title' => '<b>' . esc_html__('Layout 8', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'footer-8.jpg',
				],
				'9' => [
					'title' => '<b>' . esc_html__('Layout 9', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'footer-9.jpg',
				],
			],
			'subtitle' => esc_html__('You can override this settings in individual pages', 'neuzin'),
		],
		[
			'id'       => 'footer_area',
			'type'     => 'switch',
			'title'    => esc_html__('Display Footer Area', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'footer_column_1',
			'type'     => 'select',
			'title'    => esc_html__('Number of Columns for Footer 1', 'neuzin'),
			'options'  => [
				'1' => '1 Column',
				'2' => '2 Columns',
				'3' => '3 Columns',
				'4' => '4 Columns',
			],
			'default'  => '4',
			'required' => ['footer_style', 'equals', '1'],
		],
		[
			'id'         => 'footer_column_2',
			'type'       => 'select',
			'title'      => esc_html__('Number of Columns for Footer 2', 'neuzin'),
			  'options'  => [
				'1' => esc_html__('1 Column', 'neuzin'),
				'2' => esc_html__('2 Column', 'neuzin'),
				'3' => esc_html__('3 Column', 'neuzin'),
				'4' => esc_html__('4 Column', 'neuzin'),
			],
			'default'  => '4',
			'required' => ['footer_style', 'equals', '2'],
		],
		[
			'id'       => 'footer2_bottom_img_display',
			'type'     => 'switch',
			'title'    => esc_html__('Footer2 Bottom Image Display', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => true,
			'required' => ['footer_style', 'equals', '2'],
		],
		[
			'id'       => 'footer2_bottom_img',
			'type'     => 'media',
			'title'    => esc_html__('Footer2 Bottom Image', 'neuzin'),
			'default'  => [
				'url'=> NEUZIN_IMG_URL . 'footer2_bg.png',
			],
			'required' => [
				['footer_style', 'equals', '2'],
				['footer2_bottom_img_display', 'equals', '1'],
			],
		],
		[
			'id'       => 'footer_column_3',
			'type'     => 'select',
			'title'    => esc_html__('Number of Columns for Footer 3', 'neuzin'),
			'options'  => [
				'1' => esc_html__('1 Column', 'neuzin'),
				'2' => esc_html__('2 Column', 'neuzin'),
				'3' => esc_html__('3 Column', 'neuzin'),
				'4' => esc_html__('4 Column', 'neuzin'),
			],
			'default'  => '4',
			'required' => ['footer_style', 'equals', '3'],
		],
		/*footer 4 option*/
		[
			'id'         => 'footer_column_4',
			'type'       => 'select',
			'title'      => esc_html__('Number of Columns for Footer 4', 'neuzin'),
			  'options'  => [
				'1' => esc_html__('1 Column', 'neuzin'),
				'2' => esc_html__('2 Column', 'neuzin'),
				'3' => esc_html__('3 Column', 'neuzin'),
				'4' => esc_html__('4 Column', 'neuzin'),
			],
			'default'  => '4',
			'required' => ['footer_style', 'equals', '4'],
		],
		[
			'id'          => 'footer4_bgcolor_dark',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 4 Dark Background Color', 'neuzin'),
			'default'     => '#5a49f8',
			'required'    => ['footer_style', 'equals', '4'],
		],
		[
			'id'          => 'footer4_bgcolor_light',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 4 Light Background Color', 'neuzin'),
			'default'     => '#7a64f2',
			'required'    => ['footer_style', 'equals', '4'],
		],
		/*shape color*/
		[
			'id'          => 'footer4_shape1',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 4 Shape1 Color', 'neuzin'),
			'default'     => '#6754f6',
			'required'    => ['footer_style', 'equals', '4'],
		],
		[
			'id'          => 'footer4_shape2',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 4 Shape2 Color', 'neuzin'),
			'default'     => '#5c4af8',
			'required'    => ['footer_style', 'equals', '4'],
		],
		[
			'id'          => 'footer4_shape3',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 4 Shape3 Color', 'neuzin'),
			'default'     => '#7363fd',
			'required'    => ['footer_style', 'equals', '4'],
		],
		[
			'id'          => 'footer4_shape4',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 4 Shape4 Color', 'neuzin'),
			'default'     => '#745eff',
			'required'    => ['footer_style', 'equals', '4'],
		],
		[
			'id'          => 'footer4_shape5',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 4 Shape5 Color', 'neuzin'),
			'default'     => '#9217e0',
			'required'    => ['footer_style', 'equals', '4'],
		],
		[
			'id'          => 'footer4_title_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 4 Title Text Color', 'neuzin'),
			'default'     => '#ffffff',
			'required'    => ['footer_style', 'equals', '4'],
		],
		[
			'id'          => 'footer4_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 4 Body Text Color', 'neuzin'),
			'default'     => '#ffffff',
			'required'    => ['footer_style', 'equals', '4'],
		],
		[
			'id'          => 'footer4_link_hover_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 4 Body Link Hover Color', 'neuzin'),
			'default'     => '#d9d9d9',
			'required'    => ['footer_style', 'equals', '4'],
		],
		[
			'id'       => 'footer_four_shape',
			'type'     => 'switch',
			'title'    => esc_html__('Display Footer 4 Shape', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => true,
			'required' => ['footer_style', 'equals', '4'],
		],
		/*footer 5 option*/
		[
			'id'         => 'footer_column_5',
			'type'       => 'select',
			'title'      => esc_html__('Number of Columns for Footer 5', 'neuzin'),
			  'options'  => [
				'1' => esc_html__('1 Column', 'neuzin'),
				'2' => esc_html__('2 Column', 'neuzin'),
				'3' => esc_html__('3 Column', 'neuzin'),
				'4' => esc_html__('4 Column', 'neuzin'),
			],
			'default'  => '4',
			'required' => ['footer_style', 'equals', '5'],
		],
		[
			'id'       => 'footer5_top_shape',
			'type'     => 'media',
			'title'    => esc_html__('Footer 5 Top Shape', 'neuzin'),
			'default'  => [
				'url'=> NEUZIN_IMG_URL . 'element57.png',
			],
			'required' => ['footer_style', 'equals', '5'],
		],
		[
			'id'          => 'footer5_bgcolor',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 5 Background Color', 'neuzin'),
			'default'     => '#f1f7ff',
			'required'    => ['footer_style', 'equals', '5'],
		],
		[
			'id'          => 'footer5_copy_bgcolor',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 5 Copyright Background Color', 'neuzin'),
			'default'     => '#f1f7ff',
			'required'    => ['footer_style', 'equals', '5'],
		],
		/*footer 6 option*/
		[
			'id'         => 'footer_column_6',
			'type'       => 'select',
			'title'      => esc_html__('Number of Columns for Footer 6', 'neuzin'),
			  'options'  => [
				'1' => esc_html__('1 Column', 'neuzin'),
				'2' => esc_html__('2 Column', 'neuzin'),
				'3' => esc_html__('3 Column', 'neuzin'),
				'4' => esc_html__('4 Column', 'neuzin'),
			],
			'default'  => '4',
			'required' => ['footer_style', 'equals', '6'],
		],
		[
			'id'       => 'footer_six_shape',
			'type'     => 'switch',
			'title'    => esc_html__('Display Footer 6 Shape', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => true,
			'required' => ['footer_style', 'equals', '6'],
		],
		[
			'id'          => 'footer6_bgcolor',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 6 Background Color', 'neuzin'),
			'default'     => '#1d2124',
			'required'    => ['footer_style', 'equals', '6'],
		],
		[
			'id'          => 'footer6_title_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 6 Title Color', 'neuzin'),
			'default'     => '#ffffff',
			'required'    => ['footer_style', 'equals', '6'],
		],
		[
			'id'          => 'footer6_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 6 Text Color', 'neuzin'),
			'default'     => '#ffffff',
			'required'    => ['footer_style', 'equals', '6'],
		],
		[
			'id'          => 'footer6_link_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 6 Link Color', 'neuzin'),
			'default'     => '#a7a7a7',
			'required'    => ['footer_style', 'equals', '6'],
		],
		[
			'id'          => 'footer6_link_hover_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 6 Link Hover Color', 'neuzin'),
			'default'     => '#ffffff',
			'required'    => ['footer_style', 'equals', '6'],
		],
		[
			'id'          => 'footer6_copy_bgcolor',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 6 Copyright Background Color', 'neuzin'),
			'default'     => '#1b1a20',
			'required'    => ['footer_style', 'equals', '6'],
		],
		/*footer 7 option*/
		[
			'id'         => 'footer_column_7',
			'type'       => 'select',
			'title'      => esc_html__('Number of Columns for Footer 7', 'neuzin'),
			  'options'  => [
				'1' => esc_html__('1 Column', 'neuzin'),
				'2' => esc_html__('2 Column', 'neuzin'),
				'3' => esc_html__('3 Column', 'neuzin'),
				'4' => esc_html__('4 Column', 'neuzin'),
			],
			'default'  => '4',
			'required' => ['footer_style', 'equals', '7'],
		],
		[
			'id'       => 'footer7_top_shape',
			'type'     => 'media',
			'title'    => esc_html__('Footer 7 Top Shape', 'neuzin'),
			'default'  => [
				'url'=> NEUZIN_IMG_URL . 'element76.png',
			],
			'required' => ['footer_style', 'equals', '7'],
		],
		[
			'id'          => 'footer7_bgcolor',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 7 Background Color', 'neuzin'),
			'default'     => '#070d1e',
			'required'    => ['footer_style', 'equals', '7'],
		],
		[
			'id'          => 'footer7_copy_bgcolor',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 7 Copyright Background Color', 'neuzin'),
			'default'     => '#070d1e',
			'required'    => ['footer_style', 'equals', '7'],
		],
		[
			'id'          => 'footer7_title_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 7 Title Color', 'neuzin'),
			'default'     => '#ffffff',
			'required'    => ['footer_style', 'equals', '7'],
		],
		[
			'id'          => 'footer7_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 7 Text Color', 'neuzin'),
			'default'     => '#c5c4c4',
			'required'    => ['footer_style', 'equals', '7'],
		],
		[
			'id'          => 'footer7_link_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 7 Link Color', 'neuzin'),
			'default'     => '#c5c4c4',
			'required'    => ['footer_style', 'equals', '7'],
		],
		[
			'id'          => 'footer7_link_hover_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 7 Link Hover Color', 'neuzin'),
			'default'     => '#5a49f8',
			'required'    => ['footer_style', 'equals', '7'],
		],
		/*footer 8 option*/
		[
			'id'         => 'footer_column_8',
			'type'       => 'select',
			'title'      => esc_html__('Number of Columns for Footer 8', 'neuzin'),
			  'options'  => [
				'1' => esc_html__('1 Column', 'neuzin'),
				'2' => esc_html__('2 Column', 'neuzin'),
				'3' => esc_html__('3 Column', 'neuzin'),
				'4' => esc_html__('4 Column', 'neuzin'),
			],
			'default'  => '4',
			'required' => ['footer_style', 'equals', '8'],
		],
		[
			'id'       => 'footer_eight_shape',
			'type'     => 'switch',
			'title'    => esc_html__('Display Footer 8 Shape', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => true,
			'required' => ['footer_style', 'equals', '8'],
		],
		[
			'id'          => 'footer8_gradient_dark',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 8 Gradient Dark Color', 'neuzin'),
			'default'     => '#5a49f8',
			'required'    => ['footer_style', 'equals', '8'],
		],
		[
			'id'          => 'footer8_gradient_light',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 8 Gradient Light Color', 'neuzin'),
			'default'     => '#7a64f2',
			'required'    => ['footer_style', 'equals', '8'],
		],
		[
			'id'          => 'footer8_title_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 8 Title Color', 'neuzin'),
			'default'     => '#ffffff',
			'required'    => ['footer_style', 'equals', '8'],
		],
		[
			'id'          => 'footer8_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 8 Text Color', 'neuzin'),
			'default'     => '#ffffff',
			'required'    => ['footer_style', 'equals', '8'],
		],
		[
			'id'          => 'footer8_link_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 8 Link Color', 'neuzin'),
			'default'     => '#ffffff',
			'required'    => ['footer_style', 'equals', '8'],
		],
		[
			'id'          => 'footer8_link_hover_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 8 Link Hover Color', 'neuzin'),
			'default'     => '#c3c0c0',
			'required'    => ['footer_style', 'equals', '8'],
		],
		[
			'id'          => 'footer8_copy_gradient_dark',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 8 Copyright gradient dark', 'neuzin'),
			'default'     => '#5f4ef5',
			'required'    => ['footer_style', 'equals', '8'],
		],
		[
			'id'          => 'footer8_copy_gradient_light',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 8 Copyright gradient light', 'neuzin'),
			'default'     => '#7a64f2',
			'required'    => ['footer_style', 'equals', '8'],
		],
		/*footer 9 option*/
		[
			'id'         => 'footer_column_9',
			'type'       => 'select',
			'title'      => esc_html__('Number of Columns for Footer 9', 'neuzin'),
			  'options'  => [
				'1' => esc_html__('1 Column', 'neuzin'),
				'2' => esc_html__('2 Column', 'neuzin'),
				'3' => esc_html__('3 Column', 'neuzin'),
				'4' => esc_html__('4 Column', 'neuzin'),
			],
			'default'  => '4',
			'required' => ['footer_style', 'equals', '9'],
		],
		[
			'id'          => 'footer9_bgcolor',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 9 Background Color', 'neuzin'),
			'default'     => '#101c3c',
			'required'    => ['footer_style', 'equals', '9'],
		],
		[
			'id'          => 'footer9_copy_bgcolor',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 9 Copyright Background Color', 'neuzin'),
			'default'     => '#0d1937',
			'required'    => ['footer_style', 'equals', '9'],
		],
		[
			'id'          => 'footer9_title_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 9 Title Color', 'neuzin'),
			'default'     => '#ffffff',
			'required'    => ['footer_style', 'equals', '9'],
		],
		[
			'id'          => 'footer9_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 9 Text Color', 'neuzin'),
			'default'     => '#ffffff',
			'required'    => ['footer_style', 'equals', '9'],
		],
		[
			'id'          => 'footer9_link_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 9 Link Color', 'neuzin'),
			'default'     => '#a7a7a7',
			'required'    => ['footer_style', 'equals', '9'],
		],
		[
			'id'          => 'footer9_link_hover_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer 9 Link Hover Color', 'neuzin'),
			'default'     => '#ffffff',
			'required'    => ['footer_style', 'equals', '9'],
		],
		/*all footer option*/
		[
			'id'       => 'footer_bgtype',
			'type'     => 'button_set',
			'title'    => esc_html__('Footer Background Type', 'neuzin'),
			'options'  => [
				'fbgcolor'  => esc_html__('Background Color', 'neuzin'),
				'fbgimg'    => esc_html__('Background Image', 'neuzin'),
			],
			'default'  => 'fbgcolor',
			'required' => ['footer_area', 'equals', true],
		],
		[
			'id'          => 'fbgcolor',
			'type'        => 'color',
			'title'       => esc_html__('Footer Background Color', 'neuzin'),
			'validate'    => 'color',
			'transparent' => false,
			'default'     => '#ffffff',
			'required'    => ['footer_bgtype', 'equals', 'fbgcolor'],
		],
		[
			'id'       => 'fbgimg',
			'type'     => 'media',
			'title'    => esc_html__('Footer Background Image', 'neuzin'),
			'default'  => [
				'url'=> NEUZIN_IMG_URL . 'footer1_bg.png',
			],
			'required' => ['footer_bgtype', 'equals', 'fbgimg'],
		],
		[
			'id'          => 'footer_title_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer Title Text Color', 'neuzin'),
			'default'     => '#1d2124',
			'required'    => ['footer_area', 'equals', true],
		],
		[
			'id'          => 'footer_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer Body Text Color', 'neuzin'),
			'default'     => '#646464',
			'required'    => ['footer_area', 'equals', true],
		],
		[
			'id'          => 'footer_link_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer Body Link Color', 'neuzin'),
			'default'     => '#646464',
			'required'    => ['footer_area', 'equals', true],
		],
		[
			'id'          => 'footer_link_hover_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Footer Body Link Hover Color', 'neuzin'),
			'default'     => '#5a49f8',
			'required'    => ['footer_area', 'equals', true],
		],
		[
			'id'       => 'footer_logo_light',
			'type'     => 'media',
			'title'    => esc_html__('Footer Logo', 'neuzin'),
			'default'  => [
				'url'=> NEUZIN_IMG_URL . 'logo2.png',
			],
			'subtitle' => esc_html__('Logo height less than 90px is recommended', 'neuzin'),
			'required' => ['footer_area', 'equals', true],
		],
		[
			'id'       => 'section-copyright-area',
			'type'     => 'section',
			'title'    => esc_html__('Copyright Area', 'neuzin'),
			'indent'   => true,
		],
		[
			'id'       => 'copyright_area',
			'type'     => 'switch',
			'title'    => esc_html__('Display Copyright Area', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => true,
		],
		[
			'id'          => 'copyright_bgcolor',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Copyright Background Color', 'neuzin'),
			'default'     => '#f8fbff',
			'required'    => ['copyright_area', 'equals', true],
		],
		[
			'id'          => 'copyright_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Copyright Text Color', 'neuzin'),
			'default'     => '#646464',
			'required'    => ['copyright_area', 'equals', true],
		],
		[
			'id'          => 'copy_link_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Copy Link Color', 'neuzin'),
			'default'     => '#646464',
			'required'    => ['copyright_area', 'equals', true],
		],
		[
			'id'          => 'copy_link_hover_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__('Copy Link Hover Color', 'neuzin'),
			'default'     => '#5a49f8',
			'required'    => ['copyright_area', 'equals', true],
		],
		[
			'id'       => 'copyright_text',
			'type'     => 'textarea',
			'title'    => esc_html__('Copyright Text', 'neuzin'),
			'default'  => '&copy; ' . date('Y') . ' neuzin. All Rights Reserved by <a target="_blank" rel="nofollow" href="' . NEUZIN_AUTHOR_URI . '">RadiusTheme</a>',
			'required' => ['copyright_area', 'equals', true],
		],
	],
]);

Redux::setSection($opt_name, [
	'title'            => esc_html__('Typography', 'neuzin'),
	'id'               => 'typo_section',
	'icon'             => 'el el-text-width',
	'fields'           => [
		[
			'id'            => 'typo_body',
			'type'          => 'typography',
			'title'         => esc_html__('Body', 'neuzin'),
			'google'        => true,
			'subsets'       => false,
			'text-align'    => false,
			'font-weight'   => false,
			'color'         => false,
			'default'       => [
				'font-family' => 'Roboto',
				'google'      => true,
				'font-size'   => '16px',
				'font-weight' => '400',
				'line-height' => '30px',
			],
		],
		[
			'id'            => 'typo_h1',
			'type'          => 'typography',
			'title'         => esc_html__('Header h1', 'neuzin'),
			'google'        => true,
			'subsets'       => false,
			'text-align'    => false,
			'font-weight'   => false,
			'color'         => false,
			'default'       => [
				'font-family'   => 'Poppins',
				'google'        => true,
				'font-size'     => '36px',
				'font-weight'   => '600',
				'line-height'   => '40px',
			],
		],
		[
			'id'            => 'typo_h2',
			'type'          => 'typography',
			'title'         => esc_html__('Header h2', 'neuzin'),
			'google'        => true,
			'subsets'       => false,
			'text-align'    => false,
			'font-weight'   => false,
			'color'         => false,
			'default'       => [
				'font-family' => 'Poppins',
				'google'      => true,
				'font-size'   => '30px',
				'font-weight' => '600',
				'line-height' => '36px',
			],
		],
		[
			'id'            => 'typo_h3',
			'type'          => 'typography',
			'title'         => esc_html__('Header h3', 'neuzin'),
			'google'        => true,
			'subsets'       => false,
			'text-align'    => false,
			'font-weight'   => false,
			'color'         => false,
			'default'       => [
				'font-family' => 'Poppins',
				'google'      => true,
				'font-size'   => '22px',
				'font-weight' => '600',
				'line-height' => '34px',
			],
		],
		[
			'id'            => 'typo_h4',
			'type'          => 'typography',
			'title'         => esc_html__('Header h4', 'neuzin'),
			'google'        => true,
			'subsets'       => false,
			'text-align'    => false,
			'font-weight'   => false,
			'color'         => false,
			'default'       => [
				'font-family' => 'Poppins',
				'google'      => true,
				'font-size'   => '20px',
				'font-weight' => '600',
				'line-height' => '32px',
			],
		],
		[
			'id'            => 'typo_h5',
			'type'          => 'typography',
			'title'         => esc_html__('Header h5', 'neuzin'),
			'google'        => true,
			'subsets'       => false,
			'text-align'    => false,
			'font-weight'   => false,
			'color'         => false,
			'default'       => [
				'font-family' => 'Poppins',
				'google'      => true,
				'font-size'   => '18px',
				'font-weight' => '600',
				'line-height' => '26px',
			],
		],
		[
			'id'            => 'typo_h6',
			'type'          => 'typography',
			'title'         => esc_html__('Header h6', 'neuzin'),
			'google'        => true,
			'subsets'       => false,
			'text-align'    => false,
			'font-weight'   => false,
			'color'         => false,
			'default'       => [
				'font-family' => 'Poppins',
				'google'      => true,
				'font-size'   => '16px',
				'font-weight' => '600',
				'line-height' => '24px',
			],
		],
	],
]);

// Generate Common post type fields
function neuzin_redux_post_type_fields($prefix) {
	return [
		[
			'id'       => $prefix . '_layout',
			'type'     => 'button_set',
			'title'    => esc_html__('Layout', 'neuzin'),
			'options'  => [
				'left-sidebar'  => esc_html__('Left Sidebar', 'neuzin'),
				'full-width'    => esc_html__('Full Width', 'neuzin'),
				'right-sidebar' => esc_html__('Right Sidebar', 'neuzin'),
			],
			'default' => 'right-sidebar',
		],
		[
			'id'       => $prefix . '_sidebar',
			'type'     => 'select',
			'title'    => esc_html__('Custom Sidebar', 'neuzin'),
			'options'  => NeuzinTheme_Helper::custom_sidebar_fields(),
			'default'  => 'sidebar',
			'required' => [$prefix . '_layout', '!=', 'full-width'],
		],
		[
			'id'        => $prefix . '_padding_top',
			'type'      => 'text',
			'title'     => esc_html__('Content Padding Top', 'neuzin'),
			'validate'  => 'numeric',
			'default'   => '120',
		],
		[
			'id'        => $prefix . '_padding_bottom',
			'type'      => 'text',
			'title'     => esc_html__('Content Padding Bottom', 'neuzin'),
			'validate'  => 'numeric',
			'default'   => '120',
		],
		[
			'id'          => $prefix . '_banner_title_align',
			'type'        => 'select',
			'transparent' => false,
			'title'       => esc_html__('Banner Title Align', 'neuzin'),
			'options'     => [
				'center'  => esc_html__('Align Center', 'neuzin'),
				'left'    => esc_html__('Align Left', 'neuzin'),
				'right'   => esc_html__('Align Right', 'neuzin'),
			],
			'default'  => 'center',
		],
		[
			'id'       => $prefix . '_banner',
			'type'     => 'switch',
			'title'    => esc_html__('Banner', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => $prefix . '_breadcrumb',
			'type'     => 'switch',
			'title'    => esc_html__('Breadcrumb', 'neuzin'),
			'on'       => esc_html__('Enabled', 'neuzin'),
			'off'      => esc_html__('Disabled', 'neuzin'),
			'default'  => true,
			'required' => [$prefix . '_banner', 'equals', true],
		],

		[
			'id'       => $prefix . '_bgtype',
			'type'     => 'button_set',
			'title'    => esc_html__('Banner Background Type', 'neuzin'),
			'options'  => [
				'bgcolor'  => esc_html__('Background Color', 'neuzin'),
				'bgimg'    => esc_html__('Background Image', 'neuzin'),
			],
			'default'  => 'bgcolor',
			'subtitle' => esc_html__('Dependent on -> Banner: Banner Background Overlay opacity', 'neuzin'),
			'required' => [$prefix . '_banner', 'equals', true],
		],

		[
			'id'       => $prefix . '_bgimg',
			'type'     => 'media',
			'title'    => esc_html__('Banner Background Image', 'neuzin'),
			'default'  => [
				'url'=> NEUZIN_IMG_URL . 'banner.jpg',
			],
			'required' => [$prefix . '_bgtype', 'equals', 'bgimg'],
		],
		[
			'id'          => $prefix . '_bgcolor',
			'type'        => 'color',
			'title'       => esc_html__('Banner Background Color', 'neuzin'),
			'validate'    => 'color',
			'transparent' => false,
			'default'     => '#f8f8f8',
			'required'    => [$prefix . '_bgtype', 'equals', 'bgcolor'],
		],
		[
			'id'       => $prefix . '_page_bgimg',
			'type'     => 'media',
			'title'    => esc_html__('Page/Post Background Image', 'neuzin'),
			'default'  => [
				'url'=> '',
			],
		],
		[
			'id'          => $prefix . '_page_bgcolor',
			'type'        => 'color',
			'title'       => esc_html__('Page/Post Background Color', 'neuzin'),
			'validate'    => 'color',
			'transparent' => true,
			'default'     => '#ffffff',
		],

	];
}

Redux::setSection($opt_name, [
	'title'            => esc_html__('Layout Defaults', 'neuzin'),
	'id'               => 'layout_defaults',
	'icon'             => 'el el-th',
	]);

// Page
$neuzin_page_fields               = neuzin_redux_post_type_fields('page');
$neuzin_page_fields[0]['default'] = 'full-width';
Redux::setSection($opt_name, [
	'title'            => esc_html__('Page', 'neuzin'),
	'id'               => 'pages_section',
	'subsection'       => true,
	'fields'           => $neuzin_page_fields,
	]);

//Post Archive
$neuzin_post_archive_fields               = neuzin_redux_post_type_fields('blog');
$neuzin_post_archive_fields[0]['default'] = 'full-width';
Redux::setSection($opt_name, [
	'title'      => esc_html__('Blog / Archive', 'neuzin'),
	'id'         => 'blog_section',
	'subsection' => true,
	'fields' 	   => $neuzin_post_archive_fields,
	]);

// Single Post
$neuzin_single_post_fields = neuzin_redux_post_type_fields('single_post');
Redux::setSection($opt_name, [
	'title'      => esc_html__('Post Single', 'neuzin'),
	'id'         => 'single_post_section',
	'subsection' => true,
	'fields' 	   => $neuzin_single_post_fields,
	]);

//Services Archive
$neuzin_services_archive_fields               = neuzin_redux_post_type_fields('services_archive');
$neuzin_services_archive_fields[0]['default'] = 'full-width';
Redux::setSection($opt_name, [
	'title'      => esc_html__('Services Archive', 'neuzin'),
	'id'         => 'services_archive_section',
	'subsection' => true,
	'fields'     => $neuzin_services_archive_fields,
	]);

//Single Archive
$neuzin_services_fields               = neuzin_redux_post_type_fields('services');
$neuzin_services_fields[0]['default'] = 'full-width';
Redux::setSection($opt_name, [
	'title'      => esc_html__('Single Services', 'neuzin'),
	'id'         => 'services_section',
	'subsection' => true,
	'fields'     => $neuzin_services_fields,
]);

//Services Archive
$neuzin_portfolio_archive_fields               = neuzin_redux_post_type_fields('portfolio_archive');
$neuzin_portfolio_archive_fields[0]['default'] = 'full-width';
Redux::setSection($opt_name, [
	'title'      => esc_html__('Portfolio Archive', 'neuzin'),
	'id'         => 'portfolio_archive_section',
	'subsection' => true,
	'fields'     => $neuzin_portfolio_archive_fields,
	]);

//Single Archive
$neuzin_portfolio_fields               = neuzin_redux_post_type_fields('portfolio');
$neuzin_portfolio_fields[0]['default'] = 'full-width';
Redux::setSection($opt_name, [
	'title'      => esc_html__('Single Portfolio', 'neuzin'),
	'id'         => 'portfolio_section',
	'subsection' => true,
	'fields'     => $neuzin_portfolio_fields,
]);

// Search
$neuzin_search_fields = neuzin_redux_post_type_fields('search');

$excerpt_length = [
	[
		'id'        => 'search_excerpt_length',
		'type'      => 'text',
		'title'     => esc_html__('Search Excerpt Length', 'neuzin'),
		'validate'  => 'numeric',
		'default'   => '25',
	],
];
$neuzin_search_field_2 = array_merge($neuzin_search_fields, $excerpt_length);
Redux::setSection($opt_name, [
	'title'      => esc_html__('Search Layout', 'neuzin'),
	'id'         => 'search_section',
	'heading'    => '',
	'subsection' => true,
	'fields' 	   => $neuzin_search_field_2,
]);

// Error 404 Layout
$neuzin_error_fields = neuzin_redux_post_type_fields('error');
unset($neuzin_error_fields[0]);
$neuzin_error_fields[2]['default'] = 'full-width';
$neuzin_error_fields[2]['default'] = '120';
$neuzin_error_fields[3]['default'] = '120';
Redux::setSection(
	$opt_name,
	[
	'title'   	  => esc_html__('Error 404 Layout', 'neuzin'),
	'id'      	  => 'error_section',
	'heading' 	  => '',
	'subsection' => true,
	'fields'  	  => $neuzin_error_fields,
]
);

if (class_exists('WooCommerce')) {
	// Woocommerce Shop Archive
	$neuzin_shop_archive_fields = neuzin_redux_post_type_fields('shop');
	Redux::setSection($opt_name, [
		'title'      => esc_html__('Shop Archive', 'neuzin'),
		'id'         => 'shop_section',
		'subsection' => true,
		'fields' 	   => $neuzin_shop_archive_fields,
		]);

	// Woocommerce Product
	$neuzin_product_fields = neuzin_redux_post_type_fields('product');
	Redux::setSection($opt_name, [
		'title'      => esc_html__('Product Single', 'neuzin'),
		'id'         => 'product_section',
		'subsection' => true,
		'fields' 	   => $neuzin_product_fields,
		]);
}

// Blog Settings
Redux::setSection(
	$opt_name,
	[
	'title'            => esc_html__('Blog Settings', 'neuzin'),
	'id'               => 'blog_settings_section',
	'icon'             => 'el el-tags',
	'heading'          => '',
	'fields'           => [
		[
			'id'       => 'blog_style',
			'type'     => 'image_select',
			'title'    => esc_html__('Blog/Archive Layout', 'neuzin'),
			'default'  => 'style1',
			'options'  => [
				'style1' => [
					'title' => '<b>' . esc_html__('Layout 1', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'blog1.png',
				],
				'style2' => [
					'title' => '<b>' . esc_html__('Layout 2', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'blog3.png',
				],
				'style3' => [
					'title' => '<b>' . esc_html__('Layout 3', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'blog1.png',
				],
			],
		],
		[
			'id'       => 'post_banner_title',
			'type'     => 'text',
			'title'    => esc_html__('Enter the Post Banner Title', 'neuzin'),
			'default'  => esc_html__('', 'neuzin'),
		],
		[
			'id'       => 'post_content_limit',
			'type'     => 'text',
			'title'    => esc_html__('Post Content Limit', 'neuzin'),
			'default'  => 20,
		],
		[
			'id'       => 'blog_date',
			'type'     => 'switch',
			'title'    => esc_html__('Show Date', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'blog_author_name',
			'type'     => 'switch',
			'title'    => esc_html__('Show Author Name', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'blog_comment_num',
			'type'     => 'switch',
			'title'    => esc_html__('Show Comment Number', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'blog_cats',
			'type'     => 'switch',
			'title'    => esc_html__('Show Categories', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'blog_view',
			'type'     => 'switch',
			'title'    => esc_html__('Show Views', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'blog_length',
			'type'     => 'switch',
			'title'    => esc_html__('Show Reading Length Active', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => false,
		],
	],
]
);

// Post Settings
Redux::setSection(
	$opt_name,
	[
	'title'            => esc_html__('Post Settings', 'neuzin'),
	'id'               => 'post_settings_section',
	'icon'             => 'el el-file-edit',
	'heading'          => '',
	'fields'           => [
		[
			'id'       => 'section-submenu-2',
			'type'     => 'section',
			'title'    => esc_html__('Single Post/news Layout Style', 'neuzin'),
			'indent'   => true,
		],
		[
			'id'       => 'post_style',
			'type'     => 'image_select',
			'title'    => esc_html__('Single Post Layout', 'neuzin'),
			'default'  => 'style1',
			'options'  => [
				'style1' => [
					'title' => '<b>' . esc_html__('Layout 1', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'post-style-1.png',
				],
				'style2' => [
					'title' => '<b>' . esc_html__('Layout 2', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'post-style-3.png',
				],
			],
		],
		[
			'id'       => 'section-submenu-3',
			'type'     => 'section',
			'title'    => esc_html__('single Post info Settings', 'neuzin'),
			'indent'   => true,
		],
		[
			'id'       => 'post_featured_image',
			'type'     => 'switch',
			'title'    => esc_html__('Show Featured Image', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'post_author_name',
			'type'     => 'switch',
			'title'    => esc_html__('Show Author Name', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'post_date',
			'type'     => 'switch',
			'title'    => esc_html__('Show Post Date', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'time_format',
			'type'     => 'select',
			'title'    => esc_html__('Modern', 'neuzin'),
			'subtitle' => esc_html__('Simple Date format', 'neuzin'),
			'options'  => [
				'modern' => esc_html__('Modern', 'neuzin'),
				'none'   => esc_html__('None', 'neuzin'),
			],
			'default'  => true,
		],
		[
			'id'       => 'post_comment_num',
			'type'     => 'switch',
			'title'    => esc_html__('Show Comment Number', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'post_cats',
			'type'     => 'switch',
			'title'    => esc_html__('Show Categories', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'post_tags',
			'type'     => 'switch',
			'title'    => esc_html__('Show Tags', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'post_share',
			'type'     => 'switch',
			'title'    => esc_html__('Show Share', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'post_author_bio',
			'type'     => 'switch',
			'title'    => esc_html__('Show Author Bio', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'post_view',
			'type'     => 'switch',
			'title'    => esc_html__('Show/hide Post View', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'subtitle' => esc_html__('Show or hide post views count number', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'post_length',
			'type'     => 'switch',
			'title'    => esc_html__('Post Reading Length Active', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'section_post_related',
			'type'     => 'section',
			'title'    => esc_html__('Related Post Settings', 'neuzin'),
			'indent'   => true,
		],
		[
			'id'       => 'show_related_post',
			'type'     => 'switch',
			'title'    => esc_html__('Show Related product', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'show_related_post_cat',
			'type'     => 'switch',
			'title'    => esc_html__('Show Related product Category', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'show_related_post_date',
			'type'     => 'switch',
			'title'    => esc_html__('Show Related product Date', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'show_related_post_number',
			'type'     => 'text',
			'title'    => esc_html__('Show Related Post Number', 'neuzin'),
			'default'  => esc_html__('5', 'neuzin'),
		],
		[
			'id'       => 'related_post_query',
			'type'     => 'radio',
			'title'    => esc_html__('Query Type', 'neuzin'),
			'subtitle' => esc_html__('Post Query', 'neuzin'),
			'options'  => [
				'cat'    => esc_html__('Posts in the same Categories', 'neuzin'),
				'tag'    => esc_html__('Posts in the same Tags', 'neuzin'),
				'author' => esc_html__('Posts by the same Author', 'neuzin'),
			],
			'default' => 'cat',
		],
		[
			'id'       => 'related_post_sort',
			'type'     => 'radio',
			'title'    => esc_html__('Sort Order', 'neuzin'),
			'subtitle' => esc_html__('Display post Order', 'neuzin'),
			'options'  => [
				'recent'   => esc_html__('Recent Posts', 'neuzin'),
				'rand'     => esc_html__('Random Posts', 'neuzin'),
				'modified' => esc_html__('Last Modified Posts', 'neuzin'),
				'popular'  => esc_html__('Most Commented posts', 'neuzin'),
				'views'    => esc_html__('Most Viewed posts', 'neuzin'),
			],
			'default' => 'recent',
		],
		[
			'id'       => 'show_related_post_title_limit',
			'type'     => 'text',
			'title'    => esc_html__('Show Related Post Title Length', 'neuzin'),
			'default'  => esc_html__('8', 'neuzin'),
		],
	],
]
);

// Post Sharing Settings
Redux::setSection(
	$opt_name,
	[
	'title'            => esc_html__('Post Sharing Option', 'neuzin'),
	'id'               => 'post_sharing_section',
	'icon'             => 'el el-file-edit',
	'heading'          => '',
	'fields'           => [
		[
			'id'       => 'section-submenu-3',
			'type'     => 'section',
			'title'    => esc_html__('Single Post/news Sharing Option', 'neuzin'),
			'indent'   => true,
		],
		[
			'id'       => 'post_share_facebook',
			'type'     => 'switch',
			'title'    => esc_html__('Show Facebook Share Button', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'post_share_twitter',
			'type'     => 'switch',
			'title'    => esc_html__('Show Twitter Share Button', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'post_share_google',
			'type'     => 'switch',
			'title'    => esc_html__('Show Google Share Button', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'post_share_linkedin',
			'type'     => 'switch',
			'title'    => esc_html__('Show Linkedin Share Button', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'post_share_whatsapp',
			'type'     => 'switch',
			'title'    => esc_html__('Show Whatsapp Share Button', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'post_share_stumbleupon',
			'type'     => 'switch',
			'title'    => esc_html__('Show Stumbleupon Share Button', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'post_share_tumblr',
			'type'     => 'switch',
			'title'    => esc_html__('Show Tumblr Share Button', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'post_share_pinterest',
			'type'     => 'switch',
			'title'    => esc_html__('Show Pinterest Share Button', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'post_share_reddit',
			'type'     => 'switch',
			'title'    => esc_html__('Show Reddit Share Button', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'post_share_email',
			'type'     => 'switch',
			'title'    => esc_html__('Show Email Share Button', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'post_share_print',
			'type'     => 'switch',
			'title'    => esc_html__('Show Print Share Button', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => false,
		],
	],
]
);

// Team Settings
Redux::setSection(
	$opt_name,
	[
	'title'            => esc_html__('Team Settings', 'neuzin'),
	'id'               => 'team_settings_section',
	'icon'             => 'el el-file-edit',
	'heading'          => '',
	'fields'           => [
		 [
			'id'       => 'team-section-archive-1',
			'type'     => 'section',
			'title'    => esc_html__('Team Archive Settings', 'neuzin'),
			'indent'   => true,
		],

		[
			'id'       => 'team_style',
			'type'     => 'image_select',
			'title'    => esc_html__('Team Archive Layout', 'neuzin'),
			'default'  => 'style1',
			'options'  => [
				'style1' => [
					'title' => '<b>' . esc_html__('Layout 1', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'blog1.png',
				],
				'style2' => [
					'title' => '<b>' . esc_html__('Layout 2', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'blog3.png',
				],
			],
		],

		[
			'id'       => 'team_excerpt_display',
			'type'     => 'switch',
			'title'    => esc_html__('Team Archive Content', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'team_content_limit',
			'type'     => 'text',
			'title'    => esc_html__('Team Archive Content Limit', 'neuzin'),
			'default'  => '12',
			'required' => ['team_excerpt_display', 'equals', true],
		],
		[
			'id'       => 'team_desi_display',
			'type'     => 'switch',
			'title'    => esc_html__('Team Designation', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'team_social_display',
			'type'     => 'switch',
			'title'    => esc_html__('Team Social', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],

	],
]
);

// Portfolio Settings
Redux::setSection(
	$opt_name,
	[
	'title'            => esc_html__('Portfolio Settings', 'neuzin'),
	'id'               => 'portfolio_settings_section',
	'icon'             => 'el el-file-edit',
	'heading'          => '',
	'fields'           => [
		 [
			'id'       => 'portfolio-section-archive-1',
			'type'     => 'section',
			'title'    => esc_html__('Portfolio Archive Settings', 'neuzin'),
			'indent'   => true,
		],		

		[
			'id'       => 'portfolio_excerpt_display',
			'type'     => 'switch',
			'title'    => esc_html__('portfolio Archive Contact', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'portfolio_excerpt_display_limit',
			'type'     => 'text',
			'title'    => esc_html__('Service Archive Contact Limit', 'neuzin'),
			'default'  => '12',
			'required' => ['portfolio_excerpt_display', 'equals', true],
		],
		 [
			'id'       => 'portfolio_cat_display',
			'type'     => 'switch',
			'title'    => esc_html__('Portfolio Archive Categories', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],

		[
			'id'       => 'section-portfolio-1',
			'type'     => 'section',
			'title'    => esc_html__('Single Portfolio info Settings', 'neuzin'),
			'indent'   => true,
		],
		
		[
			'id'       => 'portfolio_style',
			'type'     => 'image_select',
			'title'    => esc_html__('Portfolio Single Layout', 'neuzin'),
			'default'  => 'style1',
			'options'  => [
				'style1' => [
					'title' => '<b>' . esc_html__('Layout 1', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'blog1.png',
				],
				'style2' => [
					'title' => '<b>' . esc_html__('Layout 2', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'blog3.png',
				],
				'style3' => [
					'title' => '<b>' . esc_html__('Layout 3', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'blog2.png',
				],
			],
		],
		[
			'id'       => 'port_info_title',
			'type'     => 'switch',
			'title'    => esc_html__('Show Info Title', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'port_info_des',
			'type'     => 'switch',
			'title'    => esc_html__('Show Info Descrption', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'port_client',
			'type'     => 'switch',
			'title'    => esc_html__('Show Client', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'port_start_date',
			'type'     => 'switch',
			'title'    => esc_html__('Start Date', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'port_finish_date',
			'type'     => 'switch',
			'title'    => esc_html__('Finish Date', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'port_website',
			'type'     => 'switch',
			'title'    => esc_html__('Website', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'port_cats',
			'type'     => 'switch',
			'title'    => esc_html__('Show Categories', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'port_tags',
			'type'     => 'switch',
			'title'    => esc_html__('Show Tags', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'port_share',
			'type'     => 'switch',
			'title'    => esc_html__('Show Share', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'port_rating',
			'type'     => 'switch',
			'title'    => esc_html__('Show Rating', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => false,
		],

		/*portfolio related post*/
		[
			'id'       => 'section_port_related',
			'type'     => 'section',
			'title'    => esc_html__('Related Portfolio Settings', 'neuzin'),
			'indent'   => true,
		],
		[
			'id'       => 'show_related_port',
			'type'     => 'switch',
			'title'    => esc_html__('Show Related product', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => false,
		],
		[
			'id'       => 'show_related_port_cat',
			'type'     => 'switch',
			'title'    => esc_html__('Show Related product Category', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => false,
			'required' => ['show_related_port', 'equals', true],
		],
		[
			'id'       => 'show_related_port_number',
			'type'     => 'text',
			'title'    => esc_html__('Show Related Post Number', 'neuzin'),
			'default'  => esc_html__('5', 'neuzin'),
			'required' => ['show_related_port', 'equals', true],
		],
		[
			'id'       => 'show_related_port_title_limit',
			'type'     => 'text',
			'title'    => esc_html__('Show Related Post Title Length', 'neuzin'),
			'default'  => esc_html__('8', 'neuzin'),
			'required' => ['show_related_port', 'equals', true],
		],
	],
]
);

// Case Study Settings
Redux::setSection(
	$opt_name,
	[
	'title'            => esc_html__('Service Info Settings', 'neuzin'),
	'id'               => 'service_settings_section',
	'icon'             => 'el el-file-edit',
	'heading'          => '',
	'fields'           => [

		[
			'id'       => 'services-section-archive-1',
			'type'     => 'section',
			'title'    => esc_html__('Services Archive Info', 'neuzin'),
			'indent'   => true,
		],

		 [
			'id'       => 'services_style',
			'type'     => 'image_select',
			'title'    => esc_html__('Services Archive Layout', 'neuzin'),
			'default'  => 'style1',
			'options'  => [
				'style1' => [
					'title' => '<b>' . esc_html__('Layout 1', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'blog1.png',
				],
				'style2' => [
					'title' => '<b>' . esc_html__('Layout 2', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'blog3.png',
				],
				'style3' => [
					'title' => '<b>' . esc_html__('Layout 3', 'neuzin') . '</b>',
					'img'   => NEUZIN_IMG_URL . 'blog1.png',
				],
			],
		],

		[
			'id'       => 'excerpt_display',
			'type'     => 'switch',
			'title'    => esc_html__('Service Archive Contact', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'excerpt_display_limit',
			'type'     => 'text',
			'title'    => esc_html__('Service Archive Contact Limit', 'neuzin'),
			'default'  => '12',
			'required' => ['excerpt_display', 'equals', true],
		],
		[
			'id'       => 'read_display',
			'type'     => 'switch',
			'title'    => esc_html__('Service Read More', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'service_readmore_text',
			'type'     => 'text',
			'title'    => esc_html__('Read More Text', 'neuzin'),
			'default'  => 'Read More',
			'required' => ['read_display', 'equals', true],
		],
		[
			'id'       => 'section-case-1',
			'type'     => 'section',
			'title'    => esc_html__('Single Service info', 'neuzin'),
			'indent'   => true,
		],
		[
			'id'       => 'service_contact',
			'type'     => 'switch',
			'title'    => esc_html__('Service Contact', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'service_email',
			'type'     => 'switch',
			'title'    => esc_html__('Service Email', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
		[
			'id'       => 'service_button',
			'type'     => 'switch',
			'title'    => esc_html__('Service Button', 'neuzin'),
			'on'       => esc_html__('On', 'neuzin'),
			'off'      => esc_html__('Off', 'neuzin'),
			'default'  => true,
		],
	],
]
);
// Error
$neuzin_fields2 = [
	[
		'id'       => 'error_title',
		'type'     => 'text',
		'title'    => esc_html__('Page Title', 'neuzin'),
		'default'  => esc_html__('Error 404', 'neuzin'),
	],
	[
		'id'          => 'error_bodybg',
		'type'        => 'color',
		'transparent' => false,
		'title'       => esc_html__('Body Background Color', 'neuzin'),
		'default'     => '#ffffff',
	],
	[
		'id'       => 'error_bodybanner',
		'type'     => 'media',
		'title'    => esc_html__('Body Banner', 'neuzin'),
		'default'  => [
			'url'=> NEUZIN_IMG_URL . '404.png',
		],
	],
	[
		'id'       => 'error_text1',
		'type'     => 'text',
		'title'    => esc_html__('Body Text 1', 'neuzin'),
		'default'  => esc_html__('Sorry! Page Was Not Found', 'neuzin'),
	],
	[
		'id'       => 'error_text2',
		'type'     => 'text',
		'title'    => esc_html__('Body Text 2', 'neuzin'),
		'default'  => esc_html__('The page you are looking is not available or has been removed. Try going to Home Page by using the button below.', 'neuzin'),
	],
	[
		'id'          => 'error_text1_color',
		'type'        => 'color',
		'transparent' => false,
		'title'       => esc_html__('Body Text 1 Color', 'neuzin'),
		'default'     => '#1d2124',
	],
	[
		'id'          => 'error_text2_color',
		'type'        => 'color',
		'transparent' => false,
		'title'       => esc_html__('Body Text 2 Color', 'neuzin'),
		'default'     => '#646464',
	],
	[
		'id'       => 'error_buttontext',
		'type'     => 'text',
		'title'    => esc_html__('Button Text', 'neuzin'),
		'default'  => esc_html__('Go Back To Home', 'neuzin'),
	],

	[
		'id'       => 'error_page_animation',
		'type'     => 'switch',
		'title'    => esc_html__('Show Animation', 'neuzin'),
		'on'       => esc_html__('On', 'neuzin'),
		'off'      => esc_html__('Off', 'neuzin'),
		'default'  => true,
	],
];
Redux::setSection(
	$opt_name,
	[
	'title'   => esc_html__('Error Page Settings', 'neuzin'),
	'id'      => 'error_srttings_section',
	'heading' => '',
	'icon'    => 'el el-error-alt',
	'fields'  => $neuzin_fields2,
]
);

if (class_exists('WooCommerce')) {
	// Woocommerce Settings
	Redux::setSection(
		$opt_name,
		[
		'title'   => esc_html__('WooCommerce', 'neuzin'),
		'id'      => 'woo_Settings_section',
		'heading' => '',
		'icon'    => 'el el-shopping-cart',
		'fields'  => [
			[
				'id'       => 'wc_sec_general',
				'type'     => 'section',
				'title'    => esc_html__('General', 'neuzin'),
				'indent'   => true,
			],
			[
				'id'       => 'wc_num_product',
				'type'     => 'text',
				'title'    => esc_html__('Number of Products Per Page', 'neuzin'),
				'default'  => '12',
			],
			[
			   'id'       => 'wc_num_product_shop_page',
			   'type'     => 'text',
			   'title'    => esc_html__('Number of Products on Shop Page', 'neuzin'),
			   'default'  => '4',
			],
			[
				'id'       => 'wc_product_hover',
				'type'     => 'switch',
				'title'    => esc_html__('Product Hover Effect', 'neuzin'),
				'on'       => esc_html__('Enabled', 'neuzin'),
				'off'      => esc_html__('Disabled', 'neuzin'),
				'default'  => true,
			],
			[
				'id'       => 'wc_wishlist_icon',
				'type'     => 'switch',
				'title'    => esc_html__('Product Add to Wishlist Icon', 'neuzin'),
				'on'       => esc_html__('Enabled', 'neuzin'),
				'off'      => esc_html__('Disabled', 'neuzin'),
				'default'  => true,
				'required' => ['wc_product_hover', 'equals', true],
			],
			[
				'id'       => 'wc_quickview_icon',
				'type'     => 'switch',
				'title'    => esc_html__('Product Quickview Icon', 'neuzin'),
				'on'       => esc_html__('Enabled', 'neuzin'),
				'off'      => esc_html__('Disabled', 'neuzin'),
				'default'  => true,
				'required' => ['wc_product_hover', 'equals', true],
			],
			[
				'id'       => 'wc_compare_icon',
				'type'     => 'switch',
				'title'    => esc_html__('Product Compare Icon', 'neuzin'),
				'on'       => esc_html__('Enabled', 'neuzin'),
				'off'      => esc_html__('Disabled', 'neuzin'),
				'default'  => true,
				'required' => ['wc_product_hover', 'equals', true],
			],
			[
				'id'       => 'wc_sec_product',
				'type'     => 'section',
				'title'    => esc_html__('Product Single Page', 'neuzin'),
				'indent'   => true,
			],
			[
				'id'       => 'wc_show_excerpt',
				'type'     => 'switch',
				'title'    => esc_html__("Show excerpt when short description doesn't exist", 'neuzin'),
				'on'       => esc_html__('Enabled', 'neuzin'),
				'off'      => esc_html__('Disabled', 'neuzin'),
				'default'  => true,
			],
			[
				'id'       => 'wc_cats',
				'type'     => 'switch',
				'title'    => esc_html__('Categories', 'neuzin'),
				'on'       => esc_html__('Show', 'neuzin'),
				'off'      => esc_html__('Hide', 'neuzin'),
				'default'  => true,
			],
			[
				'id'       => 'wc_tags',
				'type'     => 'switch',
				'title'    => esc_html__('Tags', 'neuzin'),
				'on'       => esc_html__('Show', 'neuzin'),
				'off'      => esc_html__('Hide', 'neuzin'),
				'default'  => true,
			],
			[
				'id'       => 'wc_share',
				'type'     => 'switch',
				'title'    => esc_html__('Share', 'neuzin'),
				'on'       => esc_html__('Show', 'neuzin'),
				'off'      => esc_html__('Hide', 'neuzin'),
				'default'  => true,
			],
			[
				'id'       => 'wc_related',
				'type'     => 'switch',
				'title'    => esc_html__('Related Products', 'neuzin'),
				'on'       => esc_html__('Show', 'neuzin'),
				'off'      => esc_html__('Hide', 'neuzin'),
				'default'  => true,
			],
			[
				'id'       => 'wc_description',
				'type'     => 'switch',
				'title'    => esc_html__('Description Tab', 'neuzin'),
				'on'       => esc_html__('Show', 'neuzin'),
				'off'      => esc_html__('Hide', 'neuzin'),
				'default'  => true,
			],
			[
				'id'       => 'wc_reviews',
				'type'     => 'switch',
				'title'    => esc_html__('Reviews Tab', 'neuzin'),
				'on'       => esc_html__('Show', 'neuzin'),
				'off'      => esc_html__('Hide', 'neuzin'),
				'default'  => true,
			],
			[
				'id'       => 'wc_additional_info',
				'type'     => 'switch',
				'title'    => esc_html__('Additional Information Tab', 'neuzin'),
				'on'       => esc_html__('Show', 'neuzin'),
				'off'      => esc_html__('Hide', 'neuzin'),
				'default'  => true,
			],
			[
				'id'       => 'wc_related_title',
				'type'     => 'text',
				'title'    => esc_html__('Related Title', 'neuzin'),
				'default'  => esc_html__('Related Products', 'neuzin'),
			],
			[
				'id'       => 'wc_related_subtitle',
				'type'     => 'textarea',
				'title'    => esc_html__('Related Sub Title', 'neuzin'),
				'default'  => esc_html__('Perspiciatis unde omnis iste natus error sit voluptatem accusantium dol oremque laudantium, totam remeaque ipsa.', 'neuzin'),
			],
			[
				'id'       => 'wc_sec_cart',
				'type'     => 'section',
				'title'    => esc_html__('Cart Page', 'neuzin'),
				'indent'   => true,
			],
			[
				'id'       => 'wc_cross_sell',
				'type'     => 'switch',
				'title'    => esc_html__('Cross Sell Products', 'neuzin'),
				'on'       => esc_html__('Show', 'neuzin'),
				'off'      => esc_html__('Hide', 'neuzin'),
				'default'  => true,
			],
		],
	]
	);
}

do_action('rt_after_redux_options_loaded');
// -> END Fields
