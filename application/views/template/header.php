<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/header.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/dashboard.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/stock.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/login.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/barangmasuk.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/search.css">

    <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" media="screen"
        href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Modal -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>



    <title><?php echo $judul ?></title>
</head>

<body>
    <header>
        <div class="fixed-top">
            <nav class="navbar navbar-expand-md" style=background-color:#48416c>
                <div class="container-fluid">
                    <h5><?php echo $judul ?></h1>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            </ul>
                            <form class="d-flex" action="login/logout">
                                <button class="logout btn-danger" type="submit">Logout</button>
                            </form>
                        </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="d-flex">

        <div class="fixed">
            <nav class="nav-bar" style=background-color:#48416c>
                <div class="menu-bar">
                    <div class="menu borders">
                        <div class="main-menu ">
                            <ul>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                                    <a href="<?= base_url(); ?>dashboard"
                                        class="<?php if (uri_string() === 'dashboard') echo 'actived' ?>">
                                        <i class="bi bi-house-door-fill"></i>
                                        <div class="position-absolute tooltips">Home</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>search"
                                        class="<?php if (uri_string() === 'search') echo 'actived' ?>">
                                        <i class="bi bi-search"></i>
                                        <div class="position-absolute tooltips">Search</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>stock"
                                        class="<?php if (uri_string() === 'stock') echo 'actived' ?>">
                                        <i class="bi bi-stack"></i>
                                        <div class="position-absolute tooltips">Data Stock</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>barang_masuk"
                                        class="<?php if (uri_string() === 'barang_masuk') echo 'actived' ?>">
                                        <i class="bi bi-arrow-down-square-fill"></i>
                                        <div class="position-absolute tooltips">Barang Masuk</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>barang_keluar"
                                        class="<?php if (uri_string() === 'barang_keluar') echo 'actived' ?>">
                                        <i class="bi bi-arrow-up-square-fill"></i>
                                        <div class="position-absolute tooltips">Barang Keluar</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>peminjaman"
                                        class="<?php if (uri_string() === 'peminjaman') echo 'actived' ?>">
                                        <i class="bi bi-arrow-left-right"></i>
                                        <div class="position-absolute tooltips">Peminjaman</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>history"
                                        class="<?php if (uri_string() === 'history') echo 'actived' ?>">
                                        <i class="bi bi-arrow-counterclockwise"></i>
                                        <div class="position-absolute tooltips">History</div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </nav>
        </div>