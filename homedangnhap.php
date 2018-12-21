<?php session_start();

?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>hoantien.tk</title>
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
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
    <![
    endif]-->
     
	<link href="cssSlide.css" rel="stylesheet">
</head>

<body style="margin-top: 80px">
    
    <?php 
    require "mysql/dbcon.php";
     ?>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#FF4E4EFF; height: 70px"  role="navigation">
            <div style="padding-top:10px" class="navbar-header">
               
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <form class="form-inline" action="/action_page.php">
                <a  href="home.html" style="text-decoration: none"><div style=" float:left;color: white; margin-left: 80px;  font-weight: bold; font-size: 30px">Hoàn tiền</div></a>
              
                   
                    <div class="btn-default" style="width: 450px; padding:5px;margin-left:  50px ;float: left;background-color: white;  border-radius: 1rem;">
    <input style="border: 0px; width:400px" class="form-control mr-sm-2" type="text" placeholder="Search tên website">
    <button style="border: 0px; font-size: 20px " class="btn-default" id="btnSearch" name="search_doitac"  value="1" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
						</div>

  </form>     

            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                	
                    <!-- /.dropdown-alerts -->
                </li>
                 <li >
                    <a data-toggle="modal" data-target="#myModal"  href="" style="background-color:#FF4E4EFF; height: 65px; font-size: 18px ; color: white ">
                        Đăng nhập
                </a>
            </li>
            <li>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color:#FF4E4EFF; height: 65px; font-size: 18px ; color: white ">
                        Đăng ký
                </a>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            
            <!-- /.navbar-static-side -->
        </nav>
        </nav>
        <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content" style="padding: 0px 150px">
   
      
              <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" align="left" style=" font-size:20px">Vui lòng điền thông tin</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form class="form-signin" method="post" action="dangnhap.php">
     
      <div class="form-label-group">
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
       
      </div>

      <div class="form-label-group">
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Nhớ tài khoản
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block"  type="submit">Đăng nhập</button>
     
    </form>
        </div>
        
		</div>
        </div>
     </div>
       <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade1">
    <div class="numbertext">1 / 3</div>
    <img src="1.png" style="width:100%">
   
  </div>

  <div class="mySlides fade1">
    <div class="numbertext">2 / 3</div>
    <img src="2.png" style="width:100%">
 
  </div>

  <div class="mySlides fade1">
    <div class="numbertext">3 / 3</div>
    <img src="3.png" style="width:100%">
  
  </div>

  <!-- Next and previous buttons -->

</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>



        <div style="margin-top: 0px" class="container">
            
            <!-- /.row -->
            <div class="row">
              
              <?php if(isset($_GET["hienthi"]))
        $hienthi=$_GET["hienthi"];
        else
            $hienthi="";
              switch ($hienthi) {
                  case 'thongtincanhan':
                  require "noidung/thongtincanhan.php";
                      # code...
                      break;
                  case 'thongtingiaodich':
                  require "noidung/thongtingiaodich.php";
                  break;
                  case 'timkiemgiaodich':
                  require "noidung/thongtingiaodich.php";
                    # code...
                    break;
                  
    
                  default:
                  require "trangchu/hienthidoitac.php";
                      # code...
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
	<script type="text/javascript" src="jsSlide.js">
	</script>

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