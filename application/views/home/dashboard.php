<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/dashboard.css">
    
    <title>Dashboard</title>
  </head>
  <body>
  <div class="d-flex pt-5" style="background-color: #FFF !important;">
    <div class="p-5 col-md-10 shadow mb-5 ml-container" style="border-radius: 30px;">
        <h1>Selamat Datang <span id="nama">Admin GG</span></h1>

        <div class="mt-5">
            <div class="row">
                <div class="col">
                    <div class="card" style="background-color:#5DD482; border:none; border-radius: 10px;">
                        <div class="card-body m-3">
                            <h4>Data Pengunjung</h4>
                            <p style="text-align: center; font-size: 76px;"><b></b></p>
                            <h4 style="text-align: right;"> orang </h4>
                        </div>
                    </div>
                </div>

                <div class="col ms-3">
                    <div class="card" style="background-color:#5DD482; border:none; border-radius: 10px;">
                        <div class="card-body m-3">
                            <h4>Jumlah Mitra</h4>
                            <p style="text-align: center; font-size: 76px;"><b></b> </p>
                            <h4 style="text-align: right;"> Toko </h4>
                        </div>
                    </div>
                </div>

                <div class="col ms-3">
                    <div class="card" style="background-color:#5DD482; border:none; border-radius: 10px;">
                        <div class="card-body m-3">
                            <h4>Jumlah Kunjungan</h4>
                            <p style="text-align: center; font-size: 76px;"><b></b> </p>
                            <h4 style="text-align: right;"> Kunjungan </h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 lato-regular">
                <div class="col-md-12">
                    <div class="p-3 bg-body rounded2 p-5" style="border: 1px solid rgb(221, 221, 221); background-color: whitesmoke !important;">
                        <div class="row ">
                            <div class="col-md-3 text-center">
                                <h4>Total Kasus</h4>
                                <h2 class=" lato-bold mt-3 mb-3" id="totalKasus">4.247.320</h2>
                                <h6>+20.748 kasus</h6>
                            </div>
                            <div class="col-md-3 text-center">
                                <h4>Positif</h4>
                                <h2 class="text-warning lato-bold mt-3 mb-3" id="positif">124.632</h2>
                                <h6>0,10% dari total kasus</h6>
                            </div>
                            <div class="col-md-3 text-center">
                                <h4>Sembuh</h4>
                                <h2 class="text-success lato-bold mt-3 mb-3" id="sembuh">4.092.586</h2>
                                <h6>96,52% dari total kasus</h6>
                            </div>
                            <div class="col-md-3 text-center">
                                <h4>Meninggal</h4>
                                <h2 class="text-danger lato-bold mt-3 mb-3" id="meninggal">143.519</h2>
                                <h6>3,38% dari total kasus</h6>
                            </div>
                            <div class="col-md-12 text-center mt-5">
                                <img src="assets/image/flag.png ">
                                <span class="ps-2">Data oleh <a href="">a.com</a>. Diperbarui jam 19:39 pada tanggal 01 Januari 2022</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  </body>
</html>