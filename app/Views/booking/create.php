<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="p-4">
    <form action="/storeBookingUser" method="POST">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                    <input
                        type="hidden"
                        class="form-control"
                        id="npm"
                        name="username"
                        value="<?= session()->get('username') ?>">
                    <div class="form-group">
                        <label for="npm">Nama</label>
                        <input type="text" class="form-control mt-1" id="npm" name="nama">
                    </div>
                </div>
                <div class="icon-box mt-3" data-aos="zoom-in" data-aos-delay="150">
                    <div class="form-group">
                        <label for="npm">Alamat</label>
                        <input type="text" class="form-control mt-1" id="npm" name="alamat">
                    </div>
                </div>
                <div class="icon-box mt-3" data-aos="zoom-in" data-aos-delay="150">
                    <div class="form-group">
                        <label for="npm">kontak</label>
                        <input type="text" class="form-control mt-1" id="npm" name="kontak">
                    </div>
                </div>
                <div class="icon-box mt-3" data-aos="zoom-in" data-aos-delay="150">
                    <div class="form-group">
                        <label for="">Nama Cafe</label>
                        <select name="id_data" id="" class="form-control mt-1" required="required">
                            <option value="" hidden="hidden"></option>
                            <?php foreach ($data as $key => $value) : ?>
                            <option value="<?= $value->id ?>">
                                <?= $value->nama_cafe ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="icon-box mt-3" data-aos="zoom-in" data-aos-delay="150">
                    <div class="form-group">
                        <label for="">Meja</label>
                        <select name="id_meja" id="" class="form-control mt-1" required="required">
                            <option value="" hidden="hidden"></option>
                            <?php foreach ($meja as $key => $value) : ?>
                            <option value="<?= $value->id_meja ?>">
                                <?= $value->jenis_meja ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
                    <div class="form-group">
                        <label for="npm">deskripsi</label>
                        <textarea
                            type="text"
                            name="deskripsi"
                            id="deskripsi"
                            class="form-control mt-1"
                            style="height:200px ;"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mt-3">Submit</button>
    </form>
</div>
<?= $this->endSection() ?>