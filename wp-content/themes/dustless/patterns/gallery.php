<?php

/**
 * Title: Gallery
 * Slug: dustless/gallery
 * Categories: dustless-template
 */
$dustless_gallery_url = get_template_directory_uri();
$dustless_gallery_img = array(
    $dustless_gallery_url . '/assets/images/gallery-1.jpg',
    $dustless_gallery_url . '/assets/images/gallery-2.jpg',
    $dustless_gallery_url . '/assets/images/gallery-4.jpg',
    $dustless_gallery_url . '/assets/images/gallery-5.jpg',
    $dustless_gallery_url . '/assets/images/gallery-6.jpg',
    $dustless_gallery_url . '/assets/images/gallery-3.jpg'
);
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"},"padding":{"top":"80px","bottom":"80px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"white","layout":{"type":"constrained","wideSize":"782px","contentSize":"1180px"}} -->
<main class="wp-block-group has-white-background-color has-background" style="margin-bottom:var(--wp--preset--spacing--80);padding-top:80px;padding-right:var(--wp--preset--spacing--40);padding-bottom:80px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":{"left":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"15px"}}} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"16px"}},"textColor":"primary","fontFamily":"public-sans"} -->
            <p class="has-primary-color has-text-color has-link-color has-public-sans-font-family" style="font-size:16px"><?php esc_html_e('Projects & Gallery', 'dustless') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"style":{"typography":{"fontSize":"40px"}},"fontFamily":"sarabun"} -->
            <h2 class="wp-block-heading has-sarabun-font-family" style="font-size:40px"><?php esc_html_e('Our Featured Photos from Work', 'dustless') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|grey"}}},"typography":{"fontSize":"16px"}},"textColor":"grey","fontFamily":"public-sans"} -->
            <p class="has-grey-color has-text-color has-link-color has-public-sans-font-family" style="font-size:16px"><?php esc_html_e('Home services is a broad term that encompasses various services related to the maintenance, improvement, and well-being of a household. These services can be essential for homeowners to ensure the smooth functioning and comfort of their homes.', 'dustless') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","style":{"typography":{"textTransform":"capitalize","fontSize":"18px"}},"className":"is-style-button-hover-secondary","fontFamily":"public-sans"} -->
                <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary has-public-sans-font-family" style="font-size:18px;text-transform:capitalize"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button"><?php esc_html_e('Discover more', 'dustless') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"dustless-gallery-img"} -->
        <div class="wp-block-column dustless-gallery-img"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"bottom","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":2343,"width":"220px","height":"190px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($dustless_gallery_img[0])?>" alt="" class="wp-image-2343" style="border-radius:20px;object-fit:cover;width:220px;height:190px" /></figure>
                <!-- /wp:image -->

                <!-- wp:image {"id":2344,"width":"130px","aspectRatio":"1","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($dustless_gallery_img[1])?>" alt="" class="wp-image-2344" style="border-radius:20px;aspect-ratio:1;object-fit:contain;width:130px" /></figure>
                <!-- /wp:image -->

                <!-- wp:image {"id":2345,"width":"170px","height":"190px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($dustless_gallery_img[2])?>" alt="" class="wp-image-2345" style="border-radius:20px;object-fit:cover;width:170px;height:190px" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top","justifyContent":"center"}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:image {"id":2346,"width":"170px","height":"190px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($dustless_gallery_img[3])?>" alt="" class="wp-image-2346" style="border-radius:20px;object-fit:cover;width:170px;height:190px" /></figure>
                <!-- /wp:image -->

                <!-- wp:image {"id":2347,"width":"130px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($dustless_gallery_img[4])?>" alt="" class="wp-image-2347" style="border-radius:20px;aspect-ratio:1;object-fit:cover;width:130px" /></figure>
                <!-- /wp:image -->

                <!-- wp:image {"id":2348,"width":"220px","height":"190px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($dustless_gallery_img[5])?>" alt="" class="wp-image-2348" style="border-radius:20px;object-fit:cover;width:220px;height:190px" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</main>
<!-- /wp:group -->