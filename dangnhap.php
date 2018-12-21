<?php session_start() ?>

<?php

if(isset($_POST['email'])){
    $email=$_POST["email"];
    $matkhau=md5($_POST["password"]);
	
    require "mysql/conn.php";

    $sql="select * from nguoidung where email='".$email."'and matkhau='".$matkhau."'";

    $kiemtra=mysqli_query($con,$sql);
    
    if($row=mysqli_fetch_assoc($kiemtra)){
        
       if($row['quantri']==1){
        $_SESSION['admin']=$email;

    header("location:admin.php");
       }
       else{
       //echo($_SESSION['start']);
       $_SESSION["start"]=$email;
      header("location:home.php");
      //header("location:dangky.php");
      }
    }
}
else{
	header("location:homedangnhap.php");
}
 ?>
