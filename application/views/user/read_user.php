<div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Tabel User</h2>   
                        
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
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="100">Id User</th>
											<th width="100">Username</th>
											<th width="100">Alamat</th>
											<th width="100">No Telephon</th>
											<th width="100">Kata Sandi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
												foreach ($rows as $row) {
											?>

											<tr>
												<td><?php echo $row->id_user; ?></td>
												<td><?php echo $row->username; ?></td>
												<td><?php echo $row->alamat; ?></td>
												<td><?php echo $row->no_tlp; ?></td>
                                                <td><?php echo $row->kata_sandi; ?></td>
                                				<td align="center"><a class="btn-xs btn-info" href="<?php echo base_url()?>/User/update/<?php echo $row->id_user;?>"><span class="glyphicon-pencil">Ubah</span></a> <a class="btn-xs btn-danger" href="<?php echo base_url('User/delete')?>/<?php echo $row->id_user; ?>"><span class="glyphicon-trash">Hapus</span></a></td>
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