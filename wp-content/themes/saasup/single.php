<?php get_header(); ?>
  <!-- Start person Area -->
  <section class="person-area">
    <div class="container">
    <?php while(have_posts()) :the_post(); ?>
    <div class="row">
        <div class="col-12">
          <div class="banner banner-img section-title mb-5">
            <?php the_post_thumbnail(); ?>
          </div>
        </div>
      <div class="row">
        <div class="col-xl-8">
          <div class="person-left">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="person-right">
            <div class="person-heading">
              <div class="person-icon">
                <img src="<?php print get_avatar_url(get_the_author_meta('ID') , ['size' => '51']);?>" alt="<?php the_author();?>">
              </div>
              <div class="person-name">
                <h4><?php the_author() ?></h4>
                <p><?php the_field('designation','user_'.get_the_author_meta('ID')); ?></p> 
              </div>
            </div>
            <div class="person-content">
              <p><span>Post : &nbsp;</span><?php the_time('F d, Y');  ?></p>
              <ul>
                <?php $categories = get_the_category();
                foreach ($categories as $category) :
                ?>
                <li><a href="<?php echo get_category_link($category->term_id);?>" class="btn-2"><?php echo $category->name ?></a></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  </section>
  <!-- End person Area -->
  <!-- start program Area -->
  <section class="program-area section-padding">
    <div class="container">
      <div class="all-program">
        <?php the_content(); ?>
      </div>
    </div>
  </section>
  <!-- End program Area -->
  <!-- Start Blog Area -->
  <section class="blog-area section-padding">
    <div class="container">
      <div class="blog-heading-rana">
        <h2>Latest Post</h2>
        <a href="<?php echo home_url(); ?>" class="btn-2">Browse All Post</a>
      </div>
      <div class="row">
        <?php
        $latest = new WP_Query(array(
          'post_type' => 'post',
          'post_per_page' => 2,
        ));
        while($latest->have_posts()) : $latest->the_post();
        ?>
        <div class="col-md-6">
          <div class="single-blog">
            <a href="<?php the_permalink(); ?>">
              <div class="blog-content">
              <div class="blog-img">
                <?php the_post_thumbnail() ?>
                <div class="work-overly">
                  <?php $categories = get_the_category();
                    foreach($categories as $category) :
                  ?>
                  <a href="<?php echo get_category_link($category->term_id); ?>" class="btn-1"><?php echo $category->name." "; ?></a> 
                  <?php endforeach; ?>               
                </div>
              </div>
              <div class="single-blog-content">
                <p class="date"><?php the_time('F d,Y') ?></p>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                <p class="text"><?php echo wp_trim_words(get_the_content(),5,'........') ?></p>
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
  <!-- Start Department Area -->
  <section class="department-area section-padding">
    <div class="container">
      <div class="row all-department align-items-center">
        <div class="col-md-6">
          <div class="department-content">            
            <h2>Start your free trial today</h2>
            <p>It is a long established fact that a reader will be by the readable when looking at it layout. </p>
            <div class="department-btn">
              <input type="text" name="" id="" class="btn-1" placeholder="your mail here...">
              <a href="#" class="btn-1">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="department-img">
            <img src="assets/images/department/1.png" alt="Department">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Department Area -->
<?php get_footer(); ?>