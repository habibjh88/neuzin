<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */

?>
<div class="product-thumb-area">
	<?php
	global $product;
	woocommerce_show_product_loop_sale_flash();?>
	<a href="<?php the_permalink(); ?>"><?php
	woocommerce_template_loop_product_thumbnail();
	?></a>
	<?php if ( NeuzinTheme::neuzin_options('wc_product_hover') ): ?>
		<div class="product-info">
			<ul>
				<li><?php woocommerce_template_loop_add_to_cart(); ?></li>
				
				
				<?php if ( class_exists( 'YITH_WCWL_Shortcode' ) && NeuzinTheme::neuzin_options('wc_wishlist_icon') ): ?>
                <?php
                $product_id = $product->get_id();
                $is_in_wishlist = YITH_WCWL()->is_product_in_wishlist( $product_id, false );
                $wishlist_url = YITH_WCWL()->get_wishlist_url();

                $title_before = esc_html__( 'Add to Wishlist', 'neuzin' );
                $title_after = esc_html__( 'Aleady exists in Wishlist! Click here to view Wishlist', 'neuzin' );

                if ( $is_in_wishlist ) {
                    $class = 'rdtheme-remove-from-wishlist';
                    $icon_font = 'fa fa-check';
                    $title = $title_after;
                }
                else {
                    $class = 'rdtheme-add-to-wishlist';
                    $icon_font = 'fa fa-heart';
                    $title = $title_before;
                }

                $html = '';
                $html .= '<i class="wishlist-icon '.$icon_font.'"></i>';

                $nonce = wp_create_nonce( 'neuzin_wishlist_nonce' );
                ?>
                <li>
                    <a href="<?php echo esc_url( $wishlist_url );?>" title="<?php echo esc_attr( $title ); ?>" rel="nofollow" data-product-id="<?php echo esc_attr( $product_id );?>" data-title-after="<?php echo esc_attr( $title_after );?>" class="rdtheme-wishlist-icon <?php echo esc_attr( $class );?>" data-nonce="<?php echo esc_attr( $nonce ); ?>" target="_blank">
                        <?php echo wp_kses_post( $html ); ?>
                    </a>
                </li>
            <?php endif; ?>
			
					<?php if ( class_exists( 'YITH_WCWL_Shortcode' ) && NeuzinTheme::neuzin_options('wc_compare_icon') ) { ?>
					<li><?php echo do_shortcode( '[yith_compare_button]' ); ?> </li>					
					<?php } ?>
			</ul>			
		</div>
	<?php endif; ?>
</div>