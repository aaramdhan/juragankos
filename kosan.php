	<div class="container">
	<div class="col-sm-3">
        <h3>Daftar Kostan        
       		<?php
            if (!empty($_SESSION['member_username'])){
        	?>
        		<a href="index.php?menu=kosan&action=tambah" class="btn btn-primary btn-product">
        		<span class="glyphicon glyphicon-plus-sign"></span><b> Tambah Data </b></a>
        	<?php
            }
        	?>
		</h3>
    </div>
		<div class="col-md-10">
		<hr>
			<?php
                //notice ketika update profil
                if(isset($_GET['pesan'])){
                    if($_GET['pesan'] == "tambah"){
                        echo "<script type='text/javascript'>alert('Kostan Berhasil Ditambahkan! ')</script>";
                    }
                    if($_GET['pesan'] == "delete"){
                        echo "<script type='text/javascript'>alert('Kostan Berhasil Dihapus! ')</script>";
                    }
                }

				//menampilkan kostan
                if (!empty($_SESSION['member_username'])){
	                $query 	= "SELECT * FROM kostan WHERE pemilik='$member_id' ";
                }else
                if(!empty($_SESSION['admin_username'])) {
                    $member_id  = mysqli_real_escape_string($link,$_GET['id']);    
                    $query      = "SELECT * FROM kostan WHERE pemilik='$member_id' ";
                }
				
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
			<p> </p>
			</div>
			</div>
			</div>
		</div>
    </div><br><br>