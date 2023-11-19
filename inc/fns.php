<?php


use devofwp\Neuzin\Theme;

if ( ! function_exists( 'neuzin_post_img_src' ) ) {
	function neuzin_post_img_src( $size = 'neuzin-size1' ) {
		$post_id = get_the_ID();
		if ( has_post_thumbnail( $post_id ) ) {
			$image_id = get_post_thumbnail_id( $post_id );
			$image    = wp_get_attachment_image_src( $image_id, $size );

			return $image[0];
		}
		return false;
	}
}

if ( ! function_exists( 'neuzin_get_time' ) ) {
	function neuzin_get_time( $return = false ) {

		$post = get_post();

		# Date is disabled globally ----------
		if ( Theme::neuzin_options( 'time_format' ) == 'none' ) {
			return false;
		} # Human Readable Post Dates ----------
		elseif ( Theme::neuzin_options( 'time_format' ) == 'modern' ) {

			$time_now  = current_time( 'timestamp' );
			$post_time = get_the_time( 'U' );
			$since     = sprintf( esc_html__( '%s ago', 'neuzin' ), human_time_diff( $post_time, $time_now ) );
		} else {
			$since = get_the_date();
		}

		$post_time = '<span class="date meta-item"><span class="fa fa-clock-o" aria-hidden="true"></span>  <span>' . $since . '</span></span>';

		if ( $return ) {
			return $post_time;
		}

		echo wp_kses_post( $post_time );
	}

}

/*
* for most use of the get_term cached
* This is because all time it hits and single page provide data quickly
*/
function get_img( $img ) {
	$img = get_stylesheet_directory_uri() . '/assets/img/' . $img;

	return $img;
}

function neuzin_filter_content( $content ) {
	// wp filters
	$content = wptexturize( $content );
	$content = convert_smilies( $content );
	$content = convert_chars( $content );
	$content = wpautop( $content );
	$content = shortcode_unautop( $content );

	// remove shortcodes
	$pattern = '/\[(.+?)\]/';
	$content = preg_replace( $pattern, '', $content );

	// remove tags
	$content = strip_tags( $content );

	return $content;
}

function get_current_post_content( $post = false ) {
	if ( ! $post ) {
		$post = get_post();
	}
	$content = has_excerpt( $post->ID ) ? $post->post_excerpt : $post->post_content;
	$content = neuzin_filter_content( $content );

	return $content;
}

function cached_get_term_by( $field, $value, $taxonomy, $output = OBJECT, $filter = 'raw' ) {
	// ID lookups are cached
	if ( 'id' == $field ) {
		return get_term_by( $field, $value, $taxonomy, $output, $filter );
	}

	$cache_key = $field . '|' . $taxonomy . '|' . md5( $value );
	$term_id   = wp_cache_get( $cache_key, 'get_term_by' );

	if ( false === $term_id ) {
		$term = get_term_by( $field, $value, $taxonomy );
		if ( $term && ! is_wp_error( $term ) ) {
			wp_cache_set( $cache_key, $term->term_id, 'get_term_by' );
		} else {
			wp_cache_set( $cache_key, 0, 'get_term_by' );
		} // if we get an invalid value, let's cache it anyway
	} else {
		$term = get_term( $term_id, $taxonomy, $output, $filter );
	}

	if ( is_wp_error( $term ) ) {
		$term = false;
	}

	return $term;
}

/*for avobe reason*/
function cached_get_term_link( $term, $taxonomy = null ) {
	// ID- or object-based lookups already result in cached lookups, so we can ignore those.
	if ( is_numeric( $term ) || is_object( $term ) ) {
		return get_term_link( $term, $taxonomy );
	}

	$term_object = cached_get_term_by( 'slug', $term, $taxonomy );

	return get_term_link( $term_object );
}


if ( ! function_exists( 'neuzin_get_primary_category' ) ) {

	function neuzin_get_primary_category() {

		if ( get_post_type() != 'post' ) {
			return;
		}

		# Get the first assigned category ----------
		$get_the_category = get_the_category();
		$primary_category = array( $get_the_category[0] );

		if ( ! empty( $primary_category[0] ) ) {
			return $primary_category;
		}
	}
}

/*only to show the first category in the post - primary category ID*/
if ( ! function_exists( 'neuzin_get_primary_category_id' ) ) {

	function neuzin_get_primary_category_id() {

		$primary_category = neuzin_get_primary_category();

		if ( ! empty( $primary_category[0]->term_id ) ) {
			return $primary_category[0]->term_id;
		}

		return false;
	}
}


//find the post type function
if ( ! function_exists( 'neuzin_post_type' ) ) {
	function neuzin_post_type() {
		$neuzin_post_type_var = get_post_type( get_the_ID() );
		echo esc_html( $neuzin_post_type_var );
	}
}

/*next previous post links*/
if ( ! function_exists( 'neuzin_post_links_next_prev' ) ) {
	function neuzin_post_links_next_prev() { ?>
		<div class="row no-gutters divider post-navigation">
			<?php if ( ! empty( get_next_post_link() ) ) { ?>
				<div class=" col-lg-6 col-md-6 col-sm-6 col-6 d-flex <?php if ( empty( get_previous_post_link() ) ) { ?>-offset-md-6<?php } ?> <?php if ( is_rtl() ) {
					echo esc_attr( 'text-left' );
				} else {
					echo esc_attr( 'text-left' );
				} ?>">
					<?php $next_post = get_next_post();
					if ( ! empty( $next_post ) ) { ?>
						<?php if ( has_post_thumbnail( $next_post->ID ) ) { ?>
							<a class="left-img" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"><?php echo get_the_post_thumbnail( $next_post->ID, 'thumbnail', array( 'class' => 'Next' ) ); ?></a><?php } ?>
					<?php } ?>
					<div class="pad-lr-15">
				<span class="next-article">
				<?php next_post_link( '%link', esc_html( 'Previous article', 'neuzin' ) ); ?></span>
						<?php next_post_link( '<h3 class="post-nav-title">%link</h3>' ); ?>
					</div>

				</div>
			<?php } ?>

			<?php if ( ! empty( get_previous_post_link() ) ) { ?>
				<div class="col-lg-6 col-md-6 col-sm-6 col-6 d-flex <?php if ( empty( get_next_post_link() ) ) { ?>offset-md-6<?php } ?> <?php if ( is_rtl() ) {
					echo esc_attr( 'text-right' );
				} else {
					echo esc_attr( 'text-right' );
				} ?>">

					<div class="pad-lr-15">
				<span class="prev-article">
				<?php previous_post_link( '%link', esc_html( 'Next article', 'neuzin' ) ); ?></span>
						<?php previous_post_link( '<h3 class="post-nav-title">%link</h3>' ); ?>
					</div>
					<?php $previous_post = get_previous_post();
					if ( ! empty( $previous_post ) ) { ?>
						<?php if ( has_post_thumbnail( $previous_post->ID ) ) { ?>
							<a class="right-img" href="<?php echo esc_url( get_permalink( $previous_post->ID ) ); ?>"><?php echo get_the_post_thumbnail( $previous_post->ID, 'thumbnail', array( 'class' => 'Previous' ) ); ?></a><?php } ?>
					<?php } ?>

				</div>
			<?php } ?>
		</div>
	<?php }
}
/*Remove the archive label*/


/*Shop row*/


// Update Breadcrumb Separator

