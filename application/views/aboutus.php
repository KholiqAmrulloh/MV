<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>About Us</title>
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
        <a class="navbar-brand ps-3"><img src="<?php base_url(); ?>assets/img/logopt.png" width="80px" height="80px"></a>
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
                        <a class="nav-link active" href="<?= site_url('aboutus') ?>">
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
                <div class="container-fluid px-4" style="font-size: 20px">
                    <h1 class="mt-4">About Us</h1>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data About Us
                            <a href="<?= base_url('aboutus/formtambahaboutus') ?>" class="btn btn-success" style="float: right;"><i class="fa fa-plus"></i> Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <section>
                                <table id="datatablesSimple" style="font-size: 15px">
                                    <thead align="center">
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Konten Text</th>
                                            <th>Konten Gambar</th>
                                            <th>Tools</th>
                                        </tr>
                                    </thead>
                                    <tfoot align="center">
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Konten Text</th>
                                            <th>Konten Gambar</th>
                                            <th>Tools</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($About as $adn) { ?>
                                            <tr align="center">
                                                <td><?= $no++; ?></td>
                                                <td><?= $adn['judul']; ?></td>
                                                <td><?= $adn['konten_text']; ?></td>
                                                <td>
                                                    <?php if ($adn['konten_gambar']) { ?>
                                                        <div class="position-relative">
                                                            <img src="<?php echo base_url('assets/img/upload/' . $adn['konten_gambar']); ?>" style="width: 60px; height:60px">
                                                            <button id="btn1" class="position-absolute fa fa-times" data-toggle="modal" data-target="#modalDelete1" style="color: red; font-size: 20px; right: 1px; top: -8px" onclick="$('#modalDelete1 #formDelete').attr('action', '<?= site_url('AboutUs/hapusImage/' . $adn['number'] . '/1'); ?>')"></button>
                                                        </div>
                                                    <?php } ?>
                                                </td>
                                                <td align="center">
                                                    <button class="btn btn-primary btn-edit" data-toggle="modal" data-target="#modalEdit<?= $adn['number']; ?>"><i class="fa fa-pen"></i></button>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#modalDelete" onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('AboutUs/hapus/' . $adn['number']); ?>'); $('#idDeleteText').text(<?= $adn['number']; ?>)"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </section>

                            <!-- modal hapus  -->
                            <div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="dataDosen" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="dataDosen">Warning!</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="modal-title" id="databarang">Apakah anda yakin akan menghapus data ini ?</h6>
                                        </div>
                                        <div class="modal-footer">
                                            <form id="formDelete" action="" method="POST">
                                                <button type="reset" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end modal hapus -->

                            <!-- modal hapus image  -->
                            <div class="modal fade" id="modalDelete1" tabindex="-1" aria-labelledby="dataDosen" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="dataDosen">Warning!</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="modal-title" id="databarang">Apakah anda yakin akan menghapus gambar ini ?</h6>
                                        </div>
                                        <div class="modal-footer">
                                            <form id="formDelete" action="" method="POST">
                                                <button type="reset" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end modal hapus image -->

                            <!-- modal edit -->
                            <?php
                            $no = 0;
                            foreach ($About as $adn) : $no++; ?>
                                <div class="modal fade" id="modalEdit<?= $adn['number']; ?>" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="dataDosen">Form Edit Data About Us</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <?= form_open_multipart('AboutUs/edit'); ?>
                                                <input type="hidden" name="id" value="<?= $adn['number'] ?>">
                                                <div class="form-group">
                                                    <label class="control-label" for="judul">Judul</label>
                                                    <input type="text" name="judul" class="form-control" id="judul" value="<?= $adn['judul'] ?>" required>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label" for="image1">Konten Text</label>
                                                    <input type="text" name="kontentext" class="form-control" id="kontentext" value="<?= $adn['konten_text'] ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label" for="image2">Konten Gambar</label>
                                                    <input type="file" name="kontengambar" class="form-control" id="kontengambar" value="">
                                                </div>
                                                <div class=" modal-footer">
                                                    <button type="reset" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-success"> Simpan </button>
                                                </div>
                                                <?= form_close(); ?>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
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