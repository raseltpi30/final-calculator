<?php 
$options = get_option('coderit'); 
?>

<!doctype html>
<html <?php language_attributes();?>>
<head>
   <!-- Favicon -->
   <link rel="shortcut icon" href="<?php echo $options['favicon-upload']['url']; ?>" type="image/x-icon">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo bloginfo('description'); ?>">

  <?php wp_head(); ?>
</head>
<body>
  <!-- start header area -->
  <header class="header-area">
    <div class="container">    
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-3">
          <div class="logo">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo $options['header-logo']['url']; ?>" alt="SaaSup Logo" loading="lazy">
            </a>
            <div class="mobile-menu-btns">
              <a href="#" class="btn-2">Sign In</a> 
              <a href="#" class="menu_icon"><i class="fa-solid fa-bars"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-9">
          <div class="menus d-flex justify-content-end align-items-center">
            <nav class="menu">
              <?php wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'menu_class' => 'd-flex',
                'walker' => new WP_Bootstrap_Navwalker(),
              ));  ?>
            </nav>
            <div class="menu-btn">
              <a href="#" class="btn-1"><?php echo $options['header-btn']; ?></a>
            </div>
          </div> 
        </div>
      </div>
      <div class="row banner home">
        <div class="col-lg-6">
          <div class="banner-content">
            <h1><?php echo $options['banner-heading']; ?></h1>
            <p><?php echo $options['banner-description']; ?></p>

            <ul class="d-flex banner-buttons">
              <li><a class="btn-2" href="<?php echo $options['banner-button-1-url']; ?>"><?php echo $options['banner-button-1']; ?></a></li>
              <li><a class="btn-icon" id="popupVideo" href="<?php echo $options['banner-button-2-url']; ?>"><?php echo $options['banner-button-2']; ?> <i class="fa-solid fa-circle-play"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="banner-img">
            <img src="<?php echo $options['banner-image']['url']; ?>" alt="Banner Image" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Start Header area  -->