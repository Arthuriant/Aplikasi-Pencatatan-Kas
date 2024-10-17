<?php
include 'class_kas.php';
include('../../../koneksi.php');
$kas = new Kas ($conn);
$kas->updateKas($_POST['id_anggota'],$_POST['nama_anggota'],$_POST['week1'],
$_POST['week2'],$_POST['week3'],$_POST['week4']);

?>