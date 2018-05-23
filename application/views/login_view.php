<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MASUK | ADMIN ZONA FUTSAL</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='<?php echo base_url();?>http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />   

</head>
<body > 
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> MASUK </h2>

                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong> Admin </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" action="beranda" method="POST">
                                  <div class="form-group">
                                  <input class="form-control" placeholder="Nama Pengguna" name="username_a" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                  <input class="form-control" placeholder="Kata Sandi" name="kata_sandi_a" type="password" value="">
                                </div>
                                 <div class="form-group">
                                  <p style="color:blue"><?php echo $model->notifikasi;?></p>
                                </div>
                                <div class="form-group">
                                  <input type="submit" class="btn btn-primary btn-block" name="btn_log" value="MASUK"/>
                                  </div>                                    
                                </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


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
