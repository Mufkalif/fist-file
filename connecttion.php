<?php 

$koneksi = mysqli_connect("localhost", "admin", "" ,"sekolah");

if(!$koneksi) {
	echo "Gagal Connect";
} else {
	echo "Berhasil connect";
}


 ?>