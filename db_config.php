<?php

	//config ID
	$host="localhost";
	$username="root";
	$password="";
	$database="id2241836_db_kosan";

	//koneksi
	$link = mysqli_connect($host, $username, $password, $database);
	
	if(!$link){
		die('Tidak Bisa Melakukan Koneksi :'.mysqli_error());
	}


?>