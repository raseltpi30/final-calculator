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

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  
  <?php wp_head(); ?>
</head>
<body>
  <!-- start header area -->
  <header class="header-area feature-header">
    <div class="container">
      <div class="row align-items-center">
      <div class="col-md-12 col-lg-3">
          <div class="logo">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo $options['header-logo']['url']; ?>" alt="SaaSup Logo" loading="lazy">
            </a>
            <div class="mobile-menu-btns">
              <a href="#" class="btn-1"><?php echo $options['header-btn']; ?></a>
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
    </div> 
  </header>
  <!-- End Header Area -->