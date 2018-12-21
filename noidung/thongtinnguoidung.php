<?php 
require 'mysql/conn.php';
$sql= "select * from nguoidung ";
$thongtin=mysqli_query($con, $sql);

$array= array( 'idnguoidung', 'hoten', 'email', 'sotaikhoan', 'tentaikhoan', 'tennganhang', 'tenchinhanh');
$array1= array('Id người dùng', 'Họ tên:', 'Email:', 'Số tài khoản:', 'Tên tài khoản:', 'Tên ngân hàng:', 'Tên chi nhánh:');

//echo($rowthongtin['email']);
//echo($array[1]);
//die();
 ?>
 <!-- /.row -->
           <div class="row">
    <!-- Example DataTables Card-->
    <div class="card w-75">
        <h4><div class="card-header"><i class="fa fa-table"></i> Thông tin khách hàng</h4></div>
        <div class="card-body">
            
            <!-- <form class="form-horizontal" method="GET" action="https://chietkhau.net/user/edit/252"> -->
               
                <div class="form-group">
                   <table class="table table-bordered" id="tblCashback" width="100%" cellspacing="0">
                        <tr>
                	<?php
                	 $i=0;
                	while ( $i<= 6) {
                		
                	?>
<td><?php echo($array1[$i])?></td>
                    <?php 
                    $i++;
                    } ?>
                </tr>
<?php while ($rowsthongtin=mysqli_fetch_array($thongtin)) {

    # code...
 ?>
 <tr>
                   <td><?php echo($rowsthongtin['idnguoidung']) ?> </td>

                   <td><?php echo($rowsthongtin['hoten']) ?> </td>
                   <td><?php echo($rowsthongtin['email']) ?> </td>

                   <td><?php echo($rowsthongtin['sotaikhoan']) ?> </td>

                   <td><?php echo($rowsthongtin['tentaikhoan']) ?> </td>

                   <td><?php echo($rowsthongtin['tennganhang']) ?> </td>
                   <td><?php echo($rowsthongtin['tenchinhanh']) ?> </td>

</tr>
                    <?php 
                    } ?>
                </div>
</div>
</div>
        </div></table>
        <!-- /.row -->