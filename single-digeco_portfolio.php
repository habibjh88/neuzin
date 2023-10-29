<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */
if ( NeuzinTheme::$layout == 'full-width' ) {
	$neuzin_layout_class = 'col-sm-12 col-12';
}
else{
	$neuzin_layout_class = NeuzinTheme_Helper::has_active_widget();
}

$portfolio_layout_ops = NeuzinTheme::neuzin_options('portfolio_style');
$f_layout = ( empty( $portfolio_layout ) || ( $portfolio_layout  == 'default' ) ) ? $portfolio_layout_ops : $portfolio_layout;

?>

<?php get_header(); ?>
<div id="primary" class="content-area">
	<div class="container">
		<div class="row">
			<?php if ( NeuzinTheme::$layout == 'left-sidebar' ) { get_sidebar(); } ?>
				<div class="<?php echo esc_attr( $neuzin_layout_class );?>">
					<main id="main" class="site-main">
						<?php
							if ( $f_layout == 'style1' ) {							
								while ( have_posts() ) : the_post();
									get_template_part( 'template-parts/content-single', 'portfolio' );
								endwhile;
							} else if ( $f_layout == 'style2' ) {								
								while ( have_posts() ) : the_post();
									get_template_part( 'template-parts/content-single', 'portfolio-2' );
								endwhile;
							} else if ( $f_layout == 'style3' ) {								
								while ( have_posts() ) : the_post();
									get_template_part( 'template-parts/content-single', 'portfolio-3' );
								endwhile;
							} 
							else {
								while ( have_posts() ) : the_post();
									get_template_part( 'template-parts/content-single', 'portfolio' );
								endwhile;
							}
						?>
					</main>
				</div>
			<?php if ( NeuzinTheme::$layout == 'right-sidebar' ) { get_sidebar(); }	?>
		</div>
	</div>
</div>

<?php get_footer(); ?>


