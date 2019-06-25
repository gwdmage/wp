<!doctype html>
<html>
<head id="head">
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php wp_title('«', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header" role="banner">
    <div class="header-holder">
        <h1 class="logo" id="logo" title="PSD to HTML"><a href="/" accesskey="1">PSD2HTML&reg;</a></h1>
        <div class="panel">
            <address class="contacts">
                <a class="contact contact-popup-link" href="/contact-us.html">Contact</a>
                <a class="chat chat-link chat-online" href="/chat.html">Live chat</a>
                <a class="tel-link" href="tel:888.724.9414">888.724.9414</a>
            </address>

            <nav id="nav" role="navigation">
                <?php wp_nav_menu(array(
                    'menu' => 'top-menu',
                    'menu_class' => 'top-menu')); ?>
            </nav>
        </div>
    </div>
</header>



