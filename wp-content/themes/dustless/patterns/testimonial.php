<?php

/**
 * Title: Testimonial
 * Slug: dustless/testimonial
 * Categories: dustless-template
 */
$dustless_testimonial_url = get_template_directory_uri();
$dustless_testimonial_img = array(
    $dustless_testimonial_url . '/assets/images/avatar.png'
)
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","wideSize":"100%","contentSize":"100%"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"30px","bottom":"30px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secondary","layout":{"type":"constrained","wideSize":"1180px","contentSize":"731px"}} -->
    <div class="wp-block-group has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:30px;padding-bottom:30px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","fontSize":"16px"},"spacing":{"margin":{"right":"0","left":"0","top":"100px","bottom":"var:preset|spacing|40"}}},"textColor":"primary","fontFamily":"public-sans"} -->
        <p class="has-text-align-center has-primary-color has-text-color has-link-color has-public-sans-font-family" style="margin-top:100px;margin-right:0;margin-bottom:var(--wp--preset--spacing--40);margin-left:0;font-size:16px;text-transform:uppercase"><?php esc_html_e('Testimonials', 'dustless') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"capitalize","fontSize":"40px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"bottom":"60px"}}},"textColor":"white","fontFamily":"sarabun"} -->
        <h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color has-sarabun-font-family" style="margin-bottom:60px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);font-size:40px;text-transform:capitalize"><?php esc_html_e('We care about our customer growth and Experience', 'dustless') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:spacer -->
        <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","style":{"border":{"radius":"10px"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"70px","bottom":"70px","left":"60px","right":"60px"},"blockGap":"25px"}},"backgroundColor":"white","className":"dustless-testimonial-offset-card","layout":{"type":"constrained","wideSize":"731px","contentSize":""}} -->
    <div class="wp-block-group alignwide dustless-testimonial-offset-card has-white-background-color has-background" style="border-radius:10px;margin-top:0;margin-bottom:0;padding-top:70px;padding-right:60px;padding-bottom:70px;padding-left:60px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"24px"}},"textColor":"primary"} -->
        <p class="has-text-align-center has-primary-color has-text-color has-link-color" style="font-size:24px"><?php esc_html_e('★★★★★', 'dustless') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|grey"}}},"typography":{"fontSize":"16px"}},"textColor":"grey","fontFamily":"public-sans"} -->
            <p class="has-text-align-center has-grey-color has-text-color has-link-color has-public-sans-font-family" style="font-size:16px"><?php esc_html_e('Our Header and Footer Builder for Elementor lets you design headers and footers that match your style. Customize them with menus, logos, social icons, and more to maintain a consistent look throughout your website.', 'dustless') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:columns {"isStackedOnMobile":false} -->
            <div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:image {"id":2629,"width":"80px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"right"} -->
                    <figure class="wp-block-image alignright size-full is-resized"><img src="<?php echo esc_url($dustless_testimonial_img[0]) ?>" alt="" class="wp-image-2629" style="aspect-ratio:1;object-fit:cover;width:80px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
                <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"fontFamily":"sarabun"} -->
                    <h2 class="wp-block-heading has-sarabun-font-family" style="font-size:22px"><?php esc_html_e('Kristina Lorel','dustless') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"14px"}},"textColor":"primary","fontFamily":"public-sans"} -->
                    <p class="has-primary-color has-text-color has-link-color has-public-sans-font-family" style="font-size:14px"><?php esc_html_e('UX/UI Designer', 'dustless') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->