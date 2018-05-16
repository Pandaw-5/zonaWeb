<!DOCTYPE html>
<html lang="en">
  <head>
<title>Contoh Menu &amp; Submenu Dinamis dengan Codeigniter+Bootstrap</title>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url();?>dist/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>dist/js/bootstrap.min.js"></script>
  </head>
  <body>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>">OZS.WEB.ID</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php
		print_r($menu);
		?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
		
<div class="panel panel-default">
	<?php
	if(isset($halaman)){
	echo '<div class="panel-body">';	
	$this->load->view($halaman);
	echo '</div>';
} else {

	echo '
		<div class="panel-body">
        <p>Berikut ini contoh membaut menu dan submenu dinamis menggunakan CodeIgniter dan Bootstrap.</p>
	</div>';
}
?>
	
	
	
</div>


</div>
</body>
</html>
