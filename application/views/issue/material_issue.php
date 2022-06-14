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
            <form action="<?= base_url() ?>issue/addMI" method="POST">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <label for="" class="col-sm-6 col-form-label">MI No</label>
                            <input type="text" class="form-control" id="mi_code" name="mi_code"
                                value="MI01-C02<?= substr(date('Y'),2,4) . date('m') ?>" required>
                            <!-- <select class="form-select form-control" aria-label=".form-select-lg example" id="mi_code"
                                name="mi_code" required>
                                <option selected>-- Select --</option>
                                <?php foreach ($mi_code as $data) { ?>
                                <option value="<?= $data->doc_no ?>"><?= $data->doc_no ?></option>
                                <?php $i++; } ?>
                            </select>  -->

                            <label for="" class="col-sm-6 col-form-label">Entry Date</label>
                            <input type="date" class="form-control" id="entri_date" name="entri_date" value="<?php echo date('Y-m-d'); ?>" required>
                            </select> <label for="" class="col-sm-6 col-form-label">Posting Date</label>
                            <input type="date" class="form-control" id="post_date" name="post_date" value="<?php echo date('Y-m-d'); ?>" required>
                            <label for="" class="col-sm-6 col-form-label">Dept No</label>
                            <input type="text" class="form-control" id="dept_no" name="dept_no" required
                                autocomplete="off">
                            <label for="" class="col-sm-6 col-form-label">Project No</label>
                            <input type="text" class="form-control" id="project_no" name="project_no" required
                                autocomplete="off">
                            <label for="" class="col-sm-6 col-form-label">Description</label>
                            <textarea class="form-control" id="desc" name="desc" rows="4"></textarea>
                        </div>
                        <div class="col-sm-6">
                            <label for="" class="col-sm-6 col-form-label">Item No</label>
                            <select class="form-select form-control" aria-label=".form-select-lg example" id="item_code"
                                name="item_code" required>
                                <option selected>-- Select --</option>
                                <?php foreach ($items as $data) { ?>
                                <option value="<?= $data->item_code ?>"><?= $data->item_code ?> - <?= $data->name ?>
                                </option>
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
                            <label for="" class="col-sm-6 col-form-label">Warehouse Code</label>
                            <select class="form-select form-control" aria-label=".form-select-lg example"
                                id="warehouse_code" name="warehouse_code" required>
                                <option selected>-- Select --</option>
                                <?php foreach ($warehouse as $data) { ?>
                                <option value="<?= $data->warehouse_code ?>"><?= $data->warehouse_code ?></option>
                                <?php $i++; } ?>
                            </select>
                            <label for="" class="col-sm-6 col-form-label">Transaction Qty</label>
                            <input type="text" class="form-control" id="transaction_qty" name="transaction_qty" required
                                autocomplete="off">
                            <label for="" class="col-sm-6 col-form-label">Reference</label>
                            <input type="text" class="form-control" id="reference" name="reference" required
                                autocomplete="off">

                            <label for="" class="col-sm-6 col-form-label">Reason</label>
                            <input type="text" class="form-control" id="reason_code" name="reason_code" required
                                autocomplete="off">
                                <label for="" class="col-sm-6 col-form-label">Entered by</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="created_by" name="created_by"
                                            readonly value="<?= $this->session->userdata('nip'); ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id=""
                                            name="" readonly
                                            value="<?= $this->session->userdata('name'); ?>">
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>


                <div class="cards-footer">
                    <center>
                        <a href="<?= base_url(); ?>issue" class="btn btn-danger" style="padding:17px">
                            Batal
                        </a> <button onclick="confirmAction()" id="simpan" type="submit"
                            class="btn btn-success">Simpan</button>
                        <!-- <button onclick="confirmAction()">Delete</button> -->

                    </center>
                </div>
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
            <div class="modal fade modal-dialog-scrollable" id="simpan" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered " style=max-width:30%>
                    <div class="cards-body">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #563d7c">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
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

<script>
// The function below will start the confirmation dialog
function confirmAction() {
    let confirmAction = confirm("Are you sure to execute this action?");
    if (confirmAction) {
        window.location = url+"user/deleteuser/"+id;
        alert("Action successfully executed");
    } else {
        alert("Action canceled");
    }
}
</script>