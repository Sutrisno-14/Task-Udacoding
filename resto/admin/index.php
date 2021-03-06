<?php
session_start();
    $koneksi = new mysqli("localhost","root","","resto");

    //pengecekan misalkan nggak ada admin , maka harus login dlu
    if(!isset($_SESSION['admin'])) {
        echo "
            <script>
                alert('Anda harus Login');
                document.location.href='login.php';
            </script>
        ";
    }

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BestResto</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">BestResto</a> 
            </div>
        </nav>   
           <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				    <li class="text-center">
                        <img src="assets/img/resto.png" class="user-image img-responsive"/>
					</li>
                     <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i>Home</a>
                    </li>
                     <li>
                        <a  href="index.php?halaman=menu"><i class="fa fa-dashboard fa-3x"></i>Menu</a>
                    </li>
                     <li>
                        <a  href="index.php?halaman=konsumen"><i class="fa fa-dashboard fa-3x"></i>Konsumen</a>
                    </li>
                     <li>
                        <a  href="index.php?halaman=pembelian"><i class="fa fa-dashboard fa-3x"></i>Pembelian</a>
                    </li>
                     <li>
                        <a  href="index.php?halaman=logout"><i class="fa fa-dashboard fa-3x"></i>Keluar</a>
                    </li>
               </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">

                <?php

                    if(isset($_GET['halaman'])) {
                        if($_GET['halaman'] == "menu") {
                            include 'menu.php';
                        }else if($_GET['halaman'] == "konsumen") {
                            include 'konsumen.php';
                        }else if($_GET['halaman'] == "pembelian") {
                            include 'pembelian.php';
                        }else if($_GET['halaman'] == "tambah_menu") {
                            include 'tambah_menu.php';
                        }else if($_GET['halaman'] == "hapus_menu") {
                            include 'hapus_menu.php';
                        }else if($_GET['halaman'] == "edit_menu") {
                            include 'edit_menu.php';
                        }else if($_GET['halaman'] == "tambah_konsumen") {
                            include 'tambah_konsumen.php';
                        }else if($_GET['halaman'] == "edit_konsumen") {
                            include 'edit_konsumen.php';
                        }else if($_GET['halaman'] == "hapus_konsumen") {
                            include 'hapus_konsumen.php';
                        }else if($_GET['halaman'] == "detail_pembelian") {
                            include 'detail_pembelian.php';
                        }else if($_GET['halaman'] == "logout") {
                            include 'logout.php';
                        }
                    }else {
                        include 'home.php';
                    }


                ?>
                <!-- ==Untuk setiap menu yg di klik akan tampil disini== -->

            </div>
             <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
    </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
