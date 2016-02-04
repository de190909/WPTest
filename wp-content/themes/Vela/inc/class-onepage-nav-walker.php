<?php
if ( ! class_exists( 'Wyde_OnePage_Walker_Nav' ) ) {  
     
    class Wyde_OnePage_Walker_Nav extends Walker_Nav_Menu{
          function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0){
               global $wp_query;
               $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
               $class_names = $value = '';
               $classes = empty( $item->classes ) ? array() : (array) $item->classes;
               $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
               $class_names = ' class="'. esc_attr( $class_names ) . '"';
               $output .= $indent . '<li id="menu-item-'. esc_attr( $item->ID ) . '"' . $value . $class_names .'>';
          
               $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
               $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
               $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';           
               if($item->object == 'page' && $depth == 0)
               {
                    $varpost = get_post($item->object_id);
                    if(is_front_page()){
                      $attributes .= ' href="#' . esc_attr( $varpost->post_name ). '"';
                    }else{
                      $attributes .= ' href="'. esc_url( home_url() .'/#' . $varpost->post_name ). '"';
                    }

               }else{
                    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_url( $item->url ) .'"' : '';
               }

                $item_output = $args->before;
                $item_output .= '<a'. $attributes .'>';
                $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID );
                $item_output .= $args->link_after;
                $item_output .= '</a>';
                $item_output .= $args->after;
                $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
         }
    }

}