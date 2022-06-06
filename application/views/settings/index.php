<div class="container" style="margin-top: 80px;">
    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "settings/view_add_account" ?>">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <i class="material-icons" style="font-size:100px;color:black;">person_add</i>
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
                            <i class="material-icons" style="font-size:100px;color:black;">library_add</i>
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
                            <i class="material-icons" style="font-size:100px;color:black;">upload_file</i>
                            <h5>Import data</h5>
                        </center>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "settings/view_import_data" ?>" data-bs-toggle="modal"
                data-bs-target="#changepassword">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <i class="material-icons" style="font-size:100px;color:black;">key</i>
                            <h5>Change Password</h5>
                        </center>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>



<!-- Modal Daftar Akun -->
<div class="modal fade" id="changepassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:40%>
        <div class="modal-content">
            <div class="modal-header" style="background-color: #563d7c">
                <h5 class="modal-title" style="color: gold;" id="exampleModalLabel">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="mx-1 mx-md-4">
                    <div class="container px-4">
                        <div class="col gx-5">
                            <div class="col">
                                <label class="form-label" for="form3Example1c">NIP</label>
                                <input type="text" id="item_code" class="text-input" name="item_code" autocomplete="off"
                                    placeholder="Enter item code" required />
                            </div>
                            <div class="col">
                                <label class="form-label" for="form3Example1c">Password</label>
                                <input type="password" id="name" class="text-input" name="name" autocomplete="off"
                                    placeholder="Enter your password" required />
                            </div>
                            <div class="col">
                                <label class="form-label" for="form3Example1c">Password Now</label>
                                <input type="password" id="name" class="text-input" name="name" autocomplete="off"
                                    placeholder="Enter your password now" required />
                            </div>

                        </div>


                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col">
                            <center>
                                <button id="batal" type="submit" class="btn btn-danger"
                                    data-bs-dismiss="modal">Batal</button>
                            </center>
                        </div>

                        <div class="col">
                            <center>
                                <button id="simpan" type="submit" class="btn btn-success">Simpan</button>
                            </center>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- AKHIR MODAL  -->





</body>

</html>