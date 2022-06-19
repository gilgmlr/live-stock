<div class="container" style="margin-top: 120px;">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('flash') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php $this->session->unset_userdata('flash');
	endif; ?>
    <div class="cards shadow p-1 mb-5 bg-white rounded">
        <center>
            <h4 style="font-weight:bold;"> Form Warehouse Transfer</h4>

        </center>
        <div class=" card-body">
            <form action="<?= base_url() ?>issue/addWT" method="POST" autocomplete="off" style="font-weight:bold;>

                <div class=" container">

                <div class="row">
                    <div class="col-sm-6">
                        <label for="" class="col-sm-6 col-form-label">WT Number</label>
                        <input type="text" class="form-control" id="wt_number" name="wt_number"
                            value="WT01-C02<?= substr(date('Y'),2,4) . date('m') ?>" required>
                    </div>
                    <div class="col-sm-6">
                        <label for="" class="col-sm-6 col-form-label">Arrival Date</label>
                        <input type="date" class="form-control" id="arrival_date" name="arrival_date"
                            value="<?php echo date('Y-m-d'); ?>" required>
                    </div>

                    <div class="col-sm-6">
                        <label for="" class="col-sm-6 col-form-label">Sender</label>
                        <select class="form-select form-control" aria-label=".form-select-lg example" id="sender_code"
                            name="sender_code" required>
                            <option selected>-- Select --</option>
                            <?php foreach ($warehouse as $data) { ?>
                            <option value="<?= $data->warehouse_code ?>"><?= $data->warehouse_code ?> -
                                <?= $data->warehouse_name ?>
                            </option>
                            <?php $i++; } ?>
                        </select>

                    </div>
                    <div class="col-sm-6">

                        <div class="row">
                            <label for="" class="col-sm-12 col-form-label">Entered by</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="entered" name="entered" readonly
                                    value="<?= $this->session->userdata('nip'); ?>">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" name="" readonly
                                    value="<?= $this->session->userdata('name'); ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                </div>

                <div class="col-sm-12">
                    <hr size="12px">
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-3">
                            <label for="" class="col-sm-6 col-form-label">Item Code</label>
                            <input type="text" class="form-control" id="item_code" name="item_code" required>

                        </div>
                        <div class="col-sm-3">
                            <label for="" class="col-sm-6 col-form-label">Item Name</label>
                            <input type="text" class="form-control" id="item_name" name="item_name" readonly>
                        </div>


                        <div class="col-sm-5">
                            <label for="" class="col-sm-6 col-form-label">Spesification</label>
                            <input type="text" class="form-control" id="specification" name="specification" readonly>

                        </div>
                        <div class="col-sm-1">
                            <label for="" class="col-sm-6 col-form-label">UoM</label>
                            <input type="text" class="form-control" id="uom" name="uom" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <label for="" class="col-sm-6 col-form-label">Qty</label>
                            <input type="text" class="form-control" id="qty" name="qty" required>
                        </div>
                        <div class="col-sm-4">
                            <label for="" class="col-sm-6 col-form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location" required>
                        </div>
                        <div class="col-sm-3">
                            <label for="" class="col-sm-6 col-form-label">Warehouse</label>
                            <input type="text" class="form-control" id="warehouse_code" name="warehouse_code"
                                value="<?= $this->session->userdata('warehouse') ?>">
                        </div>
                        <div class="col-sm-3">
                            <label for="" class="col-sm-6 col-form-label">Equipment</label>
                            <input type="text" class="form-control" id="equipment" name="equipment">
                        </div>

                    </div>
                </div>
                <div class="col-sm-12">
                    <hr size="12px">
                </div>
        </div>


        <center>
            <button class="btn btn-primary add-more" type="button"> Add</button>

            <a href="<?= base_url(); ?>issue" class="btn btn-danger">
                Cancel
            </a>
            <button id="simpan" type="submit" class="btn btn-success"
                onclick=" return confirm('Are You Sure Want To Save ?')">Save</button>
        </center>
        </form>
    </div>
</div>
</div>


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