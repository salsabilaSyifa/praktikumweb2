<?php
require "Login.php";

session_start();
if (isset($_SESSION['nomor_member'])):
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
        <div class="container">
            <h1>Sistem Informasi Perpustakaan</h1>
            <hr>
            <h2>Selamat Datang</h2>
            <p> Silahkan pilih menu yang tersedia </p>
            <table>
                <tr>
                    <td><a href="Member.php">Member</a></td>
                    <td><a href="Buku.php">Buku</a></td>
                    <td><a href="Peminjaman.php">Peminjaman</a></td>
                </tr>
            </table>
            <a href="Logout.php">logout</a>
        </div>
    </body>
</html>
<?php
else:
    header("location:FormLogin.php");
endif;
?>