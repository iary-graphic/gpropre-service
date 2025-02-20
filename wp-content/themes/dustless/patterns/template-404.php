<?php

/**
 * Title: Template 404
 * Slug: dustless/template-404
 * Categories: dustless-template-404,dustless-template
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|60","margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"var:preset|color|terniary","width":"2px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-top-color:var(--wp--preset--color--terniary);border-top-width:2px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"18px"}},"textColor":"primary","fontFamily":"public-sans"} -->
    <h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-public-sans-font-family" style="font-size:18px"><?php esc_html_e('404', 'dustless') ?></h2>
    <!-- /wp:heading -->

    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"40px"}},"fontFamily":"sarabun"} -->
    <h2 class="wp-block-heading has-text-align-center has-sarabun-font-family" style="font-size:40px"><?php esc_html_e('Oops! Looks Like this Page Does Not Exist', 'dustless') ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|grey"}}},"typography":{"fontSize":"16px"}},"textColor":"grey","fontFamily":"public-sans"} -->
    <p class="has-text-align-center has-grey-color has-text-color has-link-color has-public-sans-font-family" style="font-size:16px"><?php esc_html_e('The URL you are searching for cannot be located, Please verify that the URL is correct.', 'dustless') ?></p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->