<<<<<<< HEAD
<!-- <body>
    <header>
        <div class="navatas">
            <nav class="navbar navbar-expand-lg"style = background-color:#A64B2A>
                <div class="container-fluid">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        </ul>
                        <form class="d-flex" action="login/logout">
                            <button class="btn btn-danger" type="submit">Logout</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="d-flex">
        <nav class="nav-bar"style = background-color:#A64B2A>
            <div class="menu-bar">
                <div class="menu borders">
                    <div class="main-menu ">
                        <ul>
                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                                <a href="<?= base_url(); ?>" class="<?php if (uri_string() === 'dashboard') echo 'actived' ?>">
                                    <i class="bi bi-house-door-fill"></i>
                                    <div class="position-absolute tooltips">Home</div>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url(); ?>" class="<?php if (uri_string() === 'search') echo 'actived' ?>">
                                    <i class="bi bi-search"></i>
                                    <div class="position-absolute tooltips">Search</div>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url(); ?>" class="<?php if (uri_string() === 'stock') echo 'actived' ?>">
                                    <i class="bi bi-stack"></i>
                                    <div class="position-absolute tooltips">Data Stock</div>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url(); ?>" class="<?php if (uri_string() === 'masuk') echo 'actived' ?>">
                                    <i class="bi bi-arrow-down-square-fill"></i>
                                    <div class="position-absolute tooltips">Barang Masuk</div>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url(); ?>" class="<?php if (uri_string() === 'keluar') echo 'actived' ?>">
                                    <i class="bi bi-arrow-up-square-fill"></i>
                                    <div class="position-absolute tooltips">Barang Keluar</div>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url(); ?>" class="<?php if (uri_string() === 'peminjaman') echo 'actived' ?>">
                                    <i class="bi bi-arrow-left-right"></i>
                                    <div class="position-absolute tooltips">Peminjaman</div>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url(); ?>" class="<?php if (uri_string() === 'history') echo 'actived' ?>">
                                    <i class="bi bi-arrow-counterclockwise"></i>
                                    <div class="position-absolute tooltips">History</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </nav> -->

<div class="col container-fluid mt-5">
    <!--  ISI DISINI  -->
    <table id="warehouse" class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Item Code</th>
                <th>Item Name</th>
                <th>Item Spec</th>
                <th>UoM</th>
                <th>Location</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- ISI KONFIG BACKEND DISINI -->

        </tbody>
    </table>
</div>
=======
<div class="container" style="margin-top: 80px;">
    <div class="card">
        <div class="card-body">
            <form>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">No GR</label>
                            <input type="email" class="form-control" id="inputText">
                            <label for="inputEmail3" class="col-sm-6 col-form-label">Date</label>
                            <input type="email" class="form-control" id="inputText">
                        </div>
                        <div class="col-sm-6">
                            <label for="inputEmail3" class="col-sm-6 col-form-label">Requestor</label>
                            <input type="email" class="form-control" id="inputText">
                            <label for="inputEmail3" class="col-sm-6 col-form-label">Dept Requestor</label>
                            <input type="email" class="form-control" id="inputText">
                            <label for="inputEmail3" class="col-sm-6 col-form-label">Section Requestor</label>
                            <input type="email" class="form-control" id="inputText">
                        </div>
                        <div class="col-sm-12">
                            <label for="floatingTextarea">Activity Description</label>
                            <textarea class="form-control" placeholder="Leave a description here"
                                id="floatingTextarea"></textarea>
                        </div>
                        <div class="col-sm-6">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Item Number</label>
                            <input type="email" class="form-control" id="inputText">

                            <label for="floatingTextarea">Items Description</label>
                            <textarea class="form-control" placeholder="Leave a description here"
                                id="floatingTextarea"></textarea>

                            <label for="inputEmail3" class="col-sm-4 col-form-label">Request Qty</label>
                            <input type="email" class="form-control" id="inputText">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Issued Qty</label>
                            <input type="email" class="form-control" id="inputText">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">UoM</label>
                            <input type="email" class="form-control" id="inputText">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Reason Code</label>
                            <input type="email" class="form-control" id="inputText">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Cost Center</label>
                            <input type="email" class="form-control" id="inputText">


                        </div>
                        <div class="col-sm-6">
                            <label for="inputEmail3" class="col-sm-6 col-form-label">Request by</label>
                            <input type="email" class="form-control" id="inputText">
                            <label for="inputEmail3" class="col-sm-6 col-form-label">Approved by</label>
                            <input type="email" class="form-control" id="inputText">
                            <label for="inputEmail3" class="col-sm-6 col-form-label">Issued by</label>
                            <input type="email" class="form-control" id="inputText">
                            <label for="inputEmail3" class="col-sm-6 col-form-label">Recived by</label>
                            <input type="email" class="form-control" id="inputText">

                            <div class="container">
                                <div class="row align-items-end">
                                    <div class="col">
                                        <button type="button" class="btn btn-primary">Tambah Items</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-primary">Batal</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
>>>>>>> d9f60643b5e40ae6c6e99af6fe383fcc77181cba
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</body>
<script>
$(document).ready(function() {
    $('#warehouse').DataTable();
});
</script>

</html>