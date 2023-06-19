<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="p-4">
    <form action="/store" method="POST" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label for="npm">Nama Cafe</label>
            <input type="text" class="form-control" id="npm" name="nama_cafe">
        </div>
        <div class="form-group mb-3">
            <label for="npm">Nama Manager</label>
            <input type="text" class="form-control" id="npm" name="manager">
        </div>
        <div class="form-group mb-3">
            <label for="npm">Alamat</label>
            <input type="text" class="form-control" id="npm" name="alamat">
        </div>
        <div class="form-group mb-3">
            <label for="">Daerah</label>
            <select name="id_daerah" id="" class="form-control" required>
                <option value="" hidden></option>
                <?php foreach ($data as $key => $value) : ?>
                    <option value="<?= $value->id_daerah ?>"> <?= $value->nama_daerah ?> </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">foto</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>
        <div class="form-group mb-3">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
        </div>
        <button type="submit" class="btn btn-primary ">Submit</button>
    </form>
</div>

</html>
<?= $this->endSection() ?>