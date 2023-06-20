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
          <h1 class="text text-center text-danger">DAFTAR GEJALA</h1>
     
<a href="ainputgejala.php"><button type="button" class="btn btn-danger">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button></a>
    	<br><br>
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="table-danger">
                            <th>NO</th>
                            <th>Id Gejala</th>
							<th>Gejala</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                     <?php
	
$queri="Select * From gejala";
$hasil=mysqli_query ($konek_db,$queri);   
$id = 0;
while ($data = mysqli_fetch_array ($hasil)){  
 			$id++; 
 			echo "      
        			<tr>  
        			<td>".$id."</td>
					<td>".$data[0]."</td>  
        			<td>".$data[1]."</td>  
                    <td><a href=\"aeditgejala.php?id=".$data[0]."\"><i class='btn btn-xs btn-success'><span class='glyphicon glyphicon-pencil'></span> Edit </i></a>"."  <a href=\"adeletegejala.php?id=".$data[0]."\"  onclick='return checkDelete()'><i class='btn btn-xs btn-danger'><span class='glyphicon glyphicon-trash'></span> Hapus </i></a>"."</td>
        		</tr>   
        	";      
			}
 ?>  
</table>
            </div>
    </div>
  </div>
</div>
    
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Yakin menghapus data ini?');
}
</script>
    
<footer class="navbar-danger text-right">
  <p style="font-size: 13px;"><strong>Email: </strong>elafmardhotillah03@gmail.com
        &nbsp;
        <strong>Support: </strong>+62-878-4803-9501</p>
</footer>

</body>
</html>
