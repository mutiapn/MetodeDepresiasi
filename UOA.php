<!DOCTYPE html>
<!--
Template Name: Chillaid
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--
Tinker Template
http://www.templatemo.com/tm-506-tinker
-->
        <title>PSE DANIS MUTIA</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <link rel="stylesheet" href="css/lightbox.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
    <ba
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand"><em>Perhitungan Depresiasi</em></a>
                </div>
                <!--/.navbar-header-->
                <!-- <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#" class="scroll-top">Home</a></li> -->
                       <!--  <li><a href="#" class="scroll-link" data-id="about">About Us</a></li>
                        <li><a href="#" class="scroll-link" data-id="portfolio">Portfolio</a></li>
                        <li><a href="#" class="scroll-link" data-id="blog">Blog</a></li>
                        <li><a href="#" class="scroll-link" data-id="contact-us">Contact Us</a></li>
                    </ul>
                </div> --> -->
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->


    <!-- <div class="parallax-content baner-content" id="home">
        <div class="container">
            <div class="text-content">
                <h2><em>TINKER</em> <span>HTML5</span> Template</h2>
                <p>Tinker is free HTML CSS template from templatemo.com that can be used for any kind of website. Please tell your friends about us. Thank you.</p>
                <div class="primary-white-button">
                    <a href="#" class="scroll-link" data-id="about">Let's Start</a>
                </div>
            </div>
        </div>
    </div> -->

<center>
    <br>
    <br>
<div class="container bg-dark text-white">
    <?php
    $HP=null;
    $NR=null;
    $UE=null;
    $UU=null;
    if (isset($_GET['HP'])) {
        $HP=$_GET['HP'];
        $NR=$_GET['NR'];
        $UE=$_GET['UE'];
        $UU=$_GET['UU'];
        $hasil=($HP-$NR)*($UE/$UU);
    }
    ?>
    <div class="rows">
        <form action="UOA.php" method="get">
            <h2><b><center> Units of Activity Depreciation : Units of Production Depreciation</center></b></h2>
            <div class="form-group">
                <label>Costing  :</label>
                <input type="text" name="HP" class="form-control" value="<?php echo $HP; ?>" required>
            </div>
            <div class="form-group">
                <label>Estimated Capacity to Process :</label>
                <input type="text" name="NR" class="form-control" value="<?php echo $NR; ?>"  required>
            </div>
            <div class="form-group">
                <label>First Year Production :</label>
                <input type="text" name="UE" class="form-control" value="<?php echo $UE; ?>"  required>
            </div>
            <div class="form-group">
                <label>Residu Value :</label>
                <input type="text" name="UU" class="form-control" value="<?php echo $UU; ?>"  required>
            </div>
            <br>
            <button type="button" class="btn btn-warning" onclick="location.href='?'">Clear</button>
            <button type="submit" class="btn btn-info">Hitung</button>
            </br>
        </form>
        <br>
        <?php
        if (isset($_GET['HP'])) {
            $hasil = "$" .($hasil);
            echo "<h1>$hasil</h1>" ;
        }
        ?>
    </div>
</div>
    </br>
    </br>
    </center>
</html>