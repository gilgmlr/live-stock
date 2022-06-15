<div class="container " style="margin-top: 100px;">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('flash') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php $this->session->unset_userdata('flash');
	endif; ?>
    <!-- <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-body"> -->
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-12">
            <div class="cards text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">
                                Form Add Items
                            </p>

                            <form class="mx-1 mx-md-4" action="<?= base_url() ?>settings/add_item" method="POST"
                                enctype="multipart/form-data">
                                <div class="container px-4">
                                    <div class="col gx-5">
                                        <div class="col">
                                            <label class="form-label" for="form3Example1c">Item Code</label>
                                            <input type="text" id="item_code" class="text-input" name="item_code"
                                                autocomplete="off" placeholder="Enter item code" required />
                                        </div>
                                        <div class="col">
                                            <label class="form-label" for="form3Example1c">Name</label>
                                            <input type="text" id="name" class="text-input" name="name"
                                                autocomplete="off" placeholder="Enter name" required />
                                        </div>
                                        <div class="col">
                                            <label class="form-label" for="form3Example1c">Spesification</label>
                                            <textarea id="spec" class="text-input" name="spec" autocomplete="off"
                                                placeholder="Enter spesification" rows="3" required></textarea>
                                        </div>
                                        <div class="col">
                                            <label class="form-label" for="form3Example1c">UoM</label>
                                            <input type="text" id="uom" class="text-input" name="uom" autocomplete="off"
                                                placeholder="Enter uom" required />
                                        </div>
                                        <div class="col">
                                            <label for="formFileMultiple" class="form-label"
                                                style="margin-top:8px">Upload Image</label>
                                            <input class="custom-file-input form-control" type="file" id="image"
                                                name="image" required>
                                        </div>
                                    </div>


                                </div>
                                <div class="d-flex justify-content-center mx-4 mb-3 mb-md-4">
                                    <button type="submit" id="save" class="btn btn-warning btn-lg">Add</button>
                                </div>
                                <div class="col">
                                    <center><a href="<?= base_url()?>settings/view_all_items">See all
                                            items?</a></center>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>


</body>

</html>