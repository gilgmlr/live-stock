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
                        <td><?= $data->role ?></td>
                        <td>
                            <div class="container px-1">
                                <div class="row">
                                    <!-- icon edit -->
                                    <!-- <div class="col-sm-2">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#change<?= $data->nip ?>"><i
                                                class="fa-solid fa-pencil"></i></a>
                                    </div> -->
                                    <div class="col-sm-2">
                                        <a href="<?= base_url() ?>settings/delete_account?nip=<?= $data->nip ?>"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Modal Change -->
                    <div class="modal fade" id="change<?= $data->nip ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:50%>
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #563d7c">
                                    <h5 class="modal-title" style="color: gold;" id="exampleModalLabel">Change Password
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="" method="POSt">
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-sm-12">
                                                    <label class="col-sm-6 col-form-label"
                                                        for="form3Example1c">NIP</label>
                                                    <input type="text" id="nip" class="form-control" name="nip"
                                                        autocomplete="off" placeholder="Enter item code"
                                                        value="<?= $data->nip ?>" required />
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-sm-12"">
                                                    <label class=" col-sm-6 col-form-label" for="form3Example1c">
                                                    Name</label>
                                                    <input type="text" id="name" class="form-control" name="name"
                                                        autocomplete="off" placeholder="Enter item code"
                                                        value="<?= $data->name ?>" required />
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-sm-6">
                                                    <label class="col-sm-6 col-form-label"
                                                        for="form3Example1c">Password</label>
                                                    <input type="password" id="password" class="form-control"
                                                        name="password" autocomplete="off"
                                                        placeholder="Enter your password" required />
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="col-sm-6 col-form-label"
                                                        for="form3Example1c">Password</label>
                                                    <input type="password" id="password2" class="form-control"
                                                        name="password2" autocomplete="off"
                                                        placeholder="Enter your password" required />
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <label class="form-label" style="margin-top: 8px;"
                                                    for="form3Example1c">Role</label>
                                                <select class="form-select form-control text-input"
                                                    aria-label=".form-select-lg example" id="role" name="role" required>
                                                    <option selected>-- select --</option>
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="batal" type="submit" class="btn btn-danger"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button id="simpan" type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                            </div>

                            </form>
                        </div>
                    </div>
        </div>
        <!-- AKHIR MODAL  -->

        <?php $i++; } ?>
        </tbody>
        </table>
    </div>
</div>
</div>




<script>
$(document).ready(function() {
    //$('#warehouse').DataTable();
    $('#regisacc').DataTable();

});
</script>