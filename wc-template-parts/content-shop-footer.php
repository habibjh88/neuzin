<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

if( is_active_sidebar( 'shop-sidebar-1' )) {
	$fixedbar = 'fixed-bar-coloum';
}else {
	$fixedbar = '';
}

?>				
				</main>
			</div>			
			<?php if ( NeuzinTheme::$layout == 'right-sidebar' ) { ?>			
				<div class="col-lg-4 col-md-12 col-12 <?php echo esc_attr( $fixedbar ); ?>">				
					<aside class="sidebar-widget-area">
						<?php if ( is_active_sidebar( 'shop-sidebar-1' ) ) dynamic_sidebar( 'shop-sidebar-1' ); ?>
					</aside>
				</div>
			<?php }	?>
		</div><!-- .row -->
	</div><!-- container -->
</div><!-- #primary -->