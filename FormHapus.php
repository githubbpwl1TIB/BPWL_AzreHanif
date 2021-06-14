<?php
// panggil koneksi
include "koneksi.php";
$id = $_GET['id'];

if (!empty($id)) {
mysqli_query($con, "DELETE FROM 2055301019_produk
WHERE id_2055301019 = '$id'");
  header('location:MenuProduk.php');
} else
{
  header('location:MenuProduk.php');
}