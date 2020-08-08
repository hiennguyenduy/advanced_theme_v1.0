<?php
/**
 * The header for our theme
 *
 * @author hien-tech (laptrinhsbs@gmail.com)
 * @since 2020-04-22
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <h1>
                <a href="<?php echo HOME_URI; ?>"><?php bloginfo('title'); ?></a>
                <small><?php bloginfo('description'); ?></small>
            </h1>
            <div class="h_right">
                <?php get_search_form(); ?>
            </div>
        </div>
    </header>

    <nav class="nav main-nav">
        <div class="container">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'main_menu'
                ));
			?>
        </div>
    </nav>