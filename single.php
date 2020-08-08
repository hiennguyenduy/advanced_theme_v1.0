<?php
/**
 * The template for displaying all single posts
 *
 * @author hien-tech (laptrinhsbs@gmail.com)
 * @since 2020-08-06
 */
get_header(); ?>

<div class="container content">
    <div class="main block">
        <?php if (have_posts()) { ?>
            <?php while (have_posts()) { the_post(); ?>
                <?php get_template_part('template-parts/post/content', get_post_format()); ?>
            <?php } ?>
        <?php } else { ?>
            <?php echo apautop('Sorry, no posts were found'); ?>
        <?php } ?>

        <?php comments_template(); ?>
    </div>

    <div class="side">
        <?php if (is_active_sidebar('sidebar_right')) { ?>
            <?php dynamic_sidebar('sidebar_right'); ?>
        <?php } ?>
    </div>
</div>

<?php get_footer(); ?>