


<?php
$page_title = "User Authentication System - Password Reset Page";
include_once 'partials/headers.php';
include_once 'partials/parsePasswordReset.php';
?>
<div class="container">
    <section class="col col-lg-7">
        <h2>Password Reset Form</h2><hr>

        <?php if(isset($result)) echo $result; ?>
        <?php if(!empty($form_errors)) echo show_errors($form_errors); ?>

        <form method="post" action="">
            <div class="form-group">
                <label for="emailField">Email</label>
                <input type="email" class="form-control" name="email" id="emailField" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="passwordField">New Password:</label>
                <input type="password" class="form-control" name="new_password" id="passwordField" placeholder="New Password">
            </div>
            <div class="form-group">
                <label for="cpasswordField">Confirm Password:</label>
                <input type="password" class="form-control" name="confirm_password" id="cpasswordField" placeholder="Confirm Password">
            </div>
            <button type="submit" class="btn btn-primary pull-right" name="passwordResetBtn">Reset Password</button>
        </form>

    </section>
    <p><a href="index.php">Back</a> </p>
</div>

<?php include_once 'partials/footers.php'; ?>
</body>
</html>