<?php
	include "db_config.php";
	
	$member_id = $_POST['member_id'];
	$member_nama = $_POST['member_nama']; 
	$member_username = $_POST['member_username']; 
	$member_password = md5($_POST['member_password']);	
	$member_tempat_lahir = $_POST['member_tempat_lahir']; 
	$member_tglahir = $_POST['member_tglahir'];
	$member_jk = $_POST['member_jk']; 
	$member_alamat = $_POST['member_alamat']; 
	$member_tlp = $_POST['member_tlp']; 
	$member_email = $_POST['member_email'];

	$query = "INSERT INTO user_member (member_id, member_nama, member_username, member_password, member_tempat_lahir, member_tglahir, member_jk, member_alamat, member_tlp, member_email) VALUES ( '$member_id','$member_nama', '$member_username', '$member_password', '$member_tempat_lahir', '$member_tglahir', '$member_jk', '$member_alamat', '$member_tlp', '$member_email')";
	mysqli_query($link,$query);
	header('location:index.php?pesan=daftar');

?>