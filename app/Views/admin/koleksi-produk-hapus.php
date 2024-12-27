<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Produk</title>
</head>
<body>
    <h1>Hapus Produk</h1>
    <p>Apakah anda yakin ingin menghapus produk ini?<strong><?= $products['nama_produk'] ?></strong>?</p>

    <form action="<?= base_url('/admin/koleksi-produk/hapus/' . $products['id_produk']) ?>" method="post">
        <?= csrf_field() ?>
        <button type="submit">Hapus</button>
        <a href="<?= base_url('/admin/koleksi-produk') ?>">Batal</a>
    </form>
</body>
</html>
