<?php
	session_start();
  	include "config.php";


	$kostan_id=$_GET['id'];
	$member_id= $_GET['idm'];
	$delete=mysqli_query($link,"DELETE FROM kostan WHERE id='$kostan_id'");
	
	header('location:index.php?menu=kosan&action=tampil&id='.$member_id.'&pesan=delete');
?>
