<html>
    <body>
        <form method="POST">
            <div>
                <label for="jumlah">Tinggi : </label>
                <input type="number" name="jumlah"></br>
            </div>

            <div>
                <label for="jumlah">Alamat Gambar : </label>
                <a href="https://cdn0.iconfinder.com/data/icons/web-and-mobile-icons-volume-2/128/52-512.png"><button>https://cdn0.iconfinder.com/data/icons/web-and-mobile-icons-volume-2/128/52-512.png</button></a>
            </div>

            <button type="submit">Cetak</button>
        </form>
    </body>
</html>

<?php
$jumlah = NULL;
if($_SERVER["REQUEST_METHOD"]=="POST") {
    if(isset($_POST['jumlah'])) {
        $jumlah = $_POST['jumlah'];
        $i=0;
        while( $i<$jumlah ){
            $j=0;
            while( $j < $i ){
                echo "&nbsp &nbsp &nbsp &nbsp &nbsp ";
                $j++;
            }
            $j=0;
            while ( $j<$jumlah-$i) {
                echo "<img width='40 px' height='40 px' img src='https://cdn0.iconfinder.com/data/icons/web-and-mobile-icons-volume-2/128/52-512.png'/>";
                $j++;
            }
            $i++;
            echo " <br> ";
        }
    } 
} 
?>