<?php echo view('layout/header'); ?>
<div class="page-heading">
    <h3>Dashboard</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div
                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">User</h6>
                                    <h6 class="font-extrabold mb-0"><?= $jumlahUser ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div
                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Booking</h6>
                                    <h6 class="font-extrabold mb-0"><?= $jumlahBooking ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div
                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Cafe</h6>
                                    <h6 class="font-extrabold mb-0"><?= $jumlahCafe ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div
                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Cabang</h6>
                                    <h6 class="font-extrabold mb-0"><?= $jumlahDaerah ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>List Cabang</h4>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row text-center g-4">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="p-3">
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Nama Daerah</th>
                                                            <th scope="col">Foto</th
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
                                                        </tr>
                                                        <?php $no++;
                                                        endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>List Booking</h4>
                        </div>
                        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <div class="row">
        <div class="card-body">
		    <div class="table-responsive">
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th style="width:20% ;">Nama</th>
						<th>Alamat</th>
            <th>Cafe</th>
						<th>Keterangan</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data as $key => $value) : ?>
						<tr>
                <td><?= $value->nama ?></td>
                <td><?= $value->alamat ?></td>
                <td><?= $value->nama_cafe ?></td>
                <td><?= $value->deskripsi ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
				</tfoot>
			</table>
		</div>
    </div>
	</div>
  <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script>
      $(document).ready(function () {
    $('#example1').DataTable({
    });
});
    </script>  
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php echo view('layout/footer'); ?>
