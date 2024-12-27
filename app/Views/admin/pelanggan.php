<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Pelanggan</h2>
<div class="mb-5">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">No Hp</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Dewi Rahayu</td>
                <td>083172556470</td>
                <td>Ks Pudak</td>
                <td>
                    <a href="<?= base_url('admin/pelanggan/hapus')?>" class="btn 
                    btn-danger">hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?= $this->endSection();?>