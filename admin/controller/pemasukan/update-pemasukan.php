
<?php
include 'class.pemasukan.php';
//include koneksi database
include('../../../koneksi.php');

//query insert data ke dalam database
$pemasukan = new Pemasukan ($conn);
$pemasukan->updatemasukan($_POST['id_pemasukan'],$_POST['tanggal'],$_POST['keterangan'],$_POST['catatan'],$_POST['jumlah']);

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak


?>
