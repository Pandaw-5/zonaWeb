<!DOCTYPE html>
<html>
<head>
	<title>Demo Crud</title>
</head>
<body>
	<h2>Demo CRUD</h2>
	<p><strong>Tambah Data</strong></p>

	<form action="create" method="post">
		<?php echo $model->labels['kode']; ?><br>
		<input type="text" name="kode" size="10" maxlength="10"><br><br>

		<?php echo $model->labels['nama']; ?><br>
		<input type="text" name="nama" size="30" maxlength="25"><br><br>

		<?php echo $model->labels['harga']; ?><br>
		<textarea name="harga"></textarea><br><br>

		<?php echo $model->labels['stok']; ?><br>
		<textarea name="stok"></textarea><br><br>

		<input type="submit" name="btnSubmit" value="Simpan">
		<input type="button" name="batal" onclick="javascript:history.go(-1);" value="Batal">
	</form>
</body>
</html>