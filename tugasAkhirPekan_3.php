<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tugas akhir pekan 3</title>
  </head>
  <body>

    <?php

    $r = 10;
    $t = 30;

    function volumeTabung($rusuk, $tinggi){
        return pi()* $rusuk * $rusuk * $tinggi;
    }
   ?>



    <h3>Soal Nomor 3</h3>
    <p>Sebuah tabung memiliki jari-jari dan tinggi
      masing-masing 10 cm dan 30 cm, lalu tentukanlah
      berapa volume dari tabung tersebut?</p>

    <br><br>
    <h3>Jawaban</h3>

    <p><b>Volume dari tabung tersebut adalah :
    <?php echo volumeTabung($r, $t); ?>


  </body>
</html>
