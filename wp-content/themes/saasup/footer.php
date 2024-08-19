<!-- start footer area -->
<?php 
$options = get_option('coderit'); 
?> 
<footer class="footer">
    <div class="container">
      <div class="footer-all row section-padding" data-aos="fade-up" data-aos-duration="1000">
        <div class="col-xxl-4 col-lg-6">
          <div class="single-footer item-1">
            <div class="footer-img">
              <a href="#"><img src="<?php echo $options['footer-logo']['url']; ?>" alt="<?php the_title(); ?>"></a>
            </div>
            <p><?php echo $options['footer-description']; ?></p>
            <?php
            $icons = $options['footer-email-phone'];
            foreach($icons as $icon) :
            ?>
            <div class="footer-icons">
              <div class="footer-icon">
                <i class="<?php echo $icon['footer-icon']; ?>"></i>
              </div>
              <div class="footer-icon-text">
                <ul class="m-0">
                  <?php
                    $values = $icon['footer-values']; 
                    foreach($values as $value) :
                  ?>
                    <li><a href="<?php 
                    if(is_numeric($value['item-values'])){
                      echo "tel:".$value['item-values'];
                    }
                    else{
                      echo "mailto:".$value['item-values'];
                    };?>"><?php echo $value['item-values']; ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
            <?php endforeach; ?>    
          </div>
        </div>
        <div class="col-xxl-2 col-lg-6">
          <div class="single-footer item-2">
            <!-- <div class="footer-heading">
              <h4>Pages</h4>
            </div>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About Us</a></li>
              <li><a href="integrations.html">Integrations</a></li>
              <li><a href="pricing.html">Pricing</a></li>
              <li><a href="feature.html">Features</a></li>
              <li><a href="contact.html">Contact Us</a></li>
            </ul> -->
            <?php dynamic_sidebar('footer-sidebar-1'); ?>
          </div>
        </div>
        <div class="col-xxl-2 col-lg-6">
          <div class="single-footer item-3">
          <?php dynamic_sidebar('footer-sidebar-2'); ?>
          </div>
        </div>
        <div class="col-xxl-4 col-lg-6">
          <div class="single-footer item-4">
            <?php dynamic_sidebar('footer-sidebar-3'); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- place footer here -->
  </footer>
  <!-- end footer area -->
  <!-- start copyright area -->
  <div class="section copyright-area">
    <div class="container">
      <div class="copy-area">
        <div class="copyright-content">
          <p><?php echo $options['footer-copyright']; ?></p>
        </div>
        <div class="copyright-icon">
          <ul>
            <?php $social_icon = $options['social-icon'];
            foreach($social_icon as $social) :
            ?>
              <li><a href="<?php echo $social['social-url']; ?>"><i class="<?php echo $social['icon-social'] ?>"></i></a></li>
              <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- end copyright area -->
  <?php wp_footer(); ?>
</body>
</html>