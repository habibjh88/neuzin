<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

/*-------------------------------------
INDEX
=======================================
#. Container
#. Top Bar
#. Header
#. Typography
#. Banner
#. Footer
#. Widgets
#. Inner Contents
#. Error 404
#. Comment
#. Buttons
#. Blog layout
#. Single Content
#. Pagination
#. Contact Form 7
#. Single Team
#. WooCommerce
#. Miscellaneous
-------------------------------------*/

$primary_color         = NeuzinTheme::neuzin_options('primary_color'); // #5a49f8
$primary_rgb           = NeuzinTheme_Helper::hex2rgb( $primary_color ); // 90, 73, 248
$secondary_color       = NeuzinTheme::neuzin_options('secondary_color'); // #7a64f2
$secondary_rgb         = NeuzinTheme_Helper::hex2rgb( $secondary_color ); // 122, 100, 242
$dark_color       	   = NeuzinTheme::neuzin_options('dark_color'); // #750ed5
$dark_rgb              = NeuzinTheme_Helper::hex2rgb( $dark_color ); // 117, 14, 213

$container_width	   = NeuzinTheme::neuzin_options('container_width'); // Grid Container width

$menu_typo             = NeuzinTheme::neuzin_options('menu_typo');
$menu_color            = NeuzinTheme::neuzin_options('menu_color');
$menu_color_tr         = NeuzinTheme::neuzin_options('menu_color_tr');
$menu_hover_color      = NeuzinTheme::neuzin_options('menu_hover_color');
$menu_hover_color_tr   = NeuzinTheme::neuzin_options('menu_hover_color_tr');
$submenu_typo          = NeuzinTheme::neuzin_options('submenu_typo');
$submenu_color         = NeuzinTheme::neuzin_options('submenu_color');
$submenu_bgcolor       = NeuzinTheme::neuzin_options('submenu_bgcolor');
$submenu_hover_color   = NeuzinTheme::neuzin_options('submenu_hover_color');
$resmenu_typo          = NeuzinTheme::neuzin_options('resmenu_typo');
$footer4_bgcolor_dark  = NeuzinTheme::neuzin_options('footer4_bgcolor_dark');
$footer4_bgcolor_light = NeuzinTheme::neuzin_options('footer4_bgcolor_light');

$footer8_gradient_dark  = NeuzinTheme::neuzin_options('footer8_gradient_dark');
$footer8_gradient_light = NeuzinTheme::neuzin_options('footer8_gradient_light');
$footer8_copy_gradient_dark = NeuzinTheme::neuzin_options('footer8_copy_gradient_dark');
$footer8_copy_gradient_light = NeuzinTheme::neuzin_options('footer8_copy_gradient_light');


$neuzin_typo_body     = NeuzinTheme::neuzin_options('typo_body');
$neuzin_typo_h1       = NeuzinTheme::neuzin_options('typo_h1');
$neuzin_typo_h2       = NeuzinTheme::neuzin_options('typo_h2');
$neuzin_typo_h3       = NeuzinTheme::neuzin_options('typo_h3');
$neuzin_typo_h4       = NeuzinTheme::neuzin_options('typo_h4');
$neuzin_typo_h5       = NeuzinTheme::neuzin_options('typo_h5');
$neuzin_typo_h6       = NeuzinTheme::neuzin_options('typo_h6');

$desktop_logo_width       = NeuzinTheme::neuzin_options('desktop_logo_width');
$mobile_logo_width       = NeuzinTheme::neuzin_options('mobile_logo_width');

?>
<?php
/*-------------------------------------
#. Container
---------------------------------------*/
?>
@media ( min-width:1200px ) {
	.container {
		max-width: <?php echo esc_html( $container_width ); ?>px !important;
	}
}
.primary-color {
	color: <?php echo esc_html( $primary_color ); ?>;
}
.secondary-color {
	color: <?php echo esc_html( $secondary_color ); ?>;
}
.dark-color {
	color: <?php echo esc_html( $dark_color ); ?>;
}
body {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('body_color') ); ?>;
}
a {
	color: <?php echo esc_html( $primary_color ); ?>;
}
a:hover {
	color: <?php echo esc_html( $secondary_color ); ?>;
}
.scrollToTop {
	background-color: <?php echo esc_html( $primary_color ); ?>;
}
.tlp-preloader .animation-preloader:before {
    border-top-color: <?php echo esc_html( $primary_color ); ?>;
}
.text-loader li {
	background-image: -webkit-gradient(linear, left top, right top, from(<?php echo esc_html( $primary_color ); ?>), to(<?php echo esc_html( $dark_color ); ?>));
	background-image: -o-linear-gradient(left, <?php echo esc_html( $primary_color ); ?> 0%, <?php echo esc_html( $dark_color ); ?> 100%);
	background-image: linear-gradient(to right, <?php echo esc_html( $primary_color ); ?> 0%, <?php echo esc_html( $dark_color ); ?> 100%);
}
<?php
/*-------------------------------------
#. Top Bar
---------------------------------------*/
?>
.topbar-style-1 .header-top-bar {
	background-color: <?php echo esc_html( NeuzinTheme::neuzin_options('top_bar_bgcolor') ); ?>;
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('top_bar_color') ); ?>;
}
.topbar-style-1 .header-top-bar a {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('top_bar_color') ); ?>;
}
.topbar-style-1 .header-top-bar .tophead-right i,
.topbar-style-1 .header-top-bar .tophead-left i:before {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('top_baricon_color') ); ?>;
}

.topbar-style-1.trheader .header-top-bar {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('top_bar_color_tr') ); ?>;
}
.topbar-style-1.trheader .header-top-bar a {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('top_bar_color_tr') ); ?>;
}
.topbar-style-1.trheader .header-top-bar .tophead-right i,
.topbar-style-1.trheader .header-top-bar .tophead-left i:before {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('top_baricon_color_tr') ); ?>;
}

.topbar-style-2 .header-top-bar {
	background-color: <?php echo esc_html( NeuzinTheme::neuzin_options('top_bar_bgcolor_2') ); ?>;
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('top_bar_color_2') ); ?>;
}
.topbar-style-2 .header-top-bar a {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('top_bar_color_2') ); ?>;
}
.topbar-style-2 .header-top-bar .tophead-right i, 
.topbar-style-2 .header-top-bar .tophead-left i:before {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('top_baricon_color_2') ); ?>;
}
.topbar-style-2 .header-top-bar .tophead-right a:hover i, 
.topbar-style-2 .header-top-bar .tophead-left a:hover i:before {
	color: <?php echo esc_html( $secondary_color ); ?>;
}
.topbar-style-1 .header-top-bar .tophead-right .button-btn:hover {
	background-color: <?php echo esc_html( $secondary_color ); ?>;
}

<?php
/*-------------------------------------
#. Header
---------------------------------------*/
?>
<?php // Main Menu ?>
.site-header .main-navigation nav ul li a {
	font-family: <?php echo esc_html( $menu_typo['font-family'] ); ?>, sans-serif;
	font-size : <?php echo esc_html( $menu_typo['font-size'] ); ?>;
	font-weight : <?php echo esc_html( $menu_typo['font-weight'] ); ?>;
	line-height : <?php echo esc_html( $menu_typo['line-height'] ); ?>;
	color: <?php echo esc_html( $menu_color ); ?>;
	text-transform : <?php echo esc_html( $menu_typo['text-transform'] ); ?>;
	font-style: <?php echo empty( $menu_typo['font-style'] ) ? 'normal' : $menu_typo['font-style']; ?>;
}
.site-header .main-navigation ul.menu > li > a:hover,
.site-header .main-navigation ul.menu li.current-menu-item > a,
.site-header .main-navigation ul.menu li.current > a {
	color: <?php echo esc_html( $menu_hover_color ); ?>;
}
.site-header .main-navigation nav > ul > li > a:before {
	background-color: <?php echo esc_html( $menu_hover_color ); ?>;
}
.trheader .site-header .rt-sticky-menu .main-navigation nav > ul > li > a,
.header-style-2.trheader .site-header .rt-sticky-menu .main-navigation nav > ul > li > a, 
.header-style-2.trheader .site-header .rt-sticky-menu .main-navigation .menu > li > a {
	color: <?php echo esc_html( $menu_color ); ?>;
}
.trheader .site-header .rt-sticky-menu .main-navigation nav > ul > li > a:hover,
.header-style-2.trheader .site-header .rt-sticky-menu .main-navigation nav > ul > li > a:hover, 
.header-style-2.trheader .site-header .rt-sticky-menu .main-navigation .menu > li > a:hover {
	color: <?php echo esc_html( $menu_hover_color ); ?>;
}
.trheader .site-header .rt-sticky-menu .main-navigation ul.menu > li.current-menu-item > a, 
.trheader .site-header .rt-sticky-menu .main-navigation ul.menu > li.current > a  {
	color: <?php echo esc_html( $menu_hover_color ); ?>;
}
.site-header .main-navigation nav ul li a.active {
	color: <?php echo esc_html( $menu_hover_color );?>;
}
.trheader .site-header .main-navigation nav > ul > li > a,
.trheader .site-header .main-navigation .menu > li > a {
	color: <?php echo esc_html( $menu_color_tr );?>;
}
.trheader .site-header .main-navigation ul.menu > li.current-menu-item > a, 
.trheader .site-header .main-navigation ul.menu > li.current > a {
	color: <?php echo esc_html( $menu_hover_color_tr );?>;
}
.trheader.non-stick .site-header .main-navigation ul.menu > li > a,
.trheader.non-stick .site-header .search-box .search-button i,
.trheader.non-stick .header-icon-seperator,
.trheader.non-stick .header-icon-area .cart-icon-area > a, 
.trheader.non-stick .additional-menu-area a.side-menu-trigger {
	color: <?php echo esc_html( $menu_color_tr ); ?>;
}
.trheader .site-header .main-navigation nav > ul > li > a:hover, 
.trheader .site-header .main-navigation .menu > li > a:hover {
	color: <?php echo esc_html( $menu_hover_color_tr );?>;
}
.site-header .main-navigation nav > ul > li > a:after,
.menu-full-wrap .header-button .ghost-btn:hover {
	background-color: <?php echo esc_html( $primary_color ); ?>;
}
.header-search {
	background-color: rgba(<?php echo esc_html( $primary_rgb );?>, 0.9);
}
.header-search .close {
	color: <?php echo esc_html( $primary_color ); ?>;
}
body .rt-cover {
	background-color: rgba(<?php echo esc_html( $primary_rgb );?>, 0);
}
<?php // Submenu ?>
.site-header .main-navigation ul > li > ul {
	background-color: <?php echo esc_html( $submenu_bgcolor ); ?>;
}
.site-header .main-navigation ul li ul li a {
	font-family: <?php echo esc_html( $submenu_typo['font-family'] ); ?>, sans-serif;
	font-size : <?php echo esc_html( $submenu_typo['font-size'] ); ?>;
	font-weight : <?php echo esc_html( $submenu_typo['font-weight'] ); ?>;
	line-height : <?php echo esc_html( $submenu_typo['line-height'] ); ?>;
	color: <?php echo esc_html( $submenu_color ); ?>;
	text-transform : <?php echo esc_html( $submenu_typo['text-transform'] ); ?>;
	font-style: <?php echo empty( $submenu_typo['font-style'] ) ? 'normal' : $submenu_typo['font-style']; ?>;
}
.site-header .main-navigation ul li ul.sub-menu li.menu-item-has-children:before {
	color: <?php echo esc_html( $submenu_color ); ?>;
}
.site-header .main-navigation ul li ul.sub-menu li.menu-item-has-children:hover:before,
.site-header .main-navigation ul li.mega-menu ul.sub-menu li a:hover,
.site-header .main-navigation ul.menu li ul.sub-menu li a:hover,
.site-header .main-navigation ul li ul li:hover > a {
	color: <?php echo esc_html( $submenu_hover_color ); ?>;
}
.site-header .site-branding{
	width:<?php echo esc_html( $desktop_logo_width ); ?>px;
}

.site-header .main-navigation ul.menu li ul.sub-menu li a:before {
	background-color: <?php echo esc_html( $submenu_hover_color ); ?>;
}
<?php // Multi Column Menu ?>
.site-header .main-navigation ul li.mega-menu > ul.sub-menu {
	background-color: <?php echo esc_html( $submenu_bgcolor ); ?>
}
.site-header .main-navigation ul li.mega-menu > ul.sub-menu li:before {
	color: <?php echo esc_html( $primary_color ); ?>;
}
<?php // Mean Menu ?>
#meanmenu .mean-bar .logo-small{
	width:<?php echo esc_html( $mobile_logo_width );?>px;
}
.mean-container .mean-bar .barsearch,
.mean-container .mean-bar .sidebarBtn {
	color: <?php echo esc_html( $primary_color ); ?>;
}
.rt-slide-nav .offscreen-navigation ul li > span:after {
	color: <?php echo esc_html( $primary_color ); ?>;
}
.mean-container .mean-bar {	
	border-color: <?php echo esc_html( $primary_color ); ?>;
}
.mean-container .mean-bar .button-btn {	
	border-color: <?php echo esc_html( $primary_color ); ?>;
}
.mean-container .mean-nav ul li a {
	font-family: <?php echo esc_html( $resmenu_typo['font-family'] ); ?>, sans-serif;
	font-size : <?php echo esc_html( $resmenu_typo['font-size'] ); ?>;
	font-weight : <?php echo esc_html( $resmenu_typo['font-weight'] ); ?>;
	line-height : <?php echo esc_html( $resmenu_typo['line-height'] ); ?>;
	color: <?php echo esc_html( $menu_color ); ?>;
	text-transform : <?php echo esc_html( $resmenu_typo['text-transform'] ); ?>;
	font-style: <?php echo empty( $resmenu_typo['font-style'] ) ? 'normal' : $resmenu_typo['font-style']; ?>;
}
.mean-container ul li a:hover,
.mean-container > ul > li.current-menu-item > a {
	color: <?php echo esc_html( $menu_hover_color ); ?>;
}
.mean-container .mean-nav ul li a:before,
.mean-container .mean-nav ul li.current_page_item > a,
.mean-container .mean-nav ul li.current-menu-parent > a {
	color: <?php echo esc_html( $secondary_color );?>;
}
<?php // Header icons ?>
.menu-right-wrap .header-search-box i:before {
	color: <?php echo esc_html( $primary_color );?>;
}
.additional-menu-area span.side-menu-trigger span {
	background-color: <?php echo esc_html( $primary_color ); ?>;
}
.header-icon-area .cart-icon-area .cart-icon-num {
	color: <?php echo esc_html( $primary_color );?>;
}
.additional-menu-area a.side-menu-trigger:hover,
.trheader.non-stick .additional-menu-area a.side-menu-trigger:hover {
	color: <?php echo esc_html( $menu_hover_color );?>;
}
.trheader.non-stickh .additional-menu-area span.side-menu-trigger span {
    background-color: <?php echo esc_html( $primary_color );?>;
}
.trheader.non-stickh .rt-sticky-menu .header-button-wrap .header-button .button-btn, 
.non-stickh .rt-sticky-menu .header-button-wrap .header-button .button-btn {
    color: <?php echo esc_html( $primary_color );?>;
}
.trheader.non-stickh .rt-sticky-menu .header-button-wrap .header-button .button-btn:hover, 
.non-stickh .rt-sticky-menu .header-button-wrap .header-button .button-btn:hover {
    background-color: <?php echo esc_html( $primary_color );?>;
}
.header-style-1.non-stickh .menu-right-wrap .header-search-box i:before, 
.header-style-1.trheader.non-stickh .menu-right-wrap .header-search-box i:before, 
.header-style-3.trheader.non-stickh .menu-right-wrap .header-search-box i:before {
	color: <?php echo esc_html( $primary_color );?>;
}
.site-header .search-box .search-text {
	border-color: <?php echo esc_html( $primary_color );?>;
}
.additional-menu-area .sidenav ul li a:hover,
.additional-menu-area .sidenav-address span a:hover {
	color: <?php echo esc_html( $primary_color );?>;
}
.header-style-1 .site-header .header-top .icon-left i:before {
	color: <?php echo esc_html( $secondary_color );?>;
}
.header-style-1 .header-button-wrap .header-button .button-btn {
	border-color: <?php echo esc_html( $primary_color ); ?>;
    color: <?php echo esc_html( $primary_color ); ?>;
}
.header-style-1 .header-button-wrap .header-button .button-btn:hover {
	background-color: <?php echo esc_html( $primary_color ); ?>;
}
<?php // Header Layout 2 ?>
.header-style-2 .site-header .info-wrap .icon-left i:before  {
	color: <?php echo esc_html( $primary_color ); ?>;
}
.header-style-2 .header-button-wrap .header-button .button-btn {
	border-color: <?php echo esc_html( $primary_color ); ?>;
    color: <?php echo esc_html( $primary_color ); ?>;
}
.header-style-2 .header-button-wrap .header-button .button-btn:hover {
	background-color: <?php echo esc_html( $primary_color ); ?>;
}
.header-style-2.trheader .header-button-wrap .header-button .button-btn:hover {
    background-color: <?php echo esc_html( $primary_color ); ?>;
    border-color: <?php echo esc_html( $primary_color ); ?>;
}
<?php // Header Layout 3 ?>
.header-style-3 .header-button-wrap .header-button .button-btn {
	border-color: <?php echo esc_html( $primary_color ); ?>;
    color: <?php echo esc_html( $primary_color ); ?>;
}
.header-style-3 .header-button-wrap .header-button .button-btn:hover {
	background-color: <?php echo esc_html( $primary_color ); ?>;
}
<?php // Header Layout 4 ?>
.header-style-4 .header-button-wrap .header-button .button-btn {
	border-color: <?php echo esc_html( $primary_color ); ?>;
    color: <?php echo esc_html( $primary_color ); ?>;
}
.header-style-4 .header-button-wrap .header-button .button-btn:hover {
	background-color: <?php echo esc_html( $primary_color ); ?>;
}
@media (min-width: 2100px) {
	.header-style-3.trheader .header-area .header-controll {
		background: linear-gradient(45deg, rgba(<?php echo esc_html( $primary_rgb );?>, 0.2) 0%, rgba(<?php echo esc_html( $dark_rgb );?>, 1) 60%);
	}
	.header-style-4.trheader .header-area .header-controll:after {
		background-color: <?php echo esc_html( $primary_color ); ?>;
	}
}
<?php // Header Layout 5 ?>
.header-style-5 .site-header .header-button .button-btn {
	border-color: <?php echo esc_html( $primary_color ); ?>;
    color: <?php echo esc_html( $primary_color ); ?>;
}
.header-style-5 .site-header .header-button .button-btn:hover {
	background-color: <?php echo esc_html( $primary_color ); ?>;
}
.header-style-5 .header-icon-area .header-search-box a, 
.header-style-5 .header-icon-area .cart-icon-area > a,
.header-style-5.trheader.non-stickh .header-icon-area .header-search-box a {
	color: <?php echo esc_html( $primary_color ); ?>;
}
<?php
/*-------------------------------------
#. Typography
---------------------------------------*/
?>
body {
	font-family: <?php echo esc_html( $neuzin_typo_body['font-family'] ); ?>, sans-serif;
	font-size: <?php echo esc_html( $neuzin_typo_body['font-size'] ); ?>;
	line-height: <?php echo esc_html( $neuzin_typo_body['line-height'] ); ?>;
	font-weight: <?php echo esc_html( $neuzin_typo_body['font-weight'] ); ?>;
}
h1 {
	font-family: <?php echo esc_html( $neuzin_typo_h1['font-family'] ); ?>, sans-serif;
	font-size: <?php echo esc_html( $neuzin_typo_h1['font-size'] ); ?>;
	line-height: <?php echo esc_html( $neuzin_typo_h1['line-height'] ); ?>;
	font-weight: <?php echo esc_html( $neuzin_typo_h1['font-weight'] ); ?>;
}
h2 {
	font-family: <?php echo esc_html( $neuzin_typo_h2['font-family'] ); ?>, sans-serif;
	font-size: <?php echo esc_html( $neuzin_typo_h2['font-size'] ); ?>;
	line-height: <?php echo esc_html( $neuzin_typo_h2['line-height'] ); ?>;
	font-weight: <?php echo esc_html( $neuzin_typo_h2['font-weight'] ); ?>;
}
h3 {
	font-family: <?php echo esc_html( $neuzin_typo_h3['font-family'] ); ?>, sans-serif;
	font-size: <?php echo esc_html( $neuzin_typo_h3['font-size'] ); ?>;
	line-height: <?php echo esc_html( $neuzin_typo_h3['line-height'] ); ?>;
	font-weight: <?php echo esc_html( $neuzin_typo_h3['font-weight'] ); ?>;
}
h4 {
	font-family: <?php echo esc_html( $neuzin_typo_h4['font-family'] ); ?>, sans-serif;
	font-size: <?php echo esc_html( $neuzin_typo_h4['font-size'] ); ?>;
	line-height: <?php echo esc_html( $neuzin_typo_h4['line-height'] ); ?>;
	font-weight: <?php echo esc_html( $neuzin_typo_h4['font-weight'] ); ?>;
}
h5 {
	font-family: <?php echo esc_html( $neuzin_typo_h5['font-family'] ); ?>, sans-serif;
	font-size: <?php echo esc_html( $neuzin_typo_h5['font-size'] ); ?>;
	line-height: <?php echo esc_html( $neuzin_typo_h5['line-height'] ); ?>;
	font-weight: <?php echo esc_html( $neuzin_typo_h5['font-weight'] ); ?>;
}
h6 {
	font-family: <?php echo esc_html( $neuzin_typo_h6['font-family'] ); ?>, sans-serif;
	font-size: <?php echo esc_html( $neuzin_typo_h6['font-size'] ); ?>;
	line-height: <?php echo esc_html( $neuzin_typo_h6['line-height'] ); ?>;
	font-weight: <?php echo esc_html( $neuzin_typo_h6['font-weight'] ); ?>;
}
<?php
/*-------------------------------------
#. Banner
---------------------------------------*/
?>
.entry-banner .entry-banner-content h1 {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('banner_heading_color') );?>;
}
.breadcrumb-area .entry-breadcrumb span a,
.breadcrumb-trail ul.trail-items li a {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('breadcrumb_link_color') );?>;
}
.breadcrumb-area .entry-breadcrumb span a:hover,
.breadcrumb-trail ul.trail-items li a:hover {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('breadcrumb_link_hover_color') );?>;
}
.breadcrumb-trail ul.trail-items li,
.entry-banner .entry-breadcrumb .delimiter {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('breadcrumb_seperator_color') );?>;
}
.breadcrumb-area .entry-breadcrumb > span:last-child,
.breadcrumb-trail ul.trail-items li > span {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('breadcrumb_active_color') );?>;
}
.entry-banner .entry-banner-content {
	padding-top: <?php  echo esc_html( NeuzinTheme::neuzin_options('banner_top_padding') ); ?>px;
	padding-bottom: <?php  echo esc_html( NeuzinTheme::neuzin_options('banner_bottom_padding') ); ?>px;
}

.entry-banner:after {
    opacity: <?php  echo esc_html( NeuzinTheme::neuzin_options('banner_bg_opacity') ); ?>;
	background-image: -o-linear-gradient(30deg, <?php echo esc_html( $primary_color ); ?> 0%, <?php echo esc_html( $dark_color ); ?> 93%);
	background-image: linear-gradient(60deg, <?php echo esc_html( $primary_color ); ?>, <?php echo esc_html( $dark_color ); ?> 93%);
}

.entry-banner .shape-holder li.shape1 svg stop:first-child,
.entry-banner .shape-holder li.shape2 svg stop:first-child,
.entry-banner .shape-holder li.shape3 svg stop:first-child {
	stop-color: <?php echo esc_html( NeuzinTheme::neuzin_options('banner_shape1') );?>;
}
.entry-banner .shape-holder li.shape1 svg stop:last-child {
	stop-color: <?php echo esc_html( NeuzinTheme::neuzin_options('banner_shape2') );?>;
}
.entry-banner .shape-holder li.shape2 svg stop:last-child {
	stop-color: <?php echo esc_html( NeuzinTheme::neuzin_options('banner_shape3') );?>;
}
.entry-banner .shape-holder li.shape3 svg stop:last-child {
	stop-color: <?php echo esc_html( NeuzinTheme::neuzin_options('banner_shape4') );?>;
}


<?php
/*-------------------------------------
#. Footer
---------------------------------------*/
?> 
.footer-top-area {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer_color') ); ?>;
}
.footer-top-area .widget h3 {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer_title_color') ); ?>;
}
.footer-top-area .widget ul li a {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer_link_color') ); ?>;
}
.footer-top-area .widget ul li a:hover {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer_link_hover_color') ); ?>;
}
.footer-top-area .corporate-address li i,
.footer-top-area .widget_recent_entries ul li .post-date {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer_link_hover_color') ); ?>;
}
.footer-style-4 .footer-area:before {
	background-image: -o-linear-gradient(30deg, <?php echo esc_html( $footer4_bgcolor_dark ); ?> 0%, <?php echo esc_html( $footer4_bgcolor_light ); ?> 100%);
	background-image: linear-gradient(60deg, <?php echo esc_html( $footer4_bgcolor_dark ); ?> 0%, <?php echo esc_html( $footer4_bgcolor_light ); ?> 100%);
}
.footer-style-4 .footer-top-area .widget h3 {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer4_title_color') ); ?>;
}
.footer-style-4 .footer-area .footer-top-area,
.footer-style-4 .footer-bottom-area {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer4_color') ); ?>;
}
.footer-style-4 .footer-top-area a, 
.footer-style-4 .footer-top-area .widget ul li a,
.footer-style-4 .footer-top-area .widget ul.menu li a:before,
.footer-style-4 .copyright_widget .widget ul li a,
.footer-style-4 .footer-top-area .widget_recent_entries ul li .post-date,
.footer-style-4 .footer-top-area .corporate-address li i,
.footer-style-4 .footer-top-area ul li a i,
.footer-style-4 .footer-bottom-area .copyright a {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer4_color') ); ?>;
}
.footer-style-4 .footer-top-area a:hover, 
.footer-style-4 .footer-top-area .widget ul li a:hover,
.footer-style-4 .footer-top-area .widget ul.menu li a:hover:before,
.footer-style-4 .copyright_widget .widget ul li a:hover,
.footer-style-4 .footer-top-area ul li a:hover i,
.footer-style-4 .footer-bottom-area .copyright a:hover {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer4_link_hover_color') ); ?>;
}
<?php /*Footer 4 shape color*/ ?>
.footer-style-4 .shape-holder .shape1 svg stop:first-child {
	stop-color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer4_shape1') ); ?>;
}
.footer-style-4 .shape-holder .shape1 svg stop:last-child {
	stop-color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer4_shape2') ); ?>;
}
.footer-style-4 .shape-holder .shape2 svg stop:first-child {
	stop-color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer4_shape3') ); ?>;
}
.footer-style-4 .shape-holder .shape2 svg stop:last-child {
	stop-color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer4_shape2') ); ?>;
}
.footer-style-4 .shape-holder .shape3 svg stop:first-child {
	stop-color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer4_shape4') ); ?>;
}
.footer-style-4 .shape-holder .shape3 svg stop:last-child {
	stop-color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer4_shape5') ); ?>;
}
<?php /*Footer 5 color*/ ?>

.footer-style-5 .footer-top-area {
	background-color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer5_bgcolor') ); ?>;
}
.footer-style-5 .footer-bottom-area {
	background-color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer5_copy_bgcolor') ); ?>;
}
<?php /*Footer 6 color*/ ?>
.footer-style-6 .footer-top-area {
	background-color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer6_bgcolor') ); ?>;
}
.footer-style-6 .footer-top-area .widget h3 {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer6_title_color') ); ?>;
}
.footer-style-6 .footer-top-area .widget a,
.footer-style-6 .footer-top-area .widget ul li a {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer6_link_color') ); ?>;
}
.footer-style-6 .footer-top-area .widget a:hover,
.footer-style-6 .footer-top-area .widget ul li a:hover {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer6_link_hover_color') ); ?>;
}
.footer-style-6 .footer-top-area,
.footer-style-6 .footer-top-area .corporate-address li i,
.footer-style-6 .footer-top-area .widget_recent_entries ul li .post-date,
.footer-style-6 .footer-top-area .rt-post-box .post-box-style ul li,
.footer-style-6 .footer-top-area .rt-post-box .post-box-style ul li a {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer6_color') ); ?>;
}
.footer-style-6 .footer-bottom-area {
	background-color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer6_copy_bgcolor') ); ?>;
}
.footer-style-6 .footer-bottom-area,
.footer-style-6 .footer-bottom-area a,
.footer-style-6 .footer-bottom-area a:link,
.footer-style-6 .footer-bottom-area .widget a {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer6_link_color') ); ?>;
}
.footer-style-6 .footer-bottom-area a:hover,
.footer-style-6 .footer-bottom-area a:link:hover,
.footer-style-6 .footer-bottom-area .widget a:hover {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer6_link_hover_color') ); ?>;
}
.footer-style-6 .footer-top-area .rt_footer_social_widget ul.footer-social li a:hover {
	color: <?php echo esc_html( $primary_color ); ?>;
}
<?php /*Footer 7 color*/ ?>
.footer-style-7 .footer-top-area .widget h3 {
    color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer7_title_color') ); ?>;
}
.footer-style-7 .footer-top-area {
	background-color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer7_bgcolor') ); ?>;
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer7_color') ); ?>;
}
.footer-style-7 .footer-bottom-area {
	background-color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer7_copy_bgcolor') ); ?>;
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer7_color') ); ?>;
}
.footer-style-7 .footer-top-area .widget a, 
.footer-style-7 .footer-top-area .widget ul li a {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer7_link_color') ); ?>;
}
.footer-style-7 .footer-top-area .widget a:hover, 
.footer-style-7 .footer-top-area .widget ul li a:hover {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer7_link_hover_color') ); ?>;
}
.footer-style-7 .footer-bottom-area a, 
.footer-style-7 .footer-bottom-area a:link, 
.footer-style-7 .footer-bottom-area .widget a {
    color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer7_link_color') ); ?>;
}
.footer-style-7 .footer-bottom-area a:hover, 
.footer-style-7 .footer-bottom-area a:link:hover, 
.footer-style-7 .footer-bottom-area .widget a:hover {
    color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer7_link_hover_color') ); ?>;
}
.footer-style-7 .footer-top-area .corporate-address li i,
.footer-style-7 .footer-top-area .widget_recent_entries ul li .post-date {
   color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer7_link_hover_color') ); ?>;
}

<?php /*Footer 8 color*/ ?>
.footer-style-8 .footer-top-area .widget h3 {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer8_title_color') ); ?>;
}
.footer-style-8 .footer-top-area:before {
	background-image: -o-linear-gradient(30deg, <?php echo esc_html( $footer8_gradient_dark ); ?> 0%, <?php echo esc_html( $footer8_gradient_light ); ?> 100%);
	background-image: linear-gradient(60deg, <?php echo esc_html( $footer8_gradient_dark ); ?> 0%, <?php echo esc_html( $footer8_gradient_light ); ?> 100%);
}
.footer-style-8 .footer-top-area .widget a,
.footer-style-8 .footer-top-area .widget ul li a {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer8_link_color') ); ?>;
}
.footer-style-8 .footer-top-area .widget a:hover,
.footer-style-8 .footer-top-area .widget ul li a:hover {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer8_link_hover_color') ); ?>;
}
.footer-style-8 .footer-top-area .corporate-address li i,
.footer-style-8 .footer-top-area .widget_recent_entries ul li .post-date,
.footer-style-8 .footer-top-area .rt-post-box .post-box-style ul li,
.footer-style-8 .footer-top-area .rt-post-box .post-box-style ul li a {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer8_color') ); ?>;
}
.footer-style-8 .footer-bottom-area {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer8_color') ); ?>;
}
.footer-style-8 .footer-bottom-area a,
.footer-style-8 .footer-bottom-area a:link,
.footer-style-8 .footer-bottom-area a:visited,
.footer-style-8 .footer-bottom-area .widget a {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer8_link_color') ); ?>;
}
.footer-style-8 .footer-bottom-area a:hover,
.footer-style-8 .footer-bottom-area a:link:hover,
.footer-style-8 .footer-bottom-area a:visited:hover,
.footer-style-8 .footer-bottom-area .widget a:hover {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer8_link_hover_color') ); ?>;
}
.footer-style-8 .footer-bottom-area {
	background-image: -o-linear-gradient(30deg, <?php echo esc_html( $footer8_copy_gradient_dark ); ?> 0%, <?php echo esc_html( $footer8_copy_gradient_light ); ?> 100%);
	background-image: linear-gradient(60deg, <?php echo esc_html( $footer8_copy_gradient_dark ); ?> 0%, <?php echo esc_html( $footer8_copy_gradient_light ); ?> 100%);
}

<?php /*Footer 9 color*/ ?>
.footer-style-9 .footer-top-area .widget h3 {
    color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer9_title_color') ); ?>;
}
.footer-style-9 .footer-top-area {
	background-color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer9_bgcolor') ); ?>;
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer9_color') ); ?>;
}
.footer-style-9 .footer-bottom-area {
	background-color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer9_copy_bgcolor') ); ?>;
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer9_color') ); ?>;
}
.footer-style-9 .footer-top-area .widget a, 
.footer-style-9 .footer-top-area .widget ul li a {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer9_link_color') ); ?>;
}
.footer-style-9 .footer-top-area .widget a:hover, 
.footer-style-9 .footer-top-area .widget ul li a:hover {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer9_link_hover_color') ); ?>;
}
.footer-style-9 .footer-bottom-area,
.footer-style-9 .footer-bottom-area a, 
.footer-style-9 .footer-bottom-area a:link, 
.footer-style-9 .footer-bottom-area .widget a {
    color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer9_link_color') ); ?>;
}
.footer-style-9 .footer-bottom-area a:hover, 
.footer-style-9 .footer-bottom-area a:link:hover, 
.footer-style-9 .footer-bottom-area .widget a:hover {
    color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer9_link_hover_color') ); ?>;
}
.footer-style-9 .footer-top-area .corporate-address li i,
.footer-style-9 .footer-top-area .widget_recent_entries ul li .post-date {
   color: <?php echo esc_html( NeuzinTheme::neuzin_options('footer9_color') ); ?>;
}

<?php /*Footer Bottom area*/ ?>
.footer-bottom-area a,
.footer-bottom-area a:link, 
.footer-bottom-area a:visited {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('copy_link_color') ); ?>;
}
.footer-bottom-area a:hover,
.footer-bottom-area .widget ul li a:hover {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('copy_link_hover_color') ); ?>;
}
.footer-bottom-area {
	background-color: <?php echo esc_html( NeuzinTheme::neuzin_options('copyright_bgcolor') ); ?>;
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('copyright_color') ); ?>;
}
.rt-box-title-1 span {
	border-top-color: <?php echo esc_html( $primary_color ); ?>;
}
.footer-area .copyright a:hover,
.widget-open-hour ul.opening-schedule li .os-close {
	color: <?php echo esc_html( $primary_color ); ?>;
}
<?php
/*-------------------------------------
#. Widgets
---------------------------------------*/
?>
.sidebar-widget-area .widget_search form input:focus {
	border-color: <?php echo esc_html( $primary_color ); ?>;
}
.search-form .custom-search-input button {
	background-color: <?php echo esc_html( $primary_color ); ?>;
}
.search-form .custom-search-input button:before,
.woocommerce.widget_product_search button {
	background: -o-linear-gradient(205deg, <?php echo esc_html( $primary_color ); ?> 40%, <?php echo esc_html( $secondary_color ); ?> 100%);
    background: linear-gradient(245deg, <?php echo esc_html( $primary_color ); ?>, <?php echo esc_html( $secondary_color ); ?> 100%);
}
.search-form .custom-search-input button:after {
    background: -o-linear-gradient(30deg, <?php echo esc_html( $primary_color ); ?> 0%, <?php echo esc_html( $secondary_color ); ?> 100%);
    background: linear-gradient(60deg, <?php echo esc_html( $primary_color ); ?> 0%, <?php echo esc_html( $secondary_color ); ?> 100%);
}
.search-form .input.search-submit {
	background-color: <?php echo esc_html( $primary_color ); ?>;
	border-color: <?php echo esc_html( $primary_color ); ?>;
}
.search-form .input.search-submit a:hover {
	color: <?php echo esc_html( $primary_color ); ?>;
}
.widget ul li a:hover,
.sidebar-widget-area .widget ul li a:hover {
	color: <?php echo esc_html( $primary_color ); ?>;
}
.rt_widget_recent_entries_with_image .topic-box .widget-recent-post-title a,
.sidebar-widget-area .widget .rt-slider-sidebar .rt-single-slide .testimo-info .testimo-title h3,
.sidebar-widget-area .rt_widget_recent_entries_with_image .media-body .posted-date a,
.post-tab-layout ul.btn-tab li a,
.sidebar-widget-area .widget ul li.active a,
.sidebar-widget-area .widget ul li.active a:before,
.footer-top-area .search-form input.search-submit,
.footer-top-area ul li:before {
	color: <?php echo esc_html( $primary_color ); ?>;
}
.footer-top-area .search-form input.search-submit,
.footer-top-area .stylish-input-group .input-group-addon button i {
	color: <?php echo esc_html( $primary_color ); ?>;
}
.footer-top-area .stylish-input-group .input-group-addon button:hover {
	background: <?php echo esc_html( $primary_color ); ?>;
}
.rt-box-title-1 {
	background-color: <?php echo esc_html( $primary_color ); ?>;
}
.footer-topbar,
.footer-topbar .emergrncy-content-holder{
	background: <?php echo esc_html( $primary_color ); ?>;
}
.footer-topbar .emergrncy-content-holder:before {
	border-color: transparent <?php echo esc_html( $primary_color ); ?>;
}
.feature-post-layout .entry-title a:hover,
.post-tab-layout .entry-title a:hover,
.post-box-style .media-body h3 a:hover,
.post-box-style .post-box-date ul li a:hover,
.feature-post-layout .post-box-date ul li a:hover {
	color: <?php echo esc_html( $primary_color ); ?>;
}
.rt_widget_recent_entries_with_image .topic-box .widget-recent-post-title a:hover {
	color: <?php echo esc_html( $secondary_color ); ?>;
}
.post-tab-layout ul.btn-tab li .active {
	background-color: <?php echo esc_html( $primary_color ); ?>;
}
<?php
/*-------------------------------------
#. Inner Contents
---------------------------------------*/
?>
.entry-footer .about-author .media-body .author-title,
.entry-title h1 a,
blockquote.wp-block-quote cite {
	color: <?php echo esc_html( $primary_color );?>;
}
.comments-area .main-comments .replay-area a:hover {
	background-color: <?php echo esc_html( $primary_color );?>;
}
.sticky .blog-box {
  border-color: <?php echo esc_html( $secondary_color );?>;
}
blockquote cite:after {
	background-color: <?php echo esc_html( $secondary_color );?>;
}
#respond .logged-in-as a,
#respond #cancel-comment-reply-link {
	color: <?php echo esc_html( $primary_color );?>;
}
#respond form .btn-send {
    background-image: -o-linear-gradient(30deg, <?php echo esc_html( $primary_color );?> 0%, <?php echo esc_html( $secondary_color );?> 100%);
    background-image: linear-gradient(60deg, <?php echo esc_html( $primary_color );?> 0%, <?php echo esc_html( $secondary_color );?> 100%);
}
#respond form .btn-send:hover {
    background: -o-linear-gradient(205deg, <?php echo esc_html( $primary_color );?> 40%, <?php echo esc_html( $secondary_color );?> 100%);
    background: linear-gradient(245deg, <?php echo esc_html( $primary_color );?> 40%, <?php echo esc_html( $secondary_color );?> 100%);
}
form.post-password-form input[type="submit"] {
	background-color: <?php echo esc_html( $primary_color );?>;
}
form.post-password-form input[type="submit"]:hover {
	background-color: <?php echo esc_html( $secondary_color );?>;
}
<?php
/*-------------------------------------
#. Error 404
---------------------------------------*/
?>
.error-page-area {
    background-color: <?php echo esc_html( NeuzinTheme::neuzin_options('error_bodybg') );?>;
}
.error-page-area .text-1 {	
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('error_text1_color') );?>;
}
.error-page-area .text-2 {
	color: <?php echo esc_html( NeuzinTheme::neuzin_options('error_text2_color') );?>;
}
<?php
/*-------------------------------------
#. Comment
---------------------------------------*/
?>
.item-comments .item-comments-list ul.comments-list li .comment-reply {
  background-color: <?php echo esc_html( $primary_color );?>;
}
.title-bar35:after {
	background: <?php echo esc_html( $primary_color );?>;
}
<?php
/*------------------------------------
#. Buttons
------------------------------------*/
?>
.button-gradient-1 {
	background-color: <?php echo esc_html($primary_color); ?>;
}
.button-gradient-1:before {
	background: <?php echo esc_html($primary_color); ?>;
    background: -o-linear-gradient(205deg, <?php echo esc_html($primary_color); ?> 40%, <?php echo esc_html($secondary_color); ?> 100%);
    background: linear-gradient(245deg, <?php echo esc_html($primary_color); ?> 40%, <?php echo esc_html($secondary_color); ?> 100%);
}
.button-gradient-1:after {
	background: <?php echo esc_html($primary_color); ?>;
    background-image: -o-linear-gradient(30deg, <?php echo esc_html($primary_color); ?> 0%, <?php echo esc_html($secondary_color); ?> 100%);
    background-image: linear-gradient(60deg, <?php echo esc_html($primary_color); ?> 0%, <?php echo esc_html($secondary_color); ?> 100%);
}
<?php
/*-------------------------------------
#. Blog layout
---------------------------------------*/
?>
.blog-box .blog-item-content h3 a:hover,
.blog-box .blog-item-content ul li a:hover {
	color: <?php echo esc_html( $primary_color );?>;
}
.blog-box .blog-item-content .post-grid-more {
	color: <?php echo esc_html( $primary_color );?>;
}
.blog-box .blog-item-content .post-grid-more:hover {
	color: <?php echo esc_html( $secondary_color );?>;
}

<?php
/*-------------------------------------
#. Single Content
---------------------------------------*/
?>
blockquote,
.wp-block-quote:not(.is-large):not(.is-style-large) {
	border-color: <?php echo esc_html( $primary_color );?>;
}
.entry-header .entry-meta .post-date i {
	color: <?php echo esc_html( $primary_color );?>;
}
.entry-footer ul.item-tags li a:hover,
.about-author .media-body .author-title a,
.entry-header .entry-meta ul li i {
	color: <?php echo esc_html( $primary_color );?>;
}
.ui-cat-tag span a:hover {
    background: <?php echo esc_html( $primary_color );?>;
}
.entry-footer .item-tags a:hover,
.entry-footer .post-share .share-links a:hover {
	color: <?php echo esc_html( $primary_color );?>;
}
.entry-header .entry-meta ul li a:hover {
	color: <?php echo esc_html( $primary_color );?>;
}
.single-post .entry-content ol li:before,
.entry-content ol li:before {
	background-color: <?php echo esc_html( $primary_color );?>;
}
.rt-related-post-info .post-title a:hover {
	color: <?php echo esc_html( $primary_color );?>;
}
<?php
/*-------------------------------------
#. Pagination
---------------------------------------*/
?>
.pagination-area ul li a,
.pagination-area ul li span {
	color: <?php echo esc_html( $primary_color );?>;
}
.pagination-area li.active a:hover,
.pagination-area ul li.active a,
.pagination-area ul li a:hover,
.pagination-area ul li span.current {
	background-color: <?php echo esc_html( $primary_color );?>;
}
.woocommerce nav.woocommerce-pagination ul li a,
.woocommerce nav.woocommerce-pagination ul li span {
	color: <?php echo esc_html( $primary_color );?>;
}
.woocommerce nav.woocommerce-pagination ul li a:hover,
.woocommerce nav.woocommerce-pagination ul li .current,
.woocommerce nav.woocommerce-pagination ul li span.current,
.woocommerce nav.woocommerce-pagination ul li.active a {
    background-color: <?php echo esc_html( $primary_color );?>;
}
.page-links .page-number {
	color: <?php echo esc_html( $primary_color );?>;
}
.page-links span.current .page-number, 
.page-links a.post-page-numbers:hover .page-number {
	background-color: <?php echo esc_html( $primary_color );?>;
}
<?php
/*-------------------------------------
#. Contact Form 7
---------------------------------------*/
?>
.contact-form .form-group .form-control:focus,
.help-form .form-group select:focus, 
.help-form .form-group .form-control:focus {
	border-color: <?php echo esc_html( $secondary_color );?>;
}
.online-form .form-group button:before,
.estimate-form .form-group button:before {
    background-color: <?php echo esc_html( $primary_color );?>;
}
.mc4wp-form .mc4wp-form-fields button {
    background-color: <?php echo esc_html( $primary_color );?>;
}
.mc4wp-form .mc4wp-form-fields button:before {
	background-image: -o-linear-gradient(30deg, <?php echo esc_html( $primary_color );?> 0%, <?php echo esc_html( $secondary_color );?> 100%);
    background-image: linear-gradient(60deg, <?php echo esc_html( $primary_color );?> 0%, <?php echo esc_html( $secondary_color );?> 100%);
}
.mc4wp-form .mc4wp-form-fields button:after {
	background-image: -o-linear-gradient(30deg, <?php echo esc_html( $secondary_color );?> 0%, <?php echo esc_html( $primary_color );?> 100%);
    background-image: linear-gradient(60deg, <?php echo esc_html( $secondary_color );?> 0%, <?php echo esc_html( $primary_color );?> 100%);
}
<?php
/*-------------------------------------
#. Single Team
---------------------------------------*/
?>
.team-details-social li a {
  background: <?php echo esc_html( $primary_color );?>;
  border: 1px solid <?php echo esc_html( $primary_color );?>;
}
.team-details-social li:hover a {
  border: 1px solid <?php echo esc_html( $primary_color );?>;
}
.team-details-social li:hover a i {
  color: <?php echo esc_html( $primary_color );?>;
}
.skill-area .progress .lead {
  border: 2px solid <?php echo esc_html( $primary_color );?>;
}
.skill-area .progress .progress-bar {
  background: <?php echo esc_html( $primary_color );?>;
}
.team-details-info li i {
  color: <?php echo esc_html( $primary_color );?>;
}
<?php
/*-------------------------------------
#. WooCommerce
---------------------------------------*/
?>
.rt-woo-nav .owl-custom-nav-title::after,
.rt-woo-nav .owl-custom-nav .owl-prev:hover,
.rt-woo-nav .owl-custom-nav .owl-next:hover,
.woocommerce ul.products li.product .onsale,
.woocommerce span.onsale,
.woocommerce a.added_to_cart,
.woocommerce #respond input#submit:hover,
.woocommerce input.button:hover,
p.demo_store,
.woocommerce #respond input#submit.disabled:hover,
.woocommerce #respond input#submit:disabled:hover,
.woocommerce #respond input#submit[disabled]:disabled:hover,
.woocommerce a.button.disabled:hover,
.woocommerce a.button:disabled:hover,
.woocommerce a.button[disabled]:disabled:hover,
.woocommerce button.button.disabled:hover,
.woocommerce button.button:disabled:hover,
.woocommerce button.button[disabled]:disabled:hover,
.woocommerce input.button.disabled:hover,
.woocommerce input.button:disabled:hover,
.woocommerce input.button[disabled]:disabled:hover,
.woocommerce-account .woocommerce .woocommerce-MyAccount-navigation ul li a {
	background-color: <?php echo esc_html( $primary_color );?>;
}
.woocommerce div.product .product-meta a:hover,
.woocommerce a.woocommerce-review-link:hover {
	color: <?php echo esc_html( $primary_color );?>;
}
.woocommerce #review_form #respond .comment-form-rating label {
	color: <?php echo esc_html( $primary_color );?>;
}
.woocommerce div.product p.price,
.woocommerce div.product span.price {
	color: <?php echo esc_html( $secondary_color );?>;
}
.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
.woocommerce .widget_price_filter .ui-slider .ui-slider-handle {
	background-color: <?php echo esc_html( $primary_color );?>;
}

.woocommerce-message,
.woocommerce-info {
	border-color: <?php echo esc_html( $primary_color );?>;
}
.woocommerce .product-thumb-area .overlay {
	background-color: rgba(<?php echo esc_html( $primary_rgb );?>, 0.8);
}
.woocommerce .product-thumb-area:after {
	background-color: rgba(<?php echo esc_html( $secondary_rgb );?>, 0.9);
}
.woocommerce .product-thumb-area .product-info ul li a:hover,
.single-product.woocommerce .entry-summary a.compare:hover,
.single-product.woocommerce .entry-summary a.add_to_wishlist:hover,
.single-product.woocommerce .entry-summary .yith-wcwl-wishlistaddedbrowse a:hover,
.single-product.woocommerce .entry-summary .yith-wcwl-wishlistexistsbrowse a:hover {
	background-color: <?php echo esc_html( $primary_color );?>;
}
.woocommerce #respond input#submit:hover,
.woocommerce a.button:hover,
.woocommerce button.button:hover,
.woocommerce input.button:hover,
.woocommerce div.product form.cart .button:hover,
.woocommerce a.added_to_cart:hover,
.woocommerce #respond input#submit.alt:hover,
.woocommerce a.button.alt:hover,
.woocommerce button.button.alt:hover,
.woocommerce input.button.alt:hover {
  background-color: <?php echo esc_html( $secondary_color );?>;
}
.woocommerce div.product form.cart .button,
.woocommerce #respond input#submit,
.woocommerce a.button,
.woocommerce button.button,
.woocommerce input.button {
	background-color: <?php echo esc_html( $primary_color );?>;
}
.woocommerce #respond input#submit.alt,
.woocommerce a.button.alt,
.woocommerce button.button.alt,
.woocommerce input.button.alt {
    background-color: <?php echo esc_html( $primary_color );?>;
}
.woocommerce ul.products li.product h3 a:hover,
.woocommerce ul.products li.product .price {
	color: <?php echo esc_html( $primary_color );?>;
}
.woocommerce div.product .woocommerce-tabs .panel ul li:before {
	color: <?php echo esc_html( $primary_color );?>;
}
.cart-icon-products .widget_shopping_cart .mini_cart_item a:hover {
  color: <?php echo esc_html( $primary_color );?>;
}
.woocommerce.product-list-view .product-info-area .product-list-info ul li a:hover {
  background-color: <?php echo esc_html( $primary_color );?>;
}
.woocommerce .quantity .qty:hover,
.woocommerce .quantity .minus:hover,
.woocommerce .quantity .plus:hover {
	background-color: <?php echo esc_html( $primary_color );?>;
}
.product-grid-view .woo-shop-top .view-mode ul li.grid-view-nav a,
.product-list-view .woo-shop-top .view-mode ul li.list-view-nav a {
	background-color: <?php echo esc_html( $primary_color );?>;
    border-color: <?php echo esc_html( $primary_color );?>;
}
.header-icon-area .cart-icon-area > a {
	color: <?php echo esc_html( $primary_color );?>;
}
.trheader.non-stickh .site-header .header-icon-area .cart-icon-area .cart-icon-num,
.trheader.non-stickh .site-header .header-icon-area .search-box .search-button i,
.trheader.non-stickh .site-header .header-icon-area .cart-icon-area > a {
  color: <?php echo esc_html( $primary_color );?>;
}
<?php
/*----------------------
#. Miscellaneous
----------------------*/
?>
.rt-drop,
.breadcrumbs-area2 .breadcrumbs-content h3 a:hover,
.sidebar-widget-area .widget .corporate-address li i,
.sidebar-widget-area .widget .corporate-address li i.fa-map-marker,
.rt-news-box .post-cat span a:hover,
.rt-news-box .topic-box .post-date1 span a:hover,
.rt_widget_recent_entries_with_image .topic-box .post-date1 span a:hover,
.sidebar-widget-area .widget.title-style-1 h3.widgettitle,
.search-form input.search-submit,
.header-style-5.trheader .header-social li a:hover,
.header-style-5 .header-social li a:hover,
.header-style-5 .header-contact .fa,
.header-style-4.trheader .header-social li a:hover,
.header-style-4 .header-social li a:hover,
.header-style-4 .header-contact .fa,
.header-style-3.trheader .header-social li a:hover,
.header-style-3.trheader.non-stickh .header-social li a:hover,
.header-style-3 .header-contact .fa,
ul.news-info-list li i,
.header-style-2 .header-contact .fa,
.search-form input.search-submit:hover,
.rt-cat-list-widget li:hover a,
.footer-top-area .search-form input.search-submit,
.ui-cat-tag a:hover,
.entry-post-meta .post-author a:hover,
.post-detail-style2 .post-info-light ul li a:hover,
.post-detail-style2 .entry-meta li a:hover,
.entry-title a:hover,
.comments-area .main-comments .comment-meta .comment-author-name a:hover,
.rt-blog-layout .entry-thumbnail-area ul li i,
.rt-blog-layout .entry-thumbnail-area ul li a:hover,
.rt-blog-layout .entry-content h3 a:hover,
.blog-layout-1 .entry-meta ul li a:hover,
.blog-box .blog-bottom-content-holder ul li i,
.footer-top-area .rt-news-box .dark .rt-news-box-widget .media-body a:hover,
.entry-footer .share-social ul a:hover {
	color: <?php echo esc_html( $primary_color );?>;
}
.woocommerce-cart .woocommerce table.shop_table td.product-name > a:hover {
	color: <?php echo esc_html( $primary_color );?>;
}
.rt-box-title-2,.blog-box .blog-img-holder .entry-content,
button, input[type="button"], input[type="reset"], input[type="submit"],
.sidebar-widget-area .widget.title-style-1 h3.widgettitle, 
.rt-cat-list-widget li:before, 
.elementor-widget-wp-widget-categories ul li:before, 
.cat-holder-text, 
.rt-blog-layout .entry-thumbnail-area ul .active,
.blog-layout-2 .entry-meta .blog-cat ul li a:hover,
.blog-layout-3 .entry-meta ul li.blog-cat li a:hover {
    background-color: <?php echo esc_html( $primary_color );?>;
}
.elementor-widget-wp-widget-categories ul li a:before {
    color: <?php echo esc_html( $primary_color );?>;
}
.elementor-widget-wp-widget-categories ul li:hover a {
	color: <?php echo esc_html($secondary_color); ?>;
}
.post-detail-style2 .cat-holder:before {
    border-top: 8px solid <?php echo esc_html( $primary_color );?>;
}
.entry-content .wpb_layerslider_element a.layerslider-button, 
.comments-area h3.comment-num:after {	
	background: <?php echo esc_html( $primary_color );?>; 
}
.entry-content .btn-read-more-h-b, .pagination-area ul li span 
.header-style-10.trheader #tophead .tophead-social li a:hover {
    border: 1px solid <?php echo esc_html( $primary_color );?>;
}
.woocommerce nav.woocommerce-pagination ul li span {
    border-color: <?php echo esc_html( $primary_color );?>;
}
.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,
.woocommerce div.product .woocommerce-tabs ul.tabs li.active a {
	color: <?php echo esc_html( $secondary_color );?>;
}
.woocommerce div.product .woocommerce-tabs ul.tabs li a:after {
    background-color: <?php echo esc_html( $secondary_color );?>;
}
.woocommerce div.product .share-links a:hover {
    color: <?php echo esc_html( $primary_color );?>;
}
.bottomBorder {
    border-bottom: 2px solid <?php echo esc_html( $primary_color ); ?>;
}
.search-form input.search-field {
	border-color: <?php echo esc_html( $primary_color ); ?>;
}
#respond form input:focus,
#respond form textarea:focus {
	border-color: <?php echo esc_html( $primary_color ); ?>;
}
.search-form input.search-submit  {
	background-color: <?php echo esc_html( $primary_color ); ?>;
	border: 2px solid <?php echo esc_html( $primary_color ); ?>;
}
.sidebar-widget-area .widget.title-style-1 h3.widgettitle span {
	border-top: 10px solid <?php echo esc_html( $primary_color ); ?>;
}
.widget_tag_cloud .tagcloud a:hover,
.widget_product_tag_cloud a:hover {
	background: -o-linear-gradient(30deg, <?php echo esc_html( $primary_color ); ?> 0%, <?php echo esc_html( $secondary_color );?> 100%);
    background: linear-gradient(60deg, <?php echo esc_html( $primary_color ); ?> 0%, <?php echo esc_html( $secondary_color );?> 100%);
}
.cat-holder:before {
    border-top: 8px solid <?php echo esc_html( $primary_color ); ?>;
}
.footer-bottom-social ul li a {
	background-color: <?php echo esc_html( $primary_color ); ?>;
}
.footer-bottom-social ul li a:hover {
    background-color: <?php echo esc_html( $secondary_color ); ?>;
}
@-webkit-keyframes pulse2 {
  0% {
    -webkit-box-shadow: 0 0 0 0 <?php echo esc_html( $primary_color ); ?>;
    box-shadow: 0 0 0 0 <?php echo esc_html( $primary_color ); ?>;
  }
  40% {
    -webkit-box-shadow: 0 0 0 20px rgba(<?php echo esc_html( $primary_rgb );?>, 0);
    box-shadow: 0 0 0 20px rgba(<?php echo esc_html( $primary_rgb );?>, 0);
  }
  70% {
    -webkit-box-shadow: 0 0 0 20px rgba(<?php echo esc_html( $primary_rgb );?>, 0);
    box-shadow: 0 0 0 20px rgba(<?php echo esc_html( $primary_rgb );?>, 0);
  }
  100% {
    -webkit-box-shadow: 0 0 0 0 rgba(<?php echo esc_html( $primary_rgb );?>, 0);
    box-shadow: 0 0 0 0 rgba(<?php echo esc_html( $primary_rgb );?>, 0);
  }
}
@keyframes pulse2 {
  0% {
    -webkit-box-shadow: 0 0 0 0 <?php echo esc_html( $primary_color ); ?>;
    box-shadow: 0 0 0 0 <?php echo esc_html( $primary_color ); ?>;
  }
  40% {
    -webkit-box-shadow: 0 0 0 20px rgba(<?php echo esc_html( $primary_rgb );?>, 0);
    box-shadow: 0 0 0 20px rgba(<?php echo esc_html( $primary_rgb );?>, 0);
  }
  70% {
    -webkit-box-shadow: 0 0 0 20px rgba(<?php echo esc_html( $primary_rgb );?>, 0);
    box-shadow: 0 0 0 20px rgba(<?php echo esc_html( $primary_rgb );?>, 0);
  }
  100% {
    -webkit-box-shadow: 0 0 0 0 rgba(<?php echo esc_html( $primary_rgb );?>, 0);
    box-shadow: 0 0 0 0 rgba(<?php echo esc_html( $primary_rgb );?>, 0);
  }
}
