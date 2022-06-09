<div class="container" style="margin-top: 120px;">
    <div class="cards shadow p-1 mb-5 bg-white rounded">
        <center>
            <h4 style="font-weight:bold;"> Form Warehouse Transfer</h4>

        </center>
        <div class=" card-body">
            <form action="<?= base_url() ?>received/addReceived" method="POST">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <label for="" class="col-sm-6 col-form-label">WT Number</label>
                            <input type="text" class="form-control" id="received_code" name="received_code" required>
                            <label for="" class="col-sm-6 col-form-label">Arrival Date</label>
                            <input type="date" class="form-control" id="arrival_date" name="arrival_date" required>
                            <label for="" class="col-sm-6 col-form-label">PO Number</label>
                            <input type="text" class="form-control" id="po_number" name="po_number" required>
                            <label for="" class="col-sm-6 col-form-label">Vendor Name</label>
                            <input type="text" class="form-control" id="vendor_name" name="vendor_name" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="" class="col-sm-6 col-form-label">Item Code</label>
                            <input type="text" class="form-control" id="item_code" name="item_code" required>
                            <label for="" class="col-sm-6 col-form-label">Qty</label>
                            <input type="text" class="form-control" id="qty" name="qty" required>
                            <label for="" class="col-sm-6 col-form-label">UoM</label>
                            <select class="form-select form-control" aria-label=".form-select-lg example" id="uom"
                                name="uom" required>
                                <option selected>-- Select --</option>
                                <?php foreach ($uom as $data) { ?>
                                <option value="<?= $data->uom_code ?>"><?= $data->name ?></option>
                                <?php $i++; } ?>
                            </select>

                            <label for="" class="col-sm-6 col-form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location" required>
                        </div>
                    </div>
                </div>


                <div class="cards-footer">
                    <center>
                        <a href="<?= base_url(); ?>issue" class="btn btn-danger" style="padding:17px">
                            Batal
                        </a> <button id="simpan" type="submit" class="btn btn-success">Simpan</button>
                    </center>
                </div>
            </form>
        </div>
    </div>
</div>