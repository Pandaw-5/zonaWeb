<!DOCTYPE html>
<html>
<head>
	<title>Pemesanan</title>
</head>
<body>
	<h2>Pemesanan</h2>
	<p><strong>Tambah Data</strong></p>

	<form action="<?php echo base_url('Pemesanan/create')?>" method="post">
		<?php echo $model->labels['id_pesan']; ?><br>
		<input type="text" name="id_pesan" size="10" maxlength="10"><br><br>

		<?php echo $model->labels['waktu_pesan']; ?><br>
		<input type="text" name="waktu_pesan" size="30" maxlength="25"><br><br>

		<?php echo $model->labels['waktu_main']; ?><br>
		<input type="text" name="waktu_main" size="30" maxlength="25"><br><br>

		<?php echo $model->labels['durasi']; ?><br>
		<textarea name="durasi"></textarea><br><br>

		<?php echo $model->labels['dp']; ?><br>
		<textarea name="dp"></textarea><br><br>

		<?php echo $model->labels['diskon']; ?><br>
		<textarea name="diskon"></textarea><br><br>

		<?php echo $model->labels['total_bayar']; ?><br>
		<textarea name="total_bayar"></textarea><br><br>

		<input type="submit" name="btnSubmit" value="Simpan">
		<input type="button" name="batal" onclick="javascript:history.go(-1);" value="Batal">
	</form>
</body>
</html>