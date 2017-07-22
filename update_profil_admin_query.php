<?php
	session_start();
	include "db_config.php";
	
	$admin_id		 		= $_POST['admin_id'];
	$admin_nama 	 		= $_POST['admin_nama'];
	$admin_username 		= $_POST['admin_username'];
	$admin_email 	 		= $_POST['admin_email'];
	
	$update=mysqli_query($link,"UPDATE user_admin SET 
						admin_nama 			= '$admin_nama',
						admin_username		= '$admin_username',
						admin_email 		= '$admin_email'
						WHERE admin_id 	= '$admin_id'");
	mysqli_query($link,$update);
	$_SESSION['admin_username']=$admin_username;
	header('location:index.php?menu=admin&action=tampil&pesan=update');

?>