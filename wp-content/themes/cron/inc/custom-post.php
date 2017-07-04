<?php 

add_action( 'init', 'create_post_type' );

function create_post_type() {
    
    $labels = array(
        'name' => __( '¿Qué hacemos?' ),
        'add_new'               => __( 'Agregar nuevo' )
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'que-hacemos' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'excerpt', 'revisions' ),
        'icon_url'      => 'dashicons-images-alt2'
    );
    
    register_post_type('¿Qué hacemos?',$args);

    $labels = array(
        'name' => __( 'Nuestros Clientes' ),
        'add_new'               => __( 'Agregar nuevo' )
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'nuestros-clientes' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'excerpt', 'revisions' ),
        'icon_url'      => 'dashicons-images-alt2'
    );
    
    register_post_type('Nuestros Clientes',$args);

    $labels = array(
        'name' => __( 'Nuestra Diferencia' ),
        'add_new'               => __( 'Agregar nuevo' )
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'nuestra-diferencia' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'excerpt', 'revisions' ),
        'icon_url'      => 'dashicons-images-alt2'
    );
    
    register_post_type('Nuestra Diferencia',$args);    

}

if( function_exists('acf_add_options_page') && function_exists('acf_add_options_sub_page') ) {

    $option_page_configuracion_theme = acf_add_options_page(array(
        'page_title'    => 'Configuración',
        'menu_slug'     => 'configuracion-tema',
        'capability'    => 'edit_posts',
        'position'      => '30',
        'redirect'      => false
    ));

    /*acf_add_options_sub_page(array(
        'page_title'  => 'Home',
        'menu_slug'   => 'configuracion-theme-home',
        'parent_slug' => $option_page_configuracion_theme['menu_slug']                
    ));      */

    acf_add_options_sub_page(array(
        'page_title'  => 'Header',
        'menu_slug'   => 'configuracion-theme-header',
        'parent_slug' => $option_page_configuracion_theme['menu_slug']                
    ));  

    acf_add_options_sub_page(array(
        'page_title'  => 'Footer',
        'menu_slug'   => 'configuracion-theme-footer',
        'parent_slug' => $option_page_configuracion_theme['menu_slug']                
    )); 

/*
    acf_add_options_sub_page(array(
        'page_title'  => 'Evento activo',
        'menu_slug'   => 'configuracion-evento-activo',
        'parent_slug' => $option_page_configuracion_theme['menu_slug']                
    ));     
*/
    /*
    acf_add_options_sub_page(array(
        'page_title'  => 'Configuración Servicios',
        'menu_slug'   => 'configuracion-servicios',
        'parent_slug' => 'edit.php?post_type=servicios'        
    ));
    
    acf_add_options_sub_page(array(
        'page_title'  => 'Header',
        'menu_slug'   => 'configuracion-theme-header',
        'parent_slug' => $option_page_configuracion_theme['menu_slug']                
    ));  

    acf_add_options_sub_page(array(
        'page_title'  => 'Footer',
        'menu_slug'   => 'configuracion-theme-footer',
        'parent_slug' => $option_page_configuracion_theme['menu_slug']                
    ));         
    */
}


