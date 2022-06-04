<div class="container" style="margin-top: 80px;">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="input-group sm-3">
                <input type="text" class="form-control" placeholder="search" aria-label="search"
                    aria-describedby="button-addon2">

                <a href="<?php echo base_url() . "search/view_result" ?>" class="btn btn-warning btn-sm"
                    style=margin:auto;>
                    Search
                </a>
            </div>

        </div>

    </div>
    <div class="col-sm-2">
        <div class="card shadow p-3 mb-5 bg-white rounded">
            <img src="<?= base_url() . 'assets/catalog/' . $items[0]->image ?> "
                class="card-img-top justify-content-center" alt="pilox">
            <div class="card-body">
                <h5 class="card-title" style="font-weight:bold">Pilox</h5>
                <p class="card-text">Item Code : 1212</p>
                <p class="card-text">Name : Pylox</p>

                <center>
                    <a href="<?php echo base_url() . "search/view_detail" ?>" class="btn btn-warning" style=margin:0;>
                        Details
                    </a>
                </center>

            </div>
        </div>
    </div>
</div>



</body>

</html>