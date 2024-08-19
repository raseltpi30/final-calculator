<?php 
//Template Name: Integrations Page Template
get_header();
$options = get_option('coderit');
?>
    <!-- Start Banner Area -->
    <section class="about-banner-area banner-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="banner section-title">
              <h1><?php the_field('integrations_title') ?></h1>
              <p><?php the_field('integrations_description') ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Banner Area -->
  <!-- Start Integration Area -->
  <section class="integration-area section-padding">
    <div class="container">
      <div class="row">
        <?php 
        $integrations = new WP_Query(array(
          'post_type' => 'integrations',
          'posts_per_page' => -1,
          'order' => 'ASC'
        ));
        while($integrations->have_posts()) : $integrations->the_post();  
        ?>
        <div class="col-lg-4">
          <a href="<?php the_permalink(); ?>">
            <div class="single-integration">
              <div class="integration-top">
                <div class="integration-icon facebook">
                  <i style="background:<?php the_field('integrations_icon_bg');?>" class="<?php the_field('integrations_item_icon'); ?>"></i>
                </div>
                <div class="integration-top-content">
                  <h4><?php the_field('integrations_item_name'); ?></h4>
                  <p><?php the_field('integrations_item_sub_title'); ?></p>
                </div>
              </div>
              <div class="integration-content">
                <p><?php the_field('integrations_short_description'); ?></p>
              </div>
              <div class="integration-btn feature-btn">
                <a href="<?php the_permalink(); ?>"><?php the_field('integrations_button_text'); ?></a>
              </div>
            </div>
          </a>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div> 
    </div>
  </section>
  <!-- End Integration Area -->
  <!-- Start Department Area -->
  <section class="department-area section-padding">
    <div class="container">
      <div class="row all-department align-items-center">
        <div class="col-md-6">
        <div class="department-content">            
            <h2><?php echo $options['trial-heading'] ?></h2>
            <p><?php echo $options['trial-description'] ?></p>
            <?php 
            $trial_form = $options['trial-form-shortcode'];        
            ?> 
            <?php if($trial_form = ' ') : ?>
            <div class="department-btn">
              <input type="text" class="btn-1" placeholder="your mail here...">
              <a href="#" class="btn-1">Get Started</a>
            </div>
            <?php else: ?>
              <?php do_shortcode($trial_form); ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="department-img"">
            <img src="<?php echo $options['trial-image']['url'] ?>" alt="Department">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Department Area -->
 <?php get_footer(); ?>