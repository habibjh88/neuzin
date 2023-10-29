<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */

// Layout class
if ( NeuzinTheme::$layout == 'full-width' ) {
	$neuzin_layout_class = 'col-sm-12 col-12';
}
else{
	$neuzin_layout_class = NeuzinTheme_Helper::has_active_widget();
}
$neuzin_is_post_archive = is_home() || ( is_archive() && get_post_type() == 'post' ) ? true : false;

// CPT Redirection

if ( is_post_type_archive( "neuzin_service" ) || is_tax( "neuzin_service_category" ) ) {
		get_template_part( 'template-parts/archive', 'services' );
	return;
}
if ( is_post_type_archive( "neuzin_portfolio" ) || is_tax( "neuzin_portfolio_category" ) ) {
		get_template_part( 'template-parts/archive', 'portfolio' );
	return;
}
if ( is_post_type_archive( "neuzin_team" ) || is_tax( "neuzin_team_category" ) ) {
		get_template_part( 'template-parts/archive', 'team' );
	return;
}

?>
<?php get_header(); ?>
<div id="primary" class="content-area">
	<div class="container">
		<div class="row">
			<?php
			if ( NeuzinTheme::$layout == 'left-sidebar' ) {
				get_sidebar();
			}
			?>
			<div class="<?php echo esc_attr( $neuzin_layout_class );?>">
				<main id="main" class="site-main">				
					<?php
					if ( have_posts() ) { ?>
						<?php
						if ( $neuzin_is_post_archive && NeuzinTheme::neuzin_options('blog_style') == 'style1' ) {
							echo '<div class="row gutters-20 rt-masonry-grid">';
							while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content-1', get_post_format() );
							endwhile;
							echo '</div>';
						} else if ( $neuzin_is_post_archive && NeuzinTheme::neuzin_options('blog_style') == 'style2' ) {
							echo '<div class="auto-clear">';
							while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content-2', get_post_format() );
							endwhile;
							echo '</div>';
						} else if ( $neuzin_is_post_archive && NeuzinTheme::neuzin_options('blog_style') == 'style3' ) {
							echo '<div class="row rt-masonry-grid">';
							while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content-3', get_post_format() );
							endwhile;
							echo '</div>';
						} else if ( class_exists( 'Neuzin_Core' ) ) {
							if ( is_tax( 'neuzin_portfolio_category' ) ) {
								echo '<div class="row rt-masonry-grid">';
								while ( have_posts() ) : the_post();
									get_template_part( 'template-parts/content-1', get_post_format() );
								endwhile;
								echo '</div>';
							}							
						}
						else {
							while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content-1', get_post_format() );
							endwhile;
						}

						?>
						<?php NeuzinTheme_Helper::pagination(); ?>
						
					<?php } else {?>
						<?php get_template_part( 'template-parts/content', 'none' );?>
					<?php } ?>
				</main>
			</div>
			<?php
			if ( NeuzinTheme::$layout == 'right-sidebar' ) {
				get_sidebar();
			}
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>