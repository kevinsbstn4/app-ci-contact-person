<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
<div class="jumbotron jumbotron-fluid">
<center>
  <div class="container">
    <h1 class="display-4">Dokumen CP</h1>
    <p class="lead">Tahun 2019-2022</p>
  </div>
  </center>
</div>
<center>
<button type="button" class="btn btn-outline-success" style="width: 40%" onclick="window.location.href = '<?php echo base_url().'index.php/crud/tambah'?>';">Tambah CP</button>
</center>
	<table style="margin:20px auto;" border="1" class="table">
	<thead class="thead-dark">
		<tr>
			<th>No</th>
			<th>id_customer</th>
			<th>Nama CP</th>
			<th>Jabatan</th>
            <th>Email</th>
			<th>No Hp</th>
			<th>Aksi</th>
            
		</tr>
		</thead>
		<?php 
		$no = 1;
		foreach($cp as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->id_customer ?></td>
			<td><?php echo $u->nm_cp ?></td>
            <td><?php echo $u->jabatan ?></td>
			<td><?php echo $u->email ?></td>
			<td><?php echo $u->no_hp ?></td>
			<td>
			<?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
				<?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>		
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>