<?php
/**
 * Action hook: shows the list of submenu page children.
 *
 * @author hien-tech (laptrinhsbs@gmail.com)
 * @since 2020-04-25
 */
function ltsbs_show_submenu_page_children()
{
    global $post;
    
    if (empty($post)) return false;

    if (ltsbs_page_is_has_children() || $post->post_parent > 0) {
        echo '<nav class="nav sub-nav">';
            echo '<ul>';
                echo '<span class="parent-link"><a href="' . get_the_permalink(ltsbs_get_top_parent()) . '">' . get_the_title(ltsbs_get_top_parent()) . '</a></span>';

                // lấy danh sách page children
                $args = array(
                    'child_of' => ltsbs_get_top_parent(),
                    'title_li' => ''
                );
                wp_list_pages($args);
            echo '</ul>';
        echo '</nav>';
        echo '<div class="clr"></div>';
    }
}
add_action('ltsbs_before_title', 'ltsbs_show_submenu_page_children');