 <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <link
          rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        />
        <link rel="stylesheet" href="css/style.css" />
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
            font-size: 18px;
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
<div>
          <div class="sidebar p-5 bg-danger" id="sidebar">
            <h1 class="mb-5 text-white"><strong>F55116079</strong></h1>
            <li>
              <a class="text-white" href="index.php">
                <i class="bi bi-house mr-2"></i>Beranda</a>
            </li>
            <li>
              <a class="text-white" href="diagnosa.php">
                <i class="bi bi-tools mr-2"></i>Deteksi Kerusakan</a>
            </li>
            <li>
              <a class="text-white" href="daftarkerusakan.php">
                <i class="bi bi-list-ul mr-2"></i>Daftar Kerusakan</a>
            </li>
            <li>
              <a class="text-white" href="about.php">
                <i class="bi bi-person-lines-fill mr-2"></i>Tentang</a>
            </li>
             <li>
              <a type="button" id="myBtn" href="#myNavbar" class="text-white">
                <span class="glyphicon glyphicon-log-in mr-2"></span>Login</a>
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
      </body>
    </html>