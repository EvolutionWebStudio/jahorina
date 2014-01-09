<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $this->page_title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/normalize.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/foundation.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>fancybox/jquery.fancybox-1.3.4.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/smoothness/jquery-ui-1.8.16.custom.css">
    <link href='http://fonts.googleapis.com/css?family=Marmelad&subset=latin-ext,latin' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css" />

    <script src="<?php echo base_url(); ?>js/vendor/modernizr.js"></script>
</head>

<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="main-wrapper row">
    <header class="main-header">
        <nav class="main-menu clearfix">
            <a href="<?php echo base_url(); ?>"><h1 class="logo">Jahorina - Vaš lični vodič</h1></a>
            <ul class="navigation-block">
                <li><a href="<?php echo site_url("jahorina"); ?>">Jahorina</a>
                    <ul>
                        <li><a href="<?php echo site_url("istorija-planine"); ?>">Istorija planine</a></li>
                        <li><a href="<?php echo site_url("kultura-i-umjetnost"); ?>">Kultura i umjetnost</a></li>
                        <li><a href="<?php echo site_url("sport-i-rekreacija"); ?>">Sport i rekreacija</a></li>
                    </ul>
                </li>

                <li><a href="<?php echo site_url("turizam"); ?>">Turizam</a></li>
                <li><a href="<?php echo site_url("zabava"); ?>">Zabava</a></li>
                <li><a href="<?php echo site_url("galerija"); ?>">Galerija</a></li>
                <li><a href="<?php echo site_url("interactive"); ?>">Interactive</a></li>
                <li><a href="<?php echo site_url("jahorina-info"); ?>">Jahorina info</a>
                    <ul>
                        <li><a href="<?php echo site_url("nova-godina"); ?>">Doček nove godine</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="main-slider">
            <img src="<?php echo base_url(); ?>img/slider/jahorina2.jpg" alt=""/>
        </div>
        <div class="header-background"></div>
    </header>

    <div class="large-12 columns">
        <div class="main-container">
            <div class="row">
                <div class="large-8 columns">
                    <?php echo $contents; ?>
                </div>
                <aside class="large-4 columns">
                    <?php $this->load->view('layout/sidebar.php'); ?>
                </aside>
            </div>
            <?php if ($this->uri->segment(1)===FALSE): ?>
                <div class="row">
                    <div class="large-6 columns">
                        <?php $this->load->view('layout/vremenska_prognoza.php'); ?>
                    </div>
                    <div class="large-6 columns">
                        <?php $this->load->view('layout/kamera.php'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <?php $this->load->view('layout/mapa.php'); ?>
                    </div>
                </div>

            <?php endif ?>
        </div><!-- //main-content -->
    </div>

    <footer class="large-12 columns main-footer">
        <div class="row">
            <nav class="large-9 columns footer-menu">
                <ul>
                    <li><a href="#">Vijesti</a></li>
                    <li><a href="#">Istorija planine</a></li>
                    <li><a href="#">Turizam</a></li>
                    <li><a href="#">Sport i rekreacija</a></li>
                    <li><a href="#">Jahorina info</a></li>
                </ul>
            </nav>

            <div class="large-3 columns">
                <h4>Powered by</h4>
                <a href="http://matcomp.ba" title="Matrix Computers - Pale">Matrix Computers</a>
            </div>
        </div>

        <div class="copyright">
            Jahorina - Vaš lični vodič © 2013
        </div>

    </footer>

</div><!-- //main-wrapper -->

<script src="<?php echo base_url(); ?>js/jquery.js"></script>
<script src="<?php echo base_url(); ?>js/libs/jquery-ui-1.8.16.custom.min.js"></script>
<script src="<?php echo base_url(); ?>js/foundation.min.js"></script>
<script src="<?php echo base_url(); ?>fancybox/jquery.fancybox-1.3.4.pack.js"></script>

<script src="<?php echo base_url(); ?>js/plugins.js"></script>
<script src="<?php echo base_url(); ?>js/main.js"></script>

<!--
<script src="js/foundation/foundation.js"></script>
<script src="js/foundation/foundation.alerts.js"></script>
<script src="js/foundation/foundation.clearing.js"></script>
<script src="js/foundation/foundation.cookie.js"></script>
<script src="js/foundation/foundation.dropdown.js"></script>
<script src="js/foundation/foundation.forms.js"></script>
<script src="js/foundation/foundation.joyride.js"></script>
<script src="js/foundation/foundation.magellan.js"></script>
<script src="js/foundation/foundation.orbit.js"></script>
<script src="js/foundation/foundation.reveal.js"></script>
<script src="js/foundation/foundation.section.js"></script>
<script src="js/foundation/foundation.tooltips.js"></script>
<script src="js/foundation/foundation.topbar.js"></script>
<script src="js/foundation/foundation.interchange.js"></script>
<script src="js/foundation/foundation.placeholder.js"></script>
<script src="js/foundation/foundation.abide.js"></script>
-->

<script>
    $(document).foundation();
</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<!--
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
-->
</body>
</html>
