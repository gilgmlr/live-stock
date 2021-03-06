<div class="container" style="margin-top: 80px;">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div id="alert" class="alert alert-warning alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('flash') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php $this->session->unset_userdata('flash');
	endif; ?>
    <div class="cards shadow p-3 mb-5 bg-white rounded" style="max-width:100%">
        <h4 class="card-title">Inventory</h4>
        <div class="row">
            <div class="col">
                <a href="<?=base_url() ?>export/inventory?key=<?= $this->session->userdata('keyword_inventory') ?>"><button id="simpan" type="submit" class="btn btn-primary"
                        style="width: 150px;"
                        onclick=" return confirm('Are You Sure Want To Download this file ?')">Export
                        Data</button></a>

            </div>
            <div class="col-md-4">
                <form action="<?= base_url() . 'inventory' ?>" method="POST" autocomplete="off">
                    <div class="input-group">
                        <input type="text submit" class="form-control" id="keyword" name="keyword"
                            value="<?= $this->session->userdata('keyword_inventory') ?>" placeholder="Search...">
                        <input type="submit" class="btn btn-warning" style="height:45px; font-size:medium;"
                            name="search" value="Search">
                    </div>
                </form>
                <b> Result: <?= $total_rows ?> Items </b>
            </div>
        </div>
        <div class="card-body">
            <div class="">
                <!--  ISI DISINI  -->
                <div class="row">
                    <div class="col table-responsive">
                        <table id="warehouse" class="table table-striped table-hover">
                            <thead class="text-primary">
                                <tr>
                                    <th>No</th>
                                    <th style="width:130px">Item Code</th>
                                    <th>Item Name</th>
                                    <th>Item Spec</th>
                                    <th>Stocks</th>
                                    <th>UoM</th>
                                    <th>Warehouse</th>
                                    <th>Location</th>
                                    <th>Equipment</th>
                                    <th>Status</th>
                                    <?php if($this->session->userdata('role') == "1") { ?>
                                    <th>Action</th>
                                    <?php ;} ?>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- ISI KONFIG BACKEND DISINI -->
                                <?php
                                    $i = $start+1;
                                    foreach ($stock as $data) { 
                                ?>

                                <?php if (strtolower($data->status) != '1') { ?>
                                <tr style="background-color: red;" id="id-<?= $i ?>">
                                    <?php ;} else { ?>
                                <tr id="id-<?= $i ?>">
                                    <?php ;} ?>
                                    <td> <?= $i ?></td>
                                    <td><?= $data->item_code ?></td>
                                    <td><?= $data->name ?></td>
                                    <td><?= $data->specification ?></td>
                                    <td><?= $data->stocks ?></td>
                                    <td><?= $data->uom ?></td>
                                    <td><?= $data->warehouse_code ?></td>
                                    <td><?= $data->location ?></td>
                                    <td><?= $data->equipment ?></td>
                                    <td>
                                        <?php if (strtolower($data->status) == '1') { ?>
                                        <span class="material-symbols-outlined">Done</span>
                                        <?php } else { ?>
                                        <span class="material-symbols-outlined">Close</span>
                                        <?php }; ?>
                                    </td>

                                    <?php if($this->session->userdata('role') == "1") { ?>
                                    <td>
                                        <a href="" data-bs-toggle="modal"
                                            data-bs-target="#edit<?= $data->item_code.'-'.$data->warehouse_code ?>"><i
                                                class="fa-solid fa-pencil"></i></a>
                                    </td>
                                    <?php ;} ?>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="edit<?= $data->item_code.'-'.$data->warehouse_code ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                        style=max-width:60%>

                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: #563d7c">
                                                <h5 class="modal-title" style="color:gold" id="exampleModalLabel">Form
                                                    Edit Barang</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url() ?>inventory/UpdateInventory" method="POST"
                                                    autocommplete="off">
                                                    <div class="container">
                                                        <div class="row justify-content-center">
                                                            <div class="col-sm-6">
                                                            <input type="text" id="id" name="id" value="<?= $data->id ?>" hidden>
                                                                <label for="" class="col-sm-6 col-form-label">Item
                                                                    Code</label>
                                                                <input type="text" class="form-control" id="item_code"
                                                                    name="item_code" value="<?= $data->item_code ?>"
                                                                    readonly>
                                                                <label for="" class="col-sm-6 col-form-label">Item
                                                                    Name</label>
                                                                <input type="text" class="form-control" id="name"
                                                                    name="name" value="<?= $data->name ?>" required>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <label for=""
                                                                            class="col-sm-6 col-form-label">Stoks</label>
                                                                        <input type="text" class="form-control"
                                                                            id="stocks" name="stocks"
                                                                            value="<?=$data->stocks ?>" readonly>
                                                                    </div>
                                                                    <div class="col">
                                                                        <label for=""
                                                                            class="col-sm-6 col-form-label">UoM</label>
                                                                        <input type="text" class="form-control" id="uom"
                                                                            name="uom" value="<?=$data->uom?>" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label for="" class="col-sm-6 col-form-label">Item
                                                                    Specification</label>
                                                                <textarea class="form-control" id="spec" name="spec"
                                                                    rows="4"><?=$data->specification ?></textarea>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <label for=""
                                                                            class="col-sm-6 col-form-label">Warehouse</label>
                                                                        <input type="text" class="form-control"
                                                                            id="warehouse_code" name="warehouse_code"
                                                                            value="<?=$data->warehouse_code ?>"
                                                                            readonly>
                                                                    </div>
                                                                    <div class="col">
                                                                        <label for=""
                                                                            class="col-sm-6 col-form-label">Location</label>
                                                                        <input type="text" class="form-control"
                                                                            id="location" name="location"
                                                                            value="<?=$data->location?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <label for=""
                                                                            class="col-sm-6 col-form-label">Equipment</label>
                                                                        <input type="text" class="form-control"
                                                                            id="equipment" name="equipment"
                                                                            value="<?=$data->equipment?>">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for=""
                                                                            class="col-sm-6 col-form-label">Status</label>
                                                                        <?php if (strtolower($data->status) == '1') { ?>
                                                                        <select class="form-select form-control"
                                                                            aria-label=".form-select-lg example"
                                                                            id="status" name="status" required>
                                                                            <option value="1">Available</option>
                                                                            <option value="0">Not Available</option>
                                                                        </select>
                                                                        <?php } else { ?>
                                                                        <select class="form-select form-control"
                                                                            aria-label=".form-select-lg example"
                                                                            id="status" name="status" required>

                                                                            <option value="0">Not Available</option>
                                                                            <option value="1">Available</option>
                                                                        </select>
                                                                        <?php }; ?>
                                                                        <!-- <input type="text" class="form-control" id="status"
                                                                    name="status" value="<?=$data->status?>"> -->
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button id="close" type="button" class="btn btn-danger"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <button id="simpan" type="submit"
                                                                class="btn btn-success">Simpan</button>
                                                        </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
                <!-- End Modal -->

                <?php
                            $i++;
                            }
                        ?>
                </tbody>
                </table>
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</div>

</div>
</div>

</body>
<script>
$(document).ready(function() {
    // $('#warehouse').DataTable();
});
</script>

</html>