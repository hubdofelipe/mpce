<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MISSÃO MPCE - MENTORIA PERSONALIZADA</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/ico/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Misc -->
    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>

    <!-- Remove detecção de formatos do iOS -->
    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="date=no" />
    <meta name="format-detection" content="address=no" />
    <meta name="format-detection" content="email=no" />

    <!-- Fontes -->
    <script src="https://kit.fontawesome.com/5d568d2bbd.js" crossorigin="anonymous"></script>
    <!-- Estilos -->
    <link rel="stylesheet" href="./assets/css/app.min.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
</head>

<body>

<header class="main-header-bundle">
    <div class="main-header js-get-main-header-height">
        <div class="desktop-menu">
            <div class="container">
                <h1 class="main-header__logo-container">
                    <span class="hide-text">MISSÃO MPCE</span>
                    <a href="/">
                        <img class="main-header__logo" src="./assets/images/index-logo.png" alt="">
                    </a>
                </h1>
                <div class="header-content">
                    <?php include 'template-parts/menu/menu-content.php' ?>
                    <div class="burger-icon-container desktop-side-menu-call is-animated">
                        <div class="burger-icon primary"></div>
                    </div>
                    <div class="burger-icon-container desktop-full-menu-call is-animated">
                        <div class="burger-icon primary"></div>
                    </div>
                    <?php include 'template-parts/search.php' ?>
                    <?php include 'template-parts/share.php' ?>
                </div>
            </div>
        </div>
        <div class="mobile-menu">
            <h1 class="mobile-logo">
                <span class="hide-text">MISSÃO MPCE</span>
                <a href="/">
                    <img class="mobile-logo-img" src="./assets/images/index-logo.png" alt="">
                </a>
            </h1>
            <div class="main-header__mobile-controls">
                <div class="burger-icon-container js-main-menu-mobile-toggle is-animated">
                    <div class="burger-icon primary"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="main-header-clearance"></div>

<?php include 'template-parts/menu/main-menu-mobile.php'; ?>
