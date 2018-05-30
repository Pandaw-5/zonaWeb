<!DOCTYPE html>
<html>
<head>
	<title>User</title>
</head>
<body>
	<h2>Tabel User</h2>
	<p><strong>Ubah User</strong></p>

	<form action="<?php echo base_url('Member/update')?>/<?php echo $model->id_user?>" method="post">
		<?php echo $model->labels['username']; ?><br>
		<input type="text" name="username" size="30" maxlength="25" value="<?php echo $model->username; ?>"><br><br>

		<?php echo $model->labels['alamat']; ?><br>
		<input type="text" name="alamat" size="30" maxlength="25" value="<?php echo $model->alamat; ?>"><br><br>

		<?php echo $model->labels['no_tlp']; ?><br>
		<input type="text" name="no_tlp" size="30" maxlength="25" value="<?php echo $model->no_tlp; ?>"><br><br>

		
		<input type="submit" name="btnSubmit" value="Simpan">
		<input type="button" name="batal" onclick="javascript:history.go(-1);" value="Batal">
	</form>
</body>
</html>