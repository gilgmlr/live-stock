<div class="container" style="margin-top: 120px;">
    <div class="cards shadow p-3 mb-5 bg-white rounded">
        <div class="card-body">
            <div class="container">
                <!--  ISI DISINI  -->
                <div class="row">
                    <div class="col">
                        <table id="warehouse" class="table table-hover">
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- ISI KONFIG BACKEND DISINI -->
                                <?php
                                    $i = 1;
                                    foreach ($stock as $data) { 
                                ?>

                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $data->item_code ?></td>
                                    <td><?= $data->name ?></td>
                                    <td><?= $data->specification ?></td>
                                    <td><?= $data->uom_name ?></td>
                                    <td><?= $data->stocks ?></td>
                                    <td><?= $data->warehouse_code ?></td>
                                    <td><?= $data->location ?></td>
                                    <td>
                                        <!-- <button type="button" class="btn btn-warning btn-sm"
                                            style="margin:0px; height:35px;" data-bs-toggle="modal"
                                            data-bs-target="#edit<?= $data->item_code ?>">Edit</button> -->
                                        <a href="" data-bs-toggle="modal"
                                            data-bs-target="#edit<?= $data->item_code ?>"><i
                                                class="fa-solid fa-pencil"></i></a>
                                    </td>
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
                                                <form action="" method="POST">
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
                                                                <input type="text" class="form-control" id="item_code"
                                                                    name="item_code" value="<?= $data->name ?>"
                                                                    required>
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
                                                                <input type="text" class="form-control" id="item_code"
                                                                    name="item_code" value="<?=$data->stocks ?>"
                                                                    readonly>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label for=""
                                                                    class="col-sm-6 col-form-label">Warehouse</label>
                                                                <input type="text" class="form-control" id="item_code"
                                                                    name="item_code" value="<?=$data->warehouse_code ?>"
                                                                    readonly>
                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col-sm-6">
                                                                <label for=""
                                                                    class="col-sm-6 col-form-label">UoM</label>
                                                                <input type="text" class="form-control" id="item_code"
                                                                    name="item_code" value="<?=$data->uom_name?>"
                                                                    readonly>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label for=""
                                                                    class="col-sm-6 col-form-label">Location</label>
                                                                <input type="text" class="form-control" id="item_code"
                                                                    name="item_code" value="<?=$data->location?>"
                                                                    required>
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