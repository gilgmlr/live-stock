<div class="container" style="margin-top: 80px;">
    <div class="card shadow p-1 mb-5 bg-white rounded">
        <div class=" card-body">
            <form action="<?= base_url() ?>received/addReceived" method="POST">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <label for="" class="col-sm-6 col-form-label">Lending Number</label>
                            <input type="text" class="form-control" id="received_code" name="received_code" required>
                            <label for="" class="col-sm-6 col-form-label">Return Date</label>
                            <input type="date" class="form-control" id="arrival_date" name="arrival_date" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="" class="col-sm-6 col-form-label">Item Code</label>
                            <select class="form-select form-control" aria-label=".form-select-lg example" id="item_code"
                                name="item_code" required>
                                <option selected>-- Select --</option>
                                <?php foreach ($items as $data) { ?>
                                <option value="<?= $data->item_code ?>"><?= $data->item_code ?> | <?= $data->name ?></option>
                                <?php $i++; } ?>
                            </select>
                            <label for="" class="col-sm-6 col-form-label">Qty</label>
                            <input type="text" class="form-control" id="qty" name="qty" required>
                        </div>
                    </div>
                </div>
                <input type="text" class="form-control" id="desc" name="desc" value="Lending" hidden>

                <div class="card-footer">
                    <center>
                        <a href="<?= base_url(); ?>received" class="btn btn-warning">
                            Batal
                        </a>
                        <button id="simpan" type="submit" class="btn btn-success">Simpan</button>
                    </center>
                </div>
            </form>
        </div>
    </div>
</div>