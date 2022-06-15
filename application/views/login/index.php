<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Icon  -->
    <link href="<?=base_url()?>assets/image/icon.png" rel='shorcut icon'>

    <link rel="stylesheet" href="<?= base_url() ?>node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/login.css">
    <title>Live Stock</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container " style="margin-top: 125px ">
        <div class="row align-self-center">
            <div class="col">
                <center>
                    <div class="card" style="width:25rem ">
                        <div class="card-body">
                            <div class="col-md">
                                <div class="text-center">
                                    <h1 style="color:black">Welcome !</h1>
                                    <p class="text-muted">Login Live Stock</p>
                                </div>
                                <div class="card-body">
                                    <center>
                                    <?php if ($this->session->flashdata('flash')) : ?>
                                        <div id="alert" class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <?= $this->session->flashdata('flash') ?>
                                        </div>
                                        <?php $this->session->unset_userdata('flash');
                                    endif; ?>
                                    <?= validation_errors(); ?>
                                        <form action="login/login" method="POST" autocomplete="off">
                                            <div class="input-container">
                                                <input type="text" id="nip" class="text-input" name="nip" placeholder="Enter your NIP"/>
                                                <small class="form-text text-danger"><?= form_error('nip') ?></small>
                                            </div>
                                            <div class="input-container">
                                                <input type="password" id="password" name="password" class="text-input" placeholder="Enter your Password" />
                                                <small class="form-text text-danger"><?= form_error('password') ?></small>
                                            </div>
                                            <input type="submit" class="btn btn-warning btn-sm" value="Login" id="login">
                                        </form>

                                        <!-- <a href="<?= base_url().'login/preview' ?>">cek</a> -->
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer>
                        <!-- Copyright -->
                        <div class="text-center p-4" style="color: #000">
                        <a href="#" style="text-decoration: none; color: inherit;">
                            <small>© June 2022 <br> Cemindo Gemilang | Telkom University</small>
                        </a>
                        </div>
                        <!-- Copyright -->
                    </footer>
                </center>
            </div>
        </div>
    </div>
</body>

</html>