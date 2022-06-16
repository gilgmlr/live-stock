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
            <h4 class="card-title">registered Account</h4>
            <!-- <p class="category">All Warehouse</p> -->
        </div>
        <div class="card-content table-responsive">
            <table id="regisacc" class="table table-hover">
                <thead class="text-primary">
                    <tr>
                        <th>NIP</th>
                        <th>Name</th>
                        <th>Warehouse Location</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 1;
                        foreach ($users as $data) { 
                    ?>
                    <tr>
                        <td><?= $data->nip ?></td>
                        <td><?= $data->name ?></td>
                        <td><?= $data->warehouse_code ?></td>
                        <td><?= $data->role ?></td>
                        <td>
                            <div class="container px-1">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <a href="<?= base_url() ?>settings/reset_password?nip=<?= $data->nip ?>"
                                            onclick="return confirm('Are You Sure Want to Reset This Password Account ?')"><i
                                                class="fa-solid fa-history"></i></a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="<?= base_url() ?>settings/delete_account?nip=<?= $data->nip ?>"
                                            onclick="return confirm('Are You Sure Want to Delete This Account ?')"><i
                                                class="fa-solid fa-trash"></i></a>

                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <?php $i++; } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>




<script>
$(document).ready(function() {
    $('#regisacc').DataTable();
});
</script>