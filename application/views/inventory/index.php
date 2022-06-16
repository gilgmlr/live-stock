<div class="container" style="margin-top: 120px;">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('flash') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php $this->session->unset_userdata('flash');
	endif; ?>
    <div class="cards shadow p-3 mb-5 bg-white rounded" style="max-width:100%">
        <h4 class="card-title">Inventory</h4>
        <div class="card-body">
            <div class="">
                <!--  ISI DISINI  -->
                <div class="row">
                    <div class="col table-responsive">
                        <table id="warehouse" class="table table-striped table-hover">
                            <thead class="text-primary">
                                <tr>
                                    <th>No</th>
                                    <th>Item Code</th>
                                    <th>Item Name</th>
                                    <th>Item Spec</th>
                                    <th>UoM</th>
                                    <th>Stocks</th>
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
                                    $i = 1;
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
                                    <td><?= $data->uom ?></td>
                                    <td><?= $data->stocks ?></td>
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
                                            data-bs-target="#edit<?= $data->item_code ?>"><i
                                                class="fa-solid fa-pencil"></i></a>
                                    </td>
                                <?php ;} ?>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="edit<?= $data->item_code ?>" tabindex="-1"
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
                                                <form action="<?= base_url() ?>inventory/UpdateInventory" method="POST">
                                                    <div class="container">
                                                        <div class="row justify-content-center">
                                                            <div class="col-sm-6">
                                                                <label for="" class="col-sm-6 col-form-label">Item
                                                                    Code</label>
                                                                <input type="text" class="form-control" id="item_code"
                                                                    name="item_code" value="<?= $data->item_code ?>"
                                                                    readonly>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label for="" class="col-sm-6 col-form-label">Item
                                                                    Name</label>
                                                                <input type="text" class="form-control" id="name"
                                                                    name="name" value="<?= $data->name ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col-sm-12">
                                                                <label for="" class="col-sm-6 col-form-label">Item
                                                                    Specification</label>
                                                                <textarea class="form-control" id="spec" name="spec"
                                                                    rows="2"><?=$data->specification ?></textarea>

                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col-sm-6">
                                                                <label for=""
                                                                    class="col-sm-6 col-form-label">Stoks</label>
                                                                <input type="text" class="form-control" id="stocks"
                                                                    name="stocks" value="<?=$data->stocks ?>" readonly>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label for=""
                                                                    class="col-sm-6 col-form-label">Warehouse</label>
                                                                <input type="text" class="form-control"
                                                                    id="warehouse_code" name="warehouse_code"
                                                                    value="<?=$data->warehouse_code ?>" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col-sm-6">
                                                                <label for=""
                                                                    class="col-sm-6 col-form-label">UoM</label>
                                                                <input type="text" class="form-control" id="uom"
                                                                    name="uom" value="<?=$data->uom?>"
                                                                    readonly>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label for=""
                                                                    class="col-sm-6 col-form-label">Location</label>
                                                                <input type="text" class="form-control" id="location"
                                                                    name="location" value="<?=$data->location?>"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col-sm-6">
                                                                <label for=""
                                                                    class="col-sm-6 col-form-label">Equipment</label>
                                                                <input type="text" class="form-control" id="equipment"
                                                                    name="equipment" value="<?=$data->equipment?>">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label for=""
                                                                    class="col-sm-6 col-form-label">Status</label>
                                                                    <?php if (strtolower($data->status) == '1') { ?>
                                                                    <select class="form-select form-control" aria-label=".form-select-lg example"
                                                                        id="status" name="status" required>
                                                                        <option value="1">1 - Available</option>
                                                                        <option value="0">0 - Not Available</option>
                                                                    </select>
                                                                    <?php } else { ?>
                                                                        <select class="form-select form-control" aria-label=".form-select-lg example"
                                                                        id="status" name="status" required>
                                                                        
                                                                        <option value="0">0 - Not Available</option>
                                                                        <option value="1">1 - Available</option>
                                                                    </select>
                                                                    <?php }; ?>
                                                                <!-- <input type="text" class="form-control" id="status"
                                                                    name="status" value="<?=$data->status?>"> -->
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button id="close" type="button" class="btn btn-warning"
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
            </div>
        </div>
    </div>
</div>



</div>
</div>

</body>
<script>
$(document).ready(function() {
    $('#warehouse').DataTable();
});
</script>

</html>