<section id="main-container" class="main-container">
  <div class="container">

    <div class="row">
      <div class="col-lg-12">
      <div class="row text-center">
      <div class="col-lg-12">
        <h2 class="section-title"><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></h2>
          <h3 class="section-sub-title">
          <?php $catID = get_the_category();
echo category_description( $catID[0] ); ?>    
        </h3>
      </div>
    </div>
        <div class="accordion accordion-group accordion-classic" id="construction-accordion">
          
        
        <?php
                $section = new WP_Query( 'page_id=4' );
                while ( $section->have_posts() ) : $section->the_post();?>
     
        <div class="card">
            <div class="text-left card-header p-0 bg-transparent" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne"
                  aria-expanded="false" aria-controls="collapseOne">
                  <?php the_title(); ?>
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
              data-parent="#construction-accordion">
              <div class="card-body"><?php the_content(); ?>
              </div>
            </div>
          </div>
          <?php endwhile; wp_reset_postdata();?>

        </div>
        <!--/ Accordion end -->
        </div><!-- Col end -->



        <div class="gap-40"></div>
        <div class="col-lg-12">

        <h3 class="border-title border-left">Safety</h3>

        <div class="accordion accordion-group accordion-classic" id="safety-accordion">
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingFour">
              <h2 class="mb-0">
                <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour"
                  aria-expanded="true" aria-controls="collapseFour">
                  Mauris rhoncus pretium porttitor cras scelerisque commodo odio ?
                </button>
              </h2>
            </div>

            <div id="collapseFour" class="collapse show" aria-labelledby="headingFour"
              data-parent="#safety-accordion">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                moon officia aute, non cupidata
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingFive">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                  data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  What are the first aid requirements for sites?
                </button>
              </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#safety-accordion">
              <div class="card-body">
                Anemi nim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupid henderit in voluptate velit esse cillu oris nisi ut aliquip ex ea com
                matat.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingSix">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                  data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  What is an appointed person?
                </button>
              </h2>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
              data-parent="#safety-accordion">
              <div class="card-body">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.
              </div>
            </div>
          </div>
        </div>
        <!--/ Accordion end -->

      </div><!-- Col end -->

    

    </div><!-- Content row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->
<<style>
  .category-description p {
    margin: 30px 0;
    font: 300 38px 'Oxygen', Helvetica, sans-serif;
  }
  

.archive-meta {
            	zxc
            	margin: 0 auto;
            	max-width: 1040px;
            	padding: 30px 0;
            	width: 100%;
            	text-transform: none;
}
</style>
