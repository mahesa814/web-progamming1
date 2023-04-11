<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Registrasi</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
	<div class="p-5">
		<div class="col-md-6 card">
			<form action="show.php" method="post">
				<div class="div card-header">
					<h5>Biodata</h5>
				</div>
				<div class="card-inner card-body">
					<div class="row">
						<div class="col-md-12 mt-3">
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" class="form-control" id="nama" name="nama" placeholder="Your Name">
							</div>
						</div>
						<div class="col-md-12 mt-3">
							<div class="form-group">
								<label for="nim">nim</label>
								<input type="text" class="form-control" id="nim" name="nim" placeholder="Your nim">
							</div>
						</div>
						<div class="col-md-12 mt-3">
							<div class="form-group">
								<label for="nim" class="form-label">tanggal lahir</label>
								<div class="d-flex">
									<select name="tgl" class="form-control">
										<option selected="selected">Tanggal</option>
										<?php
										for ($a = 1; $a <= 31; $a += 1) {
											echo "<option value=$a> $a </option>";
										}
										?>
									</select>
									<select name="bln" class="form-control">
										<option selected="selected">Bulan</option>
										<?php
										$bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
										$jlh_bln = count($bulan);
										for ($c = 0; $c < $jlh_bln; $c += 1) {
											echo "<option value=$bulan[$c]> $bulan[$c] </option>";
										}
										?>
									</select>
									<select name="tahun" id="" class="form-control mr-2">
										<option selected="selected">tahun</option>
										<?php
										$now = date('Y');
										for ($a = 2000; $a <= $now; $a++) {
											echo "<option value='$a'>$a</option>";
										}
										?>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<label for="">Alamat</label>
							<textarea name="alamat" id="" class="form-control"></textarea>
						</div>
						<div class="col-md-12">
							<label for="" class="form-label">Jenis Kelasmin</label>
							<div class="d-flex">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki"
										id="laki">
									<label class="form-check-label" for="laki">
										Laki Laki
									</label>
								</div>
								<div class="form-check" style="margin-left:10px;">
									<input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan"
										id="perempuan">
									<label class="form-check-label" for="perempuan">
										Perempuam
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-header mt-5">
					<h5>User Account</h5>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<label>Username</label>
							<input type="text" class="form-control" name="username">
						</div>
						<div class="col-md-12">
							<label>Email</label>
							<input type="email" class="form-control" name="email">
						</div>
						<div class="col-md-12">
							<label>Password</label>
							<input type="text" class="form-control" name="password">
						</div>
						<div class="col-md-12">
							<label>Ulangi Password</label>
							<input type="text" class="form-control" name="password_confirm">
						</div>
					</div>
				</div>
				<div class="card-header mt-5">
					<h5>Tahun Ini</h5>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="form-check" style="margin-left:70px;">
							<input class="form-check-input" type="checkbox" name="kuasa[]" value="Menguasai Html"
								id="laki">
							<label class="form-check-label" for="laki">
								Menguasai Html
							</label>
						</div>
						<div class="form-check" style="margin-left:70px;">
							<input class="form-check-input" type="checkbox" name="kuasa[]" value="Paham Css"
								id="Paham Css">
							<label class="form-check-label" for="Paham Css">
								Paham Css
							</label>
						</div>
						<div class="form-check" style="margin-left:70px;">
							<input class="form-check-input" type="checkbox" name="kuasa[]" value="Mastering Php"
								id="Mastering Php">
							<label class="form-check-label" for="Mastering Php">
								Mastering Php
							</label>
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">kirim data</button>
			</form>
		</div>
	</div>
</body>

</html>