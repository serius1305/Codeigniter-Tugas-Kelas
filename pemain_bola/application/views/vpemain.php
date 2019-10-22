<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	</head>
	<body>
		<center><h1>DATA PEMAIN BOLA</h1></center>
		<a href="<?= site_url('Pemain/tambah_data')?>" class="btn btn-info">TAMBAH DATA</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>NO</th>
					<th>NAMA PEMAIN</th>
					<th>ASAL NEGARA</th>
					<th>EDIT</th>
					<th>DELETE</th>
				</tr>
			</thead>
			<tbody>
				<?php $no= 1 ; foreach($dat as $row){ ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $row->nama_pemain ?></td>
						<td><?= $row->asal_negara_pemain ?></td>
						<td><a href="<?= site_url('Pemain/edit_data/'.$row->id_pemain) ?>" class="btn btn-warning">EDIT</a></td>
						<td><a href="<?= site_url('Pemain/delete_data/'.$row->id_pemain) ?>"  class="btn btn-danger" onclick="return confirm('Yakin di Delete?');">DELETE</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</body>
</html>
