<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabel Kendaraan</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
$koneksi=new mysqli("localhost","root","","dbshowroom");
$sql="SELECT * FROM `tbmobil`";
$q=$koneksi->query($sql);
$rekordkendaraan=$q->fetch_array();
?>
<div class="container">
  <h2>Tabel Kendaraan</h2>
  <p>Daftar Kendaraan yang tersimpan  adalah :</p>            
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Nomor Mesin Kendaraan</th>
        <th>Nomor Rangka Kendaraan</th>
        <th>Jenis Kendaraan Yang Terdiri Dari(Sepeda Motor,Mobil,Sedan,Bus,Truk)</th>
        <th>Nama Kendaraan</th>
		    <th>Tanggal Buat</th>
		    <th>Kondisi Kendaraan</th>
		    <th>Nomor BPKB</th>
        <th>Nomor STNK</th>
        <th>Status STNK</th>
      </tr>
    </thead>
    <tbody><?php do { ?>
      <tr>
        <td><?php echo $rekordkendaraan['nomesinkendaraan'];?></td>
		    <td><?php echo $rekordkendaraan['norangkakendaraan'];?></td>
        <td><?php echo $rekordkendaraan['jeniskendaraan'];?></td>
		    <td><?php echo $rekordkendaraan['namakendaraan'];?></td>
		    <td><?php echo $rekordkendaraan['tanggalbuat'];?></td>
	     	<td><?php echo $rekordkendaraan['kondisikendaraan'];?></td>
	     	<td><?php echo $rekordkendaraan['nobpkb'];?></td>
        <td><?php echo $rekordkendaraan['nostnk'];?></td>
        <td><?php echo $rekordkendaraan['statusstnk'];?></td>
      </tr><?php } while($rekordkendaraan =$q->fetch_array());?>
    </tbody>
  </table>
</div>

</body>
</html>