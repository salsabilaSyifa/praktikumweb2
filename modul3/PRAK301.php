<html>
    <body>
        <form method="POST">
            <div>
                <label for="jumlah">Jumlah Peserta : </label>
                <input type="number" name="jumlah"></br>
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
            $x = 1;
            while($x <= $jumlah) {
                echo "<h3 style='color:red'>Peserta ke-$x</h3>";
                $x+=1;

                echo "<h3 style='color:green'>Peserta ke-$x</h3>";
                $x+=1;
            }
        } 
    } 
?>