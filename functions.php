<?php
/**
 * L'ensemble des fonctions du thème
 */
?>

<?php

function enfiler_css(){
    wp_enqueue_style('4w4-principal', //identificateur
                     get_template_directory_uri() . '/style.css', //adresse uri de la feuille de style
                     array(), //definition de la dépendence
                     filemtime(get_template_directory() . '/style.css')); //calcul de la version de la feuille de style
}

add_action('wp_enqueue_scripts', 'enfiler_css')

?>