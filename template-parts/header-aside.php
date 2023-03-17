<aside class="menu-sec">
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