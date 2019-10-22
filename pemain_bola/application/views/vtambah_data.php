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
		<right><a href="<?= site_url('Pemain/tampil') ?>" class="btn btn-info"><< KEMBALI</a></right>
		<center><h1>TAMBAH DATA PEMAIN</h1></center>
		<table class="table table-bordered">
			<form action="<?= site_url('Pemain/tambah_data_action') ?>" method="post">
				<thead>
					<tr>
						<th>Nama Pemain</th>
						<th>:</th>
						<th><input type="text" name="nama_pemain" required/></th>
					</tr>
					<tr>
						<th>Asal Negara</th>
						<th>:</th>
						<th><input type="text" name="asal_negara_pemain" required/></th>
					</tr>
					<tr>
						<th colspan="3"><center><input type="submit" value="TAMBAH DATA" /></center></th>
					</tr>
				</thead>
			</form>
		</table>
	</body>
</html>
