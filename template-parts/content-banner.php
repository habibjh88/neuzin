<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */
 
if ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
	$neuzin_title = woocommerce_page_title( false );
} else if ( is_404() ) {
	$neuzin_title = NeuzinTheme::neuzin_options('error_title');
} else if ( is_search() ) {
	$neuzin_title = esc_html__( 'Search Results for : ', 'neuzin' ) . get_search_query();
} else if ( is_home() ) {
	if ( get_option( 'page_for_posts' ) ) {
		$neuzin_title = get_the_title( get_option( 'page_for_posts' ) );
	}
	else {
		$neuzin_title = apply_filters( 'theme_blog_title', esc_html__( 'All Posts', 'neuzin' ) );
	}
} else if ( is_archive() ) {
	$neuzin_title = get_the_archive_title();
} else if ( is_page() ) {
	$neuzin_title = get_the_title();
} else if ( is_single() ) {
	$neuzin_title = get_the_title();
}

if ( NeuzinTheme::$bgtype == 'bgcolor' ) {
	$neuzin_bg = NeuzinTheme::$bgcolor;
} else {
	$neuzin_bg = 'url(' . NeuzinTheme::$bgimg . ') no-repeat scroll center center / cover';
}

if ( !empty( NeuzinTheme::neuzin_options('post_banner_title') ) ){
	$post_banner_title = NeuzinTheme::neuzin_options('post_banner_title');
} else {
	$post_banner_title = esc_html__( 'Our News' , 'neuzin' );
}

?>

<?php if ( NeuzinTheme::$has_banner == '1' || NeuzinTheme::$has_banner == 'on' ): ?>
	<div class="entry-banner" style="background:<?php echo esc_html( $neuzin_bg ); ?>">
		<?php if ( NeuzinTheme::neuzin_options('banner_shape') ) { ?>

		<ul class="shape-holder <?php if ( NeuzinTheme::neuzin_options('banner_shape_animation') == '1' ) { ?>has-animation<?php } else { ?>no-animation<?php } ?>">
			<li class="shape1">
				<div class="translate-top-50 opacity-animation transition-200 transition-delay-10">
					<svg width="827px" height="827px">
						<defs>
							<linearGradient id="shape1" x1="0%" x2="50%" y1="86.603%" y2="0%">
								<stop offset="0%" stop-color="rgb(82,63,255)" stop-opacity="0.6" />
								<stop offset="100%" stop-color="rgb(117,14,213)" stop-opacity="0.6" />
							</linearGradient>
						</defs>
						<path fill="url(#shape1)"
						 d="M413.500,0.000 C641.870,0.000 827.000,185.130 827.000,413.500 C827.000,641.870 641.870,827.000 413.500,827.000 C185.130,827.000 -0.000,641.870 -0.000,413.500 C-0.000,185.130 185.130,0.000 413.500,0.000 Z"/>
					</svg>
				</div>
			</li>
			<li class="shape2">
				<div class="translate-top-50 opacity-animation transition-100 transition-delay-300">
					<svg width="615px" height="615px">
						<defs>
							<linearGradient id="shape2" x1="0%" x2="50%" y1="86.603%" y2="0%">
								<stop offset="0%" stop-color="rgb(82,63,255)" stop-opacity="0.6" />
								<stop offset="100%" stop-color="rgb(109,26,223)" stop-opacity="0.6" />
							</linearGradient>
						</defs>
						<path fill="url(#shape2)"
						 d="M307.500,0.000 C477.327,0.000 615.000,137.673 615.000,307.500 C615.000,477.327 477.327,615.000 307.500,615.000 C137.672,615.000 -0.000,477.327 -0.000,307.500 C-0.000,137.673 137.672,0.000 307.500,0.000 Z"/>
					</svg>
				</div>
			</li>
			<li class="shape3">
				<div class="translate-top-50 opacity-animation transition-50 transition-delay-600">
					<svg width="441px" height="441px">
						<defs>
							<linearGradient id="shape3" x1="0%" x2="50%" y1="86.603%" y2="0%">
								<stop offset="13%" stop-color="rgb(82,63,255)" stop-opacity="0.4" />
								<stop offset="100%" stop-color="rgb(130,33,221)" stop-opacity="0.4" />
							</linearGradient>
						</defs>
						<path fill="url(#shape3)"
						 d="M220.500,0.000 C342.279,0.000 441.000,98.721 441.000,220.500 C441.000,342.279 342.279,441.000 220.500,441.000 C98.721,441.000 -0.000,342.279 -0.000,220.500 C-0.000,98.721 98.721,0.000 220.500,0.000 Z"/>
					</svg>
				</div>
			</li>
		</ul>

		<?php } ?>

		<div class="container">
			<div class="entry-banner-content">
				<?php if ( is_single() ) { ?>
					<h1 class="entry-title"><?php echo wp_kses( $neuzin_title , 'alltext_allow' );?></h1>
				<?php } else if ( is_page() ) { ?>
					<h1 class="entry-title"><?php echo wp_kses( $neuzin_title , 'alltext_allow' );?></h1>
				<?php } else { ?>
					<h1 class="entry-title"><?php echo wp_kses( $neuzin_title , 'alltext_allow' );?></h1>
				<?php } ?>
				<?php if ( NeuzinTheme::$has_breadcrumb == '1' || NeuzinTheme::$has_breadcrumb == 'on' ) { ?>
					<?php get_template_part( 'template-parts/content', 'breadcrumb' );?>
				<?php } ?>
			</div>
		</div>
	</div>

<?php endif; ?>