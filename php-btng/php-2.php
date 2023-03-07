<?php
echo "For\n<br>";
//Loop, Logikanya Mirip C++
//For, penggunaan untuk masalah yang menggunakan kondisi sebagai batas, dari coba coba, hanya bisa digunakan untuk sebuah sesuatu yang berurutan
//Increment (i++)
for ($i = 1; $i <= 10; $i++) {
    echo $i . "\t";
}

echo PHP_EOL;
echo "<br><br>";
echo "\n";

//Decrement (i--)
for ($i = 10; $i >= 1; $i--) {
    echo $i . "\t";
}

echo PHP_EOL;
echo "<br><br>";
echo "\n";

//Coba-coba for
for ($variable = 0; $variable <= 50; $variable += 5) {
    echo $variable . " ";
}

echo PHP_EOL;
echo "<br><br>";
echo "\n";

echo "While\n<br>";
$a = 0;

//While
while ($a <= 50) {
    echo $a . " ";
    $a += 5;
}

echo PHP_EOL;
echo "<br><br>";
echo "\n";

echo "Do-While\n<br>";
//Do-While
$a = 2;

do {
    echo $a . " ";
    $a += 2;
} while ($a <= 10);

echo PHP_EOL;
echo "<br><br>";
echo "\n";

echo "Break\n<br>";
//Break
while (true) {
    echo $a . " ";
    if ($a >= 30) {
        echo "Break. Selesai.<br>\n";
        break;
    }
    $a += 5;
}

echo PHP_EOL;
echo "<br>";
echo "\n";

echo "Continue<br>\n";
//Continue
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    echo "Hello Output: $i";
    echo "<br>\n";
}

echo PHP_EOL;
echo "<br>";
echo "\n";

echo "Break-Continue Mix\n<br>";
//Break-Continue Mix
while (true) {
    echo $a . " ";
    if ($a <= 30) {
        echo "Continue <br>\n";
        $a += 5;
        continue;
    } else {

        echo "Break. Selesai.<br>\n";
        break;
    }
}

echo PHP_EOL;
echo "<br>";
echo "\n";

echo "For each Loop (Database)<br>\n";
//For each Loop (Database)
//Berguna untuk menampilkan segala data yang ada di dalam sebuah variable atau array
$kelas = array("web1", "web2", "web3", "web4", "web5", "web6");

//($kelas as $kelasWeb) adalah melakukan ekstrak dari array $kelas kedalam variabel $kelasWeb
foreach ($kelas as $kelasWeb) {
    echo "$kelasWeb <br>\n";
}

echo PHP_EOL;
echo "<br>";
echo "\n";

echo "Key dan Value foreach loop<br>\n";
//Key dan Value foreach loop

$person = [
    "firstName" => "Muhammad",
    "middleName" => "Yunus",
    "lastName" => "Saifullah",
    "birthplace" => "Pati",
    "age" => 20,
    "address" => "Semarang",
];

foreach ($person as $key => $value) {
    echo "$key : $value";
    echo "<br>\n";
}

echo PHP_EOL;
echo "<br>";
echo "\n";

echo "If Statement<br>\n";
//If Statement
$nilai = 100;

if ($nilai > 90) {
    echo "Nilai A Anda Lulus Predikat Baik";
} else if ($nilai > 80 && $nilai <= 90) {
    echo "Nilai B Anda Lulus";
} else if ($nilai > 70 && $nilai <= 80) {
    echo "Nilai C Anda Remidi";
} else if ($nilai > 60 && $nilai <= 70) {
    echo "Nilai D Anda Terancam Tidak Lulus";
} else {
    echo "Nilai E Anda Tidak Lulus";
}

echo PHP_EOL;
echo "<br><br>";
echo "\n";

echo "Switch Statement<br>\n";
//Switch Statement, hanya untuk perbandingan ==(equal)
$nilai = "A";

switch ($nilai) {
    case 'A':
        echo "Anda Lulus dengan Sangat Baik";
        break;
    case 'B':
        echo "Anda Lulus dengan Baik";
        break;
    case 'C':
        echo "Anda Lulus";
        break;
    default:
        echo "Anda Tidak Lulus";
        break;
}


echo PHP_EOL;
echo "<br><br>";
echo "\n";

echo "Ternary Operator<br>\n";
//Ternary Operator, hanya ada dua pilihan yaitu True atau False
//Coba sendiri

echo PHP_EOL;
echo "<br><br>";
echo "\n";

echo "Array<br>\n";
//Array

$array1 = array(1, 2, 3, 4);
var_dump($array1);

echo "<br><br>";

$array2 = [5, 6, 7, 8, 9];
var_dump($array2);
echo "<br>";
var_dump($array2[3]); //Yang ditulis adalah key nya, dan akan ditampilkan value nya

echo PHP_EOL;
echo "<br><br>";
echo "\n";

echo "Operasi Array<br>\n";
//Operasi Array
echo count($array2);
