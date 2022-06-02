<div class="container" style="margin-top: 80px;">
    <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-body">
            <div class="container">
                <!--  ISI DISINI  -->
                <div class="row">
                    <div class="col">
                        <table id="warehouse" class="table table-hover-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Item Code</th>
                                    <th>Item Name</th>
                                    <th>Item Spec</th>
                                    <th>UoM</th>
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
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $data->item_code ?></td>
                                    <td><?php echo $data->item_name ?></td>
                                    <td><?php echo $data->item_specification ?></td>
                                    <td><?php echo $data->uom ?></td>
                                    <td><?php echo $data->location ?></td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm" style="margin:0px"
                                            data-bs-toggle="modal" data-bs-target="#edit">Edit</button>
                                    </td>
                                </tr>

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

<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:60%>
        <div class="card">
            <div class="card-body">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #563d7c">
                        <h5 class="modal-title" style="color:gold" id="exampleModalLabel">Form Edit Barang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputno" class="form-label">No</label>
                                <input type="Text" class="form-control" id="exampleInputno" aria-describedby="no">
                            </div>
                            <div class="mb-3">
                                <label for="exampleItemCode" class="form-label">Item Code</label>
                                <input type="Text" class="form-control" id="exampleItemCode">
                            </div>
                            <div class="mb-3">
                                <label for="exampleItemName" class="form-label">Item Name</label>
                                <input type="Text" class="form-control" id="exampleItemName">
                            </div>
                            <div class="mb-3">
                                <label for="exampleItemSpec" class="form-label">Item Spec</label>
                                <input type="Text" class="form-control" id="exampleItemSpec">
                            </div>
                            <div class="mb-3">
                                <label for="exampleUoM" class="form-label">UoM</label>
                                <input type="Text" class="form-control" id="exampleUoM">
                            </div>
                            <div class="mb-3">
                                <label for="exampleLocation" class="form-label">Location</label>
                                <input type="Text" class="form-control" id="exampleLocation">
                            </div>

                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Save changes</button>
                        </div>
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