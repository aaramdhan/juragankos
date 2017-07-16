<?php
  $query = 'SELECT member_id from user_member group by member_id desc limit 1';
  $result = mysqli_query($link,$query); 
?>

<div class="container">
  <h3 class="colwell">Data Pendaftaran</h3>
      <div class="col-lg-12 well">

      <form action="signup_query.php" method="POST">

          <div class="row">
            <div class="form-group col-sm-6">
                <label>Nama Lengkap</label>
                <input type="text" name="member_nama" placeholder="Masukan Nama Lengkap anda.." class="form-control" required/>
                <input type="hidden" name="member_id" type="text" class="form-control" value="<?php echo $result->fetch_object()->member_id+1;?>"/>
            </div>
          </div> 

           <div class="row">
              <div class="form-group col-sm-3">
                <label for="Username">Username</label>
                <input type="text" name="member_username"  class="form-control" maxlength="15" placeholder="Username" required/>
              </div>    
              
            <div class="form-group col-sm-3"> 
              <label>Password</label>
              <input type="password" name="member_password" class="form-control" placeholder=" ******** " required/>
            </div>  
          
          </div> 

          <div class="row">

            <div class="form-group col-sm-2">
              <label for="Tempat Lahir">Tempat Lahir</label>
              <input type="Text" name="member_tempat_lahir"  class="form-control" placeholder="Tempat Lahir" required/>
            </div>


            <div class="form-group col-sm-3">
              <label for="Tanggal Lahir">Tanggal Lahir</label>
              <input type="date" name="member_tglahir"  class="form-control" placeholder="Tanggal Lahir" required/>
            </div>

          </div>    

          <div class="form-group">
            <label for="Jenis Kelamin">Jenis Kelamin</label>
              <br>
              <input type="radio" name="member_jk" value="L" checked="checked"/> Laki-Laki
              <input type="radio" name="member_jk" value="P" /> Perempuan
          </div>

          <div class="form-group">
            <label for="Alamat">Alamat</label>
            <input type="text" name="member_alamat" placeholder="Masukan Alamat anda.." rows="3" class="form-control" required/>
          </div>
          
          <div class="row">

            <div class="form-group col-sm-3">
              <label for="No Telephone/Handphone">No Telephone/Handphone</label>
              <input type="text" name="member_tlp"  class="form-control" maxlength="13" placeholder="08xxxxxxxxxx" required/>
            </div>
               
            <div class="form-group col-sm-3">
              <label for="Email">Email</label>
              <input type="email" name="member_email"  class="form-control" placeholder="e.g juragankosan@domain.com" required/>
            </div>

          </div>
          <div>
            <br>
            <input type="submit" name="submit_daftar" value="Daftar" class="btn btn-success">
          </div>
      </form>
    </div>
  </div>