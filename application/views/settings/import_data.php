<div class="container" style="margin-top: 80px;">
    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="" data-bs-toggle="modal" data-bs-target="#ImpAcc">
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
            <a href="" data-bs-toggle="modal" data-bs-target="#ImpItems">
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
            <a href="" data-bs-toggle="modal" data-bs-target="#ImpWarehouse">
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
            <a href="" data-bs-toggle="modal" data-bs-target="#ImpIssue">
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
            <a href="" data-bs-toggle="modal" data-bs-target="#ImpReceived">
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
            <a href="" data-bs-toggle="modal" data-bs-target="#ImpInventory">
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
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="" data-bs-toggle="modal" data-bs-target="#ImpUom">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <img src="<?= base_url().'assets/image/import_data.png'?>" style="width:100px" />
                            <h5>Import UoM</h5>
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

        <!-- MODAL Accounts -->
        <div class="modal fade" id="ImpAcc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:30%>
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #563d7c">
                        <h5 class="modal-title" style="color: gold" id="exampleModalLabel"> Import Akun
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= base_url()?>settings/import" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="file" class="form-control" name="file" accept=".xls, .xlsx" required>
                            <input type="text" name="table_name" value="user" hidden>
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

        <!-- MODAL Items -->
        <div class="modal fade" id="ImpItems" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:30%>
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #563d7c">
                        <h5 class="modal-title" style="color: gold" id="exampleModalLabel"> Import Items
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= base_url()?>settings/import" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="file" class="form-control" name="file" accept=".xls, .xlsx" required>
                            <input type="text" name="table_name" value="items" hidden>
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

        <!-- MODAL Warehouse -->
        <div class="modal fade" id="ImpWarehouse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:30%>
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #563d7c">
                        <h5 class="modal-title" style="color: gold" id="exampleModalLabel"> Import Data Warehouse
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= base_url()?>settings/import" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="file" class="form-control" name="file" accept=".xls, .xlsx" required>
                            <input type="text" name="table_name" value="warehouse" hidden>
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

        <!-- MODAL Issue -->
        <div class="modal fade" id="ImpIssue" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:30%>
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #563d7c">
                        <h5 class="modal-title" style="color: gold" id="exampleModalLabel"> Import Data Issue
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= base_url()?>settings/import" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="file" class="form-control" name="file" accept=".xls, .xlsx" required>
                            <input type="text" name="table_name" value="issued" hidden>
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

        <!-- MODAL Receive -->
        <div class="modal fade" id="ImpReceived" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:30%>
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #563d7c">
                        <h5 class="modal-title" style="color: gold" id="exampleModalLabel"> Import Data Received
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= base_url()?>settings/import" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="file" class="form-control" name="file" accept=".xls, .xlsx" required>
                            <input type="text" name="table_name" value="received" hidden>
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

        <!-- MODAL Inventory -->
        <div class="modal fade" id="ImpInventory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:30%>
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #563d7c">
                        <h5 class="modal-title" style="color: gold" id="exampleModalLabel"> Import Data Inventory
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= base_url()?>settings/import" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="file" class="form-control" name="file" accept=".xls, .xlsx" required>
                            <input type="text" name="table_name" value="inventory" hidden>
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

        <!-- MODAL UoM -->
        <div class="modal fade" id="ImpUom" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:30%>
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #563d7c">
                        <h5 class="modal-title" style="color: gold" id="exampleModalLabel"> Import Data Inventory
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= base_url()?>settings/import" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="file" class="form-control" name="file" accept=".xls, .xlsx" required>
                            <input type="text" name="table_name" value="uom" hidden>
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