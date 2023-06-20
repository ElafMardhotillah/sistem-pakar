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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"/>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include('menu.php');?>
    <div class="panel panel-danger">
        <div class="panel panel-body">
    <div class="col-12 text-left"> 
    <center><h1 class="text text-danger">SISTEM PAKAR PENDETEKSI KERUSAKAN MOTOR METIK</br>HONDA MENGGUNAKAN METODE FORWARD CHAINING
    </h1></center><br><br><br>
    <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeIn;">
                    <div class="single-service">
                       
                    <i class="fa fa-cogs fa-5x" aria-hidden="true" style="color: #DC143C"></i>
                        
                        <h2>Forward Chaining</h2>
                        <p>Forward chaining merupakan suatu metode pengambilan keputusan yang umum digunakan dalam sistem pakar. Forward chaining digunakan untuk menguji faktor-faktor yang dimasukkan dengan aturan yang disimpan dalam sistem hingga dapat diambil kesimpulan.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeIn;">
                    <div class="single-service">
                     
                            <i class="fa fa-desktop fa-5x" aria-hidden="true" style="color: #DC143C"></i>
                            <i class="fa fa-mobile fa-3x" aria-hidden="true" style="color: #DC143C"></i>
                      
                        <h2>Web Responsif</h2>
                        <p>Website sistem pakar ini dapat menyesuaikan diri sesuai dengan ukuran layar pengguna. Selain dapat mempengaruhi apa yang ditampilkan pada perangkat tertentu, ini juga untuk meningkatkan kenyamanan pengguna dalam mengunjungi website.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="900ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 900ms; animation-name: fadeIn;">
                    <div class="single-service">
                    <i class="fa fa-user-circle fa-5x" aria-hidden="true" style="color: #DC143C"></i>
                        <h2>Admin Pakar</h2>
                        <p>Pada fitur ini, admin pakar melakukan login untuk masuk ke halaman admin agar dapat mengelola data kerusakan, data gejala, dan data keputusan metode forward chaining. </p>
                    </div>
                </div>
            </div>
    </div>
  </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding: 35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action="ceklogin.php">
            <div class="form-group" method="post">
              <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" id="password" placeholder="Enter username">
            </div>
            <div class="form-group" method="post">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
            </div>
              <button type="submit" id="submit" nama="submit" class="btn btn-danger btn-block" method="post"><span class="glyphicon glyphicon-off"></span> LOGIN</button>
          </form>     
            
        </div>
      </div>
        
    </div>
  </div> 

<footer class="navbar-danger text-right">
  <p style="font-size: 13px;"><strong>Email: </strong>elafmardhotillah03@gmail.com
        &nbsp;
        <strong>Support: </strong>+62-878-4803-9501</p>
</footer>

<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

</body>
</html>
