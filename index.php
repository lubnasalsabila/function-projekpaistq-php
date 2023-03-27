<?php
    echo date("l, d-M-Y");
    echo "<br>";
    // detik yang berlalu sejak 1 januari 1970
    // disebut "epoch time"
    echo time();
    echo "<br>";
    echo date('l jS \of F Y h:i:s A');
    echo "<br>";
    echo date (DATE_RFC2822);
    echo "<br>";
    function writeMsg(){
        echo "Hello World";
    }

    writeMsg();
    echo "<br>";
    echo date ("l", time()+(60*60*24*3));
    echo "<br>";
    function loke( $name, $waktu ){
        return "Hallo Selamat $waktu $name";
    }
    $name  ;
    function jumlah($pertama, $kedua){
        $hasil = $pertama + $kedua;
        return $hasil;
    }
    $a = jumlah(6,9);
    $result = $a + 40;
    echo $result;
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <h1><?= loke ("lubna", "pagi") ?></h1>
 </body>
 </html>