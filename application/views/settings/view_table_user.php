<div class="container" style="margin-top: 120px;">
    <div class="cards shadow p-3 mb-3 bg-white rounded" style="min-height: 400px; margin-top:3px;">
        <div class=" cards-header card-header-text">
            <h4 class="card-title">registered Account</h4>
            <!-- <p class="category">All Warehouse</p> -->
        </div>
        <div class="card-content table-responsive">
            <table id="regisacc" class="table table-hover">
                <thead class="text-primary">
                    <tr>
                        <th>NIP</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="container px-1">
                            <div class="row">
                                <div class="col-sm-2">
                                    <a href="#"><i class="fa-solid fa-trash"></i></a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="#"><i class="fa-solid fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>


<script>
$(document).ready(function() {
    //$('#warehouse').DataTable();
    $('#regisacc').DataTable();

});
</script>