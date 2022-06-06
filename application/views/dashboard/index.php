<div class="container">

    <div class="logo">
        <div style="text-align: right; color:#000">
            <img src="assets/image/icon.png " />
            <span class="ps-2">Warehouse. <br />Last update: Mei 20, 2022</span>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats shadow p-3 mb-5 bg-white rounded">

                <div class="card-content ">
                    <div class="card-header">
                        <img
                            src="<?= 'assets/image/stock.png'?>" />
                    </div>
                    <p class="category"><strong>Total Items</strong></p>
                    <h3 class="card-title">30000</h3>

                </div>
                <div class="card-footer">
                    <div class="stats">

                        <i class="material-icons text-info"></i>
                        <a href="#pablo">See detailed report</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats shadow p-3 mb-5 bg-white rounded">

                <div class="card-content">
                    <div class="card-header">
                        <img
                            src="<?= 'assets/image/stock.png'?>" />
                    </div>
                    <p class="category"><strong>Orders</strong></p>
                    <h3 class="card-title">30000</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-info"></i>
                        <a href="#pablo">See detailed report</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats shadow p-3 mb-5 bg-white rounded">

                <div class="card-content">
                    <div class="card-header">
                        <img
                            src="<?= 'assets/image/stock.png'?>" />
                    </div>
                    <p class="category"><strong>Issue</strong></p>
                    <h3 class="card-title">+124</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-info"> </i>
                        <a href="#pablo">See detailed report</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats shadow p-3 mb-5 bg-white rounded">

                <div class="card-content">
                    <div class="card-header">
                        <img
                            src="<?= 'assets/image/stock.png'?>" />
                    </div>
                    <p class="category"><strong>Lending</strong></p>
                    <h3 class="card-title">+245</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <a href="#pablo">See detailed report</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row ">
        <div class="col-lg-7 col-md-12">
            <div class="card shadow p-3 mb-5 bg-white rounded" style="min-height: 400px">
                <div class="card-header card-header-text">
                    <h4 class="card-title">Lending Activity</h4>
                    <!-- <p class="category">All Warehouse</p> -->
                </div>
                <div class="card-content table-responsive">
                    <table id="lending" class="table table-hover">
                        <thead class="text-primary">
                            <tr>
                                <th>No</th>
                                <th>Item Code</th>
                                <th>Item Name</th>
                                <th>Qty</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 1;
                                foreach ($warehouse as $data) { 
                            ?>
                            <!-- <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $data->warehouse_code ?></td>
                                <td><?php echo $data->warehouse_name ?></td>
                                <td>-</td>
                                <td>-</td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm" style="margin:0px; height:35px; width:auto"
                                        data-bs-toggle="modal" data-bs-target="#closed">Closed</button>
                                </td>
                            </tr> -->

                            <?php $i++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-5 col-md-12">
            <div class="card shadow p-3 mb-5 bg-white rounded" style="min-height: 400px">
                <div class="card-header card-header-text">
                    <h4 class="card-title">All Warehouse</h4>
                </div>
                <div class="card-content">
                    <table id="warehouse" class="table table-hover">
                        <thead class="text-primary">
                            <tr>
                                <th><b>No</b></th>
                                <th><b>ID</b></th>
                                <th><b>Name</b></th>
                                <th><b>Action</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 1;
                                foreach ($warehouse as $data) { 
                            ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $data->warehouse_code ?></td>
                                <td><?= $data->warehouse_name ?></td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" style="margin:0px; height:35px; width:auto"
                                        data-bs-toggle="modal" data-bs-target="#view-<?= $data->warehouse_code ?>">View</button>
                                </td>
                            </tr>

                            <?php 
                                $i++; 
                                } 
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

                            <?php
                                $i = 1;
                                foreach ($warehouse as $detail ) { 
                            ?>

                            <!-- MODAL VIEW -->
                            <div class="modal fade" id="view-<?= $detail->warehouse_code ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:80%>
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #563d7c">
                                            <h5 class="modal-title" style="color: gold" id="exampleModalLabel"><?= $detail->warehouse_name ?> DETAIL</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <table id="" class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Item Code</th>
                                                                <th>Item Name</th>
                                                                <th>Item Spec</th>
                                                                <th>UoM</th>
                                                                <th>Stocks</th>
                                                                <th>Warehouse</th>
                                                                <th>Location</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                            </tr>
                                                        </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal -->

                            <?php 
                                $i++; 
                                } 
                            ?>

</body>
<script>
$(document).ready(function() {
    //$('#warehouse').DataTable();
    $('#lending').DataTable();
    
});
</script>

</html>