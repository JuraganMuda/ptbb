


<section id="main-container" class="main-container">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h2 class="section-title">Layanan Kami</h2>
          <h3 class="section-sub-title"><?php bloginfo('name'); ?></h3>
      </div>
    </div>
    <div class="row">

    <!--/ Title row end -->
    <div class="col-lg-4 col-md-6">
        <div class="ts-pricing-box">

              <?php
                $section = new WP_Query( 'page_id=33' );
                while ( $section->have_posts() ) : $section->the_post();?>
     
     <div class="ts-pricing-header">
            <h2 class="ts-pricing-price">
              <?php the_title(); ?>
            </h2>
          </div><!-- Pricing header -->
    
          <div class="ts-pricing-features">
            <ul class="list-unstyled">
              <li><?php the_content(); ?></li>
            </ul>
          </div><!-- Features end -->
                <?php endwhile; wp_reset_postdata();?>

        </div><!-- Plan 1 end -->
      </div><!-- Col end -->


      <div class="col-lg-4 col-md-6">
        <div class="ts-pricing-box">

              <?php
                $section = new WP_Query( 'page_id=36' );
                while ( $section->have_posts() ) : $section->the_post();?>
     
     <div class="ts-pricing-header">
            <h2 class="ts-pricing-price">
              <?php the_title(); ?>
            </h2>
          </div><!-- Pricing header -->
    
          <div class="ts-pricing-features">
            <ul class="list-unstyled">
              <li><?php the_content(); ?></li>
            </ul>
          </div><!-- Features end -->
                <?php endwhile; wp_reset_postdata();?>

        </div><!-- Plan 1 end -->
      </div><!-- Col end -->


      <div class="col-lg-4 col-md-6">
        <div class="ts-pricing-box">

              <?php
                $section = new WP_Query( 'page_id=38' );
                while ( $section->have_posts() ) : $section->the_post();?>
     
     <div class="ts-pricing-header">
            <h2 class="ts-pricing-price">
              <?php the_title(); ?>
            </h2>
          </div><!-- Pricing header -->
    
          <div class="ts-pricing-features">
            <ul class="list-unstyled">
              <li><?php the_content(); ?></li>
            </ul>
          </div><!-- Features end -->
                <?php endwhile; wp_reset_postdata();?>

        </div><!-- Plan 1 end -->
      </div><!-- Col end -->
      </div><!-- row end -->


  </div><!-- Conatiner end -->
</section><!-- Main container end -->


<style>
.ts-pricing-price center   h2 {
    text-align:center;
  }
  .ts-service-box-bg h4, .ts-service-box-bg h3 {
    color: #ccc;
}
  .ts-service-box-bg {
    background: none;
    color: #ccc;
}
.ts-pricing-box {
    text-align: left;
}
</style>