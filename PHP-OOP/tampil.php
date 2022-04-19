<?php
include "database.php";
$db = new database();
?>
<h1>CRUD OOP</h1>
<h2>WWW.MALASNGODING.COM</h2>
<h3>Data User</h3>

<a href="input.php">Input Data</a>
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
