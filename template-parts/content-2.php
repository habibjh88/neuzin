<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */
use devofwp\Neuzin\Theme;
use devofwp\Neuzin\Helper;

$neuzin_has_entry_meta  = ( Theme::neuzin_options('blog_cats') || Theme::neuzin_options('blog_date') || Theme::neuzin_options('blog_author_name') || Theme::neuzin_options('blog_comment_num') || Theme::neuzin_options('blog_view') && function_exists( 'neuzin_views' ) || Theme::neuzin_options('blog_length') && function_exists( 'neuzin_reading_time' ) ) ? true : false;

$thumb_size = 'neuzin-size1';
$neuzin_time_html       = sprintf( '%s<span>%s</span><span>%s</span>', get_the_time( 'd' ), get_the_time( 'M' ), get_the_time( 'Y' ) );
$neuzin_time_html       = apply_filters( 'neuzin_single_time', $neuzin_time_html );
$neuzin_time_html_2     = apply_filters( 'neuzin_single_time_no_thumb', get_the_time( get_option( 'date_format' ) ) );

$neuzin_comments_number = number_format_i18n( get_comments_number() );
$neuzin_comments_html = $neuzin_comments_number == 1 ? esc_html__( 'Comment' , 'neuzin' ) : esc_html__( 'Comments' , 'neuzin' );
$neuzin_comments_html = '<span class="comment-number">'. $neuzin_comments_number .'</span> '. $neuzin_comments_html;

$id = get_the_ID();
$content = get_the_content();
$content = apply_filters( 'the_content', $content );
$content = wp_trim_words( get_the_excerpt(), Theme::neuzin_options('post_content_limit'), '' );

?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'blog-layout-2' ); ?>>
	<div class="blog-box">
		<?php if ( has_post_thumbnail() || Theme::neuzin_options('display_no_preview_image') == '1'  ) { ?>
			<div class="blog-item-figure">
				<div class="blog-img">
					<a href="<?php the_permalink(); ?>" class="img-opacity-hover"><?php if ( has_post_thumbnail() ) { ?>
						<?php the_post_thumbnail( $thumb_size, ['class' => 'img-responsive'] ); ?>
						<?php } else {
						if ( Theme::neuzin_options('display_no_preview_image') == '1' ) {
							if ( !empty( Theme::neuzin_options('no_preview_image')['id'] ) ) {
								$thumbnail = wp_get_attachment_image( Theme::neuzin_options('no_preview_image')['id'], $thumb_size );						
							}
							elseif ( empty( Theme::neuzin_options('no_preview_image')['id'] ) ) {
								$thumbnail = '<img class="wp-post-image" src="'.NEUZIN_IMG_URL.'noimage_1210X660.jpg" alt="'. the_title_attribute( array( 'echo'=> false ) ) .'">';
							}
							echo wp_kses( $thumbnail , 'alltext_allow' );
						}
					}
					?>
					</a>
				</div>
			</div>
		<?php } ?>
		<div class="blog-item-content">
			<?php if ( $neuzin_has_entry_meta ) { ?>
			<ul class="blog-meta">
				<?php if ( Theme::neuzin_options('blog_date') ) { ?>
				<li><?php echo get_the_date(); ?></li>
				<?php } if ( Theme::neuzin_options('blog_author_name') ) { ?>
				<li class="item-author"><?php esc_html_e( 'by ', 'neuzin' );?><?php the_author_posts_link(); ?></li>
				<?php } if ( Theme::neuzin_options('blog_cats') ) { ?>
				<li class="blog-cat"><?php echo the_category( ', ' );?></li>
				<?php } if ( Theme::neuzin_options('blog_comment_num') ) { ?>
				<li><a href="<?php echo get_comments_link( get_the_ID() ); ?>"><?php echo wp_kses( $neuzin_comments_html , 'alltext_allow' );?></a></li>
				<?php } if ( Theme::neuzin_options('blog_length') && function_exists( 'neuzin_reading_time' ) ) { ?>
				<li class="meta-reading-time meta-item"><?php echo neuzin_reading_time(); ?></li>
				<?php } if ( Theme::neuzin_options('blog_view') && function_exists( 'neuzin_views' ) ) { ?>
				<li><span class="meta-views meta-item "><?php echo neuzin_views(); ?></span></li>
				<?php } ?>
			</ul>
			<?php } ?>
			<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
			<p><?php echo wp_trim_words( get_the_excerpt(), Theme::neuzin_options('post_content_limit'), '' );?></p>
			<a class="button-1" href="<?php the_permalink();?>"><?php esc_html_e( 'Read More', 'neuzin' );?><i class="flaticon-next"></i></a>
		</div>
	</div>
</div>