<?php
    require "Koneksi.php";
    require "Model.php";

    $no = 1;
    $member = new Model();

    //mengambil data member
    $result = $member->getMember();

    //mengahapus data member
    if (isset($_GET['id_member'])) {
        $id = $_GET['id_member'];
        $member->deleteMember($id);
        header("Location: Member.php");
    }

    if (isset($_GET['id_member'])) {
        $id = $_GET['id_member'];
        $member->editMember($id, $nama, $nomor, $password, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar);
        header("Location: Member.php");
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
        <h3>Daftar Member</h3>
        <a href='index.php'>Beranda</a>
        <a href='FormMember.php'>Tambah Data</a>
        <p>&nbsp;</p>        
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nomor Member</th>
                    <th>Alamat</th>
                    <th>Tgl. Mendaftar</th>
                    <th>Tgl. Terakhir Bayar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result))  { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['nama_member'] ?></td>
                        <td><?= $row['nomor_member'] ?></td>
                        <td><?= $row['alamat'] ?></td>
                        <td><?= $row['tgl_mendaftar'] ?></td>
                        <td><?= $row['tgl_terakhir_bayar'] ?></td>
                        <td>
                            <a href="FormMember.php?id_member=<?= $row['id_member']; ?>">Edit</a>&nbsp;
                            <a href="javascript:confirmDelete('Member.php?id_member=<?= $row['id_member']; ?>')">Hapus</a>
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