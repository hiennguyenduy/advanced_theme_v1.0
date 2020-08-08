<?php
/**
 * Check if the current page has child pages
 *
 * @author hien-tech (laptrinhsbs@gmail.com)
 * @since 2020-04-25
 */
function ltsbs_page_is_has_children()
{
    global $post;

    if (empty($post)) return false;

    // lấy danh sách các page em
    $pages = get_pages('child_of='.$post->ID);

    return count($pages);
}

/**
 * Get the ID of the top parent
 *
 * @author hien-tech (laptrinhsbs@gmail.com)
 * @since 2020-04-25
 */
function ltsbs_get_top_parent()
{
    global $post;

    if (empty($post)) return false;

    if ($post->post_parent) {
        // lấy ID của page anh
        $ancestors = get_post_ancestors($post->ID);

        return $ancestors[0];
    }

    return $post->ID;
}