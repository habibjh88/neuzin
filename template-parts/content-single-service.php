<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */
$thumb_size = 'neuzin-size1';

global $post;

$neuzin_service_contact  		= get_post_meta( get_the_ID(), 'neuzin_service_contact', true );
$neuzin_service_email  			= get_post_meta( get_the_ID(), 'neuzin_service_email', true );
$neuzin_service_button  		= get_post_meta( get_the_ID(), 'neuzin_service_button', true );
$neuzin_service_url  		    = get_post_meta( get_the_ID(), 'neuzin_service_url', true );

?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'service-single' ); ?>>
	<div class="single-service-inner">
		<?php if ( !empty(has_post_thumbnail() ) ){ ?>
		<div class="post-thumb">
			<?php
				if ( has_post_thumbnail() ){
					the_post_thumbnail( $thumb_size );
				}
			?>
		</div>
		<?php } ?>		
		<?php if ( ( NeuzinTheme::neuzin_options('service_contact') ) && !empty ( $neuzin_service_contact ) || ( NeuzinTheme::neuzin_options('service_email') ) && !empty ( $neuzin_service_email ) ) { ?>		
		<ul class="rtin-service-info">			
			<?php if ( ( NeuzinTheme::neuzin_options('service_contact') ) && !empty ( $neuzin_service_contact ) ) { ?>
				<li><span class="rtin-label"><?php esc_html_e( 'Contact', 'neuzin' );?> :</span><?php echo wp_kses_post( $neuzin_service_contact );?></li>
			<?php } if ( ( NeuzinTheme::neuzin_options('service_email') ) && !empty ( $neuzin_service_email ) ) { ?>
				<li><span class="rtin-label"><?php esc_html_e( 'E-mail', 'neuzin' );?> :</span><?php echo wp_kses_post( $neuzin_service_email );?></li>
			<?php } ?>
		</ul>
		<?php } ?>			
		<?php the_content(); ?>
		<?php if ( ( NeuzinTheme::neuzin_options('service_button') ) && !empty ( $neuzin_service_button ) ) { ?>
		<div class="service-button">
		<a href="<?php echo esc_url ( $neuzin_service_url ); ?>" class="button-gradient-1"><?php echo wp_kses_post( $neuzin_service_button );?><i class="flaticon-next"></i></a>
		<?php } ?>
		</div>
	</div>
</div>