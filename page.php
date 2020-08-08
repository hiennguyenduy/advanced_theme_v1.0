<?php
/**
 * The template for displaying all pages
 *
 * @author hien-tech (laptrinhsbs@gmail.com)
 * @since 2020-04-25
 */
get_header(); ?>

<div class="container content container-page">
	<div class="main block">
        <?php if (have_posts()) { ?>
            <?php while(have_posts()) { the_post(); ?>
                <article class="page">
                    <?php do_action('ltsbs_before_title'); ?>

                    <h2><?php the_title(); ?></h2>

                    <?php the_content(); ?>
                </article>
            <?php } ?>
        <?php } else { ?>
            <?php echo wpautop(__('Sorry, no posts were found')); ?>
        <?php } ?>
    </div>
</div>

<?php get_footer(); ?>