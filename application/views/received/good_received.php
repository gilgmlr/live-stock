<div class="container" style="margin-top: 120px;">
    <div class="cards shadow p-1 mb-5 bg-white rounded">
        <center>
            <h4 style="font-weight:bold;"> Form Good Recived</h4>

        </center>
        <div class=" card-body">
            <form action="<?= base_url() ?>received/addReceived" method="POST" autocomplete="off">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <label for="" class="col-sm-6 col-form-label">GR Number</label>
                            <input type="text" class="form-control" id="received_code" name="received_code"
                                value="GR02-C02<?= substr(date('Y'),2,4) . date('m') ?>" required>
                            <label for="" class="col-sm-6 col-form-label">Arrival Date</label>
                            <input type="date" class="form-control" id="arrival_date" name="arrival_date"
                                value="<?php echo date('Y-m-d'); ?>" required>
                            <label for="" class="col-sm-6 col-form-label">PO Number</label>
                            <input type="text" class="form-control" id="po_number" name="po_number" required>
                            <label for="" class="col-sm-6 col-form-label">Vendor Name</label>
                            <input type="text" class="form-control" id="vendor_name" name="vendor_name" required>
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
                                <div class="col-sm-2">
                                    <label for="" class="col-sm-6 col-form-label">Qty</label>
                                    <input type="text" class="form-control" id="qty" name="qty" required>
                                </div>
                                <div class="col-sm-5">
                                    <label for="" class="col-sm-6 col-form-label">Location</label>
                                    <input type="text" class="form-control" id="location" name="location" required>
                                </div>
                                <div class="col-sm-5">
                                    <label for="" class="col-sm-6 col-form-label">Warehouse</label>
                                    <input type="text" class="form-control" id="warehouse_code" name="warehouse_code"
                                        value="<?= $this->session->userdata('warehouse') ?>" readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="" class="col-sm-6 col-form-label">Equipment</label>
                                    <input type="text" class="form-control" id="equipment" name="equipment">
                                </div>
                                <div class="col-sm-6">

                                </div>
                                <label for="" class="col-sm-12 col-form-label">Entered by</label>

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
                <input type="text" class="form-control" id="desc" name="desc" value="Good Receive" hidden>
                <input type="text" class="form-control" id="status" name="status" value="Can Use" hidden readonly>
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

<script src="<?= base_url() ?>node_modules/js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#item_code').on('input', function() {

        var item_code = $(this).val();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url().'auto/get_item'?>",
            dataType: "JSON",
            data: {
                item_code: item_code
            },
            cache: false,
            success: function(data) {
                $.each(data, function(item_code, nama, specification, uom, image) {
                    $('[name="item_name"]').val(data.name);
                    $('[name="specification"]').val(data.specification);
                    $('[name="uom"]').val(data.uom);
                });

            }
        });
        return false;
    });

});
</script>