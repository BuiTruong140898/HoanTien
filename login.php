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
    <div id="wrapper">
        <!-- Navigation -->

        <nav class="navbar navbar-default navbar-static-top" style="background-color:#FF4E4EFF; height: 70px"  role="navigation">
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
                <!-- /.dropdown -->
                <li >
                    <a data-toggle="modal" data-target="#myModal"  href="#" style="background-color:#FF4E4EFF; height: 65px; font-size: 18px ; color: white ">
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
            </ul>
            <!-- /.navbar-top-links -->
            
            <!-- /.navbar-static-side -->
        </nav>
         <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content" style="padding: 0px 150px">
   
      
              <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" align="left"  font-size:20px">Vui lòng điền thông tin</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form class="form-signin">
     
      <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
       
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
     
    </form>
        </div>
        
     
        </div>
     </div>
  </div>
  
        <div class="container" >
            
            <!-- /.row -->
            <div class="row">
                <div >
                    <h4><i class="fa fa-table"></i> Nhận hoàn tiền</h4>
                    <div>1. Search tên website </div>
                    <div>2. Click "Tiếp tục để được chuyển đến website"</div>
                    <div>3. Mua sắm như bình thường</div>
                    <div>4. Nhận hoàn tiền vào tài khoản</div>
                </div>
            </div>
            <div class="input-group" style="background-color:#f7f7f7; width:100%; padding:20px; border: 1px solid #dee2e6; margin-left: auto; margin-right: auto; margin-bottom:10px">
                <input id="txtGlobalSearch" class="form-control form-control-ck" type="text" style="width: 900px" placeholder="Search tên website | VD: lazada.vn">
                <span class="input-group-append">
                        <button id="btnSearch" class="btn btn-success" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <img src="image/tiki.png" width="200px" height="50px">
                        <p>
                            <p align="center">Hoàn tiền đến 3%</p>
                        </p>
                    </div>
                    <a href="https://tiki.vn/">
                            <div class="panel-footer">
                                <!--<span class="pull-left">Chi tiết</span>-->
                                <span class="pull-right"> Tiếp tục  <i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <img src="image/adayroi.png" width="200px" height="50px">
                        <p>
                            <p align="center"> Hoàn tiền đến 6% </p>
                        </p>
                    </div>
                    <a href="https://adayroi.com/">
                            <div class="panel-footer">
                                                               <!--<span class="pull-left">Chi tiết</span>-->

                                <span class="pull-right">Tiếp tục <i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <img src="image/fpt.png"width="200px" height="50px">
                        <p>
                            <p align="center">Hoàn tiền đến 5%</p>
                    </div>
                    <a href="https://fptshop.com.vn/">
                            <div class="panel-footer">
                                                               <!--<span class="pull-left">Chi tiết</span>-->

                                <span class="pull-right"> Tiếp tục <i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <img src="image/vuivui.png"width="200px" height="50px">
                        <p>
                            <p align="center">Hoàn tiền đến 4.5%</p>
                    </div>
                    <a href="https://www.vuivui.com/">
                            <div class="panel-footer">
                                  <!--<span class="pull-left">Chi tiết</span>-->

                                <span class="pull-right">Tiếp tục <i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <img src="image/lotte.png"width="200px" height="50px">
                        <p>
                            <p align="center">Hoàn tiền đến 4.5%</p>
                    </div>
                    <a href="https://www.lotte.vn/">
                            <div class="panel-footer">
                                  <!--<span class="pull-left">Chi tiết</span>-->

                                <span class="pull-right">Tiếp tục <i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <img align="center" src="image/atadi.png"width="100px" height="50px">
                        <p>
                            <p align="center">Hoàn tiền đến 3.5%</p>
                    </div>
                    <a href="https://www.atadi.vn/">
                            <div class="panel-footer">
                                  <!--<span class="pull-left">Chi tiết</span>-->

                                <span class="pull-right">Tiếp tục <i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div align="center" class="panel-heading">
                        <img align="center" src="image/lazada_icon.jpg"width="100px" height="50px">
                        <p>
                            <p align="center">Hoàn tiền đến 4.5%</p>
                    </div>
                    <a href="https://www.lazada.vn/">
                            <div class="panel-footer">
                                  <!--<span class="pull-left">Chi tiết</span>-->

                                <span class="pull-right">Tiếp tục <i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div align="center" class="panel-heading">
                        <img align="center" src="image/shopee.jpg"width="100px" height="50px">
                        <p>
                            <p align="center">Hoàn tiền đến 4.5%</p>
                    </div>
                    <a href="https://www.shopee.vn/">
                            <div class="panel-footer">
                                  <!--<span class="pull-left">Chi tiết</span>-->

                                <span class="pull-right">Tiếp tục <i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                </div>
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