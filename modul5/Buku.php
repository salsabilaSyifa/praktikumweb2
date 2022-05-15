<?php
    require "Koneksi.php";
    require "Model.php";

    $no = 1;
    $buku = new Model();

    //mengambil data buku
    $result = $buku->getBuku();
    
    //mengahapus data Buku
    if (isset($_GET['id_buku'])) {
        $id = $_GET['id_buku'];
        $buku->deleteBuku($id);
        header("Location: Buku.php");
    }

    if (isset($_GET['id_buku'])) {
        $id = $_GET['id_buku'];
        $buku->editBuku($id, $judul, $penulis, $penerbit, $tahunTerbit);
        header("Location: Buku.php");
    }
?>

<html>
    <head>
        <style>
            table, tr, th, td {
                text-align: center;
                margin-left: auto;
                margin-right: auto;
                border: 1px solid black;
                border-collapse: collapse;}
            tr, th, td {
                padding: 15px;}
            body {
                text-align: center;}
        </style>
    </head>
    <body>
        <h1>Sistem Informasi Perpustakaan</h1>
        <hr>
        <h3>Daftar Buku</h3>
        <a class="btn btn-info my-1" href='index.php'"><i class="fa fa-home"></i> Beranda</a>
        <a class="btn btn-success my-1" href='FormBuku.php'"><i class="fa fa-book"></i> Tambah Data</a>
        <p>&nbsp;</p>        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Penulis Buku</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result))  { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['judul_buku'] ?></td>
                        <td><?= $row['penulis'] ?></td>
                        <td><?= $row['penerbit'] ?></td>
                        <td><?= $row['tahun_terbit'] ?></td>
                        <td>
                            <a href="FormBuku.php?id_buku=<?= $row['id_buku']; ?>">Edit</a>&nbsp;
                            <a href="javascript:confirmDelete('Buku.php?id_buku=<?= $row['id_buku']; ?>')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <script>
            function confirmDelete(url) {
                if (confirm("Yakin Hapus?")) {
                    window.location.href = url;
                }
            }
        </script>
    </body>
</html>