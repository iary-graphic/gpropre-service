<?php

/**
 *
 * Sets up theme defaults and registers support for various WordPress features.
 *
 */

if ( ! defined( 'DIGITALA_THEME_REQUIRED_PHP_VERSION' ) ) {
	define( 'DIGITALA_THEME_REQUIRED_PHP_VERSION', '5.6.0' );
}

add_action( 'after_switch_theme', 'digitala_check_php_version' );

function digitala_check_php_version() {
	// Compare versions.
	if ( version_compare( phpversion(), DIGITALA_THEME_REQUIRED_PHP_VERSION, '<' ) ) :
		// Theme not activated info message.
		add_action( 'admin_notices', 'digitala_php_version_notice' );

		// Switch back to previous theme.
		switch_theme( get_option( 'theme_switched' ) );

		return false;
	endif;
}

function digitala_php_version_notice() {
	?>
    <div class="notice notice-alt notice-error notice-large">
        <h4><?php esc_html_e( 'Digitala theme activation failed!', 'digitala' ); ?></h4>
        <p>
			<?php printf( esc_html__( 'You need to update your PHP version to use the %s.', 'digitala' ),
				' <strong>Digitala</strong>' ); ?>
            <br/>
			<?php printf( esc_html__( 'Current php version is: %1$s and the mininum required version is %2$s',
				'digitala' ),
				"<strong>" . esc_html(phpversion()) . "</strong>",
				"<strong>" . esc_html(DIGITALA_THEME_REQUIRED_PHP_VERSION) . "</strong>" );
			?>

        </p>
    </div>
	<?php
}

if ( version_compare( phpversion(), DIGITALA_THEME_REQUIRED_PHP_VERSION, '>=' ) ) {
	require_once get_template_directory() . "/inc/functions.php";
} else {
	add_action( 'admin_notices', 'digitala_php_version_notice' );
}

add_filter( 'body_class', function ($classes) {
	$classes[] = 'colibri-theme-' . get_stylesheet();
	return $classes;
});

