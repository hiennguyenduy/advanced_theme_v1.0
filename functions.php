<?php
// Home uri
define('HOME_URI', esc_url(home_url('/')));

// Theme uri, theme path
define('THEME_DIR', get_template_directory());
define('THEME_URI', get_template_directory_uri());

// Theme info
$my_theme = wp_get_theme();
define('THEME_NAME', sanitize_title($my_theme->get('Name')));
define('THEME_VERSION', $my_theme->get('Version'));
define('VNB_TEXTDOMAIN', $my_theme->get('TextDomain'));

// Assets uri
define('ASSETS_URI', THEME_URI . '/assets');

// Libs path
define('LIBS_DIR', THEME_DIR . '/inc');

// Template path
define('TEMPLATE_DIR', THEME_DIR . '/template_parts');

// Theme init
require_once(LIBS_DIR . '/setup.php');

// Head init
require_once(LIBS_DIR . '/head.php');

// Action hook init
require_once(LIBS_DIR . '/hooks/action-hook.php');

// Help func
require_once(LIBS_DIR . '/help.php');