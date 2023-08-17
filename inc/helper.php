<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

namespace radiustheme\Neuzin;

class Helper {

	/**
	 * File require function
	 *
	 * @param $filename
	 * @param $dir
	 *
	 * @return false|void
	 */
	public static function requires( $filename, $dir = '' ) {
		if ( $dir ) {
			$child_file = get_stylesheet_directory() . '/' . $dir . '/' . $filename;

			if ( file_exists( $child_file ) ) {
				$file = $child_file;
			} else {
				$file = get_template_directory() . '/' . $dir . '/' . $filename;
			}
		} else {
			$child_file = get_stylesheet_directory() . '/inc/' . $filename;

			if ( file_exists( $child_file ) ) {
				$file = $child_file;
			} else {
				$file = NEUZIN_INC_DIR . $filename;
			}
		}
		if ( file_exists( $file ) ) {
			require_once $file;
		} else {
			return false;
		}
	}

	/**
	 * Get file path
	 *
	 * @param $path
	 *
	 * @return string
	 */
	public static function get_file( $path ) {
		$file = get_stylesheet_directory_uri() . $path;
		if ( ! file_exists( $file ) ) {
			$file = get_template_directory_uri() . $path;
		}

		return $file;
	}

	/**
	 * Get image path
	 *
	 * @param $filename
	 *
	 * @return string
	 */
	public static function get_img( $filename ) {
		$path = '/assets/img/' . $filename;

		return self::get_file( $path );
	}

	/**
	 * Get CSS path
	 *
	 * @param $filename
	 *
	 * @return string
	 */
	public static function get_css( $filename ) {
		$path = '/assets/css/' . $filename . '.css';

		return self::get_file( $path );
	}

	/**
	 * Get RTL css if it needs
	 *
	 * @param $filename
	 *
	 * @return string
	 */
	public static function get_maybe_rtl_css( $filename ) {
		if ( is_rtl() ) {
			$path = '/assets/css-rtl/' . $filename . '.css';

			return self::get_file( $path );
		} else {
			return self::get_css( $filename );
		}
	}

	/**
	 * Get RTL css path
	 *
	 * @param $filename
	 *
	 * @return string
	 */
	public static function get_rtl_css( $filename ) {
		$path = '/assets/css-rtl/' . $filename . '.css';

		return self::get_file( $path );
	}

	/**
	 * Get js file path
	 *
	 * @param $filename
	 *
	 * @return string
	 */
	public static function get_js( $filename ) {
		$path = '/assets/js/' . $filename . '.js';

		return self::get_file( $path );
	}

	/**
	 * Get template part
	 *
	 * @param $template
	 * @param $args
	 *
	 * @return false|void
	 */
	public static function get_template_part( $template, $args = [] ) {
		extract( $args );

		$template = '/' . $template . '.php';

		if ( file_exists( get_stylesheet_directory() . $template ) ) {
			$file = get_stylesheet_directory() . $template;
		} else {
			$file = get_template_directory() . $template;
		}
		if ( file_exists( $file ) ) {
			require $file;
		} else {
			return false;
		}
	}

	/**
	 * Set temp query
	 *
	 * @param $query
	 *
	 * @return mixed
	 */
	public static function wp_set_temp_query( $query ) {
		global $wp_query;
		$temp     = $wp_query;
		$wp_query = $query;

		return $temp;
	}

	/**
	 * Reset temp query
	 *
	 * @param $temp
	 *
	 * @return void
	 */
	public static function wp_reset_temp_query( $temp ) {
		global $wp_query;
		$wp_query = $temp;
		wp_reset_postdata();
	}

	/**
	 * Change hex to rgb color
	 *
	 * @param $hex
	 *
	 * @return string
	 */
	public static function hex2rgb( $hex ) {
		$hex = str_replace( "#", "", $hex );
		if ( strlen( $hex ) == 3 ) {
			$r = hexdec( substr( $hex, 0, 1 ) . substr( $hex, 0, 1 ) );
			$g = hexdec( substr( $hex, 1, 1 ) . substr( $hex, 1, 1 ) );
			$b = hexdec( substr( $hex, 2, 1 ) . substr( $hex, 2, 1 ) );
		} else {
			$r = hexdec( substr( $hex, 0, 2 ) );
			$g = hexdec( substr( $hex, 2, 2 ) );
			$b = hexdec( substr( $hex, 4, 2 ) );
		}
		$rgb = "$r, $g, $b";

		return $rgb;
	}

	/**
	 * Make ago time | Time Elapsed
	 * @return string|void
	 */
	public static function time_elapsed_string() {
		$ptime = get_the_time( 'U' );
		$etime = time() - $ptime;

		if ( $etime < 1 ) {
			return '0 seconds';
		}

		$a        = [
			365 * 24 * 60 * 60 => 'year',
			30 * 24 * 60 * 60  => 'month',
			24 * 60 * 60       => 'day',
			60 * 60            => 'hour',
			60                 => 'minute',
			1                  => 'second',
		];
		$a_plural = [
			'year'   => 'years',
			'month'  => 'months',
			'day'    => 'days',
			'hour'   => 'hours',
			'minute' => 'minutes',
			'second' => 'seconds',
		];

		foreach ( $a as $secs => $str ) {
			$d = $etime / $secs;
			if ( $d >= 1 ) {
				$r = round( $d );

				return $r . ' ' . ( $r > 1 ? $a_plural[ $str ] : $str ) . ' ago';
			}
		}
	}

	/**
	 * Post reading time calculate
	 *
	 * @param $content
	 * @param $is_zero
	 * @param $reading_suffix
	 *
	 * @return string
	 */
	public static function reading_time_count( $content = '', $is_zero = false, $reading_suffix = '' ) {
		global $post;
		$post_content = $content ? $content : $post->post_content; // wordpress users only
		$word         = str_word_count( strip_tags( strip_shortcodes( $post_content ) ) );
		$m            = floor( $word / 200 );
		$s            = floor( $word % 200 / ( 200 / 60 ) );
		if ( $is_zero && $m < 10 ) {
			$m = '0' . $m;
		}
		if ( $is_zero && $s < 10 ) {
			$s = '0' . $s;
		}
		$suffix = $reading_suffix ? " " . $reading_suffix : null;
		if ( $m < 1 ) {
			return $s . ' Second' . ( $s == 1 ? '' : 's' ) . $suffix;
		}

		return $m . ' Min' . ( $m == 1 ? '' : 's' ) . $suffix;
	}

	/**
	 * Make lighten or darken color
	 *
	 * @param $hex
	 * @param $steps
	 *
	 * @return string
	 */
	public static function rt_modify_color( $hex, $steps ) {
		$steps = max( - 255, min( 255, $steps ) );
		// Format the hex color string
		$hex = str_replace( '#', '', $hex );
		if ( strlen( $hex ) == 3 ) {
			$hex = str_repeat( substr( $hex, 0, 1 ), 2 ) . str_repeat( substr( $hex, 1, 1 ), 2 ) . str_repeat( substr( $hex, 2, 1 ), 2 );
		}
		// Get decimal values
		$r = hexdec( substr( $hex, 0, 2 ) );
		$g = hexdec( substr( $hex, 2, 2 ) );
		$b = hexdec( substr( $hex, 4, 2 ) );
		// Adjust number of steps and keep it inside 0 to 255
		$r     = max( 0, min( 255, $r + $steps ) );
		$g     = max( 0, min( 255, $g + $steps ) );
		$b     = max( 0, min( 255, $b + $steps ) );
		$r_hex = str_pad( dechex( $r ), 2, '0', STR_PAD_LEFT );
		$g_hex = str_pad( dechex( $g ), 2, '0', STR_PAD_LEFT );
		$b_hex = str_pad( dechex( $b ), 2, '0', STR_PAD_LEFT );

		return '#' . $r_hex . $g_hex . $b_hex;
	}

	/**
	 * Number Shorten
	 *
	 * @param $number
	 * @param $precision
	 * @param $divisors
	 *
	 * @return mixed|string
	 */
	public static function rt_number_shorten( $number, $precision = 3, $divisors = null ) {
		if ( $number < 1000 ) {
			return $number;
		}

		$thousand    = _x( 'K', 'Thousand Shorthand', 'neuzin' );
		$million     = _x( 'M', 'Million Shorthand', 'neuzin' );
		$billion     = _x( 'B', 'Billion Shorthand', 'neuzin' );
		$trillion    = _x( 'T', 'Trillion Shorthand', 'neuzin' );
		$quadrillion = _x( 'Qa', 'Quadrillion Shorthand', 'neuzin' );
		$quintillion = _x( 'Qi', 'Quintillion Shorthand', 'neuzin' );

		$shorthand_label = apply_filters( 'neuzin_shorthand_price_label', [
			'thousand'    => $thousand,
			'million'     => $million,
			'billion'     => $billion,
			'trillion'    => $trillion,
			'quadrillion' => $quadrillion,
			'quintillion' => $quintillion
		] );

		// Setup default $divisors if not provided
		if ( ! isset( $divisors ) ) {
			$divisors = [
				pow( 1000, 0 ) => '', // 1000^0 == 1
				pow( 1000, 1 ) => isset( $shorthand_label['thousand'] ) ? $shorthand_label['thousand'] : $thousand,
				pow( 1000, 2 ) => isset( $shorthand_label['million'] ) ? $shorthand_label['million'] : $million,
				pow( 1000, 3 ) => isset( $shorthand_label['billion'] ) ? $shorthand_label['billion'] : $billion,
				pow( 1000, 4 ) => isset( $shorthand_label['trillion'] ) ? $shorthand_label['trillion'] : $trillion,
				pow( 1000, 5 ) => isset( $shorthand_label['quadrillion'] ) ? $shorthand_label['quadrillion'] : $quadrillion,
				pow( 1000, 6 ) => isset( $shorthand_label['quintillion'] ) ? $shorthand_label['quintillion'] : $quintillion,
			];
		}


		// Loop through each $divisor and find the
		// lowest amount that matches
		foreach ( $divisors as $divisor => $shorthand ) {
			if ( abs( $number ) < ( $divisor * 1000 ) ) {
				// We found a match!
				break;
			}
		}

		// We found our match, or there were no matches.
		// Either way, use the last defined value for $divisor.

		$shorthand_price = apply_filters( 'neuzin_shorthand_price', number_format( $number / $divisor, $precision ) );

		return self::rt_remove_unnecessary_zero( $shorthand_price ) . "<span class='price-shorthand'>{$shorthand}</span>";
	}

	/**
	 * Number to K, Lac, Cr convert
	 *
	 * @param $number
	 *
	 * @return mixed|string
	 */
	public static function number_to_lac( $number, $precision = 1 ) {

		$hundred   = '';
		$thousand  = _x( 'K', 'Thousand Shorthand', 'neuzin' );
		$thousands = _x( 'K', 'Thousands Shorthand', 'neuzin' );
		$lac       = _x( ' Lac', 'Lac Shorthand', 'neuzin' );
		$lacs      = _x( ' Lacs', 'Lacs Shorthand', 'neuzin' );
		$cr        = _x( ' Cr', 'Cr Shorthand', 'neuzin' );
		$crs       = _x( ' Crs', 'Crs Shorthand', 'neuzin' );

		$shorthand_label = apply_filters( 'neuzin_shorthand_price_label_2', [
			'hundred'   => $hundred,
			'thousand'  => $thousand,
			'thousands' => $thousands,
			'lac'       => $lac,
			'lacs'      => $lacs,
			'crore'     => $cr,
			'crores'    => $crs,
		] );

		if ( $number == 0 ) {
			return '';
		} else {

			$n_count = strlen( self::rt_remove_unnecessary_zero( $number, '1' ) ); // 7
			switch ( $n_count ) {
				case 3:
					$val       = $number / 100;
					$val       = number_format( $val, $precision );
					$shorthand = ( isset( $shorthand_label['hundred'] ) ? $shorthand_label['hundred'] : $hundred );
					$finalval  = self::rt_remove_unnecessary_zero( $val ) . "<span class='price-shorthand'>{$shorthand}</span>";
					break;
				case 4:
					$val       = $number / 1000;
					$val       = number_format( $val, $precision );
					$shorthand = ( isset( $shorthand_label['thousand'] ) ? $shorthand_label['thousand'] : $thousand );
					$finalval  = self::rt_remove_unnecessary_zero( $val ) . "<span class='price-shorthand'>{$shorthand}</span>";
					break;
				case 5:
					$val       = $number / 1000;
					$val       = number_format( $val, $precision );
					$shorthand = ( isset( $shorthand_label['thousands'] ) ? $shorthand_label['thousands'] : $thousands );
					$finalval  = self::rt_remove_unnecessary_zero( $val ) . "<span class='price-shorthand'>{$shorthand}</span>";
					break;
				case 6:
					$val       = $number / 100000;
					$val       = number_format( $val, $precision );
					$shorthand = ( isset( $shorthand_label['lac'] ) ? $shorthand_label['lac'] : $lac );
					$finalval  = self::rt_remove_unnecessary_zero( $val ) . "<span class='price-shorthand'>{$shorthand}</span>";
					break;
				case 7:
					$val       = $number / 100000;
					$val       = number_format( $val, $precision );
					$shorthand = ( isset( $shorthand_label['lacs'] ) ? $shorthand_label['lacs'] : $lacs );
					$finalval  = self::rt_remove_unnecessary_zero( $val ) . "<span class='price-shorthand'>{$shorthand}</span>";
					break;
				case 8:
					$val       = $number / 10000000;
					$val       = number_format( $val, $precision );
					$shorthand = ( isset( $shorthand_label['crore'] ) ? $shorthand_label['crore'] : $cr );
					$finalval  = self::rt_remove_unnecessary_zero( $val ) . "<span class='price-shorthand'>{$shorthand}</span>";
					break;
				case 8 < $n_count:
					$val       = $number / 10000000;
					$val       = number_format( $val, $precision );
					$shorthand = ( isset( $shorthand_label['crores'] ) ? $shorthand_label['crores'] : $crs );
					$finalval  = self::rt_remove_unnecessary_zero( $val ) . "<span class='price-shorthand'>{$shorthand}</span>";
					break;
				default:
					$finalval = $number;
			}

			return $finalval;

		}
	}


	/**
	 * Get Date Archive Link
	 * @return string
	 */
	public static function get_date_archive_link() {
		$archive_year  = get_the_date( 'Y' );
		$archive_month = get_the_date( 'm' );
		$archive_day   = get_the_date( 'j' );

		return get_day_link( $archive_year, $archive_month, $archive_day );
	}


	/**
	 * Get all posts type
	 * @return array
	 */
	public static function get_post_types() {
		$post_types = get_post_types(
			[
				'public'            => true,
				'show_in_nav_menus' => true,
			],
			'objects'
		);
		$post_types = wp_list_pluck( $post_types, 'label', 'name' );

		$exclude = [ 'attachment', 'revision', 'nav_menu_item', 'elementor_library', 'tpg_builder', 'e-landing-page', 'page' ];

		foreach ( $exclude as $ex ) {
			unset( $post_types[ $ex ] );
		}

		return $post_types;
	}

	/**
	 * Homlist html print
	 *
	 * @param $html
	 *
	 * @return string
	 */
	public static function neuzin_kses( $html ) {
		$allowed_html = [
			'a'      => [
				'href'   => [],
				'title'  => [],
				'class'  => [],
				'target' => [],
			],
			'br'     => [],
			'em'     => [],
			'strong' => [],
			'i'      => [
				'class' => []
			],
			'iframe' => [
				'class'                 => [],
				'id'                    => [],
				'name'                  => [],
				'src'                   => [],
				'title'                 => [],
				'frameBorder'           => [],
				'width'                 => [],
				'height'                => [],
				'scrolling'             => [],
				'allowvr'               => [],
				'allow'                 => [],
				'allowFullScreen'       => [],
				'webkitallowfullscreen' => [],
				'mozallowfullscreen'    => [],
				'loading'               => [],
			],
		];

		return wp_kses( $html, $allowed_html );
	}

}
