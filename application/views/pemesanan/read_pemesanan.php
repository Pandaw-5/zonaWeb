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
                             Tabel
                             <p><a href="<?php echo base_url('Pemesanan/create')?>"><button class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button></a></p>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="100">Id Pesan</th>
											<th width="100">Waktu Pesan</th>
											<th width="100">Waktu Main</th>
											<th width="100">Durasi</th>
											<th width="100">DP</th>
                                            <th width="100">Diskon</th>
                                            <th width="100">Total Bayar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
												foreach ($rows as $row) {
											?>

											<tr>
												<td><?php echo $row->id_pesan; ?></td>
												<td><?php echo $row->waktu_pesan; ?></td>
												<td><?php echo $row->waktu_main; ?></td>
												<td><?php echo $row->durasi; ?></td>
                                                <td><?php echo $row->dp; ?></td>
                                                <td><?php echo $row->diskon; ?></td>
                                                <td><?php echo $row->total_bayar; ?></td>
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