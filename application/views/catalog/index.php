        <div class="container" style="margin-top: 80px;">
        <?php if ($this->session->flashdata('flash')) : ?>
            <div id="alert" class="alert alert-warning alert-dismissible fade show" role="alert">
                <?= $this->session->flashdata('flash') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php $this->session->unset_userdata('flash');
            endif; ?>
            <form action="<?=base_url('catalog') ?>" method="POST" autocomplete="off">
                <div class="row justify-content-center">
                    <div class="col-sm-8" style="margin-top: 0px;">
                        <div class="input-group sm-3">
                            <input type="text submit" class="form-control" placeholder="search" id="keyword"
                                name="keyword" value="<?= $this->session->userdata('keyword_catalog') ?>">
                            <input type="submit" class="btn btn-warning"
                                style="margin:0px; height:45px;" value="Search" name="search">
                        </div>
                        <div>
                            <b> Result: <?= $total_rows ?> Items </b>
                        </div>
                    </div>
                </div>
            </form>

            <div class="container d-flex align-content-start flex-wrap justify-content-center" style="margin-top: 0;">
                <?php
                    foreach ($items as $data) { 
                ?>

                <div class="col-md-2 px-2">
                    <a href="" data-bs-toggle="modal" data-bs-target="#view<?= $data->item_code ?>">
                        <div class="card shadow p-2 mb-2 bg-white rounded">
                            <center>
                            <img src="<?= base_url() . 'assets/catalog/'. $data->image?>" class="img-fluid"
                                style="height: 170px; width:175px; object-fit: contain">
                            </center>
                            <div class="card-body">
                                <p class="card-text" style="font-size:16px;"><b><?= $data->item_code ?></b></p>
                                <?php if (strlen($data->name) >= 18) { ?>
                                <p class="card-text" style="font-size:12px;"><?= substr($data->name, 0, 16) . ' ...' ?>
                                </p>
                                <?php ;} else { ?>
                                <p class="card-text" style="font-size:12px;"><?= $data->name ?></p>
                                <?php ;}?>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="view<?= $data->item_code ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:40%>
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #563d7c">
                                <h5 class="modal-title" style="color: gold" id="exampleModalLabel">DETAIL
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="card-body">
                                        <center>
                                            <img src="<?= base_url() . 'assets/catalog/'. $data->image?>" class="img-fluid" style="height: 300px; width:600px; object-fit: contain;">
                                        </center>
                                        <hr><hr>
                                        <table>
                                            <tr>
                                                <th style="width: 100px;"></th>
                                                <th style="width: 10px;"></th>
                                                <th style="width: 500px;"></th>
                                            </tr>
                                            <tr>
                                                <td><b>Code</b></td>
                                                <td> : </td>
                                                <td><?= $data->item_code ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Name</b></td>
                                                <td> : </td>
                                                <td><?= $data->name ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Specification</b> </td>
                                                <td> : </td>
                                                <td><?= $data->specification ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>UoM</b></td>
                                                <td> : </td>
                                                <td><?= $data->uom ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Remarks</b></td>
                                                <td> : </td>
                                                <td><?= $data->remarks ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <?php if($this->session->userdata('role') == "1") { ?>
                                <a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#change<?= $data->item_code ?>"> Edit</a>
                            <?php ;} ?>
                                <form action="<?= base_url() . 'inventory' ?>" method="POST" autocomplete="off">
                                    <div class="input-group">
                                        <input type="text submit" class="form-control" id="keyword" name="keyword" value="<?= $data->item_code ?>" hidden ">
                                        <input type="submit" class="btn btn-primary" style="width: 150px; border-radius:5px;" name="search" value="Go Inventory">
                                    </div>
                                </form>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal  -->

                 <!-- Modal Change -->
                 <div class="modal fade" id="change<?= $data->item_code ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:30%>
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #563d7c">
                                    <h5 class="modal-title" style="color: gold;" id="exampleModalLabel">Edit Items
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="<?= base_url() . 'catalog/update_item' ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="container">

                                            <div class="col-sm-12">
                                                <label class="col-sm-6 col-form-label" for="form3Example1c">Item
                                                    Code</label>
                                                <input type="text" id="item_code" class="form-control" name="item_code"
                                                    placeholder="Enter item code" value="<?= $data->item_code ?>"
                                                    readonly />
                                            </div>
                                            <div class="col-sm-12"">
                                                <label class=" col-sm-6 col-form-label" for="form3Example1c">
                                                Name</label>
                                                <input type="text" id="name" class="form-control" name="name"
                                                    placeholder="Enter item code" value="<?= $data->name ?>" required />
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="col-sm-6 col-form-label"
                                                    for="form3Example1c">Specification</label>
                                                <textarea class="form-control" name="spec" id="spec" rows="2"
                                                    required><?= $data->specification ?></textarea>
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="col-sm-6 col-form-label" for="form3Example1c">UoM</label>
                                                <input type="text" id="uom" class="form-control" name="uom"
                                                    value="<?= $data->uom ?>" required />
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="col-sm-6 col-form-label"
                                                    for="form3Example1c">Remark</label>
                                                <textarea class="form-control" name="remarks" id="remarks"
                                                    rows="2"><?= $data->remarks ?></textarea>
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="col-sm-6 col-form-label" for="form3Example1c">Image
                                                    <small>(.jpg |.jpeg |.png)</small></label>
                                                <input class="custom-file-input form-control" type="file" id="image"
                                                    accept=".jpg, .jpeg, .png" name="image">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="close" type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button id="simpan" type="submit" class="btn btn-success"
                                            onclick=" return confirm('Are You Sure Want To Save ?')">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- AKHIR MODAL  -->

                <?php } ?>
                <div class=" col-12">
                    <?= $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>


        </body>

        </html>