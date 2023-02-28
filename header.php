<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Shadows+Into+Light&family=Wendy+One&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
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
            <div class="entete__droite">
                <?php  wp_nav_menu(array( 
                        "menu" => "entete",
                        "container" => "nav",
                        "container_class" => "menu__entete"
                 )); ?>
            </div>
            <?php
                get_search_form();
             ?>
    </header>
    <aside>
        <h3>Menu Secondaire</h3>
        <?php
            $category = get_queried_object();
            if (isset($category)){
                $menu = $category->slug;
            }
            else {
                $menu = "4w4";
            }
            wp_nav_menu(array(
                "menu"=>$menu,
                "container" => "nav"
            )
            )
        ?>
    </aside>
    <hr>