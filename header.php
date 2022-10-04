<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">
</head>

<body>

<?php
                if (has_nav_menu('header-menu')) : ?>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container'      => 'nav',
                        'menu_class'     => 'right no-bullets no-margin',
                    )); ?>
                <?php endif;
                ?>
