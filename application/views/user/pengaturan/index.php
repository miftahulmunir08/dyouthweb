<body class="bg__img">
    <div class="wrapper">

        <!-- Page Content  -->
        <div id="content">
            <div class="header bg__blue_gradient pb-1">

                <nav class="navbar navbar-dark navbar__z">
                    <button type="button" id="sidebarCollapse" class="navbar__menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar__title text-center" href="#">
                        <span>Pengaturan</span>
                    </div>
                    <div>
                        <a href="#" class="navbar__bell text-white" id="bell">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.02 2.90991C8.71003 2.90991 6.02003 5.59991 6.02003 8.90991V11.7999C6.02003 12.4099 5.76003 13.3399 5.45003 13.8599L4.30003 15.7699C3.59003 16.9499 4.08003 18.2599 5.38003 18.6999C9.69003 20.1399 14.34 20.1399 18.65 18.6999C19.86 18.2999 20.39 16.8699 19.73 15.7699L18.58 13.8599C18.28 13.3399 18.02 12.4099 18.02 11.7999V8.90991C18.02 5.60991 15.32 2.90991 12.02 2.90991Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" />
                                <path d="M13.87 3.19994C13.56 3.10994 13.24 3.03994 12.91 2.99994C11.95 2.87994 11.03 2.94994 10.17 3.19994C10.46 2.45994 11.18 1.93994 12.02 1.93994C12.86 1.93994 13.58 2.45994 13.87 3.19994Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15.02 19.0601C15.02 20.7101 13.67 22.0601 12.02 22.0601C11.2 22.0601 10.44 21.7201 9.90002 21.1801C9.36002 20.6401 9.02002 19.8801 9.02002 19.0601" stroke="white" stroke-width="1.5" stroke-miterlimit="10" />
                            </svg>
                        </a>
                    </div>
                </nav>

            </div>

            <div class="content bg-light">
                <div class="row justify-content-center align-items-center m-0">
                    <div class="col-12">
                        <div class="setting__item mt-4">
                            <div class="input-group search__form mb-2">
                                <div class="input-group-prepend btn__search_setting">
                                    <div class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </div>
                                </div>
                                <input type="text" class="setting__search" id="inlineFormInputGroup" placeholder="Cari pengaturan">
                            </div>

                            <div class="setting__list">
                                <div class="card__list">
                                    <a href="<?= base_url('pengaturan/profile') ?>" class="d-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                        </svg>
                                        <span class="setting__list_name">Profil</span>
                                        <span class="float-right">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                                <div class="card__list">
                                    <a href="<?= base_url('coming_soon') ?>" class="d-block">
                                        <svg width="20" height="20" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.51249 1.81879C5.44374 1.81879 3.76249 3.50004 3.76249 5.56879V7.37504C3.76249 7.75629 3.59999 8.33754 3.40624 8.66254L2.68749 9.85629C2.24374 10.5938 2.54999 11.4125 3.36249 11.6875C6.05624 12.5875 8.96249 12.5875 11.6562 11.6875C12.4125 11.4375 12.7437 10.5438 12.3312 9.85629L11.6125 8.66254C11.425 8.33754 11.2625 7.75629 11.2625 7.37504V5.56879C11.2625 3.50629 9.57499 1.81879 7.51249 1.81879Z" stroke="#292D32" stroke-miterlimit="10" stroke-linecap="round" />
                                            <path d="M8.6687 2.00002C8.47495 1.94377 8.27495 1.90002 8.0687 1.87502C7.4687 1.80002 6.8937 1.84377 6.3562 2.00002C6.53745 1.53752 6.98745 1.21252 7.51245 1.21252C8.03745 1.21252 8.48745 1.53752 8.6687 2.00002Z" stroke="#292D32" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9.38745 11.9125C9.38745 12.9437 8.5437 13.7875 7.51245 13.7875C6.99995 13.7875 6.52495 13.575 6.18745 13.2375C5.84995 12.9 5.63745 12.425 5.63745 11.9125" stroke="#292D32" stroke-miterlimit="10" />
                                        </svg>

                                        <span class="setting__list_name">Notifikasi</span>
                                        <span class="float-right">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                                <div class="card__list">
                                    <a href="<?= base_url('coming_soon') ?>" class="d-block">
                                        <svg width="20" height="20" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.5 5.83335V4.66669C3.5 2.73585 4.08333 1.16669 7 1.16669C9.91667 1.16669 10.5 2.73585 10.5 4.66669V5.83335" stroke="#353535" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M6.99996 10.7917C7.80537 10.7917 8.45829 10.1387 8.45829 9.33333C8.45829 8.52792 7.80537 7.875 6.99996 7.875C6.19454 7.875 5.54163 8.52792 5.54163 9.33333C5.54163 10.1387 6.19454 10.7917 6.99996 10.7917Z" stroke="#353535" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9.91663 12.8333H4.08329C1.74996 12.8333 1.16663 12.25 1.16663 9.91665V8.74998C1.16663 6.41665 1.74996 5.83331 4.08329 5.83331H9.91663C12.25 5.83331 12.8333 6.41665 12.8333 8.74998V9.91665C12.8333 12.25 12.25 12.8333 9.91663 12.8333Z" stroke="#353535" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>


                                        <span class="setting__list_name">Ubah Pins</span>
                                        <span class="float-right">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="overlay"></div>

</body>