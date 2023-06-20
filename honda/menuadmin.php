 <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <link
          rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"/>
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
          body{
            background-color: #DCDCDC;
          }
          

          .panel {
            background-color: #F8F8FF;
          }

          li {
            list-style: none;
            margin: 10px 0 20px 0;
          }
    
          a {
            text-decoration: none;
            font-size: 20px;
          }
    
          .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            margin-left: -300px;
            transition: 0.4s;
          }

          .sidebar li:hover {
            width: 210px;
            height: 30px;
            margin-left: -10px;
            background-color: #696969;
          }
    
          .active-main-content {
            margin-left: 250px;
          }
    
          .active-sidebar {
            margin-left: 0;
          }
    
          #main-content {
            transition: 0.4s;
          }
        </style>
      </head>
    
      <body>
          <div class="sidebar p-5 bg-danger" id="sidebar">
            <h1 class="mb-5 text-white"><strong>ADMIN</strong></h1>
            <li>
              <a class="text-white" href="homeadmin.php">
                <i class="bi bi-house mr-2"></i>Beranda</a>
            </li>
            <li>
              <a class="text-white" href="kerusakan.php">
                <i class="bi bi-tools mr-2"></i>Kerusakan</a>
            </li>
            <li>
              <a class="text-white" href="gejala.php">
                <i class="bi bi-list-check mr-2"></i>Gejala</a>
            </li>
            <li>
              <a class="text-white" href="basispengetahuan.php">
                <i class="bi bi-server mr-2"></i>Keputusan</a>
            </li>
             <li><a type="button" id="myBtn" onclick="logout()" href="logout.php" class="text-white">
                  <i class="glyphicon glyphicon-log-out mr-2"></i>Logout</a>
            </li>
          </div>
        </div>
         <div class="p-4" id="main-content">
          <button class="btn btn-danger" id="button-toggle">
            <i class="bi bi-list"></i>
          </button><br><br>
    
        <script>
    
          // event will be executed when the toggle-button is clicked
          document.getElementById("button-toggle").addEventListener("click", () => {
    
            // when the button-toggle is clicked, it will add/remove the active-sidebar class
            document.getElementById("sidebar").classList.toggle("active-sidebar");
    
            // when the button-toggle is clicked, it will add/remove the active-main-content class
            document.getElementById("main-content").classList.toggle("active-main-content");
          });
    
        </script>
        <script language="JavaScript" type="text/javascript">
        function logout(){
        return confirm('Yakin ingin keluar?');
}
</script>
      </body>
    </html>