<div class="container" style="margin-top: 80px;">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('flash') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php $this->session->unset_userdata('flash');
	endif; ?>
    <div class="cards shadow p-1 mb-5 bg-white rounded">
        <center>
            <h4 style="font-weight:bold;"> Form Good Recived</h4>

        </center>
        <div class=" card-body">
            <form action="<?= base_url() ?>received/add_Received" method="POST" autocomplete="off" style="font-weight:bold" ;>
                <div class="control-group after-add-more">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-6">
                                <label for="" class="col-sm-6 col-form-label">GR Number*</label>
                                <input type="text" class="form-control" id="received_code" name="received_code"
                                    value="GR02-C02<?= substr(date('Y'),2,4) . date('m') ?>" required>
                                <label for="" class="col-sm-6 col-form-label">PO Number*</label>
                                <input type="text" class="form-control" id="po_number" name="po_number">
                            </div>

                            <div class="col-sm-6">
                                <label for="" class="col-sm-6 col-form-label">Arrival Date*</label>
                                <input type="date" class="form-control" id="arrival_date" name="arrival_date"
                                    value="<?php echo date('Y-m-d'); ?>" required>
                                <label for="" class="col-sm-6 col-form-label">Vendor Name*</label>
                                <input type="text" class="form-control" id="vendor_name" name="vendor_name">
                                <label for="" class="col-sm-12 col-form-label">Entered by</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="created_by" name="created_by"
                                            readonly value="<?= $this->session->userdata('nip'); ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="" name="" readonly
                                            value="<?= $this->session->userdata('name'); ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <hr size="12px">
                            </div>

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-3 rec-element">
                                        <label for="" class="col-sm-6 col-form-label"><b>[1]</b> Item Code*</label>
                                        <input type="text" class="form-control" id="item_code1" name="item_code[]">
                                        <small class="form-text text-danger"><?= form_error('item_code1') ?></small>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="" class="col-sm-6 col-form-label">Item Name</label>
                                        <input type="text" class="form-control" id="item_name1" name="item_name[]"
                                            readonly>
                                    </div>
                                    <div class="col-sm-5">
                                        <label for="" class="col-sm-6 col-form-label">Spesification</label>
                                        <input type="text" class="form-control" id="specification1"
                                            name="specification[]" readonly>

                                    </div>
                                    <div class="col-sm-1">
                                        <label for="" class="col-sm-6 col-form-label">UoM</label>
                                        <input type="text" class="form-control" id="uom1" name="uom[]" readonly>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-2">
                                        <label for="" class="col-sm-6 col-form-label">Qty*</label>
                                        <input type="text" class="form-control" id="qty1" name="qty[]">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="" class="col-sm-6 col-form-label">Location*</label>
                                        <input type="text" class="form-control" id="location1" name="location[]">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="" class="col-sm-6 col-form-label">Warehouse*</label>
                                        <input type="text" class="form-control" id="warehouse_code1"
                                            name="warehouse_code[]"
                                            value="<?= $this->session->userdata('warehouse') ?>">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="" class="col-sm-6 col-form-label">Equipment</label>
                                        <input type="text" class="form-control" id="equipment1" name="equipment[]">
                                    </div>
                                </div>
                                <hr size="12px">
                            </div>
                        </div>
                    </div>
                </div>
                <input type="text" class="form-control" id="desc" name="desc" value="Good Receive" hidden>
                <div id="nextkolom" name="nextkolom"></div>
                <div class="cards-footer">
                    <center>
                        <button class="btn btn-primary tambah-form" type="button"> Add</button>
                        <a href="<?= base_url(); ?>received" class="btn btn-secondary">
                            Cancel
                        </a>
                        <button id="simpan" type="submit" class="btn btn-warning"
                            onclick=" return confirm('Are You Sure Want To Save ?')">Save</button>
                    </center>
                </div>

            </form>
        </div>

    </div>
</div>


<script type="text/javascript">
$(document).ready(function() {
    $('#item_code1').on('input', function() {
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
                    $('[id="item_name1"]').val(data.name);
                    $('[id="specification1"]').val(data.specification);
                    $('[id="uom1"]').val(data.uom);
                });

            }
        });
        return false;
    });

    $('#received_code').on('input', function() {
        var received_code = $(this).val();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url().'auto/get_Adjusment'?>",
            dataType: "JSON",
            data: {
                received_code: received_code
            },
            cache: false,
            success: function(data) {
                $.each(data, function(received_code, arrival_date, po_number, vendor_name) {
                    $('[name="arrival_date"]').val(data.arrival_date);
                    $('[name="po_number"]').val(data.po_number);
                    $('[name="vendor_name"]').val(data.vendor_name);
                });

            }
        });
        return false;
    });

    var i = 2;
    $(".tambah-form").on('click', function() {
        row = '<div class="container col-sm-12 rec-element">' +
            '<div class="row">' +
            '<div class="col-sm-3">' +
            '<label for="" class="col-sm-6 col-form-label"><b>[' + i + ']</b> Item Code*</label>' +
            '<input type="text" class="form-control" id="item_code' + i + '" name="item_code[]">' +
            '<small class="form-text text-danger"><?= form_error("item_code'+i+'") ?></small>' +
            '</div>' +
            '<div class="col-sm-3">' +
            '<label for="" class="col-sm-6 col-form-label">Item Name</label>' +
            '<input type="text" class="form-control" id="item_name' + i +
            '" name="item_name[]" readonly>' +
            '</div>' +
            '<div class="col-sm-4">' +
            ' <label for="" class="col-sm-6 col-form-label">Spesification</label>' +
            '<input type="text" class="form-control" id="specification' + i +
            '" name="specification[]" readonly>' +
            '</div>' +
            '<div class="col-sm-1">' +
            '<label for="" class="col-sm-6 col-form-label">UoM</label>' +
            '<input type="text" class="form-control" id="uom' + i + '" name="uom[]" readonly>' +
            '</div>' +
            '<div class="col-sm-1">' +
            '<button type="button" class="btn btn-danger del-element fa-solid fa-trash" style="height:75px; width: 75px; font-size: 12px;"></button>' +
            '</div>' +
            '</div>' +

            '<div class="row">' +
            '<div class="col-sm-2">' +
            '<label for="" class="col-sm-6 col-form-label">Qty*</label>' +
            '<input type="text" class="form-control" id="qty' + i + '" name="qty[]">' +
            '</div>' +
            '<div class="col-sm-4">' +
            '<label for="" class="col-sm-6 col-form-label">Location*</label>' +
            '<input type="text" class="form-control" id="location' + i + '" name="location[]">' +
            '</div>' +
            '<div class="col-sm-3">' +
            '<label for="" class="col-sm-6 col-form-label">Warehouse*</label>' +
            '<input type="text" class="form-control" id="warehouse_code' + i +
            '" name="warehouse_code[]" value="<?= $this->session->userdata('warehouse') ?>">' +
            '</div>' +
            '<div class="col-sm-3">' +
            '<label for="" class="col-sm-6 col-form-label">Equipment</label>' +
            '<input type="text" class="form-control" id="equipment' + i + '" name="equipment[]">' +
            '</div>' +
            '</div>' +
            '<hr size="12px">' +
            '</div>';

        $(row).insertBefore("#nextkolom");
        $('#jumlahkolom').val(i + 1);
        i++;
    });

    $(document).on('click', '.del-element', function(e) {
        e.preventDefault()
        i--;
        //$(this).parents('.rec-element').fadeOut(400);
        $(this).parents('.rec-element').remove();
        $('#jumlahkolom').val(i - 1);
    });

});
</script>