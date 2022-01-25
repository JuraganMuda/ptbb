<section id="ts-features" class="ts-features pb-2">
  <div class="container">
    <div class="row">
    <div class="col-lg-12">


    
    <div class="container">
    <div class="row text-center">
        <div class="col-lg-12">
        <h2 class="section-title">Mengenai Kami</h2>
          <h3 class="section-sub-title"><?php bloginfo('name'); ?></h3>
        </div>
        </div>
    </div>
              <div class="d-flex">
              <?php
                $section = new WP_Query( 'pagename=mengenai-kami' );
                while ( $section->have_posts() ) : $section->the_post();?>
                      <div class="ts-service-info">
                    <h3 class="service-box-title"><?php bloginfo('name'); ?></h3>
                    <p><?php the_excerpt(); ?></p>
                    <a class="learn-more d-inline-block" href="<?php the_permalink();?>" aria-label="service-details"><i class="fa fa-caret-right"></i>more</a>
                  </div>
                <?php endwhile;wp_reset_postdata();?>
              </div>

          </div> <!-- Service1 end -->
    
          </div> <!-- Col 1 end -->

        </div> <!-- Col 1 end -->


    </div> <!-- Content row end -->
  </div> <!-- Container end -->

  <div class="gap-60"></div>

<div class="container">
    <!--/ Title row end -->

    <div class="row">
      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fas fa-map-marker-alt mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Visit Our Office</h4>
            <p>9051 Constra Incorporate, USA</p>
          </div>
        </div>
      </div><!-- Col 1 end -->

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-envelope mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Email Us</h4>
            <p>office@Constra.com</p>
          </div>
        </div>
      </div><!-- Col 2 end -->

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-phone-square mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Call Us</h4>
            <p>(+9) 847-291-4353</p>
          </div>
        </div>
      </div><!-- Col 3 end -->

    </div><!-- 1st row end -->


    


  </div><!-- Conatiner end -->

  </section> <!-- Feature are end -->

