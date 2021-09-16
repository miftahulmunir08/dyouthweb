<nav id="sidebar">
    <div class="sidebar__profile">
        <div class="card bg__profile_sidebar">
            <div class="card-body">



                <?php if ($data_user["photo_profile"] != NULL) { ?>
                    <img src="<?= base_url('assets') ?>/img/profile/<?= $data_user['photo_profile']; ?>" class="rounded-circle float-left">
                <?php } else { ?>
                    <img src="<?= base_url('assets') ?>/img/profile/profile2.png" class="rounded-circle float-left">
                <?php } ?>


                <div class="sidebar__profile_data">
                    <span class="name_profile__sidebar"><?= $data_user["name"] ?></span>
                    <span class="email_profile__sidebar"><?= $data_user["email"] ?></span>
                    <a href="<?= base_url('pengaturan/profile') ?>" class="edit_profile__sidebar">Edit profil</a>
                </div>
            </div>
        </div>
    </div>

    <div class="sidebar__menu">
        <!-- <!-- <a href="<?= base_url('coming_soon') ?>">
            <svg width="20" height="20" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.75001 9.16665H6.25001C8.33334 9.16665 9.16668 8.33331 9.16668 6.24998V3.74998C9.16668 1.66665 8.33334 0.833313 6.25001 0.833313H3.75001C1.66668 0.833313 0.833344 1.66665 0.833344 3.74998V6.24998C0.833344 8.33331 1.66668 9.16665 3.75001 9.16665Z" stroke="#353535" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M7.65835 6.36248V3.15831C7.65835 2.83747 7.40001 2.60415 7.08334 2.62915H7.06669C6.50835 2.67498 5.66252 2.96248 5.18752 3.25832L5.14169 3.28749C5.06669 3.33332 4.9375 3.33332 4.85833 3.28749L4.79168 3.24582C4.32084 2.94998 3.47501 2.67081 2.91668 2.62497C2.60001 2.59997 2.34167 2.83748 2.34167 3.15415V6.36248C2.34167 6.61664 2.55 6.85831 2.80417 6.88748L2.87917 6.89998C3.45417 6.97498 4.34585 7.27081 4.85419 7.54998L4.86667 7.55415C4.93751 7.59581 5.05417 7.59581 5.12083 7.55415C5.62917 7.27081 6.52501 6.97915 7.10417 6.89998L7.19168 6.88748C7.45001 6.85831 7.65835 6.62081 7.65835 6.36248Z" stroke="#353535" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M5 3.375V7.35833" stroke="#353535" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>Landing Page</span>
        </a> -->

        <a href="<?= base_url('homepage') ?>">
            <svg width="20" height="20" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.58334 17.4167H17.4167" stroke="#353535" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M2.33541 17.4167L2.375 7.8929C2.375 7.40998 2.60458 6.95086 2.98458 6.65002L8.52624 2.33543C9.09624 1.8921 9.89583 1.8921 10.4737 2.33543L16.0154 6.6421C16.4033 6.94293 16.625 7.40206 16.625 7.8929V17.4167" stroke="#353535" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round" />
                <path d="M12.2708 8.70825H6.72916C6.07208 8.70825 5.54166 9.23867 5.54166 9.89575V17.4166H13.4583V9.89575C13.4583 9.23867 12.9279 8.70825 12.2708 8.70825Z" stroke="#353535" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M7.91666 12.8645V14.052" stroke="#353535" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M8.3125 5.9375H10.6875" stroke="#353535" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <span>Beranda</span>
        </a>

        <a href="<?= base_url('Akses') ?>">
            <svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.5 5H3.5C4.5 5 5 4.5 5 3.5V2.5C5 1.5 4.5 1 3.5 1H2.5C1.5 1 1 1.5 1 2.5V3.5C1 4.5 1.5 5 2.5 5Z" stroke="#353535" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M8.5 5H9.5C10.5 5 11 4.5 11 3.5V2.5C11 1.5 10.5 1 9.5 1H8.5C7.5 1 7 1.5 7 2.5V3.5C7 4.5 7.5 5 8.5 5Z" stroke="#353535" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M8.5 11H9.5C10.5 11 11 10.5 11 9.5V8.5C11 7.5 10.5 7 9.5 7H8.5C7.5 7 7 7.5 7 8.5V9.5C7 10.5 7.5 11 8.5 11Z" stroke="#353535" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M2.5 11H3.5C4.5 11 5 10.5 5 9.5V8.5C5 7.5 4.5 7 3.5 7H2.5C1.5 7 1 7.5 1 8.5V9.5C1 10.5 1.5 11 2.5 11Z" stroke="#353535" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>Akses</span>
        </a>
        <a href="<?= base_url('Dompet') ?>">
            <svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.02 6.77506C8.81 6.98006 8.69 7.27506 8.72 7.59006C8.765 8.13006 9.26 8.52506 9.8 8.52506H10.75V9.12006C10.75 10.1551 9.905 11.0001 8.87 11.0001H3.13C2.095 11.0001 1.25 10.1551 1.25 9.12006V5.75507C1.25 4.72007 2.095 3.87506 3.13 3.87506H8.87C9.905 3.87506 10.75 4.72007 10.75 5.75507V6.47507H9.74C9.46 6.47507 9.205 6.58506 9.02 6.77506Z" stroke="#353535" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M1.25 6.20503V3.92005C1.25 3.32505 1.615 2.79503 2.17 2.58503L6.14 1.08503C6.76 0.85003 7.425 1.31004 7.425 1.97504V3.87504" stroke="#353535" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M11.2794 6.98514V8.01517C11.2794 8.29017 11.0594 8.51515 10.7794 8.52515H9.7994C9.25941 8.52515 8.76441 8.13015 8.71941 7.59015C8.68941 7.27515 8.80941 6.98015 9.01941 6.77515C9.20441 6.58515 9.4594 6.47516 9.7394 6.47516H10.7794C11.0594 6.48516 11.2794 6.71014 11.2794 6.98514Z" stroke="#353535" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M3.5 6H7" stroke="#353535" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>Dompet</span>
        </a>
        <a href="<?= base_url('kupon') ?>">
            <svg width="20" height="20" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.0308 8.57061C11.0308 9.32311 11.6492 9.93561 12.4017 9.93561C12.4017 12.1231 11.8533 12.6714 9.66584 12.6714H4.19418C2.00668 12.6714 1.45834 12.1231 1.45834 9.93561V9.66728C2.21084 9.66728 2.82918 9.04895 2.82918 8.29645C2.82918 7.54395 2.21084 6.92561 1.45834 6.92561V6.65728C1.46418 4.46978 2.00668 3.92145 4.19418 3.92145H9.66001C11.8475 3.92145 12.3958 4.46978 12.3958 6.65728V7.20561C11.6433 7.20561 11.0308 7.81228 11.0308 8.57061Z" stroke="#353535" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M9.45646 3.92148H4.15396L5.86313 2.21231C7.25729 0.818145 7.95729 0.818145 9.35146 2.21231L9.70146 2.56231C9.33396 2.92981 9.24646 3.47231 9.45646 3.92148Z" stroke="#353535" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M5.7627 3.92157L5.7627 12.6716" stroke="#353535" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="5 5" />
            </svg>
            <span>Kupon</span>
        </a>
    </div>

    <div class="sidebar__setting">
        <a href="<?= base_url('pengaturan') ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
            </svg> <span>Pengaturan</span>
        </a>
        <a href="<?= base_url('Tentang_Kami') ?>">
            <svg width="20" height="20" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.50001 11.9167C9.47918 11.9167 11.9167 9.47921 11.9167 6.50004C11.9167 3.52087 9.47918 1.08337 6.50001 1.08337C3.52084 1.08337 1.08334 3.52087 1.08334 6.50004C1.08334 9.47921 3.52084 11.9167 6.50001 11.9167Z" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6.5 4.33337V7.04171" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6.49701 8.66663H6.50187" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>Syarat dan ketentuan</span>
        </a>
        <a href="<?= base_url('Syarat_Ketentuan') ?>">
            <svg width="20" height="20" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.79166 8.44713H5.95832L3.91873 9.80378C3.61623 10.0054 3.20832 9.79005 3.20832 9.42338V8.44713C1.83332 8.44713 0.916656 7.53046 0.916656 6.15546V3.40544C0.916656 2.03044 1.83332 1.11377 3.20832 1.11377H7.79166C9.16666 1.11377 10.0833 2.03044 10.0833 3.40544V6.15546C10.0833 7.53046 9.16666 8.44713 7.79166 8.44713Z" stroke="#292D32" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M5.50002 5.20667V5.11043C5.50002 4.79877 5.69253 4.63376 5.88503 4.50084C6.07295 4.37251 6.26084 4.20751 6.26084 3.90501C6.26084 3.48335 5.92168 3.14417 5.50002 3.14417C5.07835 3.14417 4.7392 3.48335 4.7392 3.90501" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M5.49795 6.30204H5.50207" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>Tentang Kami</span>
        </a>
        <a href="<?= base_url('Auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
            <svg width="20" height="20" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.07916 3.46499C4.22125 1.81499 5.06916 1.14124 6.92541 1.14124H6.985C9.03375 1.14124 9.85416 1.96165 9.85416 4.0104V6.99874C9.85416 9.04749 9.03375 9.8679 6.985 9.8679H6.92541C5.08291 9.8679 4.235 9.20332 4.08375 7.58082" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6.87501 5.5H1.65918" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M2.68126 3.9646L1.14584 5.50002L2.68126 7.03543" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>Log Out</span>
        </a>

    </div>
</nav>



<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Akan Keluar ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "keluar" dibawah Jika Anda ingin Keluar Akun</div>
            <div class="modal-footer">

                <a class="btn btn-primary" href="<?= base_url('Auth/logout'); ?>">Logout</a>
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>