<?php
/**
 * Title: Sidebar
 * Slug: dustless/sidebar
 * Categories: dustless-sidebar,dustless-template
 */
?>
<!-- wp:group {"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background"><!-- wp:query {"queryId":15,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template -->
        <!-- wp:columns {"align":"wide"} -->
        <div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
            <div class="wp-block-column" style="flex-basis:50%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","width":"100%","height":"200px"} /--></div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"50%"} -->
            <div class="wp-block-column" style="flex-basis:50%"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontSize":"22px"}},"textColor":"black","className":"dustless-text-decoration-none","fontFamily":"sarabun"} /-->

                <!-- wp:post-excerpt {"moreText":"Learn  More","excerptLength":15,"style":{"elements":{"link":{"color":{"text":"var:preset|color|grey"}}},"typography":{"fontSize":"16px"}},"textColor":"grey","fontFamily":"public-sans"} /-->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->