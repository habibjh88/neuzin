<?php
use devofwp\Neuzin\Theme;
use devofwp\Neuzin\Helper;
$neuzin_footer_column = Theme::neuzin_options('footer_column_4');
switch ( $neuzin_footer_column ) {
	case '1':
	$neuzin_footer_class = 'col-lg-12 col-sm-12 col-12';
	break;
	case '2':
	$neuzin_footer_class = 'col-lg-6 col-sm-6 col-12';
	break;
	case '3':
	$neuzin_footer_class = 'col-lg-4 col-sm-4 col-12';
	break;		
	default:
	$neuzin_footer_class = 'col-lg-3 col-sm-6 col-12';
	break;
}
// Logo
$neuzin_light_logo = empty( Theme::neuzin_options('footer_logo_light')['url'] ) ? NEUZIN_IMG_URL . 'logo-light.png' : Theme::neuzin_options('footer_logo_light')['url'];
$neuzin_socials = Helper::socials();
?>
<?php if ( Theme::$footer_area == 1 || Theme::$footer_area == 'on' ){ ?>
	<?php if ( Theme::neuzin_options('footer_four_shape') ) { ?>
	<ul class="shape-holder has-animation">
		<li class="single-shape shape1">
			<div class="translate-left-75 opacity-animation transition-200 transition-delay-50">
				<svg width="512px" height="512px">
				<defs>
					<linearGradient id="gradient-shape1" x1="0%" x2="50%" y1="86.603%" y2="0%">
						<stop offset="0%" stop-color="rgb(103,84,246)" stop-opacity="1" />
						<stop offset="100%" stop-color="rgb(92,74,248)" stop-opacity="1" />
					</linearGradient>
				</defs>
				<path fill="url(#gradient-shape1)" d="M256.000,-0.001 C397.385,-0.001 512.000,114.615 512.000,255.999 C512.000,397.385 397.385,511.999 256.000,511.999 C114.615,511.999 0.000,397.385 0.000,255.999 C0.000,114.615 114.615,-0.001 256.000,-0.001 Z"/>
			</svg>
			</div>
		</li>
		<li class="single-shape shape2">
			<div class="translate-left-75 opacity-animation transition-200 transition-delay-500">
				<svg width="457px" height="457px">
				<defs>
					<linearGradient id="gradient-shape2" x1="0%" x2="50%" y1="86.603%" y2="0%">
						<stop offset="0%" stop-color="rgb(115,99,253)" stop-opacity="1" />
						<stop offset="100%" stop-color="rgb(92,74,248)" stop-opacity="1" />
					</linearGradient>
				</defs>
				<path fill="url(#gradient-shape2)" d="M228.500,-0.000 C354.697,-0.000 457.000,102.303 457.000,228.500 C457.000,354.697 354.697,457.000 228.500,457.000 C102.303,457.000 0.000,354.697 0.000,228.500 C0.000,102.303 102.303,-0.000 228.500,-0.000 Z"/>
			</svg>
			</div>
		</li>
		<li class="single-shape shape3">
			<div class="translate-right-75 opacity-animation transition-200 transition-delay-900">
				<svg width="1132px" height="1132px">
				<defs>
					<linearGradient id="gradient-shape3" x1="0%" x2="50%" y1="86.603%" y2="0%">
						<stop offset="0%" stop-color="rgb(116,94,255)" stop-opacity="1" />
						<stop offset="100%" stop-color="rgb(146,23,224)" stop-opacity="1" />
					</linearGradient>
				</defs>
				<path fill="url(#gradient-shape3)" d="M566.000,-0.000 C878.593,-0.000 1132.000,253.406 1132.000,566.000 C1132.000,878.593 878.593,1131.999 566.000,1131.999 C253.407,1131.999 -0.000,878.593 -0.000,566.000 C-0.000,253.406 253.407,-0.000 566.000,-0.000 Z"/>
			</svg>
			</div>
		</li>
	</ul>
	<?php } ?>
	<div class="footer-top-area">
		<div class="container">
			<?php if(is_active_sidebar( 'footer4_top_widget' )) { ?>
				<div class="footer4-top_widget"><?php dynamic_sidebar( 'footer4_top_widget' ); ?></div>
			<?php } ?>
			<div class="row">
				<?php
				for ( $i = 1; $i <= $neuzin_footer_column; $i++ ) {
					echo '<div class="' . $neuzin_footer_class . '">';
					dynamic_sidebar( 'footer-style-4-'. $i );
					echo '</div>';
				}
				?>
			</div>
		</div>
	</div>
<?php } ?>

<?php if ( Theme::$copyright_area == 1 || Theme::$copyright_area == 'on' ) { ?>
	<div class="footer-bottom-area">
		<div class="container">
			<div class="copyright_wrap">
				<div class="copyright"><?php echo wp_kses_post( Theme::neuzin_options('copyright_text') );?></div>
				<?php if(is_active_sidebar( 'copyright_widget' )) { ?>
				<div class="copyright_widget"><?php dynamic_sidebar( 'copyright_widget' ); ?></div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php } ?>
