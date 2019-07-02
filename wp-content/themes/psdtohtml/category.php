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
            /** Start post qty displayed on category page*/
            $postsPerPage = 6;
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => $postsPerPage,
                'orderby' => 'publish_date',
                'order' => 'DESC',
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) :
                $baseURL = get_site_url();
                $loop->the_post();
                $postId = get_the_ID(); //get ID of current post
                $postContent = get_post($postId);
                $imageSize = array(200, 200);
                $postTitle = $postContent->post_title;
                ?>
                <div class="catalog_list_item">
                    <a href=<?php echo $baseURL . '/' . $postContent->post_name; ?>>
                        <div class="catalog_list_item_image">
                        <?php
                        if (has_post_thumbnail($postId)): ?>
                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($postId), $imageSize); ?>
                            <img class="catalog_item_image" src="<?php echo $image[0]; ?>" alt="<?php echo $postTitle;?>">
                        <?php else : ?>
                            <img class="catalog_item_image_default"
                                 src="<?php echo $baseURL; ?>/wp-content/themes/psdtohtml/images/psdtohtml-placeholder.png" alt="<?php echo $postTitle;?>">
                        <?php endif; ?></div>
                        <div class="catalog_list_item_title">
                            <h1 class="catalog_item_title"><?php echo $postTitle;?></h1></div>
                        <div class="catalog_list_item_description"><?php echo $postContent->post_content; ?></div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript">
    var ajaxUrl = "<?php echo admin_url('admin-ajax.php')?>";
    var postsPerPage = 3; // Post per page
    var defaultSortOrder = "ASC";
    var newSortOrder = "DESC";
    var defaultPointerDirection = 'Sort By Date ▼';
    var newtPointerDirection = 'Sort By Date ▲';

    function getOption(currentOption, defaultOption, newOption) {
        return currentOption === defaultOption ? newOption : defaultOption;
    }

    $("#more_posts").on("click", function () {
        var qty = Number($(this).attr("data-qty"));
        var currentSortOrder = $("#sort-by-date").attr("data-current-sort-order");
        var sortOrder = getOption(currentSortOrder, defaultSortOrder, newSortOrder);
        $.post(ajaxUrl, {
            action: "more_post_ajax",
            offset: qty,
            postsPerPage: postsPerPage,
            sort_order: sortOrder
        }).success(function (posts) {
            var incQty = qty + 3;
            $('#more_posts').attr({"data-qty": incQty});
            $("#ajax-posts").append(posts);
        });
    });
    $("#sort-by-date").on("click", function () {
        var incQty = $("#more_posts").attr("data-qty");
        var currentSortOrder = $(this).attr("data-current-sort-order");
        var currentPointerDirection = $(this).text();
        var newSortAttValue = getOption(currentSortOrder, defaultSortOrder, newSortOrder);
        var newPointerDirectionValue = getOption(currentPointerDirection, defaultPointerDirection, newtPointerDirection);
        $.post(ajaxUrl, {
            action: "sort_date_ajax",
            postsPerPage: incQty,
            sort_order: currentSortOrder
        }).success(function (posts) {
            $('#sort-by-date').attr({"data-current-sort-order": newSortAttValue});
            $('#sort-by-date').text(newPointerDirectionValue);
            $("#ajax-posts").html(posts);
        });
    });
</script>
<?php get_footer(); ?>

