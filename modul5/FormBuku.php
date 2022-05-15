<?php 
	require "Koneksi.php";
	require "Model.php";
	
	$judul = $penulis = $penerbit = $tahunTerbit = "";
	
	if (isset($_GET['id_buku'])) {
		$id = $_GET['id_buku'];
		$buku = new Model();
		$result = $buku->getBukuById($id);
		$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
	}	
?>

<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12 py-3">
					<h1>Sistem Informasi Perpustakaan</h1>
					<a class="btn btn-danger my-2" href="Buku.php"><i class="fa fa-arrow-left"></i> Kembali</a>
					<p>&nbsp;</p>        
					<div class="row">
						<div class="col-md-6 text-center">
							<div class="card">
								<div class="card-header bg-primary text-white">
									<?php
										if (isset($_GET['id_buku'])) {
											echo "Edit Data Buku";
										} else {
											echo "Tambah Data Buku";
										}
									?>
								</div>
								<div class="card-body">
									<form action="" method="post">
										<div class="form-group">
											<label for="judul_buku">Judul Buku</label>
											<input type="text" class="form-control" name="judul_buku" id="judul_buku" <?php echo (isset($_GET['id_buku'])) ?  "value = '" . $row[0]["judul_buku"] . "'" : "value = '' "; ?> placeholder="Masukkan Judul Buku" required>
										</div>

										<div class="form-group">
											<label for="penulis">Penulis Buku</label>
											<input type="text" class="form-control" name="penulis" id="penulis" <?php echo (isset($_GET['id_buku']) ) ?  "value = '" . $row[0]["penulis"] . "'" : "value = '' "; ?> placeholder="Masukkan Penulis Buku" required>
										</div>

										<div class="form-group">
											<label for="penerbit">Penerbit</label>
											<input class="form-control" name="penerbit" id="penerbit" <?php echo (isset($_GET['id_buku']) ) ?  "value = '" . $row[0]["penerbit"] . "'" : "value = '' "; ?> placeholder="Masukkan Penerbit Buku" required>
										</div>

										<div class="form-group">
											<label for="tahun_terbit">Tahun Terbit</label>
											<input type="number" class="form-control" name="tahun_terbit" id="tahun_terbit" <?php echo (isset($_GET['id_buku'])) ?  "value = '" . $row[0]["tahun_terbit"] . "'" : "value = '' "; ?> placeholder="Tahun Terbit" required>
										</div>
										<?php
										if (isset($_GET['id_buku'])) {
											echo " <button type=\"submit\" name=\"update\" class=\"btn btn-secondary my-2\">Update</button>";
										} else {
											echo " <button type=\"submit\" name=\"submit\" class=\"btn btn-primary my-2\">Tambah</button>";
										}
										?>
									</form>
								</div>
								<?php
								if(isset($_POST['submit'])){
									$judul = $_POST['judul_buku'];
									$penulis = $_POST['penulis'];
									$penerbit = $_POST['penerbit'];
									$tahunTerbit = $_POST['tahun_terbit'];
									$buku = new Model();
									$buku->setBuku($judul, $penulis, $penerbit, $tahunTerbit);
									header("Location: Buku.php");
								}
								
								if(isset($_POST['update'])){
									$judul = $_POST['judul_buku'];
									$penulis = $_POST['penulis'];
									$penerbit = $_POST['penerbit'];
									$tahunTerbit = $_POST['tahun_terbit'];
									$buku = new Model();
									$buku->editBuku($id, $judul, $penulis, $penerbit, $tahunTerbit);
									header("Location: Buku.php");
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>