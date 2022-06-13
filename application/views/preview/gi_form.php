<!-- Data Tables -->
<link rel="stylesheet" type="text/css" media="screen"
    href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"> </script>

<div class="container" style="margin-top: 10px;">
    <div class="row ">
        <div class="col-lg-7 col-md-12">
            <div class="cards shadow p-3 mb-5 bg-white rounded" style="min-height: 400px;">
                <div class="card-header card-header-text" style="background-color:#fff">
                    <h4 class="card-title">Lending Activity</h4>
                    <!-- <p class="category">All Warehouse</p> -->
                </div>
                <div class="card-content table-responsive">
                    <table id="pre" class="table table-striped table-hover">
                        <thead class="text-primary">
                            <tr>
                                <th>No</th>
                                <th>Lending No</th>
                                <th>Date</th>
                                <th>Item Code</th>
                                <th>Qty</th>
                                <th>Dept</th>
                                <th>Action</th>
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
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <script>
        $(document).ready(function() {
            //$('#warehouse').DataTable();
            $('#lending').DataTable();

        });
        </script>


        </html>