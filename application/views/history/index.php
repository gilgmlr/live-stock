<div class="container" style="margin-top: 80px;">
    <div class="cards shadow p-3 mb-5 bg-white rounded">
        <h4 class="card-title">History</h4>

        <div class="row">
            <div class="col">
                <a href="settings/generateXls" ><button id="simpan" type="submit"
                        class="btn btn-secondary" style="width: 150px;"
                        onclick=" return confirm('Are You Sure Want To Download this file ?')">Export
                        Data</button></a>

            </div>
            <div class="col-md-4">
                <form action="<?= base_url('history') ?>" method="POST" autocomplete="off">
                    <div class="input-group">
                        <input type="text submit" class="form-control" id="keyword" name="keyword"
                            value="<?= $this->session->userdata('keyword_history') ?>" placeholder="Search...">
                        <input type="submit" class="btn btn-warning"
                            style="margin:0px; height:45px; font-size:medium;" name="search"
                            value="Search">
                    </div>
                </form>
            </div>
        </div>
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
                                    $i = $start+1;
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
                        <?= $this->pagination->create_links(); ?>
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
    // $('#warehouse').DataTable();
});
</script>

</html>