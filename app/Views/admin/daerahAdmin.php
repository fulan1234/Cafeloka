<?php echo view('layout/header'); ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Table</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row" id="table-head">
            <div class="col-12">
                <div class="card-header">
                    <h4 class="card-title">Tabel Data Cafe</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div>
                            <a href="/createDaerah" type="button" class="btn btn-success m-4">Tambah Data</a>
                        </div>
                        <table class="table">
                            <thead class="p-3">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Daerah</th>
                                    <th scope="col">Foto</th>

                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
        foreach ($daerah as $admin) : ?>
                                <tr>
                                    <th scope="row"><?= $no ?></th>
                                    <td><?= $admin->nama_daerah ?></td>
                                    <td><img
                                        width="150px"
                                        class="img-thumbnail"
                                        src="<?= base_url() . "/gambarDaerah/" . $admin->gambar; ?>"></td>
                                    <td>
                                        <div class="d-flex align-items-start">
                                            <a class="btn btn-warning mb-3 ms-2" href="/editDaerah/<?= $admin->id_daerah ?>">
                                                <i class="fa fa-edit"></i>
                                                Edit</a>
                                            <form action="/deleteDaerah/<?= $admin->id_daerah ?>" method="post">
                                                <input type="hidden" name="_method" value="DELETE"/>
                                                <button type="submit" class="btn btn-danger mb-3 ms-2">
                                                    <i class="fa fa-trash"></i>
                                                    Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <?php $no++;
        endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php echo view('layout/footer'); ?>