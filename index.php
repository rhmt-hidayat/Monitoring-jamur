<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
require_once('koneksi.php');
require_once('ceksuhu.php');
require_once('ceklembap.php');
require_once('cekcahaya.php');
require_once('cekgas.php');
require_once('models/database.php');
$connection = new Database($host, $user, $pass, $database);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="554x554" href="assets/images/jamur.jpg">
    <title>Sistem Kumbung Jamur</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/DataTables/datatables.min.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <style type="text/css">
      .navbar-inverse{
      background-color:  #7CFC00;
       }
    </style>
  </head>

  <body>
    <div id="wrapper">
      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="" style="color:white">IOT_ROBOTIK</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Monitoring</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Master Kumbung <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="?page=data_tabel">Data Tabel</a></li>
                <li><a href="?page=data_grafik">Data Grafik</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" style="color:white" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Rahmat Hidayat <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">
      <?php
        if(@$_GET['page'] == 'dashboard' || @$_GET['page'] == ''){
          include "views/dashboard.php";
        } else if(@$_GET['page'] == 'data_tabel'){
          include "views/data_tabel.php";
        } else if(@$_GET['page'] == 'data_grafik'){
          include "views/data_grafik.php";
        }
      ?>
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="assets/images/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#datatables').DataTable();
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        setInterval(function(){
          $("#ceksuhu").load('ceksuhu.php');
        }, 1000);
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        setInterval(function(){
          $("#ceklembap").load('ceklembap.php');
        }, 1000);
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        setInterval(function(){
          $("#cekcahaya").load('cekcahaya.php');
        }, 1000);
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        setInterval(function(){
          $("#cekgas").load('cekgas.php');
        }, 1000);
      });
    </script>
  </body>
</html>