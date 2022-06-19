<div class="container" style="margin-top: 120px;">
    <div class="cards shadow p-3 mb-5 bg-white rounded" style="min-height: 400px">

        <div class="card-content">

            <center>
                <h4 style="font-weight:bold;"> Form Lending</h4>
            </center>
            <div class=" card-body">
                <form action="<?= base_url() ?>issue/addLending" method="POST" autocomplete="off">
                    <div class="container">
                        <div class=" row">
                            <div class="col-sm-6">
                                <label for="" class="col-sm-6 col-form-label">Lending No</label>
                                <input type="text" class="form-control" id="lending_no" name="lending_no"
                                    value="LEN-C02<?= substr(date('Y'),2,4) . date('m'); ?>"" required>
                                </div>
                               
                                <div class=" col-sm-3">
                                <label for="" class="col-sm-6 col-form-label">Borrower Name</label>
                                <input type="text" class="form-control" id="borrower_name" name="borrower_name"
                                    required>
                            </div>

                            <div class="col-sm-3">
                                <label for="" class=" col-sm-6 col-form-label">Lending Date</label>
                                <input type="date" class="form-control" id="lending_date" name="lending_date"
                                    value="<?php echo date('Y-m-d'); ?>" required>
                            </div>
                        </div>
                        <div class=" col">
                            <label for="" class=" col-sm-6 col-form-label">Lending Note</label>
                            <textarea class="form-control" id="lending_note" name="lending_note" rows="2"></textarea>
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
            <input type="text" class="form-control" id="desc" name="desc" value="Lending" hidden>


            <div class="cards-footer">
                <center>
                    <button class="btn btn-primary add-more" type="button"> Add</button>

                    <a href="<?= base_url(); ?>issue" class="btn btn-danger">
                        Cancel
                    </a>
                    <button id="simpan" type="submit" class="btn btn-success"
                        onclick=" return confirm('Are You Sure Want To Save ?')">Save</button>
                </center>
            </div>
            </form>
        </div>
    </div>
</div>

</div>