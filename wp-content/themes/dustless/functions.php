<?php
if (!defined('DUSTLESS_VERSION')) {
    // Replace the version number of the theme on each release.
    define('DUSTLESS_VERSION', wp_get_theme()->get('Version'));
}
define('DUSTLESS_DEBUG', defined('WP_DEBUG') && WP_DEBUG === true);
define('DUSTLESS_DIR', trailingslashit(get_template_directory()));
define('DUSTLESS_URL', trailingslashit(get_template_directory_uri()));
if (!function_exists('dustless_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since walker_fse 1.0.0
     *
     * @return void
     */
    function dustless_support()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        // Add support for block styles.
        add_theme_support('wp-block-styles');
        add_theme_support('post-thumbnails');
        // Enqueue editor styles.
        add_editor_style('style.css');
    }

endif;
add_action('after_setup_theme', 'dustless_support');

function dustless_style()
{
    wp_enqueue_style(
        'dustless-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'dustless_style');

/**
 * Enqueue assets scripts for both backend and frontend
 */
function dustless_block_style()
{
    wp_enqueue_style('dustless-block-style', get_template_directory_uri() . '/assets/css/block.css', array());
}
add_action('enqueue_block_assets', 'dustless_block_style');
function dustless_admin_style()
{
    $hello_notice_current_screen = get_current_screen();
    if (!empty($_GET['page']) && 'about-dustless' === $_GET['page'] || $hello_notice_current_screen->id === 'themes') {
        wp_enqueue_style('dustless-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', array(), DUSTLESS_VERSION, 'all');
    }
}
add_action('admin_enqueue_scripts', 'dustless_admin_style');

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */
require_once get_template_directory() . '/inc/admin/welcome-notice.php';

if (!function_exists('dustless_excerpt_more_postfix')) {
    function dustless_excerpt_more_postfix($more)
    {
        if (is_admin()) {
            return $more;
        }
        return '...';
    }
    add_filter('excerpt_more', 'dustless_excerpt_more_postfix');
}
