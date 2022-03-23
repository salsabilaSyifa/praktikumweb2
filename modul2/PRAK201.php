<html>
    <body>
        <form method="post">
            <div>
                <label for="satu">Nama: 1</label>
                <input type="text" name="satu"></br>
            </div>

            <div>
                <label for="dua">Nama: 2</label>
                <input type="text" name="dua"></br>
            </div>

            <div>
                <label for="tiga">Nama: 3</label>
                <input type="text" name="tiga"></br>
            </div>

            <input type="submit" name="submit" value="Urutkan">
        </form>
    </body>
</html>

<?php  
    if(isset($_POST['submit'])) {

        $satu=$_POST['satu'];
        $dua=$_POST['dua'];
        $tiga=$_POST['tiga'];

        if ($tiga < $dua && $dua < $satu) {
            echo $tiga,"<br>";
            echo $dua,"<br>";
            echo $satu,"<br>";
        }
        else if ($tiga < $satu && $satu < $dua) {
            echo $tiga,"<br>";
            echo $satu,"<br>";
            echo $dua,"<br>";
        }
        
        else if ($dua < $satu && $satu < $tiga) {
            echo $dua,"<br>";
            echo $satu,"<br>";
            echo $tiga,"<br>";
        }
        else if ($dua < $satu && $tiga < $satu) {
            echo $dua,"<br>";
            echo $tiga,"<br>";
            echo $satu,"<br>";
        }

        else if ($satu < $tiga && $tiga < $dua) {
            echo $satu,"<br>";
            echo $tiga,"<br>";
            echo $dua,"<br>";
        }
        else if ($satu < $dua && $dua < $tiga) {
            echo $satu,"<br>";
            echo $dua,"<br>";
            echo $tiga,"<br>";
        }
    }
?>  