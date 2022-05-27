<!-- <div class="container-grid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-hover center">
                        <tr>
                            <th>NO</th>
                            <th>STORE ID</th>
                            <th>STORE NAME</th>
                            <th>TOTAL ITEMS</th>
                            <th>ACTION</th>
                        </tr>

                        <?php
                        $i = 1;
                        foreach ($warehouse as $data) { 
                    ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $data->id ?></td>
                            <td><?php echo $data->name ?></td>
                            <td><?php echo $data->total_items ?></td>
                            <td>
                                <button class="btn">View Details</button>
                            </td>
                        </tr>
                        <?php
                        $i++;
                        }
                    ?>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-auto">

        </div>

        <div class="col-lg-2">
            <div class="card2"></div>
        </div>
    </div>
</div> -->

<!-- <div class="col"> -->
<!-- <div class="container-fluid">
                <div style="text-align: right;">
                    <img src="assets/image/icon.png " />
                    <span class="ps-2">Warehouse. <br />Last update: Mei 20, 2022</span>
                </div>
                <div class="card2" style="background-color:#D7A86E; border:none; border-radius: 10px;">
                    <div class="card-body m-1">
                        <div class="txt1">Total Items All Warehouse</div>
                        <div class="txt2"><b>30.000</b></div>
                        <div class="txt3">
                            <p>Items</p>
                        </div>
                    </div>
                </div>
            </div> -->
<!-- <div class="container-fluid">
                <table class="table table-striped table-hover center">
                    <tr>
                        <th>NO</th>
                        <th>STORE ID</th>
                        <th>STORE NAME</th>
                        <th>TOTAL ITEMS</th>
                        <th>ACTION</th>
                    </tr>

                    <?php
                        $i = 1;
                        foreach ($warehouse as $data) { 
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $data->id ?></td>
                        <td><?php echo $data->name ?></td>
                        <td><?php echo $data->total_items ?></td>
                        <td>
                            <button type="button" class="btn btn-warning ">View Details</button>
                        </td>
                    </tr>
                    <?php
                        $i++;
                        }
                    ?>
                </table>
            </div>
        </div>
        </div> -->

<div class="main-content">

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
                    <p class="category"><strong>Total Assets</strong></p>
                    <h3 class="card-title">70,340</h3>
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
                    <p class="category"><strong>Orders</strong></p>
                    <h3 class="card-title">102</h3>
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
                    <p class="category"><strong>Barang Keluar</strong></p>
                    <h3 class="card-title">+124</h3>
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
                <div class="card-header">
                    <div class="icon icon-info">

                        <span class="material-icons">

                        </span>
                    </div>
                </div>
                <div class="card-content">
                    <p class="category"><strong>Peminjaman</strong></p>
                    <h3 class="card-title">+245</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons"></i> Updated
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
                    <table id="warehouse" class="table table-hover">
                        <thead class="text-primary">
                            <tr>
                                <th>NO</th>
                                <th>Item Code</th>
                                <th>Item Name</th>
                                <th>Qty</th>
                                <th>Date</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                    $i = 1;
                    foreach ($warehouse as $data) { 
                ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $data->id ?></td>
                                <td><?php echo $data->name ?></td>
                                <td><?php echo $data->total_items ?></td>
                                <td><?php echo $data->total_items ?></td>
                                <td>
                                    <button type="button" class="btnedit btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#closed">Closed</button>
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
        <!-- Modal -->
        <div class="modal fade" id="closed" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:60%>
                <div class="card ">
                    <div class="card-body">
                        <div class="modal-content">
                            <div class="modal-header" style=background-color:#ffe484>
                                <h5 class="modal-title" id="exampleModalLabel">Lending Activity</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputno" class="form-label">No</label>
                                        <input type="Text" class="form-control" id="exampleInputno"
                                            aria-describedby="no">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleItemCode" class="form-label">Item Code</label>
                                        <input type="Text" class="form-control" id="exampleItemCode">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleItemName" class="form-label">Item Name</label>
                                        <input type="Text" class="form-control" id="exampleItemName">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleItemSpec" class="form-label">Item Spec</label>
                                        <input type="Text" class="form-control" id="exampleItemSpec">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleUoM" class="form-label">UoM</label>
                                        <input type="Text" class="form-control" id="exampleUoM">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleLocation" class="form-label">Location</label>
                                        <input type="Text" class="form-control" id="exampleLocation">
                                    </div>

                                </form>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success">Save changes</button>
                                </div>
                            </div>

                        </div>
                    </div>
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
                                <th>NO</th>
                                <th>STORE ID</th>
                                <th>STORE NAME</th>
                                <th>TOTAL ITEMS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                    $i = 1;
                    foreach ($warehouse as $data) { 
                ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $data->id ?></td>
                                <td><?php echo $data->name ?></td>
                                <td><?php echo $data->total_items ?></td>
                                <td>
                                    <button type="button" class="btnedit btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#view">View</button>
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

<!-- Modal -->
<div class="modal fade" id="view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style=max-width:60%>
        <div class="card ">
            <div class="card-body">
                <div class="modal-content">
                    <div class="modal-header" style=background-color:#ffe484>
                        <h5 class="modal-title" id="exampleModalLabel">Warehouse Detile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputno" class="form-label">No</label>
                                <input type="Text" class="form-control" id="exampleInputno" aria-describedby="no">
                            </div>
                            <div class="mb-3">
                                <label for="exampleItemCode" class="form-label">Item Code</label>
                                <input type="Text" class="form-control" id="exampleItemCode">
                            </div>
                            <div class="mb-3">
                                <label for="exampleItemName" class="form-label">Item Name</label>
                                <input type="Text" class="form-control" id="exampleItemName">
                            </div>
                            <div class="mb-3">
                                <label for="exampleItemSpec" class="form-label">Item Spec</label>
                                <input type="Text" class="form-control" id="exampleItemSpec">
                            </div>
                            <div class="mb-3">
                                <label for="exampleUoM" class="form-label">UoM</label>
                                <input type="Text" class="form-control" id="exampleUoM">
                            </div>
                            <div class="mb-3">
                                <label for="exampleLocation" class="form-label">Location</label>
                                <input type="Text" class="form-control" id="exampleLocation">
                            </div>

                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Save changes</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
$(document).ready(function() {
    $('#warehouse').DataTable();
});
</script>

</html>