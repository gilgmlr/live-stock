<div class="container" style="margin-top: 120px;">
    <div class="cards shadow p-3 mb-5 bg-white rounded">
        <h4 class="card-title">History</h4>
        <a class="btn btn-primary" href="settings/generateXls" style="height: 35px;">Export Data</a>
        <div class="card-body">
            <div class="container">
                <!--  ISI DISINI  -->
                <div class="row">
                    <div class="col table-responsive">
                        <table id="warehouse" class="table table-hover-responsive">
                            <thead class="text-primary">
                                <tr>
                                    <th>No</th>
                                    <th>Doc Date</th>
                                    <th>System Date</th>
                                    <th>Source Doc</th>
                                    <th>DestinationDoc</th>
                                    <th>Item Code</th>
                                    <th>QTY</th>
                                    <th>Warehouse</th>
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i = 1;
                                    foreach ($history as $data) { 
                                ?>

                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $data->doc_date ?></td>
                                    <td><?= $data->system_date ?></td>
                                    <td><?= $data->source_doc ?></td>
                                    <td><?= $data->destination_doc ?></td>
                                    <td><?= $data->item_code ?></td>
                                    <td><?= $data->qty ?></td>
                                    <td><?= $data->warehouse_code ?></td>
                                    <!-- <td>
                                    
                                        <a href="" data-bs-toggle="modal" data-bs-target="#history"><i
                                                class="fa-solid fa-eye"></i></a>
                                    </td> -->
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

<!-- MODAL HISTORY -->
<div class="modal fade" id="history" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:80%>
        <div class="modal-content">
            <div class="modal-header" style="background-color: #563d7c">
                <h5 class="modal-title" style="color: gold" id="exampleModalLabel"> DETAIL HISTORY
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
</body>
<script>
$(document).ready(function() {
    $('#warehouse').DataTable();
});
</script>

</html>