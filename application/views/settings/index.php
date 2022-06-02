<div class="container" style="margin-top: 80px;">
    <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-body">
            <center>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#Daftar">Add
                    Account</button>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                    data-bs-target="#AddItems">Add
                    Item</button>
            </center>
        </div>
    </div>
</div>
</div>

<!-- Modal Daftar Akun -->
<div class="modal fade" id="Daftar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:40%>
        <div class="modal-content">
            <div class="modal-header" style="background-color: #563d7c">
                <h5 class="modal-title" style="color: gold;" id="exampleModalLabel">Add Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col">
                            <center>
                                <button id="tambah_items" type="submit" class="btn btn-primary">Tambah
                                    Items</button>
                            </center>
                        </div>
                        <div class="col">
                            <center>
                                <button id="batal" type="submit" class="btn btn-danger"
                                    data-bs-dismiss="modal">Batal</button>
                            </center>
                        </div>
                        <div class="col">
                            <center>
                                <button id="simpan" type="submit" class="btn btn-success">Simpan</button>
                            </center>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- AKHIR MODAL  -->


<!-- Modal Add Items -->
<div class="modal fade" id="AddItems" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:30%>
        <div class="modal-content">
            <div class="modal-header" style="background-color: #563d7c">
                <h5 class="modal-title" style="color: gold;" id="exampleModalLabel">Add Items</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Settings/addItem" method="POST">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-sm-12">
                                <label for="" class="col-sm-6 col-form-label">Item Code</label>
                                <input type="text" class="form-control" id="item_code" name="item_code">
                                <label for="" class="col-sm-6 col-form-label">Item Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                                <label for="" class="col-sm-6 col-form-label">Item Specification</label>
                                <input type="text" class="form-control" id="spec" name="spec">

                                
                                <div class="row">
                                    <div class="col">
                                        <label for="formFileMultiple" class="form-label" style="margin-top:8px">Item Image</label>
                                        <input class="form-control" type="file" id="image" name="image" multiple />
                                    </div>
                                </div>
        
                            </div>

                        <div class="modal-footer">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <center>
                                            <button id="batal" type="submit" class="btn btn-danger"
                                                data-bs-dismiss="modal">Batal</button>
                                        </center>
                                    </div>
                                    <div class="col">
                                        <center>
                                            <button id="simpan" type="submit" class="btn btn-success">Simpan</button>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
<!-- AKHIR MODAL  -->
</body>

</html>