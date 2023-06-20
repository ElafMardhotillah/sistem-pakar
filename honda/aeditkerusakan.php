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
      <h1 class="text text-center text-danger">EDIT KERUSAKAN</h1>
    <form method="post">
      <div class="form-group">
      			<br><label class="control-label col-sm-2">ID :</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM kerusakan where idkerusakan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='idkerusakan' name='idkerusakan' disabled value='".$data['idkerusakan']."'><br>";
                    }
                ?>
     		 </div>
        </div>	
        <div class="form-group">
      			<br><label class="control-label col-sm-2">NAMA :</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM kerusakan where idkerusakan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='namakerusakan' name='namakerusakan' value='".$data['namakerusakan']."'><br>";
                    }
                ?>
     		 </div>
        </div>
        
         <div class="form-group"  method="POST">
      			<br><label class="control-label col-sm-2">GEJALA :</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM kerusakan p, basispengetahuan b where p.idkerusakan='".$_GET['id']."' and p.namakerusakan=b.namakerusakan";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='jenistanaman' readonly value='".$data['gejala']."'><br>";
                    }
                echo "<input type='text'  class='form-control' id='jenistanaman' readonly value=''><br>";
                ?>
     		 </div>
        </div>	
        <div class="form-group">
      			<br><label class="control-label col-sm-2">PENGENDALIAN:</label><br>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM kerusakan where idkerusakan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<textarea  rows='8' class='form-control' id='pengendalian' name='pengendalian' >".$data['pengendalian']."</textarea><br>";
                    }
                ?>
     		 </div>  
        </div>
        <a href="kerusakan.php"><button type="button" name="btn" class="btn btn-danger">Kembali</button></a>
        <button type="submit" name ="submit" class="btn btn-danger">Simpan</button>
         <?php
                    if(isset($_POST['submit'])){
                      $id = $_GET['id'];
                      $namakerusakan = $_POST['namakerusakan'];  
                      $pengendalian = $_POST['pengendalian'];  

                      $query="update kerusakan SET namakerusakan='".$_POST['namakerusakan']."',pengendalian='".$_POST['pengendalian']."' WHERE idkerusakan='$id'";
                      $result=mysqli_query($konek_db, $query);
                      if($result){
                        echo '<script language="javascript">';
                        echo 'alert("Data Kerusakan Berhasil diedit")';
                        echo '</script>';
                        }
                                            }
                ?>
        </form><br>
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
