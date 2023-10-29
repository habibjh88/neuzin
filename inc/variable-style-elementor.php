<?php
/**
 * @author  DevOfWP
 * @since   1.0
 * @version 1.0
 */

$primary_color     = NeuzinTheme::neuzin_options('primary_color'); // #5a49f8
$primary_rgb       = NeuzinTheme_Helper::hex2rgb( $primary_color ); // 90, 73, 248
$secondary_color   = NeuzinTheme::neuzin_options('secondary_color'); // #7a64f2
$secondary_rgb     = NeuzinTheme_Helper::hex2rgb( $secondary_color ); // 122, 100, 242
$dark_color        = NeuzinTheme::neuzin_options('dark_color'); // #750ed5
$dark_rgb          = NeuzinTheme_Helper::hex2rgb( $dark_color ); // 117, 14, 213

$tertiary_color    = NeuzinTheme::neuzin_options('tertiary_color'); // #04d5f4

/*---------------------------------    
INDEX
===================================
#. EL: Button
#. EL: Section Title
#. EL: Slider
#. EL: Owl Nav 1
#. EL: Owl Nav 2
#. EL: Owl Nav 3
#. EL: About Image
#. EL: Text With Button
#. EL: Info Box
#. EL: Counter
#. EL: Team
#. EL: Portfolio
#. EL: Service Layout
#. EL: Testimonial
#. EL: Post Grid
#. EL: Pricing Table
#. EL: Video
#. EL: Widget
#. EL: Others
----------------------------------*/

/*-----------------------
#. EL: Button
------------------------*/
?>
.button-1 {
	color: <?php echo esc_html($primary_color); ?>;
}
.button-1:hover {
    color: <?php echo esc_html($secondary_color); ?>;
}
.btn-fill {
	background-color: <?php echo esc_html($primary_color); ?>;
	border-color: <?php echo esc_html($primary_color); ?>;
}
.btn-fill:hover {
    color: <?php echo esc_html($primary_color); ?>;
}
.btn-ghost,
.rtin-pricing-layout6.active-class .btn-ghost:hover {
	border-color: <?php echo esc_html($primary_color); ?>;
    color: <?php echo esc_html($primary_color); ?>;
}
.btn-ghost:hover,
.rtin-pricing-layout6.active-class .btn-ghost {
    background-color: <?php echo esc_html($primary_color); ?>;
}
.btn-ghost.btn-dark:hover {
    background-color: <?php echo esc_html($secondary_color); ?>;
    border-color: <?php echo esc_html($secondary_color); ?> !important;
}
.btn-light:hover {
    background-color: <?php echo esc_html($primary_color); ?>;
    border-color: <?php echo esc_html($primary_color); ?> !important;
}
.btn-ghost.btn-ghost-gradient {
    background-image: -o-linear-gradient(#fff, #fff), -o-linear-gradient(205deg, <?php echo esc_html($tertiary_color); ?>, <?php echo esc_html($primary_color); ?>);
    background-image: linear-gradient(#fff, #fff), linear-gradient(245deg, <?php echo esc_html($tertiary_color); ?>, <?php echo esc_html($primary_color); ?>);
}
.btn-ghost.btn-ghost-gradient:before {
    background-image: -o-linear-gradient(205deg, <?php echo esc_html($tertiary_color); ?>, <?php echo esc_html($primary_color); ?>);
    background-image: linear-gradient(245deg, <?php echo esc_html($tertiary_color); ?>, <?php echo esc_html($primary_color); ?>);
}
.btn-fill.btn-fill-gradient:before {
    background: <?php echo esc_html($primary_color); ?>;
    background: -o-linear-gradient(30deg, <?php echo esc_html($primary_color); ?> 0%, <?php echo esc_html($tertiary_color); ?> 100%);
    background: linear-gradient(60deg, <?php echo esc_html($primary_color); ?> 0%, <?php echo esc_html($tertiary_color); ?> 100%);
}
.btn-fill.btn-fill-gradient:after {
    background: <?php echo esc_html($primary_color); ?>;
    background-image: -o-linear-gradient(30deg, <?php echo esc_html($tertiary_color); ?> 0%, <?php echo esc_html($primary_color); ?> 100%);
    background-image: linear-gradient(60deg, <?php echo esc_html($tertiary_color); ?> 0%, <?php echo esc_html($primary_color); ?> 100%);
}
<?php
/*-----------------------
#. EL: Section Title
------------------------*/
?>
.section-title-style1 .heading-icon i {
	color: <?php echo esc_html($primary_color); ?>;
}
.section-default-style .sub-title {
	color: <?php echo esc_html($primary_color); ?>;
}
.section-style-1:before {
    background-color: <?php echo esc_html($primary_color); ?>;
}
.section-style-1:after {
    background-image: -webkit-gradient(linear, left top, right top, from(<?php echo esc_html($primary_color); ?>), to(transparent));
    background-image: -o-linear-gradient(left, <?php echo esc_html($primary_color); ?> 0%, transparent 100%);
    background-image: linear-gradient(90deg, <?php echo esc_html($primary_color); ?> 0%, transparent 100%);
}
<?php
/*-----------------------
#. EL: Slider
------------------------*/
?>
.rs-parallax-wrap .rtin-play .rtin-icon {
	color: <?php echo esc_html($primary_color); ?>;
}
.rs-parallax-wrap .rtin-play .rtin-icon:before {
	background-image: -webkit-gradient(linear, left top, left bottom, from(<?php echo esc_html($secondary_color); ?>), to(<?php echo esc_html($dark_color); ?>));
    background-image: -o-linear-gradient(top, <?php echo esc_html($secondary_color); ?> 0%, <?php echo esc_html($dark_color); ?> 100%);
    background-image: linear-gradient(180deg, <?php echo esc_html($secondary_color); ?> 0%, <?php echo esc_html($dark_color); ?> 100%);
}
<?php
/*-------------------------------------
#. EL: Owl Nav 1
---------------------------------------*/
?>
.rt-owl-nav-1.slider-nav-enabled .owl-carousel .owl-nav > div:hover {
    background-color: <?php echo esc_html($primary_color); ?>;
    border-color: <?php echo esc_html($primary_color); ?>;
}
.rt-owl-nav-1.slider-dot-enabled .owl-carousel .owl-dot:hover span,
.rt-owl-nav-1.slider-dot-enabled .owl-carousel .owl-dot.active span {
	background: <?php echo esc_html($primary_color); ?>;
}
<?php
/*-------------------------------------
#. EL: Owl Nav 2
---------------------------------------*/
?>
.rt-owl-nav-2.slider-nav-enabled .owl-carousel .owl-nav > div:hover {
    background-color: <?php echo esc_html($primary_color); ?>;
    border-color: <?php echo esc_html($primary_color); ?>;
}
.rt-owl-nav-2.slider-dot-enabled .owl-carousel .owl-dot:hover span,
.rt-owl-nav-2.slider-dot-enabled .owl-carousel .owl-dot.active span {
	background: <?php echo esc_html($primary_color); ?>;
}
<?php
/*-------------------------------------
#. EL: Owl Nav 3
---------------------------------------*/
?>
.rt-owl-nav-3.slider-dot-enabled .owl-carousel .owl-dot:hover span ,
.rt-owl-nav-3.slider-dot-enabled .owl-carousel .owl-dot.active span {
	background: <?php echo esc_html($primary_color); ?>;
}
.rt-owl-nav-3.slider-nav-enabled .owl-carousel .owl-nav > div:hover {
	background: <?php echo esc_html($primary_color); ?>;
}
<?php
/*-----------------------
#. EL: About Image
------------------------*/
?>
.about-image-text .about-content .sub-rtin-title,
.about-image-text ul.list-layout1 li:before,
.about-image-text ul.list-layout2 li:before {
	color: <?php echo esc_html($primary_color); ?>;
}
.rt-image .figure-holder .mask-text {
    background: -o-linear-gradient(205deg, <?php echo esc_html($secondary_color); ?> 0%, <?php echo esc_html($primary_color); ?> 100%);
    background: linear-gradient(245deg, <?php echo esc_html($secondary_color); ?> 0%, <?php echo esc_html($primary_color); ?> 100%);
}
<?php
/*-----------------------
#. EL: Text With Button
------------------------*/
?>
.title-text-button .subtitle {
	color: <?php echo esc_html($primary_color); ?>;
}
.title-text-button ul li:before {
	color: <?php echo esc_html($primary_color); ?>;
}
.title-text-style5 {
    background-color: <?php echo esc_html($primary_color); ?>;
}
.title-text-style5 .offer-heading {
	color: <?php echo esc_html($primary_color); ?>;
}
<?php
/*-------------------------------------
#. EL: Info Box
---------------------------------------*/
?>
.info-box-style1 .rtin-title a:hover,
.info-box-style2 .rtin-title a:hover,
.info-box-style6 .rtin-title a:hover,
.info-box-style11 .rtin-item .rtin-title a:hover,
.info-box-style12 .rtin-item .rtin-title a:hover,
.info-box-style14 .rtin-item .rtin-title a:hover,
.info-box-style17 .rtin-title a:hover {
	color: <?php echo esc_html($primary_color); ?>;
}
.info-box-style3 .rtin-item:before,
.info-box-style15 .rtin-item.rtin-icon .rtin-icon:before {
    background-color: <?php echo esc_html($primary_color); ?>;
}
.info-box-style3 .rtin-item .rtin-icon i,
.info-box-style4 .rtin-item .rtin-icon,
.info-box-style11 .rtin-item .rtin-icon,
.info-box-style14 .rtin-item .rtin-icon i,
.info-box-style15 .rtin-item:hover .rtin-icon i,
.info-box-style16 .rtin-item .rtin-icon i,
.info-box-style17 .rtin-item:hover .rtin-icon i,
.info-box-style4.dark-mode .rtin-item:hover .rtin-icon {
	color: <?php echo esc_html($primary_color); ?>;
}
.info-box-style4 .rtin-item:hover,
.info-box-style17 .rtin-item .rtin-icon {
    background-color: <?php echo esc_html($primary_color); ?>;
}
.info-box-style9 .rtin-title a:hover {
	color: <?php echo esc_html($primary_color); ?>;
}
.info-box-style10 .rtin-item:before {
    background-color: <?php echo esc_html($primary_color); ?>;
}
.info-box-style10 .rtin-item .rtin-title a:hover {
	color: <?php echo esc_html($primary_color); ?>;
}
.info-box-style13 .rtin-item.rtin-icon .rtin-icon:before,
.info-box-style14 .rtin-item.rtin-icon:hover .rtin-icon:before,
.info-box-style15 .rtin-item:before,
.working-process-style7 .rtin-item:hover .count-number {
    background-color: <?php echo esc_html($primary_color); ?>;
}
.working-process-default .rtin-title a:hover {
	color: <?php echo esc_html($primary_color); ?>;
}
.working-process-style1 .rtin-item:hover .count-number,
.working-process-style7 .count-number {
	color: <?php echo esc_html($primary_color); ?>;
}
.rtin-story .story-layout .story-box-layout:before {
    background-color: <?php echo esc_html($primary_color); ?>;
}
.info-box-style17 .rtin-item:hover .icon-holder svg {
    fill: <?php echo esc_html($primary_color); ?>;
}
<?php
/*-----------------------
#. EL: Counter
------------------------*/
?>
.rt-counter .rtin-item i {
	color: <?php echo esc_html($primary_color); ?>;
}
.rt-counter .rtin-item .rtin-counter {
	color: <?php echo esc_html($primary_color); ?>;
}
.rtin-progress-bar .progress .progress-bar {
	background-color: <?php echo esc_html($secondary_color); ?>;
}
.rt-counter .rtin-item .rtin-media .image-svg svg {
	fill: <?php echo esc_html($primary_color); ?>;
}
<?php
/*------------------------------
#. EL: Team
--------------------------------*/
?>
.team-default .rtin-content .rtin-title a:hover {
	color: <?php echo esc_html($primary_color); ?>;
}
.team-multi-layout-1 .animted-bg-wrap .animted-bg {
	background-color: rgba(<?php echo esc_html( $primary_rgb );?>, 0.9);
}
.team-multi-layout-2 .rtin-item .rtin-thums:before {
	background-color: rgba(<?php echo esc_html( $primary_rgb );?>, 0.5);
}
.team-multi-layout-2 .rtin-item:hover .rtin-thums:before {
	background-color: rgba(<?php echo esc_html( $primary_rgb );?>, 0.9);
}
.team-multi-layout-1 .maks-item .rtin-social li a:hover,
.team-multi-layout-2 .rtin-item:hover .rtin-social li a {
	background-color: <?php echo esc_html($secondary_color); ?>;
}
.team-multi-layout-3 .rtin-content .rtin-social li a:hover {
	color: <?php echo esc_html($primary_color); ?>;
}
.team-multi-layout-3 .animted-bg-wrap .animted-bg {
    background: <?php echo esc_html($primary_color); ?>;
    background: -o-linear-gradient(30deg, <?php echo esc_html($primary_color); ?> 0%, <?php echo esc_html($secondary_color); ?> 100%);
    background: linear-gradient(60deg, <?php echo esc_html($primary_color); ?> 0%, <?php echo esc_html($secondary_color); ?> 100%);
}
.team-single ul.rtin-social li.share i,
.team-single .rtin-content ul.rtin-team-info li i,
.team-single .rtin-content a:hover {
	color: <?php echo esc_html($primary_color); ?>;
}
<?php
/*------------------------------
#. EL: Portfolio
--------------------------------*/
?>
.portfolio-default .rt-portfolio-tab a.current, 
.portfolio-default .rt-portfolio-tab a:hover {
    background: <?php echo esc_html($primary_color); ?>;
}
.portfolio-multi-layout-1 .rtin-title a:hover,
.portfolio-multi-layout-1 .rtin-cat a:hover,
.portfolio-multi-layout-1 .rtin-item .rtin-content .rtin-icon a,
.portfolio-multi-layout-2 .rtin-item .rtin-read a:hover,
.portfolio-multi-layout-3 .rtin-content h3 a:hover {
	color: <?php echo esc_html($primary_color); ?>;
}
.portfolio-multi-layout-1 .rtin-item:after,
.portfolio-multi-layout-2 .rtin-item .rtin-content {
	background-color: <?php echo esc_html($primary_color); ?>;
}
.portfolio-multi-layout-4 .rtin-title a:hover,
.portfolio-multi-layout-4 .rtin-cat a:hover,
.portfolio-multi-layout-4 .rtin-item .rtin-content .rtin-icon a:hover {
	color: <?php echo esc_html($primary_color); ?>;
}
.portfolio-single .portfolio-details ul.rtin-portfolio-info li a:hover {
	color: <?php echo esc_html($primary_color); ?>;
}
.portfolio-single .item-slider .owl-nav > div:hover {
    background-color: <?php echo esc_html($primary_color); ?>;
    border: 1px solid <?php echo esc_html($primary_color); ?>;
}
.portfolio-grid-layout7 .rtin-item:before {
	background-color: rgba(<?php echo esc_html( $primary_rgb );?>, 0.9);
}
<?php
/*------------------------------
#. EL: Service Layout
--------------------------------*/
?>
.service-grid-layout1 .rtin-item .rtin-icon i,
.service-grid-layout3 .rtin-item .rtin-icon i {
	color: <?php echo esc_html($primary_color); ?>;
}
.service-default .rtin-item .rtin-title a:hover {
	color: <?php echo esc_html($primary_color); ?>;
}
.service-grid-layout2 .rtin-item .rtin-icon:before,
.service-grid-layout3 .rtin-item:before {
    background-color: <?php echo esc_html($primary_color); ?>;
}
.rtin-service-info li span {
	color: <?php echo esc_html($primary_color); ?>;
}
<?php
/*------------------------------
#. EL: Testimonial
--------------------------------*/
?>
.rtin-testimonial-1 .rtin-item .top-box {
	background-image: -o-linear-gradient(30deg, <?php echo esc_html($primary_color); ?> 0%, <?php echo esc_html($secondary_color); ?> 100%);
    background-image: linear-gradient(60deg, <?php echo esc_html($primary_color); ?> 0%, <?php echo esc_html($secondary_color); ?> 100%);
}
.rtin-testimonial-1 .rtin-item .rtin-icon,
.rtin-testimonial-2 .rtin-item .rtin-icon {
	color: <?php echo esc_html($primary_color); ?>;
}
.rtin-testimonial-2 .rtin-item {
	background-image: -o-linear-gradient(30deg, <?php echo esc_html($primary_color); ?> 0%, <?php echo esc_html($secondary_color); ?> 100%);
    background-image: linear-gradient(60deg, <?php echo esc_html($primary_color); ?> 0%, <?php echo esc_html($secondary_color); ?> 100%);
}
.rtin-testimonial-8 .shape-wrap li svg path {
    fill: <?php echo esc_html($primary_color); ?>;
}
@media (max-width: 480px) {
	.rtin-testimonial-8 .rtin-content {
		background-color: <?php echo esc_html($primary_color); ?>;
	}
}
@media only screen and (max-width: 767px) {
	.rtin-testimonial-7 .rtin-item {
		background-color: <?php echo esc_html($primary_color); ?>;
	}
}
<?php
/*------------------------------
#. EL: Post Grid
--------------------------------*/
?>
.post-grid-style1 .rtin-item .rtin-title a:hover,
.post-grid-style1 .rtin-item ul li a:hover,
.post-grid-style1 .rtin-item ul li i,
.post-grid-style2 .rtin-item .rtin-title a:hover,
.post-grid-style2 .rtin-item ul li a:hover,
.post-grid-style3 .rtin-item h3 a:hover,
.post-grid-style3 .rtin-item ul li a:hover {
    color: <?php echo esc_html($primary_color); ?>;
}
.post-grid-style5 .rtin-item ul li,
.post-grid-style5 .rtin-item ul li a,
.post-grid-style5 .rtin-item .rtin-title a:hover,
.post-grid-style7 .rtin-item ul li i,
.post-grid-style7 .rtin-item ul li a:hover,
.post-grid-style7 .rtin-item .rtin-title a:hover {
    color: <?php echo esc_html($primary_color); ?>;
}
<?php
/*------------------------------
#. EL: Pricing Table
--------------------------------*/
?>
.rtin-pricing-layout2 .price-header .rtin-price,
.rtin-pricing-layout4 .price-header .rtin-price,
.rtin-pricing-layout6.active-class .item-price {
    color: <?php echo esc_html($primary_color); ?>;
}
.rtin-pricing-layout2 .rt-price-table-box .popular-offer,
.rtin-pricing-layout3 .rt-price-table-box .popular-offer,
.rtin-pricing-layout4 .rt-price-table-box .popular-offer,
.rtin-pricing-layout6 .status-shape {
    border-top: 5rem solid <?php echo esc_html($primary_color); ?>;
}
.rtin-pricing-layout3 .price-header .rtin-price {
    background: -webkit-linear-gradient(-135deg, <?php echo esc_html($tertiary_color); ?>, <?php echo esc_html($primary_color); ?>);
	-webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.rtin-pricing-layout3 .rtin-price .price-fac {
	background: -webkit-linear-gradient(-45deg, <?php echo esc_html($tertiary_color); ?>, <?php echo esc_html($tertiary_color); ?>);
	-webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.rtin-pricing-layout5 .price-header {
    background-color: <?php echo esc_html($primary_color); ?>;
    background-image: -o-linear-gradient(30deg, <?php echo esc_html($primary_color); ?> 0%, <?php echo esc_html($secondary_color); ?> 100%);
    background-image: linear-gradient(60deg, <?php echo esc_html($primary_color); ?> 0%, <?php echo esc_html($secondary_color); ?> 100%);
}
<?php
/*------------------------------
#. EL: Video
--------------------------------*/
?>
.video-style1 .item-icon .rtin-play,
.video-style2 .item-icon .rtin-play,
.video-style3 .item-icon .rtin-play {
    background-color: <?php echo esc_html( $primary_color );?>;
}
.video-style1 .item-icon .rtin-play:hover {
    background-color: <?php echo esc_html( $dark_color );?>;
}
.video-style2 .item-icon .rtin-play:before,
.video-style3 .item-icon .rtin-play:before {
	background-image: -webkit-gradient(linear, left top, left bottom, from(<?php echo esc_html( $secondary_color );?>), to(<?php echo esc_html( $dark_color );?>));
    background-image: -o-linear-gradient(top, <?php echo esc_html( $secondary_color );?> 0%, <?php echo esc_html( $dark_color );?> 100%);
    background-image: linear-gradient(180deg, <?php echo esc_html( $secondary_color );?> 0%, <?php echo esc_html( $dark_color );?> 100%);
}
.video-style1 .item-icon .rtin-play:after {
	background-color: rgba(<?php echo esc_html( $primary_rgb );?>, 0.6);
}
<?php
/*------------------------------
#. EL: Widget
--------------------------------*/
?>
.fixed-sidebar-left .elementor-widget-wp-widget-nav_menu ul > li > a:hover,
.fix-bar-bottom-copyright .rt-about-widget ul li a:hover, 
.fixed-sidebar-left .rt-about-widget ul li a:hover {
	color: <?php echo esc_html( $primary_color );?>;
}
<?php
/*------------------------------
#. EL: Others
--------------------------------*/
?>
.rtin-contact-info ul li i,
.rtin-address-default .rtin-item .rtin-icon i:before,
.rtin-address-default .rtin-item .rtin-info a:hover {
    color: <?php echo esc_html( $primary_color );?>;
}
.rtin-address-default.dark .rtin-address-info {
    background: <?php echo esc_html( $primary_color );?>;
}

.fixed-sidebar-addon .elementor-widget-wp-widget-nav_menu ul > li > a:hover,
.fixed-sidebar-addon .rt-about-widget .footer-social li a:hover {
    color: <?php echo esc_html( $primary_color ); ?>;
}
.rt-cat-list-widget li:before {
    background: <?php echo esc_html( $primary_color );?>;
}
.elementor-icon-list-items .elementor-icon-list-item i {
    color: <?php echo esc_html( $secondary_color ); ?>;
}
.elementor-accordion .elementor-active .elementor-accordion-icon > span,
.elementor-accordion .elementor-accordion-item .elementor-tab-title.elementor-active a {
    color: <?php echo esc_html( $primary_color );?>;
}
.rtin-skills .rtin-skill-each .progress .progress-bar {
    background-color: <?php echo esc_html( $primary_color );?>;
}
.rtin-skills .rtin-skill-each .progress .progress-bar > span {
    color: <?php echo esc_html( $primary_color );?>;
}
.rtin-skills .rtin-skill-each .progress .progress-bar > span:before {
    border-top-color: <?php echo esc_html( $primary_color );?>;
}
.animate-shape-style10 .animated-shape li stop:first-child {
	stop-color: <?php echo esc_html( $primary_color );?>;
}
.animate-shape-style10 .animated-shape li stop:last-child {
	stop-color: <?php echo esc_html( $dark_color );?>;
}
.rtel-content-toggle ul.nav.nav-tabs .nav-item.show .nav-link, 
.rtel-content-toggle ul.nav.nav-tabs .nav-link.active {
    background-color: <?php echo esc_html( $primary_color );?>;
}
