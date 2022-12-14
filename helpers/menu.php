<?php
function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

$url=curPageName();


include_once "firewall/config.php";
include_once "firewall/project-security.php";
?>
      <!DOCTYPE html>

<html lang="en">

<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    
    <!-- PAGE TITLE HERE -->
    <title>INBAS</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- [if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif] -->
    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <!--link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css" /-->
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.min.css">
    <!-- ANIMATE STYLE SHEET --> 
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/loader.min.css">    
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="css/skin/skin-1.css">
    <!-- CUSTOM  STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">   
    <script src="https://kit.fontawesome.com/1e9e60af16.js" crossorigin="anonymous"></script>

    
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">
    
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic' rel='stylesheet' type='text/css'>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
		.contenedor{
	    position: relative;
    display: inline-block;
    
}
 
.texto-encima{
    position: absolute;
    top: 10px;
    left: 10px;
}
.centrado{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

	<div class="page-wraper"> 
          <!-- HEADER START -->
        <header class="site-header header-style-1 ">
        
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="wt-topbar-right clearfix">
                        	<ul class="social-bx list-inline pull-right">
                                <li>Horario: 9:00 a.m. ??? 5:00 p.m.</li>
                               
                            </ul>
                            <ul class="list-unstyled e-p-bx pull-right">
                                <li><i class="fa fa-envelope"></i>info@inbas.mx</li>
                                <li><i class="fa fa-phone"></i>(662) 1101990</li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="sticky-header main-bar-wraper">
                <div class="main-bar bg-white">
                    <div class="container">
                        <div class="logo-header">
                            <a href="index">
                                <img src="images/logo-light.png" width="171" height="49" alt="" />
                            </a>
                        </div>
                        <!-- NAV Toggle Button -->
                        <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- ETRA Nav -->

                        <!-- SITE Search -->
                        <div class="site-search">
                            <form action="#">
                                <div class="input-group">
                                    <input name="site-search" type="text" class="form-control" placeholder="Type to search">
                                    <span class="input-group-btn">
                                        <button type="button" class="site-button"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <!-- MAIN Vav -->
                        <div class="header-nav navbar-collapse collapse animate" data-animate="fadeInRightBig" data-duration="1.5s" data-delay="0.8s" data-offset="100">
                            <ul class=" nav navbar-nav">
                                <li <?php if($url=='index.php'){echo 'class="active"';}?>>
                                    <a href="index">Inicio</a>
                                </li>
                            
          						<li <?php if($url=='nosotros.php'){echo 'class="active"';}?>>
                                    <a href="nosotros">nosotros</a>
                                </li>
                                <li <?php if($url=='servicios.php'){echo 'class="active"';}?>>
                                    <a href="servicios">servicios</a>
                                </li>
                                <li <?php if($url=='proyectos.php'){echo 'class="active"';}?>>
                                    <a href="proyectos">proyectos</a>
                                </li>
                                <li <?php if($url=='contacto.php'){echo 'class="active"';}?>>
                                    <a href="contacto">contacto</a>
                                </li>
                        <li <?php if($url=='reclutamiento.php'){echo 'class="active"';}?>>
                                    <a href="reclutamiento">reclutamiento</a>
                                </li>
                                <li>
                                    <a style="background-color: #f58820;
    color: #fff;" href="pdf/CV_INBAS_2020.pdf" target="_blank">cv inbas      &nbsp;&nbsp; <i style="font-size:15px;color:#fff;" class="fas fa-cloud-download-alt"></i></a>
                                </li>
  
   

                                
      
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </header>
        <!-- HEADER END -->