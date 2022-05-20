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
    <header> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admin
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">User1</a></li>
            <li><a class="dropdown-item" href="#">User2</a></li>
            <li><a class="dropdown-item" href="#">User3</a></li>
          </ul>
        </li> 
      </ul>
      <form class="d-flex">
        <button class="btn btn-outline-success" type="submit">Logout</button>
      </form>
    </div>
  </div>
</nav>
</header>

<div class="d-flex pt-3" style="background-color: #FFF !important;">
  <div class="card1">
    <div class="p-1 col-md-10 shadow mb-5 ml-container" style="border-radius: 30px;">        
            <div class="mt-5 lato-regular">
                <div class="col-md-12">
                    <div class="p-3  rounded2 p-5" >
                        <div class="row ">
                            <div class="col-md-4 text-center">
                                <h4>Total Items</h4>
                                <h2 class=" lato-bold mt-3 mb-3" id="totalKasus">4.247.320</h2>
                                <h6>+20.748 Barang</h6>
                            </div>
                            
                            <div class="col-md-4 text-center">
                                <h4>Barang Masuk Hari Ini</h4>
                                <h2 class="text-success lato-bold mt-3 mb-3" id="sembuh">4.092.586</h2>
                                <h6> + 234 Barang</h6>
                            </div>
                            <div class="col-md-4 text-center">
                                <h4>Barang Keluar Hari Ini</h4>
                                <h2 class="text-danger lato-bold mt-3 mb-3" id="meninggal">143.519</h2>
                                <h6>-2.332 Barang</h6>
                            </div>
                            <div class="col-md-12 text-center mt-5">
                                <img src="assets/image/icon.png ">
                                <span class="ps-2">Warehouse. Diperbarui jam 19:39 pada tanggal 01 Januari 2022</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                </div>
            </div>
                
                    <div class="mt shadow mb-5 ml-container">
                        <div class="row">
                            <div class="col">
                                <div class="card2" style="background-color:#5DD482; border:none; border-radius: 10px;">
                                    <div class="card-body m-1">
                                <div class="txt1"><p>Total Items</p></div>
                                <div class="txt2"><h1>30.000</h1> </div> 
                                <div class="txt3"><p>Items</p></div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>  
        </div>
     </div>

  </body>
</html>