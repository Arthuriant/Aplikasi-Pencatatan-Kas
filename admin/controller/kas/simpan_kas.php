
<?php
include 'class_kas.php';
include('../../../koneksi.php');
$kas = new Kas ($conn);
$kas->tambahKas($_POST['nama_anggota1']);
?>