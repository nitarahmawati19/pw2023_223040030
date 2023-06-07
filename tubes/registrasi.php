<?php
require 'functions.php';
if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('user baru berhasil ditambahkan');
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/registrasi.css">
</head>

<body>
    <div class="container">
        <h3 class="display-3 text-center py-5">REGISTRASI</h3>
        <section>
            <form action="" method="post">
                <!-- username -->
                <div class=" row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="username" class="col-form-label">Username</label>
                    </div>
                    <div class="col-md-3">
                        <input type="username" name="username" id="username" class="form-control" aria-labelledby="passwordHelpInline">
                    </div>
                </div>

                <!-- password -->
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="password" class="col-form-label">Password</label>
                    </div>
                    <div class="col-md-3">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Must be 8-20 characters long.">
                    </div>
                </div>
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="password2" class="col-form-label">Konfirmasi Password</label>
                    </div>
                    <div class="col-md-3">
                        <input type="password" name="password2" id="password2" class="form-control" placeholder="Must be 8-20 characters long.">
                    </div>
                </div>
                <button class="btn btn-primary" type="submit" name="register">Daftar</button>
                <div class="registrasi mb-3 mt-2">
                    <p>Sudah punya akun? <a href="login.php" class="text-decoration-none">Masuk.</a></p>
                </div>
            </form>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>