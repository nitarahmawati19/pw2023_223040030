<?php
require 'functions.php';

$produk = query("SELECT * FROM produk");

//tombol cari ditekan
if (isset($_POST["cari"])) {
    $produk = cari($_POST["keyword"]);
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <h2 class="display-3 text-center py-5">Selamat Datang Admin</h2>


        <form class="d-flex pt-4" action="" method="POST">
            <input class="form-control me-2 keyword" type="text" name="keyword" placeholder="Search.." id="keyword" autofocus autocomplete="off">
            <button class="btn btn-outline-danger tombol-cari" name="cari" type="submit" autocomplete="off" id="tombol-cari">Search</button>
        </form>

        <br>
        <a href="tambah.php" class="btn btn-primary my-5">Tambah data produk</a>

        <div id="container">
            <?php if ($produk) : ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Gambar</th>
                            <th scope="col"></th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Link</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($produk as $prd) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td>
                                    <img src="img/catalog/<?= $prd['gambar']; ?>" width="50">
                                </td>
                                <td><?= $prd['gambar']; ?></td>
                                <td><?= $prd['nama_produk']; ?></td>
                                <td><?= $prd['link']; ?></td>
                                <td>
                                    <a href="ubah.php?id=<?= $prd['id_produk']; ?>" class="badge text-bg-warning">ubah</a>
                                    <a href="hapus.php?id=<?= $prd['id_produk']; ?>" class="badge text-bg-danger" onclick="return confirm('YAKIN?')">hapus</a>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-danger" role="alert">
                            Produk tidak tersedia.
                        </div>
                    </div>
                <?php endif; ?>
                </div>


        </div>

        <script src="../js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>