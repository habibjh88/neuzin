<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */
use devofwp\Neuzin\Theme;
use devofwp\Neuzin\Helper;
$neuzin_has_entry_meta  = ( Theme::neuzin_options('post_author_name') || Theme::neuzin_options('post_date') || Theme::neuzin_options('post_comment_num') || Theme::neuzin_options('post_cats') || ( Theme::neuzin_options('post_length') && function_exists( 'neuzin_reading_time' ) ) ) ? true : false;

$neuzin_comments_number = number_format_i18n( get_comments_number() );
$neuzin_comments_html = $neuzin_comments_number == 1 ? esc_html__( 'Comment' , 'neuzin' ) : esc_html__( 'Comments' , 'neuzin' );
$neuzin_comments_html = '<span class="comment-number">'. $neuzin_comments_number .'</span> '. $neuzin_comments_html;
$neuzin_author_bio = get_the_author_meta( 'description' );

$author = $post->post_author;

$news_author_fb = get_user_meta( $author, 'neuzin_facebook', true );
$news_author_tw = get_user_meta( $author, 'neuzin_twitter', true );
$news_author_ld = get_user_meta( $author, 'neuzin_linkedin', true );
$news_author_gp = get_user_meta( $author, 'neuzin_gplus', true );
$news_author_pr = get_user_meta( $author, 'neuzin_pinterest', true );
$neuzin_author_designation = get_user_meta( $author, 'neuzin_author_designation', true );

?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<?php if ( Theme::neuzin_options('post_featured_image') == true ) { ?>
			<?php if ( has_post_thumbnail() ) { ?>
				<div class="entry-thumbnail-area"><?php the_post_thumbnail( 'neuzin-size1' , ['class' => 'img-responsive'] ); ?></div>
			<?php } ?>
		<?php } ?>
		
		<div class="entry-meta">
			<?php if ( $neuzin_has_entry_meta ) { ?>
			<ul class="post-light">
				<?php if ( Theme::neuzin_options('post_date') ) { ?>			
				<li><i class="far fa-calendar-alt" aria-hidden="true"></i><?php echo get_the_date(); ?></li>	
				<?php } if ( Theme::neuzin_options('post_author_name') ) { ?>
				<li class="item-author"><i class="far fa-user" aria-hidden="true"></i><?php esc_html_e( 'by ', 'neuzin' );?><?php the_author_posts_link(); ?></li>
				<?php } if ( Theme::neuzin_options('post_cats') ) { ?>			
				<li class="blog-cat"><i class="fas fa-tags" aria-hidden="true"></i><?php echo the_category( ', ' );?></li>
				<?php } if ( Theme::neuzin_options('post_length') && function_exists( 'neuzin_reading_time' ) ) { ?>
				<li class="meta-reading-time meta-item"><i class="far fa-clock" aria-hidden="true"></i><?php echo neuzin_reading_time(); ?></li>				
				<?php } if ( Theme::neuzin_options('post_comment_num') ) { ?>
				<li><i class="far fa-comments" aria-hidden="true"></i><?php echo wp_kses( $neuzin_comments_html , 'alltext_allow' ); ?></li>
				<?php } ?>
			</ul>
			<?php } ?>
			
			<div class="clear"></div>
		</div>
		
	</div>
	<div class="entry-content rt-single-content"><?php the_content();?>
		<?php wp_link_pages( array(
			'before'      => '<div class="page-links">' . esc_html( 'Pages:', 'neuzin' ),
			'after'       => '</div>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		) ); ?>
	</div>
	<?php if ( ( Theme::neuzin_options('post_view') && function_exists( 'neuzin_views' ) ) || ( Theme::neuzin_options('post_tags') && has_tag() ) || Theme::neuzin_options('post_share') ) { ?>
	<div class="entry-footer">
		<div class="entry-footer-meta">
			<?php if ( Theme::neuzin_options('post_view') && function_exists( 'neuzin_views' ) ) { ?>
			<div class="item-view"><i class="fas fa-chart-line" aria-hidden="true"></i><?php echo neuzin_views(); ?></div>
			<?php } if ( ( Theme::neuzin_options('post_share') ) && ( function_exists( 'neuzin_post_share' ) ) ) { ?>
			<div class="post-share"><span><?php esc_html_e( 'Share :', 'neuzin' );?></span><?php neuzin_post_share(); ?></div>
			<?php } if ( Theme::neuzin_options('post_tags') && has_tag() ) { ?>
			<div class="item-tags">
				<span><?php esc_html_e( 'Tags :', 'neuzin' );?></span><?php echo get_the_term_list( $post->ID, 'post_tag', '' ,',&nbsp; &nbsp;' ,'' ); ?>
			</div>
			<?php } ?>			
		</div>
	</div>
	<?php } ?>
	<!-- author bio -->
	<?php if ( Theme::neuzin_options('post_author_bio') == '1' ) { ?>
		<?php if ( !empty ( $neuzin_author_bio ) ) { ?>
		<div class="media about-author">
			<div class="<?php if ( is_rtl() ) { ?>pull-right<?php } else { ?>pull-left<?php } ?>">
				<?php echo get_avatar( $author, 105 ); ?>
			</div>
			<div class="media-body">
				<div class="about-author-info">
					<h3 class="author-title"><?php the_author_posts_link();?></h3>
				</div>
				<ul class="author-box-social">
					<?php if ( ! empty( $news_author_fb ) ){ ?><li><a href="<?php echo esc_attr( $news_author_fb ); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li><?php } ?>
					<?php if ( ! empty( $news_author_tw ) ){ ?><li><a href="<?php echo esc_attr( $news_author_tw ); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><?php } ?>
					<?php if ( ! empty( $news_author_gp ) ){ ?><li><a href="<?php echo esc_attr( $news_author_gp ); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li><?php } ?>
					<?php if ( ! empty( $news_author_ld ) ){ ?><li><a href="<?php echo esc_attr( $news_author_ld ); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li><?php } ?>
					<?php if ( ! empty( $news_author_pr ) ){ ?><li><a href="<?php echo esc_attr( $news_author_pr ); ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li><?php } ?>
				</ul>
				<?php if ( $neuzin_author_bio ) { ?>
				<div class="author-bio"><?php echo esc_html( $neuzin_author_bio );?></div>
				<?php } ?>
			</div>
			<div class="clear"></div>
		</div>
		<?php } ?>
	<?php } ?>
	
	<?php if( Theme::neuzin_options('show_related_post') == '1' && is_single() && !empty ( neuzin_related_post() ) ) { ?>
		<div class="related-post">
			<?php neuzin_related_post(); ?>
		</div>
	<?php } ?>
	<?php
	if ( comments_open() || get_comments_number() ){
		comments_template();
	}
	?>	
</div>