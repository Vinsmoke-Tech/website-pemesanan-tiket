<?php
    $host   = "localhost";
    $user   = "root";
    $pass   = "";
    $dbname = "tiket";

    $koneksi    =   mysqli_connect($host,$user,$pass,$dbname);

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
} 
        

?>