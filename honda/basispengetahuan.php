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
<script>
$(document).ready( function () {
    $('#example1').DataTable();  
} );
</script>
</head>
<body>
    <?php include('menuadmin.php');?>
    <div class="panel panel-danger">
        <div class="panel panel-body">
    <div class="col-12 text-left"> 
        <h1 class="text text-center text-danger">KEPUTUSAN</h1>
        
<a href="abasispengetahuan.php"><button type="button" class="btn btn-danger">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button></a>
        <br><br>
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="table-danger">
                            <th>NO</th>
                            <th>Id Kerusakan</th>
						    <th>Nama Kerusakan</th>
                            <th>Gejala</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                     <?php
                   
                            $queri="Select p.idkerusakan, b.namakerusakan, b.gejala from basispengetahuan b, kerusakan p where p.namakerusakan=b.namakerusakan";
                    $hasil=mysqli_query ($konek_db,$queri);   
                    $id = 0;
                        
while ($data = mysqli_fetch_array ($hasil)){  
 			$id++; 
 			echo "      
        			<tr>  
        			<td>".$id."</td>
					<td>".$data['idkerusakan']."</td>  
        			<td>".$data['namakerusakan']."</td>  
                    <td>".$data['gejala']."</td>
                    <td><a href=\"adeletebasispengetahuan.php?id=".$data['namakerusakan']."\"  onclick='return checkDelete()'><i class='btn btn-xs btn-danger'><span class='glyphicon glyphicon-trash'></span> Hapus </i></a></td>
                   
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
