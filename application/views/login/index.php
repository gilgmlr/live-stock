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

    <div class="text-center">
        <div class="row">
            <div class="col-4 ">
                <div class="div">
                    <div class="row">
                        <img class="logo" src="assets/image/logo-cemindo-gemilang.png" width=400px height=400px
                            alt="logo" />
                        <h1>Selamat Datang !</h1>
                        <p class="text-muted">Login untuk masuk ke Warehouse.</p>
                    </div>
                    <div class="container">
                        <!-- <form action="login/login" method="POST">
									<div class="form-group">
										<input
											type="text"
											class="form-control"
											id="user"
											name="user"
											placeholder="Username / NIP"
											required
										/>
									</div>
									<p></p>
									<div class="form-group">
										<input
											type="password"
											class="form-control"
											id="password"
											name="password"
											placeholder="Password"
											required
										/>
									</div>
									<p></p>
									<input type="submit" class="btn btn-danger" value="Login" id="login">
								</form> -->
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
                    </div>
                </div>
            </div>
            <div class="col-8">
                <img class="bg" src="assets/image/home-banner.jpeg" alt="background" />
            </div>
        </div>
    </div>

    <script src="assets/javascript/login.js"></script>


</body>



</html>