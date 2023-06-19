<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <br>
            <table id="example1" class="table table-bordered table-striped">
                <thead class="p-3">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col" style="width:10% ;">Nama</th>
                        <th scope="col">Manager</th>
                        <th scope="col" style="width:10% ;">Alamat</th>
                        <th scope="col" style="width:30% ;">Keterangan</th>
                        <th scope="col" style="width:20% ;">Foto</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <?php $no = 1;
                foreach ($data as $admin) : ?>
                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td><?= $admin->nama_cafe ?></td>
                        <td><?= $admin->manager ?></td>
                        <td><?= $admin->alamat ?></td>
                        <td><?= $admin->keterangan ?></td>
                        <td><img width="150px" class="img-thumbnail" src="<?= base_url() . "/gambarCafe/" . $admin->foto; ?>"></td>
                        <td>
                            <div class="d-flex align-items-start">
                                <a class="btn btn-warning mb-3 ms-2" href="/edit/<?= $admin->id ?>"><i class="fa fa-edit"></i> Edit</a>
                                <form action="/delete/<?= $admin->id ?>" method="post">
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button type="submit" class="btn btn-danger mb-3 ms-2"><i class="fa fa-trash"></i> Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php $no++;
                endforeach; ?>
            </tfoot>
        </table>
    </div>
</div>
</div>
<script
type="text/javascript"
language="javascript"
src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script
type="text/javascript"
language="javascript"
src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function () {
    $('#example1').DataTable({});
});
</script>
<?= $this->endSection() ?>