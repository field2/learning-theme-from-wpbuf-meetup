<html>
    <head>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    </head>
    <body>
        <h1>
            <?php bloginfo('name'); ?>
            <?php bloginfo('description'); ?>
        </h1>
        <nav class="group">
            <?php
wp_nav_menu();

?>
       
        </nav>