<!DOCTYPE html>
<html lang="sv">

<!-- 

Projektuppgift - Vandra i Väst
Kurs: Webbdesign för CMG, DT197G
Utvecklare: Jeanette Krantz    
Datum: 2023-05-30

-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/styles.css">
    <script src="https://kit.fontawesome.com/1b3245a0b9.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <a class="toplogo" href="<?= get_home_url(); ?>">
        <img class="toplogo-img" src="<?= get_template_directory_uri() ?>/images/VVloggaBlack.png" alt="">
        </a>
        <a class="mobile-nav-icon">&#9776</a>
        <nav class="topnav" id="myTopnav">
            <?php wp_nav_menu(array('theme_location' => 'myTopnav')) ?>
        </nav>
    </header>