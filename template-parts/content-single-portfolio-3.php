<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */
use devofwp\Neuzin\Theme;
use devofwp\Neuzin\Helper;
$thumb_size = 'neuzin-size5';

$neuzin_has_entry_meta  = ( Theme::neuzin_options('port_info_title') || Theme::neuzin_options('port_info_des') || Theme::neuzin_options('port_start_date') || Theme::neuzin_options('port_finish_date') || Theme::neuzin_options('port_client') || Theme::neuzin_options('port_cats') || Theme::neuzin_options('port_tags') || Theme::neuzin_options('port_website') || Theme::neuzin_options('port_share') || Theme::neuzin_options('port_rating') ) ? true : false;

global $post;
$neuzin_port_info_title  		= get_post_meta( $post->ID, 'neuzin_port_info_title', true );
$neuzin_port_des  				= get_post_meta( $post->ID, 'neuzin_port_des', true );
$neuzin_client_name  			= get_post_meta( $post->ID, 'neuzin_client_name', true );
$neuzin_start_date  			= get_post_meta( $post->ID, 'neuzin_start_date', true );
$neuzin_finish_date  			= get_post_meta( $post->ID, 'neuzin_finish_date', true );
$neuzin_website  				= get_post_meta( $post->ID, 'neuzin_website', true );

$neuzin_port_image  			= get_post_meta( $post->ID, 'neuzin_port_image', true );

$ratting	 					= get_post_meta( $post->ID, 'neuzin_port_rating', true );
$rest_port_rating 				= 5- intval( $ratting ) ;

$cats   						= wp_get_post_terms( $post->ID, 'neuzin_portfolio_category', array( "fields" => "names" ) );
$cats   						= implode( ', ', $cats );

$tags   						= wp_get_post_terms( $post->ID, 'post_tag', array( "fields" => "names" ) );
$tags   						= implode( ', ', $tags );

$socials        				= get_post_meta( $post->ID, 'neuzin_portfolio_icons', true );
$socials        				= array_filter( $socials );
$socials_fields 				= Helper::team_socials();

$neuzin_port_meta = ( !empty($neuzin_port_info_title) ) || ( !empty( $neuzin_port_des ) ) || ( !empty($neuzin_client_name) ) || ( !empty($neuzin_start_date) ) || ( !empty($neuzin_finish_date) ) || ( !empty($neuzin_website) ) || ( !empty( $cats ) || ( !empty( $socials ) ) ) ? true : false;

if ( $neuzin_has_entry_meta ) {
	if ( $neuzin_port_meta ) {
		$port_thumb_class = 'col-lg-6 col-12';
	} else {
		$port_thumb_class = 'col-lg-12 col-12';	
	}
} else {
	$port_thumb_class = 'col-lg-12 col-12';
}


?>
<div id="post-<?php the_ID();?>" <?php post_class( 'portfolio-single portfolio-single-3' );?>>
	<div class="row">
		<div class="col-lg-6 col-12">
			<div class="rtin-thumbnail">
				<?php if ( has_post_thumbnail() ) { ?>
				<?php
					the_post_thumbnail( $thumb_size );
				} else {
					if ( !empty( Theme::neuzin_options('no_preview_image')['id'] ) ) {
						echo wp_get_attachment_image( Theme::neuzin_options('no_preview_image')['id'], $thumb_size );
					} else {
						echo '<img class="wp-post-image" src="' . Helper::get_img( 'noimage_520X562.jpg' ) . '" alt="'.get_the_title().'">';
					} } ?>
			</div>			
		</div>
		<?php if ( $neuzin_has_entry_meta ) { ?>
		<?php if ( $neuzin_port_meta ) { ?>
		<div class="<?php echo esc_attr( $port_thumb_class ); ?>">
			<div class="rtin-portfolio-content">
				<?php the_content();?>
			</div>
			<div class="portfolio-details">				
				<?php if ( ( Theme::neuzin_options('port_info_title') )  && !empty( $neuzin_port_info_title ) ) { ?>	
					<h3><?php echo wp_kses( $neuzin_port_info_title , 'alltext_allow' );?></h3>
				<?php } ?>
				<?php if ( ( Theme::neuzin_options('port_info_des') )  && !empty( $neuzin_port_des ) ) { ?>	
					<p><?php echo wp_kses( $neuzin_port_des , 'alltext_allow' );?></p>
				<?php } ?>
				<ul class="rtin-portfolio-info">
					<?php if ( ( Theme::neuzin_options('port_client') )  && !empty( $neuzin_client_name ) ) { ?>	
						<li><span class="rtin-label"><?php esc_html_e( 'Client', 'neuzin' );?></span><?php echo esc_html( $neuzin_client_name );?></li>
					<?php } if ( ( Theme::neuzin_options('port_cats') )  && !empty( $cats ) ) { ?>	
						<li><span class="rtin-label"><?php esc_html_e( 'Category', 'neuzin' );?></span><?php echo wp_kses( $cats , 'alltext_allow' );?></li>
					<?php } if ( ( Theme::neuzin_options('port_tags') ) && !empty ( $tags ) ) { ?>
						<li><span class="rtin-label"><?php esc_html_e( 'Tags', 'neuzin' );?></span><?php the_tags('',', ', '');?></li>
					<?php } if ( ( Theme::neuzin_options('port_start_date') ) && !empty( $neuzin_start_date ) ) { ?>	
						<li><span class="rtin-label"><?php esc_html_e( 'Start Date', 'neuzin' );?></span><?php echo esc_html( $neuzin_start_date );?></li>
					<?php } if ( ( Theme::neuzin_options('port_finish_date') ) && !empty( $neuzin_finish_date ) ) { ?>	
						<li><span class="rtin-label"><?php esc_html_e( 'End Date', 'neuzin' );?></span><?php echo esc_html( $neuzin_finish_date );?></li>
					<?php } if ( ( Theme::neuzin_options('port_website') ) && !empty ( $neuzin_website ) ) { ?>
						<li><span class="rtin-label"><?php esc_html_e( 'Website', 'neuzin' );?></span><?php echo wp_kses( $neuzin_website , 'alltext_allow' );?></li>
					<?php } if ( ( Theme::neuzin_options('port_share') ) && !empty( $socials ) ) { ?>
						<li class="port-share"><span class="rtin-label"><?php esc_html_e( 'Share', 'neuzin' );?></span> 
							<ul class="rtin-social">
								<?php foreach ( $socials as $key => $value ): ?>
									<li><a target="_blank" href="<?php echo esc_url( $value ); ?>"><i class="fab <?php echo esc_attr( $socials_fields[$key]['icon'] );?>"></i></a></li>
								<?php endforeach; ?>
							</ul>
						</li>
					
					<?php } if ( Theme::neuzin_options('port_rating') ) { ?>	
						<li class="port-rating"><span class="rtin-label"><?php esc_html_e( 'Rating', 'neuzin' );?></span>
							<ul class="rating">
								<?php for ($i=0; $i < $ratting; $i++) { ?>
									<li class="star-rate"><i class="fa fa-star" aria-hidden="true"></i></li>
								<?php } ?>			
								<?php for ($i=0; $i < $rest_port_rating; $i++) { ?>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<?php } ?>
							</ul></li>
					<?php } ?>						
				</ul>
			</div>
		</div>
		<?php } ?>
	<?php } ?>
	</div>
	<?php if( Theme::neuzin_options('show_related_port') == '1' && is_single() && !empty ( neuzin_related_post() ) ) { ?>
	<div class="related-post">
		<?php neuzin_related_post(); ?>
	</div>
	<?php } ?>
</div>