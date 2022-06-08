<div class="container" style="margin-top: 120px;">
    <div class="cards shadow p-1 mb-5 bg-white rounded">
        <center>
            <h4 style="font-weight:bold;"> Form Material Issue</h4>
        </center>
        <div class=" card-body">
            <form action="<?= base_url() ?>issue/addMI" method="POST">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <label for="" class="col-sm-6 col-form-label">MI No</label>
                            <select class="form-select form-control" aria-label=".form-select-lg example" id="mi_code"
                                name="mi_code" required>
                                <option selected>-- Select --</option>
                                <?php foreach ($mi_code as $data) { ?>
                                <option value="<?= $data->doc_no ?>"><?= $data->doc_no ?></option>
                                <?php $i++; } ?>
                            </select> <label for="" class="col-sm-6 col-form-label">Entry Date</label>
                            <input type="date" class="form-control" id="entri_date" name="entri_date" required>
                            </select> <label for="" class="col-sm-6 col-form-label">Posting Date</label>
                            <input type="date" class="form-control" id="post_date" name="post_date" required>
                            <label for="" class="col-sm-6 col-form-label">Applicant</label>
                            <input type="text" class="form-control" id="applicant" name="applicant" required>
                            <label for="" class="col-sm-6 col-form-label">Dept No</label>
                            <input type="text" class="form-control" id="dept_no" name="dept_no" required>
                            <label for="" class="col-sm-6 col-form-label">Project No</label>
                            <input type="text" class="form-control" id="project_no" name="project_no" required>
                            <label for="" class="col-sm-6 col-form-label">Memo</label>
                            <textarea class="form-control" id="memo" name="memo" rows="3"></textarea>
                        </div>
                        <div class="col-sm-6">
                            <label for="" class="col-sm-6 col-form-label">Item No</label>
                            <select class="form-select form-control" aria-label=".form-select-lg example" id="item_code"
                                name="item_code" required>
                                <option selected>-- Select --</option>
                                <?php foreach ($items as $data) { ?>
                                <option value="<?= $data->item_code ?>"><?= $data->item_code ?></option>
                                <?php $i++; } ?>
                            </select>
                            <label for="" class="col-sm-6 col-form-label">Warehouse Code</label>
                            <select class="form-select form-control" aria-label=".form-select-lg example" id="warehouse_code"
                                name="warehouse_code" required>
                                <option selected>-- Select --</option>
                                <?php foreach ($warehouse as $data) { ?>
                                <option value="<?= $data->warehouse_code ?>"><?= $data->warehouse_code ?></option>
                                <?php $i++; } ?>
                            </select>
                            <label for="" class="col-sm-6 col-form-label">UoM Code</label>
                            <select class="form-select form-control" aria-label=".form-select-lg example" id="uom_code"
                                name="uom_code" required>
                                <option selected>-- Select --</option>
                                <?php foreach ($uom as $data) { ?>
                                <option value="<?= $data->uom_code ?>"><?= $data->uom_name ?></option>
                                <?php $i++; } ?>
                            </select>
                            <label for="" class="col-sm-6 col-form-label">Transaction Qty</label>
                            <input type="text" class="form-control" id="transaction_qty" name="transaction_qty" required>
                            <label for="" class="col-sm-6 col-form-label">Reference</label>
                            <input type="text" class="form-control" id="reference" name="reference" required>

                            <label for="" class="col-sm-6 col-form-label">Reason</label>
                            <input type="text" class="form-control" id="reason_code" name="reason_code" required>
                            <label for="" class="col-sm-6 col-form-label">Desc</label>
                            <input type="text" class="form-control" id="description" name="description" required>
                            <label for="" class="col-sm-6 col-form-label">Create by</label>
                            <input type="text" class="form-control" id="create_by" name="create_by" required>
                        </div>
                    </div>
                </div>


                <div class="cards-footer">
                    <center>
                        <a href="<?= base_url(); ?>issue" class="btn btn-warning" style="padding:17px">
                            Batal
                        </a> <button id="simpan" type="submit" class="btn btn-success">Simpan</button>
                    </center>
                </div>
            </form>
        </div>
    </div>
</div>