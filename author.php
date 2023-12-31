<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */
use devofwp\Neuzin\Theme;
use devofwp\Neuzin\Helper;
// Layout class
if ( Theme::$layout == 'full-width' ) {
	$neuzin_layout_class = 'col-sm-12 col-12';
}
else{
	$neuzin_layout_class = 'col-lg-9 col-md-12 col-12';
}
$neuzin_is_post_archive = is_home() || ( is_archive() && get_post_type() == 'post' ) ? true : false;

$neuzin_author_bio      = get_the_author_meta( 'description' );
$subtitle = get_post_meta( get_the_ID(), 'neuzin_subtitle', true );
$author = $post->post_author;

$news_author_fb = get_user_meta( $author, 'neuzin_facebook', true );
$news_author_tw = get_user_meta( $author, 'neuzin_twitter', true );
$news_author_ld = get_user_meta( $author, 'neuzin_linkedin', true );
$news_author_gp = get_user_meta( $author, 'neuzin_gplus', true );
$news_author_pr = get_user_meta( $author, 'neuzin_pinterest', true );
$neuzin_author_designation = get_user_meta( $author, 'neuzin_author_designation', true );
?>
<?php get_header(); ?>
<div id="primary" class="content-area">
	<div class="container">
		<div class="row">
			<?php if ( Theme::$layout == 'left-sidebar' ) { get_sidebar(); } ?>
			<div class="<?php echo esc_attr( $neuzin_layout_class );?>">
				<main id="main" class="site-main">
					<!-- author bio -->
					<?php if ( Theme::neuzin_options('post_author_bio') == '1' ) { ?>
						<div class="media about-author">
							<div class="<?php if ( is_rtl() ) { ?>pull-right<?php } else { ?>pull-left<?php } ?>">
								<?php echo get_avatar( $author, 105 ); ?>
							</div>
							<div class="media-body">
								<div class="about-author-info">
									<div class="author-title"><?php the_author_posts_link();?></div>
									<div class="author-designation"><?php if ( !empty ( $neuzin_author_designation ) ) {	echo esc_html( $neuzin_author_designation ); } else {	$user_info = get_userdata( $author ); echo esc_html ( implode( ', ', $user_info->roles ) );	} ?></div>
								</div>
								<?php if ( $neuzin_author_bio ) { ?>
								<div class="author-bio"><?php echo esc_html( $neuzin_author_bio );?></div>
								<?php } ?>
								<div class="about-author-social">
								<?php ?>
									<ul class="author-box-social">
										<?php if ( ! empty( $news_author_fb ) ){ ?><li><a href="<?php echo esc_attr( $news_author_fb ); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li><?php } ?>
										<?php if ( ! empty( $news_author_tw ) ){ ?><li><a href="<?php echo esc_attr( $news_author_tw ); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><?php } ?>
										<?php if ( ! empty( $news_author_gp ) ){ ?><li><a href="<?php echo esc_attr( $news_author_gp ); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li><?php } ?>
										<?php if ( ! empty( $news_author_ld ) ){ ?><li><a href="<?php echo esc_attr( $news_author_ld ); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li><?php } ?>
										<?php if ( ! empty( $news_author_pr ) ){ ?><li><a href="<?php echo esc_attr( $news_author_pr ); ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li><?php } ?>
									</ul>
								<?php ?>
								</div>
							</div>
							<div class="clear"></div>
						</div>			
					<?php } ?>
					<?php if ( have_posts() ) : ?>
						<?php
							while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content-3', get_post_format() );
							endwhile;
						?>
						<div class="mt50"><?php Helper::pagination();?></div>
					<?php else: ?>
						<?php get_template_part( 'template-parts/content', 'none' );?>
					<?php endif;?>
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