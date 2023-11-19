<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */

use devofwp\Neuzin\Theme;


class ThemeConfig {
	public function __construct() {
		add_action( 'template_redirect', [ $this, 'theme_config' ] );
	}

	/**
	 * Theme config init
	 * @return void
	 */
	public function theme_config() {

		if ( is_single() || is_page() ) {
			$post_type = get_post_type();
			$post_id   = get_the_id();
			switch ( $post_type ) {
				case 'post':
					$prefix = 'single_post';
					break;
				case 'page':
					$prefix = 'page';
					break;
				case 'neuzin_service':
					$prefix = 'services';
					break;
				case 'neuzin_portfolio':
					$prefix = 'portfolio';
					break;
				case 'product':
					$prefix = 'product';
					break;
				default:
					$prefix = 'single_post';
					break;
			}

			Theme::$layout = $this->single_meta_data('neuzin_layout', $prefix . '_layout', $post_id);

			Theme::$sidebar = $this->single_meta_data('neuzin_sidebar', $prefix . '_sidebar', $post_id);

			Theme::$tr_header = $this->single_meta_data('neuzin_tr_header', 'tr_header', $post_id);

			Theme::$top_bar = $this->single_meta_data('neuzin_top_bar', 'top_bar', $post_id);

			Theme::$top_bar_style = $this->single_meta_data('neuzin_top_bar_style', 'top_bar_style', $post_id);

			Theme::$header_opt = $this->single_meta_data('neuzin_header_visibility', 'header_opt', $post_id);

			Theme::$header_style = $this->single_meta_data('neuzin_header', 'header_style', $post_id);

			Theme::$footer_style = $this->single_meta_data('neuzin_footer',  'footer_style', $post_id);

			Theme::$footer_area = $this->single_meta_data('neuzin_footer_area', 'footer_area', $post_id);

			Theme::$copyright_area = $this->single_meta_data('neuzin_copyright_area', 'copyright_area', $post_id);
			Theme::$padding_top = (int) $this->single_meta_data('neuzin_top_padding', $prefix . '_padding_top', $post_id);
			Theme::$padding_bottom = (int) $this->single_meta_data('neuzin_bottom_padding', $prefix . '_padding_bottom', $post_id);

			Theme::$has_banner = $this->single_meta_data('neuzin_banner', $prefix . '_banner', $post_id);

			Theme::$has_banner_align = $this->single_meta_data('neuzin_banner_title_align', $prefix . '_banner_title_align', $post_id);

			Theme::$has_breadcrumb = $this->single_meta_data('neuzin_breadcrumb', 'breadcrumb_active', $post_id);

			Theme::$bgtype = $this->single_meta_data('neuzin_banner_type', $prefix . '_bgtype', $post_id);

			Theme::$bgcolor = $this->single_meta_data('neuzin_banner_bgcolor', $prefix . '_bgcolor', $post_id);

			if ( ! empty( $meta_settings['neuzin_banner_bgimg'] ) ) {
				$attch_url    = wp_get_attachment_image_src( $meta_settings['neuzin_banner_bgimg'], 'full', true );
				Theme::$bgimg = $attch_url[0];
			} elseif ( ! empty( Theme::neuzin_options( $prefix . '_bgimg' )['id'] ) ) {
				$attch_url    = wp_get_attachment_image_src( Theme::neuzin_options( $prefix . '_bgimg' )['id'], 'full', true );
				Theme::$bgimg = $attch_url[0];
			} else {
				Theme::$bgimg = NEUZIN_IMG_URL . 'banner.jpg';
			}

			Theme::$pagebgcolor = empty( $meta_settings['neuzin_page_bgcolor'] ) ? Theme::neuzin_options( $prefix . '_page_bgcolor' ) : $meta_settings['neuzin_page_bgcolor'];

			if ( ! empty( $meta_settings['neuzin_page_bgimg'] ) ) {
				$attch_url        = wp_get_attachment_image_src( $meta_settings['neuzin_page_bgimg'], 'full', true );
				Theme::$pagebgimg = $attch_url[0];
			} elseif ( ! empty( Theme::neuzin_options( $prefix . '_bgimg' )['id'] ) ) {
				$attch_url        = wp_get_attachment_image_src( Theme::neuzin_options( $prefix . '_page_bgimg' )['id'], 'full', true );
				Theme::$pagebgimg = $attch_url[0];
			}
		} // Blog and Archive
		elseif ( is_home() || is_archive() || is_search() || is_404() ) {
			if ( is_search() ) {
				$prefix = 'search';
			} elseif ( is_404() ) {
				$prefix = 'error';
			} elseif ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
				$prefix = 'shop';
			} elseif ( is_post_type_archive( "neuzin_service" ) || is_tax( "neuzin_service_category" ) ) {
				$prefix = 'services_archive';
			} elseif ( is_post_type_archive( "neuzin_portfolio" ) || is_tax( "neuzin_portfolio_category" ) ) {
				$prefix = 'portfolio_archive';
			} else {
				$prefix = 'blog';
			}

			Theme::$layout           = Theme::neuzin_options( $prefix . '_layout' );
			Theme::$tr_header        = Theme::neuzin_options( 'tr_header' );
			Theme::$top_bar          = Theme::neuzin_options( 'top_bar' );
			Theme::$header_opt       = Theme::neuzin_options( 'header_opt' );
			Theme::$footer_area      = Theme::neuzin_options( 'footer_area' );
			Theme::$copyright_area   = Theme::neuzin_options( 'copyright_area' );
			Theme::$top_bar_style    = Theme::neuzin_options( 'top_bar_style' );
			Theme::$header_style     = Theme::neuzin_options( 'header_style' );
			Theme::$footer_style     = Theme::neuzin_options( 'footer_style' );
			Theme::$padding_top      = Theme::neuzin_options( $prefix . '_padding_top' );
			Theme::$padding_bottom   = Theme::neuzin_options( $prefix . '_padding_bottom' );
			Theme::$has_banner       = Theme::neuzin_options( $prefix . '_banner' );
			Theme::$has_banner_align = Theme::neuzin_options( $prefix . '_banner_title_align' );
			Theme::$has_breadcrumb   = Theme::neuzin_options( $prefix . '_breadcrumb' );
			Theme::$bgtype           = Theme::neuzin_options( $prefix . '_bgtype' );
			Theme::$bgcolor          = Theme::neuzin_options( $prefix . '_bgcolor' );

			if ( ! empty( Theme::neuzin_options( $prefix . '_bgimg' )['id'] ) ) {
				$attch_url    = wp_get_attachment_image_src( Theme::neuzin_options( $prefix . '_bgimg' )['id'], 'full', true );
				Theme::$bgimg = $attch_url[0];
			} else {
				Theme::$bgimg = NEUZIN_IMG_URL . 'banner.jpg';
			}

			Theme::$pagebgcolor = Theme::neuzin_options( $prefix . '_page_bgcolor' );

			if ( ! empty( Theme::neuzin_options( $prefix . '_page_bgimg' )['id'] ) ) {
				$attch_url        = wp_get_attachment_image_src( Theme::neuzin_options( $prefix . '_page_bgimg' )['id'], 'full', true );
				Theme::$pagebgimg = $attch_url[0];
			}
		}


	}

	/**
	 * Get meta-data conditionally for details / single page
	 * @param $key
	 * @param $post_id
	 *
	 * @return mixed|string
	 */
	private function single_meta_data( $meta_key, $opt_key, $post_id ) {

		$meta_data = get_post_meta( $post_id, 'neuzin_layout_settings', true );
		$meta      = $meta_data[ $meta_key ] ?? 'default';

		if ( $meta != 'default' ) {
			$output = $meta;
		} else {
			$output = Theme::$options[ $opt_key ];
		}

		return $output;
	}
}

new ThemeConfig();
// Add body class
