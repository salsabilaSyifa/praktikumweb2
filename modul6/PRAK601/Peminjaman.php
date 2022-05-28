<?php
    require "Koneksi.php";
    require "Model.php";

    $no = 1;
    $peminjaman = new Model();

    //mengambil data peminjaman
    $result = $peminjaman->getPeminjaman();

    //mengahapus data peminjaman
    if (isset($_GET['id_peminjaman'])) {
        $id = $_GET['id_peminjaman'];
        $peminjaman->deletePeminjaman($id);
        header("Location: Peminjaman.php");
    }

    if (isset($_GET['id_peminjman'])) {
        $id = $_GET['id_peminjaman'];
        $peminjaman->editPeminjaman($id, $tglPinjam, $tglKembali);
        header("Location: Peminjaman.php");
    }
    session_start();
    if (isset($_SESSION['nomor_member'])) :
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
        <h3>Daftar Peminjaman</h3>
        <a href='index.php'>Beranda</a>
        <a href='FormPeminjaman.php'>Tambah Data</a>
        <p>&nbsp;</p>        
        <table>
            <thead>
                <tr>
                <th>No</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result))  { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['tgl_pinjam'] ?></td>
                    <td><?= $row['tgl_kembali'] ?></td>
                    <td>
                        <a href="FormPeminjaman.php?id_peminjaman=<?= $row['id_peminjaman']; ?>">Edit</a>&nbsp;
                        <a href="javascript:confirmDelete('Peminjaman.php?id_peminjaman=<?= $row['id_peminjaman']; ?>')">Hapus</a>
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
<?php
else :
    header("Location: ErrorPage.php");
endif;
?>