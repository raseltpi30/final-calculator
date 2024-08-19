<?php  
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'coderit';
  
    //
    // Create options
    CSF::createOptions( $prefix, array(
      'menu_title' => 'Theme Options',
      'menu_slug'  => 'theme-options',
      'framework_title'  => 'Theme Options <small>by Coder IT Solution</small>',
      'menu_icon' => 'dashicons-heart',
      'menu_position' => 5,
    ));


  // Header Options
  CSF::createSection( $prefix, array(
    'title'  => 'Header Options',
    'fields' => array(
      array(
        'id'    => 'favicon-upload',
        'title' => 'Favicon',
        'type'  => 'media',
        'default'=> array(
            'url' => get_template_directory_uri().'/assets/images/logo.svg',
        ),
      ),
      array(
        'id'    => 'header-logo',
        'title' => 'Header Logo',
        'type'  => 'media',
        'default'=> array(
            'url' => get_template_directory_uri().'/assets/images/logo.svg',
        ),
      ),
      array(
        'id'    => 'header-btn',
        'title' => 'Header Button',
        'type'  => 'text',
        'default'=> 'New Sign In',
      ),

    ),
  ));
  //Banner Optins
  CSF::createSection( $prefix, array(
    'title'  => 'Banner Options',
    'fields' => array(
      array(
        'id'    => 'banner-heading',
        'title' => 'Banner Heading',
        'type'  => 'text',
        'default'=> 'Build your audience and grow your brand',
      ),
      array(
        'id'    => 'banner-description',
        'title' => 'banner Description',
        'type'  => 'text',
        'default' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit interdum ullamcorper sed pharetra sene.',
      ),
      array(
        'id'    => 'banner-button-1',
        'title' => 'Banner Button 1',
        'type'  => 'text',
        'default' => 'Get Started',
      ),
      array(
        'id'    => 'banner-button-1-url',
        'title' => 'Banner Button 1 Url',
        'type'  => 'text',
        'default' => '#',
      ),
      array(
        'id'    => 'banner-button-2',
        'title' => 'Banner Button 2',
        'type'  => 'text',
        'default' => 'Watch Video',
      ),
      array(
        'id'    => 'banner-button-2-url',
        'title' => 'Banner Button 2 Url',
        'type'  => 'text',
        'default' => 'https://www.youtube.com/watch?v=K4TOrB7at0Y',
      ),
      array(
        'id'    => 'banner-image',
        'title' => 'Banner Image',
        'type'  => 'media',
        'default' => array(
          'url' => get_template_directory_uri().'/assets/images/banner.png',
        ),
      ),

    ),
  ));
  //Trial Optins
  CSF::createSection( $prefix, array(
    'title'  => 'Trial Options',
    'fields' => array(
      array(
        'id'    => 'trial-heading',
        'title' => 'Trial Heading',
        'type'  => 'text',
        'default'=> 'Start your free trial today',
      ),
      array(
        'id'    => 'trial-description',
        'title' => 'Trial Description',
        'type'  => 'text',
        'default' => 'It is a long established fact that a reader will be by the readable when looking at it layout.',
      ),
      array(
        'id'    => 'trial-image',
        'title' => 'Trial Image',
        'type'  => 'media',
        'default' => array(
          'url' => get_template_directory_uri().'/assets/images/department/1.png',
        ),
      ),
      array(
        'id'    => 'trial-form-shortcode',
        'title' => 'Trial Form Shortcode',
        'type'  => 'text'
      ),

    ),
  ));
  //Blog Options
  CSF::createSection( $prefix, array(
    'title' => 'Blog Options',
    'fields' => array(
      array(
        'id' => 'blog_title',
        'title' => 'Blog Title',
        'type' => 'text',
        'default' => 'News & Articles'
      ),
      array(
        'id' => 'blog_description',
        'title' => 'Blog Description',
        'type' => 'textarea',
        'default' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit interdum ullamcorper sed pharetra sene.'
      ),
    )
    ));
  // Footer Options
  CSF::createSection( $prefix, array(
    'title'  => 'Footer Options',
    'fields' => array(
      array(
        'id'    => 'footer-logo',
        'title' => 'Footer Logo',
        'type'  => 'media',
        'default'=> array(
            'url' => get_template_directory_uri().'/assets/images/logo.svg',
        ),
      ),
      array(
        'id'    => 'footer-description',
        'title' => 'Footer Description',
        'type'  => 'textarea',
        'default'=> 'It is a long established fact that from will be distracted by the readable from when looking.',
      ),
      array(
        'id'    => 'footer-email-phone',
        'title' => 'Footer Email & Phone',
        'type'  => 'repeater',
        'fields'=> array(
            array(
                'id' => 'footer-icon',
                'title' => 'Footer Icon',
                'type' => 'icon',
            ),
            array(
                'id' => 'footer-values',
                'title' => 'Footer Values',
                'type' => 'repeater',
                'fields' => array(
                    array(
                        'id' => 'item-values',
                        'title' => 'Item Values',
                        'type' => 'text',
                        'default' => 'saasup@gmail.com'
                    ),
                ),
            ),
        ),
      ),
      array(
        'id' => 'footer-copyright',
        'title' => 'Footer Copyright',
        'type' => 'text',
        'default' => 'Copyright © Saasup | Designed by Md. Rasel Rana',
      ),
      array(
        'id' => 'social-icon',
        'title' => 'Social Icon',
        'type' => 'repeater',
        'fields' => array(
            array(
                'id' => 'icon-social',
                'title' => 'Icon Social',
                'type' => 'icon',
            ),
            array(
                'id' => 'social-url',
                'title' => 'Social Icon Url',
                'type' => 'text',
            ),
        )
      ),
    ),
  ));

  // 
  
  
  // Field: backup
//
  CSF::createSection( $prefix, array(
    'title'       => 'Backup',
    'icon'        => 'fas fa-shield-alt',
    'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=backup" target="_blank">Field: backup</a>',
    'fields'      => array(

      array(
        'type' => 'backup',
      ),

    )
  ) );


}

?>