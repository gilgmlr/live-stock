<div class="container" style="margin-top: 120px;">
    <div class="cards shadow p-3 mb-5 bg-white rounded" style="min-height: 400px">

        <div class="card-content">

            <center>
                <h4 style="font-weight:bold;"> Form Lending</h4>
            </center>
            <div class=" card-body">
                <form action="<?= base_url() ?>issue/addLending" method="POST" autocomplete="off">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-6">
                                <label for="" class="col-sm-6 col-form-label">Lending No</label>
                                <input type="text" class="form-control" id="lending_no" name="lending_no"
                                    value="LEN-C02<?= substr(date('Y'),2,4) . date('m'); ?>"" required>
                                <label for="" class=" col-sm-6 col-form-label">Lending Date</label>
                                <input type="date" class="form-control" id="lending_date" name="lending_date"
                                    value="<?php echo date('Y-m-d'); ?>" required>
                                <label for="" class="col-sm-6 col-form-label">Borrower Name</label>
                                <input type="text" class="form-control" id="borrower_name" name="borrower_name"
                                    required>
                                <label for="" class="col-sm-6 col-form-label">Lending Note</label>
                                <textarea class="form-control" id="lending_note" name="lending_note"
                                    rows="4"></textarea>
                            </div>
                            <div class="col-sm-6">
                                <label for="" class="col-sm-6 col-form-label">Item Code</label>
                                <!-- <input type="text" class="form-control" id="item_code" name="item_code" required> -->
                                <select class="form-select form-control" aria-label=".form-select-lg example"
                                    id="item_code" name="item_code" required>
                                    <option selected>-- Select --</option>
                                    <?php foreach ($items as $data) { ?>
                                    <option value="<?= $data->item_code ?>"><?= $data->item_code ?> | <?= $data->name ?>
                                    </option>
                                    <?php $i++; } ?>
                                </select>
                                <label for="" class="col-sm-6 col-form-label">UoM</label>
                                <select class="form-select form-control" aria-label=".form-select-lg example"
                                    id="uom_code" name="uom_code" required>
                                    <option selected>-- Select --</option>
                                    <?php foreach ($uom as $data) { ?>
                                    <option value="<?= $data->uom_code ?>"><?= $data->uom_code ?> -
                                        <?= $data->uom_name ?>
                                    </option>
                                    <?php $i++; } ?>
                                </select>
                                <label for="" class="col-sm-6 col-form-label">Lending Qty</label>
                                <input type="text" class="form-control" id="lending_qty" name="lending_qty" required>
                                <label for="" class="col-sm-6 col-form-label">Department Code</label>
                                <input type="text" class="form-control" id="dept_code" name="dept_code" required>

                                <label for="" class="col-sm-6 col-form-label">Entered by</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="entered_nip" name="entered_nip"
                                            readonly value="<?= $this->session->userdata('nip'); ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="warehouse_code"
                                            name="warehouse_code" readonly
                                            value="<?= $this->session->userdata('warehouse'); ?>">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <input type="text" class="form-control" id="desc" name="desc" value="Lending" hidden>


                    <div class="cards-footer">
                        <center>
                            <a href="<?= base_url(); ?>issue" class="btn btn-danger" style="padding:17px">
                                Batal
                            </a>
                            <button id="simpan" type="submit" class="btn btn-success"
                                onclick=" return confirm('Are You Sure Want To Save ?')">Simpan</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>