<?php
$neuzin_footer_column = NeuzinTheme::neuzin_options('footer_column_6');
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
$neuzin_light_logo = empty( NeuzinTheme::neuzin_options('footer_logo_light')['url'] ) ? NEUZIN_IMG_URL . 'logo-light.png' : NeuzinTheme::neuzin_options('footer_logo_light')['url'];
$neuzin_socials = NeuzinTheme_Helper::socials();
?>
<?php if ( NeuzinTheme::$footer_area == 1 || NeuzinTheme::$footer_area == 'on' ){ ?>
	<?php if ( NeuzinTheme::neuzin_options('footer_six_shape') ) { ?>
	<ul class="footer-shape-holder">
		<li class="single-shape shape1">
			<div class="translate-left-75 opacity-animation transition-200 transition-delay-50">
				<img src="<?php echo NEUZIN_ASSETS_URL . 'element/element60.png'; ?>" alt="Element">
			</div>
		</li>
		<li class="single-shape shape2">
			<div class="translate-left-75 opacity-animation transition-200 transition-delay-500">
				<img src="<?php echo NEUZIN_ASSETS_URL . 'element/element61.png'; ?>" alt="Element">
			</div>
		</li>
		<li class="single-shape shape3">
			<div class="translate-right-75 opacity-animation transition-200 transition-delay-900">
				<img src="<?php echo NEUZIN_ASSETS_URL . 'element/element62.png'; ?>" alt="Element">
			</div>
		</li>
		<li class="single-shape shape4">
			<div class="translate-right-75 opacity-animation transition-200 transition-delay-1300">
				<img src="<?php echo NEUZIN_ASSETS_URL . 'element/element63.png'; ?>" alt="Element">
			</div>
		</li>
	</ul>
	<?php } ?>
	<div class="footer-top-area">
		<div class="container">
			<div class="row">
				<?php
				for ( $i = 1; $i <= $neuzin_footer_column; $i++ ) {
					echo '<div class="' . $neuzin_footer_class . '">';
					dynamic_sidebar( 'footer-style-6-'. $i );
					echo '</div>';
				}
				?>
			</div>
		</div>
	</div>
<?php } ?>

<?php if ( NeuzinTheme::$copyright_area == 1 || NeuzinTheme::$copyright_area == 'on' ) { ?>
	<div class="footer-bottom-area">
		<div class="container">
			<div class="copyright_wrap">
				<div class="copyright"><?php echo wp_kses_post( NeuzinTheme::neuzin_options('copyright_text') );?></div>
				<?php if(is_active_sidebar( 'copyright_widget' )) { ?>
				<div class="copyright_widget"><?php dynamic_sidebar( 'copyright_widget' ); ?></div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php } ?>