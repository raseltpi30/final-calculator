<?php
/* Template Name: Custom Registration */
get_header();
?>

<div class="registration-form-container">
    <?php
    if (isset($_GET['registration']) && $_GET['registration'] == 'failed') {
        echo '<p class="registration-error">Registration failed. Please try again.</p>';
    }
    ?>
    <form id="registrationform" action="<?php echo site_url('wp-login.php?action=register'); ?>" method="post">
        <label for="username">Username</label>
        <input type="text" name="user_login" id="username" required>
        <label for="email">Email</label>
        <input type="email" name="user_email" id="email" required>
        <input type="submit" value="Register">
    </form>
</div>

<?php
get_footer();
?>
