<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/font.css">
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
                            <a href="<?= base_url(); ?>dashboard" class="<?php if (uri_string() === 'dashboard') echo 'actived' ?>">
                                <i class="bi bi-house-door-fill"></i>
                                <div class="position-absolute tooltips">Beranda</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>mitra" class="<?php if (uri_string() === 'mitra') echo 'actived' ?>">
                                <i class="bi bi-stack"></i>
                                <div class="position-absolute tooltips">Database</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>pengunjung" class="<?php if (uri_string() === 'pengunjung') echo 'actived' ?>">
                                <i class="bi bi-file-earmark-text-fill"></i>
                                <div class="position-absolute tooltips">Surat-Surat</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>kunjungan" class="<?php if (uri_string() === 'kunjungan') echo 'actived' ?>">
                                <i class="bi bi-graph-up-arrow"></i>
                                <div class="position-absolute tooltips">Statistik</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>informasi" class="<?php if (uri_string() === 'informasi') echo 'actived' ?>">
                                <i class="bi bi-info-circle-fill"></i>
                                <div class="position-absolute tooltips">Informasi</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="button-menu">
                    <ul>
                        <li id="keluar" class="">
                            <a href="<?= base_url(); ?>home/logout" class="out bg-danger text-white">
                                <i class="bi bi-box-arrow-right"></i>
                                <div class="position-absolute tooltips bg-danger text-white">Logout</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>