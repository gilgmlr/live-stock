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
                            <input type="text" class="form-control" id="received_code" name="received_code"
                                value="WT01-C02<?= substr(date('Y'),2,4) . date('m') ?>" required>
                            <label for="" class="col-sm-6 col-form-label">Arrival Date</label>
                            <input type="date" class="form-control" id="arrival_date" name="arrival_date"
                                value="<?php echo date('Y-m-d'); ?>" required>
                            <label for="" class="col-sm-6 col-form-label">PO Number</label>
                            <input type="text" class="form-control" id="po_number" name="po_number" required>
                            <label for="" class="col-sm-6 col-form-label">Vendor Name</label>
                            <input type="text" class="form-control" id="vendor_name" name="vendor_name" required>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="" class="col-sm-6 col-form-label">Equipment</label>
                                    <input type="text" class="form-control" id="equipment" name="equipment">
                                </div>
                                <div class="col-sm-6">
                                    <label for="" class="col-sm-6 col-form-label">Status</label>
                                    <input type="text" class="form-control" id="status" name="status" value="Can Use"
                                        readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="" class="col-sm-6 col-form-label">Item Code</label>
                            <select class="form-select form-control" aria-label=".form-select-lg example" id="item_code"
                                name="item_code" required>
                                <option selected>-- Select --</option>
                                <?php foreach ($items as $data) { ?>
                                <option value="<?= $data->item_code ?>"><?= $data->item_code ?> | <?= $data->name ?>
                                </option>
                                <?php $i++; } ?>
                            </select>
                            <label for="" class="col-sm-6 col-form-label">UoM</label>
                            <select class="form-select form-control" aria-label=".form-select-lg example" id="uom"
                                name="uom" required>
                                <option selected>-- Select --</option>
                                <?php foreach ($uom as $data) { ?>
                                <option value="<?= $data->uom_code ?>"><?= $data->uom_code ?> - <?= $data->uom_name ?>
                                </option>
                                <?php $i++; } ?>
                            </select>
                            <label for="" class="col-sm-6 col-form-label">Qty</label>
                            <input type="text" class="form-control" id="qty" name="qty" required>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="" class="col-sm-6 col-form-label">WH</label>
                                    <select class="form-select form-control" aria-label=".form-select-lg example"
                                        id="warehouse_code" name="warehouse_code" required>
                                        <option selected>-- Select --</option>
                                        <?php foreach ($warehouse as $data) { ?>
                                        <option value="<?= $data->warehouse_code ?>"><?= $data->warehouse_code ?>
                                        </option>
                                        <?php $i++; } ?>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="" class="col-sm-6 col-form-label">Location</label>
                                    <input type="text" class="form-control" id="location" name="location" required>
                                </div>


                                <label for="" class="col-sm-12 col-form-label">Entered by</label>

                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="entered_nip" name="entered_nip" readonly
                                        value="<?= $this->session->userdata('nip'); ?>">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="warehouse_code" name="warehouse_code"
                                        readonly value="<?= $this->session->userdata('warehouse'); ?>">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <input type="text" class="form-control" id="desc" name="desc" value="Warehouse Transfer" hidden>


                <div class="cards-footer">
                    <center>
                        <a href="<?= base_url(); ?>received" class="btn btn-danger" style="padding-top:17px">
                            Batal
                        </a>
                        <button id="simpan" type="submit" class="btn btn-success">Simpan</button>
                    </center>
                </div>
            </form>
        </div>
    </div>
</div>