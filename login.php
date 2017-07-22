<br>
    <div class="container" >
    <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<script type='text/javascript'>alert('Login Gagal! Username atau Password Salah ')</script>";
            }
        }
    ?>    
        <form action="login_query.php" method="post">
            <div class="col-md-5 well">
                <h4>Login ..</h4>
                <br>
                
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1">
                        <span class="glyphicon glyphicon-user"> </span>
                    </span>
                    <input type="text" class="form-control" placeholder="Masukkan Username Anda" name="username" aria-describedby="sizing-addon5" required>
                </div>
                
                <br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1">
                        <span class="glyphicon glyphicon-lock"> </span>
                    </span>
                    <input type="password" class="form-control" placeholder="Masukkan Password Anda" name="password" aria-describedby="sizing-addon2" required>
                </div>

                <br>
                <div class="input-group input-group-lg">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <hr>
                <h5><a href="index.php?menu=lupa_password&action=tampil"> Lupa Password...?</a></h5>
            </div>
        </form>
    </div>