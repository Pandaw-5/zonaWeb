<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laporan Transaksi</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bar"></span>
                    <span class="fa fa-bar"></span>
                    <span class="fa fa-bar"></span>
                </button>
                <a class="navbar-brand" href="beranda">HOME</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  &nbsp; <a href="login" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="<?php echo base_url();?>assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                     <li>
                        <a href="Beranda"><i class="fa fa-dashboard fa-3x"></i> Tentang</a>
                    </li>
                     <li>
                        <a  href="User"><i class="fa fa-user fa-3x"></i> Info User</a>
                    </li>
                    <li>
                        <a  href="Member"><i class="fa fa-desktop fa-3x"></i> Info Member</a>
                    </li>
                    <li>
                        <a  class="active-menu" href="Transaksi"><i class="fa fa-qrcode fa-3x"></i>Transaksi</a>
                    </li>
               <li  >
                        <a   href="Pemesanan"><i class="fa fa-bar-chart-o fa-3x"></i> Pemesanan</a>
                    </li> 
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Laporan Transaksi</h2>   
                        
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="100"><center>User</center></th>
                                            <th width="100"><center>Admin</center></th>
                                            <th width="100"><center>Tanggal Pesan</center></th>
                                            <th width="100"><center>Waktu Main</center></th>
                                            <th width="100"><center>Durasi</center></th>
                                            <th width="100"><center>DP</center></th>
                                            <th width="100"><center>Diskon</center></th>
                                            <th width="100"><center>Total Bayar </center></th>
                                            <th width="100"><center>Opsi</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                                foreach ($rows as $row) {
                                            ?>

                                            <tr>

                                                <td><center><?php echo $row->durasi; ?></center></td>
                                                <td><center><?php echo $row->dp; ?></center></td>
                                                <td><center><?php echo $row->waktu_pesan; ?></center></td>
                                                <td><center><?php echo $row->waktu_main; ?></center></td>
                                                <td><center><?php echo $row->durasi; ?></center></td>
                                                <td><center><?php echo $row->dp; ?></center></td>
                                                <td><center><?php echo $row->diskon; ?></center></td>
                                                <td><center><?php echo $row->total_bayar; ?></center></td>
                                                <td align="center">
                                                    <a class="btn-xs btn-info" href="<?php echo base_url()?>/Transaksi/update/<?php echo $row->id_pesan;?>">
                                                        <span class="glyphicon-pencil">Ubah</span></a> 
                                                    <a class="btn-xs btn-danger" href="<?php echo base_url('Transaksi/delete')?>/<?php echo $row->id_pesan; ?>"><span class="glyphicon-trash">Hapus</span></a>
                                                    </td>
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
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
 
</body>
</html>
