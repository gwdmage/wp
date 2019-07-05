<?php
/**
 * Template Name: Single Post
 */
?>
<?php
get_header();

$baseURL = get_site_url();
$postId = get_the_ID(); //get ID of current post
$postObject = get_post($postId);
$postTitle = get_the_title($postObject);
$postImageSrc = get_the_post_thumbnail_url($postObject, array(400, 400));
$defaultImage = "wp-content/themes/psdtohtml/images/psdtohtml-placeholder.png";
$categoryTerms = get_the_category($postId);
$categoryObj = reset($categoryTerms);
$breadcrumbsArr = breadcrumbs($categoryObj);
$postContent = $postObject->post_content;
$postContent = apply_filters('the_content', $postContent);
$postContent = str_replace(']]>', ']]&gt;', $postContent);
?>

<div class="main-heading">
    <?php if ($categoryTerms): ?>
        <div class="breadcrumbs">
            <div class="breadcrumbs_inner">
                <ul class="breadcrumbs_list">
                    <?php foreach ($breadcrumbsArr as $categoryName => $categoryLink): ?>
                    <li class="breadcrumbs_list_item">
                        <a class="breadcrumbs_link"
                           href="<?php echo $baseURL . '/' . $categoryLink; ?>">  <?php echo $categoryName; ?></span></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php else: ?>
        <div class="main-heading"><h1><?php the_title(); ?></h1></div>
    <?php endif; ?>
</div>
<section role="main">
    <div id="main">
        <div class="post_single">
            <div class="post_item">
                <div class="post_item_header"><h1 class="post_item_title"><?php echo $postTitle; ?></h1></div>
                <?php if (has_post_thumbnail($postId)): ?>
                    <div class="post_item_image">
                        <img class="post_image" src="<?php echo $postImageSrc; ?>" alt="<?php echo $postTitle; ?>">
                    </div>
                <?php else: ?>
                    <div class="post_item_image">
                        <img class="post_item_image_default"
                             src="<?php echo $baseURL . '/'. $defaultImage; ?>"  alt="<?php echo $postTitle; ?>">
                    </div>
                <?php endif; ?>
                <div class="post_item_description"><?php echo $postContent; ?></div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>