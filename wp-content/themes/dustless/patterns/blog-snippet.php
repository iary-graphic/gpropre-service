<?php

/**
 * Title: Blog Snippet
 * Slug: dustless/blog-snippet
 * Categories: dustless-template
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"80px","bottom":"80px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"terniary","layout":{"type":"constrained","wideSize":"100%","contentSize":"1180px"}} -->
<main class="wp-block-group has-terniary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:var(--wp--preset--spacing--40);padding-bottom:80px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"},"blockGap":"var:preset|spacing|60"}},"layout":{"inherit":false}} -->
    <div class="wp-block-group" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:group {"style":{"spacing":{"blockGap":"15px","margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"public-sans"} -->
            <p class="has-text-align-center has-primary-color has-text-color has-link-color has-public-sans-font-family" style="font-size:16px;text-transform:uppercase"><?php esc_html_e('Our Blog', 'dustless') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontSize":"40px"}},"textColor":"black","fontFamily":"sarabun"} -->
            <h2 class="wp-block-heading has-text-align-center has-black-color has-text-color has-link-color has-sarabun-font-family" style="font-size:40px"><?php esc_html_e('Discover Out Latest Blog', 'dustless') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
        <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:query {"queryId":78,"query":{"perPage":"2","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
                <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
                    <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","width":"100%","height":"261px","scale":"fill","className":"dustless-blog-feature-img"} /-->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|grey"}}}},"textColor":"grey","fontFamily":"public-sans"} /-->

                        <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","className":"dustless-text-decoration-none","fontFamily":"sarabun"} /-->

                        <!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":20,"style":{"elements":{"link":{"color":{"text":"var:preset|color|grey"}}}},"textColor":"grey","fontFamily":"public-sans"} /-->

                        <!-- wp:read-more {"content":"Learn More","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"public-sans"} /-->
                    </div>
                    <!-- /wp:group -->
                    <!-- /wp:post-template -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"blockGap":"0"}}} -->
            <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%"><!-- wp:query {"queryId":79,"query":{"perPage":"2","pages":0,"offset":2,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
                <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                    <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"125px","scale":"fill","align":"center","className":"dustless-blog-feature-img"} /-->

                    <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"textColor":"black","className":"dustless-text-decoration-none","fontFamily":"sarabun"} /-->
                    <!-- /wp:post-template -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->