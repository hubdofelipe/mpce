<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Samurai</title>

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="assets/ico/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="assets/ico/favicon-16x16.png" sizes="16x16" />

    <!-- Apple Touch Icon-->
    <link rel="apple-touch-icon" href="assets/ico/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/ico/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/ico/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="167x167" href="assets/ico/favicon-32x32.png">

    <!-- Windows Touch Icon -->
    <meta name="application-name" content="assets/ico/favicon-32x32.png"/>
    <meta name="msapplication-TileColor" content=assets/ico/favicon-32x32.png"/>
    <meta name="msapplication-square70x70logo" content="assets/ico/favicon-32x32.png"/>
    <meta name="msapplication-square150x150logo" content="assets/ico/favicon-32x32.png"/>
    <meta name="msapplication-wide310x150logo" content="assets/ico/favicon-32x32.png"/>
    <meta name="msapplication-square310x310logo" content="assets/ico/favicon-32x32.png"/>

    <!-- Android Touch Icon -->
    <link rel="icon" sizes="192x192" href="assets/ico/favicon-32x32.png">
    <link rel="icon" sizes="128x128" href="assets/ico/favicon-32x32.png">

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
</head>

<body>

<header class="main-header-bundle">
    <div class="main-header js-get-main-header-height">
        <div class="desktop-menu">
            <div class="container">
                <h1 class="main-header__logo-container">
                    <span class="hide-text">Index Samurai</span>
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
                <span class="hide-text">Index Samurai</span>
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
