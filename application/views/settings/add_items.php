<div class="container " style="margin-top: 100px;">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('flash') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php $this->session->unset_userdata('flash');
	endif; ?>
    <div class="row justify-content-center">
        <p class="text-center h1 fw-bold" style="margin:0px; padding:0px">
            Add New Item
        </p>
        <div class="col-md-8">
            <form class="mx-1 mx-md-4 mt-4" action="<?= base_url() ?>settings/add_item" method="POST"
                enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="form-label" for="form3Example1c"><b>Item Code*</b></label>
                            <input style="border-color: black;" type="text" id="item_code" class="form-control"
                                name="item_code" autocomplete="off" placeholder="Enter item code" required />
                            <small class="text-danger"><?= form_error('item_code') ?></small>
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="form3Example1c"><b>Name*</b></label>
                            <input style="border-color: black;" type="text" id="name" class="form-control" name="name"
                                autocomplete="off" placeholder="Enter name" required />
                            <small class="text-danger"><?= form_error('name') ?></small>
                        </div>

                        <div class="col">
                            <label class="form-label" for="form3Example1c"><b>UoM*</b></label>
                            <input style="border-color: black;" type="text" id="uom" class="form-control" name="uom"
                                autocomplete="off" placeholder="Enter uom" required />
                            <small class="text-danger"><?= form_error('uom') ?></small>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label class="form-label" for="form3Example1c"><b>Spesification*</b></label>
                        <textarea style="border-color: black;" id="spec" class="form-control" name="spec"
                            autocomplete="off" placeholder="Enter spesification" rows="2" required></textarea>
                        <small class="text-danger"><?= form_error('spec') ?></small>
                    </div>


                    <div class="col">
                        <label class="form-label" for="form3Example1c"><b>Remark</b></label>
                        <textarea style="border-color: black;" id="remarks" class="form-control" name="remarks"
                            autocomplete="off" placeholder="Enter remark" rows="2"></textarea>
                        <small class="text-danger"><?= form_error('remarks') ?></small>
                    </div>
                    <center>
                        <div class="col-sm-8 mt-4">
                            <label for="formFileMultiple" class="form-label" style="margin-top:8px"><b>Upload Image</b>
                                (.jpg |.jpeg |.png)</label>
                            <input style="border-color: black;" class="custom-file-input form-control" type="file"
                                id="image" accept=".jpg, .jpeg, .png" name="image">
                        </div>
                    </center>
                </div><br>

        </div>
        <div class="d-flex justify-content-center mx-4 mb-3 mb-md-4">
            <button id="simpan" type="submit" class="btn btn-primary"
                onclick=" return confirm('Are You Sure Want To Add this Item ?')">Add</button>
        </div>
        <div class="col">
            <center><a href="<?= base_url()?>settings/view_all_items"><b>See all
                        items?</b></a></center>
        </div>
        </form>
    </div>
</div>

</body>

</html>