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
		<div class="container-fluid">
                <h1 class="mt-4">Tambah Data Kampung</h1>
                   <ol class="bre adcrumb mb-4">
                       <li class="breadcrumb-item active">Tambah Data Kampung</li>
                   </ol>
                <main>
                <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('owner/kampungs/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('owner/kampungs/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="nama">Nama Kampung*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama Kampung" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="lokasi">Lokasi Kampung*</label>
								<input class="form-control <?php echo form_error('lokasi') ? 'is-invalid':'' ?>"
								 type="text" name="lokasi" placeholder="Lokasi Kampung" />
								<div class="invalid-feedback">
								<?php echo form_error('lokasi') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="kriteria">Kriteria Kampung*</label><br>
								<input type="radio" id="persawahan" name="kriteria" value="persawahan">
								<label for="persawahan">Persawahan</label><br>
								<input type="radio" id="pertanian" name="kriteria" value="pertanian">
								<label for="pertanian">Pertanian</label><br>
								<input type="radio" id="perbatikan" name="kriteria" value="perbatikan">
								<label for="perbatikann">Perbatikan</label><br>
								<input type="radio" id="penenunan" name="kriteria" value="penenunan">
								<label for="penenunan">Penenunan</label><br>
								<input type="radio" id="edukasi" name="kriteria" value="edukasi">
								<label for="edukasi">Edukasi</label><br>
								<input type="radio" id="peternakan" name="kriteria" value="peternakan">
								<label for="peternakan">Peternakan</label><br>
							</div>

							<div class="form-group">
								<label for="deskripsi">Deskripsi*</label>
								<textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>"
								 name="deskripsi" placeholder="Deskripsi Kampung..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('deskripsi') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="foto">Foto</label>
								<input class="form-control-file <?php echo form_error('gambar') ? 'is-invalid':'' ?>"
								 type="file" name="gambar" />
								<div class="invalid-feedback">
									<?php echo form_error('gambar') ?>
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
