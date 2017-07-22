<?php
	session_start();
	include "db_config.php";
	
	$kostan_id		 		= $_POST['id'];
	$kostan_kota 	 		= $_POST['kota'];
	$kostan_alamat 	 		= $_POST['alamat'];
	$kostan_fasilitas  		= $_POST['fasilitas'];
	$kostan_harga 	 		= $_POST['harga'];

	$update=mysqli_query($link,"UPDATE kostan SET 
						kota 		= '$kostan_kota',
						alamat 		= '$kostan_alamat',
						fasilitas 	= '$kostan_fasilitas',
						harga 		= '$kostan_harga'
						WHERE id 	= '$kostan_id'");
	mysqli_query($link,$update);

	header('location:index.php?menu=detail&action=tampil&id='.$kostan_id.'&pesan=update');

?>