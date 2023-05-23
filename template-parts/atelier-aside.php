<aside class="menu-sec atelier">
        <h3>Nos Ateliers en 2023</h3>
        <?php
            // $category = get_queried_object();
            // if (isset($category)){
            //     $menu = $category->slug;
            // }
            // else {
            //     $menu = "4w4";
            // }
            wp_nav_menu(array(
                "menu"=>"ateliers",
                "container" => "nav"
            )
            )
        ?>
</aside>