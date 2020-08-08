<?php
/**
 * Template part for displaying posts
 *
 * @author hien-tech (laptrinhsbs@gmail.com)
 * @since 2020-04-25
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h2><?php the_title(); ?></h2>

    <?php 
        $categories = get_the_category();
        $separator = ", ";
        $output = '';
        if ($categories) {
            foreach ($categories as $key => $category) {
                $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
            }
        }
    ?>
    <p class="meta"><?php echo __('Posted at'); ?> <?php the_time('F j, Y g:i a'); ?> <?php echo __('by'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | <?php echo __('Posted In'); ?> <?php echo trim($output, $separator); ?></p>

    <?php if (has_post_thumbnail()) { ?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php } ?>
    
    <?php if (is_single()) { ?>
		<?php the_content(); ?>
	<?php } else { ?>
        <?php the_excerpt(); ?>
        <a class="button" href="<?php the_permalink(); ?>"><?php echo __('Read More'); ?></a>
    <?php } ?>
</article>

