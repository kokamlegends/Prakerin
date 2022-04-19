<?php
include "database.php";
$db = new database();

$aksi = $_GET['aksi'];

if ($aksi == "tambah") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $usia = $_POST['usia'];
    $db->input($nama,$alamat,$usia);

}elseif ($aksi == "hapus") {
    $db->hapus($_GET['id']);
    header("location:tampil.php");
}elseif ($aksi == "update") {
    $db->update($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['usia']);
    header("location:tampil.php");
}
else{
    echo "<h1 text-align='center'>Halaman Tidak ditemukan !<h1><br><hr>";
}