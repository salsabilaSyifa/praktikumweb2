<html>
    <body>
        <form method="POST">
            <div>
                <label for="awal">Batas Bawah : </label>
                <input type="number" name="awal"></br>
            </div>

            <div>
                <label for="akhir">Batas Atas : </label>
                <input type="number" name="akhir"></br>
            </div>
            <button type="submit">Cetak</button>
        </form>
    </body>
</html>

<?php
    $awal = NULL;
    $akhir = NULL;

    if($_SERVER["REQUEST_METHOD"]=="POST") {
        if(isset($_POST['awal'], $_POST['akhir'])) {
            $awal = $_POST['awal'];
            $akhir = $_POST['akhir'];

            if ($awal < $akhir) {
                do {
                    if (($awal+7)%5==0) {
                        echo "<img width='20 px' height='20 px' img src='https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png'> ";
                    } else {
                        echo "$awal ";
                    }
                    $awal++;
                } while ($awal <= $akhir);
            }
            else {
                echo "masukan salah silakan coba lagi";
            } 
        } 
    } 
?>