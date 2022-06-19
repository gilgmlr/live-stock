<div class="container" style="margin-top: 80px;">
    <div class="cards shadow p-1 mb-5 bg-white rounded">
        <center>
            <h4 style="font-weight:bold;"> Form Adjusment In Material</h4>

        </center>
        <div class=" card-body">
            <form action="<?= base_url() ?>received/addReceived" method="POST" autocomplete="off">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <label for="" class="col-sm-6 col-form-label">Adjusment Number*</label>
                            <input type="text" class="form-control" id="received_code" name="received_code"
                                value="GR02-C02<?= substr(date('Y'),2,4) . date('m') ?>" required>
                            <label for="" class="col-sm-6 col-form-label">PO Number*</label>
                            <input type="text" class="form-control" id="po_number" name="po_number">
                        </div>

                        <div class="col-sm-6">
                            <label for="" class="col-sm-6 col-form-label">Arrival Date*</label>
                            <input type="date" class="form-control" id="arrival_date" name="arrival_date"
                                value="<?php echo date('Y-m-d'); ?>" required>
                            <label for="" class="col-sm-6 col-form-label">Vendor Name*</label>
                            <input type="text" class="form-control" id="vendor_name" name="vendor_name">
                            <label for="" class="col-sm-12 col-form-label">Entered by</label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="created_by" name="created_by" readonly
                                        value="<?= $this->session->userdata('nip'); ?>">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="" name="" readonly
                                        value="<?= $this->session->userdata('name'); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <hr size="12px">
                        </div>

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="" class="col-sm-6 col-form-label">Item Code*</label>
                                    <input type="text" class="form-control" id="item_code" name="item_code[]">
                                    <small class="form-text text-danger"><?= form_error('item_code') ?></small>

                                </div>
                                <div class="col-sm-3">
                                    <label for="" class="col-sm-6 col-form-label">Item Name</label>
                                    <input type="text" class="form-control" id="item_name" name="item_name" readonly>
                                </div>
                                <div class="col-sm-5">
                                    <label for="" class="col-sm-6 col-form-label">Spesification</label>
                                    <input type="text" class="form-control" id="specification" name="specification"
                                        readonly>

                                </div>
                                <div class="col-sm-1">
                                    <label for="" class="col-sm-6 col-form-label">UoM</label>
                                    <input type="text" class="form-control" id="uom" name="uom" readonly>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-2">
                                    <label for="" class="col-sm-6 col-form-label">Qty*</label>
                                    <input type="text" class="form-control" id="qty" name="qty[]">
                                </div>
                                <div class="col-sm-4">
                                    <label for="" class="col-sm-6 col-form-label">Location*</label>
                                    <input type="text" class="form-control" id="location" name="location[]">
                                </div>
                                <div class="col-sm-3">
                                    <label for="" class="col-sm-6 col-form-label">Warehouse*</label>
                                    <input type="text" class="form-control" id="warehouse_code" name="warehouse_code[]"
                                        value="<?= $this->session->userdata('warehouse') ?>">
                                </div>
                                <div class="col-sm-3">
                                    <label for="" class="col-sm-6 col-form-label">Equipment</label>
                                    <input type="text" class="form-control" id="equipment" name="equipment[]">
                                </div>
                            </div>
                            <hr size="12px">
                        </div>
                    </div>
                </div>
                <input type="text" class="form-control" id="desc" name="desc" value="Adjustment" hidden>
                <center>
                    <button class="btn btn-primary add-more" type="button"> Add</button>

                    <a href="<?= base_url(); ?>received" class="btn btn-secondary">
                        Cancel
                    </a>
                    <button id="simpan" type="submit" class="btn btn-success"
                        onclick=" return confirm('Are You Sure Want To Save ?')">Save</button>
                </center>

            </form>
        </div>
    </div>
</div>