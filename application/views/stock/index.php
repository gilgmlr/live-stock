<div class="con">
    <div class="container-fluid">
        <!--  ISI DISINI  -->
        <table id="warehouse" class="table table-striped">
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
                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Edit</button>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</div> <!-- flex -->

</body>
<script>
$(document).ready(function() {
    $('#warehouse').DataTable();
});
</script>

</html>