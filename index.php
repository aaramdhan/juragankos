<?php
	session_start();
	include "db_config.php";
?>
<html>
<head>
	<title>Juragan Kos</title>
  	<!--CSS-->
  	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<link href="css/style.css" rel="stylesheet">
	<!--/-->

	<!--JS-->
  	<script src="js/jquery.js"></script>
  	<script src="js/bootstrap.js"></script>
	<!--/-->
</head>

<body>
	<?php 
	    if(isset($_GET['pesan'])){
	        if($_GET['pesan'] == "daftar"){
	        	echo "<script type='text/javascript'>alert('Selamat Anda telah bergabung bersama Kami Silahkan Lakukan Login ')</script>";
	        }
	    }
	?>    

   	<!-- Jika tidak login -->
	<?php
        if(empty($_SESSION['member_username'])) {
    ?>
	<nav class="navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<a class="navbar-brand" href="index.php">JuraganKos</a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="menuItem"><a href="index.php?menu=listkamar&action=tampil">List Kosan</a></li>
					<li class="menuItem"><a href="index.php?menu=daftar&action=tampil">Register</a></li>
					<li class="menuItem"><a href="index.php?menu=masuk&action=tampil">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!--/-->

	<!-- Jika Member Login -->
	<?php
		}else 
		if(!empty($_SESSION['member_username']))
           {
            	$member_username = $_SESSION['member_username'];
                $query_validasi = mysqli_query($link,"SELECT * FROM user_member WHERE member_username = '$member_username'");
                $fetch = mysqli_fetch_assoc($query_validasi);
                extract($fetch);
                $member_nama = $fetch['member_username'];
                $member_id	 = $fetch['member_id']
    ?>
    <nav class="navbar-default" role="navigation">
		<div class="container">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a class="navbar-brand" href="index.php">JuraganKos</a>
			</div>

			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">				
					<li class="menuItem"><a href="index.php?menu=listkamar&action=tampil">List Kosan</a></li>	            
                	<li class="dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    		<i class="fa fa-user-times fa-fw"></i>
	                  		<?php echo ucwords($member_username); ?>
	                  		<span class="glyphicon glyphicon-user"></span>
                    	</a>
               			<ul class="dropdown-menu">
                			<li>
                    	    	<a href="logout.php">
                    			<i class="fa fa-sign-out fa-fw"></i>
                        		Logout
                        		</a>
                   			</li>
                    		<li>
                        		<a href="">
                        		<i class="fa fa-pencil fa-fw"></i>
                        		???
                        		</a>
                    		</li>
                		</ul>
                	</li>
                </ul>	
			</div>
		</div>
	</nav><br>

	<div class="col-md-2">
		<div class="row"  id="menu"></div>
		<ul class="nav nav-pills nav-stacked">
			<li><a href="index.php?menu=dashboard&action=tampil"><span class="glyphicon glyphicon-home"></span>  Dashboard</a></li>
			<li><a href="index.php?menu=kosan&action=tampil"><span class="glyphicon glyphicon-briefcase"></span>  Data Kosan</a></li>
			<li><a href="index.php?menu=pemilik&action=tampil"><span class="glyphicon glyphicon-briefcase"></span>  Data Pemilik</a></li>		
		</ul>
	</div>
	<!--/-->
	
	<!--Content-->
	<?php
	}
				//----------- TAMPILKAN ------------//
				//index
				if((empty($_GET['menu'])))
				{
					include "dashboard.php";
				}

				//Signup Member
				if((isset($_GET['menu'])) && ($_GET['menu']=="daftar") && (($_GET['action']=="tampil")))
				{
					include "signup.php";
				}

				//Login
				if((isset($_GET['menu'])) && ($_GET['menu']=="masuk") && (($_GET['action']=="tampil")))
				{
					include "login.php";
				}

				//dashboard
				if((isset($_GET['menu'])) && ($_GET['menu']=="dashboard") && (($_GET['action']=="tampil")))
				{
					include "dashboard.php";
				}

				//Data Kosan
				if((isset($_GET['menu'])) && ($_GET['menu']=="kosan") && (($_GET['action']=="tampil")))
				{
					include "kosan.php";
				}

				//Data Pemilik
				if((isset($_GET['menu'])) && ($_GET['menu']=="pemilik") && (($_GET['action']=="tampil")))
				{
					include "pemilik.php";
				}

				//Detail Kamar
				if((isset($_GET['menu'])) && ($_GET['menu']=="detail") && (($_GET['action']=="tampil")) && (($_GET['id'])) )
				{
					include "detail_kamar.php";
				}

				//List Kostan
				if((isset($_GET['menu'])) && ($_GET['menu']=="listkamar") && (($_GET['action']=="tampil")))
				{
					include "listkamar.php";
				}

				//----------- UPDATE ------------//
				//update profil
				if((isset($_GET['menu'])) && ($_GET['menu']=="pemilik") && (($_GET['action']=="update")) && (($_GET['id'])) )
				{
					include "update_profil.php";
				}

	?>
	<!--/-->

	<!-- Footer -->
	<div class="footer">
        <div class="container">
            <div class="footer-left">
                <ul>
                    <li><a href="index.html"><i>JuraganKosan</i></a><span> |</span></li>
                    <li><p>. <span>0800 (123) 4567 // Tubagus Ismail Raya</span></p></li>
                </ul>
            </div>
            <div class="footer-right">
                <p>Copyright &copy; <?php echo date("Y"); ?> JuraganKos All Right Reserved</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
	<!--/-->

</body>
</html>