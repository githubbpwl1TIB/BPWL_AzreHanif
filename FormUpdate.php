<!DOCTYPE html>
<html>
<head>
	<title> Update Produk </title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body background="image/ba3.png">
	<br>
<h3 style="font-family: Georgia"; align="center"> Update Barang </h3>
<?php include 'Koneksi.php'; 
echo "<br>";
if (isset($_GET['id'])) {

	$id_2055301069 = $_GET['id'];
	$data = $con->query("SELECT * FROM 2055301019_produk WHERE id_2055301019 ='$id_2055301069'");

	foreach ($data as $n) :

		?>
		<div class="container">
			<div class="col-sm-12">
		<form method="POST" action="UpdateDB.php">
			<table class = "table table-bordered table-striped table-hover table-sm">
				<div class="row">
					<div class="col peding-100">
				<tr class=" form-group">			
					<td> <h2 for="">Nama Produk : </td>
					<td>
						<input type="hidden" name="id_2055301019" value="<?php echo $n['id_2055301019']; ?>">
						<input class="form-control" type="text" name="nama_2055301019" value="<?php echo $n['nama_2055301019']; ?>">
					</h2>
					</td>
				</tr>
				<tr class="form-group">
					<td> <h2 for=""> Harga Produk : </td>
					<td><input class="form-control" type="text" name="harga_2055301019" value="<?php echo $n['harga_2055301019']; ?>">
					</h2>
				</td>
				</tr>
				<tr class="form-group">
					<td> <h2 for=""> Kategori Produk : </td>
					<td><input class="form-control" type="text" name="kategori_2055301019" value="<?php echo $n['kategori_2055301019']; ?>">
					</h2>
				</td>
				</tr>
				<tr class="form-group">
					<td><h2 for=""> Deskripsi :</td>
					<td><input class="form-control"  type="text" name="deksripsi_2055301019" value="<?php echo $n['deksripsi_2055301019']; ?>">
					</h2>
				</td>
				</tr>
				<tr class="form-group">
					<td> <h2 for=""> Stok : </td>
					<td><input class="form-control" type="text" name="stok_2055301019" value="<?php echo $n['stok_2055301019']; ?>">
					</h2> 
				</td>
				</tr>	
			</div>
			</div>	
			</table>
			<input class="btn btn-success" type="submit" name="submit" value="Ubah">
		</form>
	</div>
</div>
		<?php 
	endforeach;
	}
	?>

	 <script src="js/bootstrap.min.js"></script>
</body>
</html>