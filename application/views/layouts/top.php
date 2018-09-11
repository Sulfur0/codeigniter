<!--
Author: Andrés Vega
Description: Layout para el panel de control de aplicación administrativa.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistema Administrativo</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Responsive web template design admin panel" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="<?php echo base_url(); ?>css/panel/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/panel/bar.css">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/panel/pignose.calender.css" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="<?php echo base_url(); ?>css/panel/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/panel/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="<?php echo base_url(); ?>css/panel/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
        <?php include "menu.php"; ?>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    
                    <ul class="top-icons-agileits-w3layouts float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-bell"></i>
                                <!--
                                <span class="badge">4</span>
                                -->
                            </a>
                            <div class="dropdown-menu top-grid-scroll drop-1">
                                <h3 class="sub-title-w3-agileits">Notificaciones del usuario</h3>
                                <a href="#" class="dropdown-item mt-3">    
                                    <div class="notif-content-wthree">
                                        <p class="paragraph-agileits-w3layouts py-2">
                                        No tiene notificaciones
                                        </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">ver todas las notificaciones</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                        <img src="<?php echo base_url(); ?>images/perfil.png" class="img-fluid mb-3" alt="Responsive image">
                                    </div>                                
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Auth/logout">Cerrar Sesión</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--// top-bar -->