        <div class="container" style="margin-top: 80px;">
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
                                <form action="<?= base_url() . 'inventory' ?>" method="POST" autocomplete="off">
                                    <div class="input-group">
                                        <input type="text submit" class="form-control" id="keyword" name="keyword" value="<?= $data->item_code ?>" hidden ">
                                        <input type="submit" class="btn btn-primary" name="search" value="Go">
                                    </div>
                                </form>
                                <!-- <a href="<?=base_url()?>inventory?keyword=<?= $data->item_code ?>"> <button type="button"
                                        class="btn btn-primary">Go</button>
                                </a> -->
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal  -->

                <?php } ?>
                <div class=" col-12">
                    <?= $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>


        </body>

        </html>