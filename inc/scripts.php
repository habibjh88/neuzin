<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */

use Elementor\Plugin;


function neuzin_get_maybe_rtl( $filename ) {
	$file = get_template_directory_uri() . '/assets/';
	if ( is_rtl() ) {
		return $file . 'css-auto-rtl/' . $filename;
	} else {
		return $file . 'css/' . $filename;
	}
}

add_action( 'wp_enqueue_scripts', 'neuzin_enqueue_high_priority_scripts', 1500 );
function neuzin_enqueue_high_priority_scripts() {
	if ( is_rtl() ) {
		wp_enqueue_style( 'neuzin-rtl', NEUZIN_CSS_URL . 'rtl.css', array(), NEUZIN_VERSION );
	}
}

//add_action( 'wp_enqueue_scripts', 'neuzin_register_scripts', 12 );
if ( ! function_exists( 'neuzin_register_scripts' ) ) {
	function neuzin_register_scripts() {
		wp_deregister_style( 'font-awesome' );
		wp_deregister_style( 'layerslider-font-awesome' );
		wp_deregister_style( 'yith-wcwl-font-awesome' );

		/*CSS*/
		// owl.carousel CSS
		/*
		wp_register_style( 'owl-carousel',       NEUZIN_CSS_URL . 'owl.carousel.min.css', array(), NEUZIN_VERSION );
		wp_register_style( 'owl-theme-default',  NEUZIN_CSS_URL . 'owl.theme.default.min.css', array(), NEUZIN_VERSION );
		wp_register_style( 'magnific-popup',     neuzin_get_maybe_rtl('magnific-popup.css'), array(), NEUZIN_VERSION );
		wp_register_style( 'nivo-slider',        neuzin_get_maybe_rtl('nivo-slider.min.css'), array(), NEUZIN_VERSION );
		wp_register_style( 'animate',        	 neuzin_get_maybe_rtl('animate.min.css'), array(), NEUZIN_VERSION );
		wp_register_style( 'jquery-timepicker',  neuzin_get_maybe_rtl('jquery.timepicker.min.css'), array(), NEUZIN_VERSION );
		wp_register_style( 'jquery-pagepiling',  neuzin_get_maybe_rtl('jquery.pagepiling.min.css'), array(), NEUZIN_VERSION );*/


		//wp_register_style( 'neuzin-main',  get_template_directory_uri() . '/assets/build/styles.min.css', array(), NEUZIN_VERSION );

		/*JS*/
		// owl.carousel.min js
		/*
		 wp_register_script( 'owl-carousel',      NEUZIN_JS_URL . 'owl.carousel.min.js', array( 'jquery' ), NEUZIN_VERSION, true );
		wp_register_script( 'nivo-slider',       NEUZIN_JS_URL . 'jquery.nivo.slider.min.js', array( 'jquery' ), NEUZIN_VERSION, true );
		wp_register_script( 'rt-waypoints',      NEUZIN_JS_URL . 'waypoints.min.js', array( 'jquery' ), NEUZIN_VERSION, true );
		wp_register_script( 'jquery-counterup',  NEUZIN_JS_URL . 'jquery.counterup.min.js', array( 'jquery' ), NEUZIN_VERSION, true );
		wp_register_script( 'jquery-knob',       NEUZIN_JS_URL . 'jquery.knob.js', array( 'jquery' ), NEUZIN_VERSION, true );
		wp_register_script( 'jquery-appear',     NEUZIN_JS_URL . 'jquery.appear.js', array( 'jquery' ), NEUZIN_VERSION, true );
		wp_register_script( 'magnific-popup',    NEUZIN_JS_URL . 'jquery.magnific-popup.min.js', array( 'jquery' ), NEUZIN_VERSION, true );
		wp_register_script( 'theia-sticky',    	 NEUZIN_JS_URL . 'theia-sticky-sidebar.min.js', array( 'jquery' ), NEUZIN_VERSION, true );
		wp_register_script( 'isotope-pkgd',      NEUZIN_JS_URL . 'isotope.pkgd.min.js', array( 'jquery' ), NEUZIN_VERSION, true );
		wp_register_script( 'isotope-func',      NEUZIN_JS_URL . 'isotope-func.js', array( 'jquery' ), NEUZIN_VERSION, true );
		wp_register_script( 'jquery-timepicker', NEUZIN_JS_URL . 'jquery.timepicker.min.js', array( 'jquery' ), NEUZIN_VERSION, true );
		wp_register_script( 'tilt-jquery',       NEUZIN_JS_URL . 'tilt.jquery.js', array( 'jquery' ), NEUZIN_VERSION, true );
		wp_register_script( 'parallax-scroll',  NEUZIN_JS_URL . 'jquery.parallax-scroll.js', array( 'jquery' ), NEUZIN_VERSION, true );
		wp_register_script( 'jquery-pagepiling', NEUZIN_JS_URL . 'jquery.pagepiling.min.js', array( 'jquery' ), NEUZIN_VERSION, true );
		*/
	}
}

add_action( 'wp_enqueue_scripts', 'neuzin_enqueue_scripts', 15 );
if ( ! function_exists( 'neuzin_enqueue_scripts' ) ) {
	function neuzin_enqueue_scripts() {
		$dep = array( 'jquery' );
		/*CSS*/
		// Google fonts
		wp_enqueue_style( 'neuzin-gfonts', NeuzinTheme_Helper::fonts_url(), array(), NEUZIN_VERSION );

		/*
		// Bootstrap CSS  //@rtl
		wp_enqueue_style( 'bootstrap', 			neuzin_get_maybe_rtl('bootstrap.min.css'), array(), NEUZIN_VERSION );

		// Flaticon CSS
		wp_enqueue_style( 'flaticon-neuzin',    NEUZIN_ASSETS_URL . 'fonts/flaticon-neuzin/flaticon.css', array(), NEUZIN_VERSION );

		elementor_scripts();
		wp_enqueue_style( 'nivo-slider' );
		//Video popup
		wp_enqueue_style( 'magnific-popup' );
		// font-awesome CSS
		wp_enqueue_style( 'font-awesome',       NEUZIN_CSS_URL . 'font-awesome.min.css', array(), NEUZIN_VERSION );
		// animate CSS
		wp_enqueue_style( 'animate',            neuzin_get_maybe_rtl('animate.min.css'), array(), NEUZIN_VERSION );
		// Select 2 CSS
		wp_enqueue_style( 'select2',            neuzin_get_maybe_rtl('select2.min.css'), array(), NEUZIN_VERSION );
		// main CSS // @rtl
		wp_enqueue_style( 'neuzin-default',    	neuzin_get_maybe_rtl('default.css'), array(), NEUZIN_VERSION );
		// elementor css
		wp_enqueue_style( 'neuzin-elementor',   neuzin_get_maybe_rtl('elementor.css'), array(), NEUZIN_VERSION );
		// rt-animation css
		wp_enqueue_style( 'neuzin-rtanimation', neuzin_get_maybe_rtl('rtanimation.css'), array(), NEUZIN_VERSION );
		*/

		// Style CSS
		wp_enqueue_style( 'neuzin-main', get_template_directory_uri() . '/assets/build/styles.min.css', array(), NEUZIN_VERSION );
		wp_add_inline_style( 'neuzin-main',   	neuzin_template_style() );

		//wp_enqueue_script( 'isotope-pkgd' );
		//wp_enqueue_script( 'popper', NEUZIN_JS_URL . 'popper.js', array( 'jquery' ), NEUZIN_VERSION, true );
		//wp_enqueue_script( 'bootstrap', NEUZIN_JS_URL . 'bootstrap.min.js', array( 'jquery' ), NEUZIN_VERSION, true );

		// Comments
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
		// Select2 js
		/*wp_enqueue_script( 'select2', NEUZIN_JS_URL . 'select2.min.js', array( 'jquery' ), NEUZIN_VERSION, true );
		wp_enqueue_script( 'jquery-navpoint', NEUZIN_JS_URL . 'jquery.navpoints.js', array( 'jquery' ), NEUZIN_VERSION, true );
		wp_enqueue_script( 'jquery-countdown', NEUZIN_JS_URL . 'jquery.countdown.min.js', array( 'jquery' ), NEUZIN_VERSION, true );
		wp_enqueue_script( 'js-cookie', NEUZIN_JS_URL . 'js.cookie.min.js', array( 'jquery' ), NEUZIN_VERSION, true );
		wp_enqueue_script( 'nivo-slider' );
		wp_enqueue_script( 'theia-sticky' );
//		wp_enqueue_style( 'jquery-timepicker' );
		wp_enqueue_script( 'jquery-timepicker' );
		wp_enqueue_script( 'tilt-jquery' );
		wp_enqueue_script( 'parallax-scroll' );
		wp_enqueue_script( 'magnific-popup' );

		wp_enqueue_script( 'masonry' );*/

		wp_enqueue_script( 'neuzin-main', get_template_directory_uri() . 'build/', $dep, NEUZIN_VERSION, true );

		if ( ! empty( NeuzinTheme::neuzin_options( 'logo' )['url'] ) ) {
			$logo = '<img class="logo-small" src="' . esc_url( empty( NeuzinTheme::neuzin_options( 'logo' )['url'] ) ? NEUZIN_IMG_URL . 'logo.png' : NeuzinTheme::neuzin_options( 'logo' )['url'] ) . '" />';
		} else {
			$logo = '<img class="logo-small" src="' . esc_url( NEUZIN_IMG_URL . 'logo.png' ) . '" />';
		}

		$html = '';

		if ( NeuzinTheme::neuzin_options( 'online_button' ) == '1' ) {
			$html .= '<a class="button-btn" target="_self" href="' . esc_url( NeuzinTheme::neuzin_options( 'online_button_link' ) ) . '">' . esc_html( NeuzinTheme::neuzin_options( 'online_button_text' ) ) . '</a>';
		}

		if ( NeuzinTheme::neuzin_options( 'search_icon' ) ) {
			ob_start();
			get_template_part( 'template-parts/header/icon', 'barsearch' );
			$html .= ob_get_clean();
		}

		if ( NeuzinTheme::neuzin_options( 'cart_icon' ) ) {
			ob_start();
			get_template_part( 'template-parts/header/icon', 'cart' );
			$html .= ob_get_clean();
		}


		// localize script
		$neuzin_localize_data = array(
			'stickyMenu'        => NeuzinTheme::neuzin_options( 'sticky_menu' ),
			'meanWidth'         => NeuzinTheme::neuzin_options( 'resmenu_width' ),
			'siteLogo'          => '<a href="' . esc_url( home_url( '/' ) ) . '" alt="' . esc_attr( get_bloginfo( 'title' ) ) . '">' . esc_html( $logo ) . '</a>' . $html,
			'extraOffset'       => NeuzinTheme::neuzin_options( 'sticky_menu' ) ? 70 : 0,
			'extraOffsetMobile' => NeuzinTheme::neuzin_options( 'sticky_menu' ) ? 52 : 0,
			'rtl'               => is_rtl() ? 'yes' : 'no',

			// Ajax
			'ajaxURL'           => admin_url( 'admin-ajax.php' ),
			'nonce'             => wp_create_nonce( 'neuzin-nonce' )
		);
		wp_localize_script( 'neuzin-main', 'neuzinObj', $neuzin_localize_data );
	}
}


function elementor_scripts() {

	if ( ! did_action( 'elementor/loaded' ) ) {
		return;
	}

	if ( \Elementor\Plugin::$instance->preview->is_preview_mode() ) {
		// do stuff for preview
		wp_enqueue_style( 'owl-carousel' );
		wp_enqueue_style( 'owl-theme-default' );
		wp_enqueue_script( 'owl-carousel' );

		if ( is_page_template( 'page-template/template-pagepiling.php' ) ) {
			wp_enqueue_script( 'jquery-pagepiling' );
			wp_enqueue_style( 'jquery-pagepiling' );
		}

		wp_enqueue_style( 'nivo-slider' );
		wp_enqueue_script( 'nivo-slider' );
		wp_enqueue_style( 'jquery-timepicker' );
		wp_enqueue_script( 'timepicker-js' );
		wp_enqueue_script( 'jquery-knob' );
		wp_enqueue_script( 'jquery-appear' );
		wp_enqueue_script( 'jquery-counterup' );
		wp_enqueue_script( 'rt-waypoints' );
		wp_enqueue_script( 'isotope-pkgd' );
		wp_enqueue_script( 'isotope-func' );
	}

}

add_action( 'wp_enqueue_scripts', 'neuzin_high_priority_scripts', 1500 );
if ( ! function_exists( 'neuzin_high_priority_scripts' ) ) {
	function neuzin_high_priority_scripts() {
		// Dynamic style
		NeuzinTheme_Helper::dynamic_internal_style();
	}
}

function neuzin_template_style() {
	ob_start();
	$footer_bg_img = empty( NeuzinTheme::neuzin_options( 'fbgimg' )['url'] ) ? NEUZIN_IMG_URL . 'footer1_bg.png' : NeuzinTheme::neuzin_options( 'fbgimg' )['url'];

	$footer2_bg_img = empty( NeuzinTheme::neuzin_options( 'footer2_bottom_img' )['url'] ) ? NEUZIN_IMG_URL . 'footer2_bg.png' : NeuzinTheme::neuzin_options( 'footer2_bottom_img' )['url'];
	?>

	.entry-banner {
	<?php if ( NeuzinTheme::$bgtype == 'bgcolor' ): ?>
		background-color: <?php echo esc_html( NeuzinTheme::$bgcolor ); ?>;
	<?php else: ?>
		background: url(<?php echo esc_url( NeuzinTheme::$bgimg ); ?>) no-repeat scroll center center / cover;
	<?php endif; ?>
	}

	.entry-banner .entry-banner-content {
	text-align: <?php echo NeuzinTheme::$has_banner_align; ?>;
	}

	.footer-top-area {
	<?php if ( NeuzinTheme::neuzin_options( 'footer_bgtype' ) == 'fbgcolor' ): ?>
		background-color: <?php echo esc_html( NeuzinTheme::neuzin_options( 'fbgcolor' ) ); ?> !important;
	<?php else: ?>
		background: url(<?php echo esc_url( $footer_bg_img ); ?>) no-repeat scroll center center / cover;
	<?php endif; ?>
	}

	.footer-style-2 .footer-area {
	<?php if ( NeuzinTheme::neuzin_options( 'footer2_bottom_img_display' ) == 1 ): ?>
		background: url(<?php echo esc_url( $footer2_bg_img ); ?>) no-repeat scroll center bottom;
	<?php endif; ?>
	}

	.content-area {
	padding-top: <?php echo esc_html( NeuzinTheme::$padding_top ); ?>px;
	padding-bottom: <?php echo esc_html( NeuzinTheme::$padding_bottom ); ?>px;
	}
	#page {
	background: url( <?php echo NeuzinTheme::$pagebgimg; ?> );
	background-color: <?php echo NeuzinTheme::$pagebgcolor; ?>;
	}
	.single-neuzin_team #page {
	background-image: none;
	background-color: transparent;
	}
	.single-neuzin_team .site-main {
	background-image: url( <?php echo NeuzinTheme::$pagebgimg; ?> );
	background-color: <?php echo NeuzinTheme::$pagebgcolor; ?>;
	}

	.error-page-area {
	background-color: <?php echo esc_html( NeuzinTheme::neuzin_options( 'error_bodybg' ) ); ?>;
	}


	<?php
	return ob_get_clean();
}

function load_custom_wp_admin_script_gutenberg() {
	wp_enqueue_style( 'neuzin-gfonts', NeuzinTheme_Helper::fonts_url(), array(), NEUZIN_VERSION );
	// font-awesome CSS
	//wp_enqueue_style( 'font-awesome',       NEUZIN_CSS_URL . 'font-awesome.min.css', array(), NEUZIN_VERSION );
	// Flaticon CSS
	//wp_enqueue_style( 'flaticon-neuzin',    NEUZIN_ASSETS_URL . 'fonts/flaticon-neuzin/flaticon.css', array(), NEUZIN_VERSION );
}

add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_script_gutenberg', 1 );

function load_custom_wp_admin_script() {
	wp_enqueue_style( 'neuzin-admin-style', NEUZIN_CSS_URL . 'admin-style.css', false, NEUZIN_VERSION );
	wp_enqueue_script( 'neuzin-admin-main', NEUZIN_JS_URL . 'admin.main.js', false, NEUZIN_VERSION, true );

}

add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_script' );


