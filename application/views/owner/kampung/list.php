<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view("owner/_partials/head.php")?>
    </head>
    <body class="sb-nav-fixed">
        <?php $this->load->view("owner/_partials/navbar.php")?>
        <div id="layoutSidenav">
            <?php $this->load->view("owner/_partials/sidebar.php")?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Kampung</h1>
                        <ol class="bre adcrumb mb-4">
                            <li class="breadcrumb-item active">Data Kampung</li>
                        </ol>
						<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('owner/kampungs/add') ?>"><i class="fas fa-plus"></i> Tambah Data Baru</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Lokasi</th>
										<th>Kategori</th>
										<th>Deskripsi</th>
										<th>Foto</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($kampungs as $kampung): ?>
									<tr>
										<td width="150">
											<?php echo $kampung->nama ?>
										</td>
										<td>
											<?php echo $kampung->lokasi ?>
										</td>
										<td>
											<?php echo $kampung->kriteria ?>
										</td>
										<td class="small">
											<?php echo $kampung->deskripsi ?></td>
										<td>
											<img src="<?php echo base_url('upload/kampung/'.$kampung->gambar) ?>" width="64" />
										</td>
										<td width="250">
											<a href="<?php echo site_url('owner/kampungs/edit/'.$kampung->ID) ?>"
											class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
                    </div>
                </main>
                <?php $this->load->view("owner/_partials/footer.php")?>
            </div>
        </div>
        <?php $this->load->view("owner/_partials/js.php")?>
    </body>
</html>
