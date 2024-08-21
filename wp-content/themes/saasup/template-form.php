<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Include jQuery -->

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

        .total {
            border: 3px dashed #D0D0D0;
            border-radius: 4px;
            background-color: #f4f4f4;
            padding: 2rem 1rem;
        }

        .price_details {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .left-side {
            padding: 2rem 1rem 0rem 1rem;
            box-shadow: 0px 5px 15px #0000001A;
            background: #FFFFFF 0% 0% no-repeat padding-box;
        }
    </style>

</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="class" id="msg"></div>
                <form id="customForm" method="POST" action="">
                    <div class="row">
                        <div class="col-md-8 left-side">
                            <div class="form-section">
                                <h4 class="font-weight-bold">Passenger Information:</h4>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name">
                                        <div id="first_name_error" class="error">First name is required</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name">
                                        <div id="last_name_error" class="error">Last name is required</div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" class="form-control" id="dob" name="dob">
                                        <div id="dob_error" class="error">Date of birth is required</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" class="form-control" id="phone" name="phone">
                                        <div id="phone_error" class="error">Phone number is required</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                    <div id="email_error" class="error">Please enter a valid email address</div>
                                </div>
                            </div>

                            <div class="form-section">
                                <h4 class="font-weight-bold">Trip Information:</h4>
                                <div class="form-custom">
                                    <label for="pickup_street">Where do you need to be picked Up?</label>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" id="pickup_street" name="pickup_street" placeholder="Street">
                                            <div id="pickup_street_error" class="error">Pickup street is required</div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" id="pickup_city" name="pickup_city" placeholder="City">
                                            <div id="pickup_city_error" class="error">Pickup city is required</div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" id="pickup_state" name="pickup_state" placeholder="State">
                                            <div id="pickup_state_error" class="error">Pickup state is required</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-custom">
                                    <label for="destination_street">Where are you going?</label>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" id="destination_street" name="destination_street" placeholder="Street">
                                            <div id="destination_street_error" class="error">Destination street is required</div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" id="destination_city" name="destination_city" placeholder="City">
                                            <div id="destination_city_error" class="error">Destination city is required</div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" id="destination_state" name="destination_state" placeholder="State">
                                            <div id="destination_state_error" class="error">Destination state is required</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="travel_date">What time do you need to be there?</label>
                                        <input type="date" class="form-control" id="travel_date" name="travel_date">
                                        <div id="travel_date_error" class="error">Travel date is required</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="travel_time">&nbsp;</label>
                                        <input type="time" class="form-control" id="travel_time" name="travel_time">
                                        <div id="travel_time_error" class="error">Travel time is required</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="service_level">Please choose the level of service requested</label>
                                    <select class="form-control" id="service_level" name="service_level">
                                        <option value="">Not Selected</option>

                                        <option value="2" data-base-type="1">Ambulatory</option>

                                        <option value="3" data-base-type="2">Wheelchair</option>

                                        <option value="4" data-base-type="3">Stretcher</option>

                                        <option value="5" data-base-type="2">Bariatric Wheelchair</option>

                                        <option value="6" data-base-type="3">Bariatric Stretcher</option>

                                        <option value="7" data-base-type="2">Bariatric Wheelchair One Way</option>

                                        <option value="8" data-base-type="3">Bariatric Stretcher One Way</option>

                                        <option value="9" data-base-type="2">Wheelchair One Way</option>

                                        <option value="10" data-base-type="3">Stretcher One Way</option>

                                        <option value="11" data-base-type="2">COVID-19 Wheelchair</option>

                                        <option value="12" data-base-type="3">COVID-19 Stretcher</option>

                                        <option value="22" data-base-type="1">Ambulatory One Way</option>

                                        <option value="23" data-base-type="1">COVID-19 Ambulatory One Way</option>

                                        <option value="24" data-base-type="2">Bariatric Wheelchair 450lbs Max
                                        </option>

                                        <option value="25" data-base-type="2">Homeless Shuttle</option>

                                        <option value="26" data-base-type="3">Psych Gurney</option>

                                        <option value="27" data-base-type="3">Bariatric lvl I Gurney 250 to 350lbs
                                        </option>

                                        <option value="28" data-base-type="1">COVID-19 Ambulatory Round Trip
                                        </option>

                                        <option value="29" data-base-type="3">Long Distance Stretcher</option>

                                        <option value="30" data-base-type="2">Long Distance Wheelchair</option>

                                        <option value="31" data-base-type="2">Wheelchair-Facility S/O</option>

                                        <option value="32" data-base-type="1">Ambulatory-Facility S/O</option>

                                        <option value="33" data-base-type="2">Bariatric WC- Facility S/O</option>

                                        <option value="34" data-base-type="3">Stretcher- Facility S/O</option>

                                        <option value="35" data-base-type="3">Bariatric Stretcher- Facility S/O
                                        </option>

                                        <option value="36" data-base-type="3">Long Distance- Bariatric Stretcher
                                        </option>

                                        <option value="37" data-base-type="2">Long Distance- Bariatric Wheelchair
                                        </option>
                                    </select>
                                    <div id="service_level_error" class="error">Service level is required</div>

                                </div>
                                <div class="form-group">
                                    <label for="special_needs">Please describe any special needs, requests, or notes</label>
                                    <textarea class="form-control" id="special_needs" name="special_needs" placeholder="Input note here..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 book-form__section p-3 d-flex justify-content-center align-items-end left-side">
                            <div class="price_details">
                                <div class="total">
                                    <div id="displayValue" style="font-size: 26px;" class="display-value">Total: $0</div>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary m-1 g-recaptcha">Submit Trip</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function($) {
        $('#customForm').on('submit', function(e) {
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
                var first_name = $("input[name='first_name']").val();
                var last_name = $("input[name='last_name']").val();
                var email = $("input[name='email']").val();
                var dob = $("input[name='dob']").val();
                var phone = $("input[name='phone']").val();
                var pickup_street = $("input[name='pickup_street']").val();
                var pickup_city = $("input[name='pickup_city']").val();
                var pickup_state = $("input[name='pickup_state']").val();
                var destination_street = $("input[name='destination_street']").val();
                var destination_city = $("input[name='destination_city']").val();
                var destination_state = $("input[name='destination_state']").val();
                var travel_date = $("input[name='travel_date']").val();
                var travel_time = $("input[name='travel_time']").val();
                var service_level = $("input[name='service_level']").val();
                var special_needs = $("input[name='special_needs']").val();
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
        $('#service_level').on('change', function() {
            var selectedValue = $(this).val();

            // Update the content of the div with the selected value
            $('#displayValue').text('Total: $' + (selectedValue ? selectedValue.charAt(0).toUpperCase() + selectedValue.slice(1) : 'None'));
        });
    });
</script>

</html>