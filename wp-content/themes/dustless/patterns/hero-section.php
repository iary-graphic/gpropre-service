<?php

/**
 * Title: Hero Section
 * Slug: dustless/hero-section
 * Categories: dustless-template
 */
$dustless_hero_url = trailingslashit(get_template_directory_uri());
$dustless_hero_img = array(
    $dustless_hero_url . '/assets/images/hero-section.jpg',
    $dustless_hero_url . '/assets/images/star.png'
)
?>
<!-- wp:group {"tagName":"main","metadata":{"name":""},"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"80px","bottom":"80px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"secondary","layout":{"type":"constrained","contentSize":"1180px"}} -->
<main class="wp-block-group has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:var(--wp--preset--spacing--40);padding-bottom:80px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"60px"}},"textColor":"white","fontFamily":"sarabun"} -->
            <h2 class="wp-block-heading has-white-color has-text-color has-link-color has-sarabun-font-family" style="font-size:60px"><?php esc_html_e('Professional Cleaning Solutions Services!', 'dustless') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontFamily":"public-sans"} -->
            <p class="has-white-color has-text-color has-link-color has-public-sans-font-family"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas that emphasize cleanliness,', 'dustless') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"left":"25px","right":"25px","top":"20px","bottom":"20px"}}},"className":"is-style-button-hover-terniary","fontFamily":"public-sans"} -->
                <div class="wp-block-button has-custom-font-size is-style-button-hover-terniary has-public-sans-font-family" style="font-size:18px"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="padding-top:20px;padding-right:25px;padding-bottom:20px;padding-left:25px"><?php esc_html_e('Find Best Services', 'dustless') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

            <!-- wp:group {"className":"dustless-banner-star-group","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group dustless-banner-star-group"><!-- wp:image {"id":2153,"sizeSlug":"full","linkDestination":"none","className":"dustless-banner-star-1"} -->
                <figure class="wp-block-image size-full dustless-banner-star-1"><img src="<?php echo esc_url($dustless_hero_img[1]) ?>" alt="" class="wp-image-2153" title="" /></figure>
                <!-- /wp:image -->

                <!-- wp:image {"id":2153,"sizeSlug":"full","linkDestination":"none","className":"dustless-banner-star-2"} -->
                <figure class="wp-block-image size-full dustless-banner-star-2"><img src="<?php echo esc_url($dustless_hero_img[1]) ?>" alt="" class="wp-image-2153" /></figure>
                <!-- /wp:image -->

                <!-- wp:image {"id":2153,"sizeSlug":"full","linkDestination":"none","className":"dustless-banner-star-3"} -->
                <figure class="wp-block-image size-full dustless-banner-star-3"><img src="<?php echo esc_url($dustless_hero_img[1]) ?>" alt="" class="wp-image-2153" /></figure>
                <!-- /wp:image -->

                <!-- wp:image {"id":2153,"sizeSlug":"full","linkDestination":"none","className":"dustless-banner-star-4"} -->
                <figure class="wp-block-image size-full dustless-banner-star-4"><img src="<?php echo esc_url($dustless_hero_img[1]) ?>" alt="" class="wp-image-2153" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"45%"} -->
        <div class="wp-block-column" style="flex-basis:45%"><!-- wp:image {"id":2473,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"dustless-banner-hero-img"} -->
            <figure class="wp-block-image size-full dustless-banner-hero-img"><img src="<?php echo esc_url($dustless_hero_img[0]) ?>" alt="" class="wp-image-2473" style="object-fit:cover" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</main>
<!-- /wp:group -->