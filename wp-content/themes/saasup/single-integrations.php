<?php get_header(); ?>
    <!-- Start Banner Area -->
    <?php while(have_posts()) : the_post(); ?>
    <section class="about-banner-area banner-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="banner section-title" data-aos="zoom-in">
              <div class="integration-top justify-content-center">
                <div class="integration-icon facebook">
                  <a href="#"><i  style="background:<?php the_field('integrations_icon_bg');?>" class="<?php the_field('integrations_item_icon') ?>"></i></a>
                </div>
                <div class="integration-top-content">
                  <h1><?php the_field('integrations_item_name') ?></h1>
                </div>
              </div>
              <p><?php the_field('integrations_short_description'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Banner Area -->
  <!-- Start Facebook Area -->
  <section class="facebook-content-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="single-facebook">
          <h2><?php the_field('integrations_item_description_title'); ?></h2>
            <?php the_field('integrations_full_description'); ?>
            <div class="facebook-content-btn">
              <a href="#" class="btn-2"><?php the_field('integrations_connect_button_text'); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endwhile; ?>
 <?php get_footer(); ?>