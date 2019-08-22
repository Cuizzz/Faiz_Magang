<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <title>Sign Up</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link href="<?php echo site_url('tmplt/Source/assets/plugins/materialize/css/materialize.min.css') ?>" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo site_url('tmplt/Source/assets/plugins/material-preloader/css/materialPreloader.min.css') ?>" rel="stylesheet">
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

<body class="signup-page">
    <div class="loader-bg"></div>
    <div class="loader">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="mn-content valign-wrapper">
        <main class="mn-inner container ">
            <div class="valign">
                <div class="row">
                    <div class="col s12 m6 l5 offset-l4 offset-m2">
                        <div class="card white darken-1">
                            <div class="card-content ">
                                <span class="card-title">Sign Up</span>
                                <div class="row">
                                    <form class="col s12" method="post" action="<?= base_url('Auth/Up'); ?>">
                                        <div class="input-field col s12">
                                            <input name="username" id="username" type="text" value="<?= set_value('username'); ?>" class="validate">
                                            <label for="username">Name</label>
                                            <?= form_error('username', '<small style="color:red;">', '</small>'); ?>
                                        </div>
                                        <div class="input-field col s12">
                                            <select class="js-states browser-default" name="jenis_kel" abindex="-1" style="width: 100%" id="basic">
                                                <optgroup label="Jenis Kelamin" style="font:bold;">
                                                    <option value="L">L</option>
                                                    <option value="P">P</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="input-field col s12">
                                            <input name="telp" id="telp" type="text" value="<?= set_value('telp'); ?>" class="validate">
                                            <label for="telp">No Hp</label>
                                            <?= form_error('telp', '<small style="color:red;">', '</small>'); ?>
                                        </div>
                                        <div class="input-field col s12">
                                            <input name="email" id="email" type="text" value="<?= set_value('email'); ?>" class="validate">
                                            <label for="email">Email</label>
                                            <?= form_error('email', '<small style="color:red;">', '</small>'); ?>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="password1" name="password1" type="password" class="validate">
                                            <label for="password1">Password</label>
                                            <?= form_error('password1', '<small style="color:red;">', '</small>'); ?>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="password2" name="password2" type="password" class="validate">
                                            <label for="password2">Confirm Password</label>
                                        </div>
                                        <div class="col s12 right-align m-t-sm">
                                            <a href="<?= base_url(); ?>auth/" class="waves-effect waves-grey btn-flat">Sign in</a>
                                            <button type="submit" class="waves-effect waves-light btn teal">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Javascripts -->
    <script src="<?= base_url(); ?>tmplt/Source/assets/plugins/jquery/jquery-2.2.0.min.js"></script>
    <script src="<?= base_url(); ?>tmplt/Source/assets/plugins/materialize/js/materialize.min.js"></script>
    <script src="<?= base_url(); ?>tmplt/Source/assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
    <script src="<?= base_url(); ?>tmplt/Source/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
    <script src="<?php echo site_url('tmplt/Source/assets/plugins/select2/js/select2.min.js') ?>"></script>
    <script src="<?php echo site_url('tmplt/Source/assets/js/pages/form-select2.js') ?>"></script>
    <script src="<?= base_url(); ?>tmplt/Source/assets/js/alpha.min.js"></script>

</body>

</html>