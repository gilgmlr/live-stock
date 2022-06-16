<div class="container" style="margin-top: 120px;">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('flash') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php $this->session->unset_userdata('flash');
	endif; ?>

    <div class="cards shadow p-3 mb-3 bg-white rounded" style="min-height: 400px; margin-top:3px;">
        <div class=" cards-header card-header-text">
            <div class="row">
                <div class="col">
                    <h4 class="card-title">All Items</h4>
                </div>
                <div class="col-md-3">
                    <form action="<?= base_url() . 'settings/view_all_items' ?>" method="POST" autocomplete="off">
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroup-sizing-default">Search</span>
                            <input type="text submit" class="form-control" id="search" name="search"
                                value="<?= $this->session->userdata('keyword_item') ?>">
                        </div>
                    </form>
                </div>
            </div>
            <!-- <p class="category">All Warehouse</p> -->
        </div>
        <div class="card-content table-responsive">

            <table id="items" class="table table-hover">
                <thead class="text-primary">
                    <tr>
                        <th>No</th>
                        <th>Item Code</th>
                        <th>Name</th>
                        <th>Specification</th>
                        <th>UoM</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = $start+1;
                        foreach ($items as $data) { 
                    ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $data->item_code ?></td>
                        <td><?= $data->name ?></td>
                        <td><?= $data->specification ?></td>
                        <td><?= $data->uom ?></td>
                        <td>
                            <div class="container px-1">
                                <div class="row">
                                    <div class="row-md-2">
                                        <a href="" data-bs-toggle="modal"
                                            data-bs-target="#change<?= $data->item_code ?>"><i class="fa-solid fa-pen"
                                                style="margin-left:5px"></i></a>
                                        <a
                                            href="<?= base_url() ?>settings/delete_item?item_code=<?= $data->item_code ?>"><i
                                                class="fa-solid fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Modal Change -->
                    <div class="modal fade" id="change<?= $data->item_code ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:30%>
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #563d7c">
                                    <h5 class="modal-title" style="color: gold;" id="exampleModalLabel">Change Password
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="<?= base_url() . 'settings/update_item' ?>" method="POST"
                                    autocomplete="off">
                                    <div class="modal-body">
                                        <div class="container">

                                            <div class="col-sm-12">
                                                <label class="col-sm-6 col-form-label" for="form3Example1c">Item
                                                    Code</label>
                                                <input type="text" id="item_code" class="form-control" name="item_code"
                                                    placeholder="Enter item code" value="<?= $data->item_code ?>"
                                                    readonly />
                                            </div>
                                            <div class="col-sm-12"">
                                                <label class=" col-sm-6 col-form-label" for="form3Example1c">
                                                Name</label>
                                                <input type="text" id="name" class="form-control" name="name"
                                                    placeholder="Enter item code" value="<?= $data->name ?>" required />
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="col-sm-6 col-form-label"
                                                    for="form3Example1c">Specification</label>
                                                <textarea class="form-control" name="spec" id="spec" rows="3"
                                                    required><?= $data->specification ?></textarea>
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="col-sm-6 col-form-label" for="form3Example1c">UoM</label>
                                                <input type="text" id="uom" class="form-control" name="uom"
                                                    value="<?= $data->uom ?>" required />
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="batal" type="submit" class="btn btn-danger"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button id="simpan" type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- AKHIR MODAL  -->

                    <?php $i++; } ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>




<script>
$(document).ready(function() {
    // $('#items').DataTable();
});
</script>