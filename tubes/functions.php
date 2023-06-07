<?php
define('BASE_URL', '/pw2023_223040030/tubes/');

// function koneksi()
// {
// }
$conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040030_tubes') or die('KONEKSI GAGAL');
return $conn;

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama_produk"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $link = htmlspecialchars($data["link"]);

    $query = "INSERT INTO produk VALUES (null, '$nama', '$gambar', '$link')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    $query = "DELETE FROM produk WHERE id_produk = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = $data["id_produk"];
    $nama = htmlspecialchars($data["nama_produk"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $link = htmlspecialchars($data["link"]);


    $query = "UPDATE produk SET
              nama_produk = '$nama',
              gambar = '$gambar',
              link = '$link'
            WHERE 
              id_produk = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM produk
              WHERE
              nama_produk LIKE '%$keyword%'
              ";

    return query($query);
}

function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
          alert('username sudah terdaftar!');
        </script>";

        return false;
    }

    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
          alert('konfirmasi password tidak sesuai!');
      </script>";

        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);


    //tambahkan data baru ke db
    mysqli_query($conn, "INSERT INTO user VALUES(null, '$username', '$password')");

    return mysqli_affected_rows($conn);
}
