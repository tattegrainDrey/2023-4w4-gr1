<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cidweb42.sg-host.com/wp-content/uploads/2023/02/Un-e1675955570298.png" type="image/icon type">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Shadows+Into+Light&family=Wendy+One&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <header class="site__entete">
            <div class="entete__gauche">
                <div class="image">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="titre__slogan">  
                    <a class="site__titre"href="<?= bloginfo('url') ?>"><h1><?= bloginfo('name') ?> </h1></a>
                    <h2><?= bloginfo('description') ?> </h2> 
                </div>
            </div>
            <?php  wp_nav_menu(array( 
                    "menu" => "entete",
                    "container" => "nav",
                    "container_class" => "menu__entete"
             )); ?>
    </header>