<?php 

require "config/functions.php";


if(isset($_POST["btn_cari"])) {

  $keyword = $_POST["keyword"];
  $query = "SELECT * FROM tbl_sekolah where nama_sekolah LIKE '%$keyword%' OR alamat LIKE '%$keyword%' ";

  $sekolah = tampil_data($query);
} else {
  $sekolah = tampil_data("SELECT * from tbl_sekolah"); 
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Nama sekolah</title>
	<link rel="stylesheet" type="text/css" href="style/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-right" action="" method="post" role="search">
        <div class="form-group">
          <input type="text" class="form-control" name="keyword" placeholder="Search" required>
        </div>
        <button type="submit" name="btn_cari" class="btn btn-default">Submit</button>
      </form>	
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- main body -->
<div class="container">
<div class="row">
<?php foreach($sekolah as $data) : ?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/<?php echo $data["image"]; ?>" alt="...">
      <div class="caption">
        <h3><?php echo $data["nama_sekolah"]; ?></h3>
        <p><?php echo $data["alamat"]; ?></p>
        <p><a href="halaman-sekolah.php?id=<?= $data["id_sekolah"]; ?>" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
<?php endforeach ; ?>
</div>
<!-- end body -->

<script type="text/javascript" src="style/js/jquery.min.js"></script>
<script type="text/javascript" src="style/js/customize.min.js"></script>
<script type="text/javascript" src="style/js/docs.min.js"></script>
<script type="text/javascript" src="style/js/ie-emulation-modes-warning.js"></script>
<script type="text/javascript" src="style/js/bootstrap.min.js"></script>
</body>
</html>