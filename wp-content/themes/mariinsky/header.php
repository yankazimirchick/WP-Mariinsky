<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mariinsky
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>



	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
   	<?php wp_head(); ?>


    <link rel="stylesheet" type="text/css" href="<?echo get_template_directory_uri()?>/bootstrap/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?echo get_template_directory_uri()?>/bootstrap/slick/slick-theme.css"/>
    <link href="<?echo get_template_directory_uri()?>/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>

<body <?php body_class(); ?>>
<div class="py-1 bg-gold">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pr-11 topper">
                        <a href="tel:+375293099060"><i class="fa fa-phone"></i>+375 (29) 309 90 60</a>
                        <a href="tel:+375163641000"><i class="fa fa-phone"></i>+375 163 641-000</a>
                        <a href="tel:+375163642000"><i class="fa fa-phone"></i>+375 163 642-000</a>
                    </div>
                    <div class="col-md-5 pr-1 d-flex topper align-items-center text-lg-right">
                        <span class="text"><a href="mailto:hotel_mariinskiy@mail.ru"><i class="fa fa-envelope-o" aria-hidden="true"></i> hotel_mariinskiy@mail.ru</a></span><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand simplelogo" href="index.html"><?php
            the_custom_logo();
            ?></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> МЕНЮ
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">

            <?php
            wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'navbar-nav ml-auto',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
            );
            ?>



<!--
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.html" class="nav-link">ГЛАВНАЯ</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Об отеле</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="shop.html">Shop</a>
                        <a class="dropdown-item" href="product-single.html">Single Product</a>
                        <a class="dropdown-item" href="cart.html">Cart</a>
                        <a class="dropdown-item" href="checkout.html">Checkout</a>
                    </div>
                </li>
                <li class="nav-item"><a href="about.html" class="nav-link">бар</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Конференц-зал</a></li>
                <li class="nav-item cta cta-colored"><a href="contact.html" class="nav-link">Новости</a></li>


            </ul> --!>
        </div>
    </div>
</nav>
<!-- END nav -->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mariinsky' ); ?></a>



	<div id="content" class="site-content">
