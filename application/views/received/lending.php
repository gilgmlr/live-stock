<div class="container" style="margin-top: 120px;">
    <div class="cards shadow p-3 mb-5 bg-white rounded" style="min-height: 400px">

        <div class="card-content">

            <center>
                <h4 style="font-weight:bold;"> Form Return Lending</h4>
            </center>
            <div class=" card-body">
                <form action="<?= base_url() ?>received/returnLending" method="POST" autocomplete="off" style="font-weight:bold;>
                    <div class=" container">
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <label for="" class="col-sm-6 col-form-label">Lending No</label>
                            <input type="text" class="form-control" id="lending_no" name="lending_no"
                                value="<?= $lending['lending_no'] ?>" readonly>
                            <label for="" class="col-sm-6 col-form-label">Lending Date</label>
                            <input type="text" class="form-control" id="lending_date" name="lending_date"
                                value="<?= $lending['lending_date'] ?>" readonly>
                            <label for="" class="col-sm-6 col-form-label">Borrower Name</label>
                            <input type="text" class="form-control" id="borrower_name" name="borrower_name"
                                value="<?= $lending['borrower_name'] ?>" readonly>
                            <label for="" class="col-sm-6 col-form-label">Lending Note</label>
                            <textarea class="form-control" id="lending_tote" name="lending_note" rows="1"
                                value="<?= $lending['lending_note'] ?>" readonly></textarea>
                            <label for="" class="col-sm-6 col-form-label">Return Note</label>
                            <textarea class="form-control" id="return_tote" name="return_note" rows="1"></textarea>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="" class="col-sm-6 col-form-label">Return Date</label>
                                    <input type="date" class="form-control" id="return_date" name="return_date"
                                        value="<?php echo date('Y-m-d'); ?>" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="" class="col-sm-6 col-form-label">Status</label>
                                    <select class="form-select form-control" aria-label=".form-select-lg example"
                                        id="status" name="status" required>
                                        <option value="open">Open</option>
                                        <option value="close">Close</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="" class="col-sm-6 col-form-label">Item Code</label>
                            <input type="text" class="form-control" id="item_code" name="item_code"
                                value="<?= $lending['item_code'] ?>" readonly>
                            <!-- <label for="" class="col-sm-6 col-form-label">UoM</label>
                                <input type="text" class="form-control" id="uom_code" name="uom_code"
                                    value="" readonly> -->
                            <label for="" class="col-sm-6 col-form-label">Lending Qty</label>
                            <input type="text" class="form-control" id="lending_qty" name="lending_qty"
                                value="<?= $lending['lending_qty'] ?>" readonly>
                            <label for="" class="col-sm-6 col-form-label">Department No</label>
                            <input type="text" class="form-control" id="dept_code" name="dept_code"
                                value="<?= $lending['dept_code'] ?>" readonly>
                            <label for="" class="col-sm-6 col-form-label">Return Qty</label>
                            <input type="text" class="form-control" id="return_qty" name="return_qty" required>

                            <label for="" class="col-sm-6 col-form-label">Entered by</label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="warehouse_code" name="warehouse_code"
                                        readonly value="<?= $this->session->userdata('nip'); ?>">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="warehouse_code" name="warehouse_code"
                                        readonly value="<?= $this->session->userdata('warehouse'); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <input type="text" class="form-control" id="desc" name="desc" value="Good Receive" hidden>


            <div class="cards-footer">
                <center>
                    <button class="btn btn-primary add-more" type="button"> Add</button>

                    <a href="<?= base_url(); ?>issue" class="btn btn-danger" style="width: 100px;">
                        Cancel
                    </a>
                    <button id="simpan" type="submit" class="btn btn-success" style="width: 100px;"
                        onclick=" return confirm('Are You Sure Want To Save ?')">Save</button>
                </center>
            </div>
            </form>
        </div>
    </div>
</div>

</div>