<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */
use devofwp\Neuzin\Theme;
use devofwp\Neuzin\Helper;
?>
<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content-single', 'team' );?>
		<?php endwhile; ?>
	</main>
</div>
<?php get_footer(); ?>