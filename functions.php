<?php
/**
 * L'ensemble des fonctions du thème
 */

function enfiler_css(){
    wp_enqueue_style('4w4-principal', //identificateur
                     get_template_directory_uri() . '/style.css', //adresse uri de la feuille de style
                     array(), //definition de la dépendence
                     filemtime(get_template_directory() . '/style.css')); //calcul de la version de la feuille de style
}

add_action('wp_enqueue_scripts', 'enfiler_css');

/* -------------------------------------- Enregitrement des menus */
function enregistre_menus(){
    register_nav_menus( array(
    'menu_entete' => 'Menu entete',
    'menu_sidebar'  => 'Menu sidebar',
    ) );
}
add_action( 'after_setup_theme', 'enregistre_menus', 0 );

/* -------------------------------------- add_theme_suport */

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
'height' => 150,
'width'  => 150
) );


/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function cidweb_modifie_requete_principal( $query ) {
    if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
      $query->set( 'category_name', '4w4' );
      $query->set( 'orderby', 'title' );
      $query->set( 'order', 'ASC' );
      }
     }
     add_action( 'pre_get_posts', 'cidweb_modifie_requete_principal' );





/** 
* Modifie la variable du titre de wordpress (le tronquant)
* dépendant de sa longueur ($max)
* et de sa position (!is_single())
*/
/*    function max_title_length( $title ) {
        $max = 25;
        if( strlen( $title ) > $max && !is_single()) {
        return substr( $title, 0, $max ). " &hellip;";
        } else {
        return $title;
        }
        }
         
        add_filter( 'the_title', 'max_title_length');
*/
    