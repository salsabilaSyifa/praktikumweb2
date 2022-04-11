<html>
    <body>
        <form method="POST">
            <input type="text" name="str">
            <button type="submit">submit</button>
        </form>
    </body>
</html>

<?php    
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        if ($_POST['str']==null) {
            echo "error";
        }
        else if(isset($_POST['str'])) {
            $str = $_POST['str'];
            $chars = str_split($str);
            $angka = strlen($str);
            
            foreach ($chars as $char) {
                $ubah_huruf_besar = strtoupper($char);
                echo $ubah_huruf_besar;
                $ubah_huruf_kecil = strtolower($char);
                echo str_repeat($ubah_huruf_kecil,$angka-1);
            }
        }
    } 
?>