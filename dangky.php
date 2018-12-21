<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Đăng ký</title>
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
<?php 

    if(isset($_POST["dangky"])){

         $hoten=$_POST["name"];
        $email=$_POST["email"];
        $matkhau=$_POST["password"];
        $xacnhanmatkhau=$_POST["password_confirmation"];
        $sotaikhoan=$_POST["bank_account_number"];
        $tentaikhoan=$_POST["bank_owner"];
        $nganhang=$_POST["bank_name"];
        $chinhanh=$_POST["bank_branch"];
        $quantri=0;
        if($matkhau==$xacnhanmatkhau)
        {
            //nhap dung mk xac nhan
            //luu thong tin vao database
           // require "mysql/dbcon.php";
    
//     $db=new DataAccessHelper;
// $db->connect();
// $stt=$db->executeQuery("select * from nguoidung");
// $stt=mysqli_num_rows($stt)+1;;
require "mysql/conn.php";
//kiem tra ton tai email trong du lieu nguoi dung chua
$sql1="select * from nguoidung where email='".$email."'";
$kiemtra1=mysqli_query($con,$sql1);
// echo(mysqli_num_rows($kiemtra1));
// die();
if(!mysqli_num_rows($kiemtra1)){

$sql="INSERT INTO nguoidung (matkhau, hoten, email, sotaikhoan, tentaikhoan, tennganhang, tenchinhanh, quantri)  VALUES ('".md5($matkhau)."','".$hoten."','".$email."','".$sotaikhoan."','".$tentaikhoan."','".$nganhang."','".$chinhanh."',".$quantri.")";

//$db->executeNonQuery($sql);
$them=mysqli_query($con,$sql);
}
else{
$them='';
echo ('<p align="center">Trùng email!</p>');
}
// if(query($sql)===true)
// {
//     require "home.html";
// }
mysqli_close($con);
if($them)
{
$_SESSION["start"]=$email;
    header("location:home.php");
    
}

        }
   
    }
     
     ?>
<body align="center">
    

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Đăng Ký</h4></div>

                <div class="panel-body">
                    <form id="registerForm" class="form-horizontal" method="POST" action="#">
                        <input type="hidden" name="_token" value="VYxnjNdxC9ZXEAD8bIoMuyBXmEx6CShXcVHw2OcR">
                        <h4>Thông tin đăng nhập</h4>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Họ và tên</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="" placeholder="Nhập Họ và tên" required >

                                                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Địa chỉ Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" placeholder="Nhập địa chỉ Email" required>

                                                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Mật khẩu</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Nhập Mật khẩu, vui lòng chọn mật khẩu khác với mật khẩu email facebook" required>

                                                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Xác nhận mật khẩu</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Nhập lại Mật khẩu" required>
                            </div>
                        </div>

                        <hr/>

                        <h4>Thông tin thanh toán</h4>
                        <div class="form-group">
                            <label for="bank_account_number" class="col-md-4 control-label">Số tài khoản</label>

                            <div class="col-md-6">
                                <input id="bank_account_number" type="text" class="form-control" name="bank_account_number" value="" placeholder="Nhập Số tài khoản" required >

                                                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bank_owner" class="col-md-4 control-label">Tên chủ tài khoản</label>

                            <div class="col-md-6">
                                <input id="bank_owner" type="text" class="form-control" name="bank_owner" value="" placeholder="Nhập Tên chủ tài khoản" required >

                                                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bank_name" class="col-md-4 control-label">Ngân hàng</label>

                            <div class="col-md-6">
                                <select class="form-control" name="bank_name" id="bank_name">
                                    <option>Chọn tên ngân hàng</option>
                                    <option value="ACB">ACB</option>
                                    <option value="Agribank">Agribank</option>
                                    <option value="DongABank">DongABank</option>
                                    <option value="TechcomBank">TechcomBank</option>
                                    <option value="Vietcombank">Vietcombank</option>
                                    <option value="Vietinbank">Vietinbank</option>
                                </select>

                                                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bank_branch" class="col-md-4 control-label">Chi nhánh ngân hàng</label>

                            <div class="col-md-6">
                                <input id="bank_branch" type="text" class="form-control" name="bank_branch" value="" placeholder="Nhập Tên chi nhánh ngân hàng" required >

                                                            </div>
                        </div>

                        <hr/>                      

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <br><input class="btn btn-lg btn-success btn-block" type="submit" name="dangky" value="Đăng ký"></a>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</body>
</html>