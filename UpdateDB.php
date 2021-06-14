<?php 
	include "Koneksi.php";
	if (isset($_POST['submit'])) {

	$id_2055301019 = $_POST['id_2055301019'];
	$Nama_2055301019 = $_POST['nama_2055301019'];
	$Harga_2055301019 = $_POST['harga_2055301019'];
	$Kategori_2055301019 = $_POST['kategori_2055301019'];
	$Deskripsi_2055301019 = $_POST['deksripsi_2055301019'];
	$Stok_2055301019 = $_POST['stok_2055301019'];

	$q = $con->query("UPDATE 2055301019_produk SET nama_2055301019 = '$Nama_2055301019',harga_2055301019 = '$Harga_2055301019',
		kategori_2055301019 = '$Kategori_2055301019', deksripsi_2055301019 = '$Deskripsi_2055301019', stok_2055301019 = '$Stok_2055301019' WHERE id_2055301019 ='$id_2055301019'");
	if ($q) {
		echo "<script>alert('Data berhasil diubah'); window.location.href='MenuProduk.php'</script>";
	}
	else {
		echo "<script>alert('Data gagal diubah'); window.location.href='MenuProduk.php' </script>";
	}
}
	else {
		header('location: MenuProduk.php');
	}

?>