<?php
/**
 * Template part for displaying aside posts
 *
 * @author hien-tech (laptrinhsbs@gmail.com)
 * @since 2020-04-26
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-aside'); ?>>
    <div class="well">
		<small><?php the_author(); ?>@<?php the_time('F j, Y g:i a'); ?></small>
		<?php the_content(); ?>
	</div>
</article>

