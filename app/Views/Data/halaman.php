<?= $this->extend('cafePenjelasan') ?>

<?= $this->section('gambar') ?>
<div class="col-lg-8">
    <div class="portfolio-details-slider swiper">
        <div class="align-items-center">

            <div class="swiper-slide">
            <td><img width="150px" class="img-thumbnail" src="<?= base_url() . "/gambarCafe/" . $data->foto; ?>"></td>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('list') ?>
<h3><?= $data->nama_cafe; ?></h3>

<ul>
    <li>
        <?php foreach ($daerah as $key => $value) : ?>
        <p value="<?= $value->id_daerah ?>">
            <?php if($data->id_daerah == $value->id_daerah){
            echo '<strong>Daerah</strong>: ', $value->nama_daerah;
            break;
        }?></p>
        <?php endforeach; ?>
    </li>
    <li>
        <strong>Manager</strong>:
        <?= $data->manager; ?></li>
    <li>
        <strong>Project date</strong>:
        <?= $data->created_at; ?></li>
    <li>
        <strong>Project URL</strong>:
        <a href="#">www.example.com</a>
    </li>
</ul>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h2><?= $data->nama_cafe ?></h2>
<p><?= $data->keterangan ?></p>



<?= $this->endSection() ?>