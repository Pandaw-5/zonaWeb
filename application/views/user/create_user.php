<!DOCTYPE html>
<html>
<head>
	<title>User</title>
</head>
<body>
	<h2>User</h2>
	<p><strong>Tambah User</strong></p>

	<form action="<?php echo base_url('User/create')?>" method="post">
		<?php echo $model->labels['id_user']; ?><br>
		<input type="text" name="id_user" size="10" maxlength="10"><br><br>

		<?php echo $model->labels['username']; ?><br>
		<input type="text" name="username" size="30" maxlength="25"><br><br>

		<?php echo $model->labels['alamat']; ?><br>
		<input type="text" name="alamat" size="30" maxlength="25"><br><br>

		<?php echo $model->labels['no_tlp']; ?><br>
		<textarea name="no_tlp"></textarea><br><br>

		<?php echo $model->labels['kata_sandi']; ?><br>
		<textarea name="kata_sandi"></textarea><br><br>

		<input type="submit" name="btnSubmit" value="Simpan">
		<input type="button" name="batal" onclick="javascript:history.go(-1);" value="Batal">
	</form>
</body>
</html>