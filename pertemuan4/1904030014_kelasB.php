<!DOCTYPE html>
<html>
<head>
    <title>Pertemuan 4</title>
</head>
<body>
    <h1>Membuat Array</h1>
    <?php 
    $values =  array(6,10,20,20.5);
    var_dump($values);
    echo"<br>";
    echo($values[2]);

    echo"<br>";
    echo"<br>";

    $prodi = ["Meteorologi","Oseanografi","T. Geodesi","T. Geologi"];
    var_dump($prodi);
    echo"<br>";
    echo "$prodi[3]";
    echo"<br>";
    echo"<br>";
    
    // mengganti isi value
    $prodi[0] = "Astronomi";
    var_dump($prodi);
    echo"<br>";
    echo"<br>";

    // menambahkan value
     $prodi[] = "Aktuaria";
     var_dump($prodi);
    echo"<br>";
    echo"<br>";

    //menghapus salah satu value
    unset($prodi[0]);
    var_dump($prodi);
    echo"<br>";

    // menghitung total array
    echo"<br>";
    var_dump(count($prodi));
    
    ?>

<hr>
    <h1>Map dengan array</h1>
    <?php 
    
$caka = array(
    "id" => "caca",
    "nama" => "caka ardiansyah",
    "umur" => 26
    );
var_dump($caka);
echo"<br>";
echo"<br>";

$rega = [
    "id" => "rega",
    "nama" => "Abrega Astaro",
    "umur" => 23,
    "alamat" => [
        "kota" => "Tangerang",
        "provinsi" => "Banten"
    ]
    ];
var_dump($rega);
echo"<br>";
echo("nama id : " . $rega["id"]);
echo"<br>";
echo("nama lengkap : " . $rega["nama"]);
echo"<br>";
echo("umur : " . $rega["umur"]);

    ?>

<hr>
<h1>Operator Aritmatika</h1>
<?php
$tambah = 26+37;
$kurang = 100-60;
$kali = 5*10;
$bagi = 100/6;
$modular = 10%5;
$pangkat = 7**9;
echo "tambah : " . $tambah . "<br>";
echo "kurang : " . $kurang . "<br>";
echo "kali : " . $kali . "<br>";
echo "bagi : " . $bagi . "<br>";
echo "modular : " . $modular . "<br>";
echo "pangkat : " . $pangkat . "<br>";

?>

<hr>
<h2>increment</h2>
<?php
$a = 35;
$a++;
$a--;
echo($a);

?>

</body>
</html>