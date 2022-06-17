<div class="container" style="margin-top: 120px;">
    <div class="cards shadow p-1 mb-5 bg-white rounded">
        <center>
            <h4 style="font-weight:bold;"> Form Work Order</h4>

        </center>
        <div class=" card-body">
            <form action="<?= base_url() ?>received/addReceived" method="POST" autocomplete="off">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <label for="" class="col-sm-6 col-form-label">WO Number</label>
                            <input type="text" class="form-control" id="wo_no" name="wo_no"
                                value="WO01-C02<?= substr(date('Y'),2,4) . date('m') ?>" required>
                            <!-- <select class="form-select form-control" aria-label=".form-select-lg example" id="mi_code"
                                name="mi_code" required>
                                <option selected>-- Select --</option>
                                <?php foreach ($mi_code as $data) { ?>
                                <option value="<?= $data->doc_no ?>"><?= $data->doc_no ?></option>
                                <?php $i++; } ?>
                            </select>  -->

                            <label for="" class="col-sm-6 col-form-label">Entry Date</label>
                            <input type="date" class="form-control" id="entri_date" name="entri_date"
                                value="<?php echo date('Y-m-d'); ?>" required>
                            </select> <label for="" class="col-sm-6 col-form-label">Posting Date</label>
                            <input type="date" class="form-control" id="post_date" name="post_date"
                                value="<?php echo date('Y-m-d'); ?>" required>
                            <div class="row">
                                <div class="col">
                                    <label for="" class="col-sm-6 col-form-label">Dept No</label>
                                    <input type="text" class="form-control" id="dept_no" name="dept_no" required
                                        autocomplete="off">

                                </div>
                                <div class="col">
                                    <label for="" class="col-sm-6 col-form-label">Project No</label>
                                    <input type="text" class="form-control" id="project_no" name="project_no" required
                                        autocomplete="off">
                                </div>

                            </div>
                            <label for="" class="col-sm-6 col-form-label">Description</label>
                            <textarea class="form-control" id="desc" name="desc" rows="1"></textarea>
                        </div>
                        <div class="col-sm-6">

                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="" class="col-sm-6 col-form-label">Item Code</label>
                                    <input type="text" class="form-control" id="item_code" name="item_code" required>

                                </div>
                                <div class="col-sm-6">
                                    <label for="" class="col-sm-6 col-form-label">Item Name</label>
                                    <input type="text" class="form-control" id="item_name" name="item_name" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10">
                                    <label for="" class="col-sm-6 col-form-label">Spesification</label>
                                    <input type="text" class="form-control" id="specification" name="specification"
                                        readonly>

                                </div>
                                <div class="col-sm-2">
                                    <label for="" class="col-sm-6 col-form-label">UoM</label>
                                    <input type="text" class="form-control" id="uom" name="uom" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="" class="col-sm-6 col-form-label">Transaction Qty</label>
                                    <input type="text" class="form-control" id="transaction_qty" name="transaction_qty"
                                        required>
                                </div>

                                <div class="col-sm-6">
                                    <label for="" class="col-sm-6 col-form-label">Warehouse</label>
                                    <input type="text" class="form-control" id="warehouse_code" name="warehouse_code"
                                        value="<?= $this->session->userdata('warehouse') ?>" readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="" class="col-sm-6 col-form-label">Reference</label>
                                    <input type="text" class="form-control" id="reference" name="reference" required
                                        autocomplete="off">
                                </div>
                                <div class="col">
                                    <label for="" class="col-sm-6 col-form-label">Reason</label>
                                    <input type="text" class="form-control" id="reason_code" name="reason_code" required
                                        autocomplete="off">
                                </div>
                            </div>
                            <label for="" class="col-sm-6 col-form-label">Entered by</label>
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