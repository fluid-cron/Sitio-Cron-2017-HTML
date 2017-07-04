<?php
// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action('wp_head', 'wp_generator');

function wp_get_menu_array($current_menu) {
 
  $menu_items = wp_get_nav_menu_items($current_menu);
  $menu_list  = '<div class="collapse navbar-toggleable-sm" id="navbarResponsive">' ."\n";
  $menu_list .= '<ul class="nav navbar-nav float-md-right">' ."\n";
  $count = 0;
  $submenu = false;
   
  foreach( $menu_items as $menu_item ) {
       
      $link = $menu_item->url;
      $title = $menu_item->title;
       
      if ( !$menu_item->menu_item_parent ) {
          $parent_id = $menu_item->ID;
           
          $menu_list .= '<li class="nav-item">' ."\n";
          $menu_list .= '<a href="'.$link.'" class="nav-link page-scroll">'.$title.'</a>' ."\n";
      }
      if ( $parent_id == $menu_item->menu_item_parent ) {
          if ( !$submenu ) {
              $submenu = true;
              $menu_list .= '<ul class="sub-menu">' ."\n";
          }
          $menu_list .= '<li class="nav-item">' ."\n";
          $menu_list .= '<a href="'.$link.'" class="nav-link page-scroll">'.$title.'</a>' ."\n";
          $menu_list .= '</li>' ."\n";
               
          if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ){
              $menu_list .= '</ul>' ."\n";
              $submenu = false;
          }
      }
      if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id ) { 
          $menu_list .= '</li>' ."\n";      
          $submenu = false;
      }
      $count++;
  }
   
  $menu_list .= '</ul>' ."\n";
  $menu_list .= '</div>' ."\n";
  echo $menu_list;
     
}

function howdy_message($translated_text, $text, $domain) {
    $new_message = str_replace('Howdy', 'Bienvenido', $text);
    return $new_message;
}
add_filter('gettext', 'howdy_message', 10, 3);      