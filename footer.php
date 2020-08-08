<?php
/**
 * The template for displaying the footer
 *
 * @author hien-tech (laptrinhsbs@gmail.com)
 * @since 2020-04-22
 */
?>

        <footer class="main-footer">
			<div class="container">
				<div class="f_left">
					<p>&copy; <?php echo current_time('Y'); ?> - <?php bloginfo('title'); ?></p>
				</div>
				<div class="f_right">
					<?php
						wp_nav_menu(array(
							'theme_location' => 'footer_menu'
						));
					?>
				</div>
			</div>
        </footer>
        
        <?php wp_footer(); ?>
	</body>
</html>