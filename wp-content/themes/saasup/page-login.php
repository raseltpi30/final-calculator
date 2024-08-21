<?php
/* Template Name: Custom Login */
get_header();
?>

<div class="login-form-container">
    <?php
    if (isset($_GET['login']) && $_GET['login'] == 'failed') {
        echo '<p class="login-error">Login failed. Please try again.</p>';
    }
    ?>
    <form id="loginform" action="<?php echo wp_login_url(); ?>" method="post">
        <label for="username">Username</label>
        <input type="text" name="log" id="username" required>
        <label for="password">Password</label>
        <input type="password" name="pwd" id="password" required>
        <input type="submit" value="Login">
    </form>
</div>

<?php
get_footer();
?>
