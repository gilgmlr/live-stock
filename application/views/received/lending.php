<div class="container" style="margin-top: 120px;">
    <div class="cards shadow p-3 mb-5 bg-white rounded" style="min-height: 400px">

        <div class="card-content">

            <center>
                <h4 style="font-weight:bold;"> Form Lending</h4>
            </center>
            <div class=" card-body">
                <form action="<?= base_url() ?>received/returnLending" method="POST"  autocomplete="off">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-6">
                                <label for="" class="col-sm-6 col-form-label">Lending No</label>
                                <input type="text" class="form-control" id="received_code" name="received_code" readonly>
                                <label for="" class="col-sm-6 col-form-label">Lending Date</label>
                                <input type="text" class="form-control" id="lending_date" name="lending_date" readonly>
                                <label for="" class="col-sm-6 col-form-label">Borrower Name</label>
                                <input type="text" class="form-control" id="borrower_name" name="borrower_name" readonly>
                                <label for="" class="col-sm-6 col-form-label">Lending Note</label>
                                <textarea class="form-control" id="len_tote" name="len_note" rows="1" readonly></textarea>
                                <label for="" class="col-sm-6 col-form-label">Return Note</label>
                                <textarea class="form-control" id="ret_tote" name="ret_note" rows="1"></textarea>
                                <label for="" class="col-sm-6 col-form-label">Return Date</label>
                                <input type="date" class="form-control" id="return_date" name="return_date" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="" class="col-sm-6 col-form-label">Item Code</label>
                                <input type="text" class="form-control" id="item_code" name="item_code" readonly>
                                <label for="" class="col-sm-6 col-form-label">Lending Qty</label>
                                <input type="text" class="form-control" id="qty" name="qty" readonly>
                                <label for="" class="col-sm-6 col-form-label">UoM</label>
                                <input type="text" class="form-control" id="uom" name="uom" readonly>
                                <label for="" class="col-sm-6 col-form-label">Department Name</label>
                                <input type="text" class="form-control" id="dept_name" name="dept_name" readonly>
                                <label for="" class="col-sm-6 col-form-label">Return Qty</label>
                                <input type="text" class="form-control" id="return_qty" name="return_qty" required>

                                <label for="" class="col-sm-6 col-form-label">Entered by</label>
                                <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="warehouse_code" name="warehouse_code" readonly value="<?= $this->session->userdata('nip'); ?>">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="warehouse_code" name="warehouse_code" readonly value="<?= $this->session->userdata('warehouse'); ?>">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="text" class="form-control" id="desc" name="desc" value="Good Receive" hidden>


                    <div class="cards-footer">
                        <center>
                            <a href="<?= base_url(); ?>issue" class="btn btn-danger" style="padding:17px">
                                Batal
                            </a>
                            <button id="simpan" type="submit" class="btn btn-success">Simpan</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>