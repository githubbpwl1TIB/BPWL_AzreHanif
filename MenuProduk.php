<htmlxmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu Produk</title>
</head>

<body>
<?php include "koneksi.php"; ?>
<a href="FormInsert.php">Tambah Produk</a>
<table width="600" border="1" cellspacing="0" cellpadding="0">
<tr>
<th align="center">No</th>
<th>ID Produk</th>
<th>Nama Produk</th>
<th>Harga Produk</th>
<th>Kategori Produk</th>
<th>Deskripsi Produk</th>
<th>Stok Deskripsi</th>
<th>Aksi</th>
</tr>
<?php
$i = 0;
$query = mysqli_query($con, "SELECT * FROM 2055301019_produk");
while ($m = mysqli_fetch_array($query))
{ $i++;
?>
<tr>
<td align="center"><?php print $i; ?></td>
<td><?php print $m['id_2055301019']; ?></td>
<td><?php print $m['nama_2055301019']; ?></td>
<td><?php print $m['harga_2055301019']; ?></td>
<td><?php print $m['kategori_2055301019']; ?></td>
<td><?php print $m['deksripsi_2055301019']; ?></td>
<td><?php print $m['stok_2055301019']; ?></td>
<td><a href="FormUpdate.php?id=<?php print $m['id_2055301019'] ?>">Edit</a> | 
<a href="FormHapus.php?id=<?php print $m['id_2055301019']
?>">Hapus</a></td>
</tr>
<?php
}
?>
</table>