<?php
include 'class_kas.php';
include('../../../koneksi.php');

//get id

$kas = new Kas ($conn);
$kas->hapusKas($_GET['id']);
?>