<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while (have_posts()) : the_post(); ?>

    <div class="page-banner">
        <?php 
        // Check if the post has a featured image.
        if (has_post_thumbnail()) {
            $banner_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
        } else {
            // Use a default image if no featured image is set.
            $banner_image_url = get_theme_file_uri('images/ocean.jpg');
        }
        ?>
        <div class="page-banner__bg-image" style="background-image: url(<?php echo esc_url($banner_image_url); ?>);"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php the_title(); ?></h1>
            <p class="author-name" style="font-size: 14px; margin-top: 5px; color: white;">
                <?php the_author(); ?>
            </p>
        </div>
    </div>

    <h1><?php the_title(); ?></h1>
    <div><?php the_content(); ?></div>

<?php endwhile; // End of the loop.

get_footer();
?>