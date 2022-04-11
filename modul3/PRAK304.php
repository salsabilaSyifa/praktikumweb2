<html>
  <style type="text/css">
    <?php
      if(isset($_POST['submit']) || $_POST['jumlah'] > 1) {
          echo "#main { display : none ;}";
      }
    ?>
  </style>
  <body>
    <form id="main" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <div>
        <label for="jumlah">Jumlah Bintang : </label>
        <input type="number" name="jumlah"></br>
      </div>
      <input type="submit" name="submit" value="Cetak">
    </form>
    <?php
      $jumlah = NULL;
      if($_SERVER["REQUEST_METHOD"]=="POST") {
        if(isset($_POST['jumlah'])){
          $jumlah = $_POST['jumlah'];
        }
        if(isset($_POST['tambah'])){
            $jumlah = $_POST['jumlah'];
            $jumlah +=1;
        }
        if(isset($_POST['kurang'])){
            $jumlah = $_POST['jumlah'];
            $jumlah -=1;
        }
        $i = 0;
        if($jumlah > 0){
          echo "Jumlah Bintang adalah $jumlah <br><br>";
          while ($i < $jumlah){
              echo "<img width='50 px' height='50 px' img src='https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png'> &nbsp";
              $i +=1;
          } ?>
          <form method="POST">
            <input type="submit" name="tambah" value="Tambah">
            <input type="submit" name="kurang" value="Kurang"><br>
            <input type="number" name="jumlah" value="<?php echo $jumlah ?>" hidden>
          </form> <?php
        }
      }
    ?>
  </body>
</html> 