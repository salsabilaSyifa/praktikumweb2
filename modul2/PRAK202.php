<html>
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>

    <body>  
        <?php
            $namaErr = $nimErr = $genderErr = "";
            $nama = $nim = $gender = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (empty($_POST["nama"])) {
                    $namaErr = "Nama tidak boleh kosong";
                } else {
                    $nama = test_input($_POST["nama"]);
                }
                
                if (empty($_POST["nim"])) {
                    $nimErr = "NIM tidak boleh kosong";
                } else {
                    $nim = test_input($_POST["nim"]);
                }

                if (empty($_POST["gender"])) {
                    $genderErr = "Jenis kelamin tidak boleh kosong";
                } else {
                    $gender = test_input($_POST["gender"]);
                }
            }

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

            <div>
                <label for="nama">Nama:</label>
                <input type="text" name="nama">
                <span class="error">* 
                    <?php echo $namaErr;?>
                </span> <br>
            </div>

            <div>
                <label for="nim">NIM:</label>
                <input type="text" name="nim">
                <span class="error">* 
                    <?php echo $nimErr;?>
                </span> <br>
            </div>

            <div>
                <label for="gender">Jenis Kelamin:</label>
                <span class="error">* 
                    <?php echo $genderErr;?> 
                </span> </br>
                <input type="radio" name="gender" value="Laki-laki">Laki-laki</br>
                <input type="radio" name="gender" value="Perempuan">Perempuan</br>
            </div>

            <input type="submit" name="submit" value="Submit">  
        </form>
        
        <h2>Output:</h2>
        <?php
            if ($nama == true && $nim == true && $gender == true) {
                echo $nama;
                echo "<br>";
                echo $nim;
                echo "<br>";
                echo $gender;
            }
        ?>

    </body>
</html>