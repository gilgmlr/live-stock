<div class="container" style="margin-top: 80px;">
    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "received/view_good_received" ?>">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <img src="https://img.icons8.com/ios/100/undefined/reading-confirmation.png" />
                            <h5>Good Recived</h5>
                        </center>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "received/view_warehouse_transfer_in" ?>">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <img src="https://img.icons8.com/ios/100/undefined/multiple-inputs.png" />
                            <h5>Warehouse Transfer (Input)</h5>
                        </center>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "received/view_adjusment" ?>">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <img src="https://img.icons8.com/ios/100/undefined/customize-view.png" />
                            <h5>Adjusment In Material</h5>
                        </center>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- Modal GR -->
<div class="modal fade" id="GR" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:60%>
        <div class="modal-content">
            <div class="modal-header" style="background-color: #563d7c">
                <h5 class="modal-title" style="color: gold" id="exampleModalLabel">Form Good Recived</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="<?= base_url() ?>received/addReceived" method="POST">
                <div class="modal-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-6">
                                <label for="" class="col-sm-6 col-form-label">GR Number</label>
                                <input type="text" class="form-control" id="received_code" name="received_code"
                                    required>
                                <label for="" class="col-sm-6 col-form-label">Arrival Date</label>
                                <input type="date" class="form-control" id="arrival_date" name="arrival_date" required>
                                <label for="" class="col-sm-6 col-form-label">PO Number</label>
                                <input type="text" class="form-control" id="po_number" name="po_number" required>
                                <label for="" class="col-sm-6 col-form-label">Vendor Name</label>
                                <input type="text" class="form-control" id="vendor_name" name="vendor_name" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="" class="col-sm-6 col-form-label">Item Code</label>
                                <input type="text" class="form-control" id="item_code" name="item_code" required>
                                <label for="" class="col-sm-6 col-form-label">Qty</label>
                                <input type="text" class="form-control" id="qty" name="qty" required>
                                <label for="" class="col-sm-6 col-form-label">UoM</label>
                                <select class="form-select form-control" aria-label=".form-select-lg example" id="uom"
                                    name="uom" required>
                                    <option selected>-- Select --</option>
                                    <?php foreach ($uom as $data) { ?>
                                    <option value="<?= $data->uom_code ?>"><?= $data->name ?></option>
                                    <?php $i++; } ?>
                                </select>

                                <label for="" class="col-sm-6 col-form-label">Location</label>
                                <input type="text" class="form-control" id="location" name="location" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button id="batal" type="submit" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                    <button id="simpan" type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal GR  -->


</body>
<script>
$(document).ready(function() {
    $('#warehouse').DataTable();
});
</script>

</html>