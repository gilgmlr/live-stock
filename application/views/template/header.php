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
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/barangkeluar.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/search.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" /> -->

    <!-- IconGoogle -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

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
            <nav class="navbar navbar-expand-md" style=background-color:#563d7c>
                <div class="container-fluid">
                    <h4 style="color:gold"><?= $judul ?></h4>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        </ul>
                        <h5 style="color:gold">Welcome Admin, <?= $this->session->userdata(""); ?></h5>
                    </div>
                </div>
            </nav>


            <div class="d-flex">


                <div class="position-fixed">
                    <nav class="nav-bar" style=background-color:#563d7c>
                        <div class="menu-bar">
                            <div class="menu borders">
                                <div class="main-menu ">
                                    <ul>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                                            <a href="<?= base_url(); ?>dashboard"
                                                class="<?php if (uri_string() === 'dashboard') echo 'actived' ?>">
                                                <i class="bi bi-house-door-fill"></i>
                                                <div class="position-absolute tooltips">
                                                    <h5>Dashboard</h5>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>catalog"
                                                class="<?php if (uri_string() === 'catalog') echo 'actived' ?>">
                                                <i class="bi bi-microsoft"></i>
                                                <div class="position-absolute tooltips">
                                                    <h5>Catalog</h5>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>inventory"
                                                class="<?php if (uri_string() === 'inventory') echo 'actived' ?>">
                                                <i class="bi bi-stack"></i>
                                                <div class="position-absolute tooltips">
                                                    <h5>Inventory</h5>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>received"
                                                class="<?php if (uri_string() === 'received') echo 'actived' ?>">
                                                <i class="bi bi-layer-backward"></i>
                                                <div class="position-absolute tooltips">
                                                    <h5>Received</h5>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>issue"
                                                class="<?php if (uri_string() === 'issue') echo 'actived' ?>">
                                                <i class="bi bi-layer-forward"></i>
                                                <div class="position-absolute tooltips">
                                                    <h5>Issue</h5>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>lending"
                                                class="<?php if (uri_string() === 'lending') echo 'actived' ?>">
                                                <i class="bi bi-arrow-left-right"></i>
                                                <div class="position-absolute tooltips">
                                                    <h5>Lending</h5>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>history"
                                                class="<?php if (uri_string() === 'history') echo 'actived' ?>">
                                                <i class="bi bi-arrow-counterclockwise"></i>
                                                <div class="position-absolute tooltips">
                                                    <h5>History</h5>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>settings"
                                                class="<?php if (uri_string() === 'settings') echo 'actived' ?>">
                                                <i class="bi bi-nut-fill"></i>
                                                <div class="position-absolute tooltips">
                                                    <h5>Settings</h5>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>login"
                                                class="<?php if (uri_string() === 'login') echo 'actived' ?>">
                                                <i class="bi bi-arrow-left-square-fill"></i>
                                                <div class="position-absolute tooltips">
                                                    <h5>Logout</h5>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>