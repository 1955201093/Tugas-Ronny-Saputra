<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cari Data Kendaraan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Cari Data Kendaraan</h2>
  <form method="post">
	<div class="form-group">
      <label for="namakendaraandicari">
      Nama Kendaraan :</label>
      <input type="text" class="form-control" id="namakendaraandicari" placeholder="Nama Kendaraan" name="namakendaraandicari">
    </div>
    <button type="submit" class="btn btn-primary" name="bCari">Cari Kendaraan</button>
  </form>
</div>
</body>
</html>
<?php 
if (isset($_POST['bCari'])) {
	$namakendaraandicari=$_POST['namakendaraandicari'];
	$koneksi=new mysqli("localhost","root","","dbshowroom");
	$sql="SELECT * FROM `tbmobil` WHERE `namakendaraan` LIKE '%".$namakendaraandicari."%'";
	$q=$koneksi->query($sql);
$namakendaraandicari=$q->fetch_array();
include("daftarkendaraan.php");
} 

?>
