<?php 

$koneksi = mysqli_connect("localhost", "root", "", "sekolah");

function tampil_data($query) {
	global $koneksi;

	$results = mysqli_query($koneksi, $query);
	$rows = [];

	while ($row = mysqli_fetch_assoc($results)) {
		# code...
		$rows[] = $row;
	}

	return $rows;

}



 ?>