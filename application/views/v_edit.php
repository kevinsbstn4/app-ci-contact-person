<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($cp as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
        <table style="margin:20px auto;">
            <tr>
                <td>id</td>
                <td>
                   <input type="text" name="id" value="<?php echo $u->id ?>">
                </td>
            </tr>
			<tr>
                <td>id Customer:</td>
                <td><input type="text" name="id_customer" value="<?php echo $u->id_customer ?>" ></td>
            </tr>
            <tr>
                <td>Nama CP:</td>
                <td><input type="text" name="nm_cp" value="<?php echo $u->nm_cp ?>" ></td>
            </tr>
            <tr>
                <td>Jabatan:</td>
                <td><input type="text" name="jabatan" value="<?php echo $u->jabatan ?>" ></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" value="<?php echo $u->email ?>" ></td>
            </tr>
            <tr>
                <td>Nomor HP :</td>
                <td><input type="text" name="no_hp" value="<?php echo $u->no_hp ?>" ></td>
            </tr>
            <tr>
                <td>
                <input type="submit" name="submit" >
                </td>
            </tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>