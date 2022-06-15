<div class="container" style="margin-top: 120px;">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('flash') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php $this->session->unset_userdata('flash');
	endif; ?>

    <div class="cards shadow p-3 mb-3 bg-white rounded" style="min-height: 400px; margin-top:3px;">
        <div class=" cards-header card-header-text">
            <h4 class="card-title">All Items</h4>
            <!-- <p class="category">All Warehouse</p> -->
        </div>
        <div class="card-content table-responsive">
            <table id="allitems" class="table table-hover">
                <thead class="text-primary">
                    <tr>
                        <th>Item Code</th>
                        <th>Name</th>
                        <th>Specification</th>
                        <th>UoM</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="container px-1">
                                <div class="row">
                                    <!-- icon edit -->
                                    <!-- <div class="col-sm-2">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#change<?= $data->nip ?>"><i
                                                class="fa-solid fa-pencil"></i></a>
                                    </div> -->
                                    <div class="row-md-2">
                                        <a href=""><i class="fa-solid fa-pen" style="margin-left:5px"></i></a>
                                        <a href=""><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>




<script>
$(document).ready(function() {
    //$('#warehouse').DataTable();
    $('#allitems').DataTable();

});
</script>