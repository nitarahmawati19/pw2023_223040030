<?php
require 'functions.php';
$id = $_GET['id_produk'];
if (hapus($id) > 0) {
    echo "<script>
    
            alert('Data berhasil dihapus!');
            document.location.href = 'admin.php';

        </script>";
}
