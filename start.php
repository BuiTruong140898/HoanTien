
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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Hoàn tiền</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                
                <!-- <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a> -->
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Tài khoản</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i>Khiếu nại</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i>Đăng xuất</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href=""><i class="fa fa-fw fa-area-chart"></i>Thông tin giao dịch</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=""><i class="fa fa-fw fa-magic"></i>Công cụ<span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="">Tạo link giới thiệu</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-fw fa-info-circle"></i>Thông tin cá nhân</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="card-header">
                    <h4><i class="fa fa-table"></i> Nhận hoàn tiền</h4>
                    <div>1. Search tên website </div>
                    <div>2. Click "Tiếp tục để được chuyển đến website"</div>
                    <div>3. Mua sắm như bình thường</div>
                    <div>4. Nhận hoàn tiền vào tài khoản</div>
                </div>
            </div>
            <div class="input-group" style="background-color:#f7f7f7; width:98%; padding:20px; border: 1px solid #dee2e6; margin-left: auto; margin-right: auto; margin-bottom:10px">
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
            </div><div class="col-lg-3 col-md-6">
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
            </div><div class="col-lg-3 col-md-6">
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
            </div><div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div align="center"class="panel-heading">
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
    <script type="text/javascript">
        
        //Listen on change event of global search
        $('#txtGlobalSearch').on( 'keyup', function (event) {
            event.preventDefault();
            table.search( this.value ).draw();
        } );
    </script>
</body>

</html>