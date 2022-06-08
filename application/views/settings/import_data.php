<div class="container" style="margin-top: 80px;">
    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "settings/view_import_data" ?>" data-bs-toggle="modal"
                data-bs-target="#ImpAcc">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <img src="<?= base_url().'assets/image/account.png'?>" style="width:100px" />
                            <h5>Import Account</h5>
                        </center>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "settings/view_import_data" ?>" data-bs-toggle="modal"
                data-bs-target="#ImpItems">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <img src="<?= base_url().'assets/image/import_data.png'?>" style="width:100px" />
                            <h5>Import Items</h5>
                        </center>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "settings/view_import_data" ?>" data-bs-toggle="modal"
                data-bs-target="#ImpWarehouse">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <img src="<?= base_url().'assets/image/import_data.png'?>" style="width:100px" />
                            <h5>Import Data Warehouse</h5>
                        </center>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "settings/view_import_data" ?>" data-bs-toggle="modal"
                data-bs-target="#ImpIssue">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <img src="<?= base_url().'assets/image/import_data.png'?>" style="width:100px" />
                            <h5>Import Issue</h5>
                        </center>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "settings/view_import_data" ?>" data-bs-toggle="modal"
                data-bs-target="#ImpReceived">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <img src="<?= base_url().'assets/image/import_data.png'?>" style="width:100px" />
                            <h5>Import Received</h5>
                        </center>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "settings/view_import_data" ?>" data-bs-toggle="modal"
                data-bs-target="#ImpInventory">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <img src="<?= base_url().'assets/image/import_data.png'?>" style="width:100px" />
                            <h5>Import Inventory</h5>
                        </center>
                    </div>
                </div>
            </a>
        </div>

        <!-- <form action="<?php echo base_url();?>settings/excel" method="post" enctype="multipart/form-data">
            Upload excel file :
            <input type="file" class="form-control" name="file" accept=".xls, .xlsx" required>
            <input type="submit" name="submit" value="Upload" />
        </form> -->

        <!-- MODAL Add MI NO -->
        <div class="modal fade" id="ImpAcc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:50%>
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #563d7c">
                        <h5 class="modal-title" style="color: gold" id="exampleModalLabel"> Import Akun
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= base_url()?>issue/addMiCode" method="POST">
                        <div class="modal-body">
                            <input type="file" class="form-control" name="file" accept=".xls, .xlsx" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button id="submit" type="submit" name="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Modal -->
        <!-- MODAL Add MI NO -->
        <div class="modal fade" id="ImpItems" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:50%>
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #563d7c">
                        <h5 class="modal-title" style="color: gold" id="exampleModalLabel"> Import Items
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= base_url()?>issue/addMiCode" method="POST">
                        <div class="modal-body">
                            <input type="file" class="form-control" name="file" accept=".xls, .xlsx" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button id="submit" type="submit" name="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Modal -->
        <!-- MODAL Add MI NO -->
        <div class="modal fade" id="ImpWarehouse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:50%>
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #563d7c">
                        <h5 class="modal-title" style="color: gold" id="exampleModalLabel"> Import Data Warehouse
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= base_url()?>issue/addMiCode" method="POST">
                        <div class="modal-body">
                            <input type="file" class="form-control" name="file" accept=".xls, .xlsx" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button id="submit" type="submit" name="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Modal -->
        <!-- MODAL Add MI NO -->
        <div class="modal fade" id="ImpIssue" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:50%>
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #563d7c">
                        <h5 class="modal-title" style="color: gold" id="exampleModalLabel"> Import Data Issue
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= base_url()?>issue/addMiCode" method="POST">
                        <div class="modal-body">
                            <input type="file" class="form-control" name="file" accept=".xls, .xlsx" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button id="submit" type="submit" name="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Modal -->
        <!-- MODAL Add MI NO -->
        <div class="modal fade" id="ImpReceived" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:50%>
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #563d7c">
                        <h5 class="modal-title" style="color: gold" id="exampleModalLabel"> Import Data Received
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= base_url()?>issue/addMiCode" method="POST">
                        <div class="modal-body">
                            <input type="file" class="form-control" name="file" accept=".xls, .xlsx" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button id="submit" type="submit" name="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Modal -->
        <!-- MODAL Add MI NO -->
        <div class="modal fade" id="ImpInventory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:50%>
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #563d7c">
                        <h5 class="modal-title" style="color: gold" id="exampleModalLabel"> Import Data Inventory
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= base_url()?>issue/addMiCode" method="POST">
                        <div class="modal-body">
                            <input type="file" class="form-control" name="file" accept=".xls, .xlsx" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button id="submit" type="submit" name="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Modal -->
    </div>
</div>