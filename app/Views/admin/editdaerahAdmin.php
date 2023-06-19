<?php echo view('layout/header'); ?>

<div class="page-heading" style="margin-left:10% ;">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Table</h3>
                <p class="text-subtitle text-muted">Who does not love tables</p>
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

    <!-- Here Code To Create Form -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="/updateDaerah/<?= $daerah->id_daerah ?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="gambarLama" value="<?= $daerah->gambar ?>">
                                <div class="form-group mb-3">
                                    <label for="npm">Nama Daerah</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama_daerah"
                                        value="<?= $daerah->nama_daerah ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">foto</label>
                                    <input type="file" class="form-control" id="gambar" name="gambar">
                                    <img src="<?= base_url('gambarDaerah/'.$daerah->gambar) ?>" alt="" srcset="">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php echo view('layout/footer'); ?>