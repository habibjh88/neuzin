<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */
use devofwp\Neuzin\Theme;
use devofwp\Neuzin\Helper;
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
// Layout class
if ( Theme::$layout == 'full-width' ) {
	$neuzin_layout_class = 'col-sm-12 col-12';
} else {
	$neuzin_layout_class = Helper::has_active_widget();
}
?>
<?php get_header(); ?>
<div id="primary" class="content-area">
	<div class="container">
		<div class="row">
			<?php
			if ( Theme::$layout == 'left-sidebar' ) {
				get_sidebar();
			}
			?>
			<div class="<?php echo esc_attr( $neuzin_layout_class );?>">
				<main id="main" class="site-main">
					<div class="rt-search-post">
						<?php if ( have_posts() ) :?>
								<?php while ( have_posts() ) : the_post();
									$excerpt_length = Theme::neuzin_options('search_excerpt_length');
									get_template_part( 'template-parts/content-search', 'search' );
								?>
								<?php endwhile; ?>
						<?php else:?>
							<?php get_template_part( 'template-parts/content', 'none' );?>
						<?php endif;?>
					</div>
					<?php Helper::pagination();?>
				</main>					
			</div>
			<?php
			if ( Theme::$layout == 'right-sidebar' ) {
				get_sidebar();
			}
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>