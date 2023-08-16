<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Neuzin_Core;

use NeuzinTheme;
use NeuzinTheme_Helper;
use \WP_Query;

$prefix      = NEUZIN_CORE_THEME_PREFIX;
$thumb_size  = 'neuzin-size5';

if ( get_query_var('paged') ) {
	$paged = get_query_var('paged');
}
else if ( get_query_var('page') ) {
	$paged = get_query_var('page');
}
else {
	$paged = 1;
}

$args = array(
	'post_type'      => 'neuzin_team',
	'paged' => $paged
);

$query = new WP_Query( $args );
$temp = NeuzinTheme_Helper::wp_set_temp_query( $query );

$id            	= get_the_id();
$designation   	= get_post_meta( $id, 'neuzin_team_designation', true );
$socials       	= get_post_meta( $id, 'neuzin_team_socials', true );
$social_fields 	= NeuzinTheme_Helper::team_socials();

$content = get_the_content();
$content = apply_filters( 'the_content', $content );
$content = wp_trim_words( get_the_excerpt(), NeuzinTheme::neuzin_options('team_content_limit'), '' );
$content = "<p>$content</p>";

?>

<article id="post-<?php the_ID(); ?>">
	<div class="rtin-item">
		<div class="rtin-content-wrap">
			<div class="maks-item animted-bg-wrap">
				<span class="animted-bg"></span>
				<div class="rtin-figure">
					<a href="<?php the_permalink();?>">
					<?php
					if ( has_post_thumbnail() ){
						the_post_thumbnail( $thumb_size );
					}
					else {
						if ( !empty( NeuzinTheme::neuzin_options('no_preview_image')['id'] ) ) {
							echo wp_get_attachment_image( NeuzinTheme::neuzin_options('no_preview_image')['id'], $thumb_size );
						}
						else {
							echo '<img class="wp-post-image" src="' . NeuzinTheme_Helper::get_img( 'noimage_520X562.jpg' ) . '" alt="'.get_the_title().'">';
						}
					}
					?>
				</a>
				<?php if ( !empty( $socials ) && NeuzinTheme::neuzin_options('team_social_display') ) { ?>
				<ul class="rtin-social">
					<?php foreach ( $socials as $key => $social ): ?>
						<?php if ( !empty( $social ) ): ?>
							<li><a target="_blank" href="<?php echo esc_url( $social );?>"><i class="fab <?php echo esc_attr( $social_fields[$key]['icon'] );?>" aria-hidden="true"></i></a></li>
						<?php endif; ?>
					<?php endforeach; ?>
				</ul>
				<?php } ?>
				</div>
			</div>
			<div class="mask-wrap">
				<div class="rtin-content">
					<h3 class="rtin-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
					<?php if ( $designation && NeuzinTheme::neuzin_options('team_desi_display') ) { ?>
						<div class="rtin-designation"><?php echo esc_html( $designation );?></div>
					<?php } ?>
					<?php if( NeuzinTheme::neuzin_options('team_excerpt_display') ) { ?>
					<?php echo wp_kses_post( $content ); ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<?php NeuzinTheme_Helper::wp_reset_temp_query( $temp ); ?>
</article>