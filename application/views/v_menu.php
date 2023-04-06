    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?= base_url("assets\dist\img\user.jpg") ?>" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo $_SESSION['username'] ?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MENU</li>
                <li class="active">
                    <a href="<?= site_url("dashboard") ?>">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>

                <li><a href="<?= site_url("anggota") ?>"><i class="fa fa-user"></i> Data Anggota</a></li>

                <li><a href="<?= site_url("buku") ?>"><i class="fa fa-user"></i> Data Buku</a></li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-area-chart"></i>
                        <span>Transaksi</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?= site_url("peminjaman") ?>"><i class="fa fa-circle-o"></i> Peminjaman</a></li>
                        <li><a href="<?= site_url("pengembalian") ?>"><i class="fa fa-circle-o"></i> Pengembalian</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class=" fa fa-file-text"></i>
                        <span>Laporan</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?= site_url("laporan/peminjaman") ?>"><i class="fa fa-circle-o"></i>Laporan Peminjaman</a></li>
                        <li><a href="<?= site_url("laporan/data_anggota") ?>"><i class="fa fa-circle-o"></i>Laporan Data Anggota</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>