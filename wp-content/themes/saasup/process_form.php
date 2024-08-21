<?php
if (isset($_POST)) {
    $path = preg_replace('/wp-content(?!.*wp-content).*/', '', __DIR__);
    include($path . 'wp-load.php');

    global $wpdb;
    $table_name = $wpdb->prefix . 'transport_bookings';
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];  
    $email = $_POST['email'];
    $pickup_street = $_POST['pickup_street'];
    $pickup_city = $_POST['pickup_city'];
    $pickup_state = $_POST['pickup_state'];
    $destination_street = $_POST['destination_street'];
    $destination_city = $_POST['destination_city'];
    $destination_state = $_POST['destination_state'];
    $travel_date = $_POST['travel_date'];
    $travel_time = $_POST['travel_time'];
    $service_level = $_POST['service_level'];
    $special_needs = $_POST['special_needs'];
    $unique_id = uniqid();
    $short_unique_id = substr($unique_id, 0, 6);

    $email_exists = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM $table_name WHERE email = %s", $email));
    if ($email_exists > 0) {
        echo '<div class="alert alert-danger">
            Email Already Exists!
        </div>';
    } else {
        $inserted = $wpdb->insert(
            $table_name,
            array(
                'orderid' => $short_unique_id,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'dob' => $dob,
                'phone' => $phone,
                'email' => $email,
                'pickup_street' => $pickup_street,
                'pickup_city' => $pickup_city,
                'pickup_state' => $pickup_state,
                'destination_street' => $destination_street,
                'destination_city' => $destination_city,
                'destination_state' => $destination_state,
                'travel_date' => $travel_date,
                'travel_time' => $travel_time,
                'service_level' => $service_level,
                'special_needs' => $special_needs,
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
