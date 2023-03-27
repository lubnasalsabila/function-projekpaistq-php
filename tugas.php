<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            background-color: #eea990 ;
            text-align: center;
            padding-top: 100px;
            font-size: 30px;
        }
        h1{
            background-color: #aa6f73;
            border-radius:25px;
            margin-left: 250px;
            margin-right:250px;
            font-family: Cursive;
        }
    </style>
    <h1><?= roje ("Pagi", "Lubna")?></h1>
</body>
</html>
    <?php
        function roje($wkt, $nm){
            return "Hallo, Selamat $wkt $nm !!";
        }
        $nm ;
        echo "<br><br>";
        function gnp($pertama, $kedua){
            $hasil = $pertama + $kedua;
            return $hasil;
        }
        $a = gnp(18, 12);
        $result = $a + 10;
        echo $result;
        if($result % 2 == 0){
            echo " Hasil dari penjumlahan nya adalah genap ";
        }else{
            echo " Hasil dari penjumlahan nya adalah ganjil ";
        }
        echo "<br><br>";
        echo "Hari ini adalah hari: Rabu / ";
        echo date("l");
        echo "<br><br>";
        echo "6 hari kedepan adalah hari: Kamis / ";
        echo date ("l", time()+(60*60*24*6));

    ?>

