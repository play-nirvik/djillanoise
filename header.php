<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
    <link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,500' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' id='garyvee-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/style.css?ver=1.0' media='all' />
</head>

<body <?php body_class(); ?>>
<div class="gv-body-wrapper">
    <div id="gv-main-nav" class="gv-nav-wrapper">
    <div class="gv-nav-inner">
            <div id="cta-firsttime" class="gv-cta-first">
            <a href="https://www.garyvaynerchuk.com/first-time-here/"><img src="https://www.garyvaynerchuk.com/wp-content/themes/garysixteen/assets/img/logo-firsttime.svg"></a>
        </div>
            <div class="row">
            <div class="gv-nav-mobile">
                <button class="gv-nav-toggle">
                    Menu
                </button>
            </div>
            <div class="gv-mark-type">
                <a href="https://www.garyvaynerchuk.com" class="no-hover">
                    Gary Vaynerchuk
                </a>
            </div>
            <div class="gv-nav-desktop">
                <nav class="gv-nav">
                    <ul id="menu-main-nav" class="menu"><li id="menu-item-55" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-55"><a href="https://www.garyvaynerchuk.com/blog/">Blog</a></li>
<li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53"><a href="https://www.garyvaynerchuk.com/books/">Books</a></li>
<li id="menu-item-6592" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6592"><a href="http://ask.garyvaynerchuk.com">#AskGaryVee</a></li>
<li id="menu-item-52" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52"><a href="https://www.garyvaynerchuk.com/events/">Events</a></li>
<li id="menu-item-51" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-51"><a href="https://www.garyvaynerchuk.com/hire-me/">Hire Me to Speak</a></li>
</ul>                </nav>
            </div>
            <button data-href="#gv-search|modal-open" class="gv-search-toggle gv-modal-ctrl">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>
</div>
