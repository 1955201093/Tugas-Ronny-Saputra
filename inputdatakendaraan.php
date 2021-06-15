<!DOCTYPE html>
<html lang="en">
<head>
  <title>inputdatakendaraan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Input Data Kendaraan</h2>
  <form method="post">
    <div class="form-group">
      <label for="nomesinkendaraan">Nomor Mesin Kendaraan</label>
      <input type="text" class="form-control" id="nomesinkendaraan" placeholder=" Nomor Mesin Kendaraan" name="nomesinkendaraan">
    </div>
	<div class="form-group">
      <label for="norangkakendaraan">Nomor Rangka Kendaraan:</label>
      <input type="text" class="form-control" id="norangkakendaraan" placeholder="Nomor Rangka Kendaraan" name="norangkakendaraan">
    </div>
    <div class="form-group">
      <label for="jeniskendaraan">Jenis Kendaraan Yang Terdiri Dari(Sepeda Motor,Mobil,Sedan,Bus,Truk):</label>
      <input type="text" class="form-control" id="jeniskendaraan" placeholder="Jenis Kendaraan Yang Terdiri Dari(Sepeda Motor,Mobil,Sedan,Bus,Truk)" name="jeniskendaraan">
    </div>
    <div class="form-group">
     <label for="namakendaraan">Nama Kendaraaan:</label>
     <input type="text"  class="form-control 
     "id="namakendaraan" placeholder="Nama Kendaraan" name="namakendaraan">
   </div>
   <div class="form-group">
      <label for="tanggalbuat">Tanggal Buat:</label>
      <input type="date" class="form-control" id="tanggalbuat" placeholder="Tanggal Buat" name="tanggalbuat">
    </div>
   <div class="form-group">
      <label for="kondisikendaraan">Kondis Kendaraan:</label>
      <textarea class="form-control" rows="5" class="form-control" id="kondisikendaraan" placeholder="Kondis Kendaraan" name="kondisikendaraan"></textarea>
    </div>
       <div class="form-group">
      <label for="nobpkb">Nomor BPKB:</label>
      <input type="text" class="form-control" id="nobpkb" placeholder="Nomor BPKB" name="nobpkb">
    </div>
    <div class="form-group">
      <label for="nostnk">Nomor STNK:</label>
      <input type="text" class="form-control" id="nostnk" placeholder="Nomor STNK" name="nostnk">
    </div>
    <div class="form-group">
      <label for="statusstnk">Status STNK:</label>
      <input type="text" class="form-control" id="statusstnk" placeholder="Status STNK" name="statusstnk">
    </div>

    <button type="submit" class="btn btn-primary" name="bSimpan">Simpan Rekord Pengguna</button>
  </form>
</div>
</body>
</html>
<?php 
if (isset($_POST['bSimpan'])) {
	$nomesinkendaraan=$_POST['nomesinkendaraan'];
  $jeniskendaraan=$_POST['jeniskendaraan'];
    $norangkakendaraan=$_POST['norangkakendaraan'];
	$namakendaraan=$_POST['namakendaraan'];
	$tanggalbuat=$_POST['tanggalbuat'];
  $kondisikendaraan=$_POST['kondisikendaraan'];
  $nobpkb=$_POST['nobpkb'];
  $nostnk=$_POST['nostnk'];
  $statusstnk=$_POST['statusstnk'];
	$koneksi=new mysqli("localhost","root","","dbshowroom");
	$sql="INSERT INTO `tbmobil` (`nomesinkendaraan`, `jeniskendaraan`, `norangkakendaraan`, `namakendaraan`, `tanggalbuat`,`kondisikendaraan`, `nobpkb`, `nostnk`, `statusstnk`) VALUES ('".$nomesinkendaraan."', '".$jeniskendaraan."', '".$norangkakendaraan."', '".$namakendaraan."', '".$tanggalbuat."', '".$kondisikendaraan."', '".$nobpkb."', '".$nostnk."', '".$statusstnk."');";
	$q=$koneksi->query($sql);
	if ($q) {
		echo "Rekord pengguna sudah tersimpan !";
	} else {
		echo "Rekord pengguna gagal tersimpan !";
	}	
}
