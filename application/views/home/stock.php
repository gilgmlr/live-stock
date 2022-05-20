<div class="col-md-12">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading"
                style="background-color: white; border-bottom:2px solid #F4F8FA; font-size: 15px;"><i
                    class="glyphicon glyphicon-sort"></i> Stok Barang</div>
            <div class="panel-body" style="padding-bottom: 35px;">
                <p style="font-size: 30px;">Data Stok Barang</p><br />
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered data">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah Masuk</th>
                                        <th>Jumlah Keluar</th>
                                        <th>Total Barang</th>
                                        <!-- <th class="text-center" width="70">Aksi</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($sql1 as $barang) { ?>
                                    <tr>
                                        <td><?=$no;?></td>
                                        <td><?=$barang['id_barang'];?></td>
                                        <td><?=$barang['nama_barang'];?></td>
                                        <td><?=$barang['jml_masuk'];?></td>
                                        <td><?=$barang['jml_keluar'];?></td>
                                        <td><?=$barang['total_barang'];?></td>
                                        <!-- <td class="text-center">
												<a href="" title="edit" style="margin-right: 10px;"><span class="glyphicon glyphicon-edit"></span></a>
											</td> -->
                                    </tr>
                                    <?php $no++; }; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>