<?php
// Template Name: Pricing Page Template
get_header();

?>
  <!-- Start Banner Area -->
  <section class="banner-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="banner section-title" data-aos="zoom-in">
            <h1><?php the_title(); ?></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit 
              interdum ullamcorper sed pharetra sene.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Banner Area -->
  <!-- Start Priging-1 Area -->
  <section class="pricing-area-1">
    <div class="container">
      <div class="row justify-content-center">
        <?php $pricing = new WP_Query(array(
          'post_type' => 'pricing',
          'post_per_page' => -1,
          'order' => 'ASC'
        ));
        while($pricing->have_posts()) :$pricing->the_post();
        ?>
        <div class="col-md-4">
          <a href="<?php the_permalink(); ?>">
            <div class="single-pricing item-2 month" data-aos=" fade-left" data-aos-duration="1000">
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
                  <?php if(have_rows('pricing_items')) :
                  while(have_rows('pricing_items')) : the_row();  
                  ?>
                  <li><?php the_sub_field('pricing_item') ?></li>
                  <?php endwhile; endif; ?>
                </ul>
              </div>
              <div class="pricing-btn basic">
                <a href="<?php the_permalink(); ?>" class="btn-2"><?php the_field('pricing_btn_text') ?></a>
              </div>
            </div>
          </a>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
  <!-- End Pricing-1 Area -->
  <!-- Start Compare Area -->
  <section class="compare-area section-padding">
    <div class="container">
      <div class="compare-all">
        <div class="compare-heading section-title">
          <h2><?php the_field('compare_title'); ?></h2>
        </div>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <?php if(have_rows('compare_head')) : 
              while(have_rows('compare_head'))  : the_row();
                
              ?>
              <th>
                <h2><?php the_sub_field('compare_head_title') ?></h2>
                <p><?php the_sub_field('compare_head_sub_title') ?></p>
              </th>
              <?php endwhile; endif; ?>
            </thead>
            <tbody>
              <?php
              if(have_rows('compare_content')) : 
              while(have_rows('compare_content'))  : the_row();
                
              ?>
              <tr>
                <td><p class="empty"><?php the_sub_field('compare_items_name'); ?></p></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
                <?php while(have_rows('compare_items')) :the_row(); ?>
                <tr>
                  <td><p><?php the_sub_field('compare_item_value_name') ?></p></td>
                  
                    <?php while(have_rows('compare_static')) :the_row(); 
                    $status = get_sub_field('compare_status');
                    if($status == 'Active') :
                    ?>
                    <td><i class="fa-solid fa-check"></i></td>
                    <?php elseif($status == 'Button') : ?>
                      <td><a href="<?php the_permalink(); ?>" class="btn-2 table-btn">Get Started</a></td>
                    <?php else : ?>
                      <td><i class="fa-solid fa-xmark"></i></td>
                    <?php endif; ?>
                    <?php endwhile; ?>
                </tr>
                <?php endwhile; ?>
              <?php endwhile; endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!-- End ompare Area -->
  <?php get_footer(); ?>