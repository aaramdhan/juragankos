	<!-- Pencarian kos -->
	<div class="container" style="background-image: url('/img/kos1.jpg');">
		<div class="container">
		<form action="cari_act.php" method="get">
		    <center>       
				<ul>
				<li>
						<h3 align="center" style="color: #48F3DB">Cari Kos</h3> <br/>
				</li>
				<li>
				        <input  name="cari" style="width:500px" type="search" class="form-control" placeholder="Cari Berdasarkan Kota, Alamat, atau Harga"><br>
				</li>
				<li>
						<button type="submit" class="btn btn-primary" style="width: 200px">Cari</button>
				</li>
				</ul>
			</center>
		</form>
		</div>
	</div>

	<!-- daftar kos -->
	<div id="kos1" class="daftarkos">
		<div class="container">
	        <div class="row" >
				<div class="col-md-6 col-md-offset-3 text-center wrap_title ">
					<h2>KOS-KOSAN</h2>
					<p class="lead" style="margin-top:0">Cari kos murah dan nyaman</p>
				</div>
			</div>

			<?php
				//menampilkan kostan			
				$query 	= "SELECT * FROM kostan GROUP BY pemilik DESC LIMIT 3";
				$res 	= mysqli_query($link, $query);
				
				$no=0;
				while($data_kosan=mysqli_fetch_array($res))
				{
			?>
		    <div class="col-sm-4 col-md-4">
				<div class="thumbnail" >
					<h4 class="text-center"><span class="label label-info"><?php echo $data_kosan['kota']; ?></span></h4>
					<img src="http://placehold.it/650x450&text=Galaxy S5" class="img-responsive">
					<div class="caption">
						<div class="row">
							<div class="col-md-6 col-xs-6 price">
								<h3><label>Rp. <?php echo number_format($data_kosan['harga'],2,',','.');?></label></h3>
							</div>
						</div>
						<p><?php echo $data_kosan['alamat']; ?></p>
						<div class="row">
							<div class="col-md-12">
								<a href="index.php?menu=detail&action=tampil&id=<?php echo $data_kosan['id'] ?>" class="btn btn-primary btn-product"><span class="glyphicon glyphicon-thumbs-up"></span> Lihat Detail </a> 
							</div>
						</div>
						<p> </p>
					</div>
				</div>
			</div>
			<?php
			}
			?>
        </div>
	</div>
