<?php 
include '../mysql/conn.php';
?>
<?php 
$doitac = $_GET['iddoitac']; settype($doitac, 'int');
$sql = "delete from doitac where iddoitac='$doitac'";
mysqli_query($con, $sql);
header('location: ../admin?hienthi=thongtincacdoitac');
?>