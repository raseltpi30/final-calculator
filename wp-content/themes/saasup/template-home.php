<?php
// Template Name: Home Page Template 
get_header('home');
$options = get_option('coderit');
?>
<!-- Start Feature Area -->
<section class="featture-area section-padding">
  <div class="container">
    <div class="section-title">
      <p class="btn-p"><?php the_field('feature_sub_title'); ?></p>
      <h2><?php the_field('feature_title'); ?></h2>
    </div>
    <div class="row feature-content justify-content-center">
      <?php
      $features = new WP_Query(array(
        'post_type' => 'features',
        'order' => 'ASC',
      ));
      while ($features->have_posts()) : $features->the_post(); ?>
        <div class="col-md-6 col-lg-4">
          <a href="<?php the_permalink(); ?>">
            <div class="single-feature">
              <?php the_post_thumbnail(); ?>
              <h4><?php the_title() ?></h4>
              <p><?php the_content() ?></p>
              <div class="feature-btn">
                <a href="feature.html"><?php the_field('feature_btn_text') ?></a>
              </div>
            </div>
          </a>
        </div>
      <?php endwhile;
      wp_reset_postdata() ?>
    </div>
  </div>
</section>
<!-- End Feature Area -->
<!-- Start About Section  -->
<section class="about-area">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="about-left">
          <h2><?php the_field('cost_title'); ?></h2>
          <p><?php the_field('cost_description'); ?></p>

          <div class="cost-eff">
            <div class="cost-icon">
              <img src="<?php the_field('cost_short_image'); ?>" loading="lazy" alt="cost">
            </div>
            <div class="cost-text">
              <h4><?php the_field('cost_short_title'); ?></h4>
              <p><?php the_field('cost_short_description'); ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="about-right">
          <img src="<?php the_field('cost_image'); ?>" loading="lazy" alt="About">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End About Section  -->
<!-- Start Work Section  -->
<section class="work-area section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title">
          <p class="btn-p"><?php the_field('work_sub_title'); ?></p>
          <h2><?php the_field('work_title'); ?></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="work-smarter-tabs">
          <ul class="nav nav-pills" id="work-tab" role="tablist">
            <?php
            $i = 0;
            if (have_rows('work_repeater')) : ?>
              <?php while (have_rows('work_repeater')) : the_row(); ?>
                <li class="nav-item" role="presentation">
                  <button class="nav-link <?php if ($i == 0) {
                                            echo 'active';
                                          } ?>" id="account-tab" data-bs-toggle="pill" data-bs-target="#create-account-content-<?php echo $i; ?>" type="button" role="tab"><?php the_sub_field('work_item_title'); ?></button>
                </li>
            <?php $i++;
              endwhile;
            endif; ?>
          </ul>

          <div class="tab-content" id="work-tabContent">
            <?php
            $i = 0;
            if (have_rows('work_repeater')) :
              while (have_rows('work_repeater')) : the_row();

            ?>
                <div class="tab-pane fade <?php if ($i == 0) {
                                            echo 'show active';
                                          } ?>" id="create-account-content-<?php echo $i; ?>" role="tabpanel" tabindex="0">
                  <div class="tabs-content">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="work-left">
                          <div class="work-icon d-flex align-items-center">
                            <i class="<?php the_sub_field('work_item_icon'); ?>"></i>
                            <h4><?php the_sub_field('work_item_sub_title'); ?></h4>
                          </div>
                          <p><?php the_sub_field('work_item_description'); ?></p>
                          <a href="<?php the_sub_field('work_button_url'); ?>" class="btn-1"><?php the_sub_field('work_button_text'); ?></a>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <img src="<?php the_sub_field('work_image'); ?>" loading="lazy" alt="work">
                      </div>
                    </div>
                  </div>
                </div>
            <?php $i++;
              endwhile;
            endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Work Section  -->
<!-- Start Testimonial Area -->
<section class="testimonial-area section-padding">
  <div class="container">
    <div class="section-title" data-aos="fade-up" data-aos-duration="1000">
      <p class="btn-p"><?php the_field('testimonial_sub_title'); ?></p>
      <h2 class="text-white"><?php the_field('testimonial_sub_title'); ?></h2>
    </div>
    <div class="owl-carousel owl-theme" id="myCarousel">
      <?php if (have_rows('testimonial_repeater')) :
        while (have_rows('testimonial_repeater')) : the_row();
      ?>
          <div class="single-testimonial">
            <h2><?php the_sub_field('testimonial_quote') ?></h2>
            <p><?php the_sub_field('testimonial_description') ?></p>
            <img src="<?php the_sub_field('testimonial_image') ?>" alt="Testimonial" loading="lazy">
            <h4><?php the_sub_field('testimonial_person_name') ?></h4>
            <h5><?php the_sub_field('testimonial_person_designation') ?></h5>

            <div class="star">
              <?php $rating = get_sub_field('rating');
              ?>
              <?php
              if ($rating == 1) {
                echo '<i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>';
              } elseif ($rating == 2) {
                echo '<i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>';
              } elseif ($rating == 3) {
                echo '<i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>';
              } elseif ($rating == 4) {
                echo '<i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>';
              } elseif ($rating == 5) {
                echo '<i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>';
              } else {
                echo '<i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>';
              }
              ?>
            </div>
          </div>
      <?php endwhile;
      endif; ?>
    </div>
  </div>
</section>
<!-- End Testimonial Area -->
<!-- Start pricing Area -->
<section class="pricing-area section-padding">
  <div class="container">
    <div class="row pricing-all align-items-center">
      <div class="col-lg-4 col-md-12">
        <div class="single-pricing item-1" data-aos="fade-right" data-aos-duration="1000">
          <p class="btn-p"><?php the_field('pricing_sub_title'); ?></p>
          <h2><?php the_field('pricing_title'); ?></h2>
          <p><?php the_field('pricing_description'); ?></p>
          <h4><?php the_field('payment'); ?></h4>
          <ul>
            <?php if (have_rows('payment_methods')) :
              while (have_rows('payment_methods')) : the_row();
            ?>
                <li><img src="<?php the_sub_field('methods_image'); ?>"></li>
            <?php endwhile;
            endif; ?>
          </ul>
        </div>
      </div>
      <div class="col-lg-8 col-md-12">
        <div class="row">
          <?php
          $teams = new WP_Query(array(
            'post_type' => 'pricing',
            'posts_per_page' => '-1',
            'order' => 'ASC'
          ));
          while ($teams->have_posts()) : $teams->the_post();
          ?>
            <div class="col-md-6">
              <div class="single-pricing item-2 month" data-aos="fade-left" data-aos-duration="1000">
                <div class="pricing-headng basic">
                  <h3><?php the_field('package_name'); ?></h3>
                  <p class="btn-p"><?php the_field('package_badge') ?></p>
                </div>
                <div class="pricing-content">
                  <h3><?php the_field('price') ?> <span>/ <?php the_field('price_time') ?></span></h3>
                  <p class="bill"><?php the_field('yearly_price') ?></p>
                </div>
                <div class="pricing-list">
                  <ul>
                    <?php if (have_rows('pricing_items')) :
                      while (have_rows('pricing_items')) : the_row();
                    ?>
                        <li><?php the_sub_field('pricing_item') ?></li>
                    <?php endwhile;
                    endif; ?>
                  </ul>
                </div>
                <div class="pricing-btn basic">
                  <a href="<?php the_permalink(); ?>" class="btn-2"><?php the_field('pricing_btn_text') ?></a>
                </div>
              </div>
            </div>
          <?php endwhile;
          wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End pricing Area -->
<!-- Start Department Area -->
<section class="department-area section-padding">
  <div class="container">
    <div class="row all-department align-items-center">
      <div class="col-lg-6">
        <div class="department-content" data-aos="zoom-in-down" data-aos-duration="1000">
          <h2><?php echo $options['trial-heading'] ?></h2>
          <p><?php echo $options['trial-description'] ?></p>
          <?php
          $trial_form = $options['trial-form-shortcode'];
          ?>
          <?php if ($trial_form = ' ') : ?>
            <div class="department-btn">
              <input type="text" class="btn-1" placeholder="your mail here...">
              <a href="#" class="btn-1">Get Started</a>
            </div>
          <?php else: ?>
            <?php do_shortcode($trial_form); ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="department-img" data-aos="zoom-in" data-aos-duration="1000">
          <img src="<?php echo $options['trial-image']['url'] ?>" alt="Department">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Department Area -->
<!-- Start Blog Area -->
<section class="blog-area section-padding">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <p class="btn-p"><?php the_field('blog_sub_title'); ?></p>
          <h2><?php the_field('blog_title'); ?></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
      $blog = new WP_Query(array(
        'post_type' => 'post',
      ));
      while ($blog->have_posts()) : $blog->the_post();

      ?>
        <div class="col-lg-6">
          <div class="single-blog">
            <a href="<?php the_permalink(); ?>">
              <div class="blog-content">
                <div class="blog-img">
                  <?php the_post_thumbnail(); ?><h2><?php echo get_field('feature_title');  ?></h2>
                  <div class="work-overly">
                    <?php $categories = get_the_category();
                    foreach ($categories as $category) :
                    ?>
                      <a href="<?php echo get_category_link($category->term_id); ?>" class="btn-1"><?php echo $category->name; ?></a>
                    <?php endforeach; ?>
                  </div>
                </div>
                <div class="single-blog-content">
                  <p class="date"><?php the_time('F d,Y H:i:s') ?></p>
                  <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                  <p class="text"><?php echo wp_trim_words(get_the_content(), '5', '.....'); ?></p>
                  <div class="feature-btn blog-btn">
                    <a href="<?php the_permalink(); ?>" class="more-btn">Read More</a>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<!-- End Blog Area -->
<?php get_footer(); ?>