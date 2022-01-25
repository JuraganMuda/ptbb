<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">

    <div class="content">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h1 class="entry-title textcenter">
        <?php the_title(); ?>
      </h1>
      <div class="flex_vert_pad"></div>
      <div class="flex_100">
        <div class="flex_10 push"></div>
        <div class="flex_80">
          <div class="post" id="post-<?php the_ID(); ?>">
            <div class="entry">
              <?php the_content(); ?>
              <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
            </div>
            <div class="postmetadata">
              <?php get_template_part( '/inc/meta' );?>
            </div>
          </div>
          <div id="comment-block">
            <?php comments_template(); ?>
          </div>
        </div>
        <?php endwhile; endif; ?>
      </div>
    </div>



    </div>  </div>  </div>
<?php get_footer(); ?>
