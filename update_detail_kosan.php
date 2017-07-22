<?php
                $kostan_id  = mysqli_real_escape_string($link,$_GET['id']);            
                $query      = "SELECT * FROM kostan WHERE id = '$kostan_id'";
                $res        = mysqli_query($link, $query);

                $no=0;
                while($update=mysqli_fetch_array($res))
                {
?>

<div class="container">
  <h3 class="colwell">Update Data Kostan</h3>
      <div class="col-lg-10 well">
      <form action="update_detail_query.php" method="POST">
          <div class="row">
            <div class="form-group col-sm-6">
                <label>Kota</label>
                    <input type="hidden" name="id"  class="form-control" value="<?php echo $update['id']; ?>" />
                    <input type="text" name="kota"  class="form-control" value="<?php echo $update['kota']; ?>"/>
            </div>
          </div> 

          <div class="form-group">
            <label for="Alamat">Alamat</label>
            <input type="text" name="alamat" value="<?php echo $update['alamat']; ?>" rows="3" class="form-control" required/>
          </div>

          <div class="form-group">
            <label for="Alamat">Fasilitas</label>
            <input type="text" name="fasilitas" value="<?php echo $update['fasilitas']; ?>" rows="3" class="form-control" required/>
          </div>
          
          <div class="form-group">
            <label for="Alamat">Harga</label>
          <input type="text" name="harga" value="<?php echo $update['harga']; ?>" rows="3" class="form-control" required/>
          </div>
                    
          <div>
            <br>
            <input type="submit" name="submit_update" value="Update" class="btn btn-success">
          </div>
      </form>
    </div>
  </div>
<?php } ?>