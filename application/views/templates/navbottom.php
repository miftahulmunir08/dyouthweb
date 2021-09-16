<nav class="navbar__bottom">
    <div class="menu__navbar_bottom_left">
        <div class="menu__navbar_bottom <?php if ($this->uri->segment(1) == 'homepage') : echo 'active';
                                        endif; ?>">
            <a href=" <?= base_url('homepage') ?>" class="side__menu_navbar">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.58334 17.4167H17.4167" stroke="<?php if ($this->uri->segment(1) == 'homepage') {
                                                                    echo '#353535';
                                                                } else {
                                                                    echo '#BDBDBD';
                                                                }
                                                                ?>" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M2.33541 17.4167L2.375 7.8929C2.375 7.40998 2.60458 6.95086 2.98458 6.65002L8.52624 2.33543C9.09624 1.8921 9.89583 1.8921 10.4737 2.33543L16.0154 6.6421C16.4033 6.94293 16.625 7.40206 16.625 7.8929V17.4167" stroke="<?php if ($this->uri->segment(1) == 'homepage') {
                                                                                                                                                                                                                                                        echo '#353535';
                                                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                                                        echo '#BDBDBD';
                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                    ?>" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round" />
                    <path d="M12.2708 8.70825H6.72916C6.07208 8.70825 5.54166 9.23867 5.54166 9.89575V17.4166H13.4583V9.89575C13.4583 9.23867 12.9279 8.70825 12.2708 8.70825Z" stroke="<?php if ($this->uri->segment(1) == 'homepage') {
                                                                                                                                                                                            echo '#353535';
                                                                                                                                                                                        } else {
                                                                                                                                                                                            echo '#BDBDBD';
                                                                                                                                                                                        }
                                                                                                                                                                                        ?>" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M7.91666 12.8645V14.052" stroke="<?php if ($this->uri->segment(1) == 'homepage') {
                                                                    echo '#353535';
                                                                } else {
                                                                    echo '#BDBDBD';
                                                                }
                                                                ?>" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M8.3125 5.9375H10.6875" stroke="<?php if ($this->uri->segment(1) == 'homepage') {
                                                                    echo '#353535';
                                                                } else {
                                                                    echo '#BDBDBD';
                                                                }
                                                                ?>" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span>Beranda</span>
            </a>
        </div>
        <div class="menu__navbar_bottom <?php if ($this->uri->segment(1) == 'Akses') : echo 'active';
                                        endif; ?>">
            <a href="<?= base_url('Akses') ?>" class="side__menu_navbar">
                <svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.5 5H3.5C4.5 5 5 4.5 5 3.5V2.5C5 1.5 4.5 1 3.5 1H2.5C1.5 1 1 1.5 1 2.5V3.5C1 4.5 1.5 5 2.5 5Z" stroke="<?php if ($this->uri->segment(1) == 'Akses') {
                                                                                                                                            echo '#353535';
                                                                                                                                        } else {
                                                                                                                                            echo '#BDBDBD';
                                                                                                                                        }
                                                                                                                                        ?>" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M8.5 5H9.5C10.5 5 11 4.5 11 3.5V2.5C11 1.5 10.5 1 9.5 1H8.5C7.5 1 7 1.5 7 2.5V3.5C7 4.5 7.5 5 8.5 5Z" stroke="<?php if ($this->uri->segment(1) == 'Akses') {
                                                                                                                                                echo '#353535';
                                                                                                                                            } else {
                                                                                                                                                echo '#BDBDBD';
                                                                                                                                            }
                                                                                                                                            ?>" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M8.5 11H9.5C10.5 11 11 10.5 11 9.5V8.5C11 7.5 10.5 7 9.5 7H8.5C7.5 7 7 7.5 7 8.5V9.5C7 10.5 7.5 11 8.5 11Z" stroke="<?php if ($this->uri->segment(1) == 'Akses') {
                                                                                                                                                        echo '#353535';
                                                                                                                                                    } else {
                                                                                                                                                        echo '#BDBDBD';
                                                                                                                                                    }
                                                                                                                                                    ?>" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M2.5 11H3.5C4.5 11 5 10.5 5 9.5V8.5C5 7.5 4.5 7 3.5 7H2.5C1.5 7 1 7.5 1 8.5V9.5C1 10.5 1.5 11 2.5 11Z" stroke="<?php if ($this->uri->segment(1) == 'Akses') {
                                                                                                                                                echo '#353535';
                                                                                                                                            } else {
                                                                                                                                                echo '#BDBDBD';
                                                                                                                                            }
                                                                                                                                            ?>" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span>Akses</span>
            </a>
        </div>
    </div>
    <div class="menu__navbar_bottom_center">
        <div class="menu__navbar_bottom">
            <a href="<?= base_url('coming_soon') ?>" class="middle__menu_navbar">
                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.25 10.125V7.3125C2.25 4.51125 4.51125 2.25 7.3125 2.25H10.125" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M16.875 2.25H19.6875C22.4887 2.25 24.75 4.51125 24.75 7.3125V10.125" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M24.75 18V19.6875C24.75 22.4888 22.4887 24.75 19.6875 24.75H18" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10.125 24.75H7.3125C4.51125 24.75 2.25 22.4888 2.25 19.6875V16.875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M19.125 10.6875V16.3125C19.125 18.5625 18 19.6875 15.75 19.6875H11.25C9 19.6875 7.875 18.5625 7.875 16.3125V10.6875C7.875 8.4375 9 7.3125 11.25 7.3125H15.75C18 7.3125 19.125 8.4375 19.125 10.6875Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M21.375 13.5H5.625" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </div>
    </div>
    <div class="menu__navbar_bottom_right">
        <div class="menu__navbar_bottom <?php if ($this->uri->segment(1) == 'dompet') : echo 'active';
                                        endif; ?>">
            <a href="<?= base_url('dompet') ?>" class="side__menu_navbar">
                <svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.02 6.77506C8.81 6.98006 8.69 7.27506 8.72 7.59006C8.765 8.13006 9.26 8.52506 9.8 8.52506H10.75V9.12006C10.75 10.1551 9.905 11.0001 8.87 11.0001H3.13C2.095 11.0001 1.25 10.1551 1.25 9.12006V5.75507C1.25 4.72007 2.095 3.87506 3.13 3.87506H8.87C9.905 3.87506 10.75 4.72007 10.75 5.75507V6.47507H9.74C9.46 6.47507 9.205 6.58506 9.02 6.77506Z" stroke="<?php if ($this->uri->segment(1) == 'dompet') {
                                                                                                                                                                                                                                                                                                                                                                                                echo '#353535';
                                                                                                                                                                                                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                                                                                                                                                                                                echo '#BDBDBD';
                                                                                                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                                                                                                            ?>" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M1.25 6.20503V3.92005C1.25 3.32505 1.615 2.79503 2.17 2.58503L6.14 1.08503C6.76 0.85003 7.425 1.31004 7.425 1.97504V3.87504" stroke="<?php if ($this->uri->segment(1) == 'dompet') {
                                                                                                                                                                        echo '#353535';
                                                                                                                                                                    } else {
                                                                                                                                                                        echo '#BDBDBD';
                                                                                                                                                                    }
                                                                                                                                                                    ?>" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M11.2794 6.98514V8.01517C11.2794 8.29017 11.0594 8.51515 10.7794 8.52515H9.7994C9.25941 8.52515 8.76441 8.13015 8.71941 7.59015C8.68941 7.27515 8.80941 6.98015 9.01941 6.77515C9.20441 6.58515 9.4594 6.47516 9.7394 6.47516H10.7794C11.0594 6.48516 11.2794 6.71014 11.2794 6.98514Z" stroke="<?php if ($this->uri->segment(1) == 'dompet') {
                                                                                                                                                                                                                                                                                                                                    echo '#353535';
                                                                                                                                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                                                                                                                                    echo '#BDBDBD';
                                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                                                ?>" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3.5 6H7" stroke="<?php if ($this->uri->segment(1) == 'dompet') {
                                                    echo '#353535';
                                                } else {
                                                    echo '#BDBDBD';
                                                }
                                                ?>" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span>Dompet</span>
            </a>
        </div>
        <div class="menu__navbar_bottom <?php if ($this->uri->segment(1) == 'kupon') : echo 'active';
                                        endif; ?>">
            <a href="<?= base_url('kupon') ?>" class="side__menu_navbar">

                <!-- <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.7583 12.2437C15.7583 13.3187 16.6417 14.1937 17.7167 14.1937C17.7167 17.3187 16.9333 18.1021 13.8083 18.1021H5.99168C2.86668 18.1021 2.08334 17.3187 2.08334 14.1937V13.8104C3.15834 13.8104 4.04168 12.9271 4.04168 11.8521C4.04168 10.7771 3.15834 9.89372 2.08334 9.89372V9.51038C2.09168 6.38538 2.86668 5.60205 5.99168 5.60205H13.8C16.925 5.60205 17.7083 6.38538 17.7083 9.51038V10.2937C16.6333 10.2937 15.7583 11.1604 15.7583 12.2437Z" stroke="#353535" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M13.5092 5.60216H5.93423L8.3759 3.1605C10.3676 1.16883 11.3676 1.16883 13.3592 3.1605L13.8592 3.6605C13.3342 4.1855 13.2092 4.9605 13.5092 5.60216Z" stroke="<?php if ($this->uri->segment(1) == 'kupon') : echo '#353535';
                                                                                                                                                                                            endif; ?>" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M8.23242 5.60229L8.23242 18.1023" stroke="<?php if ($this->uri->segment(1) == 'kupon') : echo '#353535';
                                                                        endif; ?>" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="5 5" />
                </svg> -->



                <svg width="20" height="20" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0308 8.57061C11.0308 9.32311 11.6492 9.93561 12.4017 9.93561C12.4017 12.1231 11.8533 12.6714 9.66584 12.6714H4.19418C2.00668 12.6714 1.45834 12.1231 1.45834 9.93561V9.66728C2.21084 9.66728 2.82918 9.04895 2.82918 8.29645C2.82918 7.54395 2.21084 6.92561 1.45834 6.92561V6.65728C1.46418 4.46978 2.00668 3.92145 4.19418 3.92145H9.66001C11.8475 3.92145 12.3958 4.46978 12.3958 6.65728V7.20561C11.6433 7.20561 11.0308 7.81228 11.0308 8.57061Z" stroke="<?php if ($this->uri->segment(1) == 'kupon') {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    echo '#353535';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    echo '#BDBDBD';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ?>" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M9.45646 3.92148H4.15396L5.86313 2.21231C7.25729 0.818145 7.95729 0.818145 9.35146 2.21231L9.70146 2.56231C9.33396 2.92981 9.24646 3.47231 9.45646 3.92148Z" stroke="<?php if ($this->uri->segment(1) == 'kupon') {
                                                                                                                                                                                                        echo '#353535';
                                                                                                                                                                                                    } else {
                                                                                                                                                                                                        echo '#BDBDBD';
                                                                                                                                                                                                    }
                                                                                                                                                                                                    ?>" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M5.7627 3.92157L5.7627 12.6716" stroke="<?php if ($this->uri->segment(1) == 'kupon') {
                                                                            echo '#353535';
                                                                        } else {
                                                                            echo '#BDBDBD';
                                                                        }
                                                                        ?>" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="5 5" />
                </svg>
                <span>Kupon</span>
            </a>
        </div>
    </div>
</nav>