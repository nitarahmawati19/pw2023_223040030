<?php
// session_start();

// if (!isset($_SESSION["login"])) {
//     header("Location: login.php");
//     exit;
// }

require('functions.php');

$name = 'Ubah Data Produk';
$id = $_GET['id'];
$produk = query("SELECT * FROM produk WHERE id_produk = $id")[0];

if (isset($_POST["ubah"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
        
        alert('Data berhasil diubah!');
        document.location.href = 'admin.php';
        
        </script>";
    }
}



require('views/ubah.view.php');
