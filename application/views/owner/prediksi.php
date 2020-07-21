<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view("owner/_partials/head.php")?>
		<script src="<?php echo base_url('js/jquery.js') ?>"></script>
		<script src="<?php echo base_url('js/tsukamoto.js') ?>"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php $this->load->view("owner/_partials/navbar.php")?>
        <div id="layoutSidenav">
            <?php $this->load->view("owner/_partials/sidebar.php")?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dasbor</h1>
						<p>Selamat Datang <b><?php echo $this->session->userdata("user_nama") ?></b> di halaman KampungJogs - Owner<p>
                        <ol class="bre adcrumb mb-4">
						<div class="panel-body">
						</div>
                       <section id = "prediksi">
								<fieldset>                
									<div class="form-group row">
										<label class="col-md-4 control-label text-right" for="jarak">Jarak Kampung Dari Pusat Kota</label>
										<div class="col-md-4">
											<input id="jarak" name="jarak" type="number" placeholder="Jarak" class="form-control input-md">
										</div>
										<label class="control-label text-left" for="km">km</label>
									</div>

									<div class="form-group row">
										<label class="col-md-4 control-label text-right" for="ukuran">Banyak Orang</label>
										<div class="col-md-4">
											<input id="ukuran" name="ukuran" type="number" placeholder="Jumlah" class="form-control input-md">
										</div>
										<label class="control-label text-left" for="m">orang</label>
									</div>

									<div class="form-group">
										<label class="col-md-4 control-label text-left" for="fasilitasKos"><b>Fasilitas</b></label>
									<div class="col-md-4">
									<div class="checkbox">
										<label for="fasilitas-0">
											<input type="checkbox" name="fasilitas" id="fasilitas-0" value="8">
											Penginapan
										</label>
									</div>
									
									<div class="checkbox">
										<label for="fasilitas-1">
											<input type="checkbox" name="fasilitas" id="fasilitas-1" value="8">
											Kendaraan (Motor Sepeda)
										</label>
									</div>
									
									<div class="checkbox">
										<label for="fasilitas-2">
											<input type="checkbox" name="fasilitas" id="fasilitas-2" value="8">
											Kendaraan (Mobil)
										</label>
									</div>
									
									<div class="checkbox">
										<label for="fasilitas-3">
											<input type="checkbox" name="fasilitas" id="fasilitas-3" value="10">
											Dapur
										</label>
									</div>
									
									<div class="checkbox">
										<label for="fasilitas-4">
											<input type="checkbox" name="fasilitas" id="fasilitas-4" value="10">
											Tour Guide
										</label>
									</div>
									
									<div class="checkbox">
										<label for="fasilitas-5">
											<input type="checkbox" name="fasilitas" id="fasilitas-5" value="11">
											Penerjemah
											</label>
									</div>
									
									<div class="checkbox">
										<label for="fasilitas-6">
											<input type="checkbox" name="fasilitas" id="fasilitas-6" value="11">
											Wi-Fi Portabel
										</label>
									</div>
									
									<div class="checkbox">
										<label for="fasilitas-7">
											<input type="checkbox" name="fasilitas" id="fasilitas-7" value="12">
											Essensial Kit
										</label>
									</div>
									
									<div class="checkbox">
										<label for="fasilitas-8">
											<input type="checkbox" name="fasilitas" id="fasilitas-8" value="11">
											Fotografer
										</label>
									</div>
									<div class="checkbox">
										<label for="fasilitas-9">
											<input type="checkbox" name="fasilitas" id="fasilitas-9" value="11">
											Laundry
										</label>
														</div>
										</div>
									</div>
									<div class="col-lg-6 text-center">
										<button class="btn btn-success" type="submit" id="proses" >PROSES</button>
									</div>

									<div class="col-lg-6 text-center">
										<h3 style="display: inline align-items-center">Hasil Prediksi</h3>
										<input type="text" name="hasil" id="hasil" class="hasil" style=" border:none" />
									</div>
									 <!-- <div >
										<table id="z-result" style="align: center">
											
										</table>  
									</div> -->
								</fieldset>
						</section>
                        </div>
                    </div>
                </main>
                <?php $this->load->view("owner/_partials/footer.php")?>
            </div>
        </div>
        <?php $this->load->view("owner/_partials/js.php")?>
    </body>
</html>
