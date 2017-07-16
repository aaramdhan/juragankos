<?php

date_default_timezone_set('Etc/UTC');
include "db_config.php";
require 'phpmailer/PHPMailerAutoload.php';
include "IDMailer.php";

ob_start();
  $email_cr = ($_POST['member_email']);
  $real_email = mysqli_real_escape_string($link, $email_cr);
  $query  = "SELECT * FROM user_member WHERE BINARY member_email = '$real_email'";
  $login  = mysqli_query($link, $query);
  $ketemu = mysqli_num_rows($login);

  if ($ketemu == 1){
    $cetak     = mysqli_fetch_array($login);
    extract($cetak);
 
    //password baru
    $pass="12345678"; $panjang='8'; $len=strlen($pass);
    $start=$len-$panjang; $xx=rand('0',$start);
    $yy=str_shuffle($pass);
    $passwordbaru=substr($yy, $xx, $panjang);


    $mail->setFrom('juragan.kosan2017@gmail.com', 'Admin Juragan Kosan');
    $mail->addReplyTo('juragan.kosan2017@gmail.com', 'Admin Juragan Kosan');
    $mail->addAddress($real_email);
    $mail->Subject = "Permintaan Password Baru";
    require "message_in_bottle.php";
    $mail->msgHTML($isi_pesan, dirname(__FILE__));
    $mail->AltBody = 'This is a plain-text message body';

    if (!$mail->send()) {
        header("location: lupa_password.php?pesan=email_tidak_terkirim");
    }else{
        $password_ganti = $link->real_escape_string(md5($passwordbaru));
        $query2 = mysqli_query($link, "UPDATE user_member SET member_password = '$password_ganti' WHERE member_email = '$email_cr'");
        if ($query2){
          header("Location: lupa_password.php?pesan=password_terkirim");
        }
    }
  }else{
     header("location: lupa_password.php?pesan=email_tidak_terdaftar");
  }
 ?>