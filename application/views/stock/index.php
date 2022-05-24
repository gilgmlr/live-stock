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

<div class="container">
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
                <?php
                                    $i = 1;
                                    foreach ($stock as $data) { 
                                ?>

                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $data->item_code ?></td>
                    <td><?php echo $data->item_name ?></td>
                    <td><?php echo $data->item_specification ?></td>
                    <td><?php echo $data->uom ?></td>
                    <td><?php echo $data->location ?></td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Edit</button>
                    </td>
                </tr>

                <?php
                            $i++;
                            }
                        ?>
            </tbody>
        </table>
    </div>
</div>

</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:60%>
        <div class="modal-content">
            <div class="modal-header" style=background-color:#D7A86E>
                <h5 class="modal-title" id="exampleModalLabel">Form Edit Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputno" class="form-label">No</label>
                        <input type="Text" class="form-control" id="exampleInputno" aria-describedby="no">
                    </div>
                    <div class="mb-3">
                        <label for="exampleItemCode" class="form-label">Item Code</label>
                        <input type="Text" class="form-control" id="exampleItemCode">
                    </div>
                    <div class="mb-3">
                        <label for="exampleItemName" class="form-label">Item Name</label>
                        <input type="Text" class="form-control" id="exampleItemName">
                    </div>
                    <div class="mb-3">
                        <label for="exampleItemSpec" class="form-label">Item Spec</label>
                        <input type="Text" class="form-control" id="exampleItemSpec">
                    </div>
                    <div class="mb-3">
                        <label for="exampleUoM" class="form-label">UoM</label>
                        <input type="Text" class="form-control" id="exampleUoM">
                    </div>
                    <div class="mb-3">
                        <label for="exampleLocation" class="form-label">Location</label>
                        <input type="Text" class="form-control" id="exampleLocation">
                    </div>

                </form>
            </div>
            <div class="btnModal">
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save changes</button>
                </div>
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