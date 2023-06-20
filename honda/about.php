<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Pakar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <?php include('menu.php');?>
  <div class="panel panel-danger">
        <div class="panel panel-body">
    <div class="col-12 text-center"> 
      <h1 class="text text-danger">Dibuat oleh :</h1>
      <img src="untad.png" class="img-circle" width="136" height="136"><br><br>
      <p style="font-size: 50px;"><strong> Muh. Elaf Mardhotillah<br>F55116079</strong></p>
      <a href="https://www.facebook.com/ridho.spenzza" target="_blank" style="s"><i class="fab fa-facebook fa-4x"></i></a>
      <a href="https://www.twitter.com/Muhelaf" target="_blank"><i class="fab fa-twitter fa-4x"></i></a>
      <a href="https://www.instagram.com/_elafmuhammad" target="_blank"><i class="fab fa-instagram fa-4x"></i></a>
  </div>
</div>
</div>

 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
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
