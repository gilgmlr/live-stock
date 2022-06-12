<div class="container" style="margin-top: 120px;">
<?php if($this->session->userdata('role') == "1" || $this->session->userdata('role') == "3") { ?>
    <a href="<?= base_url(); ?>Issue/view_lending" id="Add" type="submit" class="btn btn-success"
        style="margin:0; padding:15px">Add</a>
    <?php ;} ?>
    <div class="cards shadow p-3 mb-5 bg-white rounded" style="min-height: 400px; margin-top:3px">
        <div class="cards-header card-header-text">
            <h4 class="card-title">Lending Activity</h4>
            <!-- <p class="category">All Warehouse</p> -->
        </div>
        <div class="card-content table-responsive">
            <table id="lending" class="table table-striped table-hover">
                <thead class="text-primary">
                    <tr>
                        <th>No</th>
                        <th>Lending No</th>
                        <th>Item Code</th>
                        <th>Qty</th>
                        <th>UoM</th>
                        <th>Borrower</th>
                        <th>Dept</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                                    $i = 1;
                                    foreach ($lending as $data) { 
                                ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $data->lending_no ?></td>
                        <td><?= $data->item_code ?></td>
                        <td><?= $data->lending_qty ?></td>
                        <td><?= $data->uom_code ?></td>
                        <td><?= $data->borrower_name ?></td>
                        <td><?= $data->dept_code ?></td>
                        <td><?= $data->status ?></td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm" style="margin:0px; height:35px;"
                                data-bs-toggle="modal" data-bs-target="#cllending">Closed</button>
                        </td>
                    </tr>
                    <?php
                            $i++;
                            } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- MODAL Closed Lending -->
<!-- <div class="modal fade" id="cllending" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:80%>
        <div class="modal-content">
            <div class="modal-header" style="background-color: #563d7c">
                <h5 class="modal-title" style="color: gold" id="exampleModalLabel"> Lending Return
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="" class="col-sm-6 col-form-label">Lending No</label>
                        <input type="text" class="form-control" id="received_code" name="received_code" required
                            autocomplete="off">
                        <label for="" class="col-sm-6 col-form-label">Return Date</label>
                        <input type="date" class="form-control" id="arrival_date" name="arrival_date" required>
                        <label for="" class="col-sm-6 col-form-label">Item Name</label>
                        <input type="text" class="form-control" id="po_number" name="po_number" required
                            autocomplete="off">
                        <label for="" class="col-sm-6 col-form-label" style="width: 100px;">Vendor
                            Name</label>
                        <input type="text" class="form-control" id="vendor_name" name="vendor_name" required
                            autocomplete="off">
                    </div>
                    <div class="col-sm-6">
                        <label for="" class="col-sm-6 col-form-label">Item Code</label>
                        <select class="form-select form-control" aria-label=".form-select-lg example" id="item_code"
                            name="item_code" required>
                            <option selected>-- Select --</option>
                            <?php foreach ($items as $data) { ?>
                            <option value="<?= $data->item_code ?>"><?= $data->item_code ?> |
                                <?= $data->name ?>
                            </option>
                            <?php $i++; } ?>
                        </select>
                        <label for="" class="col-sm-6 col-form-label">Qty</label>
                        <input type="text" class="form-control" id="qty" name="qty" required autocomplete="off">
                        <label for="" class="col-sm-6 col-form-label">UoM</label>
                        <select class="form-select form-control" aria-label=".form-select-lg example" id="uom"
                            name="uom" required>
                            <option selected>-- Select --</option>
                            <?php foreach ($uom as $data) { ?>
                            <option value="<?= $data->uom_code ?>"><?= $data->uom_code ?> -
                                <?= $data->uom_name ?>
                            </option>
                            <?php $i++; } ?>
                        </select>

                        <div class="row">

                            <label for="" class="col-sm-6 col-form-label">WH</label>
                            <select class="form-select form-control" aria-label=".form-select-lg example"
                                id="warehouse_code" name="warehouse_code" required>
                                <option selected>-- Select --</option>
                                <?php foreach ($warehouse as $data) { ?>
                                <option value="<?= $data->warehouse_code ?>">
                                    <?= $data->warehouse_code ?>
                                </option>
                                <?php $i++; } ?>
                            </select>


                            <label for="" class="col-sm-6 col-form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location" required
                                autocomplete="off">

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> -->
<!-- End Modal -->
</div>


<script>
$(document).ready(function() {
    //$('#warehouse').DataTable();
    $('#lending').DataTable();

});
</script>