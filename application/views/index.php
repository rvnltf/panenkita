<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/login_navbar'); ?>

<div class="container-fluid" style="margin-top: 80px;">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <div class="card" style="border-radius: 10px;">
                <div style="width:40%; background-image: url('assets/img/Picture Login.png'); height:400px; margin-top:-1px;">
                    <center>
                        <img src="<?= base_url('assets/img/logo/emblem_white_logo.png') ?>" alt="Panenkita Logo" width="100px" style="padding-top:30px;"><br>
                        <img src="<?= base_url('assets/img/logo/text_white_logo.png') ?>" alt="Panenkita Logo" width="120px" style="padding:0px;">
                    </center>
                    <ul style="color: #ffffff; padding:150px 10px 10px 10px; font-size:12px;">
                        <li>Informasi produk tani Kabupaten Indramayu</li>
                        <li>tempat pengepul hasil petani Kabupaten Indramayu</li>
                        <li>Penjualan hasil tani Kabupaten Indramayu</li>
                    </ul>
                </div>
                <div style="width:60%; height:100%; background-color:#ffffff; position:absolute; left:350px; padding: 30px; border-radius:10px;">

                    <p style="font-size: 16px; font-weight: bold; color:#264E36;">Masuk <img src="<?= base_url('assets/img/logo/text_eden_logo.png') ?>" alt="Panenkita Logo" width="120px" style="margin-top:-2px;"></p>
                    <?php echo $this->session->flashdata('msg'); ?>

                    <form action="<?php echo base_url() ?>index.php/login/auth" method="post">
                        <div class="input-group mb-3">
                            <div class="wrap-input100 validate-input m-t-30 m-b-10" data-validate="Masukan Email">
                                <input class="input100" type="text" name="username">
                                <span class="focus-input100" data-placeholder="Masukan Nama Akun / Email"></span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="wrap-input100 validate-input m-b-20" data-validate="Masukan Password">
                                <input class="input100" type="password" name="password">
                                <span class="focus-input100" data-placeholder="Masukan Password"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <button class="btn-default">
                                    Login
                                </button>
                            </div>
                            <div class="col-4">
                                <p>Atau masuk dengan
                                    <a href="" style="position: absolute; padding-left:10px;">
                                        <img src="<?= base_url('assets/img/fb.png') ?>" alt="" width="30px">
                                    </a>
                                    <a href="" style="position: absolute; padding-left:45px;">
                                        <img src="<?= base_url('assets/img/mail.png') ?>" alt="" width="30px">
                                    </a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<center style="color:#ffffff; font-size:14px;">
    <a href="<?= site_url('Login/regist'); ?>" style="color:#ffffff; font-size:14px; padding-right: 10px;">
        Buat <b>Akun</b>
    </a>
    /
    <a href="#" style="color:#ffffff; font-size:14px; padding-left: 10px;">
        Lupa <b>Password</b>
    </a>
</center>
<center style="font-size:14px;padding-top:70px;">
    <p style="color:#264E36;"><b>&copy; 2020.</b> <img src=" <?= base_url('assets/img/logo/text_eden_logo.png'); ?>" alt="" class="img-fluid" width="100px" style="margin-top:-3px;"></p>
</center>
<?php $this->load->view('layout/footer'); ?>