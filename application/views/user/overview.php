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
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dasbor</h1>
						<p>Selamat Datang <b><?php echo $this->session->userdata("user_nama") ?></b> di halaman kampungJogs - User<p>
                        <ol class="bre adcrumb mb-4">
						<div class="panel-body">
						</div>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Data kampung</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo site_url('user/kampungs') ?>">Lihat</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
							<div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Data Komunitas </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo site_url('user/komunitass') ?>">Lihat</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
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
