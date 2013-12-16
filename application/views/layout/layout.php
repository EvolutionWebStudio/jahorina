<!doctype html>

<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<!-- Mirrored from travel.equiet.sk/ by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 08 Jun 2013 19:51:34 GMT -->
<head>
    <meta charset="utf-8">

    <title><?php echo $this->page_title; ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Load CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/foundation.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>fancybox/jquery.fancybox-1.3.4.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/smoothness/jquery-ui-1.8.16.custom.css">

    <!-- Page icon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- Load Modernizr -->
    <script src="<?php echo base_url(); ?>js/libs/modernizr-2.0.min.js"></script>

    <!-- Load JavaScript -->
    <script src="../ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>js/libs/jquery-1.6.2.min.js"><\/script>')</script>
    <script src="<?php echo base_url(); ?>js/libs/jquery-ui-1.8.16.custom.min.js"></script>
    <script src="<?php echo base_url(); ?>js/script.js"></script>
    <script src="<?php echo base_url(); ?>fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script src="<?php echo base_url(); ?>js/datepicker.html"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

</head>
<body>

<!-- Header -->
<header style="background-image:url(<?php echo base_url(); ?>img/placeholders/1280x1024/14.jpg);">

    <div class="row">

        <!-- Title and navigation panel -->
        <div id="panel" class="large-12 columns">

            <!-- Title -->
            <h1><a href="<?php echo base_url(); ?>">Jahorina</a></h1>

            <!-- Navigation -->
            <nav>
                <ul>
                    <li>
                        <a href="<?php echo site_url("vijesti"); ?>">Vijesti</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("istorija-planine"); ?>">Istorija planine</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("turizam"); ?>">Turizam</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("sport-i-rekreacija"); ?>">Sport i rekreacija</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("jahorina-info"); ?>">Jahorina info</a>
                        <ul>
                            <li><a href="<?php echo site_url("nova-godina"); ?>">Doček nove godine</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </div>

    </div>
</header>
<!-- Main content -->
<div class="row">
    <div class="large-8 columns">
        <?php echo $contents; ?>
    </div>
    <div class="large-4 columns">
        <?php include(base_url()."include/_right.php"); ?>
    </div>

</div>


<!-- Footer -->
<footer>
    <div class="row">

        <nav class="large-8 columns">
            <a href="#">Vijesti</a>
            <a href="#">Istorija planine</a>
            <a href="#">Turizam</a>
            <a href="#">Sport i rekreacija</a>
            <a href="#">Jahorina info</a>
        </nav>

        <p class="large-4 columns">
            <strong>Matrix Computers</strong><br />
            <span>Srpskih ratnika 20 , Pale</span><br />
            <span><a href="mailto:contact@travelagency.com">jahorina@matcomp.ba</a></span>
        </p>

        <p class="large-8 columns">
            © 2013 Jahorina
        </p>

    </div>
</footer>

</body>



















</html>