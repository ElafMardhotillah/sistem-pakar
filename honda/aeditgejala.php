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
</head>
<body>
    <?php include('menuadmin.php');?>
    <div class="panel panel-danger">
        <div class="panel panel-body">
    <div class="col-12 text-left"> 
      <h1 class="text text-center text-danger">EDIT GEJALA</h1>
    <form method="post">
      <div class="form-group">
      			<label class="control-label col-sm-2">ID :</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM gejala where idgejala='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                        echo "<input type='text' name='idgejala' class='form-control' id='idgejala'  disabled value='".$data['idgejala']."'><br>";
                    }
                ?>
     		 </div>
        </div>	
        <div class="form-group">
      			<label class="control-label col-sm-2">GEJALA :</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM gejala where idgejala='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='gejala' name='gejala' value='".$data['gejala']."'><br>";
                    }
                ?>
     		 </div>
        </div>
        <a href="gejala.php"><button type="button" name="btn" class="btn btn-danger">Kembali</button></a>
        <button type="submit" name ="submit" class="btn btn-danger">Simpan</button>
         <?php
                    if(isset($_POST['submit'])){
                      $id = $_GET['id'];
                      $gejala       = $_POST['gejala'];
                      $query="update gejala SET gejala='".$_POST['gejala']."' WHERE idgejala='$id'";
                      mysqli_query($konek_db, $query);
                      if($query){
                        echo '<script language="javascript">';
                        echo 'alert("Data Gejala Berhasil diedit")';
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
