<?php
/**
 * Template Name: Blog 3
 * 
 * @author  RadiusTheme
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

$args = array(
	'post_type' => "post",
);

if ( get_query_var('paged') ) {
	$args['paged'] = get_query_var('paged');
}
elseif ( get_query_var('page') ) {
	$args['paged'] = get_query_var('page');
}
else {
	$args['paged'] = 1;
}

$query = new WP_Query( $args );

global $wp_query;
$wp_query = NULL;
$wp_query = $query;
 
get_header(); ?>
<div id="primary" class="content-area">
	<div class="container">
		<div class="row">
			<?php if ( NeuzinTheme::$layout == 'left-sidebar' ) { get_sidebar(); } ?>
			<div class="<?php echo esc_attr( $neuzin_layout_class );?>">
				<main id="main" class="site-main">
					
					<?php if ( have_posts() ) :?>
						<?php
							echo '<div class="blog-layout-3 row rt-masonry-grid">';
							while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content-3', get_post_format() );
							endwhile;
							echo '</div>';
						?>
						<div class="mt50"><?php NeuzinTheme_Helper::pagination();?></div>
					<?php else:?>
						<?php get_template_part( 'template-parts/content', 'none' );?>
					<?php endif;?>
					
				</main>
			</div>
			<?php if ( NeuzinTheme::$layout == 'right-sidebar' ) { get_sidebar(); }	?>
		</div>
	</div>
</div>
<?php get_footer(); ?>