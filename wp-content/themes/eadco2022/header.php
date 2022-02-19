<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EAD-CO 2022</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo get_stylesheet_directory_uri() . '/assets/vendor/aos/aos.css'; ?>" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css'; ?>" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri() . '/assets/vendor/remixicon/remixicon.css'; ?>" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css'; ?>';?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo get_stylesheet_directory_uri() . '/assets/css/style.css'; ?>" rel="stylesheet">


    <!-- =======================================================
  * Template Name: Arsha - v4.7.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <?php

    $menuLocations = get_nav_menu_locations();
    $menuID = $menuLocations['menu-1']; // Get the *primary* menu ID
    $primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.    
    ?>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto">
                <a href="<?php echo home_url(); ?>" class="logo me-auto">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-mini.png" alt="" class="img-fluid"> Rede EaD-CO
                </a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <!-- <ul>
                    <?php
                    foreach ($primaryNav as $navItem) {
                        if (empty($navItem->menu_item_parent)) { ?>
                            <li class="dropdown"><a href="<?= $navItem->url; ?>"><span><?= $navItem->title; ?></span> </a>
                                <ul>
                                    <?php
                                    foreach ($primaryNav as $subItem) {
                                        if ($subItem->menu_item_parent == $navItem->ID) { ?>
                                            <li class="dropdown"><a href="<?= $subItem->url; ?>"><span><?= $subItem->title; ?></span> </a>
                                                <ul>
                                                    <?php
                                                    foreach ($primaryNav as $subItem1) {
                                                        if ($subItem1->menu_item_parent == $subItem->ID) { ?>
                                                            <li><a href="#"><?= $subItem1->title; ?></a></li>
                                                    <?php }
                                                    } ?>
                                                </ul>
                                            </li>
                                    <?php }
                                    } ?>
                                </ul>
                            </li>
                    <?php }
                    } ?>
                </ul> -->
                <ul>
                    <li><a class="nav-link scrollto active" href="https://setec.ufmt.br/seminarioead2022/">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Rede de Pesquisa EaD-CO</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="https://setec.ufmt.br/seminarioead2022/#team">Equipe de Pesquisa</a></li>
                            <li><a href="https://setec.ufmt.br/seminarioead2022/#relatorio-pesquisa">Relatório de Pesquisa</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>SEAD-CO</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown"><a>IV SEAD-CO (2022)</a>
                                <ul>                                    
                                    <li><a href="https://setec.ufmt.br/seminarioead2022/">Coordenação do Evento</a></li>
                                    <li><a href="https://setec.ufmt.br/seminarioead2022/">Comissão Científica</a></li>
                                    <li><a href="https://setec.ufmt.br/seminarioead2022/">Comissão Organizadora</a></li>
                                    <li><a href="https://setec.ufmt.br/seminarioead2022/">Produção Online</a></li>
                                    <li><a href="https://setec.ufmt.br/seminarioead2022/">Palestrantes</a></li>
                                    <li><a href="https://setec.ufmt.br/seminarioead2022/">Trabalhos Aprovados</a></li>
                                    <li><a href="https://setec.ufmt.br/seminarioead2022/">Anais</a></li>
                                </ul>
                            </li>
                            <li><a href="https://setec.ufmt.br/seminarioead2022/iii-sead-co-2020/">III SEAD-CO (2020)</a></li>
                            <li><a href="https://setec.ufmt.br/seminarioead2022/ii-sead-co-2018/">II SEAD-CO (2018)</a></li>
                            <li><a href="https://setec.ufmt.br/seminarioead2022/i-sead-co-2017/">I SEAD-CO (2017)</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Publicações</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="https://setec.ufmt.br/seminarioead2022/livros-e-capitulos/">Livros e capítulos</a></li>
                            <li><a href="https://setec.ufmt.br/seminarioead2022/anais-dos-eventos/">Anais de eventos</a></li>
                            <li><a href="https://setec.ufmt.br/seminarioead2022/materiais-tecnicos-da-pesquisa/">Materiais Técnicos da pesquisa</a></li>
                        </ul>
                    </li>                    
                    <li><a class="nav-link scrollto" href="https://setec.ufmt.br/seminarioead2022/contact">Contato</a></li>
                    <li><a class="getstarted scrollto" href="https://setec.ufmt.br/seminarioead2022/">Inscrições</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->