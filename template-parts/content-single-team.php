<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */
use devofwp\Neuzin\Theme;
use devofwp\Neuzin\Helper;
global $post;

$neuzin_team_designation 	= get_post_meta( $post->ID, 'neuzin_team_designation', true );
$neuzin_team_email    		= get_post_meta( $post->ID, 'neuzin_team_email', true );
$neuzin_team_phone    		= get_post_meta( $post->ID, 'neuzin_team_phone', true );
$neuzin_team_address    	= get_post_meta( $post->ID, 'neuzin_team_address', true );
$neuzin_team_skill       	= get_post_meta( $post->ID, 'neuzin_team_skill', true );
$neuzin_team_counter      	= get_post_meta( $post->ID, 'neuzin_team_count', true );
$socials        			= get_post_meta( $post->ID, 'neuzin_team_socials', true );
$socials        			= array_filter( $socials );
$socials_fields 			= Helper::team_socials();

$neuzin_team_contact_form 	= get_post_meta( $post->ID, 'neuzin_team_contact_form', true );

$thumb_size = 'neuzin-size5';
?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'team-single' ); ?>>
	<div class="team-content-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-12">
					<div class="rtin-thumb">
						<?php
							if ( has_post_thumbnail() ){
								the_post_thumbnail( $thumb_size );
							} else {
								if ( !empty( Theme::neuzin_options('no_preview_image')['id'] ) ) {
									echo wp_get_attachment_image( Theme::neuzin_options('no_preview_image')['id'], $thumb_size );
								} else {
									echo '<img class="wp-post-image" src="' . Helper::get_img( 'noimage_520X562.jpg' ) . '" alt="'.get_the_title().'">';
								}
							}
						?>	
					</div>
				</div>
				<div class="col-md-8 col-12">
					<div class="rtin-content">
						<div class="rtin-heading">
							<?php if ( $neuzin_team_designation ) { ?>
							<h3 class="designation"><?php echo esc_html( $neuzin_team_designation );?></h3>
							<?php } ?>
						</div>
						<?php if ( !empty( $socials ) ) { ?>
						<ul class="rtin-social"><li class="share"><i class="fas fa-share-alt" aria-hidden="true"></i></li>
							<?php foreach ( $socials as $key => $value ): ?>
								<li><a target="_blank" href="<?php echo esc_url( $value ); ?>"><i class="fab <?php echo esc_attr( $socials_fields[$key]['icon'] );?>"></i></a></li>
							<?php endforeach; ?>
						</ul>						
						<?php } ?>
						<ul class="rtin-team-info">
							<?php if ( !empty( $neuzin_team_phone ) ) { ?>	
								<li>
									<i class="flaticon-phone"></i>
									<a href="mailto:<?php echo esc_html( $neuzin_team_phone );?>"><?php echo esc_html( $neuzin_team_phone );?></a>
								</li>
							<?php } if ( !empty( $neuzin_team_email ) ) { ?>	
								<li>
									<i class="flaticon-mail"></i>
									<a href="mailto:<?php echo esc_html( $neuzin_team_email );?>"><?php echo esc_html( $neuzin_team_email );?></a>
								</li>
							<?php } if ( !empty( $neuzin_team_address ) ) { ?>	
								<li>
									<i class="flaticon-marker"></i>
								    <?php echo esc_html( $neuzin_team_address );?>
								</li>							
							<?php } ?>
						</ul>
						<?php the_content();?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Team Skills -->
	<?php if ( !empty( $neuzin_team_skill ) || !empty( $neuzin_team_contact_form ) ) { ?>
	<div class="team-skill-wrap">
		<div class="container">
			<div class="skill-contact">
				<?php if ( !empty( $neuzin_team_skill ) ) { ?>
				<div class="rtin-skills">
					<h3><?php esc_html_e( 'Skill', 'neuzin' );?></h3>
					<?php foreach ( $neuzin_team_skill as $skill ): ?>
						<?php
						if ( empty( $skill['skill_name'] ) || empty( $skill['skill_value'] ) ) {
							continue;
						}
						$skill_value = (int) $skill['skill_value'];
						$skill_style = "width:{$skill_value}%;";

						if ( !empty( $skill['skill_color'] ) ) {
							$skill_style .= "background-color:{$skill['skill_color']};";
						}
						?>
						<div class="rtin-skill-each">
							<div class="rtin-name"><?php echo esc_html( $skill['skill_name'] );?></div>
							<div class="progress">
								<div class="progress-bar progress-bar-striped fadeInLeft animated" data-progress="<?php echo esc_attr( $skill_value );?>%" style="<?php echo esc_attr( $skill_style );?>"> <span><?php echo esc_html( $skill_value );?>%</span></div>
							</div>								
						</div>
					<?php endforeach;?> 
				</div>
				<?php } ?>
				<?php if ( !empty( $neuzin_team_contact_form ) ) { ?>
				<div class="rtin-contact">
					<h3><?php esc_html_e( 'Contact', 'neuzin' );?></h3>
					<?php echo do_shortcode( $neuzin_team_contact_form );?>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php } ?>
</div>