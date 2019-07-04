<!doctype html>
<html>
<head id="head">
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php wp_title('«', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header" role="banner" class="fixed-position">
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
        <a href="#" class="menu"><span>menu</span></a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript">
        var clicks = 0;
        $(".menu").on("click", function () {
            if ((clicks % 2) === 0){
                $("#header").addClass('active-panel');
            } else{
                $("#header").removeClass('active-panel');
            }
            ++clicks;
        });
        clicks = 0;
    </script>
</header>



