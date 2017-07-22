<?php
                $admin_id  = mysqli_real_escape_string($link,$_GET['id']);            
                $query      = "SELECT * FROM user_admin WHERE admin_id = '$admin_id'";
                $res        = mysqli_query($link, $query);

                $no=0;
                while($update=mysqli_fetch_array($res))
                {
?>

<div class="container">
  <h3 class="colwell">Update Data Diri</h3>
      <div class="col-lg-10 well">
      <form action="update_profil_admin_query.php" method="POST">
          <div class="row">
            <div class="form-group col-sm-6">
                <label>Nama Lengkap</label>
                    <input type="hidden" name="admin_id"  class="form-control" value="<?php echo $update['admin_id']; ?>" />
                    <input type="text" name="admin_nama"  class="form-control" value="<?php echo $update['admin_nama']; ?>"/>
            </div>
          </div> 

           <div class="row">
              <div class="form-group col-sm-3">
                <label for="Username">Username</label>
                    <input type="text" name="admin_username"  class="form-control" value="<?php echo $update['admin_username']; ?>"/>
              </div>    
          </div>
               
           <div class="row">
              <div class="form-group col-sm-3">
                <label for="Username">Username</label>
              <input type="email" name="admin_email"  class="form-control" value="<?php echo $update['admin_email']; ?>" required/>
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