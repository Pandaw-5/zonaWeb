<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pemesanan Lapangan | Admin</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url();?>assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
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
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
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
                        <a  href="User"><i class="fa fa-desktop fa-3x"></i> Info User</a>
                    </li>
                    <li>
                        <a  href="tab_panel"><i class="fa fa-qrcode fa-3x"></i> Transaksi</a>
                    </li>
               <li  >
                        <a class="active-menu" href="Pemesanan"><i class="fa fa-bar-chart-o fa-3x"></i> Pemesanan</a>
                    </li> 
                     
                    
                             
                    
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >

        
  <h2>Pemesanan</h2>
  <p><strong>Tambah Data</strong></p>

  <form action="<?php echo base_url('Pemesanan/create')?>" method="post">
    <?php echo $model->labels['id_pesan']; ?><br>
    <input placeholder="kosongkan" type="text" name="id_pesan" size="10" maxlength="10"><br><br>

    <?php echo $model->labels['waktu_pesan']; ?><br>
    <input placeholder="tanggal pesan" type="date" name="waktu_pesan" size="30" maxlength="25"><br><br>

    <?php echo $model->labels['waktu_main']; ?><br>
    <input placeholder="jam" type="TIME" name="waktu_main" size="30" maxlength="25"><br><br>

    <?php echo $model->labels['durasi']; ?><br>
    <input placeholder="saat main" type="TIME" name="durasi" size="30" maxlength="25"><br><br>

    <?php echo $model->labels['dp']; ?><br>
    <input placeholder="pembayaran pertama" type="text" name="dp" size="10" maxlength="10"><br><br>

    <?php echo $model->labels['diskon']; ?><br>
    <input placeholder="potongan harga" type="text" name="diskon" size="10" maxlength="10"><br><br>

    <?php echo $model->labels['total_bayar']; ?><br>
    <input placeholder="jumlah bayar" type="text" name="total_bayar" size="10" maxlength="10"><br><br>

    <input type="submit" name="btnSubmit" value="Simpan">
    <input type="button" name="batal" onclick="javascript:history.go(-1);" value="Batal">
  </form>

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
     <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo base_url();?>assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/morris/morris.js"></script>

    <script src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
   
</body>
</html>
