<?php
  $query = "SELECT id from kostan group by id desc limit 1";
  $result = mysqli_query($link,$query); 
?>

<div class="container">
  <h3 class="colwell">Tambah Data Kostan</h3>
      <div class="col-lg-10 well">
      <form action="tambah_kosan_query.php" method="POST">
          <div class="row">
            <div class="form-group col-sm-6">
                <label>Kota</label>
                    <input type="hidden" name="id"  class="form-control" value="<?php echo $result->fetch_object()->id+1;?>" />
                    <input type="hidden" name="pemilik"  class="form-control" value="<?php echo $member_id ?>"/>
                    <input type="text" name="kota" placeholder="Kota tempat kostan" class="form-control" required/>
            </div>
          </div> 

          <div class="form-group">
            <label for="Alamat">Alamat</label>
            <input type="text" name="alamat" placeholder="Alamat kostan" rows="3" class="form-control" required/>
          </div>

          <div class="form-group">
            <label for="Alamat">Fasilitas</label>
            <input type="text" name="fasilitas" placeholder="Fasilitas yang tersedia" rows="3" class="form-control" required/>
          </div>
          
          <div class="form-group">
            <label for="Alamat">Harga</label>
          <input type="text" name="harga" placeholder="Harga sewa per bulan" rows="3" class="form-control" required/>
          </div>
                    
          <div>
            <br>
            <input type="submit" name="submit_update" value="Tambah" class="btn btn-success">
          </div>
      </form>
    </div>
  </div>