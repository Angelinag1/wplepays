<?php
// LIEN VERS FICHIER STYLE 
function theme_lepays_style ()
{
    wp_register_style(  'bootstrap', get_template_directory_uri(  ).'/css/bootstrap.min.css',array(), false,'all');
    wp_enqueue_style( 'bootstrap' );
    
    wp_register_style(  'style', get_template_directory_uri(  ).'/style.css',array(), false,'all');
    wp_enqueue_style( 'style' );

    


};
add_action( 'wp_enqueue_scripts', 'theme_lepays_style');


// INCLURE JQUERY
function includejquery(){
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri(  ) . '/js/jquery-3.6.4.min.js', '', 1, true );

    add_action( 'wp_enqueue_scripts', 'jquery');
}
add_action( 'wp_enqueue_scripts', 'includejquery');


// LIEN VERS FICHIER SCRIPT BOOTSTRAP
function theme_lepays_bootstrapjs ()
{
    wp_register_style(  'bootstrap', get_template_directory_uri(  ).'/css/bootstrap.min.js','', 1,true);
    wp_enqueue_style( 'bootstrap' );
};
add_action( 'wp_enqueue_scripts', 'theme_lepays_bootstrapjs');


// INCLURE LES MENUS
add_theme_support('menus');
register_nav_menus( 
    array(
        'top-menu' =>__('Top Menu', 'theme'),
        'footer-menu' =>__('Footer Menu', 'theme'),
    )
    );

// INCLURE LES IMAGES MISE EN AVANT
add_theme_support( 'post-thumbnails' );

// FORMULAIRE
function custom_contact_form_submit() {
    if ( ! isset( $_POST['custom_contact_form_nonce'] ) || ! wp_verify_nonce( $_POST['custom_contact_form_nonce'], 'custom_contact_form_nonce' ) ) {
      wp_die( 'Erreur de sécurité. Veuillez réessayer.' );
    }
    
    $name = sanitize_text_field( $_POST['nam    e'] );
    $email = sanitize_email( $_POST['email'] );
    $message = wp_kses_post( $_POST['message'] );
    
    $to = 'angelina.garaebiti2000@gmail.com';
    $subject = 'Nouveau message de contact';
    $headers[] = 'From: ' . $name . ' <' . $email . '>';
    
    wp_mail( $to, $subject, $message, $headers );
    
    wp_redirect( home_url( '/merci-pour-votre-message/' ) );
    exit;
  }
  add_action( 'admin_post_nopriv_custom_contact_form', 'custom_contact_form_submit' );
  add_action( 'admin_post_custom_contact_form', 'custom_contact_form_submit' );

  // Ajouter la prise en charge de Bootstrap pour le champ de recherche
// function add_bootstrap_search_form( $form ) {
//     $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
//     <div class="input-group">
//         <input type="text" value="' . get_search_query() . '" name="s" id="s" class="form-control" placeholder="' . esc_attr_x( 'Recherche', 'placeholder' ) . '" />
//         <span class="input-group-btn">
//             <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
//         </span>
//     </div>
//     </form>';

//     return $form;
// }
// add_filter( 'get_search_form', 'add_bootstrap_search_form' );