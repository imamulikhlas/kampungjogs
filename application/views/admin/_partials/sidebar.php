<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Inti</div>
                            <a class="nav-link" href="<?php echo site_url('admin') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dasbor
                            </a>
                            <div class="sb-sidenav-menu-heading">Antarmuka</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo site_url('admin/kampungs') ?>">Data Kampung</a>
                                    <a class="nav-link" href="<?php echo site_url('admin/users') ?>">Data Pengunjung</a>
                                    <a class="nav-link" href="<?php echo site_url('admin/komunitass') ?>">Data Komunitas</a>
                                </nav>
                            </div>
							<div class="sb-sidenav-menu-heading">Logout</div>
                            <a class="nav-link" href="<?php echo site_url('admin/overview/logout') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Logout
                            </a>
                        </div>
                    </div>
                </nav>
            </div>