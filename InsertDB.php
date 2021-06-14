<?php 
	include "Koneksi.php";
	$Nama_2055301019 = $_POST['nama_2055301019'];
	$Harga_2055301019 = $_POST['harga_2055301019'];
	$Kategori_2055301019 = $_POST['kategori_2055301019'];
	$Deskripsi_2055301019 = $_POST['deksripsi_2055301019'];
	$Stok_2055301019 = $_POST['stok_2055301019'];


	if (!empty($Nama_2055301019) && !empty($Harga_2055301019) && !empty($Kategori_2055301019) && !empty($Deskripsi_2055301019) && !empty($Stok_2055301019)) 
	{
		mysqli_query($con, "INSERT INTO 2055301019_produk(nama_2055301019,harga_2055301019,kategori_2055301019,deksripsi_2055301019,stok_2055301019) VALUES ('$Nama_2055301019','$Harga_2055301019','$Kategori_2055301019','$Deskripsi_2055301019','$Stok_2055301019')");
		header('location:MenuProduk.php');
	}
	else {
		header('location:FormInsert.php');
	}
 ?>