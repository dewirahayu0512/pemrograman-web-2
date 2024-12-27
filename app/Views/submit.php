<?= $this->extend('template') ?>

<?= $this->section('main') ?>

<div class="container">
    <div class="py-5">
        <div class="alert alert-success">
            <strong>BERHASIL</strong> ORDER ANDA AKAN SEGERA DI PROSES
        </div>
        <div class="mt-5">
            <a href="<?= base_url() ?>" class="btn
            btn-secondary">Kembali Berbelanja</a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>