<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */

use devofwp\Neuzin\Theme;
use devofwp\Neuzin\Helper;

add_action( 'template_redirect', 'neuzin_template_vars' );
if( !function_exists( 'neuzin_template_vars' ) ) {
    function neuzin_template_vars() {
        // Single Pages
        if( is_single() || is_page() ) {
            $post_type = get_post_type();
            $post_id   = get_the_id();
            switch( $post_type ) {
                case 'page':
                $prefix = 'page';
                break;
                case 'post':
                $prefix = 'single_post';
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
			
			$layout_settings    = get_post_meta( $post_id, 'neuzin_layout_settings', true );
            
            Theme::$layout = ( empty( $layout_settings['neuzin_layout'] ) || $layout_settings['neuzin_layout']  == 'default' ) ? Theme::neuzin_options($prefix . '_layout') : $layout_settings['neuzin_layout'];

			Theme::$sidebar = ( empty( $layout_settings['neuzin_sidebar'] ) || $layout_settings['neuzin_sidebar'] == 'default' ) ? Theme::neuzin_options($prefix . '_sidebar') : $layout_settings['neuzin_sidebar'];
			
			Theme::$tr_header = ( empty( $layout_settings['neuzin_tr_header'] ) || $layout_settings['neuzin_tr_header'] == 'default' ) ? Theme::neuzin_options('tr_header') : $layout_settings['neuzin_tr_header'];
            
            Theme::$top_bar = ( empty( $layout_settings['neuzin_top_bar'] ) || $layout_settings['neuzin_top_bar'] == 'default' ) ? Theme::neuzin_options('top_bar') : $layout_settings['neuzin_top_bar'];
            
            Theme::$top_bar_style = ( empty( $layout_settings['neuzin_top_bar_style'] ) || $layout_settings['neuzin_top_bar_style'] == 'default' ) ? Theme::neuzin_options('top_bar_style') : $layout_settings['neuzin_top_bar_style'];
			
			Theme::$header_opt = ( empty( $layout_settings['neuzin_header_opt'] ) || $layout_settings['neuzin_header_opt'] == 'default' ) ? Theme::neuzin_options('header_opt') : $layout_settings['neuzin_header_opt'];
            
            Theme::$header_style = ( empty( $layout_settings['neuzin_header'] ) || $layout_settings['neuzin_header'] == 'default' ) ? Theme::neuzin_options('header_style') : $layout_settings['neuzin_header'];
			
            Theme::$footer_style = ( empty( $layout_settings['neuzin_footer'] ) || $layout_settings['neuzin_footer'] == 'default' ) ? Theme::neuzin_options('footer_style') : $layout_settings['neuzin_footer'];
			
			Theme::$footer_area = ( empty( $layout_settings['neuzin_footer_area'] ) || $layout_settings['neuzin_footer_area'] == 'default' ) ? Theme::neuzin_options('footer_area') : $layout_settings['neuzin_footer_area'];
			
			Theme::$copyright_area = ( empty( $layout_settings['neuzin_copyright_area'] ) || $layout_settings['neuzin_copyright_area'] == 'default' ) ? Theme::neuzin_options('copyright_area') : $layout_settings['neuzin_copyright_area'];
            
            $padding_top = ( empty( $layout_settings['neuzin_top_padding'] ) || $layout_settings['neuzin_top_padding'] == 'default' ) ? Theme::neuzin_options($prefix . '_padding_top') : $layout_settings['neuzin_top_padding'];
			
            Theme::$padding_top = (int) $padding_top;
            
            $padding_bottom = ( empty( $layout_settings['neuzin_bottom_padding'] ) || $layout_settings['neuzin_bottom_padding'] == 'default' ) ? Theme::neuzin_options($prefix . '_padding_bottom') : $layout_settings['neuzin_bottom_padding'];
			
            Theme::$padding_bottom = (int) $padding_bottom;
			
            Theme::$has_banner = ( empty( $layout_settings['neuzin_banner'] ) || $layout_settings['neuzin_banner'] == 'default' ) ? Theme::neuzin_options($prefix . '_banner') : $layout_settings['neuzin_banner'];
            
            Theme::$has_banner_align = ( empty( $layout_settings['neuzin_banner_title_align'] ) || $layout_settings['neuzin_banner_title_align'] == 'default' ) ? Theme::neuzin_options($prefix . '_banner_title_align') : $layout_settings['neuzin_banner_title_align'];
			
			Theme::$has_breadcrumb = ( empty( $layout_settings['neuzin_breadcrumb'] ) || $layout_settings['neuzin_breadcrumb'] == 'default' ) ? Theme::neuzin_options('breadcrumb_active') : $layout_settings['neuzin_breadcrumb'];
            
            Theme::$bgtype = ( empty( $layout_settings['neuzin_banner_type'] ) || $layout_settings['neuzin_banner_type'] == 'default' ) ? Theme::neuzin_options($prefix . '_bgtype') : $layout_settings['neuzin_banner_type'];
            
            Theme::$bgcolor = empty( $layout_settings['neuzin_banner_bgcolor'] ) ? Theme::neuzin_options($prefix . '_bgcolor') : $layout_settings['neuzin_banner_bgcolor'];
			
			if( !empty( $layout_settings['neuzin_banner_bgimg'] ) ) {
                $attch_url      = wp_get_attachment_image_src( $layout_settings['neuzin_banner_bgimg'], 'full', true );
                Theme::$bgimg = $attch_url[0];
            } elseif( !empty( Theme::neuzin_options($prefix . '_bgimg')['id'] ) ) {
                $attch_url      = wp_get_attachment_image_src( Theme::neuzin_options($prefix . '_bgimg')['id'], 'full', true );
                Theme::$bgimg = $attch_url[0];
            } else {
                Theme::$bgimg = NEUZIN_IMG_URL . 'banner.jpg';
            }
			
			Theme::$pagebgcolor = empty( $layout_settings['neuzin_page_bgcolor'] ) ? Theme::neuzin_options($prefix . '_page_bgcolor') : $layout_settings['neuzin_page_bgcolor'];
            
            if( !empty( $layout_settings['neuzin_page_bgimg'] ) ) {
                $attch_url      = wp_get_attachment_image_src( $layout_settings['neuzin_page_bgimg'], 'full', true );
                Theme::$pagebgimg = $attch_url[0];
            } elseif( !empty( Theme::neuzin_options($prefix . '_bgimg')['id'] ) ) {
                $attch_url      = wp_get_attachment_image_src( Theme::neuzin_options($prefix . '_page_bgimg')['id'], 'full', true );
                Theme::$pagebgimg = $attch_url[0];
            }
        }
        
        // Blog and Archive
        elseif( is_home() || is_archive() || is_search() || is_404() ) {
            if( is_search() ) {
                $prefix = 'search';
            }elseif( is_404() ) {
                $prefix                                = 'error';
            }elseif( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
                $prefix = 'shop';
            }elseif( is_post_type_archive( "neuzin_service" ) || is_tax( "neuzin_service_category" ) ) {
                $prefix = 'services_archive';            
            }elseif( is_post_type_archive( "neuzin_portfolio" ) || is_tax( "neuzin_portfolio_category" ) ) {
                $prefix = 'portfolio_archive';            
            }else{
                $prefix = 'blog';
            }
            
            Theme::$layout         		= Theme::neuzin_options($prefix . '_layout');
            Theme::$tr_header      		= Theme::neuzin_options('tr_header');
            Theme::$top_bar        		= Theme::neuzin_options('top_bar');
            Theme::$header_opt      		= Theme::neuzin_options('header_opt');
            Theme::$footer_area     		= Theme::neuzin_options('footer_area');
			Theme::$copyright_area  		= Theme::neuzin_options('copyright_area');
            Theme::$top_bar_style  		= Theme::neuzin_options('top_bar_style');
            Theme::$header_style   		= Theme::neuzin_options('header_style');
            Theme::$footer_style   		= Theme::neuzin_options('footer_style');
            Theme::$padding_top    		= Theme::neuzin_options($prefix . '_padding_top');
            Theme::$padding_bottom 		= Theme::neuzin_options($prefix . '_padding_bottom');
            Theme::$has_banner     		= Theme::neuzin_options($prefix . '_banner');
            Theme::$has_banner_align 		= Theme::neuzin_options($prefix . '_banner_title_align');
            Theme::$has_breadcrumb 		= Theme::neuzin_options($prefix . '_breadcrumb');
            Theme::$bgtype         		= Theme::neuzin_options($prefix . '_bgtype');
            Theme::$bgcolor        		= Theme::neuzin_options($prefix . '_bgcolor');
			
            if( !empty( Theme::neuzin_options($prefix . '_bgimg')['id'] ) ) {
                $attch_url      = wp_get_attachment_image_src( Theme::neuzin_options($prefix . '_bgimg')['id'], 'full', true );
                Theme::$bgimg = $attch_url[0];
            } else {
                Theme::$bgimg = NEUZIN_IMG_URL . 'banner.jpg';
            }
			
           	Theme::$pagebgcolor = Theme::neuzin_options($prefix . '_page_bgcolor');
			
            if( !empty( Theme::neuzin_options($prefix . '_page_bgimg')['id'] ) ) {
                $attch_url      = wp_get_attachment_image_src( Theme::neuzin_options($prefix . '_page_bgimg')['id'], 'full', true );
                Theme::$pagebgimg = $attch_url[0];
            }
        }
    }
}

// Add body class
add_filter( 'body_class', 'neuzin_body_classes' );
if( !function_exists( 'neuzin_body_classes' ) ) {
    function neuzin_body_classes( $classes ) {
        
        $classes[] = 'header-style-'. Theme::$header_style;		
        $classes[] = 'footer-style-'. Theme::$footer_style;

        if ( Theme::$top_bar == 1 || Theme::$top_bar == 'on' ){
            $classes[] = 'has-topbar topbar-style-'. Theme::$top_bar_style;
        }

        if ( Theme::$tr_header == 1 || Theme::$tr_header == 'on' ){
           $classes[] = 'trheader';
        }
        
        $classes[] = ( Theme::$layout == 'full-width' ) ? 'no-sidebar' : 'has-sidebar';
		
		$classes[] = ( Theme::$layout == 'left-sidebar' ) ? 'left-sidebar' : 'right-sidebar';
        
        if( isset( $_COOKIE["shopview"] ) && $_COOKIE["shopview"] == 'list' ) {
            $classes[] = 'product-list-view';
        } else {
            $classes[] = 'product-grid-view';
        }
		if ( is_singular('post') ) {
			$classes[] =  ' post-detail-' . Theme::neuzin_options('post_style');
        }
        return $classes;
    }
}