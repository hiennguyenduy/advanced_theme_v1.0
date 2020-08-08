<?php
/**
 * Template Name: Blog Page
 *
 * @author hien-tech (laptrinhsbs@gmail.com)
 * @since 2020-04-22
 */
get_header(); ?>

<div class="container content">
    <div class="main block">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = [
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 10,
            'paged' => $paged,
        ];
        $wp_query = new WP_Query($args);
        
        if ($wp_query->have_posts()) {
            while ($wp_query->have_posts()) { $wp_query->the_post();
                get_template_part('template-parts/post/content', get_post_format());
            }

            the_posts_pagination(array(
                'prev_text' => '<span class="screen-reader-text">' . __('Previous page') . '</span>',
                'next_text' => '<span class="screen-reader-text">' . __('Next page') . '</span>',
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page') . ' </span>',
            ));
        } else {
            get_template_part('template-parts/post/content', 'none');
        }

        // Reset post data
        wp_reset_postdata();
        ?>
    </div>

    <div class="side">
        <?php if (is_active_sidebar('sidebar_right')) { ?>
            <?php dynamic_sidebar('sidebar_right'); ?>
        <?php } ?>
    </div>
</div>

<?php get_footer(); ?>