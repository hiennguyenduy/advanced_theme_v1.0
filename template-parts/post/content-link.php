<?php
/**
 * Template part for displaying link posts
 *
 * @author hien-tech (laptrinhsbs@gmail.com)
 * @since 2020-04-26
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="well">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</div>
</article>

