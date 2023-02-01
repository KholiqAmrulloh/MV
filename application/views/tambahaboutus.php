<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tambah About Us</title>
    <link href="<?= base_url() ?>assets/css/styles.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>vendor/sbadmin/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <script src="<?= base_url() ?>assets/js/all.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3"><img src="<?= base_url(); ?>assets/img/logopt.png" width="80px" height="80px"></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <ul class="navbar-nav ms-md-0">
            <li class="nav-item dropdown position-absolute" style="right: 12px; bottom: 8px;">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="<?= site_url('login/logout') ?>">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav"><br><br>
                        <a class="nav-link" href="<?= site_url('dashboard') ?>">
                            &nbsp;<div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                            Pesan
                        </a>
                        <a class="nav-link  active" href="<?= site_url('aboutus') ?>">
                            &nbsp;<div class="sb-nav-link-icon"><i class="fas fa-font"></i></div>
                            About Us
                        </a>
                        <a class="nav-link" href="<?= site_url('portofolio') ?>">
                            &nbsp;<div class="sb-nav-link-icon"><i class="fas fa-parking"></i></div>
                            Portofolio
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container">
                    <div class="text-left font-weight-bold text-uppercase" style="font-size: 30px;">Form Tambah About Us</div>
                    <!-- <form method="post" id="input_form" action="<?= base_url('TambahPort/tambah') ?>"> -->
                    <?= form_open_multipart('AboutUs/Tambah'); ?>
                    <div class="form-group">
                        <label for="FormControlJudul" class="font-weight-bold">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Inputkan Judul" required>
                    </div>
                    <div class="form-group">
                        <label for="FormControlImage1" class="font-weight-bold">Konten Text</label>
                        <input type="text" class="form-control" name="kontentext" id="kontentext" placeholder="Inputkan Konten Text">
                    </div>
                    <div class="form-group">
                        <label for="FormControlImage2" class="font-weight-bold">Konten Gambar</label>
                        <input type="file" class="form-control-file" name="kontengambar" id="kontengambar">
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <?= form_close(); ?>
                    <!-- </form> -->
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>vendor/sbadmin/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>vendor/sbadmin/js/datatables-simple-demo.js"></script>
</body>

</html>