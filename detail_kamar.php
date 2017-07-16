<div class="container">
<div class="col-lg-6">
        <h3>Detail Kamar</h3>
        <hr>
    </div>
                <?php
                //menampilkan kostan
                $id_brg = mysqli_real_escape_string($link,$_GET['id']);            
                $query  = "SELECT * FROM kostan,user_member WHERE id = '$id_brg' AND member_id = pemilik";
                $res    = mysqli_query($link, $query);

                $no=0;
                while($data_kosan=mysqli_fetch_array($res))
                {
            ?>

    <div class="col-lg-10 col-sm-10">
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
                                <div class="well">
                                    <p><center><h5>Data Kosan</h5></center></p>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td><span class="glyphicon glyphicon-user"></span> Nama Pemilik </td>
                                            <td> : <?php echo $data_kosan['member_username'];?></td>
                                        </tr>
                                        <tr>
                                            <td><span class="glyphicon glyphicon-heart-empty"></span> Region </td>
                                            <td> : <?php echo $data_kosan['kota'];?></td>
                                        </tr>
                                        <tr>
                                            <td><span class="glyphicon glyphicon-gift"></span> Alamat </td>
                                            <td> : <?php echo $data_kosan['alamat'];?></td>
                                        </tr>
                                        <tr>
                                            <td><span class="glyphicon glyphicon-map-marker"></span> Harga </td>
                                            <td> : Rp. <?php echo number_format($data_kosan['harga']);?></td>
                                        </tr>                                    
                                    </tbody>
                                </table>
                                </div>
                        </div>
                        <div class="tab-pane" id="detail">
                            <div class="well">
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
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="width: 450px;background-color: #48F3DB;color: #6150C1">
                        <span class="glyphicon glyphicon-shopping-cart"></span><strong> Minat? Hubungi Pemilik</strong>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="width: 450px;background-color: #48F3DB;color: #6150C1">
                            <li><span class="glyphicon glyphicon-earphone"></span> Telp. : <?php echo $data_kosan['member_tlp'];?></li>
                            <li><span class="glyphicon glyphicon-envelope"></span> Email : <?php echo $data_kosan['member_email'];?></li>
                        </ul>
                    </center>
                </div> 
            </div>
        </div>
              <?php
             }
            ?>
</div>
<br><br>