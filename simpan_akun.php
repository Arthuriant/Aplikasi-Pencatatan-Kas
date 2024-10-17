<?php

include('koneksi.php');

//get data dari form
$nama     = $_POST['nama'];
$role     = $_POST['role'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO users (nama, role, username, password) VALUES ('$nama', '$role', '$username','$password')";

if($conn->query($query)) {

    header("location: login.php");

} else {
    echo "Data Gagal Disimpan!";

}

?>