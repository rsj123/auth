<?php
$page_title = "User Authentication System - Edit Profile";
include_once 'partials/headers.php';
include_once 'partials/parseProfile.php';
?>
<div class="container">
    <section class="col col-lg-7">
        <h2>Edit Profile</h2><hr>

        <div>
            <?php if(isset($result)) echo $result; ?>
            <?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
        </div>
        <div class="clearfix"></div>


        <?php if(!isset($_SESSION['username'])): ?>
            <p class="lead">You are currently not signin <a href="login.php">Login</a> Not yet a member? <a href="signup.php">Signup</a> </p>
        <?php else: ?>
            <form method="post" action="">
                <div class="form-group">
                    <label for="emailField">Email</label>
                    <input type="email" class="form-control" name="email" id="emailField" value="<?php if(isset($email)) echo $email; ?>">
                </div>
                <div class="form-group">
                    <label for="usernameField">Username</label>
                    <input type="text" class="form-control" name="username" id="usernameField" value="<?php if(isset($username)) echo $username; ?>">
                </div>
                <input type="hidden" name="hidded_id" value="<?php if(isset($id)) echo $id; ?>">
                <button type="submit" class="btn btn-primary pull-right" name="updateProfileBtn">更新资料</button>
            </form>
        <?php endif ?>
    </section>

    <p><a href="index.php">Back</a> </p>
</div>

<?php include_once 'partials/footers.php'; ?>
</body>
</html>