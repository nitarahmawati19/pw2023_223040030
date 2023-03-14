<?php
// ARRAY
// Membuat Array
$hari = array('Senin', 'Selasa', 'Rabu');
$bulan = ['Januari', 'Februari', 'Maret'];
$myArray = ['Nita', 19, false];
$binatang = ['🐈', '🐇', '🐒', '🐨', '🐄'];

// Mencetak Array
// var_dump dan print_r digunakan untuk debugging
echo $hari[1]; //1 lemen menggunakan indexnya
echo "<hr>";
var_dump($hari);
echo "<hr>";
print_r($bulan);
echo "<hr>";
var_dump($myArray);
echo "<hr>";

// Manipulasi Array
// Menambah elemen di akhir menggunakan index (tidak bisa menambahkan lebih dari 1 nilai sekaligus)
$hari[] = 'Kamis';
print_r($hari);
echo "<hr>";

// menambahkan elemen di akhir menggunakan array_push()
array_push($bulan, 'April', 'Mei', 'Juni');
print_r($bulan);
echo "<hr>";

// menambahkan elemen di akhir menggunakan array_unshift()
array_unshift($binatang);
print_r($binatang);
echo "<hr>";

// menghapus elemen di akhir, menggunakan array_pop{}
array_pop($hari);
print_r($hari);
echo "<hr>";
// menghapus elemen di awal, menggunakan array_shift()
array_shift($hari);
print_r($hari);
