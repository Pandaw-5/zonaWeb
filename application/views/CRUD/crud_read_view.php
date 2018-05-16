
<div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Table Examples</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                             <p><a href="crud/create"><button class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button></a></p>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="100">Kode</th>
											<th width="100">Nama</th>
											<th width="100">Harga</th>
											<th width="100">Stok</th>
											<th width="100"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
												foreach ($rows as $row) {
											?>

											<tr>
												<td><?php echo $row->kode; ?></td>
												<td><?php echo $row->nama; ?></td>
												<td><?php echo $row->harga; ?></td>
												<td><?php echo $row->stok; ?></td>
												<td align="center"><a href="crud/update/<?php echo $row->kode; ?>">Ubah</a> <a href="crud/delete/<?php echo $row->kode; ?>">Hapus</a></td>
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
