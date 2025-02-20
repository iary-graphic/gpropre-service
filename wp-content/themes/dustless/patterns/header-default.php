<?php

/**
 * Title: Header Default
 * Slug: dustless/header-default
 * Categories: dustless-header,header,dustless-template
 */
?>
<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"white","layout":{"type":"constrained","wideSize":"1180px"}} -->
<header class="wp-block-group has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"18px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);font-size:18px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
            <!-- wp:site-logo {"width":42,"shouldSyncIcon":true} /-->
            <!-- wp:site-title {"style":{"typography":{"fontSize":"30px"}},"textColor":"secondary","className":"dustless-text-decoration-none is-style-title-hover-primary","fontFamily":"sarabun"} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"constrained","wideSize":"1180px"}} -->
        <div class="wp-block-group"><!-- wp:navigation {"textColor":"secondary","overlayBackgroundColor":"background-alt","overlayTextColor":"sub-heading-color","className":"is-style-link-hover-primary","layout":{"type":"flex","justifyContent":"left"},"style":{"typography":{"fontSize":"18px"}},"fontFamily":"public-sans"} -->
            <!-- wp:page-list /-->
            <!-- /wp:navigation -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"typography":{"fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"className":"is-style-button-hover-secondary","fontFamily":"public-sans"} -->
                <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary has-public-sans-font-family" style="font-size:18px"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-link-color wp-element-button"><?php esc_html_e('Request Quote', 'dustless') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</header>
<!-- /wp:group -->