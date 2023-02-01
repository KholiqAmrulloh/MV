<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forgot Password</title>
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
        <div class="_52jv _6luv">
            <div class="brand_logo_container">
                <h3 class="text-uppercase">Forgot Password</h3>
                <img src="<?= base_url() ?>assets/img/logopt.png" height="200px 200px">
            </div>
            <form action="resetPassword" method="post">
                <br>
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" autocomplete="off" required>
                </div>
                <br>
                <?php echo $this->session->userdata("salah"); ?>
                <br>
                <a class="btn btn-secondary" href="<?= base_url('login') ?>">Kembali</a>
                <input type="submit" class="btn btn-primary" value="Reset"></input>
            </form>
        </div>
    </div>
</body>

</html>