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
    <div class="d-flex align-content-start flex-wrap">
        <?php
            foreach ($items as $data) { 
        ?>
                
        <div class="col-md-2 px-2">
            <a href="<?= base_url() . "search/view_detail" ?>">
                <div class="card shadow p-2 mb-2 bg-white rounded">
                    <img src="<?= base_url() . 'assets/catalog/' . $data->image ?>" class="card-img-top justify-content-center" alt="">
                    <div class="card-body">
                        <p class="card-text" style="font-size:16px;"><b><?= $data->item_code ?></b></p>
                        <p class="card-text" style="font-size:12px;"><?= $data->name ?></p>
                    </div>
                </div>
            </a>
        </div>

        <?php } ?>
    </div>
</div>



</body>

</html>