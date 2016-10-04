

<?php
$page_title = "User Authentication System - Login Page";
include_once 'partials/headers.php';
include_once 'partials/parseLogin.php';
?>
<div class="container">
    <section class="col col-lg-7">
        <h2>Login Form </h2><hr>

        <?php if(isset($result)) echo $result; ?>
        <?php if(!empty($form_errors)) echo show_errors($form_errors); ?>

        <form method="post" action="">
            <div class="form-group">
                <label for="usernameField">Username</label>
                <input type="text" class="form-control" name="username" id="usernameField" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="passwordField">Password</label>
                <input type="password" class="form-control" name="password" id="passwordField" placeholder="Password">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" value="yes"> 记住密码
                </label>
            </div>
            <a href="forgot_password.php" >Forgot Password?</a>
            <button type="submit" class="btn btn-primary pull-right" name="loginBtn">登录</button>
        </form>

    </section>
    <p><a href="index.php">Back</a> </p>
</div>

<?php include_once 'partials/footers.php'; ?>
</body>
</html>