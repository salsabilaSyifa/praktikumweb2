<html>
    <body>
        <form method="POST">
            <div>
                <label for="jumlah">Tinggi : </label>
                <input type="number" name="jumlah"></br>
            </div>

            <div>
                <label for="gambar">Alamat Gambar : </label>
                <input type="text" name="gambar"></br>
            </div>

            <button type="submit">Cetak</button>
        </form>
    </body>
</html>

<?php
$jumlah = NULL;
$gambar = NULL;

if($_SERVER["REQUEST_METHOD"]=="POST") {
    if(isset($_POST['jumlah'], $_POST['gambar'])) {
        $jumlah = $_POST['jumlah'];
        $gambar = $_POST['gambar'];

        $i=0;
        while( $i<$jumlah ){
            $j=0;
            while( $j < $i ){
                echo "&nbsp &nbsp &nbsp &nbsp &nbsp ";
                $j++;
            }
            $j=0;
            while ( $j<$jumlah-$i) {
                echo "<img width='40 px' height='40 px' img src='$gambar'>";
                $j++;
            }
            $i++;
            echo " <br> ";
        }
    } 
} 
?>