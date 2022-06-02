<div class="container" style="margin-top: 80px;">
    <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-body">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="card shadow p-1 mb-5 bg-white rounded">
                            <div class="card-body">
                                GR
                            </div>
                            <div class="card-footer">
                                <center>
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#GR">Good Recived</button>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow p-1 mb-5 bg-white rounded">
                            <div class="card-body">
                                WT
                            </div>
                            <div class="card-footer">
                                <center>
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#WTin">Warehouse Transfer</button>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow p-1 mb-5 bg-white rounded">
                            <div class="card-body">
                                MS
                            </div>
                            <div class="card-footer">
                                <center>
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#MS">Adjusment In Material</button>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<!-- Modal GR -->
<div class="modal fade" id="GR" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:60%>
        <div class="modal-content">
            <div class="modal-header" style="background-color: #563d7c">
                <h5 class="modal-title" style="color: gold" id="exampleModalLabel">Form Good Recived</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>received/addItems" method="POST">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-6">
                                <label for="" class="col-sm-2 col-form-label">GR Number</label>
                                <input type="text" class="form-control" id="gr_no" name="no_gr">
                                <label for="" class="col-sm-6 col-form-label">Arrival Date</label>
                                <input type="text" class="form-control" id="arrival_date" name="arrival_date">
                                <label for="" class="col-sm-6 col-form-label">PO Number</label>
                                <input type="text" class="form-control" id="po_no" name="po_no">
                                <label for="" class="col-sm-6 col-form-label">Vendor Name</label>
                                <input type="text" class="form-control" id="vendor" name="vendor">
                            </div>
                            <div class="col-sm-6">
                                <label for="" class="col-sm-6 col-form-label">Item Code</label>
                                <input type="text" class="form-control" id="item_code" name="item_code">
                                <label for="" class="col-sm-6 col-form-label">Qty</label>
                                <input type="text" class="form-control" id="qty" name="qty">
                                <label for="" class="col-sm-6 col-form-label">UoM</label>
                                <input type="dropdown" class="form-control" id="uom" name="uom">
                                <label for="" class="col-sm-6 col-form-label">Location</label>
                                <input type="text" class="form-control" id="location" name="location">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <div class="container">
                                <div class="row align-items-center">
                                    <!-- <div class="col">
                                        <center>
                                            <button id="tambah_items" type="submit" class="btn btn-primary">Tambah
                                                Items</button>
                                        </center>
                                    </div> -->
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
<!-- End Modal GR  -->


<!-- Modal WTin -->
<div class="modal fade" id="WTin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:60%>
        <div class="modal-content">
            <div class="modal-header" style="background-color: #563d7c">
                <h5 class="modal-title" style="color: gold" id="exampleModalLabel">Form Warehouse Transfer (IN)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
                                    <div class="row">
                                        <div class="col">
                                            <label for="formFileMultiple" class="form-label" style="margin-top:8px">Foto
                                                Barang</label>
                                            <input class="form-control" type="file" id="formFileMultiple" multiple />
                                        </div>
                                    </div>
                                </div>



                            </div>

                        </div>
                    </div>
                </form>
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

<!-- Modal MS -->
<div class="modal fade" id="MS" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:60%>
        <div class="modal-content">
            <div class="modal-header" style="background-color: #563d7c">
                <h5 class="modal-title" style="color: gold" id="exampleModalLabel">Form Material Issue</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
                                    <div class="row">
                                        <div class="col">
                                            <label for="formFileMultiple" class="form-label" style="margin-top:8px">Foto
                                                Barang</label>
                                            <input class="form-control" type="file" id="formFileMultiple" multiple />
                                        </div>
                                    </div>
                                </div>



                            </div>

                        </div>
                    </div>
                </form>
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
</body>
<script>
$(document).ready(function() {
    $('#warehouse').DataTable();
});
</script>

</html>