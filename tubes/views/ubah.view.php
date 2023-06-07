<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <h1>Ubah Data Produk</h1>

        <div class="row">
            <div class="col-md-8">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $produk['id_produk']; ?>">
                    <div class="mb-3 w-25">
                        <label for="nama" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" name="nama" id="nama" maxlength="9" autofocus required value="<?= $produk['nama_produk']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Link</label>
                        <input type="text" class="form-control" name="link" id="link" value="<?= $produk['link']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="text" class="form-control" name="gambar" id="gambar" value="<?= $produk['gambar']; ?>">
                    </div>
                    <button class="btn btn-warning" type="submit" name="ubah">Ubah Data</button>
                </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>