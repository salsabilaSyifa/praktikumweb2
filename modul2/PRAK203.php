<html>
    <body>
        <form method="post">
            <div>
                <label for="nama">Nilai: </label>
                <input type="text" name="suhu"></br>
            </div>

            <div>
                <label for="nilai">Dari: </label></br>
                <input type="radio" name="nilai" value="celcius">Celcius<br>
                <input type="radio" name="nilai" value="reamur">Reamur<br>
                <input type="radio" name="nilai" value="fahrenhait">Fahrenhait<br>
                <input type="radio" name="nilai" value="kelvin">Kelvin<br>
            </div>

            <div>
                <label for="konversi">Ke: </label></br>
                <input type="radio" name="konversi" value="celcius">Celcius<br>
                <input type="radio" name="konversi" value="reamur">Reamur<br>
                <input type="radio" name="konversi" value="fahrenhait">Fahrenhait<br>
                <input type="radio" name="konversi" value="kelvin">Kelvin<br>
            </div>

            <input type="submit" name="submit" value="Konversi" >
        </form>
    </body>
</html> 

<?php
    if(isset($_POST["submit"])) {
        if (empty($_POST["suhu"])) {
            echo "Isi dulu nilainya";
            echo "<br>";
        }
        if (empty($_POST["nilai"])) {
            echo "Piih dulu nilainya";
            echo "<br>";
        } 
        if (empty($_POST["konversi"])) {
            echo "Piih dulu konversinya";
            echo "<br>";
        } 
        else {
            $suhu=$_POST['suhu'];
            $nilai=$_POST['nilai'];
            $konversi=$_POST['konversi'];

            switch ($nilai=="celcius") {
                case $konversi=="reamur":
                    $hasil=(4/5)*$suhu;
                    echo "<h3>";
                    echo " Hasil konversi ke Reamur: $hasil °R";
                    echo "</h3>";
                break;
                
                case $konversi=="fahrenhait":
                    $hasil=(9/5)*$suhu+32;
                    echo "<h3>";
                    echo "Hasil Konversi ke Fahrenhait : $hasil °F";
                    echo "</h3>";
                break;
    
                case $konversi=="kelvin":
                    $hasil=$suhu+273;
                    echo "<h3>";
                    echo "Hasil Konversi ke Kelvin: $hasil °K";
                    echo "</h3>";
                break;
            }

            switch ($nilai=="reamur") {
                case $konversi=="celcius":
                    $hasil=(5/4)*$suhu;
                    echo "<h3>";
                    echo " Hasil konversi ke Celcius: $hasil °C";
                    echo "</h3>";
                break;
                
                case $konversi=="fahrenhait":
                    $hasil=(9/4)*$suhu+32;
                    echo "<h3>";
                    echo "Hasil Konversi ke Fahrenhait : $hasil °F";
                    echo "</h3>";
                break;
    
                case $konversi=="kelvin":
                    $hasil=(5/4)*$suhu+273;
                    echo "<h3>";
                    echo "Hasil Konversi ke Kelvin: $hasil °K";
                    echo "</h3>";
                break;
            }

            switch ($nilai=="fahrenhait") {
                case $konversi=="celcius":
                    $hasil=(5/9)*($suhu-32);
                    echo "<h3>";
                    echo " Hasil konversi ke Celcius: $hasil °C";
                    echo "</h3>";
                break;
                
                case $konversi=="reamur":
                    $hasil=(4/9)*($suhu-32);
                    echo "<h3>";
                    echo "Hasil Konversi ke Reamur : $hasil °R";
                    echo "</h3>";
                break;
    
                case $konversi=="kelvin":
                    $hasil=(5/9)*($suhu-32)+273;
                    echo "<h3>";
                    echo "Hasil Konversi ke Kelvin: $hasil °K";
                    echo "</h3>";
                break;
            }

            switch ($nilai=="kelvin") {
                case $konversi=="celcius":
                    $hasil=$suhu-273;
                    echo "<h3>";
                    echo " Hasil konversi ke Celcius: $hasil °C";
                    echo "</h3>";
                break;
                
                case $konversi=="reamur":
                    $hasil=(4/5)*($suhu-273);
                    echo "<h3>";
                    echo "Hasil Konversi ke Reamur : $hasil °R";
                    echo "</h3>";
                break;
    
                case $konversi=="fahrenhait":
                    $hasil=(9/5)*($suhu-273)+32;
                    echo "<h3>";
                    echo "Hasil Konversi ke Fahrenhait: $hasil °F";
                    echo "</h3>";
                break;
            }
        }
    }
?> 