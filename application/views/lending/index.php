<div class="container" style="margin-top: 120px;">
    <?php if($this->session->userdata('role') == "1" || $this->session->userdata('role') == "3") { ?>
    <a href="<?= base_url(); ?>Issue/view_lending" id="Add" type="submit" class="btn btn-success"
        style="margin:0; padding:15px">Add</a>
    <?php ;} ?>
    <div class="cards shadow p-3 mb-5 bg-white rounded" style="min-height: 400px; margin-top:3px">
        <div class="cards-header card-header-text">
            <div class="row">
                <div class="col">
                    <h4 class="card-title">Lending Activity</h4>
                </div>
                <div class="col-md-4">
                    <form action="<?= base_url() . 'settings/view_all_items' ?>" method="POST" autocomplete="off">
                        <div class="input-group">
                            <input type="text submit" class="form-control" id="keyword" name="keyword"
                                value="<?= $this->session->userdata('keyword_item') ?>" placeholder="Search...">
                            <input type="submit" class="btn btn-warning"
                                style="padding-top:13px; margin:0px; height:45px; font-size:medium;" name="search"
                                value="Search">

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
                        <th>Lending No</th>
                        <th>Item Code</th>
                        <th>Qty</th>
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
                        <td><?= $data->borrower_name ?></td>
                        <td><?= $data->dept_code ?></td>
                        <td><?= $data->status ?></td>
                        <td>
                            <?php if (strtolower($data->status) == "open") { ?>
                            <a href="<?= base_url() ?>received/view_lending?lending_no=<?= $data->lending_no ?>">
                                <button type="submit" class="btn btn-warning btn-sm"
                                    style="margin:0px; height:35px;">Closed</button>
                            </a>
                            <?php ;} else { ?>
                            -
                            <?php ;} ?>
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