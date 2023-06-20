<?php
include "session.php";
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
        <h1 class="text text-center text-danger">KEPUTUSAN</h1>
        <form id="form1" name="form1" method="post" action="abasispengetahuan.php">
				
              </form>
        <form id="form1" name="form1" method="post">
				<label for="sel1">Kerusakan</label>            
				<select required class="form-control" name="kerusakan">
				<option value ="">Pilih Jenis Kerusakan</option>
               <?php 
 			        $tampil="select * from kerusakan";
			        $query1= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query1)){  
					echo "<option value='".$hasil['namakerusakan']."'>".$hasil['idkerusakan']." ".$hasil['namakerusakan']."</option>";
			}
					?>
  		</select>
 
        <br><label for="sel2">Gejala</label><br>
    <form id="form2" name="form2" method="post" action="diagnosa.php">
    <div class="panel panel-danger">
       
        <div class="panel-body">
 			<?php 
          
 			$tampil="select * from gejala";
			$query= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query)){  
					echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
			}
                 
					?>
            </div>
    </div>
    <a href="basispengetahuan.php"><button type="button" name="btn" class="btn btn-danger">Kembali</button></a>
    <button type="submit" name ="submit" class="btn btn-danger">Simpan</button>
     <?php			
        if(isset($_POST['submit'])){
            
            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
            $kerusakan= $_POST['kerusakan'];
            $gejala = $_POST['gejala'];
            $jumlah_dipilih = ($gejala);

            if ($gejala == 0){
              echo '<script language="javascript">';
              echo 'alert("Pilih gejala terlebih dahulu!")';
              echo '</script>';
              return false;
            }
            

           for($x=0;$x<$jumlah_dipilih;$x++){
	                   $hasil= mysqli_query($konek_db, "INSERT INTO basispengetahuan (namakerusakan, gejala) values('$kerusakan','$gejala[$x]')");
                       
                    }
                    
                    header("location:basispengetahuan.php");
        }
    
                ?>
        </form>
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
