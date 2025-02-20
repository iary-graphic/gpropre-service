<?php


use ColibriWP\Theme\Core\Hooks;
use ColibriWP\Theme\Translations;
use ColibriWP\Theme\View;

$digitala_tabs            = View::getData( 'tabs', array() );
$digitala_current_tab     = View::getData( 'current_tab', null );
$digitala_url             = View::getData( 'page_url', null );
$digitala_welcome_message = View::getData( 'welcome_message', null );
$digitala_tab_partial     = View::getData( "tabs.{$digitala_current_tab}.tab_partial", null );
Hooks::prefixed_do_action( "before_info_page_tab_{$digitala_current_tab}" );
$digitala_slug        = "colibri-wp-page-info";
$colibri_get_started = array(
    'plugin_installed_and_active' => Translations::escHtml( 'plugin_installed_and_active' ),
    'activate'                    => Translations::escHtml( 'activate' ),
    'activating'                  => __( 'Activating', 'digitala' ),
    'install_recommended'         => isset( $_GET['install_recommended'] ) ? $_GET['install_recommended'] : ''
);

wp_localize_script( $digitala_slug, 'colibri_get_started', $colibri_get_started );
?>
<div class="digitala-admin-page wrap about-wrap full-width-layout mesmerize-page">

    <div class="digitala-admin-page--hero">
        <div class="digitala-admin-page--hero-intro digitala-admin-page-spacing ">
            <div class="digitala-admin-page--hero-logo">
                <img src="<?php echo esc_url( digitala_theme()->getAssetsManager()->getBaseURL() . "/images/colibriwp-logo.png" ) ?>"
                     alt="logo"/>
            </div>
            <div class="digitala-admin-page--hero-text ">
                <?php if ( $digitala_welcome_message ): ?>
                    <h1><?php echo esc_html( $digitala_welcome_message ); ?></h1>
                <?php endif; ?>
            </div>
        </div>
        <?php if ( count( $digitala_tabs ) ): ?>
            <nav class="nav-tab-wrapper wp-clearfix">
                <?php foreach ( $digitala_tabs as $digitala_tab_id => $digitala_tab ) : ?>
                    <a class="nav-tab <?php echo ( $digitala_current_tab === $digitala_tab_id ) ? 'nav-tab-active' : '' ?>"
                       href="<?php echo esc_url( add_query_arg( array( 'current_tab' => $digitala_tab_id ),
                           $digitala_url ) ); ?>">
                        <?php echo esc_html( $digitala_tab['title'] ); ?>
                    </a>
                <?php endforeach; ?>
            </nav>
        <?php endif; ?>
    </div>
    <?php if ( $digitala_tab_partial ): ?>
        <div class="digitala-admin-page--body digitala-admin-page-spacing">
            <div class="digitala-admin-page--content">
                <div class="digitala-admin-page--tab">
                    <div class="digitala-admin-page--tab-<?php echo esc_attr( $digitala_current_tab ); ?>">
                        <?php View::make( $digitala_tab_partial,
                            Hooks::prefixed_apply_filters( "info_page_data_tab_{$digitala_current_tab}",
                                array() ) ); ?>
                    </div>
                </div>

            </div>
            <div class="digitala-admin-page--sidebar">
                <?php View::make( 'admin/sidebar' ) ?>
            </div>
        </div>
    <?php endif; ?>
</div>



