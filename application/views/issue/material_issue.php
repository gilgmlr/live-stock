<div class="container" style="margin-top: 120px;">
    <div class="cards shadow p-1 mb-5 bg-white rounded">
        <center>
            <h4 style="font-weight:bold;"> Form Material Issue</h4>
        </center>
        <div class=" card-body">
            <form action="<?= base_url() ?>received/addReceived" method="POST">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <label for="" class="col-sm-6 col-form-label">MI No</label>
                            <select class="form-select form-control" aria-label=".form-select-lg example" id="uom"
                                name="uom" required>
                                <option selected>-- Select --</option>
                                <?php foreach ($uom as $data) { ?>
                                <option value="<?= $data->uom_code ?>"><?= $data->name ?></option>
                                <?php $i++; } ?>
                            </select> <label for="" class="col-sm-6 col-form-label">Entry Date</label>
                            <input type="date" class="form-control" id="arrival_date" name="arrival_date" required>
                            </select> <label for="" class="col-sm-6 col-form-label">Posting Date</label>
                            <input type="date" class="form-control" id="arrival_date" name="arrival_date" required>
                            <label for="" class="col-sm-6 col-form-label">Applicant</label>
                            <input type="text" class="form-control" id="po_number" name="po_number" required>
                            <label for="" class="col-sm-6 col-form-label">Dept No</label>
                            <input type="text" class="form-control" id="vendor_name" name="vendor_name" required>
                            <label for="" class="col-sm-6 col-form-label">Project No</label>
                            <input type="text" class="form-control" id="vendor_name" name="vendor_name" required>
                            <label for="" class="col-sm-6 col-form-label">Memo</label>
                            <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
                        </div>
                        <div class="col-sm-6">
                            <label for="" class="col-sm-6 col-form-label">Item No</label>
                            <select class="form-select form-control" aria-label=".form-select-lg example" id="uom"
                                name="uom" required>
                                <option selected>-- Select --</option>
                                <?php foreach ($uom as $data) { ?>
                                <option value="<?= $data->uom_code ?>"><?= $data->name ?></option>
                                <?php $i++; } ?>
                            </select>
                            <label for="" class="col-sm-6 col-form-label">WH</label>
                            <select class="form-select form-control" aria-label=".form-select-lg example" id="uom"
                                name="uom" required>
                                <option selected>-- Select --</option>
                                <?php foreach ($uom as $data) { ?>
                                <option value="<?= $data->uom_code ?>"><?= $data->name ?></option>
                                <?php $i++; } ?>
                            </select>
                            <label for="" class="col-sm-6 col-form-label">Transaction Qty</label>
                            <input type="text" class="form-control" id="item_code" name="item_code" required>
                            <label for="" class="col-sm-6 col-form-label">Reference</label>
                            <input type="text" class="form-control" id="qty" name="qty" required>

                            <label for="" class="col-sm-6 col-form-label">Reason</label>
                            <input type="text" class="form-control" id="location" name="location" required>
                            <label for="" class="col-sm-6 col-form-label">Desc</label>
                            <input type="text" class="form-control" id="location" name="location" required>
                            <label for="" class="col-sm-6 col-form-label">Create by</label>
                            <input type="text" class="form-control" id="location" name="location" required>
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