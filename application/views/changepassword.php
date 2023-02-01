<!DOCTYPE html>
<html lang="en">

<head>
    <title>Change Password</title>
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
    <?php
    foreach ($Email as $em); { ?>
        <div class="row">
            <div class="_52jv _6luv">
                <div class="brand_logo_container">
                    <h3>Silahkan Ubah Password Anda</h3>
                    <img src="<?= base_url() ?>assets/img/logopt.png" height="200px 200px">
                </div>
                <form action="reset" method="post">
                    <br>
                    <input type="hidden" name="id" value="<?= $em['number'] ?>">
                    <div>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                            <input id="pw" type="password" class="form-control form-control-lg" name="password" placeholder="Password" required>
                        </div>
                        <div style="display: flex; padding-top: 8px; flex-direction:row; align-items: flex-end; justify-content:flex-start" class="position-relative">
                            <input id="checkpass" style="margin-top: 0px; margin-right: 5px;" type="checkbox" onclick="myFunction()">
                            <label for="checkpass" style="margin-bottom: 0px; font-size: 12px; font-weight: 100; left: 17px; top: 5px;" class="position-absolute">Show Password</label>
                        </div>
                    </div>
                    <br>
                    <?php echo $this->session->userdata("salah"); ?>
                    <br>
                    <!-- <a class="btn btn-secondary" href="<?= base_url('login') ?>">Kembali</a> -->
                    <input type="submit" class="btn btn-primary" value="Reset Password"></input>
                </form>
            </div>
        </div>
    <?php } ?>
</body>
<script>
    function myFunction() {
        var x = document.getElementById("pw");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

</html>