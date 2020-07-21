<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view("owner/_partials/head.php")?>
		<script src="<?php echo base_url('js/jquery.js') ?>"></script>
		<script src="<?php echo base_url('js/tsukamoto.js') ?>"></script>
    <body class="sb-nav-fixed">
        <?php $this->load->view("user/_partials/navbar.php")?>
        <div id="layoutSidenav">
            <?php $this->load->view("user/_partials/sidebar.php")?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container">
						<div class="row">
							<div class="col-lg-8 order-md-last ftco-animate">
								<h2 class="mb-3">Dlingo, Salah satu desa Persawahan di Kabupaten Bantul</h2>
								<p>Dlingo adalah sebuah kecamatan di Kabupaten Bantul, Provinsi Daerah Istimewa Yogyakarta, Indonesia. Secara geografis Dlingo terletak di Kabupaten Bantul paling timur, berbatasan dengan kabupaten Gunungkidul dan wilayahnya berbukit-bukit.</p>
								<p>
									<img src="<?php echo base_url('upload/kampung/5f0353e9d65f5.jpg') ?>" alt="" class="img-fluid">
								</p>
								<p>Potensi yang ada di Kecamatan Dlingo adalah pada sektor industri kayu, anyaman, dan potensi wisata bentang alam berupa pegunungan. Diantaranya adalah air terjun, bentangan alam persawahan,hutan pinus, dan kebun buah.</p>
								<h2 class="mb-3 mt-5">Perpaduan suasana modern dan tradisional untuk kenyamanan pengunjung</h2>
								<p>
									<img src="<?php echo base_url('upload/kampung/kampung5.jpg') ?>" alt="" class="img-fluid">
								</p>
								<p>Dlingo, awalnya merupakan sebuah kawasan biasa di Bantul, Yogyakarta. Tapi kini, semakin ramai diperbincangkan dan menjadi salah satu destinasi yang wajib dikunjungi saat berlibur ke tempat wisata Jogja.</p>
								<p>Sesuai dengan namanya ‘Lintang’ menawarkan keindahan panorama bintang dan dimanjakan dengan gemerlap lampu kota. Destinasi wisata ini cocok menjadi jujugan di malam hari. Bagi yang suka berkemah, lokasi ini menjadi tempat yang tepat untuk menikmati malam dan matahari terbit. Ketika musim libur, banyak pengunjung yang datang untuk berkemah, bersantai melepas penat sejenak dari hiru pikuk kota.</p>
								<p class="ftco-animate mt-4"><a href="<?php echo site_url('user/users/add') ?>" class="btn btn-primary py-3 px-5 ">Sudah Dikunjungi</a></p>
								<div class="tag-widget post-tag-container mb-5 mt-5">
									<div class="tagcloud">
										<a href="kampung.html" class="tag-cloud-link">Perbatikan</a>
									</div>
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
