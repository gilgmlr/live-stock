<div class="container" style="margin-top: 80px;">
    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "settings/view_add_account" ?>">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <i class="material-icons" style="font-size:100px;color:black;">person_add</i>
                            <h5>Import Account</h5>
                        </center>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "settings/view_add_items" ?>">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <i class="material-icons" style="font-size:100px;color:black;">library_add</i>
                            <h5>Import Items</h5>
                        </center>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "settings/view_import_data" ?>">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <i class="material-icons" style="font-size:100px;color:black;">upload_file</i>
                            <h5>Import Data Warehouse</h5>
                        </center>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "settings/view_import_data" ?>">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <i class="material-icons" style="font-size:100px;color:black;">upload_file</i>
                            <h5>Import Issue</h5>
                        </center>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "settings/view_import_data" ?>">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <i class="material-icons" style="font-size:100px;color:black;">upload_file</i>
                            <h5>Import Received</h5>
                        </center>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="<?php echo base_url() . "settings/view_import_data" ?>">
                <div class="card shadow p-2 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                            <i class="material-icons" style="font-size:100px;color:black;">upload_file</i>
                            <h5>Import Inventory</h5>
                        </center>
                    </div>
                </div>
            </a>
        </div>

        <form action="<?php echo base_url();?>settings/importFile" method="post" enctype="multipart/form-data">
            Upload excel file : 
            <input type="file" name="uploadFile" value="" /><br><br>
            <input type="submit" name="submit" value="Upload" />
        </form>

    </div>
</div>