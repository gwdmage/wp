<?php

function enqueue_styles()
{
    wp_enqueue_style('whitesquare-style', get_stylesheet_uri());
    wp_register_style('font-style', 'http://fonts.googleapis.com/css?family=Oswald:400,300');
    wp_enqueue_style('font-style');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts()
{
    wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
    wp_enqueue_script('html5-shim');
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

add_filter('wp_nav_menu_items', 'my_wp_nav_menu_items', 10, 2);

function my_wp_nav_menu_items($items, $args)
{
    $menu = wp_get_nav_menu_object($args->menu);
    $phone = get_field('phone', $menu);
    $html = '<li class="menu-item-phone">' . $phone . '</li>';
    $items = $html . $items;

    return $items;
}

function more_post_ajax()
{
    $offset = $_POST["offset"];
    $postsPerPage = $_POST["postsPerPage"];
    $order = $_POST["sort_order"];
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => $postsPerPage,
        'offset' => $offset,
        'orderby' => 'publish_date',
        'order' => $order,
    );
    $out = '';
    $loop = new WP_Query($args);
    while ($loop->have_posts()) :
        $baseURL = get_site_url();
        $loop->the_post();
        $postId = get_the_ID(); //get ID of current post
        $postContent = get_post($postId);
        $imageSize = array(200, 200);
        $postTitle = $postContent->post_title;
        ?>
        <div class="small-12 large-4 columns">
            <div class="product_block">
                <?php
                if (has_post_thumbnail($postId)): ?>
                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($postId), $imageSize); ?>
                    <img class="product_image" src="<?php echo $image[0]; ?>">
                <?php else : ?>
                    <img class="default_product_image"
                         src="http://wp.magento1.local/wp-content/themes/psdtohtml/images/psdtohtml-placeholder.png">
                <?php endif; ?>
                <div class="product_title"><a href=<?php echo $baseURL . '/' . $postContent->post_name; ?>>
                        <h1><?php echo $postTitle; ?></h1></a></div>
                <div class="product_description"><?php echo $postContent->post_content; ?></div>
            </div>
        </div>
    <?php
    endwhile;
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');

function sort_date_ajax()
{
    $postsPerPage = $_POST["postsPerPage"];
    $order = $_POST["sort_order"];
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => $postsPerPage,
        'orderby' => 'publish_date',
        'order' => $order,
    );
    $out = '';
    $loop = new WP_Query($args);
    while ($loop->have_posts()) :
        $baseURL = get_site_url();
        $loop->the_post();
        $postId = get_the_ID(); //get ID of current post
        $postContent = get_post($postId);
        $imageSize = array(200, 200);
        $postTitle = $postContent->post_title;
        ?>
        <div class="small-12 large-4 columns">
            <div class="product_block">
                <?php
                if (has_post_thumbnail($postId)): ?>
                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($postId), $imageSize); ?>
                    <img class="product_image" src="<?php echo $image[0]; ?>">
                <?php else : ?>
                    <img class="default_product_image"
                         src="http://wp.magento1.local/wp-content/themes/psdtohtml/images/psdtohtml-placeholder.png">
                <?php endif; ?>
                <div class="product_title"><a href=<?php echo $baseURL . '/' . $postContent->post_name; ?>>
                        <h1><?php echo $postTitle; ?></h1></a></div>
                <div class="product_description"><?php echo $postContent->post_content; ?></div>
            </div>
        </div>
    <?php
    endwhile;
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_sort_date_ajax', 'sort_date_ajax');
add_action('wp_ajax_sort_date_ajax', 'sort_date_ajax');