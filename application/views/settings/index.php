<div class="container" style="margin-top: 100px;">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('flash') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php $this->session->unset_userdata('flash');
	endif; ?>

    <div class="row justify-content-center">
        <?php if($this->session->userdata('role') == "1") { ?>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "settings/view_add_account" ?>">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <img src="<?= base_url().'assets/image/account.png'?>" style="width:100px" />
                            <h5>Add More Account</h5>
                        </center>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "settings/view_add_items" ?>">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <img src="<?= base_url().'assets/image/add_data.png'?>" style="width:100px" />
                            <h5>Add Items</h5>
                        </center>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "settings/view_import_data" ?>">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <img src="<?=base_url(). 'assets/image/importdata.png'?>" style="width:100px" />
                            <h5>Import data</h5>
                        </center>
                    </div>
                </div>
            </a>
        </div>
        <?php ;} ?>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="" data-bs-toggle="modal" data-bs-target="#changepassword">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <img src="<?=base_url(). 'assets/image/pass.png'?>" style="width:100px" />
                            <h5>Change Password</h5>
                        </center>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- Modal Change Password -->
<div class="modal fade" id="changepassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:40%>
        <div class="modal-content">
            <div class="modal-header" style="background-color: #563d7c">
                <h5 class="modal-title" style="color: gold;" id="exampleModalLabel">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url() ?>settings/change_password" method="POST" class="mx-1 mx-md-4"
                autocomplete="off">
                <div class="modal-body">
                    <div class="container px-4">
                        <div class="col gx-5">
                            <div class="col">
                                <label class="form-label" for="form3Example1c">NIP</label>
                                <input type="text" id="nip" class="text-input" name="nip" placeholder="" readonly
                                    value="<?= $this->session->userdata('nip') ?>" />
                            </div>
                            <div class="col">
                                <label class="form-label" for="form3Example1c">Password Now</label>
                                <input type="password" id="password" class="text-input" name="password"
                                    placeholder="Enter your password" required />
                            </div>
                            <div class="col">
                                <label class="form-label" for="form3Example1c">New Password</label>
                                <input type="password" id="newpassword" class="text-input" name="newpassword"
                                    placeholder="Enter New Password" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="batal" type="submit" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                    <button id="simpan" type="submit" class="btn btn-success"
                        onclick=" return confirm('Are You Sure Want To chage password ?')">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- AKHIR MODAL  -->





</body>

</html>