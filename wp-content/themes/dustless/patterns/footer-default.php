<?php

/**
 * Title: Footer Default
 * Slug: dustless/footer-default
 * Categories: dustless-footer,footer,dustless-template
 */
$dustless_footer_url = get_template_directory_uri();
$dustless_footer_img = array(
    $dustless_footer_url . '/assets/images/blue_waves.png'
)
?>
<!-- wp:group {"tagName":"footer","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"left":"0","right":"0","top":"100px","bottom":"0px"},"blockGap":"0"},"background":{"backgroundImage":{"url":"<?php echo esc_url($dustless_footer_img[0]) ?>","id":2590,"source":"file","title":"blue_waves"}}},"backgroundColor":"white","layout":{"type":"constrained","contentSize":"1180px"}} -->
<footer class="wp-block-group has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":{"top":"0","left":"var:preset|spacing|50"},"margin":{"top":"6rem","bottom":"0"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-top" style="margin-top:6rem;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"blockGap":"30px","padding":{"top":"0","bottom":"0"}}}} -->
        <div class="wp-block-column is-vertically-aligned-top" style="padding-top:0;padding-bottom:0;flex-basis:25%"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontFamily":"sarabun"} -->
            <h2 class="wp-block-heading has-white-color has-text-color has-link-color has-sarabun-font-family"><?php esc_html_e('Dustless', 'dustless') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontFamily":"public-sans"} -->
            <p class="has-white-color has-text-color has-link-color has-public-sans-font-family"><?php esc_html_e('Home services is a broad term that encompasses various services related to the maintenance, improvement, and well-being of a household.', 'dustless') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","size":"has-small-icon-size","style":{"spacing":{"margin":{"right":"0","left":"0","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"is-style-logos-only","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
            <ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--40);margin-right:0;margin-bottom:var(--wp--preset--spacing--40);margin-left:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                <!-- wp:social-link {"url":"#","service":"x"} /-->

                <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                <!-- wp:social-link {"url":"#","service":"youtube"} /-->

                <!-- wp:social-link {"url":"#","service":"telegram"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top","width":"50%","style":{"spacing":{"blockGap":"0"}}} -->
        <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"30px"}}} -->
                <div class="wp-block-column"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontFamily":"sarabun"} -->
                    <h2 class="wp-block-heading has-white-color has-text-color has-link-color has-sarabun-font-family"><?php esc_html_e('Quick Links', 'dustless') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:navigation {"textColor":"white","overlayMenu":"never","layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap","orientation":"vertical"},"fontFamily":"public-sans"} -->
                    <!-- wp:page-list /-->
                    <!-- /wp:navigation -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"style":{"spacing":{"blockGap":"30px"}},"className":"dustless-text-decoration-none","fontFamily":"public-sans"} -->
                <div class="wp-block-column dustless-text-decoration-none has-public-sans-font-family"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontFamily":"sarabun"} -->
                    <h2 class="wp-block-heading has-white-color has-text-color has-link-color has-sarabun-font-family"><?php esc_html_e('Features', 'dustless') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:list {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","className":"dustless-list-style-none dustless-footer-categories"} -->
                    <ul class="dustless-list-style-none dustless-footer-categories has-white-color has-text-color has-link-color"><!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Online estimation', 'dustless') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Work Monitoring', 'dustless') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Professional Team', 'dustless') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Project Discount', 'dustless') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Cleaning & Care', 'dustless') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('License', 'dustless') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"blockGap":"30px","padding":{"top":"0","bottom":"0"}}}} -->
        <div class="wp-block-column is-vertically-aligned-top" style="padding-top:0;padding-bottom:0;flex-basis:25%"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0"}}},"textColor":"white","fontFamily":"sarabun"} -->
            <h2 class="wp-block-heading has-white-color has-text-color has-link-color has-sarabun-font-family" style="margin-top:var(--wp--preset--spacing--0);margin-bottom:var(--wp--preset--spacing--0)"><?php esc_html_e('Newsletter', 'dustless') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"textColor":"white","fontFamily":"public-sans"} -->
            <p class="has-white-color has-text-color has-link-color has-public-sans-font-family" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><?php esc_html_e('Lorem ipsum dolor sit amet, consec tetur adipiscing elit', 'dustless') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:contact-form-7/contact-form-selector {"id":50,"hash":"754b4b8","title":"Newsletter Mail Subscription","className":"dustless-footer-input"} -->
            <div class="wp-block-contact-form-7-contact-form-selector dustless-footer-input">[contact-form-7 id="754b4b8" title="Newsletter Mail Subscription"]</div>
            <!-- /wp:contact-form-7/contact-form-selector -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</footer>
<!-- /wp:group -->