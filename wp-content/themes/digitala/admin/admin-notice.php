<?php

use ColibriWP\Theme\Core\Hooks;
use ColibriWP\Theme\Core\Utils;
use ColibriWP\Theme\Defaults;
use ColibriWP\Theme\Translations;

$digitala_front_page_designs = array();
$digitala_slug        = "colibri-wp-page-info";
$default_front_page_designs =   array(

    array(
        'name'  => __( "Modern", 'digitala' ),
        "index" => 3,
        "meta"  => array(
            "slug"    => "modern",
            "version" => "v2"
        )
    ),

    array(
        'name'    => __( "Modern", 'digitala' ),
        "index"   => 3,
        "display" => false,
        "meta"    => array(
            "slug"    => "modern",
            "version" => "v1"
        )
    ),

    array(
        'name'  => __( "Classic", 'digitala' ),
        "index" => 2,
        "meta"  => array(
            "slug"    => "classic",
            "version" => "v1"
        )
    ),

    array(
        'name'  => __( "Fullscreen", 'digitala' ),
        "index" => 1,
        "meta"  => array(
            "slug"    => "fullscreen",
            "version" => "v1"
        )
    ),
);

foreach ( $default_front_page_designs as $design ) {
    if ( Utils::pathGet( $design, 'display', true ) ) {
        if ( Utils::pathGet( $design, 'meta.slug' ) === 'modern' ) {
            $digitala_front_page_design = $design;
            break;
        }

    }
}

$colibri_get_started = array(
    'plugin_installed_and_active' => Translations::escHtml( 'plugin_installed_and_active' ),
    'activate'                    => Translations::escHtml( 'activate' ),
    'activating'                  => __( 'Activating', 'digitala' ),
    'install_recommended'         => isset( $_GET['install_recommended'] ) ? $_GET['install_recommended'] : ''
);

wp_localize_script( $digitala_slug, 'colibri_get_started', $colibri_get_started );

?>
<style>
    .digitala-admin-big-notice--container .action-buttons,
    .digitala-admin-big-notice--container .content-holder {
        display: flex;
        align-items: center;
    }


    .digitala-admin-big-notice--container .front-page-preview {
        max-width: 362px;
        margin-right: 40px;
    }

    .digitala-admin-big-notice--container .front-page-preview img {
        max-width: 100%;
        border: 1px solid #ccd0d4;
    }

</style>
<div class="digitala-admin-big-notice--container">
    <div class="content-holder">

        <div class="front-page-preview">
            <?php $digitala_front_page_design_image = get_stylesheet_directory_uri() . "/screenshot.jpg"; ?>
            <img class="selected"
                 data-index="<?php echo esc_attr( $digitala_front_page_design['index'] ); ?>"
                 src="<?php echo esc_url( $digitala_front_page_design_image ); ?>"/>
        </div>
        <div class="messages-area">
            <div class="title-holder">
                <h1><?php esc_html_e( 'Would you like to install the pre-designed Digitala homepage?',
                        'digitala' ) ?></h1>
            </div>
            <div class="action-buttons">
                <button class="button button-primary button-hero start-with-predefined-design-button">
                    <?php esc_html_e( 'Install the Digitala homepage', 'digitala' ); ?>
                </button>
                <span class="or-separator">&ensp;<?php \ColibriWP\Theme\Translations::escHtmlE( 'or' ); ?>&ensp;</span>
                <button class="button-link digitala-maybe-later dismiss">
                    <?php esc_html_e( 'Maybe Later', 'digitala' ); ?>
                </button>
            </div>
            <div class="content-footer ">
                <div>
                    <div class="plugin-notice">
                        <span class="spinner"></span>
                        <span class="message"></span>
                    </div>
                </div>
                <div>
                    <p class="description large-text">
                        <?php esc_html_e( 'This action will also install the Colibri Page Builder plugin.',
                            'digitala' ); ?>
                    </p>
                </div>
            </div>
        </div>

    </div>
    <?php
    $digitala_builder_slug = Hooks::prefixed_apply_filters( 'plugin_slug', 'colibri-page-builder' );

    wp_localize_script( $digitala_slug , 'digitala_builder_status', array(
        "status"         => digitala_theme()->getPluginsManager()->getPluginState( $digitala_builder_slug ),
        "install_url"    => digitala_theme()->getPluginsManager()->getInstallLink( $digitala_builder_slug ),
        "activate_url"   => digitala_theme()->getPluginsManager()->getActivationLink( $digitala_builder_slug ),
        "slug"           => $digitala_builder_slug,
        "view_demos_url" => add_query_arg(
            array(
                    'page'        => 'digitala-page-info',
                'current_tab' => 'demo-import'
            ),
            admin_url( 'themes.php' )
        ),
        'digitala_front_set_predesign_nonce' =>  wp_create_nonce( 'digitala_front_set_predesign_nonce' ),
        'digitala_disable_big_notice_nonce' => wp_create_nonce( 'digitala_disable_big_notice_nonce' ),
        'colibri_plugin_install_activate_nonce' => wp_create_nonce( 'colibri_plugin_install_activate_nonce' ),
        "messages"       => array(
            "installing" => \ColibriWP\Theme\Translations::get( 'installing',
                'Colibri Page Builder' ),
            "activating" => \ColibriWP\Theme\Translations::get( 'activating',
                'Colibri Page Builder' )
        ),
    ) );
    ?>
</div>

