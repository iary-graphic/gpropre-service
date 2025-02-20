<?php

/**
 * Title: Partners
 * Slug: dustless/partners
 * Categories: dustless-template
 */
$dustless_partner_url = get_template_directory_uri();
$dustless_partner_img = array(
    $dustless_partner_url . '/assets/images/chromatic.png',
    $dustless_partner_url . '/assets/images/butterfly.png',
    $dustless_partner_url . '/assets/images/light_finder.png',
    $dustless_partner_url . '/assets/images/music_house.png',
    $dustless_partner_url . '/assets/images/soundown.png'
)
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"secondary","className":"dustless-partner-img","layout":{"type":"constrained","contentSize":"1180px"}} -->
<main class="wp-block-group dustless-partner-img has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center"} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:image {"id":2131,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
            <figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($dustless_partner_img[0]) ?>" alt="" class="wp-image-2131" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:image {"id":2132,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
            <figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($dustless_partner_img[1]) ?>" alt="" class="wp-image-2132" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:image {"id":2133,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
            <figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($dustless_partner_img[2]) ?>" alt="" class="wp-image-2133" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:image {"id":2134,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
            <figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($dustless_partner_img[3]) ?>" alt="" class="wp-image-2134" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:image {"id":2135,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
            <figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($dustless_partner_img[4]) ?>" alt="" class="wp-image-2135" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</main>
<!-- /wp:group -->