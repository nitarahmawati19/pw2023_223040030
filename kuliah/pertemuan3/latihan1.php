<?php
// Pengulangan While
// 1. Inisialisasi / Niat Awal
// 2. Kondisi Terminasi / Kapan pengulangannya berhenti
// 3. Increment / Decrement

$nilai_awal = 1; // inisialisasi
while ($nilai_awal <= 10) { // kondisi terminasi
    echo $nilai_awal;
    echo "<br>";
    $nilai_awal = $nilai_awal + 2;
    echo "<hr>";
}
// for
for ($nilai_awal = 1; $nilai_awal <= 10; $nilai_awal++) {
    echo "Hello World $nilai_awal x<br>";
}
