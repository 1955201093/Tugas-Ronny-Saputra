<?php 
 $koneksi=new mysqli("localhost","root","");
 $sql="create database dbshowroom";
 $q=$koneksi->query($sql);
 if ($q) {
	 echo "Database sudah dibuat !";
 } else {
	 echo "Database gagal dibuat !";
 }
 $sql2="CREATE TABLE  dbshowroom.`tbmobil` (
  `nomesinkendaraan` varchar(20) NOT NULL,
  `norangkakendaraan` varchar(20) NOT NULL,
  `jeniskendaraan` varchar(25) NOT NULL,
  `namakendaraan` varchar(80) NOT NULL,
  `tanggalbuat` date NOT NULL,
  `kondisikendaraan` text DEFAULT NULL,
  `nobpkb` varchar(60) NOT NULL,
  `nostnk` varchar(20) NOT NULL,
  `statusstnk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
$q2=$koneksi->query($sql2);
 if ($q2) {
   echo "Tabel Barang sudah dibuat !";
 } else {
   echo "Tabel Barang  gagal dibuat !";
 }