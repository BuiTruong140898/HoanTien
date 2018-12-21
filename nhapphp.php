<!DOCTYPE html>
<html>
<body>

<?php

if(isset($_POST['aaa'])){
	header('location:home.php');
}
?>
<form method="post" action="#">
	<input type="submit" name="aaa" value="xxx">;
</form>
</body>
</html>