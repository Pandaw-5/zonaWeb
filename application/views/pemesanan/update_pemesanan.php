<!DOCTYPE html>
<html>
<head>
	<title>Pemesanan</title>
</head>
<body>
	<h2>Tabel Pemesanan</h2>
	<p><strong>Ubah Data</strong></p>

	<form action="<?php echo base_url('Pemesanan/update')?>" method="post">
		<?php echo $model->labels['id_pesan']; ?><br>
		<input type="text" name="id_pesan" size="10" maxlength="10" value="<?php echo $model->id_pesan; ?>"><br><br>

		<?php echo $model->labels['waktu_pesan']; ?><br>
		<input type="text" name="waktu_pesan" size="30" maxlength="25" value="<?php echo $model->waktu_pesan; ?>"><br><br>

		<?php echo $model->labels['waktu_main']; ?><br>
		<input type="text" name="waktu_main" size="30" maxlength="25" value="<?php echo $model->waktu_main; ?>"><br><br>

		<?php echo $model->labels['durasi']; ?><br>
		<input type="text" name="durasi" size="30" maxlength="25" value="<?php echo $model->durasi; ?>"><br><br>

		<?php echo $model->labels['dp']; ?><br>
		<input type="text" name="dp" size="30" maxlength="25" value="<?php echo $model->dp; ?>"><br><br>

		<?php echo $model->labels['diskon']; ?><br>
		<input type="text" name="diskon" size="30" maxlength="25" value="<?php echo $model->diskon; ?>"><br><br>

		<?php echo $model->labels['total_bayar']; ?><br>
		<input type="text" name="total_bayar" size="30" maxlength="25" value="<?php echo $model->total_bayar; ?>"><br><br>

		<input type="submit" name="btnSubmit" value="Simpan">
		<input type="button" name="batal" onclick="javascript:history.go(-1);" value="Batal">
	</form>
</body>
</html>