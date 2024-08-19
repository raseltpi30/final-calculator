<?php get_header(); 
$options = get_option('coderit');
?>
  <!-- Start Banner Area -->
  <section class="banner-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="banner section-title" data-aos="zoom-in">
            <h1><?php echo $options['blog_title']; ?></h1>
            <p><?php echo $options['blog_description']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Banner Area -->
  <!-- Start Blog Area -->
  <section class="blog-area section-padding blog-3">
    <div class="container">
      <div class="row">
      <?php while(have_posts()) : the_post(); ?>
      <div class="col-lg-6">     
          <div class="single-blog">
            <a href="<?php the_permalink(); ?>">
            <div class="blog-content">         
              <div class="blog-img">
                <?php the_post_thumbnail(); ?>
                <div class="work-overly">
                  <?php $categories = get_the_category();
                  foreach ($categories as $category) :
                  ?>
                  <a href="<?php echo get_category_link($category->term_id);?>" class="btn-1"><?php echo $category->name; ?></a>
                  <?php endforeach; ?>
                </div>
              </div>
              <div class="single-blog-content">
                <p class="date"><?php the_time('F d,Y H:i:s') ?></p>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                <p class="text"><?php echo wp_trim_words(get_the_content(),'5','.....'); ?></p>
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