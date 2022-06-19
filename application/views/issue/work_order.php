<div class="container" style="margin-top: 120px;">
    <div class="cards shadow p-1 mb-5 bg-white rounded">
        <center>
            <h4 style="font-weight:bold;"> Form Work Order</h4>

        </center>
        <div class=" card-body">
            <form action="<?= base_url() ?>received/addReceived" method="POST" autocomplete="off">

                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="" class="col-sm-6 col-form-label">WO No</label>
                            <input type="text" class="form-control" id="mi_code" name="mi_code"
                                value="MI01-C02<?= substr(date('Y'),2,4) . date('m') ?>" required>
                        </div>

                        <div class="col">
                            <label for="" class="col-sm-3 col-form-label">Dept No</label>
                            <input type="text" class="form-control" id="dept_no" name="dept_no" required
                                autocomplete="off">
                        </div>
                        <div class="col">
                            <label for="" class="col-sm-4 col-form-label">Dept Name</label>
                            <input type="text" class="form-control" id="dept_name" name="dept_name" required
                                autocomplete="off">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-3">
                            <label for="" class="col-sm-6 col-form-label">Entry Date</label>
                            <input type="date" class="form-control" id="entri_date" name="entri_date"
                                value="<?php echo date('Y-m-d'); ?>" required>
                        </div>
                        <div class="col-sm-3">
                            <label for="" class="col-sm-6 col-form-label">Posting Date</label>
                            <input type="date" class="form-control" id="post_date" name="post_date"
                                value="<?php echo date('Y-m-d'); ?>" required>
                        </div>
                        <div class="col">
                            <label for="" class="col-sm-6 col-form-label">Project No</label>
                            <input type="text" class="form-control" id="project_no" name="project_no" required
                                autocomplete="off">
                        </div>
                    </div>

                    <label for="" class="col-sm-6 col-form-label">Description</label>
                    <textarea class="form-control" id="desc" name="desc" rows="1"></textarea>

                    <div class="row">
                        <div class="col-sm-3">
                            <label for="" class="col-sm-6 col-form-label">Reference</label>
                            <input type="text" class="form-control" id="reference" name="reference" required
                                autocomplete="off">
                        </div>
                        <div class="col-sm-3">
                            <label for="" class="col-sm-6 col-form-label">Reason</label>
                            <input type="text" class="form-control" id="reason_code" name="reason_code" required
                                autocomplete="off">
                        </div>

                        <div class="col-sm-6">
                            <label for="" class="col-sm-4 col-form-label">Entered by</label>
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