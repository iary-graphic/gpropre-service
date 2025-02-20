<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package dustless
 * @since 1.0.0
 */

if (function_exists('register_block_style')) {
    /**
     * Register block styles.
     *
     * @since 0.1
     *
     * @return void
     */
    function dustless_register_block_styles()
    {
        register_block_style(
            'core/button',
            array(
                'name' => 'button-hover-primary',
                'label' => 'Hover : Primary', 'dustless',
            )
        );
        register_block_style(
            'core/button',
            array(
                'name' => 'button-hover-secondary',
                'label' => 'Hover : Secondary', 'dustless'
            )
        );
        register_block_style(
            'core/button',
            array(
                'name' => 'button-hover-terniary',
                'label' => 'Hover : Terniary', 'dustless'
            )
        );
        register_block_style(
            'core/navigation',
            array(
                'name' => 'link-hover-primary',
                'label' => 'Hover : Primary', 'dustless'
            )
        );
        register_block_style(
            'core/navigation',
            array(
                'name' => 'link-hover-secondary',
                'label' => 'Hover : Secondary', 'dustless'
            )
        );
        register_block_style(
            'core/navigation',
            array(
                'name' => 'link-hover-terniary',
                'label' => 'Hover : Terniary', 'dustless'
            )
        );
        register_block_style(
            'core/site-title',
            array(
                'name' => 'title-hover-terniary',
                'label' => 'Hover : Terniary', 'dustless'
            )
        );
        register_block_style(
            'core/site-title',
            array(
                'name' => 'title-hover-primary',
                'label' => 'Hover : Primary', 'dustless'
            )
        );
        register_block_style(
            'core/site-title',
            array(
                'name' => 'title-hover-secondary',
                'label' => 'Hover : Secondary', 'dustless'
            )
        );
        register_block_style(
            'core/site-title',
            array(
                'name' => 'title-hover-terniary',
                'label' => 'Hover : Terniary', 'dustless'
            )
        );
    }
    add_action('init', 'dustless_register_block_styles');
};
