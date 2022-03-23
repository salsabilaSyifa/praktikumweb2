<html>
    <body>
        <form method="post">
            <div>
                <label for="nilai">Nilai: </label>
                <input type="text" name="nilai"></br>
            </div>

            <input type="submit" value="Konversi">
        </form>

        <?php
            $nilai  = trim($_POST["nilai"]);

            if ($nilai == 0) {
                $grade = "Nol";
            } else if($nilai > 0 && $nilai < 10) {
                $grade = "Satuan";
            } else if($nilai > 10 && $nilai < 20) {
                $grade = "Belasan";
            } else if($nilai > 19 && $nilai < 99) {
                $grade = "Puluhan";
            } else if($nilai > 99 && $nilai < 999) {
                $grade = "Ratusan";
            } else if($nilai > 999){
                $grade = "Anda Menginput Melebihi Limit Bilangan";
            }
            
            echo "<h3>";
            echo "Hasil: $grade";
            echo "</h3>";
        ?>
    </body>
</html>