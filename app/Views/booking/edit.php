<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<table class="table">
    <tbody>
        <div class="P-4">
            <div class="row col-6 ms-3 mt-3">
                <form action="/updateBooking/<?= $booking->id_booking ?>" method="POST">
                    <div class="form-group mb-3">
                        <label for="npm">Nama</label>
                        <input type="text" class="form-control" id="npm" name="nama" value="<?= $booking->nama ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="npm">Alamat</label>
                        <input type="text" class="form-control" id="npm" name="alamat" value="<?= $booking->alamat ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="npm">kontak</label>
                        <input type="text" class="form-control" id="npm" name="kontak" value="<?= $booking->kontak ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="npm">deskripsi</label>
                        <input type="text" class="form-control" id="npm" name="deskripsi" value="<?= $booking->deskripsi ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Nama Cafe</label>
                        <select name="id_data" id="" class="form-control" required>
                            <option value="" hidden></option>
                            <?php foreach ($data as $key => $value) : ?>
                                <option value="<?= $value->id ?>" <?= $booking->id_data == $value->id ? 'selected' : null ?>> <?= $value->nama_cafe ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 ms-2" style="width:20% ;">Edit Data</button>
                </form>
            </div>
        </div>
    </tbody>
</table>
<?= $this->endSection() ?>