<div class="h-column h-column-container d-flex h-col-lg-12 h-col-md-12 h-col-12  masonry-item style-71-outer style-local-1842-m4-outer">
  <div data-colibri-id="1842-m4" class="d-flex h-flex-basis h-column__inner h-px-lg-0 h-px-md-0 h-px-0 v-inner-lg-0 v-inner-md-0 v-inner-0 style-71 style-local-1842-m4 position-relative">
    <div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
      <div data-colibri-id="1842-m5" class="h-row-container gutters-row-lg-0 gutters-row-md-0 gutters-row-0 gutters-row-v-lg-0 gutters-row-v-md-0 gutters-row-v-0 style-73 style-local-1842-m5 position-relative">
        <div class="h-row justify-content-lg-center justify-content-md-center justify-content-center align-items-lg-stretch align-items-md-stretch align-items-stretch gutters-col-lg-0 gutters-col-md-0 gutters-col-0 gutters-col-v-lg-0 gutters-col-v-md-0 gutters-col-v-0">
          <div class="h-column h-column-container d-flex h-col-lg-auto h-col-md-auto h-col-auto style-74-outer style-local-1842-m6-outer">
            <div data-colibri-id="1842-m6" class="d-flex h-flex-basis h-column__inner h-px-lg-2 h-px-md-2 h-px-2 v-inner-lg-0 v-inner-md-0 v-inner-0 style-74 style-local-1842-m6 position-relative">
              <div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
                <div data-colibri-id="1842-m7" class="colibri-post-thumbnail <?php digitala_post_thumbnail_classes(); ?> <?php digitala_post_thumb_placeholder_classes(); ?> style-369 style-local-1842-m7 h-overflow-hidden position-relative h-element">
                  <div class="h-global-transition-all colibri-post-thumbnail-shortcode style-dynamic-1842-m7-height">
                    <?php digitala_post_thumbnail(array (
                      'link' => false,
                    )); ?>
                  </div>
                  <div class="colibri-post-thumbnail-content align-items-lg-center align-items-md-center align-items-center flex-basis-100">
                    <div class="w-100 h-y-container"></div>
                  </div>
                </div>
                <?php if ( \ColibriWP\Theme\Core\Hooks::prefixed_apply_filters( 'show_post_meta', true ) ): ?>
                <div data-colibri-id="1842-m8" class="h-blog-meta style-368 style-local-1842-m8 position-relative h-element">
                  <div name="1" class="metadata-item">
                    <span class="metadata-prefix">
                      <?php esc_html_e('by','digitala'); ?>
                    </span>
                    <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>">
                      <?php echo esc_html(get_the_author_meta( 'display_name', get_the_author_meta( 'ID' ) )); ?>
                    </a>
                  </div>
                  <div name="2" class="metadata-item">
                    <span class="metadata-prefix">
                      <?php esc_html_e('on','digitala'); ?>
                    </span>
                    <a href="<?php digitala_post_meta_date_url(); ?>">
                      <?php digitala_the_date('F j, Y'); ?>
                    </a>
                  </div>
                </div>
                <?php endif; ?>
                <div data-colibri-id="1842-m9" class="style-76 style-local-1842-m9 position-relative h-element">
                  <div class="colibri-post-content h-global-transition-all">
                    <?php the_content(); ?>
                  </div>
                </div>
                <div data-colibri-id="1842-m10" class="h-row-container gutters-row-lg-0 gutters-row-md-0 gutters-row-0 gutters-row-v-lg-3 gutters-row-v-md-3 gutters-row-v-3 style-359 style-local-1842-m10 position-relative">
                  <div class="h-row justify-content-lg-center justify-content-md-center justify-content-center align-items-lg-stretch align-items-md-stretch align-items-stretch gutters-col-lg-0 gutters-col-md-0 gutters-col-0 gutters-col-v-lg-3 gutters-col-v-md-3 gutters-col-v-3">
                    <div class="h-column h-column-container d-flex h-col-lg-auto h-col-md-auto h-col-auto style-360-outer style-local-1842-m11-outer">
                      <div data-colibri-id="1842-m11" class="d-flex h-flex-basis h-column__inner h-px-lg-0 h-px-md-0 h-px-0 v-inner-lg-0 v-inner-md-0 v-inner-0 style-360 style-local-1842-m11 position-relative">
                        <div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
                          <div data-colibri-id="1842-m12" class="h-global-transition-all h-heading style-362 style-local-1842-m12 position-relative h-element">
                            <div class="h-heading__outer style-362 style-local-1842-m12">
                              <h6>Categories</h6>
                            </div>
                          </div>
                          <div data-colibri-id="1842-m13" class="h-blog-categories style-363 style-local-1842-m13 position-relative h-element">
                            <div class="h-global-transition-all">
                              <?php digitala_post_categories(array (
                                'prefix' => '',
                              )); ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="h-column h-column-container d-flex h-col-lg-auto h-col-md-auto h-col-auto style-361-outer style-local-1842-m14-outer">
                      <div data-colibri-id="1842-m14" class="d-flex h-flex-basis h-column__inner h-px-lg-0 h-px-md-0 h-px-0 v-inner-lg-0 v-inner-md-0 v-inner-0 style-361 style-local-1842-m14 position-relative">
                        <div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
                          <div data-colibri-id="1842-m15" class="h-global-transition-all h-heading style-362 style-local-1842-m15 position-relative h-element">
                            <div class="h-heading__outer style-362 style-local-1842-m15">
                              <h6>tags</h6>
                            </div>
                          </div>
                          <div data-colibri-id="1842-m16" class="h-blog-tags empty-preview style-86 style-local-1842-m16 position-relative h-element">
                            <div class="h-global-transition-all">
                              <?php digitala_post_tags(array (
                                'prefix' => '',
                              )); ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php digitala_layout_wrapper(array (
        'name' => 'navigation_container',
        'slug' => 'navigation-container-1',
      )); ?>
    </div>
  </div>
</div>
