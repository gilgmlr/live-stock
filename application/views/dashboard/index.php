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
        <div style="text-align: right; color:#fff">
            <img src="assets/image/icon.png " />
            <span class="ps-2">Warehouse. <br />Last update: Mei 20, 2022</span>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">

                <div class="card-content">
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
            <div class="card card-stats">

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
            <div class="card card-stats">

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
            <div class="card card-stats">
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
            <div class="card" style="min-height: 400px">
                <div class="card-header card-header-text">
                    <h4 class="card-title">Total Assets</h4>
                    <p class="category">All Warehouse</p>
                </div>
                <div class="card-content table-responsive">
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
                                    <!-- <button class="btn">View Details</button> -->
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

        <div class="col-lg-5 col-md-12">
            <div class="card" style="min-height: 400px">
                <div class="card-header card-header-text">
                    <h4 class="card-title">Lending Activity</h4>
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
                                    <!-- <button class="btn">View Details</button> -->
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

</body>
<script>
$(document).ready(function() {
    $('#warehouse').DataTable();
});
</script>

</html>