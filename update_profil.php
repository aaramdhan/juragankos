<?php
                $member_id  = mysqli_real_escape_string($link,$_GET['id']);            
                $query      = "SELECT * FROM user_member WHERE member_id = '$member_id'";
                $res        = mysqli_query($link, $query);

                $no=0;
                while($update=mysqli_fetch_array($res))
                {
?>

<div class="container">
  <h3 class="colwell">Update Data Diri</h3>
      <div class="col-lg-10 well">
      <form action="update_profil_query.php" method="POST">
          <div class="row">
            <div class="form-group col-sm-6">
                <label>Nama Lengkap</label>
                    <input type="hidden" name="member_id"  class="form-control" value="<?php echo $update['member_id']; ?>" />
                    <input type="text" name="member_nama"  class="form-control" value="<?php echo $update['member_nama']; ?>"/>
            </div>
          </div> 

           <div class="row">
              <div class="form-group col-sm-3">
                <label for="Username">Username</label>
                    <input type="text" name="member_username"  class="form-control" value="<?php echo $update['member_username']; ?>"/>
              </div>    
          </div>
          <div class="row">
            <div class="form-group col-sm-2">
              <label for="Tempat Lahir">Tempat Lahir</label>
              <input type="Text" name="member_tempat_lahir"  class="form-control" value="<?php echo $update['member_tempat_lahir']; ?>" required/>
            </div>

            <div class="form-group col-sm-3">
              <label for="Tanggal Lahir">Tanggal Lahir</label>
              <input type="date" name="member_tglahir"  class="form-control" value="<?php echo $update['member_tglahir']; ?>" required/>
            </div>

          </div>    
          <div class="form-group">
            <label for="Jenis Kelamin">Jenis Kelamin</label>
              <br>
                  <?php 
                    if (($update['member_jk'])=='L') {
                      echo "<input type='radio' name='member_jk' value='L' checked/>Laki-Laki ";
                      echo "<input type='radio' name='member_jk' value='P'/> Perempuan";
                    }else
                    {
                      echo "<input type='radio' name='member_jk' value='L'/> Laki-Laki ";
                      echo "<input type='radio' name='member_jk' value='P' checked /> Perempuan";
                    }
                 ?>
          </div>

          <div class="form-group">
            <label for="Alamat">Alamat</label>
            <input type="text" name="member_alamat" value="<?php echo $update['member_alamat']; ?>" rows="3" class="form-control" required/>
          </div>
          
          <div class="row">
            <div class="form-group col-sm-3">
              <label for="No Telephone/Handphone">No Telephone/Handphone</label>
              <input type="text" name="member_tlp"  class="form-control" maxlength="13" value="<?php echo $update['member_tlp']; ?>" required/>
            </div>
               
            <div class="form-group col-sm-5">
              <label for="Email">Email</label>
              <input type="email" name="member_email"  class="form-control" value="<?php echo $update['member_email']; ?>" required/>
            </div>
          </div>
          
          <div>
            <br>
            <input type="submit" name="submit_update" value="Update" class="btn btn-success">
          </div>
      </form>
    </div>
  </div>
<?php } ?>