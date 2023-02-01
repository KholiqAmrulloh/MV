<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    <!-- buat login -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css') ?>" type='text/css'>
    <!-- end buat login -->
    <script src="<?= base_url('assets/js/jquery-3.3.1.slim.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <style type="text/css">
        body {
            background-color: #F0F2F5;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-md-6">
            <p class="textlogin"><b>SELAMAT DATANG <br> DI HALAMAN LOGIN ADMIN</b></p><br>
        </div>
        <div class="col-md-6">
            <div class="_52jv _6luv">
                <div class="brand_logo_container">
                    <img src="<?= base_url() ?>assets/img/logopt.png" height="200px 200px">
                </div>
                <form action="login/proseslogin" method="post">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control form-control-lg" name="username" placeholder="Username" required>
                    </div>
                    <br>
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-key"></i></span>
                        <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required>
                    </div>
                    <br>
                    <?php echo $this->session->userdata("error"); ?>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Login"></input>
                </form><br>
                <a href="<?= base_url('Login/lupaPW') ?>" style="font-size: 12px;">Lupa Password !</a>
            </div>
        </div>
    </div>
</body>

</html>