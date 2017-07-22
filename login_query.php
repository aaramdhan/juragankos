<?php 
session_start();
include 'db_config.php';
$username			=$_POST['username'];
$password 			=$_POST['password'];
$password_member   	=md5($_POST['password']);

$admin=mysqli_query($link,"SELECT * FROM user_admin 
					WHERE admin_username ='$username' 
					AND   admin_password ='$password'");

$member=mysqli_query($link,"SELECT * FROM user_member 
					WHERE member_username ='$username' 
					AND   member_password ='$password_member'");

if(mysqli_num_rows($admin)==1){
	$_SESSION['admin_username']=$username;
	header("location:index.php?menu=dashboard&action=tampil&pesan=berhasil");
}else
if(mysqli_num_rows($member)==1){
	$_SESSION['member_username']=$username;
	header("location:index.php?menu=dashboard&action=tampil&pesan=berhasil");
}else
{
	header("location:index.php?menu=masuk&action=tampil&pesan=gagal")or die(mysql_error());
}
?>