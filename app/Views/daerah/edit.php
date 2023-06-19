<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="p-4">
    <form action="/storeDaerah" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="gambarLama" value="<?= $data->foto ?>">
        <div class="form-group mb-3">
            <label for="npm">Nama Daerah</label>
            <input type="text" class="form-control" name="nama_daerah">
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">gambar</label>
            <input type="file" class="form-control" name="gambar">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?= $this->endSection() ?>