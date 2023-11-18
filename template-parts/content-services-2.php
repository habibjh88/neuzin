<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */
use devofwp\Neuzin\Theme;
use devofwp\Neuzin\Helper;
$thumb_size 			= 'neuzin-size5';
$id            			= get_the_id();
$excerpt_count			= Theme::neuzin_options('excerpt_display_limit');
$excerpt 				= wp_trim_words( get_the_excerpt(), $excerpt_count, '' );
$neuzin_service_icon   	= get_post_meta( get_the_ID(), 'neuzin_service_icon', true );
$neuzin_service_img   	= get_post_meta( get_the_ID(), 'neuzin_service_img', true );
$icon_class 			= '' ;
if ( empty( $neuzin_service_icon ) && empty( $neuzin_service_img )  ) {
	$icon_class 		= ' no-icon';	
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'rt-el-service-grid-2' ); ?>>
	<div class="rtin-item <?php echo esc_attr( $icon_class ); ?>">
		<div class="rtin-content">
			<?php if (!empty( $neuzin_service_icon ) || !empty( $neuzin_service_img )) { ?>
				<div class="rtin-icon">
					<?php if ( $neuzin_service_img ) : ?>
						<span><?php echo wp_get_attachment_image( $neuzin_service_img, 'full' );?></span>
					<?php else: ?>
						<span><i class="<?php echo wp_kses_post( $neuzin_service_icon );?>"></i></span>
					<?php endif; ?>
				</div>
			<?php } ?>
				<h3 class="rtin-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>			
			<?php if ( Theme::neuzin_options('excerpt_display') ) { ?>
				<p><?php echo wp_kses_post( $excerpt );?></p>
			<?php } ?>			
			<?php if ( Theme::neuzin_options('read_display') ) { ?>
				<div class="rtin-read">
					<a class="button-1" href="<?php the_permalink(); ?>">
						<?php echo esc_html( Theme::neuzin_options('service_readmore_text') );?>
						<i class="flaticon-next"></i>
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
</article>