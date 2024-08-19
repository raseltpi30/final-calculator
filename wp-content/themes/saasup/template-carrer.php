<?php get_header();
//Template Name: Carrer Page Template
?>
  <!-- Start Banner Area -->
  <section class="about-banner-area banner-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="banner section-title" data-aos="zoom-in">
            <h1><?php the_field('carrer_page_title') ?></h1>
            <p><?php the_field('carrer_page_description') ?></p>
            <div class="career-btn">
              <a href="#" class="btn-2">Browse Open Positions</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Banner Area -->
  <!-- End Career-img Area -->
  <section class="career-img-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="single-career-img">
            <img src="<?php the_field('carrers_left_image') ?>" alt="Career">
          </div>
        </div>
        <div class="col-md-6">
          <div class="single-career-img">
            <img src="<?php the_field('carrers_right_image') ?>" alt="Career">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Career-img Area -->
  <!-- Start Integration Area -->
  <section class="integration-area section-padding">
    <div class="container">
      <div class="career-heading">
        <div class="section-title">
          <p class="btn-p"><?php the_field('carrer_value_sub_title') ?></p>
          <h2><?php the_field('carrer_value_title') ?></h2>
        </div>
      </div>
      <div class="row my-5 justify-content-center">
        <?php if(have_rows('carrer_values_items')) : 
        while(have_rows('carrer_values_items')) :the_row(); 
        ?>
        <div class="col-md-6 col-lg-4">
          <div class="career-list">
            <div class="career-all-icon first">
              <img src="<?php the_sub_field('carrer_value_item_icon') ?>" alt="career">
            </div>
            <h4><?php the_sub_field('carrer_value_item_name') ?></h4>
            <p><?php the_sub_field('carrer_value_item_description') ?></p>
          </div>
        </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </section>
  <!-- End Integration Area -->
  <!-- Start job Area -->
  <section class="job-area section-padding">
    <div class="container">
      <div class="section-title">
        <h2><?php the_field('carrer_job_title'); ?></h2>
      </div>
      <div class="row">
        <?php 
        $carrer = new WP_Query(array(
          'post_type' => 'carrer',
          'post_per_page' => -1,
          'order' => 'ASC'
        ));
        while($carrer->have_posts()) : $carrer->the_post();
        ?>
        <div class="col-lg-6">
          <div class="about-career-content">
            <h4><?php the_field('carrer_title') ?></h4>
            <p class="usa"><?php the_field('carrer_location') ?>&nbsp; &nbsp; &nbsp;|&nbsp; &nbsp; &nbsp;<span><?php the_field('job_time') ?></span></p>
            <p class="description"><?php the_field('carrer_item_description') ?></p>
            <div class="career-btn career-btn-1">
              <a href="<?php the_permalink(); ?>" class="btn-2"><?php the_field('carrer_button_text') ?></a>
            </div>
          </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
  <!-- End job Area -->
  <?php get_footer(); ?>