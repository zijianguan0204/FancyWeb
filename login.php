<?php
require_once('config.php');

if(isset($_POST['user_name'])){
	$username=$_POST['user_name'];
}else{
	echo 'Username is not set';
}

if(isset($_POST['pass_word'])){
	$password=$_POST['pass_word'];
}else{
	echo 'Password is not set';
}

$sql = "SELECT * From user_account WHERE user_name='$username' AND password='$password'";
$stmt = mysqli_prepare($db_connection, $sql) or die(mysqli_error($db_connection));
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
if(mysqli_stmt_num_rows($stmt)>0)
{
	echo 'Successfully Login!';
}
else
	echo 'Your Username or Password is wrong!';
mysqli_stmt_close($stmt);
?>