<?php
/**
 * Template Name: Category Template
 */
?>
<?php get_header(); ?>
<div class="main-heading"><h1><?php the_title(); ?></h1></div>
<section role="main">
    <div id="main">
        <div id="ajax-posts" class="row">
            <?php
            $baseURL = get_site_url();
            /** Start post qty displayed on category page*/
            $postsPerPage = 6;
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => $postsPerPage,
                'orderby' => 'publish_date',
                'order' => 'DESC',
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) :
                $loop->the_post();
                $postId = get_the_ID(); //get ID of current post
                $postObject = get_post($postId);
                $postTitle = $postObject->post_title;
                $content = $postObject->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                ?>
                <div class="catalog_list_item">
                    <a href=<?php echo $baseURL . '/' . $postObject->post_name; ?>>
                        <div class="catalog_list_item_image"><img class="catalog_item_image" src="<?php echo  getImageSrc($postObject, null , array(400, 400)); ?>" alt="<?php echo $postTitle;?>"></div>
                        <div class="catalog_list_item_title"><h1 class="catalog_item_title"><?php echo $postTitle;?></h1></div>
                        <div class="catalog_list_item_description"><?php echo $content; ?></div>
                    </a>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
        <div class="bottom-navigation">
            <button id="more_posts" data-qty="<?php echo $postsPerPage; ?>" class="bottom-navigation-button">Load More</button>
            <button id="sort-by-date" data-current-sort-order="ASC" class="bottom-navigation-button">Sort By Date &#9660;</button>
        </div>
    </div>
</section>
<?php get_footer(); ?>

