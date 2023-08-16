<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

$thumb_size 			= 'neuzin-size5';
$id            			= get_the_id();
$excerpt_count			= NeuzinTheme::neuzin_options('portfolio_excerpt_display_limit');
$excerpt = wp_trim_words( get_the_excerpt(), $excerpt_count, '' );

$icon_class 			= '' ;
if ( empty( $neuzin_service_icon ) && empty( $neuzin_service_img )  ) {
	$icon_class 		= ' no-icon';	
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'rt-el-service-grid-1' ); ?>>
	<div class="rtin-item">
		<div class="rtin-figure">
			<a href="<?php the_permalink(); ?>">
				<?php
					if ( has_post_thumbnail() ){
						the_post_thumbnail( $thumb_size, ['class' => 'img-fluid mb-10 width-100'] );
					} else {
						if ( !empty( NeuzinTheme::neuzin_options('no_preview_image')['id'] ) ) {
							echo wp_get_attachment_image( NeuzinTheme::neuzin_options('no_preview_image')['id'], $thumb_size );
						} else {
							echo '<img class="wp-post-image" src="' . NeuzinTheme_Helper::get_img( 'noimage_442X500.jpg' ) . '" alt="'.get_the_title().'">';
						}
					}
				?>
			</a>
		</div>
		<div class="rtin-content">
			<div class="rtin-icon"><a href="<?php the_permalink(); ?>"><i class="fas fa-plus" aria-hidden="true"></i></a></div>
			<h3 class="rtin-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
			<?php if ( NeuzinTheme::neuzin_options('portfolio_cat_display')  ) { ?>
			<div class="rtin-cat"><?php
				$i = 1;
				$term_lists = get_the_terms( get_the_ID(), 'neuzin_portfolio_category' );
				foreach ( $term_lists as $term_list ){ 
				$link = get_term_link( $term_list->term_id, 'neuzin_portfolio_category' ); ?><?php if ( $i > 1 ){ echo esc_html( ', ' ); } ?><a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( $term_list->name ); ?></a><?php $i++; } ?></div>
			<?php } ?>
			<?php if ( NeuzinTheme::neuzin_options('portfolio_excerpt_display') ) { ?>
			<p><?php echo wp_kses_post( $excerpt );?></p>
			<?php } ?>
		</div>
	</div>
</article>