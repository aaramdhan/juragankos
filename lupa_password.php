<?php
        $pesan = isset($_GET['pesan']) ? ($_GET['pesan']): '';
        $out = '';
        switch ($pesan) {
          case 'email_tidak_terdaftar':
              $out = '
                <center>
                <p style="color:#a00;padding:5px;border-radius:3px;">
                  <i class="glyphicon glyphicon-remove"></i>&nbsp; <b>ERROR :</b> email tidak terdaftar. 
                </p>
                </center>
              ';
            break;
            case 'email_tidak_terkirim':
              $out = '
                <center>
                <p style="color:#a00;padding:5px;border-radius:3px;">
                  <i class="glyphicon glyphicon-remove"></i>&nbsp; <b>ERROR :</b> email tidak terkirim.
                </p>
                </center>
              ';
            break;
            case 'password_terkirim':
                $out = '
                  <center>
                  <p style="color:green;padding:5px;border-radius:3px;">
                    <i class="glyphicon glyphicon-ok"></i>&nbsp; <b>SUCCESS :</b> Password terkirim ke email anda. cek email anda sekarang.
                  </p>
                  </center>
                ';
              break;
          default:
            $out ='
            <div class="back-notif">
            <p>Silahkan masukkan email Anda untuk reset password, setelah itu Anda akan menerima password baru melalui email Anda.
            </p>
            </div>';
            break;
        }
     ?>

    <br>
    <div class="container" >
            <form action="lupa_password_proses.php" method="post">
                <div class="col-md-5 well">
                    <h4>Lupa Password</h4>
                    <br>
                     <?php echo $out; ?>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" name="member_email" aria-describedby="sizing-addon2" required>
                    </div>

                    <br>
                    <div class="input-group input-group-lg">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                    <hr>
                    <h5><a href="index.php?menu=masuk&action=tampil"> Login</a></h5>
                </div>
            </form>
        </div>
