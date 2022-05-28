<div class="container" style="margin-top: 80px;">
    <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-body">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="card shadow p-2 mb-5 bg-white rounded">
                            <div class="card-body">
                                MI
                            </div>
                            <div class="card-footer">
                                <center>
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#MI">Material Issue</button>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow p-2 mb-5 bg-white rounded">
                            <div class="card-body">
                                WO
                            </div>
                            <div class="card-footer">
                                <center>
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#WO">Work Order</button>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow p-2 mb-5 bg-white rounded">
                            <div class="card-body">
                                WT
                            </div>
                            <div class="card-footer">
                                <center>
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#WT">Warehouse Transfer</button>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MODAL MI-->
            <div class="modal fade" id="MI" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:60%>
                    <div class="modal-content">
                        <div class="modal-header" style=background-color:#563d7c>
                            <h5 class="modal-title" style=color:white id="exampleModalLabel">Form Material Issue</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="barang_keluar/tambahBarangKeluar" method="POST">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-sm-6">
                                            <label class="col-sm-2 col-form-label">No GI</label>
                                            <input type="text" class="form-control" id="no_gr">
                                            <label class="col-sm-6 col-form-label">Date</label>
                                            <input type="text" class="form-control" id="date">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="" class="col-sm-6 col-form-label">Requestor</label>
                                            <input type="text" class="form-control" id="requestor">
                                            <label for="" class="col-sm-6 col-form-label">Dept Requestor</label>
                                            <input type="text" class="form-control" id="dept_requestor">
                                            <label for="" class="col-sm-6 col-form-label">Section
                                                Requestor</label>
                                            <input type="text" class="form-control" id="section_requestor">
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="">Activity Description</label>
                                            <textarea class="form-control" placeholder="Activity Description"
                                                id="activity_description"></textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="" class="col-sm-4 col-form-label">Item Code</label>
                                            <input type="text" class="form-control" id="item_code">

                                            <label for="">Items Description</label>
                                            <textarea class="form-control" placeholder="Leave a description here"
                                                id="item_desc"></textarea>

                                            <label for="" class="col-sm-4 col-form-label">Request Qty</label>
                                            <input type="text" class="form-control" id="request_qty">
                                            <label for="" class="col-sm-4 col-form-label">Issued Qty</label>
                                            <input type="text" class="form-control" id="issued_qty">
                                            <label for="" class="col-sm-4 col-form-label">UoM</label>
                                            <input type="text" class="form-control" id="uom">
                                            <label for="" class="col-sm-4 col-form-label">Reason Code</label>
                                            <input type="text" class="form-control" id="reason_code">
                                            <label for="" class="col-sm-4 col-form-label">Cost Center</label>
                                            <input type="text" class="form-control" id="cost_center">


                                        </div>
                                        <div class="col-sm-6">
                                            <label for="" class="col-sm-6 col-form-label">Request by</label>
                                            <input type="text" class="form-control" id="request_by">
                                            <label for="" class="col-sm-6 col-form-label">Approved by</label>
                                            <input type="text" class="form-control" id="approved_by">
                                            <label for="" class="col-sm-6 col-form-label">Issued by</label>
                                            <input type="text" class="form-control" id="issued_by">
                                            <label for="" class="col-sm-6 col-form-label">Recived by</label>
                                            <input type="text" class="form-control" id="received_by">
                                            <p></p>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formFileMultiple" class="form-label"
                                                            style="margin-top:8px">Foto
                                                            Barang</label>
                                                        <input class="form-control" type="file" id="formFileMultiple"
                                                            multiple />
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
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
                                                <button id="simpan" type="submit"
                                                    class="btn btn-success">Simpan</button>
                                            </center>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MODAL WO -->
            <div class="modal fade" id="WO" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:60%>
                    <div class="modal-content">
                        <div class="modal-header" style=background-color:#563d7c>
                            <h5 class="modal-title" style=color:white id="exampleModalLabel">Form Work Order</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="barang_keluar/tambahBarangKeluar" method="POST">
                                <div class="container">

                                </div>
                            </form>
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
                                                <button id="simpan" type="submit"
                                                    class="btn btn-success">Simpan</button>

                                            </center>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MODAL WT -->
            <div class="modal fade" id="WT" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:60%>
                    <div class="modal-content">
                        <div class="modal-header" style=background-color:#563d7c>
                            <h5 class="modal-title" style=color:white id="exampleModalLabel">Form Work Order</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="barang_keluar/tambahBarangKeluar" method="POST">
                                <div class="container">

                                </div>
                            </form>
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
                                                <button id="simpan" type="submit"
                                                    class="btn btn-success">Simpan</button>

                                            </center>
                                        </div>

                                    </div>
                                </div>
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