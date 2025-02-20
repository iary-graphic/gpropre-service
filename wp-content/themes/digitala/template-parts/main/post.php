<div data-colibri-id="1842-m1" class="style-64 style-local-1842-m1 h-overflow-hidden position-relative">
  <div data-colibri-component="section" data-colibri-id="1842-m2" id="blog-post" class="h-section h-section-global-spacing d-flex align-items-lg-center align-items-md-center align-items-center style-65 style-local-1842-m2 position-relative">
    <div class="h-section-grid-container h-section-boxed-container">
      <div data-colibri-id="1842-m3" class="h-row-container gutters-row-lg-0 gutters-row-md-0 gutters-row-0 gutters-row-v-lg-0 gutters-row-v-md-0 gutters-row-v-0 colibri-dynamic-list colibri-single-post-loop style-70 style-local-1842-m3 position-relative">
        <div class="h-row justify-content-lg-center justify-content-md-center justify-content-center align-items-lg-stretch align-items-md-stretch align-items-stretch gutters-col-lg-0 gutters-col-md-0 gutters-col-0 gutters-col-v-lg-0 gutters-col-v-md-0 gutters-col-v-0">
          <?php digitala_theme()->get('post-loop')->render(); ?>
        </div>
      </div>
    </div>
  </div>
  <div data-colibri-component="section" data-colibri-id="1842-m26" id="comments" class="h-section h-section-global-spacing d-flex align-items-lg-center align-items-md-center align-items-center style-92 style-local-1842-m26 position-relative">
    <div class="h-section-grid-container h-section-boxed-container">
      <div data-colibri-id="1842-m27" class="h-row-container gutters-row-lg-0 gutters-row-md-0 gutters-row-0 gutters-row-v-lg-0 gutters-row-v-md-0 gutters-row-v-0 style-97 style-local-1842-m27 position-relative">
        <div class="h-row justify-content-lg-center justify-content-md-center justify-content-center align-items-lg-stretch align-items-md-stretch align-items-stretch gutters-col-lg-0 gutters-col-md-0 gutters-col-0 gutters-col-v-lg-0 gutters-col-v-md-0 gutters-col-v-0">
          <div class="h-column h-column-container d-flex h-col-lg-auto h-col-md-auto h-col-auto style-98-outer style-local-1842-m28-outer">
            <div data-colibri-id="1842-m28" class="d-flex h-flex-basis h-column__inner h-px-lg-2 h-px-md-2 h-px-2 v-inner-lg-3 v-inner-md-3 v-inner-3 style-98 style-local-1842-m28 position-relative">
              <div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
                <div data-colibri-id="1842-m29" class="style-99 style-local-1842-m29 position-relative">
                  <div class="h-global-transition-all blog-post-comments">
                    <?php digitala_post_comments(array (
                      'none' => __('No responses yet', 'digitala'),
                      'one' => __('One response', 'digitala'),
                      'multiple' => __('{COMMENTS-COUNT} Responses', 'digitala'),
                      'disabled' => 'Comments are closed',
                      'avatar_size' => 30,
                    )); ?>
                  </div>
                </div>
                <div data-colibri-id="1842-m30" class="position-relative">
                  <div class="h-global-transition-all">
                    <?php digitala_post_comment_form(); ?>
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
