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
            <h4 style="font-weight:bold;"> Form Material Issue</h4>
        </center>
        <div class=" card-body">
            <form action="<?= base_url() ?>issue/addMI" method="POST" autocomplete="off">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="" class="col-sm-6 col-form-label">MI No</label>
                            <input type="text" class="form-control" id="mi_code" name="mi_code"
                                value="MI01-C02<?= substr(date('Y'),2,4) . date('m') ?>" required>
                        </div>

                        <div class="col">
                            <label for="" class="col-sm-3 col-form-label">Dept No</label>
                            <input type="text" class="form-control" id="dept_no" name="dept_no" required
                                autocomplete="off">
                        </div>
                        <div class="col">
                            <label for="" class="col-sm-4 col-form-label">Dept Name</label>
                            <input type="text" class="form-control" id="dept_name" name="dept_name" required
                                autocomplete="off">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-3">
                            <label for="" class="col-sm-6 col-form-label">Entry Date</label>
                            <input type="date" class="form-control" id="entri_date" name="entri_date"
                                value="<?php echo date('Y-m-d'); ?>" required>
                        </div>
                        <div class="col-sm-3">
                            <label for="" class="col-sm-6 col-form-label">Posting Date</label>
                            <input type="date" class="form-control" id="post_date" name="post_date"
                                value="<?php echo date('Y-m-d'); ?>" required>
                        </div>
                        <div class="col">
                            <label for="" class="col-sm-6 col-form-label">Project No</label>
                            <input type="text" class="form-control" id="project_no" name="project_no" required
                                autocomplete="off">
                        </div>
                    </div>

                    <label for="" class="col-sm-6 col-form-label">Description</label>
                    <textarea class="form-control" id="desc" name="desc" rows="1"></textarea>

                    <div class="row">
                        <div class="col-sm-3">
                            <label for="" class="col-sm-6 col-form-label">Reference</label>
                            <input type="text" class="form-control" id="reference" name="reference" required
                                autocomplete="off">
                        </div>
                        <div class="col-sm-3">
                            <label for="" class="col-sm-6 col-form-label">Reason</label>
                            <input type="text" class="form-control" id="reason_code" name="reason_code" required
                                autocomplete="off">
                        </div>

                        <div class="col-sm-6">
                            <label for="" class="col-sm-4 col-form-label">Entered by</label>
                            <div class="row">
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

                    <div class="col-sm-12">
                        <hr size="12px">
                    </div>


                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="" class="col-sm-6 col-form-label">Item Code*</label>
                                <input type="text" class="form-control" id="item_code" name="item_code[]">
                                <small class="form-text text-danger"><?= form_error('item_code') ?></small>

                            </div>
                            <div class="col-sm-3">
                                <label for="" class="col-sm-6 col-form-label">Item Name</label>
                                <input type="text" class="form-control" id="item_name" name="item_name" readonly>
                            </div>
                            <div class="col-sm-5">
                                <label for="" class="col-sm-6 col-form-label">Spesification</label>
                                <input type="text" class="form-control" id="specification" name="specification"
                                    readonly>

                            </div>
                            <div class="col-sm-1">
                                <label for="" class="col-sm-6 col-form-label">UoM</label>
                                <input type="text" class="form-control" id="uom" name="uom" readonly>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-2">
                                <label for="" class="col-sm-6 col-form-label">Qty*</label>
                                <input type="text" class="form-control" id="qty" name="qty[]">
                            </div>
                            <div class="col-sm-4">
                                <label for="" class="col-sm-6 col-form-label">Location*</label>
                                <input type="text" class="form-control" id="location" name="location[]">
                            </div>
                            <div class="col-sm-3">
                                <label for="" class="col-sm-6 col-form-label">Warehouse*</label>
                                <input type="text" class="form-control" id="warehouse_code" name="warehouse_code[]"
                                    value="<?= $this->session->userdata('warehouse') ?>">
                            </div>
                            <div class="col-sm-3">
                                <label for="" class="col-sm-6 col-form-label">Equipment</label>
                                <input type="text" class="form-control" id="equipment" name="equipment[]">
                            </div>
                        </div>
                        <hr size="12px">
                    </div>
                </div>
        </div>
        <center>
            <button class="btn btn-primary add-more" type="button"> Add</button>

            <a href="<?= base_url(); ?>issue" class="btn btn-danger">
                Cancel
            </a>
            <button id="simpan" type="submit" class="btn btn-success"
                onclick=" return confirm('Are You Sure Want To Save ?')">Save</button>

            <!-- <button onclick="confirmAction()">Delete</button> -->

        </center>

        </form>

        <!-- ALERT -->
        <!-- <div class="position-absolute top-50 start-50 translate-middle">
                <div class="alert alert-success" style="width : 250px" role="alert">
                    <h4 class="alert-heading">Confirmation Alert!</h4>
                    <p>Are you sure want to save this?.</p>
                    <hr>
                    <button type="button" class="btn btn-outline-success">Save</button>
                    <button type="button" class="btn btn-outline-danger">Cancel</button>

                </div>
            </div> -->

        <!-- Modal -->
        <div class="modal fade modal-dialog-scrollable" id="simpan" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered " style=max-width:30%>
                <div class="cards-body">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #563d7c">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <div class="cards shadow p-3 mb-5 bg-white rounded">
                                        ..
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Add Item</button>
                            <button type="button" class="btn btn-succes" data-bs-dismiss="modal">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal  -->
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