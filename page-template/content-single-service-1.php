<?php
/**
 * Template Name: Service style 1
 * 
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */
$thumb_size = 'neuzin-size1';

?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'service-single' ); ?>>
	<div class="single-service-inner">
		<div class="post-thumb">
			<?php
				if ( has_post_thumbnail() ){
					the_post_thumbnail( $thumb_size );
				} else {
					if ( !empty( NeuzinTheme::neuzin_options('no_preview_image')['id'] ) ) {
						echo wp_get_attachment_image( NeuzinTheme::neuzin_options('no_preview_image')['id'], $thumb_size );
					} else {
						echo '<img class="wp-post-image" src="' . NeuzinTheme_Helper::get_img( 'noimage_1210X723.jpg' ) . '" alt="'.get_the_title().'">';
					}
				}
			?>			
		</div>
		<?php the_content(); ?>
	</div>
</div>