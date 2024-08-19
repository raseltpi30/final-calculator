<?php get_header(); ?>
  <!-- End Advanced Area -->
  <section class="advanced-area section-padding">
    <?php while(have_posts()) : the_post(); ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="single-advanced">
            <div class="single-advanced-top">
              <h1><?php the_field('package_name') ?></h1>
              <p class="destcription"><?php the_field('pricing_short_description') ?></p>
              <ul class="d-block">
                <?php if(have_rows('pricing_items')) :
                while(have_rows('pricing_items')) : the_row();  
                ?>
                <p style="line-height:2.5;"><?php the_sub_field('pricing_item') ?></p>
                <?php endwhile; endif; ?>
              </ul>
            </div>
            <div class="single-advanced-bottom">
              <?php the_field('package_details'); ?>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="advanced-right">
            <h3>Choose your plan duration</h3>
            <p>Lorem ipsum dolor sit amet consectet udipiscing elit terdum</p>
            <form action="#">
              <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>Select Plan Duration</option>
                <option value="1">Monthly</option>
                <option value="2">Annual</option>
              </select> 
              <h1>$ 7.99 <span>/ month</span></h1>
              <button type="submit">Add To Cart</button>
            </form>           
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  </section>
  <!-- End Advanced Area -->
 <?php get_footer(); ?>