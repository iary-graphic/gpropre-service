<div class="h-column h-column-container d-flex h-col-lg-12 h-col-md-12 h-col-12  masonry-item style-138-outer style-local-1851-m3-outer">
  <div data-colibri-id="1851-m3" class="d-flex h-flex-basis h-column__inner h-px-lg-3 h-px-md-3 h-px-3 v-inner-lg-3 v-inner-md-3 v-inner-3 style-138 style-local-1851-m3 position-relative">
    <div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
      <div data-colibri-id="1851-m4" class="h-row-container gutters-row-lg-0 gutters-row-md-0 gutters-row-0 gutters-row-v-lg-0 gutters-row-v-md-0 gutters-row-v-2 style-364 style-local-1851-m4 position-relative">
        <div class="h-row justify-content-lg-center justify-content-md-center justify-content-center align-items-lg-stretch align-items-md-stretch align-items-stretch gutters-col-lg-0 gutters-col-md-0 gutters-col-0 gutters-col-v-lg-0 gutters-col-v-md-0 gutters-col-v-2">
          <div class="h-column h-column-container d-flex h-col-lg-auto h-col-md-auto h-col-auto style-365-outer style-local-1851-m5-outer">
            <div data-colibri-id="1851-m5" class="d-flex h-flex-basis h-column__inner h-px-lg-0 h-px-md-0 h-px-0 v-inner-lg-0 v-inner-md-0 v-inner-0 style-365 style-local-1851-m5 position-relative">
              <div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
                <div data-colibri-id="1851-m6" class="h-blog-title style-142 style-local-1851-m6 position-relative h-element">
                  <div class="h-global-transition-all">
                    <?php digitala_post_title(array (
                      'heading_type' => 'h4',
                      'classes' => 'colibri-word-wrap',
                    )); ?>
                  </div>
                </div>
                <?php if ( \ColibriWP\Theme\Core\Hooks::prefixed_apply_filters( 'show_post_meta', true ) ): ?>
                <div data-colibri-id="1851-m7" class="h-blog-meta style-367 style-local-1851-m7 position-relative h-element">
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
                <div data-colibri-id="1851-m8" class="style-144 style-local-1851-m8 position-relative h-element">
                  <div class="h-global-transition-all">
                    <?php digitala_post_excerpt(array (
                      'max_length' => 20,
                    )); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="h-column h-column-container d-flex h-col-lg-auto h-col-md-auto h-col-auto style-366-outer style-local-1851-m9-outer">
            <div data-colibri-id="1851-m9" class="d-flex h-flex-basis h-column__inner h-px-lg-0 h-px-md-0 h-px-0 v-inner-lg-0 v-inner-md-0 v-inner-0 style-366 style-local-1851-m9 position-relative">
              <div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
                <div data-colibri-id="1851-m10" class="h-x-container style-145 style-local-1851-m10 position-relative h-element">
                  <div class="h-x-container-inner style-dynamic-1851-m10-group">
                    <span class="h-button__outer style-318-outer style-local-1851-m11-outer d-inline-flex h-element">
                      <a h-use-smooth-scroll="true" href="<?php the_permalink(); ?>" data-colibri-id="1851-m11" class="d-flex w-100 align-items-center h-button justify-content-lg-center justify-content-md-center justify-content-center style-318 style-local-1851-m11 position-relative">
                        <span>
                          <?php esc_html_e('read more','digitala'); ?>
                        </span>
                        <span class="h-svg-icon h-button__icon style-318-icon style-local-1851-m11-icon">
                          <!--Icon by Font Awesome (https://fontawesome.com)-->
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="caret-right" viewBox="0 0 720.451 1896.0833">
                            <path d="M576 896q0 26-19 45l-448 448q-19 19-45 19t-45-19-19-45V448q0-26 19-45t45-19 45 19l448 448q19 19 19 45z"></path>
                          </svg>
                        </span>
                      </a>
                    </span>
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
