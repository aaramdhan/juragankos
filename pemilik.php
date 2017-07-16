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

                //menampilkan Data Pemilik      
                $query  = "SELECT * FROM user_member where member_id = '$member_id' ";
                $res    = mysqli_query($link, $query);

                $no=0;
                while($data_pemilik=mysqli_fetch_array($res))
                {
                    $tgl_lahir = date('d F Y', strtotime($data_pemilik['member_tglahir']))
            ?>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div>
                    <img src="http://placehold.it/650x450&text=Galaxy S5" class="product-loader" style="display: none;">
                    <span class="thumbnail" style="position: relative; overflow: hidden;">
                        <img src="http://placehold.it/650x450&text=Galaxy S5">
                    </span>
                </div>
            </div> 
            
            <div class="col-lg-8 col-md-8 col-sm-8">
                    <!-- Tab panes -->
                       <div class="tab-pane active" id="desc">
                                <div class="well">
                                    <p><center><h5><?php echo $data_pemilik['member_nama']; ?></h5></center></p>
                                    
                                    <table align="center">
                                        <tr>
                                            <td><span class="glyphicon glyphicon-user"></span> Username</td>
                                            <td> : <?php echo $data_pemilik['member_username'];?></td>
                                        </tr>
                                        <tr>
                                            <td><span class="glyphicon glyphicon-heart-empty"></span> Jenis Kelamin</td>
                                            <td> : 
                                            <?php
                                                $jk = $data_pemilik['member_jk'];
                                                if($jk=="L")
                                                {
                                                    echo "Laki-Laki";    
                                                }else
                                                if($jk=="P")
                                                {
                                                    echo "Perempuan";    
                                                }
                                            ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="glyphicon glyphicon-gift"></span> TTL</td>
                                            <td> : <?php echo $data_pemilik['member_tempat_lahir']." , ".$tgl_lahir;?></td>
                                        </tr>
                                        <tr>
                                            <td><span class="glyphicon glyphicon-map-marker"></span> Alamat</td>
                                            <td> : <?php echo $data_pemilik['member_alamat'];?></td>
                                        </tr>
                                        <tr>
                                            <td><span class="glyphicon glyphicon-earphone"></span> Telp.</td>
                                            <td> : <?php echo $data_pemilik['member_tlp'];?></td>
                                        </tr>
                                        <tr>
                                            <td><span class="glyphicon glyphicon-envelope"></span> Email</td>
                                            <td> : <?php echo $data_pemilik['member_email'];?></td>

                                        </tr>
                                    </table> 
                                </div>
                                <div >
                                    <button  style="margin-bottom:10px;" class="btn btn-info col-md-12">
                                        <a href="index.php?menu=pemilik&action=update&id=<?php echo $data_pemilik['member_id'];?>">
                                        <span class="glyphicon glyphicon-edit"></span>  Update Data Diri 
                                        </a>
                                    </button>
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