<div class="container" style="margin-top: 80px;">

    <div class="row ">
        <div class="col-lg-7 col-md-12">
            <div class="card shadow p-3 mb-5 bg-white rounded" style="min-height: 400px">
                <div class="card-header card-header-text">
                    <h4 class="card-title">Lending Activity</h4>
                    <!-- <p class="category">All Warehouse</p> -->
                </div>
                <div class="card-content table-responsive">
                    <table id="lending" class="table table-hover">
                        <thead class="text-primary">
                            <tr>
                                <th>No</th>
                                <th>Item Code</th>
                                <th>Item Name</th>
                                <th>Qty</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-5 col-md-12">
            <div class="card shadow p-3 mb-5 bg-white rounded" style="min-height: 400px">

                <div class="card-content">

                    <center>
                        <h4> Form Lending</h4>
                    </center>
                    <div class=" card-body">
                        <form action="<?= base_url() ?>received/addReceived" method="POST">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-sm-6">
                                        <label for="" class="col-sm-6 col-form-label">Lending No</label>
                                        <input type="text" class="form-control" id="received_code" name="received_code"
                                            required>
                                        <label for="" class="col-sm-6 col-form-label">Loan Date</label>
                                        <input type="date" class="form-control" id="arrival_date" name="arrival_date"
                                            required>
                                        <label for="" class="col-sm-6 col-form-label">Return Date</label>
                                        <input type="date" class="form-control" id="arrival_date" name="arrival_date"
                                            required>
                                        <label for="" class="col-sm-6 col-form-label">Item Name</label>
                                        <input type="text" class="form-control" id="po_number" name="po_number"
                                            required>
                                        <label for="" class="col-sm-6 col-form-label" style="width: 100px;">Vendor
                                            Name</label>
                                        <input type="text" class="form-control" id="vendor_name" name="vendor_name"
                                            required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="" class="col-sm-6 col-form-label">Item Code</label>
                                        <select class="form-select form-control" aria-label=".form-select-lg example"
                                            id="item_code" name="item_code" required>
                                            <option selected>-- Select --</option>
                                            <?php foreach ($items as $data) { ?>
                                            <option value="<?= $data->item_code ?>"><?= $data->item_code ?> |
                                                <?= $data->name ?>
                                            </option>
                                            <?php $i++; } ?>
                                        </select>
                                        <label for="" class="col-sm-6 col-form-label">Qty</label>
                                        <input type="text" class="form-control" id="qty" name="qty" required>
                                        <label for="" class="col-sm-6 col-form-label">UoM</label>
                                        <select class="form-select form-control" aria-label=".form-select-lg example"
                                            id="uom" name="uom" required>
                                            <option selected>-- Select --</option>
                                            <?php foreach ($uom as $data) { ?>
                                            <option value="<?= $data->uom_code ?>"><?= $data->uom_code ?> -
                                                <?= $data->uom_name ?>
                                            </option>
                                            <?php $i++; } ?>
                                        </select>

                                        <div class="row">

                                            <label for="" class="col-sm-6 col-form-label">WH</label>
                                            <select class="form-select form-control"
                                                aria-label=".form-select-lg example" id="warehouse_code"
                                                name="warehouse_code" required>
                                                <option selected>-- Select --</option>
                                                <?php foreach ($warehouse as $data) { ?>
                                                <option value="<?= $data->warehouse_code ?>">
                                                    <?= $data->warehouse_code ?>
                                                </option>
                                                <?php $i++; } ?>
                                            </select>


                                            <label for="" class="col-sm-6 col-form-label">Location</label>
                                            <input type="text" class="form-control" id="location" name="location"
                                                required>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="desc" name="desc" value="Good Receive" hidden>


                            <div class="card-footer">
                                <center>
                                    <a href="<?= base_url(); ?>received" class="btn btn-warning" style="padding:18px">
                                        Batal
                                    </a>
                                    <button id="simpan" type="submit" class="btn btn-success">Simpan</button>
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>


<script>
$(document).ready(function() {
    //$('#warehouse').DataTable();
    $('#lending').DataTable();

});
</script>