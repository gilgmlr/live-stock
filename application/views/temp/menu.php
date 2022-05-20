<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/menu.css">
    <title>Live Stock</title>
</head>

<body>
    <nav class="nav-bar">
        <div class="menu-bar">
            <div class="profile">
                <img src="<?= base_url() ?>assets/profile/profile1.jpg" alt="profile" style="border-radius: 100px;">
            </div>
            <div class="menu">
                <div class="main-menu">
                    <ul>
                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                            <a href="<?= base_url(); ?>" class="<?php if (uri_string() === 'dashboard') echo 'actived' ?>">
                                <i class="bi bi-house-door-fill"></i>
                                <div class="position-absolute tooltips">Home</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>" class="<?php if (uri_string() === 'mitra') echo 'actived' ?>">
                                <i class="bi bi-search"></i>
                                <div class="position-absolute tooltips">Search</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>" class="<?php if (uri_string() === 'pengunjung') echo 'actived' ?>">
                                <i class="bi bi-stack"></i>
                                <div class="position-absolute tooltips">Data Stock</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>" class="<?php if (uri_string() === 'kunjungan') echo 'actived' ?>">
                                <i class="bi bi-arrow-down-square-fill"></i>
                                <div class="position-absolute tooltips">Barang Masuk</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>" class="<?php if (uri_string() === 'kunjungan') echo 'actived' ?>">
                                <i class="bi bi-arrow-up-square-fill"></i>
                                <div class="position-absolute tooltips">Barang Keluar</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>" class="<?php if (uri_string() === 'informasi') echo 'actived' ?>">
                                <i class="bi bi-arrow-left-right"></i>
                                <div class="position-absolute tooltips">Peminjaman</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>" class="<?php if (uri_string() === 'informasi') echo 'actived' ?>">
                                <i class="bi bi-arrow-counterclockwise"></i>
                                <div class="position-absolute tooltips">History</div>
                            </a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </nav>
</body>
</html>