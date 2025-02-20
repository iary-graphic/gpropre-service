<?php

/**
 * Title: Projects
 * Slug: dustless/projects
 * Categories: dustless-template
 */
$dustless_project_url = get_template_directory_uri();
$dustless_project_img = array(
    $dustless_project_url . '/assets/images/home.png',
    $dustless_project_url . '/assets/images/work.png',
    $dustless_project_url . '/assets/images/professional.png',
    $dustless_project_url . '/assets/images/project.png',
    $dustless_project_url . '/assets/images/care.png',
    $dustless_project_url . '/assets/images/bulb.png',
    $dustless_project_url . '/assets/images/bulb-icon.png',
    $dustless_project_url . '/assets/images/keyboard-icon.png',
    $dustless_project_url . '/assets/images/cleaning.jpg'
)
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"80px","bottom":"80px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"terniary","layout":{"type":"constrained","contentSize":"1180px"}} -->
<main class="wp-block-group has-terniary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:var(--wp--preset--spacing--20);padding-bottom:80px;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"terniary","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-terniary-background-color has-background" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"constrained","contentSize":""}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary","fontFamily":"public-sans"} -->
            <p class="has-text-align-center has-primary-color has-text-color has-link-color has-public-sans-font-family" style="text-transform:uppercase"><?php esc_html_e('Our Advantages', 'dustless') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"40px"}},"fontFamily":"sarabun"} -->
            <h2 class="wp-block-heading has-text-align-center has-sarabun-font-family" style="font-size:40px"><?php esc_html_e('Every Project is Different', 'dustless') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0","right":"0"},"blockGap":"var:preset|spacing|60","margin":{"bottom":"80px"}}},"className":"dustless-project-card-group","layout":{"type":"constrained"}} -->
        <div class="wp-block-group dustless-project-card-group" style="margin-bottom:80px;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"30px","left":"30px"}}}} -->
            <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"376px","metadata":{"name":""},"style":{"spacing":{"padding":{"top":"36px","bottom":"36px","left":"36px","right":"36px"},"blockGap":"30px"}},"backgroundColor":"white"} -->
                <div class="wp-block-column is-vertically-aligned-center has-white-background-color has-background" style="padding-top:36px;padding-right:36px;padding-bottom:36px;padding-left:36px;flex-basis:376px"><!-- wp:image {"id":2606,"width":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($dustless_project_img[0]) ?>" alt="" class="wp-image-2606" style="aspect-ratio:1;object-fit:cover;width:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"fontFamily":"sarabun"} -->
                        <h2 class="wp-block-heading has-sarabun-font-family" style="font-size:22px"><?php esc_html_e('Online Estimation', 'dustless') ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|grey"}}}},"textColor":"grey","fontFamily":"public-sans"} -->
                        <p class="has-grey-color has-text-color has-link-color has-public-sans-font-family" style="font-size:16px"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'dustless') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":"376px","style":{"spacing":{"padding":{"top":"36px","bottom":"36px","left":"36px","right":"36px"},"blockGap":"30px"}},"backgroundColor":"white"} -->
                <div class="wp-block-column is-vertically-aligned-center has-white-background-color has-background" style="padding-top:36px;padding-right:36px;padding-bottom:36px;padding-left:36px;flex-basis:376px"><!-- wp:image {"id":2605,"width":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($dustless_project_img[1]) ?>" alt="" class="wp-image-2605" style="aspect-ratio:1;object-fit:cover;width:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"fontFamily":"sarabun"} -->
                        <h2 class="wp-block-heading has-sarabun-font-family" style="font-size:22px"><?php esc_html_e('Work Monitoring', 'dustless') ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|grey"}}}},"textColor":"grey","fontFamily":"public-sans"} -->
                        <p class="has-grey-color has-text-color has-link-color has-public-sans-font-family" style="font-size:16px"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'dustless') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":"376px","style":{"spacing":{"padding":{"top":"36px","bottom":"36px","left":"36px","right":"36px"},"blockGap":"30px"}},"backgroundColor":"white"} -->
                <div class="wp-block-column is-vertically-aligned-center has-white-background-color has-background" style="padding-top:36px;padding-right:36px;padding-bottom:36px;padding-left:36px;flex-basis:376px"><!-- wp:image {"id":2607,"width":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($dustless_project_img[2]) ?>" alt="" class="wp-image-2607" style="aspect-ratio:1;object-fit:cover;width:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"fontFamily":"sarabun"} -->
                        <h2 class="wp-block-heading has-sarabun-font-family" style="font-size:22px"><?php esc_html_e('Professional Team', 'dustless') ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|grey"}}}},"textColor":"grey","fontFamily":"public-sans"} -->
                        <p class="has-grey-color has-text-color has-link-color has-public-sans-font-family" style="font-size:16px"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'dustless') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"30px","left":"30px"}}}} -->
            <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"376px","style":{"spacing":{"padding":{"top":"36px","bottom":"36px","left":"36px","right":"36px"},"blockGap":"30px"}},"backgroundColor":"white"} -->
                <div class="wp-block-column is-vertically-aligned-center has-white-background-color has-background" style="padding-top:36px;padding-right:36px;padding-bottom:36px;padding-left:36px;flex-basis:376px"><!-- wp:image {"id":2608,"width":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($dustless_project_img[3]) ?>" alt="" class="wp-image-2608" style="aspect-ratio:1;object-fit:cover;width:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"fontFamily":"sarabun"} -->
                        <h2 class="wp-block-heading has-sarabun-font-family" style="font-size:22px"><?php esc_html_e('Project Discount', 'dustless') ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|grey"}}}},"textColor":"grey","fontFamily":"public-sans"} -->
                        <p class="has-grey-color has-text-color has-link-color has-public-sans-font-family" style="font-size:16px"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'dustless') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":"376px","style":{"spacing":{"padding":{"top":"36px","bottom":"36px","left":"36px","right":"36px"},"blockGap":"30px"}},"backgroundColor":"white"} -->
                <div class="wp-block-column is-vertically-aligned-center has-white-background-color has-background" style="padding-top:36px;padding-right:36px;padding-bottom:36px;padding-left:36px;flex-basis:376px"><!-- wp:image {"id":2609,"width":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($dustless_project_img[4]) ?>" alt="" class="wp-image-2609" style="aspect-ratio:1;object-fit:cover;width:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"fontFamily":"sarabun"} -->
                        <h2 class="wp-block-heading has-sarabun-font-family" style="font-size:22px"><?php esc_html_e('Cleaning & Care', 'dustless') ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|grey"}}}},"textColor":"grey","fontFamily":"public-sans"} -->
                        <p class="has-grey-color has-text-color has-link-color has-public-sans-font-family" style="font-size:16px"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'dustless') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":"376px","style":{"spacing":{"padding":{"top":"36px","bottom":"36px","left":"36px","right":"36px"},"blockGap":"30px"}},"backgroundColor":"white"} -->
                <div class="wp-block-column is-vertically-aligned-center has-white-background-color has-background" style="padding-top:36px;padding-right:36px;padding-bottom:36px;padding-left:36px;flex-basis:376px"><!-- wp:image {"id":2610,"width":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($dustless_project_img[5]) ?>" alt="" class="wp-image-2610" style="aspect-ratio:1;object-fit:cover;width:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"fontFamily":"sarabun"} -->
                        <h2 class="wp-block-heading has-sarabun-font-family" style="font-size:22px"><?php esc_html_e('License & Insured', 'dustless') ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|grey"}}}},"textColor":"grey","fontFamily":"public-sans"} -->
                        <p class="has-grey-color has-text-color has-link-color has-public-sans-font-family" style="font-size:16px"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'dustless') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="border-radius:20px;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}},"backgroundColor":"white","className":"dustless-projects-column"} -->
        <div class="wp-block-columns dustless-projects-column has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"top":"50px","bottom":"50px","left":"50px","right":"30px"},"blockGap":"20px"}}} -->
            <div class="wp-block-column is-vertically-aligned-center" style="padding-top:50px;padding-right:30px;padding-bottom:50px;padding-left:50px;flex-basis:50%"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"30px"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontFamily":"sarabun"} -->
                <h2 class="wp-block-heading has-text-align-left has-sarabun-font-family" style="padding-right:0;padding-left:0;font-size:30px">Find Standard Cleaning with Personal Touch</h2>
                <!-- /wp:heading -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":2632,"width":"70px","height":"70px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($dustless_project_img[6]) ?>" alt="" class="wp-image-2632" style="object-fit:contain;width:70px;height:70px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"fontFamily":"sarabun"} -->
                        <h2 class="wp-block-heading has-sarabun-font-family" style="font-size:22px"><?php esc_html_e('Brightening The Home From Every Aspect', 'dustless') ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|grey"}}}},"textColor":"grey","fontFamily":"public-sans"} -->
                        <p class="has-grey-color has-text-color has-link-color has-public-sans-font-family"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services.', 'dustless') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"15px","padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"center"}} -->
                <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":2633,"width":"70px","height":"69px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($dustless_project_img[7]) ?>" alt="" class="wp-image-2633" style="object-fit:contain;width:70px;height:69px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"fontFamily":"sarabun"} -->
                        <h2 class="wp-block-heading has-sarabun-font-family" style="font-size:22px"><?php esc_html_e('Reliable Pricing for Cleaning', 'dustless') ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|grey"}}}},"textColor":"grey","fontFamily":"public-sans"} -->
                        <p class="has-grey-color has-text-color has-link-color has-public-sans-font-family"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services.', 'dustless') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"50%"} -->
            <div class="wp-block-column" style="flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url($dustless_project_img[8]) ?>","id":3594,"dimRatio":50,"overlayColor":"pale-cyan-blue","isUserOverlayColor":true,"isDark":false,"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-pale-cyan-blue-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3594" alt="" src="<?php echo esc_url($dustless_project_img[8]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"></div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->