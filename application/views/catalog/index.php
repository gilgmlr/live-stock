        <div class="container" style="margin-top: 80px;">
            <form action="<?=base_url() ?>catalog/view_result" method="POST">
                <div class="row justify-content-center">
                    <div class="col-sm-8" style="margin-top: 50px;">
                        <div class="input-group sm-3">
                            <input type="text" class="form-control" placeholder="search" aria-label="search"
                                aria-describedby="button-addon2" id="key" name="key">
                            <button class="btn btn-warning" type="submit"
                                style="padding-top:17px; margin:0px; height:45px;">Search</button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="container d-flex align-content-start flex-wrap" style="margin-top: 0;">
                <?php
                    foreach ($items as $data) { 
                ?>

                <div class="col-md-2 px-2">
                    <a href="" data-bs-toggle="modal" data-bs-target="#detail<?= $data->item_code ?>">
                        <div class="card shadow p-2 mb-2 bg-white rounded">
                            <img src="<?= 'assets/catalog/' . $data->image ?> " class="img-fluid" alt="Not Found!"
                                style="height: 194px; width:259px">
                            <div class="card-body">
                                <p class="card-text" style="font-size:16px;"><b><?= $data->item_code ?></b></p>
                                <p class="card-text" style="font-size:12px;"><?= $data->name ?></p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Modal -->
                <div class="modal fade modal-dialog-scrollable" id="detail<?= $data->item_code ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered " style=max-width:30%>
                        <div class="cards-body">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #563d7c">
                                    <h5 class="modal-title" style="color:gold" id="exampleModalLabel">Item Detail</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="cards shadow p-3 mb-5 bg-white rounded">
                                                <img src="<?= base_url() . 'assets/catalog/' . $data->image ?>"
                                                    class="card-img-top justify-content-center" alt="Not Found!">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="cards shadow p-3 mb-5 bg-white rounded">
                                                <div class="card-body">
                                                    Code : <?= $data->item_code ?><br>
                                                    Name : <?= $data->name ?><br>
                                                    Specification: <?= $data->specification ?><br>
                                                    <!-- location: <?= $data->name ?><br> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal  -->

                <?php } ?>
                <div class="col-12">
                    <!-- <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav> -->
                    <?= $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>


        </body>

        </html>