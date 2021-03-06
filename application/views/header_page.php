<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Facebook</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <?php if ($this->session->userdata('user_details') == false) { ?>
                <li><a href="<?php echo site_url('login'); ?>">Login</a></li>
                <li><a href="<?php echo site_url('register'); ?>">Register</a></li>
                <?php } else { ?>
                    <li><a href="#" class="show_password_modal">Change Password</a></li>
                    <li><a href="<?php echo site_url('logout'); ?>"><?php echo $logged_email; ?> Logout</a></li>
                <?php } ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div style="margin-top: 4em;"></div>
<div class="row">
    <div class="col-md-6 col-md-offset-3">

        <?php if ($this->session->flashdata('errors') != false) { ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('errors'); ?>
            </div>
        <?php } ?>

        <?php if ($this->session->flashdata('success_message') != false) { ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success_message'); ?>
            </div>
        <?php } ?>

    </div>
</div>

