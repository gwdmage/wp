<?php
/**
 * Template Name: 404 Template
 */
?>
<?php get_header(); ?>
<section role="main">
    <div class="main-heading">
        <h1 class="page-title"><?php _e('404 PAGE NOT FOUND', 'default'); ?></h1>
    </div>
    <div id="main">
        <div class="page-not-found">
            <ul class="disc">
                <li>If you typed the URL directly, please make sure the spelling is correct.</li>
                <li>If you clicked on a link to get here, we must have moved the content.
                    <br>Please try our store search box above to search for an item.
                </li>
                <li>If you are not sure how you got here,
                    <a href="#" onclick="history.go(-1);">go back</a> to the previous page
                    or return to our <a href="<?php echo get_site_url(); ?>">homepage</a>.
                </li>
            </ul>
        </div>
    </div>
</section>
<?php get_footer(); ?>
