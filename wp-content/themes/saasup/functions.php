<?php 
function saasup_theme_setup(){
    //theme support title
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    //Register Nav Menus
    register_nav_menus(array(
        'main-menu' => 'Main Menu',
    ));
    // Pricing Custom Post type
    register_post_type('pricing',array(
        'label' => 'Pricing',
        'public' => true,
        'supports' => array('title'),
    ));
    //Feature Custom Post Type
    register_post_type('features',array(
        'labels' => array(
            'id' => 'Features',
            'name' => 'Features',
            'add_new' => 'Add New Feature',
            'add_new_item' => 'Feature Title',
        ),
        'public' => true,
        'supports' => array('title','thumbnail','editor'),
    ));
    //Careers Custom Post Types
    register_post_type('carrer',array(
        'labels' => array(
            'id' => 'Career',
            'name' => 'Career',
            'add_new' => 'Add New Career',
            'add_new_item' => 'Career Title',
        ),
        'public' => true,
        'supports' => array('title'),
        // 'menu_icon' => 'dashicons-prices',
    ));
    //Integrations Custom Post Types
    register_post_type('integrations',array(
        'labels' => array(
            'id' => 'Integrations',
            'name' => 'Integrations',
            'add_new' => 'Add New Integrations',
            'add_new_item' => 'Integrations Title',
        ),
        'public' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => array('title'),
    ));
};
add_action('after_setup_theme','saasup_theme_setup');

function saasup_css_js(){
    //css of saasup
    wp_register_style('fontawesome',get_template_directory_uri().'/assets/css/fontawesome.min.css');
    wp_register_style('aos','https://unpkg.com/aos@next/dist/aos.css');
    wp_register_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_register_style('default',get_template_directory_uri().'assets/css/owl.theme.default.min.css');
    wp_register_style('owl-carousel',get_template_directory_uri().'/assets/css/owl.carousel.min.css');
    wp_register_style('main-style',get_template_directory_uri().'/assets/css/style.css');
    wp_register_style('responsive',get_template_directory_uri().'/assets/css/responsive.css');
    wp_register_style('style',get_stylesheet_uri());

    wp_enqueue_style('fontawesome');
    wp_enqueue_style('aos');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('default');
    wp_enqueue_style('owl-carousel');
    wp_enqueue_style('main-style');
    wp_enqueue_style('responsive');
    wp_enqueue_style('style');


    //js of saasup
    wp_register_script('local-js',get_template_directory_uri().'/assets/js/New folder/jquery.min.js');
    wp_register_script('popper',get_template_directory_uri().'/assets/js/popper.min.js');
    wp_register_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js');
    wp_register_script('owl-carousel',get_template_directory_uri().'/assets/js/owl.carousel.min.js');
    wp_register_script('counter',get_template_directory_uri().'/assets/js/New folder/jquery.counterup.min.js');
    wp_register_script('waypoints',get_template_directory_uri().'/assets/js/New folder/waypoints.min.js');
    wp_register_script('aos','https://unpkg.com/aos@next/dist/aos.js');
    wp_register_script('main-js',get_template_directory_uri().'/assets/js/scripts.js');

    wp_enqueue_script('local-js');
    wp_enqueue_script('popper');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('owl-carousel');
    wp_enqueue_script('counter');
    wp_enqueue_script('waypoints');
    wp_enqueue_script('aos');
    wp_enqueue_script('main-js');

};
add_action('wp_enqueue_scripts','saasup_css_js');
//Footer widgets
function sassup_widgets(){
    register_sidebar(array(
        'id' => 'footer-sidebar-1',
        'name' => 'Footer Widgets',
        'description' => 'Add your widgets',
        'before_widget' => '<div class="single-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    register_sidebar(array(
        'id' => 'footer-sidebar-2',
        'name' => 'Footer Widgets 2',
        'description' => 'Add your widgets',
        'before_widget' => '<div class="single-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    register_sidebar(array(
        'id' => 'footer-sidebar-3',
        'name' => 'Footer Widgets 3',
        'description' => 'Add your widgets',
        'before_widget' => '<div class="single-footer">',
        'after_widget' => '</div>',
    ));
};
add_action('widgets_init','sassup_widgets');

require_once('inc/theme-options/codestar-framework.php');
require_once('inc/theme-options/options.php');
require_once('inc/class-wp-bootstrap-navwalker.php');

add_action('wp_login_failed', 'custom_login_failed');

function custom_login_failed($username) {
    $referrer = wp_get_referer();
    wp_redirect($referrer . '?login=failed');
    exit;
}

add_action('init', 'custom_user_registration');
function custom_user_registration() {
    if (isset($_POST['user_login']) && isset($_POST['user_email'])) {
        $username = sanitize_user($_POST['user_login']);
        $email = sanitize_email($_POST['user_email']);
        
        $errors = new WP_Error();

        if (empty($username) || empty($email)) {
            $errors->add('field', 'Required form field is missing');
        }

        if (!is_email($email)) {
            $errors->add('email_invalid', 'Email is not valid');
        }

        if (username_exists($username)) {
            $errors->add('username_exists', 'Username already exists');
        }

        if (email_exists($email)) {
            $errors->add('email_exists', 'Email already exists');
        }

        if (is_wp_error($errors) && !empty($errors->errors)) {
            wp_redirect(site_url('page-register/?registration=failed'));
            exit;
        } else {
            $user_id = wp_create_user($username, wp_generate_password(), $email);
            if (!is_wp_error($user_id)) {
                wp_redirect(site_url('wp-login.php?checkemail=registered'));
                exit;
            }
        }
    }
}

// for calculatoor 

function my_theme_create_custom_table() {
    global $wpdb;

    $table_name = $wpdb->prefix . 'custom_name_email'; // Name of the custom table
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(255) NOT NULL,
        email varchar(255) NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
add_action('after_switch_theme', 'my_theme_create_custom_table');

// Handle AJAX request
function my_theme_handle_form_submission() {
    check_ajax_referer('my_theme_nonce', 'nonce');

    global $wpdb;

    if (isset($_POST['city_name']) && isset($_POST['email'])) {
        $table_name = $wpdb->prefix . 'custom_name_email';
        $city_name = sanitize_text_field($_POST['city_name']);
        $email = sanitize_email($_POST['email']);

        $inserted = $wpdb->insert(
            $table_name,
            array(
                'name' => $city_name,
                'email' => $email,
                'created_at' => current_time('mysql')
            )
        );

        if ($inserted !== false) {
            wp_send_json_success('Data inserted successfully!');
        } else {
            wp_send_json_error('Failed to insert data.');
        }
    } else {
        wp_send_json_error('Required fields are missing.');
    }

    wp_die();
}
add_action('wp_ajax_my_theme_submit_form', 'my_theme_handle_form_submission');
add_action('wp_ajax_nopriv_my_theme_submit_form', 'my_theme_handle_form_submission');













?>