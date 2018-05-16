<!DOCTYPE html>
<html>
<head>
	<title>Demo CRUD</title>
</head>
<body>
	<h2>Demo CRUD</h2>
	<p><strong>Ubah Data</strong></p>

	<form action="create" method="post">
		<?php echo $model->labels['kode']; ?><br>
		<input type="text" name="kode" size="10" maxlength="10" value="<?php echo $model->kode; ?>"><br><br>

		<?php echo $model->labels['nama']; ?><br>
		<input type="text" name="nama" size="30" maxlength="25" value="<?php echo $model->nama; ?>"><br><br>

		<?php echo $model->labels['harga']; ?><br>
		<textarea name="harga"><?php echo $model->harga; ?></textarea><br><br>

		<?php echo $model->labels['stok']; ?><br>
		<textarea name="stok"><?php echo $model->stok; ?></textarea><br><br>

		<input type="submit" name="btnSubmit" value="Simpan">
		<input type="button" name="batal" onclick="javascript:history.go(-1);" value="Batal">
	</form>
</body>
</html>