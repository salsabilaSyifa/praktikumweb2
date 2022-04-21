<html>
    <head>
        <style>
            table, tr, td {
                border: solid black 1px;
                width:200px; 
                height:100px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <form method="post">
            Panjang:
            <input type="text" name="jumlah_baris"><br>
            Lebar:
            <input type="text" name="jumlah_kolom"><br>
            Nilai: 
            <input type="text" name="angka"><br>
            <button type="submit" name="submit">Cetak</button>
        </form>

        <?php
        $jumlahAngka = "";
        $jumlahBaris = "";
        $jumlahKolom = "";

            if(isset($_POST["submit"])){
                $jumlahAngka = $_POST["angka"];
                $jumlahBaris = $_POST["jumlah_baris"];
                $jumlahKolom = $_POST["jumlah_kolom"];

                $arr_string = explode(" ", $jumlahAngka);
                $arr_nilai = count($arr_string);

                if ($jumlahBaris * $jumlahKolom == $arr_nilai) {
                    $jmlAngka=0;
                    for ($i=0; $i < $jumlahBaris; $i++) { 
                        for ($j=0; $j < $jumlahKolom; $j++) { 
                            $tampil[$i][$j]=$arr_string[$jmlAngka];
                            $jmlAngka++;
                        }
                    }

                    echo "<table>";
                    for ($i=0; $i < $jumlahBaris ; $i++) { 
                        echo "<tr>";
                            for ($j=0; $j < $jumlahKolom; $j++) { 
                                echo "<td>".$tampil[$i][$j]."</td>";
                            }
                        echo "</tr>";
                    }
                    echo "</table>";
                    
                } else if ($jumlahBaris * $jumlahKolom < $arr_nilai) {
                    echo "Panjang nilai tidak sesuai dengan ukuran matriks";
                }
                else {
                    error_reporting(0);
                    $jmlAngka=0;
                    
                    for ($i=0; $i < $jumlahBaris; $i++) { 
                        for ($j=0; $j < $jumlahKolom; $j++) { 
                            $tampil[$i][$j]=$arr_string[$jmlAngka];
                            $jmlAngka++;
                        }
                    }

                    echo "<table>";
                    for ($i=0; $i < $jumlahBaris ; $i++) { 
                        echo "<tr>";
                            for ($j=0; $j < $jumlahKolom; $j++) { 
                                echo "<td>".$tampil[$i][$j]."</td>";
                            }
                        echo "</tr>";
                    }
                    echo "</table>";
                }
            }
        ?>
    </body>
</html>