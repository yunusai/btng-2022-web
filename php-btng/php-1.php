<?php
//Berbagai Tipe Data dan Hello World Hi Hi
printf("Hi Hi\n");

echo "Hello world!\n".PHP_EOL;//Bisa menggunakan sequence command seperti \n dan \t, dan tidak bisa memanggil variabel
echo 'Hello world!';//tidak bisa menggunakan sequence command
echo "\n";
echo 1_000_000;//Underscore tidak akan di run/terouput
echo "\n";
var_dump(4);//Fungsinya menyatakan tipe variabel
var_dump(5.5);
var_dump(true);//boolean
echo "\n";
echo "\n";

//Variabel
$name = "Holland";
$age = 32;

echo "Name: $name\n" . PHP_EOL;
echo "<br>";//Perintah enter untuk localhost
echo "Age: $age";
echo "\n";
echo "\n";

//Constant Variable
define("AUTHOR", "Muhammad Yunus Saifullah");
define("APP_VERSION", 100);

echo AUTHOR;
echo "<br>";
echo APP_VERSION;
echo "\n";
echo "\n";

//Data NULL
$name = null;//Case Insensitive
$age = null;

echo $name;
echo $age;
echo "\n";
echo "\n";

//Cek Data NULL
var_dump(is_null($name));

$age = 5.5;
var_dump(is_null($age));
echo "\n";
echo "\n";

//Operator Aritmatika
$result = 10 + 10;
var_dump($result);

$result = 10 - 10;
var_dump($result);

$result = 10 * 10;
var_dump($result);

$result = 10 / 10;
var_dump($result);

$result = 10 % 10;
var_dump($result);

$result = 10 ** 10;
var_dump($result);

$result = 1010 ** 4 % 3;
var_dump($result);

$angka1 = 3;
$angka2 = 4;
$angka3 = 5;
$angka4 = 6;
$angka5 = 7;
$angka6 = 8;
$angka7 = 9;
echo "3 + 4 - 5 x 6 : 7 % 8 ^ 9 = ";
echo $angka1 + $angka2 - $angka3 * $angka4 / $angka5 % $angka6 ** $angka7;
echo "\n";

echo "3 + 4 - 5 x 6 : 7 % 8 ^ 9 = ";
echo 3 + 4 - 5 * 6 / 7 % 8 ** 9;
echo "\n";
echo "\n";
//Operator Perbandingan
var_dump(3 == 4);
var_dump(4 == "4");//Nilai harus sama, tapi tipe data boleh beda
var_dump(10 === "10");//identik, harus sama semua, tipe data dan nilai
var_dump(10 === 10);
var_dump(10 >= 10);
echo "\n";
echo "\n";

//Operator Logika
var_dump(3 or 4);
var_dump(3 || 4);
var_dump(3 and 4);
var_dump(3 && 4);
var_dump(3 xor 4);
var_dump(!4);
echo "\n";
echo "\n";

//Increment Decrement
echo $angka1++;


//Hanya digunakan jika dalam satu file tidak semua adalah PHP
//tidak wajib->?>