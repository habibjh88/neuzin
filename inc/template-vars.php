<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

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
            
            NeuzinTheme::$layout = ( empty( $layout_settings['neuzin_layout'] ) || $layout_settings['neuzin_layout']  == 'default' ) ? NeuzinTheme::neuzin_options($prefix . '_layout') : $layout_settings['neuzin_layout'];

			NeuzinTheme::$sidebar = ( empty( $layout_settings['neuzin_sidebar'] ) || $layout_settings['neuzin_sidebar'] == 'default' ) ? NeuzinTheme::neuzin_options($prefix . '_sidebar') : $layout_settings['neuzin_sidebar'];
			
			NeuzinTheme::$tr_header = ( empty( $layout_settings['neuzin_tr_header'] ) || $layout_settings['neuzin_tr_header'] == 'default' ) ? NeuzinTheme::neuzin_options('tr_header') : $layout_settings['neuzin_tr_header'];
            
            NeuzinTheme::$top_bar = ( empty( $layout_settings['neuzin_top_bar'] ) || $layout_settings['neuzin_top_bar'] == 'default' ) ? NeuzinTheme::neuzin_options('top_bar') : $layout_settings['neuzin_top_bar'];
            
            NeuzinTheme::$top_bar_style = ( empty( $layout_settings['neuzin_top_bar_style'] ) || $layout_settings['neuzin_top_bar_style'] == 'default' ) ? NeuzinTheme::neuzin_options('top_bar_style') : $layout_settings['neuzin_top_bar_style'];
			
			NeuzinTheme::$header_opt = ( empty( $layout_settings['neuzin_header_opt'] ) || $layout_settings['neuzin_header_opt'] == 'default' ) ? NeuzinTheme::neuzin_options('header_opt') : $layout_settings['neuzin_header_opt'];
            
            NeuzinTheme::$header_style = ( empty( $layout_settings['neuzin_header'] ) || $layout_settings['neuzin_header'] == 'default' ) ? NeuzinTheme::neuzin_options('header_style') : $layout_settings['neuzin_header'];
			
            NeuzinTheme::$footer_style = ( empty( $layout_settings['neuzin_footer'] ) || $layout_settings['neuzin_footer'] == 'default' ) ? NeuzinTheme::neuzin_options('footer_style') : $layout_settings['neuzin_footer'];
			
			NeuzinTheme::$footer_area = ( empty( $layout_settings['neuzin_footer_area'] ) || $layout_settings['neuzin_footer_area'] == 'default' ) ? NeuzinTheme::neuzin_options('footer_area') : $layout_settings['neuzin_footer_area'];
			
			NeuzinTheme::$copyright_area = ( empty( $layout_settings['neuzin_copyright_area'] ) || $layout_settings['neuzin_copyright_area'] == 'default' ) ? NeuzinTheme::neuzin_options('copyright_area') : $layout_settings['neuzin_copyright_area'];
            
            $padding_top = ( empty( $layout_settings['neuzin_top_padding'] ) || $layout_settings['neuzin_top_padding'] == 'default' ) ? NeuzinTheme::neuzin_options($prefix . '_padding_top') : $layout_settings['neuzin_top_padding'];
			
            NeuzinTheme::$padding_top = (int) $padding_top;
            
            $padding_bottom = ( empty( $layout_settings['neuzin_bottom_padding'] ) || $layout_settings['neuzin_bottom_padding'] == 'default' ) ? NeuzinTheme::neuzin_options($prefix . '_padding_bottom') : $layout_settings['neuzin_bottom_padding'];
			
            NeuzinTheme::$padding_bottom = (int) $padding_bottom;
			
            NeuzinTheme::$has_banner = ( empty( $layout_settings['neuzin_banner'] ) || $layout_settings['neuzin_banner'] == 'default' ) ? NeuzinTheme::neuzin_options($prefix . '_banner') : $layout_settings['neuzin_banner'];
            
            NeuzinTheme::$has_banner_align = ( empty( $layout_settings['neuzin_banner_title_align'] ) || $layout_settings['neuzin_banner_title_align'] == 'default' ) ? NeuzinTheme::neuzin_options($prefix . '_banner_title_align') : $layout_settings['neuzin_banner_title_align'];
			
			NeuzinTheme::$has_breadcrumb = ( empty( $layout_settings['neuzin_breadcrumb'] ) || $layout_settings['neuzin_breadcrumb'] == 'default' ) ? NeuzinTheme::neuzin_options('breadcrumb_active') : $layout_settings['neuzin_breadcrumb'];
            
            NeuzinTheme::$bgtype = ( empty( $layout_settings['neuzin_banner_type'] ) || $layout_settings['neuzin_banner_type'] == 'default' ) ? NeuzinTheme::neuzin_options($prefix . '_bgtype') : $layout_settings['neuzin_banner_type'];
            
            NeuzinTheme::$bgcolor = empty( $layout_settings['neuzin_banner_bgcolor'] ) ? NeuzinTheme::neuzin_options($prefix . '_bgcolor') : $layout_settings['neuzin_banner_bgcolor'];
			
			if( !empty( $layout_settings['neuzin_banner_bgimg'] ) ) {
                $attch_url      = wp_get_attachment_image_src( $layout_settings['neuzin_banner_bgimg'], 'full', true );
                NeuzinTheme::$bgimg = $attch_url[0];
            } elseif( !empty( NeuzinTheme::neuzin_options($prefix . '_bgimg')['id'] ) ) {
                $attch_url      = wp_get_attachment_image_src( NeuzinTheme::neuzin_options($prefix . '_bgimg')['id'], 'full', true );
                NeuzinTheme::$bgimg = $attch_url[0];
            } else {
                NeuzinTheme::$bgimg = NEUZIN_IMG_URL . 'banner.jpg';
            }
			
			NeuzinTheme::$pagebgcolor = empty( $layout_settings['neuzin_page_bgcolor'] ) ? NeuzinTheme::neuzin_options($prefix . '_page_bgcolor') : $layout_settings['neuzin_page_bgcolor'];
            
            if( !empty( $layout_settings['neuzin_page_bgimg'] ) ) {
                $attch_url      = wp_get_attachment_image_src( $layout_settings['neuzin_page_bgimg'], 'full', true );
                NeuzinTheme::$pagebgimg = $attch_url[0];
            } elseif( !empty( NeuzinTheme::neuzin_options($prefix . '_bgimg')['id'] ) ) {
                $attch_url      = wp_get_attachment_image_src( NeuzinTheme::neuzin_options($prefix . '_page_bgimg')['id'], 'full', true );
                NeuzinTheme::$pagebgimg = $attch_url[0];
            }
        }
        
        // Blog and Archive
        elseif( is_home() || is_archive() || is_search() || is_404() ) {
            if( is_search() ) {
                $prefix = 'search';
            }elseif( is_404() ) {
                $prefix                                = 'error';
                NeuzinTheme::neuzin_options($prefix . '_layout') = 'full-width';
            }elseif( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
                $prefix = 'shop';
            }elseif( is_post_type_archive( "neuzin_service" ) || is_tax( "neuzin_service_category" ) ) {
                $prefix = 'services_archive';            
            }elseif( is_post_type_archive( "neuzin_portfolio" ) || is_tax( "neuzin_portfolio_category" ) ) {
                $prefix = 'portfolio_archive';            
            }else{
                $prefix = 'blog';
            }
            
            NeuzinTheme::$layout         		= NeuzinTheme::neuzin_options($prefix . '_layout');
            NeuzinTheme::$tr_header      		= NeuzinTheme::neuzin_options('tr_header');
            NeuzinTheme::$top_bar        		= NeuzinTheme::neuzin_options('top_bar');
            NeuzinTheme::$header_opt      		= NeuzinTheme::neuzin_options('header_opt');
            NeuzinTheme::$footer_area     		= NeuzinTheme::neuzin_options('footer_area');
			NeuzinTheme::$copyright_area  		= NeuzinTheme::neuzin_options('copyright_area');
            NeuzinTheme::$top_bar_style  		= NeuzinTheme::neuzin_options('top_bar_style');
            NeuzinTheme::$header_style   		= NeuzinTheme::neuzin_options('header_style');
            NeuzinTheme::$footer_style   		= NeuzinTheme::neuzin_options('footer_style');
            NeuzinTheme::$padding_top    		= NeuzinTheme::neuzin_options($prefix . '_padding_top');
            NeuzinTheme::$padding_bottom 		= NeuzinTheme::neuzin_options($prefix . '_padding_bottom');
            NeuzinTheme::$has_banner     		= NeuzinTheme::neuzin_options($prefix . '_banner');
            NeuzinTheme::$has_banner_align 		= NeuzinTheme::neuzin_options($prefix . '_banner_title_align');
            NeuzinTheme::$has_breadcrumb 		= NeuzinTheme::neuzin_options($prefix . '_breadcrumb');
            NeuzinTheme::$bgtype         		= NeuzinTheme::neuzin_options($prefix . '_bgtype');
            NeuzinTheme::$bgcolor        		= NeuzinTheme::neuzin_options($prefix . '_bgcolor');
			
            if( !empty( NeuzinTheme::neuzin_options($prefix . '_bgimg')['id'] ) ) {
                $attch_url      = wp_get_attachment_image_src( NeuzinTheme::neuzin_options($prefix . '_bgimg')['id'], 'full', true );
                NeuzinTheme::$bgimg = $attch_url[0];
            } else {
                NeuzinTheme::$bgimg = NEUZIN_IMG_URL . 'banner.jpg';
            }
			
           	NeuzinTheme::$pagebgcolor = NeuzinTheme::neuzin_options($prefix . '_page_bgcolor');
			
            if( !empty( NeuzinTheme::neuzin_options($prefix . '_page_bgimg')['id'] ) ) {
                $attch_url      = wp_get_attachment_image_src( NeuzinTheme::neuzin_options($prefix . '_page_bgimg')['id'], 'full', true );
                NeuzinTheme::$pagebgimg = $attch_url[0];
            }
        }
    }
}

// Add body class
add_filter( 'body_class', 'neuzin_body_classes' );
if( !function_exists( 'neuzin_body_classes' ) ) {
    function neuzin_body_classes( $classes ) {
        
        $classes[] = 'header-style-'. NeuzinTheme::$header_style;		
        $classes[] = 'footer-style-'. NeuzinTheme::$footer_style;

        if ( NeuzinTheme::$top_bar == 1 || NeuzinTheme::$top_bar == 'on' ){
            $classes[] = 'has-topbar topbar-style-'. NeuzinTheme::$top_bar_style;
        }

        if ( NeuzinTheme::$tr_header == 1 || NeuzinTheme::$tr_header == 'on' ){
           $classes[] = 'trheader';
        }
        
        $classes[] = ( NeuzinTheme::$layout == 'full-width' ) ? 'no-sidebar' : 'has-sidebar';
		
		$classes[] = ( NeuzinTheme::$layout == 'left-sidebar' ) ? 'left-sidebar' : 'right-sidebar';
        
        if( isset( $_COOKIE["shopview"] ) && $_COOKIE["shopview"] == 'list' ) {
            $classes[] = 'product-list-view';
        } else {
            $classes[] = 'product-grid-view';
        }
		if ( is_singular('post') ) {
			$classes[] =  ' post-detail-' . NeuzinTheme::neuzin_options('post_style');
        }
        return $classes;
    }
}