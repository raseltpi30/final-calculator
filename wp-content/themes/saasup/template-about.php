<?php 
//Template Name: About Page Template
get_header();
?>
  <!-- Start Banner  Area -->
  <section class="about-banner-area banner-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="banner section-title">
            <h1><?php the_field('about_title') ?></h1>
            <p><?php the_field('about_description') ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Banner Area -->

  <!-- start about img area -->
  <section class="about-img-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="about-img-right about-img-top">
            <img src="<?php the_field('about_left_image') ?>" alt="About Image" loading="lazy">
          </div>
        </div>
        <div class="col-md-4">
          <div class="about-img-right">
            <img src="<?php the_field('about_right_image') ?>" alt="About Image" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about img area -->
  <!-- start what area -->
  <section class="what-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="what-heading">
            <h2><?php the_field('what_we_title') ?></h2>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="what-content">
            <p><?php the_field('what_we_description') ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end what area -->
  <!-- start about-counter area -->
  <section class="about-counter-area">
    <div class="container counter-area">
      <div class="row">
        <?php if(have_rows('counter')) :
        while(have_rows('counter')) :the_row();  
        ?>
        <div class="col-lg-3 col-md-6">
          <div class="single-counter">
            <div class="counter-single">
              <h1><?php the_sub_field('counter_number') ?></h1>
              <span><?php the_sub_field('counter_heading') ?></span>
            </div> 
            <p><?php the_sub_field('counter_title') ?></p>
          </div>
        </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </section>
  <!-- end about-counter area -->
  <!-- start about-mission area -->
  <section class="mission-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="mission-content">
            <h2><?php the_field('mission_title') ?></h2>
            <p><?php the_field('mission_description') ?></p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="mission-img">
            <img src="<?php the_field('mission_image') ?>" alt="<?php the_field('mission_title') ?>">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about-mission area -->
  <!-- start about-values area -->
  <section class="values-area section-padding">
    <div class="container">
      <div class="row values-full-area">
        <div class="section-title">
          <p class="btn-p"><?php the_field('value_title') ?></p>
          <h2><?php the_field('value_sub_title') ?></h2>
        </div> 
        <?php 
        if(have_rows('values_items')) :
        while(have_rows('values_items')) : the_row();
        ?>
        <div class="col-lg-6">
          <div class="single-values">
            <div class="values-content">
              <div class="values-icon">
                <img src="<?php the_sub_field('values_item_image') ?>" alt="<?php the_sub_field('value_item_title') ?>" loading="lazy">
              </div>
              <div class="values-icon-content">
                <h4><?php the_sub_field('value_item_title') ?></h4>
                <p><?php the_sub_field('value_item_description') ?></p>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; endif; ?>
    </div> 
  </section>
  <!-- end about-values area -->
  <!-- start about-career area -->
  <section class="about-career-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-title">
            <p class="btn-p"><?php the_field('carrer_sub_title') ?></p>
            <h2><?php the_field('carrer_title') ?></h2>
          </div>
        </div>
        <div class="col-lg-7">
          <?php $carrer = new WP_Query(array(
            'post_type' => 'carrer',
          ));
          while($carrer->have_posts()) :$carrer->the_post();
          ?>
          <div class="about-career-content">
            <h4><?php the_title() ?></h4>
            <p class="usa"><?php the_field('carrer_location') ?>&nbsp; &nbsp; &nbsp;|&nbsp; &nbsp; &nbsp;<span><?php the_field('job_time') ?></span></p>
            <p class="description"><?php the_field('carrer_item_description') ?></p>
            <div class="career-btn career-btn-1">
              <a href="<?php the_permalink(); ?>" class="btn-2"><?php the_field('carrer_button_text') ?></a>
            </div>
          </div>
          <?php endwhile; wp_reset_postdata(); ?>
          <div class="about-career-content item-4">
            <h4><?php the_field('carrer_position') ?></h4>
            <p class="description"><?php the_field('carrer_position_description'); ?></p>
            <div class="career-btn career-btn-4">
              <a href="<?php the_field('carrer_poition_button_url') ?>" class="btn-2"><?php the_field('carrer_poition_button_text') ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about-career area -->
 <?php get_footer(); ?>