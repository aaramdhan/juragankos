<?php
	session_start();
	include "db_config.php";
	
	$member_id		 		= $_POST['member_id'];
	$member_nama 	 		= $_POST['member_nama'];
	$member_username 		= $_POST['member_username'];
	$member_jk 		 		= $_POST['member_jk'];
	$member_tempat_lahir	= $_POST['member_tempat_lahir'];
	$member_tglahir			= $_POST['member_tglahir'];
	$member_alamat 	 		= $_POST['member_alamat'];
	$member_tlp 			= $_POST['member_tlp'];
	$member_email 	 		= $_POST['member_email'];
	
	$update=mysqli_query($link,"UPDATE user_member SET 
						member_nama 		= '$member_nama',
						member_username		= '$member_username',
						member_jk 			= '$member_jk',
						member_tempat_lahir = '$member_tempat_lahir', 
						member_tglahir 		= '$member_tglahir',
						member_alamat 		= '$member_alamat',
						member_tlp 			= '$member_tlp',
						member_email 		= '$member_email'
						WHERE member_id 	= '$member_id'");
	mysqli_query($link,$update);
	$_SESSION['member_username']=$member_username;
	header('location:index.php?menu=pemilik&action=tampil&pesan=update');

?>