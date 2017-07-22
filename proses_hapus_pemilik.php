<?php
  include "config.php";

	$member_id=$_GET['id'];
	$delete=mysqli_query($link,"DELETE FROM user_member WHERE member_id='$member_id'");
	
	header('location:index.php?menu=member&action=tampil&pesan=delete');
?>
