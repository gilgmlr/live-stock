<div class="container" style="margin-top: 120px;">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('flash') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php $this->session->unset_userdata('flash');
	endif; ?>
    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "Issue/view_material_issue" ?>">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <img src="<?=base_url(). 'assets/image/GR.png'?>" />
                            <h5>Material Issue</h5>
                        </center>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "Issue/view_warehouse_transfer_out" ?>">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <img src="<?=base_url(). 'assets/image/WTO.png'?>" />
                            <h5>Warehouse Transfer (Out)</h5>
                        </center>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "Issue/view_work_order" ?>">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <img src="<?=base_url(). 'assets/image/Adjustment.png'?>" />
                            <h5>Work Order</h5>
                        </center>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "Issue/view_lending" ?>">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <img src="<?= 'assets/image/Lending.png'?>" />
                            <h5>Lending (Submission)</h5>
                        </center>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

</div>
</div>
</div>

</body>

</html>