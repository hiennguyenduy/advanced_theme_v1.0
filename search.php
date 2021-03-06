<?php
/**
 * The template for displaying search results pages
 *
 * @author hien-tech (laptrinhsbs@gmail.com)
 * @since 2020-08-02
 */
get_header(); ?>

<div class="container content">
    <div class="main block">
        <h1 class="page-header"><?php echo __('Search Results').': '.get_search_query(); ?></h1>

        <?php if (have_posts()) {
            while (have_posts()) { the_post();
                get_template_part('template-parts/post/content', get_post_format());
            }

            the_posts_pagination(array(
                'prev_text' => '<span class="screen-reader-text">' . __('Previous page') . '</span>',
                'next_text' => '<span class="screen-reader-text">' . __('Next page') . '</span>',
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page') . ' </span>',
            ));
        } else {
            get_template_part('template-parts/post/content', 'none');
        } ?>
    </div>

    <div class="side">
        <?php if (is_active_sidebar('sidebar_right')) { ?>
            <?php dynamic_sidebar('sidebar_right'); ?>
        <?php } ?>
    </div>
</div>

<?php get_footer(); ?>