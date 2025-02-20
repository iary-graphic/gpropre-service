<?php

/**
 * Title: Team
 * Slug: dustless/team
 * Categories: dustless-template
 */
$dustless_team_url = get_template_directory_uri();
$dustless_team_img = array(
    $dustless_team_url . '/assets/images/avatar-4.jpg',
    $dustless_team_url . '/assets/images/avatar-3.jpg',
    $dustless_team_url . '/assets/images/avatar-2.jpg',
    $dustless_team_url . '/assets/images/avatar-1.jpg',
)
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"80px","bottom":"80px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"0"}},"backgroundColor":"white","layout":{"type":"constrained","wideSize":"1180px","contentSize":""}} -->
<main class="wp-block-group has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:var(--wp--preset--spacing--40);padding-bottom:80px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|40"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|80"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"15px"}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary","fontFamily":"public-sans"} -->
            <p class="has-primary-color has-text-color has-link-color has-public-sans-font-family" style="text-transform:uppercase"><?php esc_html_e('Team & Workers', 'dustless') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"40px"}},"fontFamily":"sarabun"} -->
            <h2 class="wp-block-heading has-text-align-left has-sarabun-font-family" style="font-size:40px"><?php esc_html_e('Our Professional Team', 'dustless') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|grey"}}},"typography":{"fontSize":"16px"}},"textColor":"grey","fontFamily":"public-sans"} -->
            <p class="has-grey-color has-text-color has-link-color has-public-sans-font-family" style="font-size:16px"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'dustless') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":""} -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($dustless_team_img[0]) ?>","id":2318,"dimRatio":50,"overlayColor":"secondary","isUserOverlayColor":true,"focalPoint":{"x":0.83,"y":0.36},"minHeight":314,"contentPosition":"bottom center","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"layout":{"selfStretch":"fill","flexSize":null},"border":{"radius":"10px"}},"className":"dustless-team-cover"} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center dustless-team-cover" style="border-radius:10px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);min-height:314px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2318" alt="" src="<?php echo esc_url($dustless_team_img[0]) ?>" style="object-position:83% 36%" data-object-fit="cover" data-object-position="83% 36%" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"dustless-team-cover-text","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group dustless-team-cover-text"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"22px"}},"textColor":"white","fontFamily":"sarabun"} -->
                        <h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color has-sarabun-font-family" style="font-size:22px"><?php esc_html_e('Jenny Doe', 'dustless') ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"public-sans"} -->
                        <p class="has-text-align-center has-primary-color has-text-color has-link-color has-public-sans-font-family" style="font-size:16px"><?php esc_html_e('Receptionist', 'dustless') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($dustless_team_img[1]) ?>","id":2319,"dimRatio":50,"overlayColor":"secondary","isUserOverlayColor":true,"focalPoint":{"x":0.15,"y":0.3},"minHeight":314,"contentPosition":"bottom center","style":{"layout":{"selfStretch":"fill","flexSize":null},"border":{"radius":"10px"}},"className":"dustless-team-cover"} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center dustless-team-cover" style="border-radius:10px;min-height:314px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2319" alt="" src="<?php echo esc_url($dustless_team_img[1]) ?>" style="object-position:15% 30%" data-object-fit="cover" data-object-position="15% 30%" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"dustless-team-cover-text","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group dustless-team-cover-text"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"22px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontFamily":"sarabun"} -->
                        <h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color has-sarabun-font-family" style="font-size:22px"><?php esc_html_e('John Doe', 'dustless') ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"16px"}},"textColor":"primary","fontFamily":"public-sans"} -->
                        <p class="has-text-align-center has-primary-color has-text-color has-link-color has-public-sans-font-family" style="font-size:16px"><?php esc_html_e('HR(Human Resource)', 'dustless') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($dustless_team_img[2]) ?>","id":2320,"dimRatio":50,"overlayColor":"secondary","isUserOverlayColor":true,"focalPoint":{"x":0.39,"y":0.36},"minHeight":314,"contentPosition":"bottom center","style":{"layout":{"selfStretch":"fill","flexSize":null},"border":{"radius":"10px"}},"className":"dustless-team-cover"} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center dustless-team-cover" style="border-radius:10px;min-height:314px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2320" alt="" src="<?php echo esc_url($dustless_team_img[2]) ?>" style="object-position:39% 36%" data-object-fit="cover" data-object-position="39% 36%" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"dustless-team-cover-text","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group dustless-team-cover-text"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"22px"}},"fontFamily":"sarabun"} -->
                        <h2 class="wp-block-heading has-text-align-center has-sarabun-font-family" style="font-size:22px"><?php esc_html_e('Jane Doe', 'dustless') ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"public-sans"} -->
                        <p class="has-text-align-center has-primary-color has-text-color has-link-color has-public-sans-font-family" style="font-size:16px"><?php esc_html_e('Accountant', 'dustless') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($dustless_team_img[3]) ?>","id":2321,"dimRatio":50,"overlayColor":"secondary","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.5},"minHeight":314,"contentPosition":"bottom center","style":{"layout":{"selfStretch":"fill","flexSize":null},"border":{"radius":"10px"}},"className":"dustless-team-cover"} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center dustless-team-cover" style="border-radius:10px;min-height:314px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2321" alt="" src="<?php echo esc_url($dustless_team_img[3]) ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"dustless-team-cover-text","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group dustless-team-cover-text"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontFamily":"sarabun"} -->
                        <h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color has-sarabun-font-family"><?php esc_html_e('Joe Doe', 'dustless') ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"public-sans"} -->
                        <p class="has-text-align-center has-primary-color has-text-color has-link-color has-public-sans-font-family" style="font-size:16px"><?php esc_html_e('CEO', 'dustless') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</main>
<!-- /wp:group -->