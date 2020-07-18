<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view("owner/_partials/head.php")?>
    </head>
    <body class="sb-nav-fixed">
        <?php $this->load->view("admin/_partials/navbar.php")?>
        <div id="layoutSidenav">
            <?php $this->load->view("admin/_partials/sidebar.php")?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Pengunjung</h1>
                        <ol class="bre adcrumb mb-4">
                            <li class="breadcrumb-item active">Data Pengunjung</li>
                        </ol>
						<div class="card mb-3">
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama Depan</th>
										<th>Nama Belakang</th>
										<th>Nama Kampung yang dikunjungi</th>
										<th>Harga yang dibayar</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($users as $user): ?>
									<tr>
										<td width="150">
											<?php echo $user->namadepan ?>
										</td>
										<td>
											<?php echo $user->namabelakang ?>
										</td>
										<td>
											<?php echo $user->namakampung ?>
										</td>
										<td class="small">
											<?php echo $user->harga ?></td>
										<td width="250">
											<a href="<?php echo site_url('admin/users/edit/'.$user->id) ?>"
											class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a href="<?php echo site_url('admin/users/hapus/'.$user->id) ?>"
											class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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
