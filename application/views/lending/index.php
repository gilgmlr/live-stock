<div class="container" style="margin-top: 120px;">
    <a href="<?= base_url(); ?>Issue/view_lending" id="Add" type="submit" class="btn btn-success"
        style="margin:0; padding:15px">Add</a>
    <div class="cards shadow p-3 mb-5 bg-white rounded" style="min-height: 400px; margin-top:3px">
        <div class="cards-header card-header-text">
            <h4 class="card-title">Lending Activity</h4>
            <!-- <p class="category">All Warehouse</p> -->
        </div>
        <div class="card-content table-responsive">
            <table id="lending" class="table table-hover">
                <thead class="text-primary">
                    <tr>
                        <th>No</th>
                        <th>Item Code</th>
                        <th>Item Name</th>
                        <th>Qty</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>


<script>
$(document).ready(function() {
    //$('#warehouse').DataTable();
    $('#lending').DataTable();

});
</script>