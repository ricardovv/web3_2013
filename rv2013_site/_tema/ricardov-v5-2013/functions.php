<?php
if ( function_exists('register_sidebars') )
    register_sidebars(3);

function mi_imagen($tamano = '') { 
  if ( $images = get_children( array ( 
    'post_parent'    => get_the_ID(), 
    'post_type'      => 'attachment', 
    'numberposts'    => 1, 
    'post_mime_type' => 'image' 
   ))); 
  { 
    foreach( $images as $image ) { 
      if($tamano == 'mini') { 
      $imagen = wp_get_attachment_image( $image->ID, 'thumbnail' ); 
      } if($tamano == 'medio') { 
      $imagen = wp_get_attachment_image( $image->ID, 'medium' ); 
      } if($tamano == 'grande') { 
      $imagen = wp_get_attachment_image( $image->ID, 'full' ); 
      } 
      echo $imagen; 
    } 
  } 
} 

// menus nuevos
function register_my_menus() {
  register_nav_menus(
    array( 'header-menu' => __( 'Header Menu' ), 'extra-menu' => __( 'Extra Menu' ))
  );
}
add_action( 'init', 'register_my_menus' );


?>
