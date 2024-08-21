<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Include jQuery -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .form-section {
            margin-bottom: 20px;
        }

        .submit-btn {
            background-color: #F57224;
            color: white;
            border: none;
        }

        .submit-btn:hover {
            background-color: #D65F1F;
        }

        .error {
            color: red;
            font-size: 0.875em;
            display: none;
        }
    </style>
    <script>
        $(document).ready(function($) {
            $('#myForm').on('submit', function(e) {
                e.preventDefault(); // Prevent default form submission

                var isValid = true;

                // Clear previous errors
                $(".error").hide();
                // Validate fields
                $("input, select, textarea").each(function() {
                    if ($(this).val().trim() === "") {
                        var id = $(this).attr('id');
                        $("#" + id + "_error").show();
                        isValid = false;
                    }
                });

                var email = $("#email").val().trim();
                var emailPattern = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
                if (!emailPattern.test(email)) {
                    $("#email_error").show();
                    isValid = false;
                }

                if (!isValid) {
                    event.preventDefault(); // Prevent form submission
                } else {
                    var city_name = $("input[name='city_name']").val();
                    var email = $("input[name='email']").val();
                    var url = "<?php echo get_template_directory_uri(); ?>/process_form.php";


                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: $(this).serialize(),
                        success: function(data) {
                            console.log(data);
                            $('form')[0].reset();
                            $('#msg').show().html(data);

                            setTimeout(function() {
                                $('#msg').hide();
                            }, 5000)
                        }
                    });
                }



            });
        });
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto" style="padding-top: 100px;">
                <div class="class" id="msg"></div>
                <form id="myForm">
                    <div class="form-group">
                        <label for="city_name">First Name</label>
                        <input type="text" class="form-control" id="city_name" name="city_name" placeholder="City Name">
                        <div id="city_name_error" class="error">City Name is required</div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                        <div id="email_error" class="error">Please enter a valid email address</div>
                    </div>
                    <button class="btn btn-success" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>