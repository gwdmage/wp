<?php
/**
 * Template Name: Single Post
 */
?>

<?php get_header(); ?>

<?php
$baseURL = get_site_url();
$postId = get_the_ID(); //get ID of current post
$postObject = get_post($postId);
$postTitle = get_the_title($postObject);
$postImageSrc = get_the_post_thumbnail_url($postObject);
$categoryTerms = get_the_category($postId);
$categoryObj = reset($categoryTerms);
$breadcrumbsArr = breadcrumbs($categoryObj);
$postContent = $postObject->post_content;
$postContent = apply_filters('the_content', $postContent);
$postContent = str_replace(']]>', ']]&gt;', $postContent);
?>

<div class="main-heading">
    <?php foreach ($breadcrumbsArr as $categoryName => $categoryLink): ?>
        <div class="breadcrumbs">
            <div class="breadcrumbs_inner">
                <ul class="breadcrumbs_list">
                    <li class="breadcrumbs_list_item">
                        <a class="breadcrumbs_link"
                           href="<?php echo $baseURL . '/' . $categoryLink; ?>">  <?php echo $categoryName; ?></span></a>
                    </li>
                </ul>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<section role="main">
    <div id="main">
        <div class="post_single">
            <div class="post_single_item_title"><h1><?php echo $postTitle; ?></h1></div>
            <div class="post_single_item_image">
                <img class="post_single_item_image" src="<?php echo $postImageSrc; ?>" alt="<?php echo $postTitle; ?>">
            </div>
            <div class="post_single_item_image"><?php echo $postContent; ?></div>
        </div>
    </div>
</section>
<?php get_footer(); ?>