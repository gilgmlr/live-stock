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
                
        <div class="col-md-3 px-2">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <img src="<?= base_url() . 'assets/catalog/' . $data->image ?>"
                    class="card-img-top justify-content-center" alt="image" style="max-height: 300px;">
                <div class="card-body">
                    <div class="card-text"><b>Code : <?= $data->item_code ?></b></div>
                    <div class="card-text">Name : <?= $data->name ?></div>
                    <p></p>
                    <a href="<?php echo base_url() . "search/view_detail" ?>" class="btn btn-primary" style=margin:0;>
                        Details
                    </a>
                </div>
            </div>
        </div>

        <?php } ?>
    </div>
</div>



</body>

</html>