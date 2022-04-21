<?php
include "database.php";
$db = new database();
?>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
    <h1>CRUD OOP</h1>
    <h2>WWW.MALASNGODING.COM</h2>
    <h3>Data User</h3>
    
    <a href="input.php">Input Data</a> <br> <hr>
<a href="up_foto.php">Upload Data + FOTO</a><hr>
<table border="1px">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Usia</th>
        <th>Opsi</th>
    </tr>
    <?php
        $no = 1;
        foreach ($db->tampil_data() as $x ) {
            ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $x['nama'];?></td>
        <td><?= $x['alamat'];?></td>
        <td><?= $x['usia'];?></td>
        <td>
            <a href="edit.php?id=<?= $x['id']; ?>&aksi=edit">Edit</a>
            <a href="proses.php?id=<?= $x['id'];?>&aksi=hapus">Hapus</a>
        </td>
    </tr>
    <?php 
        }
        ?>
</table>

<!-- Tabel Baru -->
<table class="table table-bordered">
    <tr>
        <th width="20%">Nama</th>
        <th width="20%">Kontak</th>
        <th width="40%">Alamat</th>
        <th width="20%">Foto</th>
    </tr>
    <?php 
    $data = mysqli_query($db->conn,"SELECT * FROM user_foto");
    while ($d = mysqli_fetch_array($data)) {
    ?>
    <tr>
        <td>  <?= $d['user_nama'] ?>  </td>
        <td>  <?= $d['user_kontak'] ?>  </td>
        <td>  <?= $d['user_alamat'] ?>  </td>
        <td><img src="gambar/<?= $d['user_foto'];?>" width="35" height="40"></td>
    </tr>
    <?php    
    }
    ?>
</table>
    
</body> 