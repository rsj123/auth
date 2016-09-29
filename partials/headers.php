<?php include_once 'resource/session.php' ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if(isset($page_title)) echo $page_title; ?></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- custom css -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">用户系统</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <?php if(!isset($_SESSION['username'])): ?>
                    <li><a href="#">用户资料</a></li>
                    <li><a href="logout.php">退出</a></li>
                <?php else: ?>
                    <li><a href="#about">About</a></li>
                    <li><a href="login.php">登录/a></li>
                    <li><a href="signup.php">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                <?php endif ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
