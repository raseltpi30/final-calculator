jQuery(document).ready(function($) {
    $('form').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        // Serialize form data and append nonce
        var formData = $(this).serialize() + '&nonce=' + myThemeAjax.nonce + '&action=my_theme_submit_form';

        $.ajax({
            url: myThemeAjax.ajax_url,
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.success) {
                    $('#success-message').text(response.data).show();
                    $('#error-message').hide();
                } else {
                    $('#error-message').text(response.data).show();
                    $('#success-message').hide();
                }
            },
            error: function(xhr, status, error) {
                $('#error-message').text('An error occurred: ' + error).show();
                $('#success-message').hide();
            }
        });
    });
});
