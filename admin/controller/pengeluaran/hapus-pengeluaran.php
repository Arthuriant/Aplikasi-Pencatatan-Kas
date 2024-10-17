

<?php
include 'class.pengeluaran.php';
//include koneksi database
include('../../../koneksi.php');

//query insert data ke dalam database
$pengeluaran = new Pengeluaran($conn);
$pengeluaran->hapuspengeluaran($_GET['id']);

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak


?>

