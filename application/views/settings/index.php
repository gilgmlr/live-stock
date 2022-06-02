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
    </div>
</div>

<!-- <div class="container" style="margin-top: 80px;">
    <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-body">
            <div class="col">
                <center>
                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                        data-bs-target="#Daftar">Add
                        Account</button>
                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                        data-bs-target="#AddItems">Add
                        Item</button>
                </center>
            </div>
            <center>
                <div class="card">
                    <div class="card-body">
                        <div class="col">
                            <label for="formFileMultiple" class="form-label" style="margin-top:8px">Import Data</label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple />
                            <button type="button" class="btn btn-warning btn-sm">Save</button>
                        </div>
                    </div>
                </div>
            </center>

            <center>
                <div class="card">
                    <div class="card-body">
                        <div class="col justify-content-center">
                            <div class="drop-container">
                                <div class="drop">
                                    <i class="fa-solid fa-photo-film icon"></i>
                                    <span class="text">
                                        Drag and drop your documents, photos, and video here.
                                    </span>
                                    <div class="or-con">
                                        <span class="line"></span>
                                        <span class="or">OR</span>
                                        <span class="line"></span>
                                    </div>
                                    <label for="file-upload">Browse Files</label>
                                    <input type="file" id="file-upload" class="file-input" multiple />
                                </div>
                                <div class="progress"></div>
                                <button type="button" class="btn btn-warning btn-sm">Save</button>

                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>
</div>
</div> -->

<!-- Modal Daftar Akun -->
<div class="modal fade" id="Daftar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:40%>
        <div class="modal-content">
            <div class="modal-header" style="background-color: #563d7c">
                <h5 class="modal-title" style="color: gold;" id="exampleModalLabel">Add Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col">
                            <center>
                                <button id="tambah_items" type="submit" class="btn btn-primary">Tambah
                                    Items</button>
                            </center>
                        </div>
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


<!-- Modal Add Items -->
<div class="modal fade" id="AddItems" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:30%>
        <div class="modal-content">
            <div class="modal-header" style="background-color: #563d7c">
                <h5 class="modal-title" style="color: gold;" id="exampleModalLabel">Add Items</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Settings/addItem" method="POST">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-sm-12">
                                <label for="" class="col-sm-6 col-form-label">Item Code</label>
                                <input type="text" class="form-control" id="item_code" name="item_code">
                                <label for="" class="col-sm-6 col-form-label">Item Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                                <label for="" class="col-sm-6 col-form-label">Item Specification</label>
                                <input type="text" class="form-control" id="spec" name="spec">


                                <div class="row">
                                    <div class="col">
                                        <label for="formFileMultiple" class="form-label" style="margin-top:8px">Item
                                            Image</label>
                                        <input class="form-control" type="file" id="image" name="image" multiple />
                                    </div>
                                </div>

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
                                                <button id="simpan" type="submit"
                                                    class="btn btn-success">Simpan</button>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- AKHIR MODAL  -->

<script>
const drop = document.querySelector(".drop");
const input = document.querySelector(".drop input");
const text = document.querySelector(".text");
const progress = document.querySelector(".progress");

let files = [];

input.addEventListener("change", (e) => {
    drop.style.display = "none";
    files = e.target.files;
    upload();
});

drop.addEventListener("dragover", (e) => {
    e.preventDefault();
    text.innerHTML = "Release your mouse to drop.";
    drop.classList.add("active");
});

drop.addEventListener("dragleave", (e) => {
    e.preventDefault();
    text.innerHTML = "Drag and drop your documents, photos, and video here.";
    drop.classList.remove("active");
});

drop.addEventListener("drop", (e) => {
    e.preventDefault();
    files = e.dataTransfer.files;
    drop.style.display = "none";
    upload();
});

// Upload Logic
function upload() {
    // fake Upload Logic
    let intervalCount = 0.25;
    progress.style.display = "block";
    progress.style.width = `${20 * intervalCount}%`;
    const interval = setInterval(() => {
        intervalCount += 0.25;
        progress.style.width = `${20 * intervalCount}%`;
        if (intervalCount == 5) {
            clearInterval(interval);
        }
    }, 100);
}
</script>
</body>

</html>