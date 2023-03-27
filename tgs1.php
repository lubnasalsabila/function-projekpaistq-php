<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <style>
      body{
         background-color: #cdba96;
      }
      h1{
         text-align: center;
         font-family: monospace; 
         background-color: #cd6839;
         border-radius: 25px;
         margin-left: 150px;
         margin-right: 150px;
         font-size: 50px;
      }
      h2{
         text-align: center;
         font-family: monospace; 
         background-color: #cd6839;
         border-radius: 25px;
         margin-left: 350px;
         margin-right: 350px;
         font-size: 30px;
      }
   </style>
   <h1>Data-data Siswa</h1>
<?php
   echo "<center>";
 function biodata1($nis, $nama, $rayon, $rombel){
    echo "1. ";
    echo "Nis: $nis";
    echo "<br>";
    echo "Nama: $nama";
    echo "<br>";
    echo "Rayon: $rayon";
    echo "<br>";
    echo "Rombel: $rombel";
    echo "<br>";
 }
 biodata1("12209428", "lubna", "Cisarua 4", "PPLG X-4");
 echo "<hr>";
 function biodata2($nis, $nama, $rayon, $rombel){
    echo "2. ";
    echo "Nis: $nis";
    echo "<br>";
    echo "Nama: $nama";
    echo "<br>";
    echo "Rayon: $rayon";
    echo "<br>";
    echo "Rombel: $rombel";
    echo "<br>";
 }
 biodata2("12208940", "Bergisch", "Sukasari 2", "PPLG X-4");
 echo "<hr>";
 function biodata3($nis, $nama, $rayon, $rombel){
    echo "3. ";
    echo "Nis: $nis";
    echo "<br>";
    echo "Nama: $nama";
    echo "<br>";
    echo "Rayon: $rayon";
    echo "<br>";
    echo "Rombel: $rombel";
    echo "<br>";
 }
 biodata3("12209358", "Reni", "Cicurug 3", "PPLG X-4");
 echo "<hr>";
 echo "</center>";
 ?>
   <h2>Menghitung luas bangun datar</h2>
<?php
   echo "<center>";
 function persegi($sisi1, $sisi2){
   $a=$sisi1;
   $b=$sisi2;
   $hsl= $a*$b;
   return $hsl;
 }
 $hsl= persegi(8, 8);
 echo "Luas Persegi dengan sisi 8cm adalah $hsl";
 echo "<br><br>";
 

 function segitiga($satu, $dua, $tiga){
   $s=$satu;
   $d=$dua;
   $t=$tiga;
   $hasl= $s*$d*$t;
   return $hasl;
 }
 $hasl= segitiga(1/2, 4, 6);
 echo "Luas segitiga dengan alas 4cm dan tinggi 6cm adalah $hasl";
 echo "<br><br>";


 function lingkaran($II, $jari, $lkn){
   $v=$II;
   $r=$jari;
   $rr=$lkn;
   $hasil= $v*$r*$rr;
   return $hasil;
 }
 $hasil= lingkaran(22/7, 14, 14);
 echo "luas lingkaran dengan v=22/7 dan jari-jari 14cm adalah $hasil";
 echo "<br><br>";
 
 echo "</center>";
 echo "<hr>";

?>
 </body>
</html>