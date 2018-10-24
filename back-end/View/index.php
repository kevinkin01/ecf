<!DOCTYPE html>
<html lang="fr" >
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENTRAIDE & CULTURE</title>
    <link rel="stylesheet" href="View/css/style.css">
    <script type='text/javascript' href='View/js/script.js'></script>
    <script>window.console = window.console || function(t) {};</script>
    <script> if (document.location.search.match(/type=embed/gi)) {window.parent.postMessage("resize", "*");}</script>
    <!---------------links------------------->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="View/images/favicon.ico">
    <!-- Css files -->
    <link href="View/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="View/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="View/css/flexslider.css" rel="stylesheet" type="text/css" />
    <link href="View/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link href="View/css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <!-- faviticon -->
    <link rel="apple-touch-icon" sizes="57x57" href="View/img/faviticon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="View/img/faviticon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="View/img/faviticon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="View/img/faviticon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="View/img/faviticon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="View/img/faviticon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="View/img/faviticon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="View/img/faviticon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="View/img/faviticon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="View/img/faviticon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="View/img/faviticon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="View/img/faviticon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="View/img/faviticon/favicon-16x16.png">
    <link rel="manifest" href="img/faviticon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="View/img/faviticon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!---------------start------------------->
</head>
<body translate="no" >
<div class="site-wrap">
    <div class="panel-wrap animate--none">
        <div class="globeyellow"><img src= "View/img/globe-yellow.png" alt=""/></div>
        <!---------------accueil------------------->
<?php include 'accueil.php';?>
    <!---------------présentation------------------->
<?php include 'presentation.php';?>
    <!---------------ancrage local------------------->
<?php include 'ancrage.php';?>
    <!---------------asbl mapping------------------->
<?php include 'asbl.php';?>
    <!---------------entraide------------------->
<?php include 'entraide.php';?>
    <!---------------culture------------------->
<?php include 'culture.php';?>
    <!---------------infos pratiques------------------->
<?php include 'infos.php';?>

<script src="View/js/jquery.min.js" type="text/javascript"></script>
<script src="View/js/bootstrap.min.js" type="text/javascript"></script>
<script src="View/js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="View/js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="View/js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="View/js/parallax.js" type="text/javascript"></script>
<script src="View/js/validate.js" type="text/javascript"></script>
<script src="View/js/jquery.twitter.js" type="text/javascript"></script>
<script src="View/js/myscript.js" type="text/javascript"></script>
<script>
    function texts(evt, textApp) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(textApp).style.display = "block";
        evt.currentTarget.className += " active";
    }
    function text(evt, textAp) {
        var i, tabcontent1, tablink;
        tabcontent1 = document.getElementsByClassName("tabcontent1");
        for (i = 0; i < tabcontent1.length; i++) {
            tabcontent1[i].style.display = "none";
        }
        tablink = document.getElementsByClassName("tablink");
        for (i = 0; i < tablink.length; i++) {
            tablink[i].className = tablink[i].className.replace(" active", "");
        }
        document.getElementById(textAp).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
        <script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-41c52890748cd7143004e05d3c5f786c66b19939c4500ce446314d1748483e13.js"></script>
        <script>
            <?php
            include "js/script.min.js";
            ?>
        </script>
</body>
</html>