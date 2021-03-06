<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar_petani'); ?>

<div class="container-fluid" style="background-color:#ffffff; padding-top:80px;">
    <div class=" row">
        <div class="col-2">
        </div>
        <div class="col-8">
        <?php foreach ($detailPeng as $key ): ?>

            <div class="card" style="border-radius: 10px;">
                <div class="row" style="padding: 10px;">
                    <div class="col-2"><a href="<?= site_url('petani/statPenghasilan/'.$key->id_produk); ?>" class="btn btn-danger">Kembali</a></div>
                    <div class="col-10">
                        <p style="font-size: 20px; font-weight: bold; color:#264E36;">
                            DETAIL PENGHASILAN ANDA
                        </p>
                    </div>
                </div>
                <div class="card-body table-responsive" style="height: 410px;padding:0px;">
                    <table class="table table-head-fixed text-nowrap">
                    <!-- <?php print_r($detailPeng); ?> -->

                        <tbody>
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-6">
                                            <h5><b>Kode Pemasukan</b></h5>
                                            <h6><?= $key->id_pemasukan; ?></h6>
                                        </div>
                                        <div class="col-6" align="right">
                                            <h5><b>Tanggal Pemasukan</b></h5>
                                            <h6><?php  $date = substr($key->tanggal_pemasukan,0,10);
                                            echo $date; ?></h6>
                                        </div>
                                        <div class="col-1">
                                            <img class="imgPesan" src="<?= base_url('assets/img/pisang.jpeg'); ?>" alt="" width="80px" style="border-radius: 5px;">
                                        </div>
                                        <div class="col-6" style="padding-left:25px;">
                                            <p>Nama Produk <?= $key->tanggal_pemasukan; ?></p>
                                            <p>Rp. <?= $key->harga_produk; ?></p>
                                            <p>Kuantiti <?= $key->kuantiti_pembelian; ?></p>
                                        </div>
                                        <div class="col-5" align="right">
                                            <p>Tanggal Panen <?php $date = substr($key->tanggal_pemasukan,0,10);
                                            ?></p>
                                            <p><?php echo $date; ?></p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><b>Rincian</b></h5>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Harga Barang</p>
                                            <p>Total Pembelian</p>
                                            <p>Category Barang</p>
                                            <p>PPN</p>
                                            <p>Kode Transaksi</p>
                                            <p>Metode Transaksi</p>
                                            <p>Nama Pembeli</p>
                                            <p>Tanggal Pembelian</p>
                                            <p>Biaya Operasional</p>
                                        </div>
                                        <div class="col-6" align="right">
                                            <p>Rp. <?= $key->harga_produk; ?></p>
                                            <p><?= $key->kuantiti_pembelian; ?></p>
                                            <p><?= $key->name_kategori; ?></p>
                                            <p><?= $key->PPN; ?>%</p>
                                            <p><?= $key->id_transaksi; ?></p>
                                            <p> <?= $key->metode_transaksi; ?></p>
                                            <p>Nama Pembeli  Nama Pembeli</p>
                                            <p><?php 
                                                $date = substr($key->tanggal_pembelian,0,10);
                                                echo $date; ?></p>
                                            <p></p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-6">
                                            <h5><b>Total Penghasilan</b></h5>
                                            <!-- <p>Nama Petani (Regular) xxx</p> -->
                                        </div>
                                        <div class="col-6" align="right">
                                            <h5><b>Rp. <?= ($key->harga_produk*$key->kuantiti_pembelian)-($key->harga_produk*($key->PPN/100)); ?></b></h5>
                                            <!-- <p>Tanggal Panen xxx</p> -->
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach ?>
                    </table>
                </div>
            </div>
            <center style="font-size:14px;padding:10px;">
                <p style="color:#264E36;"><b>&copy; 2020.</b> <img src=" <?= base_url('assets/img/logo/text_eden_logo.png'); ?>" alt="" class="img-fluid" width="100px" style="margin-top:-3px;"></p>
            </center>
        </div>
    </div>
    <?php $this->load->view('layout/footer'); ?>