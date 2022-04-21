<?php
include 'database.php';
$db = new database();
?>

<h1>CRUD OOP PHP</h1>
<h2>WWW.MALASNGODING.COM</h2>
<h3>Edit Data User</h3>

<form action="proses.php?aksi=update" method="post">
    <?php 
        foreach ($db->edit($_GET['id']) as $d) {
    ?>
    <table>
        <tr>
            <td>Nama</td>
            <td>
                <input type="hidden" name="id" value="<?= $d['id']?>">
                <input type="text" name="nama" value="<?= $d['nama']?>">
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?= $d['alamat']?>" ></td>
        </tr>
        <tr>
            <td>Usia</td>
            <td><input type="text" name="usia" value="<?= $d['usia']?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
    <?php } ?>
</form>