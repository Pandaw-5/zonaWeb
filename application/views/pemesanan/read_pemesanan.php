<div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Tabel Pemesanan</h2>   
                        
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <center><h2>Tabel</h2></center>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="100"><center>Id Pesan</center></th>
											<th width="100"><center>Waktu Pesan</center></th>
											<th width="100"><center>Waktu Main</center></th>
											<th width="100"><center>Durasi</center></th>
											<th width="100"><center>DP</center></th>
                                            <th width="100"><center>Diskon</center></th>
                                            <th width="100"><center>Total Bayar </center></th>
                                            <th width="100"><center>Opsi</center></th>
                                        </tr>
                                    </thead>
                                    <p><a href="<?php echo base_url('Pemesanan/create')?>"><button class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button></a></p>
                                    <tbody>
                                        <?php 
												foreach ($rows as $row) {
											?>

											<tr>

												<td><center><?php echo $row->id_pesan; ?></center></td>
												<td><center><?php echo $row->waktu_pesan; ?></center></td>
												<td><center><?php echo $row->waktu_main; ?></center></td>
												<td><center><?php echo $row->durasi; ?></center></td>
                                                <td><center><?php echo $row->dp; ?></center></td>
                                                <td><center><?php echo $row->diskon; ?></center></td>
                                                <td><center><?php echo $row->total_bayar; ?></center></td>
                                				<td align="center"><a class="btn-xs btn-info" href="<?php echo base_url()?>/Pemesanan/update/<?php echo $row->id_pesan;?>"><span class="glyphicon-pencil">Ubah</span></a> <a class="btn-xs btn-danger" href="<?php echo base_url('Pemesanan/delete')?>/<?php echo $row->id_pesan; ?>"><span class="glyphicon-trash">Hapus</span></a></td>
											</tr>
											<?php
											}
											?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
               
    </div>