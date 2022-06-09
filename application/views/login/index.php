<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- BOOTSTRAP CSS -->
    <!-- <link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
			integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
			crossorigin="anonymous"
		/> -->
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
                                        <form action="login/login" method="POST">
                                            <div class="input-container">
                                                <input type="text" id="nip" class="text-input" name="nip" autocomplete="off" placeholder="Enter your NIP" required />
                                            </div>
                                            <div class="input-container">
                                                <input type="password" id="password" name="password" class="text-input" autocomplete="off" placeholder="Enter your Password" required />
                                            </div>
                                            <input type="submit" class="btn btn-warning btn-sm" value="Login" id="login">
                                        </form>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </div>
</body>

</html>