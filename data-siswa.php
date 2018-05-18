<?php 

require "config/functions.php";

$id = $_GET["id"];

$siswa = tampil_data("SELECT * FROM tbl_siswa WHERE id_sekolah ='$id'");
$sekolah = tampil_data("SELECT * FROM tbl_sekolah WHERE id_sekolah ='$id'");

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
<?php foreach ($sekolah as $sklh) : ?>
  <title>Carousel Template for Bootstrap</title>
  <link href="style/css/bootstrap.min.css" rel="stylesheet">
  <script src="style/js/ie10-viewport-bug-workaround.js"></script>
  <link rel="stylesheet" type="text/css" href="style/css/dashboard.css">
</head>
<!-- NAVBAR
================================================== -->
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  <a class="navbar-brand" href="#">Daftar Siswa <?= $sklh["nama_sekolah"]; ?></a>
  </div>
  <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Dashboard</a></li>
      <li><a href="#">Settings</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Help</a></li>
    </ul>
	    <form class="navbar-form navbar-right">
	        <input type="text" class="form-control" placeholder="Search...">
	    </form>
	  </div>
	</div>
</div>
<?php endforeach ; ?>
<div class="container">
<h2 class="sub-header">Section title</h2>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nis</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Tempat tanggal lahir</th>
          <th>Pendidikan</th>
          <th>Alamat</th>
          <th>No telpon</th>
          <th>Email</th>
          <th>Jurusan</th>
        	<th>View</th>
        </tr>
      </thead>
    <?php $i= 1; ?>
    <?php foreach($siswa as $data) : ?>  	
      <tbody>
        <tr>
          <td><?php echo $i; ?></td>
          <td><?= $data["nis"]; ?></td>
          <td><?= $data["nama"]; ?></td>
          <td><?= $data["jenis_kelamin"]; ?></td>
          <td><?= $data["tempat_lahir"]; ?>, <?= $data["tanggal_lahir"]; ?></td>
          <td><?= $data["pendidikan"]; ?></td>
          <td><?= $data["alamat"]; ?></td>
          <td><?= $data["no_telp"]; ?></td>
          <td><?= $data["email"]; ?></td>
          <td><?= $data["jurusan_id"]; ?></td>
        	<td><a href="profile-siswa.php" class="btn btn-default">View</a></td>
        </tr>
      </tbody>
     <?php $i++; ?>
     <?php endforeach ; ?>
	    </table>
		  </div>
		  </div>
		</div>
	</div>
</div>
<script src="style/js/jquery.min.js"></script>
<script src="style/js/bootstrap.min.js"></script>
<script src="style/js/docs.min.js"></script>
<script type="text/javascript">
</script>
</body>
</html>
	