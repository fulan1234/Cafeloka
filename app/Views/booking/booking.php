<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div>
    <a href="/createBookingUser" type="button" class="btn btn-success m-4"><i class="fa fa-plus"></i> Tambah Data</a>
</div>
<table class="table">
    <thead class="p-3">
        <tr>
            <th scope="col">No</th>
            <th scope="col" style="width:10% ;">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kontak</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Nama Cafe</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($dbooking as $key => $value) : ?>
            <tr>
                <th scope="row"><?= $no ?></th>
                <td><?= $value->nama ?></td>
                <td><?= $value->alamat ?></td>
                <td><?= $value->kontak ?></td>
                <td><?= $value->deskripsi ?></td>
                <td><?= $value->nama_cafe ?></td>
                <td>
                    <div class="d-flex align-items-start">
                        <a class="btn btn-warning mb-3 ms-2" href="/editBooking/<?= $value->id_booking ?>"><i class="fa fa-edit"></i> Edit</a>
                        <form action="/deleteBooking/<?= $value->id_booking ?>" method="post">
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="btn btn-danger mb-3 ms-2"><i class="fa fa-trash"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
        <?php $no++;
        endforeach; ?>
    </tbody>
</table>
<?= $this->endSection() ?>

