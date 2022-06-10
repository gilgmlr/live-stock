<div class="container" style="margin-top: 120px;">
    <div class="cards shadow p-1 mb-5 bg-white rounded">
        <div class=" card-body">
            <center>
                <h4 style="font-weight:bold;"> Form Lending</h4>

            </center>
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
                                <option value="<?= $data->item_code ?>"><?= $data->item_code ?> | <?= $data->name ?>
                                </option>
                                <?php $i++; } ?>
                            </select>
                            <label for="" class="col-sm-6 col-form-label">Qty</label>
                            <input type="text" class="form-control" id="qty" name="qty" required>
                            <label for="" class="col-sm-6 col-form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location" required
                                autocomplete="off">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="" class="col-sm-6 col-form-label">Equipment</label>
                                    <input type="text" class="form-control" id="equipment" name="location" required
                                        autocomplete="off">
                                </div>
                                <div class="col-sm-6">
                                    <label for="" class="col-sm-6 col-form-label">Status</label>
                                    <input type="text" class="form-control" id="status" name="location" required
                                        autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="text" class="form-control" id="desc" name="desc" value="Lending" hidden>

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