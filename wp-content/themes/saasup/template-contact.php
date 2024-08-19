<?php get_header();
// Template Name: Contact Page Template
?>
  <!-- Start Contact-form Area -->
  <section class="contact-form-area"  data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
      <div class="section-title" data-aos="zoom-in">
        <h1>Get in touch today!</h1>
      </div>
      <div class="row contact-form-top">
        <div class="col-xl-6">
          <div class="single-contact item-1">
            <div class="contact-content">
              <div class="contact-icon">
                <div class="contact-img-icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/1.png" alt="Contact Icon">
                </div>
                <h4>Mail Us</h4>
              </div>
              <div class="contact-phone">
                <a href="mailto:saasup@gmail.com">saasup@gmail.com</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="single-contact">
            <div class="contact-content">
              <div class="contact-icon">
                <div class="contact-img-icon image-2">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/2.png" alt="Contact Icon">
                </div>
                <h4>Mail Us</h4>
              </div>
              <div class="contact-phone">
                <a href="tel:+8801774416430">+8801774416430</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row contact-form-bottom">
        <form action="#">
          <div class="contact-full-form">
            <div class="contact-single-form">
              <label for="name">Full Name*</label>
              <input type="text" id="name" placeholder="John David" required>
            </div>
            <div class="contact-single-form">
              <label for="email">Your Email*</label>
              <input type="email" id="email" placeholder="example@yourmail.com" required>
            </div>
          </div>
          <div class="contact-full-form">
            <div class="contact-single-form">
              <label for="com">Company*</label>
              <input type="text" id="com" placeholder="yourcompany name here" required>
            </div>
            <div class="contact-single-form">
              <label for="subject">Subject*</label>
              <input type="text" id="subject" placeholder="How can we Help" required>
            </div>
          </div>
          <div class="contact-full-form contact-single-form d-block">
            <label for="textarea">Message*</label>
            <textarea placeholder="Hello there,I would like to talk about how to..."  id="textarea" required></textarea>
          </div>
          <div class="contact-form-btn">
            <button type="submit">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- End Contact-form Area -->
  <!-- Start location Area -->
  <section class="location-area section-padding" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
      <div class="section-title">
        <h2>We help small businesses with big hearts make meaningful hires</h2>
      </div>
      <div class="row" data-aos="fade-up" data-aos-duration="1000">
        <div class="col-lg-4">
          <div class="single-location item-1">
            <i class="fa-solid fa-location-dot"></i>
            <h4>Paris</h4>
            <p>19 Maypole Crescent</p>
            <p class="paris">Ilford,L62UJ</p>
            <a href="tel:(415) 870 – 3204">(415) 870 – 3204</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="single-location item-2">
            <i class="fa-solid fa-location-dot"></i>
            <h4>Paris</h4>
            <p>19 Maypole Crescent</p>
            <p class="paris">Ilford,L62UJ</p>
            <a href="tel:(415) 870 – 3204">(415) 870 – 3204</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="single-location item-3">
            <i class="fa-solid fa-location-dot"></i>
            <h4>Paris</h4>
            <p>19 Maypole Crescent</p>
            <p class="paris">Ilford,L62UJ</p>
            <a href="tel:(415) 870 – 3204">(415) 870 – 3204</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End location Area -->
  <!-- Start Accordin Area -->
  <section class="accordion-area section-padding">
    <div class="container">
      <div class="accordion-all" data-aos="fade-up" data-aos-duration="1000">
        <div class="accordion-top section-title">
          <h2>Frequently Asked Questions</h2>
        </div>
        <div class="accordion-content">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  <h4>1. Where is my order? Quisque molestie</h4>
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><p>The are going to use a passage of Lorem Ipsum, you need to be sure tdembarrassing hidden in the middle of text. All the Lorem generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p></div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  <h4>2. How can I return an item purchased online?</h4>
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><p>The are going to use a passage of Lorem Ipsum, you need to be sure tdembarrassing hidden in the middle of text. All the Lorem generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p></div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  <h4>3. Can I cancel or change my order?</h4>
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><p>The are going to use a passage of Lorem Ipsum, you need to be sure tdembarrassing hidden in the middle of text. All the Lorem generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p></div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                  <h4>4. I have a promotional or discount code?</h4>
                </button>
              </h2>
              <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><p>The are going to use a passage of Lorem Ipsum, you need to be sure tdembarrassing hidden in the middle of text. All the Lorem generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p></div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingFiv">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFour">
                  <h4>5. Can I integrate my store with Facebook?</h4>
                </button>
              </h2>
              <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><p>The are going to use a passage of Lorem Ipsum, you need to be sure tdembarrassing hidden in the middle of text. All the Lorem generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Accordin Area -->
 <?php get_footer();  ?>