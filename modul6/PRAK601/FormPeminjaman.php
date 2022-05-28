<?php 
    require "Koneksi.php";
    require "Model.php";

    $tglPinjam = $tglKembali = "";

    if (isset($_GET['id_peminjaman'])) {
        $id = $_GET['id_peminjaman'];
        $peminjaman = new Model();
        $result = $peminjaman->getPeminjamanById($id);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    session_start();
    if (isset($_SESSION['nomor_member'])) :
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
                    <a class="btn btn-danger my-2" href="Peminjaman.php"><i class="fa fa-arrow-left"></i> Kembali</a>
                    <p>&nbsp;</p>        
                        <div class="col-md-6 text-center">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <?php
                                        if (isset($_GET['id_peminjaman'])) {
                                            echo "Edit Data Peminjaman";
                                        } else {
                                            echo "Tambah Data Peminjaman";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="tgl_pinjam">Tanggal Peminjaman</label>
                                        <input type="date" class="form-control" name="tgl_pinjam" id="tgl_pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $row[0]["tgl_pinjam"] . "" : "value = '' "; ?> placeholder="Tanggal Peminjaman" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="tgl_kembali">Tanggal Pengembalian</label>
                                        <input type="date" class="form-control" name="tgl_kembali" id="tgl_kembali" <?php echo (isset($_GET['id_peminjaman']) ) ?  "value = " . $row[0]["tgl_kembali"] . "" : "value = '' "; ?> placeholder="Tanggal Pengembalian" required>
                                    </div>

                                    <?php
                                    if (isset($_GET['id_peminjaman'])) {
                                        echo " <button type=\"submit\" name=\"update\" class=\"btn btn-secondary my-2\">Update</button>";
                                    } else {
                                        echo " <button type=\"submit\" name=\"submit\" class=\"btn btn-primary my-2\">Tambah</button>";
                                    }
                                    ?>
                                </form>
                            </div>
                            <?php
                            if(isset($_POST['submit'])){
                                $tglPinjam = $_POST['tgl_pinjam'];
                                $tglKembali = $_POST['tgl_kembali'];
                                $peminjaman = new Model();
                                $peminjaman->setPeminjaman($tglPinjam, $tglKembali);
                                header("Location: Peminjaman.php");
                            }
                            
                            if(isset($_POST['update'])){
                                $tglPinjam = $_POST['tgl_pinjam'];
                                $tglKembali = $_POST['tgl_kembali'];
                                $peminjaman = new Model();
                                $peminjaman->editPeminjaman($id, $tglPinjam, $tglKembali);
                                header("Location: Peminjaman.php");
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
else :
    header("Location: ErrorPage.php");
endif;
?>