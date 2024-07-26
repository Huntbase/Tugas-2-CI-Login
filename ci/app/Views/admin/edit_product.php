<!-- app/Views/admin/add_product.php -->
<!DOCTYPE html>
<html>



<head>
    <title>Add Product</title>
</head>

<body>
    <!doctype html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
    <!--[if gt IE 8]><!-->
    <html class="no-js" lang=""> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Pettopia</title>
        <meta name="description" content="Sufee Admin - HTML5 Admin Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="favicon.ico">

        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/themify-icons.css">
        <link rel="stylesheet" href="/css/flag-icon.min.css">
        <link rel="stylesheet" href="/css/cs-skin-elastic.css">
        <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
        <link rel="stylesheet" href="/scss/style.css">
        <link href="/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

        <style>
            .btn {
                border-radius: 20px;
            }
        </style>

        <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    </head>

    <body>



        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="./"><img class="logo_image w-50 h-50" src="<?= base_url('image') ?>/Navbar/Logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="<?= base_url('image') ?>/Navbar/Logo.png" alt="Logo"></a>
                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="add_product">
                            <a href="<?= base_url('admin') ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                        </li>
                        <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                        <li class="tables">
                            <a href="<?= base_url('admin/tablesProduct') ?>" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        </li>
                        <li class="active">
                            <a href="<?= base_url('admin/showAddProductForm') ?>" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                        </li>
                        <h3 class="menu-title">Authentication</h3><!-- /.menu-title -->
                        <li class="logout">
                            <a aria-haspopup="true" aria-expanded="false" href="<?= base_url('auth') ?>"><i class="menu-icon fa fa-sign-out"></i>Logout</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside><!-- /#left-panel -->

        <!-- Left Panel -->

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <!-- Header-->
            <header id="header" class="header">

                <div class="header-menu">

                    <div class="col-sm-7">
                        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                        <div class="header-left">
                            <button class="search-trigger"><i class="fa fa-search"></i></button>
                            <div class="form-inline">
                                <form class="search-form">
                                    <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                    <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                                </form>
                            </div>

                            <div class="dropdown for-notification">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bell"></i>
                                    <span class="count bg-danger"></span>
                                </button>
                            </div>

                            <div class="dropdown for-message">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-email"></i>
                                    <span class="count bg-primary"></span>
                                </button>
                            </div>
                        </div>
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

                        <div class="language-select dropdown" id="language-select">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true" aria-expanded="true">
                                <i class="flag-icon flag-icon-us"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="language">
                                <div class="dropdown-item">
                                    <span class="flag-icon flag-icon-fr"></span>
                                </div>
                                <div class="dropdown-item">
                                    <i class="flag-icon flag-icon-es"></i>
                                </div>
                                <div class="dropdown-item">
                                    <i class="flag-icon flag-icon-us"></i>
                                </div>
                                <div class="dropdown-item">
                                    <i class="flag-icon flag-icon-it"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </header><!-- /header -->

            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Menu</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Menu</a></li>
                                <li class="active">Forms</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header-->
            <div class="container mt-5">
                <h2>Edit Product</h2>
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('errors')) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('errors') ?></div>
                <?php endif; ?>
                <form action="<?= base_url('admin/updateProduct/' . $product['id']) ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $product['name'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price</label>
                        <input type="number" class="form-control" id="price" name="price" value="<?= $product['price'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Product Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required><?= $product['description'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Product Category</label>
                        <select class="form-control" id="category_id" name="category_id" required>
                            <?php foreach ($categories as $category) : ?>
                                <option value="<?= $category['id'] ?>" <?= $product['category_id'] == $category['id'] ? 'selected' : '' ?>><?= $category['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Product Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                        <img src="<?= base_url('uploads/' . $product['image']) ?>" alt="<?= $product['name'] ?>" width="100" class="mt-2">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Update Product</button>
                </form>
            </div>


            <script>
                // Function untuk validasi form sebelum pengiriman
                function validateForm() {
                    var priceInput = document.getElementById('price');
                    var priceValue = priceInput.value.trim();

                    // Hapus "Rp." dan spasi dari nilai input (jika ada)
                    priceValue = priceValue.replace('Rp. ', '');
                    priceValue = priceValue.replace('Rp.', '');

                    // Hapus titik sebagai pemisah ribuan jika ada
                    priceValue = priceValue.replace(/\./g, '');

                    // Validasi apakah nilai input hanya berisi angka
                    // if (!/^\d+$/.test(priceValue)) {
                    //     alert('The price field must contain only numbers.');
                    //     return false;
                    // }

                    // Format ulang dengan menambahkan "Rp." dan titik sebagai pemisah ribuan
                    var parsedValue = parseFloat(priceValue); // Konversi ke angka

                    // var formattedNumber = parsedValue.toLocaleString('id-ID', {
                    //     minimumFractionDigits: 2,
                    //     maximumFractionDigits: 2
                    // });

                    // Set nilai input dengan format yang sudah diformat
                    priceInput.value = 'Rp. ' + formattedNumber;

                    // Pastikan nilai yang sudah diformat tetap diinputkan ke form sebelum pengiriman
                    return true;
                }
            </script>

            <div class="content mt-3">

            </div> <!-- .content -->
        </div><!-- /#right-panel -->

        <!-- Right Panel -->

        <script src="/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>

        <script src="/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="/js/plugins.js"></script>
        <script src="/js/main.js"></script>
        <script src="/js/lib/chart-js/Chart.bundle.js"></script>
        <script src="/js/dashboard.js"></script>
        <script src="/js/widgets.js"></script>
        <script src="/js/lib/vector-map/jquery.vmap.js"></script>
        <script src="/js/lib/vector-map/jquery.vmap.min.js"></script>
        <script src="/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
        <script src="/js/lib/vector-map/country/jquery.vmap.world.js"></script>
        <script>
            (function($) {
                "use strict";

                jQuery('#vmap').vectorMap({
                    map: 'world_en',
                    backgroundColor: null,
                    color: '#ffffff',
                    hoverOpacity: 0.7,
                    selectedColor: '#1de9b6',
                    enableZoom: true,
                    showTooltip: true,
                    values: sample_data,
                    scaleColors: ['#1de9b6', '#03a9f5'],
                    normalizeFunction: 'polynomial'
                });
            })(jQuery);
        </script>

    </body>

    </html>
</body>

</html>