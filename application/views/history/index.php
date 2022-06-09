<div class="container" style="margin-top: 120px;">
    <div class="cards shadow p-3 mb-5 bg-white rounded">
        <h4 class="card-title">History</h4>
        <div class="card-body">
            <div class="container">
                <!--  ISI DISINI  -->
                <div class="row">
                    <div class="col">
                        <table id="warehouse" class="table table-hover-responsive">
                            <thead class="text-primary">
                                <tr>
                                    <th>No</th>
                                    <th>Date</th>
                                    <th>Document Number</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i = 1;
                                    foreach ($history as $data) { 
                                ?>

                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $data->date ?></td>
                                    <td><?= $data->doc_num ?></td>
                                    <td><?= $data->description ?></td>
                                    <td>
                                        <!-- <button type="button" class="btn btn-warning btn-sm"
                                            style="margin:0px; height:35px;" data-bs-toggle="modal"
                                            data-bs-target="#edit<?=$i ?>">View</button> -->
                                        <a href="" data-bs-toggle="modal" data-bs-target="#history"><i
                                                class="fa-solid fa-eye"></i></a>
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