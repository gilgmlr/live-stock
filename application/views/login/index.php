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


    <div class="card2" style="background-color:#5C567B; border:none; border-radius: 10px;">
        <div class="card1">
            <div class="card-body m-1">
                <div class="text-center">
                    <h1>Selamat Datang !</h1>
                    <p class="text-muted">Login untuk masuk ke Warehouse.</p>
                    <center>
                        <form action="login/login" method="POST">
                            <div class="input-container">
                                <input type="text" id="user" class="text-input" name="user" autocomplete="off"
                                    placeholder="Enter your username" required />
                                <label class="label" for="username">NIP</label>
                            </div>
                            <div class="input-container">
                                <input type="text" id="password" name="password" class="text-input" autocomplete="off"
                                    placeholder="Enter your username" required />
                                <label class="label" for="username">Password</label>
                            </div>
                            <input type="submit" class="btn btn-danger" value="Login" id="login">

                        </form>
                    </center>
                </div>
            </div>
        </div>
    </div>




    <script src="assets/javascript/login.js"></script>


</body>



</html>