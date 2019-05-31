<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bosna Burek Konditori</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRaleway:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <h1 class="navbar__logo">Bosna Burek Konditori <span><i class="fas fa-mug-hot"></i></span></h1>

            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            <ul class="navbar__menu">
                <li class="navbar__menu-item"><a href="#" class="active">Hem</a></li>
                <li class="navbar__menu-item"><a href="about.html">Om oss</a></li>
                <li class="navbar__menu-item"><a href="menu.html">Vår meny</a></li>
                <li class="navbar__menu-item"><a href="news.html">Nyheter</a></li>
                <li class="navbar__menu-item"><a href="contact.html">Kontakt</a></li>
            </ul>
        </nav>
    </header>