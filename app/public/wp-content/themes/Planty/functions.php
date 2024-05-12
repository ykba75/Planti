<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
        // Charger votre fichier CSS personnalisé
        wp_enqueue_style( 'style_ccs2', trailingslashit( get_stylesheet_directory_uri() ) . '/css/theme.css', array(), null );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

// Ajouter un lien admin pour les utilisateurs connectés dans le menu de navigation
function add_admin_link_to_menu( $items, $args ) {
    // Vérifier si l'utilisateur est connecté
    if ( is_user_logged_in() && $args->theme_location == 'primary' ) {
        // Ajouter le lien vers la page d'administration
        $items .= '<li class="menu-item"><a href="' . admin_url() . '">Admin</a></li>';
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2 );

?>
