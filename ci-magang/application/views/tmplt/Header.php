<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <title><?php echo $judul; ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link href="<?php echo site_url('tmplt/Source/assets/plugins/materialize/css/materialize.min.css') ?>" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo site_url('tmplt/Source/assets/plugins/material-preloader/css/materialPreloader.min.css') ?>" rel="stylesheet">
    <link href="<?php echo site_url('tmplt/Source/assets/plugins/datatables/css/jquery.dataTables.min.css') ?>" rel="stylesheet">
    <link href="<?php echo site_url('tmplt/Source/assets/plugins/metrojs/MetroJs.min.css') ?>" rel="stylesheet">
    <link href="<?php echo site_url('tmplt/Source/assets/plugins/weather-icons-master/css/weather-icons.min.css') ?>" rel="stylesheet">
    <link href="<?php echo site_url('tmplt/Source/assets/plugins/select2/css/select2.css') ?>" rel="stylesheet">

    <!-- Theme Styles -->
    <link href="<?php echo site_url('tmplt/Source/assets/css/alpha.min.css') ?>" rel="stylesheet" />
    <link href="<?php echo site_url('tmplt/Source/assets/css/custom.css') ?>" rel="stylesheet" />


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>
    <div class="mn-content fixed-sidebar">
        <header class="mn-header navbar-fixed">
            <nav class="cyan darken-1">
                <div class="nav-wrapper row">
                    <section class="material-design-hamburger navigation-toggle">
                        <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                            <span class="material-design-hamburger__layer"></span>
                        </a>
                    </section>
                    <div class="header-title col s3 m3">
                        <span class="chapter-title">Alpha</span>
                    </div>
                    <form class="left search col s6 hide-on-small-and-down">
                        <div class="input-field">
                            <input id="search" type="search" placeholder="Search" autocomplete="off">
                            <label for="search"><i class="material-icons search-icon">search</i></label>
                        </div>
                        <a href="javascript: void(0)" class="close-search"><i class="material-icons">close</i></a>
                    </form>
                    <ul class="right col s9 m3 nav-right-menu">
                        <li><a href="javascript:void(0)" data-activates="chat-sidebar" class="chat-button show-on-large"><i class="material-icons">more_vert</i></a></li>
                        <li class="hide-on-small-and-down"><a href="javascript:void(0)" data-activates="dropdown1" class="dropdown-button dropdown-right show-on-large"><i class="material-icons">notifications_none</i><span class="badge">4</span></a></li>
                        <li class="hide-on-med-and-up"><a href="javascript:void(0)" class="search-toggle"><i class="material-icons">search</i></a></li>
                    </ul>

                    <ul id="dropdown1" class="dropdown-content notifications-dropdown">
                        <li class="notificatoins-dropdown-container">
                            <ul>
                                <li class="notification-drop-title">Today</li>
                                <li>
                                    <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle cyan"><i class="material-icons">done</i></div>
                                            <div class="notification-text">
                                                <p><b>Alan Grey</b> uploaded new theme</p><span>7 min ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle deep-purple"><i class="material-icons">cached</i></div>
                                            <div class="notification-text">
                                                <p><b>Tom</b> updated status</p><span>14 min ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle red"><i class="material-icons">delete</i></div>
                                            <div class="notification-text">
                                                <p><b>Amily Lee</b> deleted account</p><span>28 min ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle cyan"><i class="material-icons">person_add</i></div>
                                            <div class="notification-text">
                                                <p><b>Tom Simpson</b> registered</p><span>2 hrs ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle green"><i class="material-icons">file_upload</i></div>
                                            <div class="notification-text">
                                                <p>Finished uploading files</p><span>4 hrs ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-drop-title">Yestarday</li>
                                <li>
                                    <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle green"><i class="material-icons">security</i></div>
                                            <div class="notification-text">
                                                <p>Security issues fixed</p><span>16 hrs ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle indigo"><i class="material-icons">file_download</i></div>
                                            <div class="notification-text">
                                                <p>Finished downloading files</p><span>22 hrs ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle cyan"><i class="material-icons">code</i></div>
                                            <div class="notification-text">
                                                <p>Code changes were saved</p><span>1 day ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="search-results">
            <div class="container search-container">
                <div class="row">
                    <div class="col s12 search-head">
                        <div class="row">
                            <div class="col s12">
                                <div class="left">
                                    <p class="search-results-title">Quick search results</p>
                                    <p class="search-filter left">
                                        <input type="checkbox" class="filled-in" id="filled-in-box" checked />
                                        <label for="filled-in-box">Google search</label>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="res-not-found">No results found</div>
                    </div>
                    <div class="col s12 m4 search-result-container">
                        <div class="card card-transparent">
                            <div class="row valign-wrapper">
                                <div class="col s3">
                                    <img src="assets/images/profile-image-1.png" alt="" class="circle responsive-img z-depth-1">
                                </div>
                                <div class="col s9">
                                    <span class="search-result-text">
                                        Search <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text">Last active 2 days ago</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="card card-transparent">
                            <div class="row valign-wrapper">
                                <div class="col s3">
                                    <img src="assets/images/profile-image-3.jpg" alt="" class="circle responsive-img z-depth-1">
                                </div>
                                <div class="col s9">
                                    <span class="search-result-text">
                                        News about <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text">23 Blogs</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="card card-transparent">
                            <div class="row valign-wrapper">
                                <div class="col s3">
                                    <img src="assets/images/profile-image.png" alt="" class="circle responsive-img z-depth-1">
                                </div>
                                <div class="col s9">
                                    <span class="search-result-text">
                                        Tom King (Works at <span class="search-text search-result-highlight"></span>)<br><span class="secondary-search-text">Avaible for freelance work</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 search-result-container">
                        <div class="card card-transparent ">
                            <div class="row valign-wrapper">
                                <div class="col s3">
                                    <span class="z-depth-1 circle search-circle indigo lighten-1">F</span>
                                </div>
                                <div class="col s9">
                                    <span class="search-result-text">
                                        <span class="search-text search-result-highlight"></span> on Facebook<br><span class="secondary-search-text"><a href="#">View website</a></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="card card-transparent">
                            <div class="row valign-wrapper">
                                <div class="col s3">
                                    <span class="z-depth-1 circle search-circle light-blue lighten-1">T</span>
                                </div>
                                <div class="col s9">
                                    <span class="search-result-text">
                                        <span class="search-text search-result-highlight"></span> on Twitter<br><span class="secondary-search-text"><a href="#">View website</a></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="card card-transparent">
                            <div class="row valign-wrapper">
                                <div class="col s3">
                                    <span class="z-depth-1 circle search-circle red darken-1">G</span>
                                </div>
                                <div class="col s9">
                                    <span class="search-result-text">
                                        Google+ <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text"><a href="#">View website</a></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 search-result-container">
                        <div class="card card-transparent">
                            <div class="card-content first">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sunt in culpa qui<span class="search-text search-result-highlight"></span> quis.</p>
                            </div>
                            <div class="card-action">
                                <span class="grey-text">Yesterday, 4:56 PM</span>
                            </div>
                        </div>
                        <div class="card card-transparent">
                            <div class="card-content">
                                <p>Sunt in culpa qui <span class="search-text search-result-highlight"></span> officia deserunt mollit anim id est laborum. officia deserunt mollit anim id est laborum officia deserunt mollit anim</p>
                            </div>
                            <div class="card-action">
                                <span class="grey-text">27 January 2016</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <aside id="chat-sidebar" class="side-nav white">
            <div class="side-nav-wrapper">
                <div class="col s12">
                    <ul class="tabs tab-demo" style="width: 100%;">
                        <li class="tab col s3"><a href="#sidebar-chat-tab" class="active">chat</a></li>
                        <li class="tab col s3"><a href="#sidebar-more-tab">settings</a></li>
                    </ul>
                </div>
                <div id="sidebar-chat-tab" class="col s12 sidebar-messages right-sidebar-panel">
                    <p class="right-sidebar-heading">CHAT LIST</p>
                    <div class="chat-list">
                        <a href="javascript:void(0)" class="chat-message">
                            <div class="chat-item">
                                <div class="chat-item-image">
                                    <img src="assets/images/profile-image.png" class="circle" alt="">
                                </div>
                                <div class="chat-item-info">
                                    <p class="chat-name">John Doe</p>
                                    <span class="chat-message">Hello</span>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="chat-message">
                            <div class="chat-item">
                                <div class="chat-item-image">
                                    <img src="assets/images/profile-image-1.png" class="circle" alt="">
                                </div>
                                <div class="chat-item-info">
                                    <p class="chat-name">Tom Simpson</p>
                                    <span class="chat-message">How are you?</span>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="chat-message">
                            <div class="chat-item">
                                <div class="chat-item-image">
                                    <img src="assets/images/profile-image-3.jpg" class="circle" alt="">
                                </div>
                                <div class="chat-item-info">
                                    <p class="chat-name">Alan Grey</p>
                                    <span class="chat-message">Call me later</span>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="chat-message">
                            <div class="chat-item">
                                <div class="chat-item-image">
                                    <img src="assets/images/profile-image.png" class="circle" alt="">
                                </div>
                                <div class="chat-item-info">
                                    <p class="chat-name">Michael Fisher</p>
                                    <span class="chat-message">How's it going?</span>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="chat-message">
                            <div class="chat-item">
                                <div class="chat-item-image">
                                    <img src="assets/images/profile-image-1.png" class="circle" alt="">
                                </div>
                                <div class="chat-item-info">
                                    <p class="chat-name">Amily Lee</p>
                                    <span class="chat-message">We're good</span>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="chat-message">
                            <div class="chat-item">
                                <div class="chat-item-image">
                                    <img src="assets/images/profile-image.png" class="circle" alt="">
                                </div>
                                <div class="chat-item-info">
                                    <p class="chat-name">Sandra Smith</p>
                                    <span class="chat-message">See you later!</span>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="chat-message">
                            <div class="chat-item">
                                <div class="chat-item-image">
                                    <img src="assets/images/profile-image-3.jpg" class="circle" alt="">
                                </div>
                                <div class="chat-item-info">
                                    <p class="chat-name">Sandra Smith</p>
                                    <span class="chat-message">Can we meet?</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="chat-sidebar-options">
                        <a href="#" class="left"><i class="material-icons">edit</i></a>
                        <a href="#" class="right"><i class="material-icons">settings</i></a>
                    </div>
                </div>
                <div id="sidebar-more-tab" class="col s12 sidebar-more right-sidebar-panel">
                    <p class="right-sidebar-heading">SYSTEM</p>
                    <div class="settings-list">
                        <div class="setting-item">
                            <div class="setting-text">Notifications</div>
                            <div class="setting-set">
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setting-item">
                            <div class="setting-text">Quick Results</div>
                            <div class="setting-set">
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setting-item">
                            <div class="setting-text">Auto Updates</div>
                            <div class="setting-set">
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="right-sidebar-heading">ACCOUNT</p>
                    <div class="settings-list">
                        <div class="setting-item">
                            <div class="setting-text">Offline Mode</div>
                            <div class="setting-set">
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setting-item">
                            <div class="setting-text">Location</div>
                            <div class="setting-set">
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setting-item">
                            <div class="setting-text">Show Offline Users</div>
                            <div class="setting-set">
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setting-item">
                            <div class="setting-text">Save History</div>
                            <div class="setting-set">
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <aside id="chat-messages" class="side-nav white">
            <p class="sidebar-chat-name">Tom Simpson<a href="#" data-activates="chat-messages" class="chat-message-link"><i class="material-icons">keyboard_arrow_right</i></a></p>
            <div class="messages-container">
                <div class="message-wrapper them">
                    <div class="circle-wrapper"><img src="assets/images/profile-image-1.png" class="circle" alt=""></div>
                    <div class="text-wrapper">Lorem Ipsum</div>
                </div>
                <div class="message-wrapper me">
                    <div class="circle-wrapper"><img src="assets/images/profile-image-3.jpg" class="circle" alt=""></div>
                    <div class="text-wrapper">Integer in faucibus diam?</div>
                </div>
                <div class="message-wrapper them">
                    <div class="circle-wrapper"><img src="assets/images/profile-image-1.png" class="circle" alt=""></div>
                    <div class="text-wrapper">Vivamus quis neque volutpat, hendrerit justo vitae, suscipit dui</div>
                </div>
                <div class="message-wrapper me">
                    <div class="circle-wrapper"><img src="assets/images/profile-image-3.jpg" class="circle" alt=""></div>
                    <div class="text-wrapper">Suspendisse condimentum tortor et lorem pretium</div>
                </div>
                <div class="message-wrapper them">
                    <div class="circle-wrapper"><img src="assets/images/profile-image-1.png" class="circle" alt=""></div>
                    <div class="text-wrapper">dolore eu fugiat nulla pariatur</div>
                </div>
                <div class="message-wrapper me">
                    <div class="circle-wrapper"><img src="assets/images/profile-image-3.jpg" class="circle" alt=""></div>
                    <div class="text-wrapper">Duis maximus leo eget massa porta</div>
                </div>
            </div>
            <div class="message-compose-box">
                <div class="input-field">
                    <input placeholder="Write message" id="message_compose" type="text">
                </div>
            </div>
        </aside>
        <!-- Query Menu -->
        <?php
        $role_id = $this->session->userdata('role_id');
        // $queryMenu = "SELECT `u_menu`.`id`, `menu` FROM `u_menu` JOIN `u_akses`
        //                   ON `u_menu`.`id` = `u_akses`.`menu_id` WHERE `u_akses`.`role_id` = $role_id
        //             ORDER BY `u_akses`.`menu_id` ASC";
        $queryMenu = "SELECT * FROM u_menu WHERE id = '$role_id'";
        $menu = $this->db->query($queryMenu)->result_array();
        ?>
        <aside id="slide-out" class="side-nav white fixed">
            <div class="side-nav-wrapper">
                <div class="sidebar-profile">
                    <div class="sidebar-profile-image">
                        <img src="<?= base_url('tmplt/assets/img/user/') . $user['image']; ?>" class="circle" alt="">
                    </div>
                    <div class="sidebar-profile-info">
                        <a href="javascript:void(0);" class="account-settings-link">
                            <p><?= $user['username']; ?></p>
                            <span><?= $user['email']; ?><i class="material-icons right">arrow_drop_down</i></span>
                        </a>
                    </div>
                </div>
                <div class="sidebar-account-settings">
                    <ul>
                        <li class="no-padding">
                            <a class="waves-effect waves-grey"><i class="material-icons">mail_outline</i>Inbox</a>
                        </li>
                        <li class="no-padding">
                            <a class="waves-effect waves-grey"><i class="material-icons">star_border</i>Starred<span class="new badge">18</span></a>
                        </li>
                        <li class="no-padding">
                            <a class="waves-effect waves-grey"><i class="material-icons">done</i>Sent Mail</a>
                        </li>
                        <li class="no-padding">
                            <a class="waves-effect waves-grey"><i class="material-icons">history</i>History<span class="new grey lighten-1 badge">3 new</span></a>
                        </li>
                        <li class="divider"></li>
                        <li class="no-padding">
                            <a class="waves-effect waves-grey modal-trigger keluar" href="<?= base_url('Auth/logout'); ?>"><i class="material-icons">exit_to_app</i>Sign Out</a>
                        </li>
                    </ul>
                </div>
                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                    <?php foreach ($menu as $m) : ?>
                        <?php
                        $menuId = $m['id'];
                        $qsubmenu = "SELECT * FROM `u_submenu` WHERE `menu_id` = $menuId AND `is_active` = 1";
                        $submen = $this->db->query($qsubmenu)->result_array();
                        ?>
                        <?php foreach ($submen as $sm) : ?>
                            <li class="no-padding">
                                <a class="collapsible-header waves-effect waves-grey" href="<?= base_url($sm['url']); ?>">
                                    <i class="material-icons"><?= $sm['icon']; ?></i><?= $sm['title']; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey keluar" href="<?= base_url('Auth/logout'); ?>"><i class="material-icons">exit_to_app</i>Logout</a>
                        <div class="collapsible-body">
                        </div>
                    </li>
                </ul>
                <div class="footer">
                    <p class="copyright">Steelcoders ©</p>
                    <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
                </div>
            </div>
        </aside>