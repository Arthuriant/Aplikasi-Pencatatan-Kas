
<?php
include 'class.pengeluaran.php';
//include koneksi database
include('../../../koneksi.php');

//query insert data ke dalam database
$pengeluaran = new Pengeluaran ($conn);
$pengeluaran->tambahpengeluaran($_POST['id_pengeluaran'],$_POST['tanggal'],$_POST['keterangan'],$_POST['catatan'],$_POST['jumlah']);

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak


?>
