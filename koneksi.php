<?php

//deklasrasi variabel
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "kas";    

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if($conn) {
    echo " ";
} else {
    echo " ". mysqli_connect_error();
}

?>