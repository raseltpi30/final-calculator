<?php
if (isset($_POST)) {
    $path = preg_replace('/wp-content(?!.*wp-content).*/', '', __DIR__);
    include($path . 'wp-load.php');

    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_name_email';
    $city_name = $_POST['city_name'];
    $email = $_POST['email'];

    $email_exists = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM $table_name WHERE email = %s", $email));
    if ($email_exists > 0) {
        echo '<div class="alert alert-danger">
            Email Already Exists!
        </div>';
    } else {
        $inserted = $wpdb->insert(
            $table_name,
            array(
                'city_name' => $city_name,
                'email' => $email,
                'created_at' => current_time('mysql')
            )
        );

        if ($inserted) {
            echo '<div class="alert alert-success">
                Transport Booking Successfully!
            </div>';
        } else {
            echo '<div class="alert alert-danger">
                inserted Failed!
            </div>';
        }
    }
}
