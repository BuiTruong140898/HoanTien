<?php session_start();
//if(isset($_SESSION["start"]))//{//echo($_SESSION['start']);}
//$_SESSION['start']=1;

?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>hoantien.tk-Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    
    <?php 
    require 'mysql/dbcon.php';
    require 'mysql/admin/sql.php';
     ?>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <?php 
                    require 'trangchu/logo_admin.php';
                 ?>

            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <?php 
                    if (isset($_SESSION['admin'])) {
                        require 'trangchu/bieutuonggocphai.php';
                    } else {
                    include 'trangchu/phandangnhapdangky.php';
                }
                ?>
                    <!-- /.dropdown-alerts -->
                </li>
                
                
               
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
               <?php 
                   require 'trangchu/cacchucnang_admin.php';
                ?>
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            
            <!-- /.row -->
            <div class="row">
              
              <?php if (isset($_GET['hienthi'])) {
                    $hienthi = $_GET['hienthi'];
                } else {
            $hienthi = '';
        }
              switch ($hienthi) {
                  case 'thongtincacdoitac':
                  require 'noidung/thongtincacdoitac.php';

                      // code...
                      break;
                  case 'thongtinnguoidung':
                  require 'noidung/thongtinnguoidung.php';

                  break;
                  case 'timkiemdoitac':
                  require 'noidung/thongtincacdoitac.php';
                  break;
                  case 'timkiemgiaodich':
                  require 'noidung/thongtincacgiaodich.php';
                    // code...
                    break;

                  default:
                  require 'noidung/thongtincacgiaodich.php';

                      // code...
                      break;
              }

               ?>  
        </div>
        </div>
        <!-- /.row -->
        <!-- /.row -->
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
</body>

</html>