<?php
include('koneksi.php');
 
if(isset($_SESSION['login_user'])){
header("location: about.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Pakar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/validator.js"></script>
    
</head>
<body>
    <?php include('menuadmin.php');?>
    <?php
    include('koneksi.php');
    $query = mysqli_query($konek_db, "SELECT max(idgejala) as kodeTerbesar FROM gejala");
    $data = mysqli_fetch_assoc($query);
    $kodeTerbesar = $data['kodeTerbesar'];

    // Menghasilkan kode baru
    if ($kodeTerbesar == null) {
        $idgejala = "G001";
    } else {
        $urutan = (int) substr($kodeTerbesar, 1);
        $urutan++;
        $idgejala = "K" . str_pad($urutan, 3, '0', STR_PAD_LEFT);
    }
    ?>
    <div class="panel panel-danger">
        <div class="panel panel-body">
    <div class="col-12 text-left">
        <h1 class="text text-center text-danger">INPUT GEJALA</h1>
      <form class="form-horizontal" data-toggle="validator" role="form" method="post" action="ainputgejala.php">
          <div class="form-group has-feedback">
				<label class="control-label col-sm-2" for="nama">ID Gejala:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" required="required" name="idgejala" value="<?php echo $idgejala ?>" readonly>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
				</div>
			</div>
			<div class="form-group has-feedback">
				<label class="control-label col-sm-2" for="nama">Gejala:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" required name="gejala" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
				</div>
			</div>
			     <a href="gejala.php"><button type="button" name="btn" class="btn btn-danger">Kembali</button></a>
                <button type="submit" name ="submit" class="btn btn-danger">Simpan</button>
          <?php			
                    if(isset($_POST['submit'])){
                    $idgejala     = $_POST['idgejala'];
                    $gejala       = $_POST['gejala'];
                    $query="INSERT INTO gejala SET idgejala='$idgejala',gejala='$gejala'";
                  $result=mysqli_query($konek_db, $query);
                        if($result){
                            echo '<script language="javascript">';
                            echo 'alert("Data gejala berhasil disimpan")';
                            echo '</script>';
                            } 
                    }
                ?>
		</form>		
    </div>
  </div>
</div>

<footer class="navbar-danger text-right">
  <p style="font-size: 13px;"><strong>Email: </strong>elafmardhotillah03@gmail.com
        &nbsp;
        <strong>Support: </strong>+62-878-4803-9501</p>
</footer>

</body>
</html>
