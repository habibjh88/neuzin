<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */

// Layout class

if ( NeuzinTheme::$layout == 'full-width' ) {
	$neuzin_layout_class = 'col-sm-12 col-xs-12';
	$col_class    = 'col-lg-4 col-md-6 col-sm-6 col-xs-12 no-equal-item';
}
else{
	$neuzin_layout_class = 'col-sm-8 col-md-8 col-xs-12';
	$col_class    = 'col-lg-6 col-md-6 col-sm-12 col-xs-12 no-equal-item';
}

// Template

if ( NeuzinTheme::neuzin_options('team_style') == 'style1' ){
	$team_archive_layout = "team-default team-multi-layout-1 team-grid-style1";
	$template 				 = 'team-1';
}elseif( NeuzinTheme::neuzin_options('team_style') == 'style2' ){
	$team_archive_layout = "team-default team-multi-layout-2 team-grid-style2";
	$template 				 = 'team-2';
}else{
	$team_archive_layout = "team-default team-multi-layout-1 team-grid-style1";
	$template 				 = 'team-1';
}

?>
<?php get_header(); ?>
<div id="primary" class="content-area">
	<div class="container">
		<div class="row">
			<?php
				if ( NeuzinTheme::$layout == 'left-sidebar' ) {
					get_sidebar();
				}
			?>
			<div class="<?php echo esc_attr( $team_archive_layout );?> <?php echo esc_attr( $neuzin_layout_class );?>">
				<main id="main" class="site-main">	
					<?php if ( have_posts() ) :?>					

						<div class="row">
							<?php while ( have_posts() ) : the_post(); ?>
								<div class="<?php echo esc_attr( $col_class );?>">
									<?php get_template_part( 'template-parts/content', $template ); ?>
								</div>
							<?php endwhile; ?>
						</div>
 
					<?php NeuzinTheme_Helper::pagination(); ?>	
					<?php else:?>
						<?php get_template_part( 'template-parts/content', 'none' );?>
					<?php endif;?>
				</main>
			</div>
			<?php
				if( NeuzinTheme::$layout == 'right-sidebar' ){			
					get_sidebar();
				}
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
