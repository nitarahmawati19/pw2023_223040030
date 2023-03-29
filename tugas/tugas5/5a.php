<?php
$mahasiswa = [
    [
        "nama"      => "Nita Rahmawati",
        "nrp"       => 223040030,
        "jurusan"   => "Teknik Informatika",
        "email"     => "nita.223040030@mail.unpas.ac.id",
        "gambar"    => "1.jpg"
    ],
    [
        "nama"      => "Indri Tania Lestari",
        "nrp"       => 223040009,
        "jurusan"   => "Teknik Informatika",
        "email"     => "indri.223040009@mail.unpas.ac.id",
        "gambar"    => "2.jpg"
    ],
    [
        "nama"      => "Gina Meirina",
        "nrp"       => 223040006,
        "jurusan"   => "Teknik Informatika",
        "email"     => "gina.223040006@mail.unpas.ac.id",
        "gambar"    => "3.jpg"
    ],
    [
        "nama"      => "Revalian Ananda Taufan",
        "nrp"       => 223040012,
        "jurusan"   => "Teknik Informatika",
        "email"     => "revalian.223040012@mail.unpas.ac.id",
        "gambar"    => "4.jpg"
    ],
    [
        "nama"      => "Davina Putri Kusuma",
        "nrp"       => 2230400016,
        "jurusan"   => "Teknik Informatika",
        "email"     => "davina.223040016@mail.unpas.ac.id",
        "gambar"    => "5.png"
    ],
    [
        "nama"      => "Ali Imran Rodja",
        "nrp"       => 223040003,
        "jurusan"   => "Teknik Informatika",
        "email"     => "ali.223040003@mail.unpas.ac.id",
        "gambar"    => "6.jpg"
    ],
    [
        "nama"      => "Akbar Nur Iman",
        "nrp"       => 223040028,
        "jurusan"   => "Teknik Informatika",
        "email"     => "akbar.223040028@mail.unpas.ac.id",
        "gambar"    => "7.jpg"
    ],
    [
        "nama"      => "Ahmad Mulia Huda",
        "nrp"       => 223040029,
        "jurusan"   => "Teknik Informatika",
        "email"     => "ahmad.223040029@mail.unpas.ac.id",
        "gambar"    => "8.jpg"
    ],
    [
        "nama"      => "Novan Ramdan",
        "nrp"       => 223040031,
        "jurusan"   => "Teknik Informatika",
        "email"     => "novan.223040031@mail.unpas.ac.id",
        "gambar"    => "9.jpg"
    ],
    [
        "nama"      => "Bintang Arya Putra Yusar",
        "nrp"       => 223040032,
        "jurusan"   => "Teknik Informatika",
        "email"     => "bintang.223040032@mail.unpas.ac.id",
        "gambar"    => "10.jpg"
    ],
]
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <img src="img/<?= $mhs["gambar"]; ?>">
            <li>Nama :<?= $mhs["nama"]; ?></li>
            <li>NRP :<?= $mhs["nrp"]; ?></li>
            <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
            <li>Email :<?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>