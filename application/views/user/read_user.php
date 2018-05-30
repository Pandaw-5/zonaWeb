<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User</title>
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
                        <a   href="Beranda"><i class="fa fa-dashboard fa-3x"></i> Tentang</a>
                    </li>
                     <li>
                        <a  class="active-menu" href="User"><i class="fa fa-user fa-3x"></i> Info User</a>
                    </li>
                    <li>
                        <a  href="Member"><i class="fa fa-desktop fa-3x"></i> Info Member</a>
                    </li>
                    <li>
                        <a  href="Transaksi"><i class="fa fa-qrcode fa-3x"></i> Transaksi</a>
                    </li>
                    <li  >
                        <a  href="Pemesanan"><i class="fa fa-bar-chart-o fa-3x"></i> Pemesanan</a>
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
                     <h2>User</h2>   
                        
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
                                            <th width="100">Username</th>
                                            <th width="100">Alamat</th>
                                            <th width="100">No Telephone</th>
                                            <th width="100">Jadikan Member ?</th>
                                            <th width="100">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                                foreach ($rows as $row) {
                                            ?>

                                            <tr>
                                                <td><?php echo $row->username; ?></td>
                                                <td><?php echo $row->alamat; ?></td>
                                                <td><?php echo $row->no_tlp; ?></td>                                                
                                                <td align="center">
                                                    <?php 
                                                    $sql = sprintf("SELECT * FROM member where member.id_member = $row->id_user");
                                                            $query = $this->db->query($sql);
                                                            $row1 = $query->row_array();
                                                            if(!$row1){
                                                                echo'
                                                                    <a class="btn-xs btn-primary" href="'; echo base_url(); echo 'User/transaksi/'; echo $row->id_user; echo '"><span class="glyphicon-pencil">YA</span></a>'?>
                                                                <?php }
                                                                else {
                                                                    echo "sudah jadi member";
                                                                }
                                                             ?>
                                                </td>
                                                <td>
                                                    <a class="btn-xs btn-primary" href="<?php echo base_url()?>/User/transaksi/<?php echo $row->id_user;?>"><span class="glyphicon-pencil">Transaksi</span></a>
                                                    <a class="btn-xs btn-info" href="<?php echo base_url()?>/User/update/<?php echo $row->id_user;?>"><span class="glyphicon-pencil">Ubah</span></a> 
                                                    <a class="btn-xs btn-danger" href="<?php echo base_url('User/delete')?>/<?php echo $row->id_user; ?>"><span class="glyphicon-trash">Hapus</span></a>
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
