<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Koleksi Produk</h2>
<?php if(session('sukses')):?>
<div class="mb3">
    <div class="alert alert-success">
        <strong>Berhasil</strong> <?php session('sukses');?>
    </div>
</div>
<?php endif;?>

<?php if(session('error')):?>
<div class="mb3">
    <div class="alert alert-success">
        <strong>Gagal!</strong> <?php session('error');?>
    </div>
</div>
<?php endif;?>


<div class="">
    <a href="<?= base_url('admin/koleksi-produk/tambah')?>" class="btn 
    btn-primary">Tambah Produk</a>
</div>
<div class="mb-5">
    <table class="table table-stripped">
        <head>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Brand</th>
                <th scope="col">Kategori</th>
                <th scope="col">Katalog</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
            <thead>
                <tbody>
                    <?php foreach($products as $produk): ?>
                    <tr>
                        <th scope="row"><?= $produk['id_produk']?></th>
                        <td><?= $produk['nama_produk']?></td>
                        <td><?= $produk['brand']?></td>
                        <td><?= $produk['kategori']?></td>
                        <td>
                            <img src="<?= base_url('file-images/') . $produk['katalog']?>" alt="" style="width: 150px
                            ; height:auto;">
                        </td>
                        <td>
                             <?= $produk['harga']?>
                        </td>
                        <td>
                            <a href="<?= base_url('admin/koleksi-produk/edit') .  $produk['id_produk']?>" class="btn
                            btn-success">Edit</a>
                            <a href="<?= base_url('admin/koleksi-produk/hapus') .  $produk['id_produk']?>" class="btn
                            btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </thead>
        </head>
    </table>
</div>

<?= $this->endSection();?>