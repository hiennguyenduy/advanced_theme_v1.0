<?php
/**
 * Template part for displaying gallery posts
 *
 * @author hien-tech (laptrinhsbs@gmail.com)
 * @since 2020-04-26
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h2><?php the_title(); ?></h2>

    <?php the_content(); ?>
</article>

