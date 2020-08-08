<?php
/**
 * Template Name: Home Page
 *
 * @author hien-tech (laptrinhsbs@gmail.com)
 * @since 2020-04-22
 */
get_header(); ?>

<div class="container content">
    <?php if (is_active_sidebar('showcase')) { ?>
		<?php dynamic_sidebar('showcase'); ?>
	<?php } ?>

    <div class="block">
        <?php if (have_posts()) { ?>
            <?php while(have_posts()) { the_post(); ?>
                <article class="page">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </article>
            <?php } ?>
        <?php } else { ?>
            <?php echo wpautop(__('Sorry, no posts were found')); ?>
        <?php } ?>
    </div>

    <?php if (is_active_sidebar('box1')) { ?>
		<?php dynamic_sidebar('box1'); ?>
	<?php } ?>

    <?php if (is_active_sidebar('box2')) { ?>
		<?php dynamic_sidebar('box2'); ?>
	<?php } ?>

    <?php if (is_active_sidebar('box3')) { ?>
		<?php dynamic_sidebar('box3'); ?>
	<?php } ?>
</div>

<?php get_footer(); ?>