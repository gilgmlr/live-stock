<div class="container" style="margin-top: 120px;">
<?php if ($this->session->flashdata('flash')) : ?>
    <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('flash') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php $this->session->unset_userdata('flash');
	endif; ?>
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">
                Pendaftaran Akun Warehouse
            </p>
            <form class="mx-1 mx-md-4" action="<?= base_url() ?>settings/add_account" method="POST">
                <div class="row justify-content-center">
                    <div class="col-sm-10">
                        <div class="input mt-2">
                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                            <label class="form-label" for="form3Example1c">NIP</label>
                            <input type="text" id="nip" class="text-input" name="nip" autocomplete="off"
                                placeholder="Enter your NIP" required />
                        </div>

                        <div class="input mt-2">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <label class="form-label" for="form3Example1c">Nama</label>
                            <input type="text" id="name" class="text-input" name="name" autocomplete="off"
                                placeholder="Enter your name" required />
                        </div>

                        <div class="input mt-2">
                            <i class="fas fa-users fa-lg me-3 fa-fw"></i>
                            <label class="form-label" style="margin-top: 8px;" for="form3Example1c">Warehouse Location</label>
                            <select class="form-select form-control text-input" aria-label=".form-select-lg example"
                                id="role" name="warehouse_code" required>
                                <option selected>-- select --</option>
                                <?php foreach ($warehouse as $data) { ?>
                                <option value="<?= $data->warehouse_code ?>"><?= $data->warehouse_code . " " . $data->warehouse_name  ?></option>
                                <?php $i++; } ?>
                            </select>
                        </div>

                        <div class="input mt-2">
                            <i class="fas fa-users fa-lg me-3 fa-fw"></i>
                            <label class="form-label" style="margin-top: 8px;" for="form3Example1c">Role</label>
                            <select class="form-select form-control text-input" aria-label=".form-select-lg example"
                                id="role" name="role" required>
                                <option selected>-- select --</option>
                                <option value="1">1 - All Access</option>
                                <option value="2">2 - Admin Received</option>
                                <option value="3">3 - Admin Issued</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mx-4 mb-3 mb-md-4">
                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                </div>
                <center><a href="<?= base_url()?>settings/view_table_user">See registered accounts?</a></center>
            </form>
        </div>
    </div>

</div>


</body>
<script>
$(document).ready(function() {
    $('#warehouse').DataTable();
    LengthMenu: [
        [5, 10, 25, 50, 100, -1],
        [5, 10, 25, 50, 100, "All"]

    ]
});
</script>

</html>