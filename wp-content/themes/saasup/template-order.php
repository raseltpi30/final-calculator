<?php

if (isset($_GET['inserted_id'])) {

    $path = preg_replace('/wp-content(?!.*wp-content).*/', '', __DIR__);
    include($path . 'wp-load.php');
    // Sanitize and get the inserted_id
    $inserted_id = $_GET['inserted_id'];

    global $wpdb;
    // Replace 'your_table_name' with your actual table name
    $table_name = $wpdb->prefix . 'transport_bookings';
    // Fetch the record from the database
    $record = $wpdb->get_row(
        $wpdb->prepare(
            "SELECT * FROM $table_name WHERE id = %d",
            $inserted_id
        )
    );
} else {
    echo "No ID provided.";
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Thank you. We have received your booking.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" integrity="sha512-xnP2tOaCJnzp2d2IqKFcxuOiVCbuessxM6wuiolT9eeEJCyy0Vhcwa4zQvdrZNVqlqaxXhHqsSV1Ww7T2jSCUQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>


    <style type="text/css">
        .thanks {
            font: normal normal normal 16px/31px SF Pro Display;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            box-shadow: 0px 5px 15px #0000001A;
            border-radius: 4px;
        }

        .success-message {
            font-size: 26px;
            color: #000000;
        }

        .info-message {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 16px;
            color: #000000;
        }
    </style>

</head>

<body>
    <main>
        <div class="container">

            <div class="thanks p-5">
                <div class="success-message">
                    Thank you. We have received your booking!
                </div>
                <div class="info-message mt-1">
                    Order IDs: <?php echo $record->orderid; ?>
                </div>
                <div class="info-message mt-4">
                    Track your trips status with our application:
                </div>
                <div class="info-message">
                    <a href="https://play.google.com/store/apps/details?id=isi.technology.client" target="_blank">
                        <img src="https://hm.routegenie.com/images/google_play.png" alt="Google Play" width="158">
                    </a>
                    <a href="https://apps.apple.com/ua/app/isi-client-app/id1490079195?l=ru" target="_blank">
                        <img src="https://hm.routegenie.com/images/app_store.png" alt="Apple Store" width="158">
                    </a>
                </div>
            </div>

        </div>
    </main>

</body>

</html>