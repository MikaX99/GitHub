<header class="app-bar header" id="header">
    <div class="header-top">
        <div class="container fixed-width-md-up">
            <div class="logo">
                <button class="mobile-menu btn-icon waves-effect hamburger hamburger--spin show-sm-down" id="mobile_menu" type="button">
                    <span class="hamburger-box"><span class="bar hamburger-inner"></span></span>
                </button>
                <a href="#banner">
                    <i><?php echo NAME_APP_STRING; ?></i>
                </a>
            </div>
            <div class="user-menu">
                <div class="hidden-sm-down">
                    <a href="https://wa.me/<?php echo NOMOR_TELEPON_KONTAK; ?>" target="_blank">
                        <ion-icon class="ion-social-whatsapp" style="color: green;">&nbsp; <?= $lang['lang']['header_whatsapp_contact_us'][$lang['set_lang']] ?></ion-icon>
                    </a>
                </div>
                <div class="menu-setting">
                    <div class="setting">
                        <button class="btn-icon waves-effect m-2 dropdown-trigger" data-target="dropdown_config" type="button" data-align="left">
                            <i class="icon material-icons" id="setting_icon">settings</i>
                        </button>
                        <div class="dropdown-content" id="dropdown_config">
                            <ul class="collection with-header">
                                <li class="collection-header"><?= $lang['lang']['header_theme_mode'][$lang['set_lang']] ?></li>
                                <li class="collection-item no-hover pl-4">
                                    <div class="flex-menu">
                                        <div class="switch">
                                            <label><?= $lang['lang']['header_theme_mode_name_terang'][$lang['set_lang']] ?><input id="theme_switcher" type="checkbox"><span class="lever"></span><?= $lang['lang']['header_theme_mode_name_gelap'][$lang['set_lang']] ?></label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="dropdown-divider"></div>
                            <ul class="collection with-header lang-menu" id="lang_menu">
                                <li class="collection-header"><?= $lang['lang']['language_mode'][$lang['set_lang']] ?></li>
                                <li class="collection-item lang-list waves-effect avatar">
                                    <a data-lang="id" href="#">
                                        <div class="flag circle"><i class="id"></i></div>
                                        <span class="content lang-opt text-truncate">󠁥󠁮󠁧󠁿Bahasa Indonesia</span>
                                    </a>
                                </li>
                                <li class="collection-item lang-list waves-effect avatar">
                                    <a data-lang="en" href="#">
                                        <div class="flag circle"><i class="en"></i></div>
                                        <span class="content lang-opt text-truncate">English</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden-sm-down">
        <div class="navigation">
            <div class="container fixed-width">
                <nav class="nav-menu">
                    <a class="btn-icon waves-effect" href="#banner"><i class="material-icons icon">home</i></a>
                    <div class="scrollactive-nav scrollnav">
                        <ul>
                            <li class="d-none"><a href="#banner"></a></li>
                            <li><a class="btn btn-flat anchor-link waves-effect" href="#feature"><?= $lang['lang']['header_nav_services'][$lang['set_lang']] ?></a></li>
                            <li><a class="btn btn-flat anchor-link waves-effect" href="#benefit"><?= $lang['lang']['header_nav_benefit'][$lang['set_lang']] ?></a></li>
                            <li><a class="btn btn-flat anchor-link waves-effect" href="#testimonials"><?= $lang['lang']['header_nav_client'][$lang['set_lang']] ?></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <?php echo view('_partial_alert/_partial_alert_warning_simple'); ?>
</header>