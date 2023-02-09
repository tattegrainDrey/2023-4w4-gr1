<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a class="site__titre"href="<?= bloginfo('url') ?>"><h1><?= bloginfo('name') ?> </h1></a>    
    <h2><?= bloginfo('description') ?> </h2>
    <?php wp_head(); ?>
</head>
<body>
    <header class="site__entete">
       <?php the_custom_logo(); ?> 
       <?php  wp_nav_menu(array( 
                    "menu" => "entete",
                    "container" => "nav",
                    "container_class" => "menu__entete"
                 )); ?>
    </header>