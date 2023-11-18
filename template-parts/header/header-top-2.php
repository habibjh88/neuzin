<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */
use devofwp\Neuzin\Theme;
use devofwp\Neuzin\Helper;
$neuzin_socials = Helper::socials();
?>
<div id="tophead" class="header-top-bar align-items-center"> 
	<div class="container">
		<div class="top-bar-wrap">
			<div class="tophead-left">
				<div class="address"><?php if ( Theme::neuzin_options('address') ) { ?><?php echo wp_kses( Theme::neuzin_options('address') , 'alltext_allow' );?><?php } ?></div>
				<?php if ( Theme::neuzin_options('email') ): ?>
					<div class="email-address">
						<i class="far fa-envelope"></i><a href="mailto:<?php echo esc_attr( Theme::neuzin_options('email') );?>"><?php echo wp_kses( Theme::neuzin_options('email') , 'alltext_allow' );?></a>
					</div>
				<?php endif; ?>
			</div>
			<div class="tophead-right">
				<?php if ( $neuzin_socials ) { ?>
					<ul class="tophead-social">
						<?php foreach ( $neuzin_socials as $neuzin_social ): ?>
							<li><a target="_blank" href="<?php echo esc_url( $neuzin_social['url'] );?>"><i class="fab <?php echo esc_attr( $neuzin_social['icon'] );?>"></i></a></li>
						<?php endforeach; ?>
					</ul>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

