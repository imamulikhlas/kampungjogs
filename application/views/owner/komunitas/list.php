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
                        <h1 class="mt-4">Data Komunitas</h1>
                        <ol class="bre adcrumb mb-4">
                            <li class="breadcrumb-item active">Data Komunitas</li>
                        </ol>
						<div class="card mb-3">

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
										
									</tr>
								</thead>
								<tbody>
									<?php foreach ($komunitass as $komunitas): ?>
									<tr>
										<td width="150">
											<?php echo $komunitas->nama ?>
										</td>
										<td>
											<?php echo $komunitas->lokasi ?>
										</td>
										<td>
											<?php echo $komunitas->kriteria ?>
										</td>
										<td class="small">
											<?php echo $komunitas->deskripsi ?></td>
										<td>
											<img src="<?php echo base_url('upload/komunitas/'.$komunitas->gambar) ?>" width="64" />
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
