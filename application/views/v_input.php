<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Id_Customer</td>
				<td><input type="text" name="id_customer"></td>
			</tr>
			<tr>
				<td>Nama CP</td>
				<td><input type="text" name="nm_cp"></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td><input type="text" name="jabatan"></td>
			</tr>
            <tr>
				<td>email</td>
				<td><input type="text" name="email"></td>
			</tr><tr>
				<td>Nomor HP</td>
				<td><input type="text" name="no_hp"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>