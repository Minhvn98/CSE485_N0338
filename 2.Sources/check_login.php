<?php 
	require 'connect.php';
 ?>

<?php 
	$admin_name = $_POST['admin_name'];
	$password = $_POST['password'];


	$sql="SELECT * FROM `admin` WHERE  admin_name='$admin_name' and password='$password' limit 1";

	$result = mysqli_query($conn, $sql);
	if (@mysqli_num_rows($result) > 0) {
	    header('location:admin.php');
    } else {
    	header('location:login2.html');
}

mysqli_close($conn);
?>