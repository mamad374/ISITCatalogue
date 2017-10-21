<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ISITCatalogue_Login</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/Form_Login.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/Login.css">
    </head>

    <body>

        <div class="login-clean">
            <form method="post" action="<?php echo site_url('admin_login/login'); ?>" method="POST" >
                <h2 class="sr-only">Login Form</h2>
                <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
                <?php echo $this->session->flashdata('error'); ?>
                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="Username"> 

                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password">

                </div>
                <div class="form-group">
                    <button  class="btn btn-primary btn-block" type="submit">Log In</button>
                    <!--
                </div><a href="#" class="forgot">Forgot your email or password?</a></form>
                    -->

                </div>
                <script src="assets/js/jquery.min.js"></script>
                <script src="assets/bootstrap/js/bootstrap.min.js"></script>

                </body>

                </html>