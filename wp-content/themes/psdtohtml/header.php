<!doctype html>
<html>
<head id="head">
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
        var ajaxUrl = "<?php echo admin_url('admin-ajax.php'); ?>";
    </script>
    <title><?php wp_title('«', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header" role="banner" class="fixed-position">
    <div class="header-holder">
        <h1 class="logo" id="logo" title="PSD to HTML">PSD2HTML®</h1>
        <div class="panel">
            <address class="contacts">
                <a class="contact contact-popup-link" href="/contact-us.html">Contact</a>
                <a class="chat chat-link chat-online" href="/chat.html">Live chat</a>
            </address>
            <nav id="nav" role="navigation">
                <?php wp_nav_menu(array(
                    'menu' => 'top-menu',
                    'menu_class' => 'top-menu')); ?>
            </nav>
        </div>
        <a href="#" class="menu"><span>menu</span></a>
    </div>
</header>

