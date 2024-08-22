<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 

if (isset($_GET['inserted_id'])) {

    $path = preg_replace('/wp-content(?!.*wp-content).*/', '', __DIR__);
    include($path . 'wp-load.php');
    // Sanitize and get the inserted_id
    $inserted_id = $_GET['inserted_id'];

    global $wpdb;

    // Replace 'your_table_name' with your actual table name
    $table_name = $wpdb->prefix . 'transport_bookings';

    echo $table_name;

    // Fetch the record from the database
    $record = $wpdb->get_row(
        $wpdb->prepare(
            "SELECT * FROM $table_name WHERE id = %d",
            $inserted_id
        )
    );
    if ( $record ) {
        // Display the record details
        echo "<h2>Record Details</h2>";
        echo "Order ID: " . esc_html( $record->orderid ) . "<br>";
        echo "First Name: " . esc_html( $record->first_name ) . "<br>";
        
    } else {
        echo "No record found for ID: " . esc_html( $inserted_id );
    }

} else {
    echo "No ID provided.";
}?>


    
</body>
</html>