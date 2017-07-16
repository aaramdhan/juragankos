	<div class="container">
	<div class="col-lg-6">
        <h3>Daftar Kostan</h3>
    </div>
		<div class="col-md-10">
		<hr>
			<?php
				//menampilkan kostan

				if(isset($_GET['cari'])){
					$cari=mysqli_real_escape_string($link,$_GET['cari']);
					$query="SELECT * FROM kostan WHERE kota LIKE '%$cari%' OR alamat LIKE '%$cari%' OR harga LIKE '%$cari%' OR fasilitas LIKE '%$cari%'";
				}else{
					$query="SELECT * FROM kostan";
				}

				$no 			  = 0;
				$res 			  = mysqli_query($link, $query);

				if(empty($data_kosan=mysqli_fetch_array($res)))
				{
			?>
				<center>
        			<h3>Data Tidak Ditemukan T_T </h3>
        		</center>
    		<?php
				}

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
								<a href="index.php?menu=detail&action=tampil&id=<?php echo $data_kosan['id'] ?>" class="btn btn-primary btn-product">
								<span class="glyphicon glyphicon-thumbs-up"></span> Lihat Detail 
								</a> 
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
    </div><br><br>
