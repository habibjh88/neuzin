<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */

if ( !isset( $content_width ) ) {
	$content_width = 1200;
}

add_action('after_setup_theme', 'neuzin_setup');
if ( !function_exists( 'neuzin_setup' ) ) {
	function neuzin_setup() {
		// Language
		load_theme_textdomain( 'neuzin', NEUZIN_BASE_DIR . 'languages' );

		// Theme support
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'video', 'audio' ) );
		add_theme_support( 'woocommerce' );
		remove_theme_support( 'widgets-block-editor' );
		// for gutenberg support
		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-color-palette', array(
			array(
				'name' => esc_html__( 'dark blue', 'neuzin' ),
				'slug' => 'neuzin-button-dark-blue',
				'color' => '#5a49f8',
			),
			array(
				'name' => esc_html__( 'light blue', 'neuzin' ),
				'slug' => 'neuzin-button-light-blue',
				'color' => '#7a64f2',
			),
			array(
				'name' => esc_html__( 'Dark violet', 'neuzin' ),
				'slug' => 'neuzin-button-dark-violet',
				'color' => '#750ed5',
			),
			array(
				'name' => esc_html__( 'light gray', 'neuzin' ),
				'slug' => 'neuzin-button-light-gray',
				'color' => '#3e3e3e',
			),
			array(
				'name' => esc_html__( 'white', 'neuzin' ),
				'slug' => 'neuzin-button-white',
				'color' => '#ffffff',
			),
		) );
		add_theme_support( 'editor-font-sizes', array(
			array(
				'name' => esc_html__( 'Small', 'neuzin' ),
				'size' => 12,
				'slug' => 'small'
			),
			array(
				'name' => esc_html__( 'Normal', 'neuzin' ),
				'size' => 16,
				'slug' => 'normal'
			),
			array(
				'name' => esc_html__( 'Large', 'neuzin' ),
				'size' => 36,
				'slug' => 'large'
			),
			array(
				'name' => esc_html__( 'Huge', 'neuzin' ),
				'size' => 50,
				'slug' => 'huge'
			)
		) );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'editor-styles');	
		
		// Image sizes
		add_image_size( 'neuzin-size1', 1210, 660, true );   	// Single Post , Blog layout 2
		add_image_size( 'neuzin-size2', 1210, 786, true );    	// Gallery single
		add_image_size( 'neuzin-size3', 530, 400, true );    	// Blog layout 1, 3
		add_image_size( 'neuzin-size4', 810, 442, true );    	// Blog layout 2		
		add_image_size( 'neuzin-size5', 520, 562, true );    	// Team grid
		add_image_size( 'neuzin-size6', 442, 500, true );    	// Gallery layout 1, 2
		add_image_size( 'neuzin-size7', 640, 471, true );    	// Gallery isotop 3
		add_image_size( 'neuzin-size8', 640, 416, true );    	// Gallery isotop 3
		add_image_size( 'neuzin-size9', 410, 730, true );    	// App Screenshot grid
		
		
		// Register menus
		register_nav_menus( array(
			'primary'  => esc_html__( 'Primary', 'neuzin' ),
			'topright' => esc_html__( 'Header Right', 'neuzin' ),
		) );		
	}
}

function neuzin_theme_add_editor_styles() {
	add_editor_style( get_stylesheet_uri() );
}
add_action( 'admin_init', 'neuzin_theme_add_editor_styles' );

function neuzin_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'neuzin_pingback_header' );

add_action( 'elementor/theme/register_locations','neuzin_elementor_register_locations');

function neuzin_elementor_register_locations( $elementor_theme_manager ) {
	$elementor_theme_manager->register_location( 'header' );
	$elementor_theme_manager->register_location( 'footer' );
}
	
// Initialize Widgets
add_action( 'widgets_init', 'neuzin_widgets_register' );
if ( !function_exists( 'neuzin_widgets_register' ) ) {
	function neuzin_widgets_register() {
		
		$footer_widget_titles1 = array(
			'1' => esc_html__( 'Footer (Style 1) 1', 'neuzin' ),
			'2' => esc_html__( 'Footer (Style 1) 2', 'neuzin' ),
			'3' => esc_html__( 'Footer (Style 1) 3', 'neuzin' ),
			'4' => esc_html__( 'Footer (Style 1) 4', 'neuzin' ),
		);	
		
		$footer_widget_titles2 = array(
			'1' => esc_html__( 'Footer (Style 2) 1', 'neuzin' ),
			'2' => esc_html__( 'Footer (Style 2) 2', 'neuzin' ),
			'3' => esc_html__( 'Footer (Style 2) 3', 'neuzin' ),
			'4' => esc_html__( 'Footer (Style 2) 4', 'neuzin' ),
		);
		$footer_widget_titles3 = array(
			'1' => esc_html__( 'Footer (Style 3) 1', 'neuzin' ),
			'2' => esc_html__( 'Footer (Style 3) 2', 'neuzin' ),
			'3' => esc_html__( 'Footer (Style 3) 3', 'neuzin' ),
			'4' => esc_html__( 'Footer (Style 3) 4', 'neuzin' ),
		);
		$footer_widget_titles4 = array(
			'1' => esc_html__( 'Footer (Style 4) 1', 'neuzin' ),
			'2' => esc_html__( 'Footer (Style 4) 2', 'neuzin' ),
			'3' => esc_html__( 'Footer (Style 4) 3', 'neuzin' ),
			'4' => esc_html__( 'Footer (Style 4) 4', 'neuzin' ),
		);
		$footer_widget_titles5 = array(
			'1' => esc_html__( 'Footer (Style 5) 1', 'neuzin' ),
			'2' => esc_html__( 'Footer (Style 5) 2', 'neuzin' ),
			'3' => esc_html__( 'Footer (Style 5) 3', 'neuzin' ),
			'4' => esc_html__( 'Footer (Style 5) 4', 'neuzin' ),
		);
		$footer_widget_titles6 = array(
			'1' => esc_html__( 'Footer (Style 6) 1', 'neuzin' ),
			'2' => esc_html__( 'Footer (Style 6) 2', 'neuzin' ),
			'3' => esc_html__( 'Footer (Style 6) 3', 'neuzin' ),
			'4' => esc_html__( 'Footer (Style 6) 4', 'neuzin' ),
		);
		$footer_widget_titles7 = array(
			'1' => esc_html__( 'Footer (Style 7) 1', 'neuzin' ),
			'2' => esc_html__( 'Footer (Style 7) 2', 'neuzin' ),
			'3' => esc_html__( 'Footer (Style 7) 3', 'neuzin' ),
			'4' => esc_html__( 'Footer (Style 7) 4', 'neuzin' ),
		);
		$footer_widget_titles8 = array(
			'1' => esc_html__( 'Footer (Style 8) 1', 'neuzin' ),
			'2' => esc_html__( 'Footer (Style 8) 2', 'neuzin' ),
			'3' => esc_html__( 'Footer (Style 8) 3', 'neuzin' ),
			'4' => esc_html__( 'Footer (Style 8) 4', 'neuzin' ),
		);
		$footer_widget_titles9 = array(
			'1' => esc_html__( 'Footer (Style 9) 1', 'neuzin' ),
			'2' => esc_html__( 'Footer (Style 9) 2', 'neuzin' ),
			'3' => esc_html__( 'Footer (Style 9) 3', 'neuzin' ),
			'4' => esc_html__( 'Footer (Style 9) 4', 'neuzin' ),
		);

		// Register Widget Areas ( Common )
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar', 'neuzin' ),
			'id'            => 'sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="rt-widget-title-holder"><h3 class="widgettitle">',
			'after_title'   => '<span class="titleinner"></span></h3></div>',
		) );
		
		if ( class_exists( 'WooCommerce' ) ) {
			register_sidebar( array(
				'name'          => esc_html__( 'Shop Sidebar', 'neuzin' ),
				'id'            => 'shop-sidebar-1',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widgettitle">',
				'after_title'   => '</h3>',
			) );
		}
		
		register_sidebar( array(
			'name'          => esc_html__( 'Top Bar - Left', 'neuzin' ),
			'id'            => 'top4-left',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="hidden">',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Top Bar - Right', 'neuzin' ),
			'id'            => 'top4-right',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="hidden">',
			'after_title'   => '</h3>',
		) );		
		/*footer 1*/
		if ( !empty(NeuzinTheme::neuzin_options('footer_column_1')) ){
			$item_widget = NeuzinTheme::neuzin_options('footer_column_1');
		} else {
			$item_widget = 4;
		}		
		for ( $i = 1; $i <= $item_widget; $i++ ) {
			register_sidebar( array(
				'name'          => $footer_widget_titles1[$i],
				'id'            => 'footer-style-1-'. $i,
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widgettitle '. NeuzinTheme::$footer_style .'">',
				'after_title'   => '</h3>',
			) );
		}
		/*footer 2*/
		if ( !empty(NeuzinTheme::neuzin_options('footer_column_2')) ){
			$item_widget = NeuzinTheme::neuzin_options('footer_column_2');
		} else {
			$item_widget = 4;
		}		
		for ( $i = 1; $i <= $item_widget; $i++ ) {
			register_sidebar( array(
				'name'          => $footer_widget_titles2[$i],
				'id'            => 'footer-style-2-'. $i,
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widgettitle '. NeuzinTheme::$footer_style .'">',
				'after_title'   => '</h3>',
			) );
		}		
		/*footer 3*/
		if ( !empty(NeuzinTheme::neuzin_options('footer_column_3')) ){
			$item_widget = NeuzinTheme::neuzin_options('footer_column_3');
		} else {
			$item_widget = 4;
		}		
		for ( $i = 1; $i <= $item_widget; $i++ ) {
			register_sidebar( array(
				'name'          => $footer_widget_titles3[$i],
				'id'            => 'footer-style-3-'. $i,
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widgettitle '. NeuzinTheme::$footer_style .'">',
				'after_title'   => '</h3>',
			) );
		}
		/*footer 4*/
		if ( !empty(NeuzinTheme::neuzin_options('footer_column_4')) ){
			$item_widget = NeuzinTheme::neuzin_options('footer_column_4');
		} else {
			$item_widget = 4;
		}		
		for ( $i = 1; $i <= $item_widget; $i++ ) {
			register_sidebar( array(
				'name'          => $footer_widget_titles4[$i],
				'id'            => 'footer-style-4-'. $i,
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widgettitle '. NeuzinTheme::$footer_style .'">',
				'after_title'   => '</h3>',
			) );
		}
		/*footer 5*/
		if ( !empty(NeuzinTheme::neuzin_options('footer_column_5')) ){
			$item_widget = NeuzinTheme::neuzin_options('footer_column_5');
		} else {
			$item_widget = 4;
		}		
		for ( $i = 1; $i <= $item_widget; $i++ ) {
			register_sidebar( array(
				'name'          => $footer_widget_titles5[$i],
				'id'            => 'footer-style-5-'. $i,
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widgettitle '. NeuzinTheme::$footer_style .'">',
				'after_title'   => '</h3>',
			) );
		}
		/*footer 6*/
		if ( !empty(NeuzinTheme::neuzin_options('footer_column_6')) ){
			$item_widget = NeuzinTheme::neuzin_options('footer_column_6');
		} else {
			$item_widget = 4;
		}		
		for ( $i = 1; $i <= $item_widget; $i++ ) {
			register_sidebar( array(
				'name'          => $footer_widget_titles6[$i],
				'id'            => 'footer-style-6-'. $i,
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widgettitle '. NeuzinTheme::$footer_style .'">',
				'after_title'   => '</h3>',
			) );
		}
		/*footer 7*/
		if ( !empty(NeuzinTheme::neuzin_options('footer_column_7')) ){
			$item_widget = NeuzinTheme::neuzin_options('footer_column_7');
		} else {
			$item_widget = 4;
		}		
		for ( $i = 1; $i <= $item_widget; $i++ ) {
			register_sidebar( array(
				'name'          => $footer_widget_titles7[$i],
				'id'            => 'footer-style-7-'. $i,
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widgettitle '. NeuzinTheme::$footer_style .'">',
				'after_title'   => '</h3>',
			) );
		}
		/*footer 8*/
		if ( !empty(NeuzinTheme::neuzin_options('footer_column_8')) ){
			$item_widget = NeuzinTheme::neuzin_options('footer_column_8');
		} else {
			$item_widget = 4;
		}		
		for ( $i = 1; $i <= $item_widget; $i++ ) {
			register_sidebar( array(
				'name'          => $footer_widget_titles8[$i],
				'id'            => 'footer-style-8-'. $i,
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widgettitle '. NeuzinTheme::$footer_style .'">',
				'after_title'   => '</h3>',
			) );
		}
		/*footer 9*/
		if ( !empty(NeuzinTheme::neuzin_options('footer_column_9')) ){
			$item_widget = NeuzinTheme::neuzin_options('footer_column_9');
		} else {
			$item_widget = 4;
		}		
		for ( $i = 1; $i <= $item_widget; $i++ ) {
			register_sidebar( array(
				'name'          => $footer_widget_titles9[$i],
				'id'            => 'footer-style-9-'. $i,
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widgettitle '. NeuzinTheme::$footer_style .'">',
				'after_title'   => '</h3>',
			) );
		}
		/*copyright*/
		register_sidebar( array(
			'name'          => esc_html__( 'Footer 4 Top Widgets', 'neuzin' ),
			'id'            => 'footer4_top_widget',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widgettitle '. NeuzinTheme::$footer_style .'">',
			'after_title'   => '</h3>',
		) );
		/*copyright*/
		register_sidebar( array(
			'name'          => esc_html__( 'Copyright Widgets', 'neuzin' ),
			'id'            => 'copyright_widget',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widgettitle '. NeuzinTheme::$footer_style .'">',
			'after_title'   => '</h3>',
		) );
		
	}
}

// Footer Html
add_action( 'wp_footer', 'neuzin_footer_html', 1 );
if( !function_exists( 'neuzin_footer_html' ) ) {
	function neuzin_footer_html(){
		// Back-to-top link
		if ( NeuzinTheme::neuzin_options('back_to_top') ){
			echo '<a href="#" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>';
		}
	}	
}
/*Allow HTML for the kses post*/
function neuzin_kses_allowed_html($tags, $context) {
    switch($context) {
        case 'social':
            $tags = array(
                'a' => array('href' => array()),
                'b' => array()
            );
            return $tags;
        case 'alltext_allow':
            $tags = array(
                'a' => array(
                    'class' => array(),
                    'href'  => array(),
                    'rel'   => array(),
                    'title' => array(),
                    'target' => array(),
                ),
                'abbr' => array(
                    'title' => array(),
                ),
                'b' => array(),
                'br' => array(),
                'blockquote' => array(
                    'cite'  => array(),
                ),
                'cite' => array(
                    'title' => array(),
                ),
                'code' => array(),
                'del' => array(
                    'datetime' => array(),
                    'title' => array(),
                ),
                'dd' => array(),
                'div' => array(
                    'class' => array(),
                    'title' => array(),
                    'style' => array(),
                    'id' 	=> array(),
                ),
                'dl' => array(),
                'dt' => array(),
                'em' => array(),
                'h1' => array(),
                'h2' => array(),
                'h3' => array(),
                'h4' => array(),
                'h5' => array(),
                'h6' => array(),
                'i' => array(),
                'img' => array(
                    'alt'    => array(),
                    'class'  => array(),
                    'height' => array(),
                    'src'    => array(),
                    'srcset' => array(),
                    'width'  => array(),
                ),
                'li' => array(
                    'class' => array(),
                ),
                'ol' => array(
                    'class' => array(),
                ),
                'p' => array(
                    'class' => array(),
                ),
                'q' => array(
                    'cite' => array(),
                    'title' => array(),
                ),
                'span' => array(
                    'class' => array(),
                    'title' => array(),
                    'style' => array(),
                ),
                'strike' => array(),
                'strong' => array(),
                'ul' => array(
                    'class' => array(),
                ),
            );
            return $tags;
        default:
            return $tags;
    }
}
add_filter( 'wp_kses_allowed_html', 'neuzin_kses_allowed_html', 10, 2);


/**
 * @param Wp_Query $query
 * @return mixed
 */
function advanced_search_query($query) {
    if($query->is_search()) {
        // category terms search.
        if (isset($_GET['category']) && !empty($_GET['category'])) {
            $query->set('tax_query', array(array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => array($_GET['category']) )
            ));
        }    
    }
    return $query;
}
add_action('pre_get_posts', 'advanced_search_query', 1000);

/*social link to author profile page*/
add_action( 'show_user_profile', 'neuzin_user_social_profile_fields' );
add_action( 'edit_user_profile', 'neuzin_user_social_profile_fields' );

function neuzin_user_social_profile_fields( $user ) { ?>

	<h3><?php esc_html_e( 'User Designation' , 'neuzin' ); ?></h3>

	<table class="form-table">
		<tr>
			<th><label for="neuzin_author_designation"><?php esc_html_e( 'Author Designation' , 'neuzin' ); ?></label></th>
			<td><input type="text" name="neuzin_author_designation" id="neuzin_author_designation" value="<?php echo esc_attr( get_the_author_meta( 'neuzin_author_designation', $user->ID ) ); ?>" class="regular-text" /><br /><span class="description"><?php esc_html_e( 'Please enter your Author Designation' , 'neuzin' ); ?></span></td>
		</tr>
	</table>
	
	<h3><?php esc_html_e( 'Social profile information' , 'neuzin' ); ?></h3>

	<table class="form-table">
		<tr>
			<th><label for="facebook"><?php esc_html_e( 'Facebook' , 'neuzin' ); ?></label></th>
			<td><input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'neuzin_facebook', $user->ID ) ); ?>" class="regular-text" /><br /><span class="description"><?php esc_html_e( 'Please enter your facebook URL.' , 'neuzin' ); ?></span></td>
		</tr>
		<tr>
			<th><label for="twitter"><?php esc_html_e( 'Twitter' , 'neuzin' ); ?></label></th>
			<td><input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'neuzin_twitter', $user->ID ) ); ?>" class="regular-text" /><br /><span class="description"><?php esc_html_e( 'Please enter your Twitter username.' , 'neuzin' ); ?></span></td>
		</tr>
		<tr>
			<th><label for="linkedin"><?php esc_html_e( 'LinkedIn' , 'neuzin' ); ?></label></th>
			<td><input type="text" name="linkedin" id="linkedin" value="<?php echo esc_attr( get_the_author_meta( 'neuzin_linkedin', $user->ID ) ); ?>" class="regular-text" /><br /><span class="description"><?php esc_html_e( 'Please enter your LinkedIn Profile' , 'neuzin' ); ?></span></td>
		</tr>
		<tr>
			<th><label for="gplus"><?php esc_html_e( 'Google+' , 'neuzin' ); ?></label></th>
			<td><input type="text" name="gplus" id="gplus" value="<?php echo esc_attr( get_the_author_meta( 'neuzin_gplus', $user->ID ) ); ?>" class="regular-text" /><br /><span class="description"><?php esc_html_e( 'Please enter your google+ Profile' , 'neuzin' ); ?></span></td>
		</tr>
		<tr>
			<th><label for="pinterest"><?php esc_html_e( 'Pinterest' , 'neuzin' ); ?></label></th>
			<td><input type="text" name="pinterest" id="pinterest" value="<?php echo esc_attr( get_the_author_meta( 'neuzin_pinterest', $user->ID ) ); ?>" class="regular-text" /><br /><span class="description"><?php esc_html_e( 'Please enter your Pinterest Profile' , 'neuzin' ); ?></span></td>
		</tr>
	</table>
<?php }

add_action( 'personal_options_update', 'neuzin_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'neuzin_extra_profile_fields' );

function neuzin_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

	update_user_meta( $user_id, 'neuzin_facebook', $_POST['facebook'] );
	update_user_meta( $user_id, 'neuzin_twitter', $_POST['twitter'] );
	update_user_meta( $user_id, 'neuzin_linkedin', $_POST['linkedin'] );
	update_user_meta( $user_id, 'neuzin_gplus', $_POST['gplus'] );
	update_user_meta( $user_id, 'neuzin_pinterest', $_POST['pinterest'] );
	update_user_meta( $user_id, 'neuzin_author_designation', $_POST['neuzin_author_designation'] );
}


if( ! function_exists( 'neuzin_post_img_src' )){
	function neuzin_post_img_src( $size = 'neuzin-size1' ){
		$post_id  = get_the_ID();
		if ( has_post_thumbnail( $post_id ) ) {			
			$image_id = get_post_thumbnail_id( $post_id );			
			$image    = wp_get_attachment_image_src( $image_id, $size );
			return $image[0];
		} else {
			return;
		}
	}
}

/*Post Time & time format*/
if( ! function_exists( 'neuzin_get_time' )){

	function neuzin_get_time( $return = false ){

		$post = get_post();
		
		# Date is disabled globally ----------
		if( NeuzinTheme::neuzin_options('time_format') == 'none' ){
			return false;
		}
		# Human Readable Post Dates ----------
		elseif(  NeuzinTheme::neuzin_options('time_format') == 'modern' ){

			$time_now  = current_time( 'timestamp' );
			$post_time = get_the_time( 'U' ) ;
			$since = sprintf( esc_html__( '%s ago' , 'neuzin' ), human_time_diff( $post_time, $time_now ) );			
		}
		else{
			$since = get_the_date();
		}

		$post_time = '<span class="date meta-item"><span class="fa fa-clock-o" aria-hidden="true"></span>  <span>'.$since.'</span></span>';

		if( $return ){
			return $post_time;
		}

		echo wp_kses_post( $post_time );
	}

}

function widgets_scripts( $hook ) {
    if ( 'widgets.php' != $hook ) {
        return;
    }
    wp_enqueue_style( 'wp-color-picker' );
	
}
add_action( 'admin_enqueue_scripts', 'widgets_scripts' );

/*
* for most use of the get_term cached 
* This is because all time it hits and single page provide data quickly
*/
function get_img( $img ){
	$img = get_stylesheet_directory_uri() . '/assets/img/' . $img;
	return $img;
}
function get_css( $file ){
	$file = get_stylesheet_directory_uri() . '/assets/css/' . $file . '.css';
	return $file;
}
function get_js( $file ){
	$file = get_stylesheet_directory_uri() . '/assets/js/' . $file . '.js';
	return $file;
}
function filter_content( $content ){
	// wp filters
	$content = wptexturize( $content );
	$content = convert_smilies( $content );
	$content = convert_chars( $content );
	$content = wpautop( $content );
	$content = shortcode_unautop( $content );

	// remove shortcodes
	$pattern= '/\[(.+?)\]/';
	$content = preg_replace( $pattern,'',$content );

	// remove tags
	$content = strip_tags( $content );

	return $content;
}

function get_current_post_content( $post = false ) {
	if ( !$post ) {
		$post = get_post();				
	}
	$content = has_excerpt( $post->ID ) ? $post->post_excerpt : $post->post_content;
	$content = filter_content( $content );
	return $content;
}

function cached_get_term_by( $field, $value, $taxonomy, $output = OBJECT, $filter = 'raw' ){
	// ID lookups are cached
	if ( 'id' == $field )
		return get_term_by( $field, $value, $taxonomy, $output, $filter );

	$cache_key = $field . '|' . $taxonomy . '|' . md5( $value );
	$term_id = wp_cache_get( $cache_key, 'get_term_by' );

	if ( false === $term_id ){
		$term = get_term_by( $field, $value, $taxonomy );
		if ( $term && ! is_wp_error( $term ) )
			wp_cache_set( $cache_key, $term->term_id, 'get_term_by' );
		else
			wp_cache_set( $cache_key, 0, 'get_term_by' ); // if we get an invalid value, let's cache it anyway
	} else {
		$term = get_term( $term_id, $taxonomy, $output, $filter );
	}

	if ( is_wp_error( $term ) )
		$term = false;

	return $term;
}

/*for avobe reason*/
function cached_get_term_link( $term, $taxonomy = null ){
	// ID- or object-based lookups already result in cached lookups, so we can ignore those.
	if ( is_numeric( $term ) || is_object( $term ) ){
		return get_term_link( $term, $taxonomy );
	}

	$term_object = cached_get_term_by( 'slug', $term, $taxonomy );
	return get_term_link( $term_object );
}


/*only to show the first category in the post - primary category*/
function neuzin_if_term_exists( $term, $taxonomy = '', $parent = null ){
	if ( null !== $parent ){
		return term_exists( $term, $taxonomy, $parent );
	}

	if ( ! empty( $taxonomy ) ){
		$cache_key = $term . '|' . $taxonomy;
	}else{
		$cache_key = $term;
	}

	$cache_value = wp_cache_get( $cache_key, 'term_exists' );

	//term_exists frequently returns null, but (happily) never false
	if ( false  === $cache_value ){
		$term_exists = term_exists( $term, $taxonomy );
		wp_cache_set( $cache_key, $term_exists, 'term_exists' );
	}else{
		$term_exists = $cache_value;
	}

	if ( is_wp_error( $term_exists ) )
		$term_exists = null;

	return $term_exists;
}


if( ! function_exists( 'neuzin_get_primary_category' )){

	function neuzin_get_primary_category() {

		if( get_post_type() != 'post' ) {
			return;
		}

		# Get the first assigned category ----------
			$get_the_category = get_the_category();
			$primary_category = array( $get_the_category[0] );

		if( ! empty( $primary_category[0] )) {
			return $primary_category;
		}
	}
}

/*only to show the first category in the post - primary category ID*/
if( ! function_exists( 'neuzin_get_primary_category_id' )){

	function neuzin_get_primary_category_id(){

		$primary_category = neuzin_get_primary_category();

		if( ! empty( $primary_category[0]->term_id )){
			return $primary_category[0]->term_id;
		}

		return false;
	}
}

// Head Script
if( !function_exists( 'neuzin_head' ) ) {
	function neuzin_head(){
		// Hide preloader if js is disabled
		echo '<noscript><style>#preloader{display:none;}</style></noscript>';
	}	
}
add_action( 'wp_head', 'neuzin_head', 1 );

//find the post type function 
if ( ! function_exists ( 'neuzin_post_type' ) ) {
	function neuzin_post_type() {
		$neuzin_post_type_var =get_post_type( get_the_ID());
		echo esc_html( $neuzin_post_type_var );
	}
}

/*next previous post links*/
if ( !function_exists( 'neuzin_post_links_next_prev' ) ) {
	function neuzin_post_links_next_prev() { ?>
	<div class="row no-gutters divider post-navigation">
		<?php if ( !empty( get_next_post_link())){ ?>
			<div class=" col-lg-6 col-md-6 col-sm-6 col-6 d-flex <?php if ( empty( get_previous_post_link())){ ?>-offset-md-6<?php } ?> <?php if ( is_rtl() ){ echo esc_attr( 'text-left' ); } else { echo esc_attr( 'text-left' ); } ?>">
				<?php $next_post = get_next_post();
				if (!empty( $next_post )) { ?>
				<?php if (has_post_thumbnail( $next_post->ID )) { ?>
				<a class="left-img" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"><?php echo get_the_post_thumbnail( $next_post->ID, 'thumbnail', array( 'class' => 'Next' ) ); ?></a><?php } ?>
				<?php } ?>
				<div class="pad-lr-15">
				<span class="next-article">
				<?php next_post_link( '%link', esc_html('Previous article' , 'neuzin' ) );?></span>
				<?php next_post_link( '<h3 class="post-nav-title">%link</h3>' ); ?>
				</div>
			
			</div>
		<?php } ?>

		<?php if ( !empty( get_previous_post_link())){ ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-6 d-flex <?php if ( empty( get_next_post_link())){ ?>offset-md-6<?php } ?> <?php if ( is_rtl() ){ echo esc_attr( 'text-right' ); } else { echo esc_attr( 'text-right' ); } ?>">

				<div class="pad-lr-15">
				<span class="prev-article">
				<?php previous_post_link( '%link', esc_html('Next article' , 'neuzin' ) );?></span>
				<?php previous_post_link('<h3 class="post-nav-title">%link</h3>'); ?>
				</div>
				<?php $previous_post = get_previous_post();
				if (!empty( $previous_post )) { ?>
				<?php if ( has_post_thumbnail( $previous_post->ID ) ) { ?>
				<a class="right-img" href="<?php echo esc_url( get_permalink( $previous_post->ID ) ); ?>"><?php echo get_the_post_thumbnail( $previous_post->ID, 'thumbnail', array( 'class' => 'Previous' ) ); ?></a><?php } ?>
				<?php } ?>

			</div>
		<?php } ?>
	</div>
<?php }
}
/*Remove the archive label*/
function neuzin_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
  
    return $title;
}
 
add_filter( 'get_the_archive_title', 'neuzin_archive_title' );

/*Shop row*/
add_filter('loop_shop_columns', 'neuzin_loop_columns', 999);

function neuzin_loop_columns() {
	$shop_product_column = NeuzinTheme::neuzin_options('wc_num_product_shop_page');
	return $shop_product_column;
}
// Update Breadcrumb Separator
add_action('bcn_after_fill', 'rt_hseparator_breadcrumb_trail', 1);
	function rt_hseparator_breadcrumb_trail($object){
		$delimiter  = NeuzinTheme::neuzin_options('breadcrumbs_delimiter') ? wp_kses_post( NeuzinTheme::neuzin_options('breadcrumbs_delimiter') ) : '&#47;';
		$object->opt['hseparator'] = '<em class="delimiter">'. $delimiter .'</em>';
	return $object;
}
