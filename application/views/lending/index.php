<div class="container" style="margin-top: 80px;">
<?php if ($this->session->flashdata('flash')) : ?>
    <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('flash') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php $this->session->unset_userdata('flash');
	endif; ?>
    <div class="cards shadow p-3 mb-5 bg-white rounded" style="min-height: 400px; margin-top:3px">
        <div class="cards-header card-header-text">
            <h4 class="card-title">Lending Activity</h4>
            <div class="row">
                <div class="col">

                    <?php if($this->session->userdata('role') == "1" || $this->session->userdata('role') == "3") { ?>
                    <a href="<?= base_url(); ?>Issue/view_lending" id="Add" type="submit" class="btn btn-primary"
                        style="width: 150px;">Add</a>
                    <?php ;} ?> 
                </div>
                <div class="col-md-4">
                    <form action="<?= base_url() . 'lending' ?>" method="POST" autocomplete="off">
                        <div class="input-group">
                            <input type="text submit" class="form-control" id="keyword" name="keyword"
                                value="<?= $this->session->userdata('keyword_lending') ?>" placeholder="Search...">
                            <input type="submit" class="btn btn-warning" style="height:45px; font-size:medium;"
                                name="search" value="Search">
                        </div>
                    </form>
                </div>
            </div>
            <!-- <p class="category">All Warehouse</p> -->
        </div>
        <div class="card-content table-responsive">
            <table id="lending" class="table table-striped table-hover">
                <thead class="text-primary">
                    <tr>
                        <th>No</th>
                        <th>Date</th>
                        <th>Lending No</th>
                        <th>Item Code</th>
                        <th>Qty</th>
                        <th>Warehouse</th>
                        <th>Borrower</th>
                        <th>Dept</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                                    $i = 1+$start;
                                    foreach ($lending as $data) { 
                                ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $data->lending_date ?></td>
                        <td><?= $data->lending_no ?></td>
                        <td><?= $data->item_code ?></td>
                        <td><?= $data->lending_qty ?></td>
                        <td><?= $data->warehouse_code ?></td>
                        <td><?= $data->borrower_name ?></td>
                        <td><?= $data->dept_code ?></td>
                        <td><?= $data->status ?></td>
                        <td>
                            <?php if (strtolower($data->status) == "open") { ?>
                            <a
                                href="<?= base_url() ?>received/view_lending?info=<?= $data->lending_date .';'. $data->lending_no .';'. $data->item_code .';'. $data->warehouse_code .';'. $data->borrower_name .';'. $data->dept_code ?>">
                                <button type="submit" class="btn btn-warning btn-sm"
                                    style="margin:0px; height:35px;">Closed</button>
                            </a>
                            <?php ;} else {
                                echo 'Return '.$data->return_date; } ?>
                        </td>
                    </tr>
                    <?php
                            $i++;
                            } ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>


</div>


<script>
$(document).ready(function() {
    // $('#lending').DataTable();

});
</script>