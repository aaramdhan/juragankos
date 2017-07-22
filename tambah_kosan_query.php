<?php
	include "db_config.php";
	
	$kostan_id		 		= $_POST['id'];
	$kostan_pemilik	 		= $_POST['pemilik'];
	$kostan_kota 	 		= $_POST['kota'];
	$kostan_alamat 	 		= $_POST['alamat'];
	$kostan_fasilitas  		= $_POST['fasilitas'];
	$kostan_harga 	 		= $_POST['harga'];

	$query = "INSERT INTO kostan (id, pemilik, kota, alamat, fasilitas, harga) 
	 		  VALUES ('$kostan_id', '$kostan_pemilik', '$kostan_kota', '$kostan_alamat', '$kostan_fasilitas', '$kostan_harga')";
	mysqli_query($link,$query);

	header('location:index.php?menu=kosan&action=tampil&pesan=tambah');
	
?>