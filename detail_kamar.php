                <?php
                //notice ketika update detail
                if(isset($_GET['pesan'])){
                    if($_GET['pesan'] == "update"){
                        echo "<script type='text/javascript'>alert('Update Berhasil! ')</script>";
                    }
                }

                //menampilkan kostan
                $id_brg = mysqli_real_escape_string($link,$_GET['id']);            
                $query  = "SELECT * FROM kostan,user_member WHERE id = '$id_brg' AND member_id = pemilik";
                $res    = mysqli_query($link, $query);

                $no=0;
                while($data_kosan=mysqli_fetch_array($res))
                {
            ?>

<div class="container">
    <div class="col-sm-3">
        <h3>Detail Kostan
            <a href="index.php?menu=detail&action=delete&id=<?php echo $data_kosan['id'];?>&idm=<?php echo $data_kosan['member_id'];?>" class="btn btn-primary btn-product" style="background-color: red" onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')">
            <span class="glyphicon glyphicon-plus-sign"></span><b> Hapus Kostan </b></a>
        </h3>
    </div>
        <div class="col-md-10">
        <hr>
    <div class="col-lg-12 col-sm-12">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div>
                    <img src="http://placehold.it/650x450&text=Galaxy S5" class="product-loader" style="display: none;">
                    <span class="thumbnail" style="position: relative; overflow: hidden;">
                        <img src="http://placehold.it/650x450&text=Galaxy S5">
                    </span>
                </div>
                <div class="col-xs-3">
                    <a href="" class="thumbnail">
                        <img src="http://placehold.it/650x450&text=Galaxy S5">
                    </a>
                </div>
                <div class="col-xs-3">
                    <a href="" class="thumbnail">
                        <img src="http://placehold.it/650x450&text=Galaxy S5">
                    </a>
                </div>
                <div class="col-xs-3">
                    <a href="" class="thumbnail">
                        <img src="http://placehold.it/650x450&text=Galaxy S5">
                    </a>
                </div>
                <div class="col-xs-3">
                    <a href="" class="thumbnail">
                        <img src="http://placehold.it/650x450&text=Galaxy S5">
                    </a>
                </div>
            </div> 

            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="clearfix"></div>
                <div class="col-xs-12 product-detail-tab">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active" style="padding-right: 2px;"><a href="#desc" data-toggle="tab">Deskripsi</a></li>
                        <li><a href="#detail" data-toggle="tab">Fasilitas</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="desc">
                                <div class="well" style="width: 108%">
                                    <p><center><h5>Data Kosan</h5></center></p>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td><span class="glyphicon glyphicon-user"></span> Nama Pemilik </td>
                                            <td> : <?php echo $data_kosan['member_nama'];?></td>
                                        </tr>
                                        <tr>
                                            <td><span class="glyphicon glyphicon-map-marker"></span> Kota </td>
                                            <td> : <?php echo $data_kosan['kota'];?></td>
                                        </tr>
                                        <tr>
                                            <td><span class="glyphicon glyphicon-map-marker"></span> Alamat </td>
                                            <td> : <?php echo $data_kosan['alamat'];?></td>
                                        </tr>
                                        <tr>
                                            <td><span class="glyphicon glyphicon-tags"></span> Harga </td>
                                            <td> : Rp. <?php echo number_format($data_kosan['harga']);?></td>
                                        </tr>                                    
                                    </tbody>
                                </table>
                                </div>
                        </div>
                        <div class="tab-pane" id="detail">
                            <div class="well" style="width: 108%">
                                    <p><center><h5>Fasilitas yang tersedia</h5></center></p>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td><?php echo $data_kosan['fasilitas'];?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
                    <center>
                    <div>
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="width: 105%;background-color: #48F3DB;color: #6150C1">
                        <span class="glyphicon glyphicon-shopping-cart"></span><strong> Minat? Hubungi Pemilik</strong>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="width:100%;background-color:#48F3DB;color:#6150C1;margin-left:10px;">
                            <li><span class="glyphicon glyphicon-earphone"></span> Telp. : <?php echo $data_kosan['member_tlp'];?></li>
                            <li><span class="glyphicon glyphicon-envelope"></span> Email : <?php echo $data_kosan['member_email'];?></li>
                        </ul>
                    </div>
                    </center>
                    <?php 
                        if (!empty($_SESSION['member_username'])) 
                        {
                    ?>
                    <a href="index.php?menu=detail&action=update&id=<?php echo $data_kosan['id'];?>">
                        <button  style="width: 105%;margin-top:10px;margin-bottom:10px;" class="btn btn-info col-md-12">
                        <span class="glyphicon glyphicon-edit"></span>  Update Data Kosan 
                        </button>
                    </a>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
              <?php
             }
            ?>            
    </div>
</div>
<br><br>