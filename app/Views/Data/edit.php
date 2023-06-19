<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<table class="table">
  <tbody>

    <div class="P-4">
      <div class="row col-6 ms-3 mt-3">
        <form action="/update/<?= $data->id ?>" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="gambarLama" value="<?= $data->foto ?>">
          <div class="form-group mb-3">
            <label for="nama">Nama Cafe</label>
            <input type="text" name="fakhri" class="form-control" id="" value="<?= $data->nama_cafe ?>">
          </div>
          <div class="form-group mb-3">
            <label for="nama">Nama Manager</label>
            <input type="text" name="manager" class="form-control" id="nama_cafe" value="<?= $data->manager ?>">
          </div>
          <div class="form-group mb-3">
            <label for="nohp">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $data->alamat ?>">
          </div>
          <div class="form-group mb-3">
              <label for="">Cabang</label>
              <select name="id_daerah" id="" class="form-control" required>
                <option value="" hidden></option>
                            <?php foreach ($daerah as $key => $value) : ?>
                                <option value="<?= $value->id_daerah ?>" <?= $data->id_daerah == $value->id_daerah ? 'selected' : null ?>> <?= $value->nama_daerah ?> </option>
                            <?php endforeach; ?>
              </select>
            </div>
        <div class="mb-3">
            <label for="foto" class="form-label">foto</label>
            <input type="file" class="form-control" id="foto" name="foto">
            <img style="height:200px ;" src="<?= base_url('gambarCafe/'.$data->foto) ?>" alt="" srcset="">
        </div>
          <div class="form-group mb-3">
            <label for="nohp">Keterangan</label>
            <textarea name="keterangan" class="form-control" id="keterangan" cols="30" rows="8"><?= $data->keterangan ?></textarea>
          </div>
          <button type="submit" class="btn btn-primary mt-2 ms-2" style="width:20% ;">Edit Data</button>
        </form>
      </div>
    </div>

  </tbody>
</table>
<?= $this->endSection() ?>