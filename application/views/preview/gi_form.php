<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/header.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/dashboard.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/stock.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/login.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/barangmasuk.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/barangkeluar.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/search.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <!-- IconGoogle -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" media="screen"
        href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Modal -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>



    <title><?php echo $judul ?></title>
</head>

<body>


    <div class="container" style="margin-top: 10px;">
        <div class="row ">
            <div class="col">
                <button type="button" class="btn btn-outline-success">Save</button>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="cards shadow p-3 mb-5 bg-white rounded" style="min-height: 400px;">
                    <div class="card-header card-header-text" style="background-color:#fff">
                        <h4 class="card-title">Preview</h4>
                        <div class="row">
                            <button type="button" class="btn btn-outline-success">Save</button>

                        </div>
                        <!-- <p class="category">All Warehouse</p> -->
                    </div>
                    <div class="card-content table-responsive">
                        <table id="pre" class="table table-striped table-hover">
                            <thead class="text-primary">
                                <tr>
                                    <th>No</th>
                                    <th>MI No</th>
                                    <th>Entry Date</th>
                                    <th>Post Date</th>
                                    <th>Applicant</th>
                                    <th>Dept No</th>
                                    <th>Project No</th>
                                    <th>Memmo</th>
                                    <th>Item No</th>
                                    <th>Uom Code</th>
                                    <th>Warehouse Code</th>
                                    <th>Transaction Qty</th>
                                    <th>Reaseon</th>
                                    <th>Create by</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="alert alert-success" style="width : 250px" role="alert">
                    <h4 class="alert-heading">Confirmation Alert!</h4>
                    <p>Are you sure want to save this?.</p>
                    <hr>
                    <button type="button" class="btn btn-outline-success">Save</button>
                    <button type="button" class="btn btn-outline-danger">Cancel</button>

                </div>
            </div>

        </div>
    </div>


    <script>
    $(document).ready(function() {
        //$('#warehouse').DataTable();
        $('#pre').DataTable();

    });
    </script>



</body>

</html>