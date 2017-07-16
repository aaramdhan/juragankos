<?php 
session_start();
include 'db_config.php';
$username	=$_POST['username'];
$password   =md5($_POST['password']);

$member=mysqli_query($link,"SELECT * FROM user_member 
					WHERE member_username ='$username' 
					AND   member_password ='$password'");

if(mysqli_num_rows($member)==1){
	$_SESSION['member_username']=$username;
	echo ("<script>location.href='index.php?menu=dashboard&action=tampil';</script>");
}else
{
	header("location:index.php?menu=masuk&action=tampil&pesan=gagal")or die(mysql_error());
}
?>