<?php 

require "functions.php";

$username = $_POST["username"];
$password = $_POST["password"];


if(!empty($username) && !empty($password)) {
	
	$query = mysqli_query($koneksi, "SELECT * FROM tbl_admin where username='$username' AND password='$password' ");
	$result = mysqli_num_rows($query);

	if($result) {
		echo "Anda berhasil login";
		header("Location: ../admin/index.php");
	} else {
		echo "Username atau password anda salah";
	}

} else {
	echo "Username atau password anda kosong";
}

 ?>