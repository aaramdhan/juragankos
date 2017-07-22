<div class="container">
<div class="col-lg-6">
        <h3>Data Diri</h3>
    </div>
    <div class="col-lg-10 col-sm-10">
    <hr>
            <?php
                //notice ketika update profil
                if(isset($_GET['pesan'])){
                    if($_GET['pesan'] == "update"){
                        echo "<script type='text/javascript'>alert('Update Berhasil! ')</script>";
                    }
                }

                //menampilkan Data admin      
                $query  = "SELECT * FROM user_admin where admin_id = '$admin_id' ";
                $res    = mysqli_query($link, $query);

                $no=0;
                while($data_admin=mysqli_fetch_array($res))
                {
            ?>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
            </div> 
            
            <div class="col-lg-8 col-md-8 col-sm-8">
                    <!-- Tab panes -->
                       <div class="tab-pane active" id="desc">
                                <div class="well">
                                    <p><center><h5><?php echo $data_admin['admin_nama']; ?></h5></center></p>
                                    <table align="center">
                                        <tr>
                                            <td><span class="glyphicon glyphicon-user"></span> Username</td>
                                            <td> : <?php echo $data_admin['admin_username'];?></td>
                                        </tr>
                                        <tr>
                                            <td><span class="glyphicon glyphicon-envelope"></span> Email</td>
                                            <td> : <?php echo $data_admin['admin_email'];?></td>
                                        </tr>
                                    </table> 
                                </div>
                                <div >
                                <a href="index.php?menu=admin&action=update&id=<?php echo $data_admin['admin_id'];?>">
                                    <button  style="margin-bottom:10px;" class="btn btn-info col-md-12">
                                        <span class="glyphicon glyphicon-edit"></span>  Update Data Diri
                                    </button>
                                </a>
                                </div>
                        </div>
                        
                    </div>
                </div> 
            </div>
        </div>
        <?php 
            }
         ?>
  </div>
</div>
<br><br>