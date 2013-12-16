<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Administratorski panel | Tavor turistička agencija</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="<?php echo base_url(); ?>js/vendor/jquery-1.9.1.min.js"><\/script>')
    </script>


    <link rel="stylesheet" href="<?php echo base_url(); ?>css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/foundation.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/admin_main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>chilistats/little-dashboard.css"/>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.png">

    <script src="<?php echo base_url(); ?>js/vendor/modernizr-2.6.2.min.js"></script>
</head>

<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<header class="main-header">
    <div class="row">
        <h2 class="logo small-8 columns">Administratorski panel</h2>
        <div class="small-4 columns">
            <ul class="secondary-navigation button-group radius">
                <li class="">
                    <a class="small button secondary" href="<?php echo base_url(); ?>" target="_blank" >Prikaži sajt</a>
                </li>
                <li class="">
                    <a class="small button secondary" href="<?php echo site_url("logout"); ?>">Logout</a>
                </li>
                <li class="">
                    <?php echo $this->session->userdata('role'); ?>
                </li>
            </ul>
        </div>

        <div id="panel" class="small-12 columns">
            <nav>
                <ul class="main-navigation button-group radius">
                    <li class="<?=($this->uri->segment(2)===FALSE)?'selected':''?>" >
                        <a class="button" href="<?php echo site_url("admin"); ?>">Sve vijesti</a>
                    </li>
                    <li class="<?=($this->uri->segment(1)==="add-post")?'selected':''?>" >
                        <a class="button" href="<?php echo site_url("add-post"); ?>">Nova vijest</a>
                    </li>

                </ul>
            </nav>

        </div>
    </div>




</header>


<div class="row main-content">

    <?php echo $contents; ?>

</div>

<!-- Footer -->
<footer>
    <div class="row">
        <div class="small-9 columns">
            <p class="copyright">
                © 2013 Jahorina | <a href="http://matcomp.ba/web/web-design" target="_blank" title="Matrix Computers Pale">by matrix web team</a>
            </p>
        </div>
    </div>
</footer>



<script src="<?php echo base_url(); ?>js/plugins.js"></script>
<script src="<?php echo base_url(); ?>js/admin-script.js"></script>
<script src="<?php echo base_url(); ?>js/foundation.min.js"></script>
<script src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>js/foundation/foundation.forms.js"></script>

</body>
</html>
