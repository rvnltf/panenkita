<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar'); ?>
<div class="container-fluid">
    <div class="row" style="background-color:white;padding-top: 100px;">

        <div class="col-12">
            <div class="card" style="border-radius: 10px;">

                <div class="card-body table-responsive p-0" style="text-align:center; border-radius: 10px 10px 0px 0px;font-size:12px;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="background: #264E36; color:#ffffff;">No.</th>
                                <th style="background: #264E36; color:#ffffff;">Nama Produk</th>
                                <th style="background: #264E36; color:#ffffff;">Foto</th>
                                <th style="background: #264E36; color:#ffffff;">Kode Transaksi</th>
                                <th style="background: #264E36; color:#ffffff;">Tanggal Transaksi</th>
                                <th style="background: #264E36; color:#ffffff;">Proses</th>
                                <th style="background: #264E36; color:#ffffff;">Kemas</th>
                                <th style="background: #264E36; color:#ffffff;">Kirim</th>
                                <th style="background: #264E36; color:#ffffff;">Terima</th>
                                <th style="background: #264E36; color:#ffffff;">Harga</th>
                                <th style="background: #264E36; color:#ffffff;">Transaksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listtransaksi as $key) : ?>
                                <tr>
                                    <td><?= $key->id_kategori; ?></td>
                                    <td><?= $key->nama_kategori; ?></td>
                                    <td><?= $key->tipe_panen; ?></td>
                                    <td><?= $key->PPN; ?></td>
                                    <td><?= $key->kategori; ?></td>
                                    <td><?= $key->deskripsi; ?></td>
                                    <td>
                                        <!-- <a style="color: blue;" href="<?php echo site_url('Petani/statPenghasilan/') ?>"> ubah</a> |
                                        <a style="color: red;" href="<?php echo site_url('Petani/statPenghasilan/') ?>"> hapus</a> -->
                                        <a style="color: blue;" href="#"> ubah</a> |
                                    </td>
                                </tr>
                            <?php endforeach ?>

                        </tbody>
                    </table>
                </div>

                <div style="color: #ffffff; border-radius: 0px 0px 10px 10px; background-color: #8d9449; padding: 20px 10px 10px 10px; font-size:12px;">
                    <!-- <a style=" border-radius: 2px 2px 2px 2px; font-size:12px; padding: 5px 5px 5px 5px; background-color: #264E36; color: #ffffff;" href="<?= site_url('Admin/tambahkategori'); ?>">Tambah Kategori</a> -->
                </div>
            </div>
            <center style="font-size:14px;padding:10px;">
                <p style="color:#264E36;"><b>&copy; 2020.</b> <img src=" <?= base_url('assets/img/logo/text_eden_logo.png'); ?>" alt="" class="img-fluid" width="100px" style="margin-top:-3px;"></p>
            </center>
        </div>
    </div>
</div>


<?php $this->load->view('layout/footer'); ?>