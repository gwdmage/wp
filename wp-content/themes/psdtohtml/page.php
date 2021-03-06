<?php
/**
 * Template Name: Main Template
 */
?>

<?php get_header(); ?>
    <section role="main">
        <div class="main-heading">
            <h1><?php the_title(); ?></h1>
        </div>
        <div id="main">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
<?php get_footer(); ?>