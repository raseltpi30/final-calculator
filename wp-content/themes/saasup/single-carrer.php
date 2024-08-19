<?php get_header(); ?>
  <!-- Start Banner Area -->
  <main>
    <?php while(have_posts()) :the_post() ?>
    <section class="banner-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="banner section-title mb-0 about-career-content" data-aos="zoom-in">
              <h1><?php the_field('carrer_title'); ?></h1>
              <p class="usa"><?php the_field('carrer_location'); ?>&nbsp; &nbsp; &nbsp;|&nbsp; &nbsp; &nbsp;<span><?php the_field('job_time'); ?></span></p>
              <div class="web-btn">
                <a href="<?php the_field('carrer_button_url'); ?>" class="btn-1"><?php the_field('carrer_button_text'); ?></a>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Banner Area -->
    <!-- Start role Area -->
    <section class="role-area">
      <div class="container">
        <div class="row">
          <div class="single-role">
            <div class="role-heading">
              <h2>About the role</h2>
              <p>Posted : <?php the_time('F d,Y'); ?></p>
            </div>
            <div class="role-content">
            <?php the_field('carrer_details'); ?>
            </div>
            <div class="role-contact">
              <?php the_field('contact_details'); ?>
              <div class="role-btn">
                <a href="<?php the_field('carrer_button_url'); ?>" class="btn-3"><?php the_field('carrer_button_text'); ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endwhile; ?>
  </main>
  <!-- End role Area -->
  <?php get_footer(); ?>