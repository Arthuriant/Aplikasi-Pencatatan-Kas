

<?php
include 'class.pemasukan.php';
//include koneksi database
include('../../../koneksi.php');

//query insert data ke dalam database
$pemasukan = new Pemasukan ($conn);
$pemasukan->hapusmasukan($_GET['id']);

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak


?>

