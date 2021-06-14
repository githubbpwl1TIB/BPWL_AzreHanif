<!DOCTYPE html>
<html>
<head>
	<title> Insert form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body background="image/ba2.png">
    <div class="col-sm-12">
<form action="InsertDB.php" method="POST">
    <div class="container badan">
            <div class="row">
                <div class="col peding-100">
                    <br>
        <h3>Tambahkan Produk </h3> 
        <p> Silahkan Inputkan Data Produknya </p>
        <br>
    </div>

        <div class="col peding-30">
            <br>
    <div class="form-group">
            <label for=""> Nama Produk :  </label>
            <input class="form-control" type="text" name="nama_2055301019" />
    </div>
    <div class="form-group">
            <label for=""> Harga Produk :  </label>
            <input class="form-control" type="text" name="harga_2055301019"/>
    </div>
    <div class="form-group">
            <label for=""> Kategori Produk :  </label>
            <input class="form-control" type="text" name="kategori_2055301019"/>
    </div>
    <div class="form-group">
            <label for=""> Deskripsi Produk : </label>
            <textarea  name="deksripsi_2055301019" class="form-control"  cols="30" row="7"/></textarea> 
    </div>
    <div class="form-group">
            <label for=""> Stok Produk : </label>
            <input class="form-control" type="text" name="stok_2055301019"/>
    </div>
            <input class="btn btn-primary"  type="submit" name="submit" value="Tambah" />
</div>
</div>
</div>
</form>


    <script src="js/bootstrap.min.js"></script>
</body>
</html>