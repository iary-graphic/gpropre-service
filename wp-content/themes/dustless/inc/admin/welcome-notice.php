<?php

/**
 * file for holding dashboard welcome page for theme
 */
if (!function_exists('dustless_is_plugin_installed')) {
    function dustless_is_plugin_installed($plugin_slug)
    {
        $plugin_path = WP_PLUGIN_DIR . '/' . $plugin_slug;
        return file_exists($plugin_path);
    }
}
if (!function_exists('dustless_is_plugin_activated')) {
    function dustless_is_plugin_activated($plugin_slug)
    {
        return is_plugin_active($plugin_slug);
    }
}
if (!function_exists('dustless_welcome_notice')) :
    function dustless_welcome_notice()
    {
        global $pagenow;
        $meta            = get_option('dustless-welcome-notice');
        $current_screen  = get_current_screen();

        if (is_admin() && !$meta) {
            if ($current_screen->id !== 'dashboard' && $current_screen->id !== 'themes') {
                return;
            }
            if (is_network_admin()) {
                return;
            }
            if (!current_user_can('manage_options')) {
                return;
            }
            $theme = wp_get_theme();

            if (is_child_theme()) {
                $theme = wp_get_theme()->parent();
            }
            $dustless_version = $theme->get('Version');
?>
            <div class="dustless-admin-notice notice notice-info is-dismissible content-install-plugin theme-info-notice">
                <div class="info-content">
                    <h5><span class="theme-name"><span><?php echo __('Welcome to Dustless', 'dustless'); ?></span></h5>
                    <h1><?php echo __('Congratulations! Dustless has been installed and ready to build your website!', 'dustless'); ?></h1>
                    <div class='admin-btn'>
                        <a href="<?php echo admin_url(); ?>themes.php?page=about-dustless" class="button admin-button info-button"><?php echo __('Explore Dustless', 'dustless'); ?></a>
                    </div>
                </div>
            </div>
    <?php
        }
    }
endif;
add_action('admin_notices', 'dustless_welcome_notice');

if (!function_exists('dustless_ignore_admin_notice')) :
    function dustless_ignore_admin_notice()
    {
        if (isset($_GET['dustless']) && $_GET['dustless-welcome-notice'] = 'true') {
            update_option('dustless-welcome-notice', true);
        }
    }
endif;
add_action('admin_init', 'dustless_ignore_admin_notice');
function dustless_dashboard_menu()
{
    add_theme_page(esc_html__('Dustless', 'dustless'), esc_html__('Dustless', 'dustless'), 'edit_theme_options', 'about-dustless', 'dustless_theme_info_display');
}
add_action('admin_menu', 'dustless_dashboard_menu');
function dustless_theme_info_display()
{ ?>
    <div class="dashboard-about-dustless">
        <h1> <?php echo __('Welcome to the Dustless - FSE WordPress Theme', 'dustless') ?></h1>
        <p><?php echo __("Meet Dustless, the definitive WordPress theme crafted specifically for home cleaning businesses. This theme elevates your online presence with full site editing capabilities, ensuring a seamless and intuitive website building experience. Enhance your site's aesthetics and functionality with access to over 20+ ready-to-use patterns from our extensive library, perfect for quick customization and unique designs. With Dustless, create a polished, professional website that effortlessly attracts and engages your clientele. Make a pristine impression with Dustless—where clean design meets peak performance. Explore more about Dustless at https://walkerwp.com/dustless-free-wordpress-theme-for-cleaning-services/", 'dustless') ?></p>

        <h3 class="dustless-baisc-guideline-header"><?php echo __('Basic Theme Setup', 'dustless') ?></h3>
        <div class="dustless-baisc-guideline">
            <div class="featured-box">
                <ul>
                    <li><strong><?php echo __('Setup Header Layout:', 'dustless') ?></strong>
                        <ul>
                            <li> - <?php echo __('Go to Appearance -> Editor -> Template Parts -> Header:', 'dustless') ?></li>
                            <li> - <?php echo __('Click on Header -> Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'dustless') ?></li>
                            <li> - <?php echo __('Click on save to update your layout', 'dustless') ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="featured-box">
                <ul>
                    <li><strong><?php echo __('Setup Footer Layout:', 'dustless') ?></strong>
                        <ul>
                            <li> - <?php echo __('Go to Appearance -> Editor -> Template Parts -> Footer:', 'dustless') ?></li>
                            <li> - <?php echo __('click on Footer > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'dustless') ?></li>
                            <li> - <?php echo __('Click on save to update your layout', 'dustless') ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="featured-box">
                <ul>
                    <li><strong><?php echo __('Setup Templates like Homepage/404/Search/Page/Single and more templates Layout:', 'dustless') ?></strong>
                        <ul>
                            <li> - <?php echo __('Go to Appearance -> Editor -> Templates:', 'dustless') ?></li>
                            <li> - <?php echo __('click on Template(You need to edit/update) > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'dustless') ?></li>
                            <li> - <?php echo __('Click on save to update your layout', 'dustless') ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <h3><?php echo __('Required Plugins', 'dustless'); ?></h3>
        <p class="notice-text"><?php echo __('Please install and activate all recommended pluign to import the demo with "one click demo import" feature and unlock premium features!(For Pro version)', 'dustless') ?></p>
        <ul class="dustless-required-plugin">
            <li>
                <h4><?php echo __('1.  Walker Core', 'dustless'); ?>
                    <?php
                    if (dustless_is_plugin_activated('walker-core/walker-core.php')) {
                        echo __(': Plugin has been already activated!', 'dustless');
                    } elseif (dustless_is_plugin_installed('walker-core/walker-core.php')) {
                        echo __(': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'dustless');
                    } else {
                        echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=walker-core&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'dustless') . '</a>';
                    }
                    ?>
                </h4>
            </li>
            <li>
                <h4><?php echo __('2. Advanced Import - Need only to use "one click demo import" features', 'dustless'); ?>
                    <?php
                    if (dustless_is_plugin_activated('advanced-import/advanced-import.php')) {
                        echo __(': Plugin has been already activated!', 'dustless');
                    } elseif (dustless_is_plugin_installed('advanced-import/advanced-import.php')) {
                        echo __(': Plugin does not activated, Activate the plugin to use one click demo import feature.', 'dustless');
                    } else {
                        echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=advanced-import&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'dustless') . '</a>';
                    }
                    ?>
                </h4>
            </li>
        </ul>
        <div class="featured-list">
            <div class="half-col free-features">
                <h3><?php echo __('Dustless Features (Free)', 'dustless') ?></h3>
                <ul>
                    <li><strong> - <?php echo __('Home Sections and Patterns', 'dustless') ?></strong>
                        <ul>
                            <li> <?php echo __('404 - Page Not Found pattern', 'dustless') ?></li>
                            <li> <?php echo __('About Us section pattern', 'dustless') ?></li>
                            <li> <?php echo __('Banner section pattern', 'dustless') ?></li>
                            <li> <?php echo __('Blog section pattern', 'dustless') ?></li>
                            <li> <?php echo __('FAQs pattern', 'dustless') ?></li>
                            <li> <?php echo __('Gallery pattern', 'dustless') ?></li>
                            <li> <?php echo __('Our Services pattern', 'dustless') ?></li>
                            <li> <?php echo __('Partners pattern', 'dustless') ?></li>
                            <li> <?php echo __('Projects pattern', 'dustless') ?></li>
                            <li> <?php echo __('Sidebar pattern', 'dustless') ?></li>
                            <li> <?php echo __('Team pattern', 'dustless') ?></li>
                            <li> <?php echo __('Testimonial pattern', 'dustless') ?></li>
                        </ul>
                    </li>
                    <li> <strong>- <?php echo __('Our FSE Templates Ready', 'dustless') ?></strong>
                        <ul>
                            <li> <?php echo __('404 Template', 'dustless') ?></li>
                            <li> <?php echo __('Archive Template', 'dustless') ?></li>
                            <li> <?php echo __('Blank Template', 'dustless') ?></li>
                            <li> <?php echo __('Front Page Template', 'dustless') ?></li>
                            <li> <?php echo __('Left Sidebar Page Template', 'dustless') ?></li>
                            <li> <?php echo __('Page Template', 'dustless') ?></li>
                            <li> <?php echo __('Right Sidebar Page Template', 'dustless') ?></li>
                            <li> <?php echo __('Search Template', 'dustless') ?></li>
                            <li> <?php echo __('Single Template', 'dustless') ?></li>
                            <li> <?php echo __('Sitemap Template', 'dustless') ?></li>
                        </ul>
                    <li>
                    <li><strong> - <?php echo __('Header Layouts', 'dustless') ?></strong></li>
                    <li> <strong>- <?php echo __('Footer Layouts', 'dustless') ?></strong></li>
                    <li><strong> - <?php echo __('Multiple Beautiful Fonts Option', 'dustless') ?></strong></li>
                </ul>
            </div>
            <div class="half-col pro-features">
                <h3><?php echo __('Premium Features', 'dustless') ?></h3>
                <ul>
                    <li><?php echo __('Including all free features and 15+ more Premium patterns (total 30+)', 'dustless') ?></strong></li>
                    <li><?php echo __('About Us Layout ', 'dustless') ?></li>
                    <li><?php echo __('Blog Parts Layout', 'dustless') ?></li>
                    <li><?php echo __('Call to Action Layout - 2', 'dustless') ?></li>
                    <li><?php echo __('Counter Layout', 'dustless') ?></li>
                    <li><?php echo __('Contact Us Layout - 2', 'dustless') ?></li>
                    <li><?php echo __('FAQ Layout Patterns', 'dustless') ?></li>
                    <li><?php echo __('Footer Layout - 2', 'dustless') ?></li>
                    <li><?php echo __('Header Layout - 2', 'dustless') ?></li>
                    <li><?php echo __('Partners Layout', 'dustless') ?></li>
                    <li><?php echo __('Pricing Layout Section - 2', 'dustless') ?></li>
                    <li><?php echo __('Testimonials Layout', 'dustless') ?></li>
                    <li><?php echo __('Why Choose Us Layout', 'dustless') ?></li>
                </ul>
            </div>
        </div>
    </div>
<?php
}
