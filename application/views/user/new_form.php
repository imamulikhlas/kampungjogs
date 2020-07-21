<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view("owner/_partials/head.php")?>
    </head>
    <body class="sb-nav-fixed">
        <?php $this->load->view("user/_partials/navbar.php")?>
        <div id="layoutSidenav">
            <?php $this->load->view("user/_partials/sidebar.php")?>
            <div id="layoutSidenav_content">
		<div class="container-fluid">
                <h1 class="mt-4">Tambah Data Pengunjung</h1>
                   <ol class="bre adcrumb mb-4">
                       <li class="breadcrumb-item active">Tambah Data Pengunjung</li>
                   </ol>
                <main>
                <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('user/details/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('user/users/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="namadepan">Nama Depan*</label>
								<input class="form-control <?php echo form_error('namadepan') ? 'is-invalid':'' ?>"
								 type="text" name="namadepan" placeholder="Nama Depan" />
								<div class="invalid-feedback">
									<?php echo form_error('namadepan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="namabelakang">Nama Belakang*</label>
								<input class="form-control <?php echo form_error('namabelakang') ? 'is-invalid':'' ?>"
								 type="text" name="namabelakang" placeholder="Nama Belakang" />
								<div class="invalid-feedback">
								<?php echo form_error('namabelakang') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="namakomunitas">Nama komunitas*</label>
								<input class="form-control <?php echo form_error('namakomunitas') ? 'is-invalid':'' ?>"
								 type="text" name="namakomunitas" placeholder="Nama komunitas" />
								<div class="invalid-feedback">
								<?php echo form_error('namakomunitas') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="harga">Harga yang ditentukan*</label>
								<input class="form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>"
								 type="text" name="harga" placeholder="Harga" />
								<div class="invalid-feedback">
								<?php echo form_error('harga') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Simpan" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>
                </main>
                <?php $this->load->view("owner/_partials/footer.php")?>
            
        </div>
	</div>
</div>
        <?php $this->load->view("owner/_partials/js.php")?>
    </body>
</html>
