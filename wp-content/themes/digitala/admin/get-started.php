<?php

use ColibriWP\Theme\PluginsManager;
use ColibriWP\Theme\Translations;

$digitala_is_builder_installed = apply_filters( 'digitala_page_builder/installed', false );

wp_enqueue_script( 'updates' );

function digitala_get_setting_link( $setting ) {
    return esc_attr( digitala_theme()->getCustomizer()->getSettingQuickLink( $setting ) );
}

?>

<div class="digitala-get-started__container digitala-admin-panel">
    <div class="digitala-get-started__section">
        <h2 class="col-title digitala-get-started__section-title">
            <span class="digitala-get-started__section-title__icon dashicons dashicons-admin-plugins"></span>
            <?php Translations::escHtmlE( 'get_started_section_1_title' ); ?>
        </h2>
        <div class="digitala-get-started__content">


            <?php foreach ( digitala_theme()->getPluginsManager()->getPluginData() as $digitala_recommended_plugin_slug => $digitala_recommended_plugin_data ): ?>
                <?php
                $digitala_plugin_state = digitala_theme()->getPluginsManager()->getPluginState( $digitala_recommended_plugin_slug );
                $digitala_notice_type  = $digitala_plugin_state === PluginsManager::ACTIVE_PLUGIN ? 'blue' : '';
                if ( isset( $digitala_recommended_plugin_data['internal'] ) && $digitala_recommended_plugin_data['internal'] ) {
                    continue;
                }
                ?>
                <div 
				
					class="digitala-notice <?php echo esc_attr( $digitala_notice_type ); ?> plugin-card-<?php echo $digitala_recommended_plugin_slug;?>">
                    <div class="digitala-notice__header">
                        <h3 class="digitala-notice__title"><?php echo esc_html( digitala_theme()->getPluginsManager()->getPluginData( "{$digitala_recommended_plugin_slug}.name" ) ); ?></h3>
                        <div class="digitala-notice__action">
                            <?php if ( $digitala_plugin_state === PluginsManager::ACTIVE_PLUGIN ): ?>
                                <p class="digitala-notice__action__active"><?php Translations::escHtmlE( 'plugin_installed_and_active' ); ?> </p>
                            <?php else: ?>
                                <?php if ( $digitala_plugin_state === PluginsManager::INSTALLED_PLUGIN ): ?>
                                    <a class="button button-large colibri-plugin activate-now" 
										data-slug="<?php echo $digitala_recommended_plugin_slug;?>"
                                       href="<?php echo esc_url( digitala_theme()->getPluginsManager()->getActivationLink( $digitala_recommended_plugin_slug ) ); ?>">
                                        <?php Translations::escHtmlE( 'activate' ); ?>
                                    </a>
                                <?php else: ?>
                                    <a class="button button-large colibri-plugin install-now"
									   data-slug="<?php echo $digitala_recommended_plugin_slug;?>"
                                       href="<?php echo esc_url( digitala_theme()->getPluginsManager()->getInstallLink( $digitala_recommended_plugin_slug ) ); ?>">
                                        <?php Translations::escHtmlE( 'install' ); ?>
                                    </a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <p class="digitala-notice__description"><?php echo esc_html( digitala_theme()->getPluginsManager()->getPluginData( "{$digitala_recommended_plugin_slug}.description" ) ); ?></p>


                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="digitala-get-started__section">
        <h2 class="digitala-get-started__section-title">
            <span class="digitala-get-started__section-title__icon dashicons dashicons-admin-appearance"></span>
            <?php Translations::escHtmlE( 'get_started_section_2_title' ); ?>
        </h2>
        <div class="digitala-get-started__content">
            <div class="digitala-customizer-option__container">
                <div class="digitala-customizer-option">
                    <span class="digitala-customizer-option__icon dashicons dashicons-format-image"></span>
                    <a class="digitala-customizer-option__label"
                       target="_blank"
                       href="<?php echo esc_url( digitala_get_setting_link( 'logo' ) ); ?>">
                        <?php Translations::escHtmlE( 'get_started_set_logo' ); ?>
                    </a>
                </div>
                <div class="digitala-customizer-option">
                    <span class="digitala-customizer-option__icon dashicons dashicons-format-image"></span>
                    <a class="digitala-customizer-option__label"
                       target="_blank"
                       href="<?php echo esc_url( digitala_get_setting_link( 'hero_background' ) ); ?>">
                        <?php Translations::escHtmlE( 'get_started_change_hero_image' ); ?>
                    </a>
                </div>
                <div class="digitala-customizer-option">
                    <span class="digitala-customizer-option__icon dashicons dashicons-menu-alt3"></span>
                    <a class="digitala-customizer-option__label"
                       target="_blank"
                       href="<?php echo esc_url( digitala_get_setting_link( 'navigation' ) ); ?>">
                        <?php Translations::escHtmlE( 'get_started_change_customize_navigation' ); ?>
                    </a>
                </div>
                <div class="digitala-customizer-option">
                    <span class="digitala-customizer-option__icon dashicons dashicons-layout"></span>
                    <a class="digitala-customizer-option__label"
                       target="_blank"
                       href="<?php echo esc_url( digitala_get_setting_link( 'hero_layout' ) ); ?>">
                        <?php Translations::escHtmlE( 'get_started_change_customize_hero' ); ?>
                    </a>
                </div>
                <div class="digitala-customizer-option">
                    <span class="digitala-customizer-option__icon dashicons dashicons-admin-appearance"></span>
                    <a class="digitala-customizer-option__label"
                       target="_blank"
                       href="<?php echo esc_url( digitala_get_setting_link( 'footer' ) ); ?>">
                        <?php Translations::escHtmlE( 'get_started_customize_footer' ); ?>
                    </a>
                </div>
                <?php if ( $digitala_is_builder_installed ): ?>
                    <div class="digitala-customizer-option">
                        <span class="digitala-customizer-option__icon dashicons dashicons-art"></span>
                        <a class="digitala-customizer-option__label"
                           target="_blank"
                           href="<?php echo esc_url( digitala_get_setting_link( 'color_scheme' ) ); ?>">
                            <?php Translations::escHtmlE( 'get_started_change_color_settings' ); ?>
                        </a>
                    </div>
                    <div class="digitala-customizer-option">
                        <span class="digitala-customizer-option__icon dashicons dashicons-editor-textcolor"></span>
                        <a class="digitala-customizer-option__label"
                           target="_blank"
                           href="<?php echo esc_url( digitala_get_setting_link( 'general_typography' ) ); ?>">
                            <?php Translations::escHtmlE( 'get_started_customize_fonts' ); ?>
                        </a>
                    </div>

                <?php endif; ?>
                <div class="digitala-customizer-option">
                    <span class="digitala-customizer-option__icon dashicons dashicons-menu-alt3"></span>
                    <a class="digitala-customizer-option__label"
                       target="_blank"
                       href="<?php echo esc_url( digitala_get_setting_link( 'menu' ) ); ?>">
                        <?php Translations::escHtmlE( 'get_started_set_menu_links' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php



wp_print_request_filesystem_credentials_modal();
wp_print_admin_notice_templates();

