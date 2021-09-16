<?php

// if (!$this->session->userdata('username')) {
//     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Access Denied</div>');
//     redirect('auth');
// }

?>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion noprint" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>admin">
            <div class="sidebar-brand-icon">

                <img src="<?= base_url() ?>assets/img/dyouth.png" width="50" class="rounded-circle">
            </div>
            <div class="sidebar-brand-text mx-3">Dyouth<sup></sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Admin
        </div>


        <li class="nav-item
        <?php if ($this->uri->segment(2) == 'Admin') {
            echo 'active';
        }
        ?>">
            <a class="nav-link" href="<?= base_url() ?>4dmin/Admin">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Admin</span></a>
        </li>



        <li class="nav-item <?php if ($this->uri->segment(2) == 'DaftarKupon') {
                                echo 'active';
                            }
                            ?>">
            <a class="nav-link" href="<?= base_url() ?>4dmin/DaftarKupon">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>
                    <?php echo $this->session->userdata('email'); ?>
                    Daftar Kupon
                </span></a>
        </li>


        <li class="nav-item <?php if ($this->uri->segment(2) == 'MemberKupon') {
                                echo 'active';
                            }
                            ?>">
            <a class="nav-link" href="<?= base_url() ?>4dmin/MemberKupon">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>
                    <?php echo $this->session->userdata('email'); ?>
                    Member Kupon
                </span></a>
        </li>


        <li class="nav-item <?php if ($this->uri->segment(2) == 'DaftarAcara') {
                                echo 'active';
                            }
                            ?>">
            <a class="nav-link" href="<?= base_url() ?>4dmin/DaftarAcara">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>
                    <?php echo $this->session->userdata('email'); ?>
                    Daftar Lomba
                </span></a>
        </li>

        <li class="nav-item <?php if ($this->uri->segment(2) == 'JadwalAcara2') {
                                echo 'active';
                            }
                            ?>">
            <a class="nav-link" href="<?= base_url() ?>4dmin/JadwalAcara2">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>
                    <?php echo $this->session->userdata('email'); ?>
                    Jadwal Acara
                </span></a>
        </li>




        <!-- Divider -->
        <?php if ($this->session->userdata('role_id') == 2) : ?>

            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Agen
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?php if ($this->uri->segment(2) == 'dashboard') : echo 'active';
                                endif; ?>">
                <a class="nav-link" href="<?= base_url() ?>agen/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item <?php if ($this->uri->segment(2) == 'booking') : echo 'active';
                                endif; ?>">
                <a class="nav-link" href="<?= base_url() ?>agen/booking">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Booking</span></a>
            </li>

            <li class="nav-item <?php if ($this->uri->segment(2) == 'produk') : echo 'active';
                                endif; ?>">
                <a class="nav-link" href="<?= base_url() ?>agen/produk">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Product Information</span></a>
            </li>

            <li class="nav-item <?php if ($this->uri->segment(2) == 'invoice') : echo 'active';
                                endif; ?>">
                <a class="nav-link" href="<?= base_url() ?>agen/invoice">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Invoice</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>agen/setting">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Agent Setting</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!-- <div class="sidebar-card">
            <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="">
            <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
            <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
        </div> -->
        <?php endif; ?>


    </ul>