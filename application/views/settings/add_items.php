<div class="container " style="margin-top: 80px;">
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
            <form class="mx-1 mx-md-4" action="<?= base_url() ?>settings/add_item" method="POST"
                enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="form-label" for="form3Example1c">Item Code*</label>
                            <input type="text" id="item_code" class="form-control" name="item_code" autocomplete="off"
                                placeholder="Enter item code" required />
                            <small class="text-danger"><?= form_error('item_code') ?></small>
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="form3Example1c">Name*</label>
                            <input type="text" id="name" class="form-control" name="name" autocomplete="off"
                                placeholder="Enter name" required />
                            <small class="text-danger"><?= form_error('name') ?></small>
                        </div>

                        <div class="col">
                            <label class="form-label" for="form3Example1c">UoM*</label>
                            <input type="text" id="uom" class="form-control" name="uom" autocomplete="off"
                                placeholder="Enter uom" required />
                            <small class="text-danger"><?= form_error('uom') ?></small>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label class="form-label" for="form3Example1c">Spesification*</label>
                        <textarea id="spec" class="form-control" name="spec" autocomplete="off"
                            placeholder="Enter spesification" rows="2" required></textarea>
                        <small class="text-danger"><?= form_error('spec') ?></small>
                    </div>


                    <div class="col">
                        <label class="form-label" for="form3Example1c">Remark*</label>
                        <textarea id="remark" class="form-control" name="remark" autocomplete="off"
                            placeholder="Enter remark" rows="2" required></textarea>
                        <small class="text-danger"><?= form_error('remark') ?></small>
                    </div>
                    <center>
                        <div class="col-sm-8">
                            <label for="formFileMultiple" class="form-label" style="margin-top:8px">Upload Image
                                (.jpg |.jpeg |.png)</label>
                            <input class="custom-file-input form-control" type="file" id="image"
                                accept=".jpg, .jpeg, .png" name="image">
                        </div>
                    </center>
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

</body>

</html>