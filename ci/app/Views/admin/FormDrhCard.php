<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Pettopia</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/themify-icons.css">
    <link rel="stylesheet" href="/css/flag-icon.min.css">
    <link rel="stylesheet" href="/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="/scss/style.css">
    <link href="/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <style>
        .btn {
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img class="logo_image w-50 h-50" src="<?= base_url('image') ?>/Navbar/Logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="<?= base_url('image') ?>/Navbar/Logo.png" alt="Logo"></a>
            </div>

            <div id="active" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?= base_url('admin') ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-gift"></i>Produk
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="<?= base_url('admin/tablesProduct') ?>">Rincian Produk</a></li>
                            <li><i class="fa fa-list"></i><a href="<?= base_url('admin/showAddProductForm') ?>">Form Tambah Produk</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-calendar"></i>Layanan
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-paw"></i><a href="<?= base_url('admin/FormPenitipanHewan') ?>">Penitipan Hewan</a></li>
                            <li><i class="fa fa-shower"></i><a href="<?= base_url('admin/FormGroomingHewan') ?>">Grooming Hewan</a></li>
                            <li><i class="fa fa-stethoscope"></i><a href="<?= base_url('admin/FormDokterHewan') ?>">Dokter Hewan</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="User" aria-expanded="false">
                            <i class="menu-icon fa fa-user"></i>User </a>
                    </li>
                    <h3 class="menu-title">Authentication</h3><!-- /.menu-title -->
                    <li class="logout">
                        <a aria-haspopup="true" aria-expanded="false" href="<?= base_url('auth') ?>"><i class="menu-icon fa fa-sign-out"></i>Logout</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="/image/Navbar/profil.png" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Booking Dokter Hewan</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Layanan</a></li>
                            <li class="active">Dokter Hewan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Identitas</strong>
                            </div>
                            <div class="card-body">
                                <?php if (session()->has('success')) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <?= session('success') ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif; ?>
                                <?php if (session()->has('error')) : ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?= session('error') ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif; ?>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Nomor HP</th>
                                            <th>Nama Hewan</th>
                                            <th>Spesies Hewan</th>
                                            <th>Ras Hewan</th>
                                            <th>Jenis Kelamin Hewan</th>
                                            <th>Tanggal Lahir Hewan</th>
                                            <th>Berat Hewan</th>
                                            <th>Jenis Layanan</th>
                                            <th>Tanggal Booking</th>
                                            <th>Waktu Booking</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($formdokter as $formdokter) : ?>
                                            <tr>
                                                <td><?= $formdokter['nama'] ?></td>
                                                <td><?= $formdokter['nomor_hp'] ?></td>
                                                <td><?= $formdokter['nama_hewan'] ?></td>
                                                <td><?= $formdokter['spesies_hewan'] ?></td>
                                                <td><?= $formdokter['ras_hewan'] ?></td>
                                                <td><?= $formdokter['jenis_kelamin'] ?></td>
                                                <td><?= $formdokter['tanggal_lahir_hewan'] ?></td>
                                                <td><?= $formdokter['berat_hewan'] ?></td>
                                                <td><?= $formdokter['jenis_layanan'] ?></td>
                                                <td><?= $formdokter['tanggal_booking'] ?></td>
                                                <td><?= $formdokter['waktu_booking'] ?></td>
                                                <td>
                                                    <form action="<?= base_url('admin/deleteDokterHewan/' . $formdokter['id']) ?>" method="post" style="display:inline-block;">
                                                        <?= csrf_field() ?>
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?')">Delete</button>
                                                    </form>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/plugins.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/lib/data-table/datatables.min.js"></script>
    <script src="/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="/js/lib/data-table/jszip.min.js"></script>
    <script src="/js/lib/data-table/pdfmake.min.js"></script>
    <script src="/js/lib/data-table/vfs_fonts.js"></script>
    <script src="/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="/js/lib/data-table/buttons.print.min.js"></script>
    <script src="/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="/js/lib/data-table/datatables-init.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
        });
    </script>
</body>

</html>