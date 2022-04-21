<?php 
include "database.php";
$db = new database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Foto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 style="text-align:center;">
        Tambah Data Pegawai
        </h2>
        <form action="proses.php?aksi=foto" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" placeholder="Masukan Nama Disini" required>
            </div>
            <div class="form-group">
                <label for="kontak">Kontak :</label>
                <input type="number" name="kontak" id="kontak" placeholder="Masukan Kontak Disini" required> 
            </div>
            <div class="form-group">
                <label for="alamat">Alamat :</label>
                <textarea name="alamat" id="alamat" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="foto">Foto :</label>
                <input type="file" name="foto" id="foto" required>
                <p style="color:red;">Ekstensi Yang Diperbolehkan Hanya .png | .jpg | .jpeg | .gif</p>
            </div>
            <input type="submit" value="Simpan" class="btn-primary">
        </form>
    </div>
</body>
</html>