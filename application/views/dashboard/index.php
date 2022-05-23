        <div class="col">
                <div class="container-fluid">
                    <div style="text-align: right;">
                        <img src="assets/image/icon.png " />
                        <span class="ps-2">Warehouse. <br />Last update: Mei 20, 2022</span>
                    </div>
                    <div class="card2" style="background-color:#D7A86E; border:none; border-radius: 10px;">
                        <div class="card-body m-1">
                            <div class="txt1">Total Items</div>
                            <div class="txt2"><b>30.000</b></div>
                            <div class="txt3">
                                <p>Items</p>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="container-fluid">
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
    </div>

</body>

</html>