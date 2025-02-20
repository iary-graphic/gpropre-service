<?php

/**
 * Title: Banner
 * Slug: dustless/banner
 * Categories: dustless-template
 */
$dustless_banner_url = get_template_directory_uri();
$dustless_banner_img = array(
    $dustless_banner_url . '/assets/images/banner.jpg'
)
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"white","layout":{"type":"constrained","contentSize":"1180px"}} -->
<main class="wp-block-group has-white-background-color has-background" style="padding-top:80px;padding-right:var(--wp--preset--spacing--40);padding-bottom:80px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:image {"id":2124,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($dustless_banner_img[0]) ?>" alt="" class="wp-image-2124" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"15px"}}} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"public-sans"} -->
            <p class="has-primary-color has-text-color has-link-color has-public-sans-font-family" style="font-size:18px;text-transform:uppercase"><?php esc_html_e('Our Company', 'dustless') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"style":{"typography":{"fontSize":"40px"}},"fontFamily":"sarabun"} -->
            <h2 class="wp-block-heading has-sarabun-font-family" style="font-size:40px"><?php esc_html_e('Shine Your Homes with Fota Cleaning.', 'dustless') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|grey"}}},"typography":{"fontSize":"16px"}},"textColor":"grey","fontFamily":"public-sans"} -->
            <p class="has-grey-color has-text-color has-link-color has-public-sans-font-family" style="font-size:16px"><?php esc_html_e('Home services is a broad term that encompasses various services related to the maintenance, improvement, and well-being of a household. These services can be essential for homeowners to ensure the smooth functioning and comfort of their homes.', 'dustless') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:list {"className":"dustless-custom-list-style"} -->
            <ul class="dustless-custom-list-style"><!-- wp:list-item {"style":{"typography":{"fontSize":"18px"}},"fontFamily":"public-sans"} -->
                <li style="font-size:18px" class="has-public-sans-font-family">These services can be essential.</li>
                <!-- /wp:list-item -->

                <!-- wp:list-item {"style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontFamily":"public-sans"} -->
                <li style="padding-right:0;padding-left:0;font-size:18px" class="has-public-sans-font-family">Ensure smooth functioning homes.</li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</main>
<!-- /wp:group -->