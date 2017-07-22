	<div class="container">
	<div class="col-lg-6">
        <h3>Daftar Member</h3>
    </div>
		<div class="col-md-12">
		<hr>
			<?php
                if(isset($_GET['pesan'])){
                	if($_GET['pesan'] == "delete"){
                    	echo "<script type='text/javascript'>alert('Kostan Berhasil Dihapus! ')</script>";
                	}
            	}
				//menampilkan Member
				if(isset($_GET['cari'])){
					$cari=mysqli_real_escape_string($link,$_GET['cari']);
					$query="SELECT * FROM user_member WHERE  member_id LIKE '%$cari%' OR
														   member_nama LIKE '%$cari%' OR
													   member_username LIKE '%$cari%' OR
													     member_alamat LIKE '%$cari%'";
				}else{
					$query="SELECT * FROM user_member";
				}

				$no 			  = 0;
				$res 			  = mysqli_query($link, $query);

				if(empty($data_member=mysqli_fetch_array($res)))
				{
			?>
				<center>
        			<h3>Data Tidak Ditemukan T_T </h3>
        		</center>
    		<?php
				}

				while($data_member=mysqli_fetch_array($res))
				{
			?>
		    <div class="col-sm-4 col-md-4">
				<div class="thumbnail" >
					<h4 class="text-center"><span class="label label-info"><?php echo $data_member['member_username']; ?></span></h4>
		          	<?php
        		    	echo "<img src='img/foto_member/".$data_member['member_foto']."' class='img-responsive'>"; 
          			?>        
					<div class="caption">
						<div class="row">
							<div class="col-md-12">
								<h3><label><?php echo $data_member['member_nama'];?></label></h3>
							</div>
						</div>
						<p><?php echo $data_member['member_alamat']; ?></p>
						<div class="row">
							<div class="col-md-12">
								<a href="index.php?menu=pemilik&action=tampil&id=<?php echo $data_member['member_id'] ?>" class="btn btn-primary btn-product">
								<span class="glyphicon glyphicon-thumbs-up"></span> Lihat Detail Member
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
