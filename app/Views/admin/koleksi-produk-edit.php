<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>
<h2 class="mb-5">Edit Barang</h2>

<div class="w-50">
    <form action="<?= base_url('admin/koleksi-produk/edit/' . $produk['id_produk']); ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        
        <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="<?= esc($produk['nama_produk']); ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" name="brand" id="brand" class="form-control" value="<?= esc($produk['brand']); ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" name="kategori" id="kategori" class="form-control" value="<?= esc($produk['kategori']); ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="katalog" class="form-label">Katalog</label>
            <input type="file" name="katalog" id="katalog" class="form-control">
            <?php if (!empty($produk['katalog'])): ?>
                <small>File saat ini: <?= esc($produk['katalog']); ?></small>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" name="harga" id="harga" class="form-control" value="<?= esc($produk['harga']); ?>" required>
        </div>

        <a href="<?= base_url('admin/koleksi-produk'); ?>" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>

<?= $this->endSection(); ?>