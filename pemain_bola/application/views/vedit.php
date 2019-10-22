
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
		<center><h1>EDIT DATA PEMAIN</h1></center>
		<table class="table table-bordered">
			<form action="<?= site_url('Pemain/edit_data_action') ?>" method="post">
				<thead>
					<input type="text" name="id_pemain" required hidden value="<?= $dat->id_pemain ?>" />
					<tr>
						<th>Nama Pemain</th>
						<th>:</th>
						<th><input type="text" name="nama_pemain" required value="<?= $dat->nama_pemain ?>" /></th>
					</tr>
					<tr>
						<th>Asal Negara</th>
						<th>:</th>
						<th><input type="text" name="asal_negara_pemain" required value="<?= $dat->asal_negara_pemain ?>" /></th>
					</tr>
					<tr>
						<th colspan="3"><center><input type="submit" value="EDIT DATA" /></center></th>
					</tr>
				</thead>
			</form>
		</table>
	</body>
</html>
