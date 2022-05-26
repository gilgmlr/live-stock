<div class="container" style="margin-top: 100px;">
    <div class="card">
        <form action="barang_keluar/tambahBarangKeluar" method="POST">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-6">
                        <label class="col-sm-2 col-form-label">No GR</label>
                        <input type="text" class="form-control" id="no_gr">
                        <label class="col-sm-6 col-form-label">Date</label>
                        <input type="text" class="form-control" id="date">
                    </div>
                    <div class="col-sm-6">
                        <label for="" class="col-sm-6 col-form-label">Requestor</label>
                        <input type="text" class="form-control" id="requestor">
                        <label for="" class="col-sm-6 col-form-label">Dept Requestor</label>
                        <input type="text" class="form-control" id="dept_requestor">
                        <label for="" class="col-sm-6 col-form-label">Section Requestor</label>
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
                            <div class="row align-items-end">
                                <div class="col">
                                    <button id="tambah_items" type="submit" class="btn btn-primary">Tambah Items</button>
                                </div>
                                <div class="col">
                                    <button id="batal" type="submit" class="btn btn-primary">Batal</button>
                                </div>
                                <div class="col">
                                    <button id="simpan" type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

</body>

</html>