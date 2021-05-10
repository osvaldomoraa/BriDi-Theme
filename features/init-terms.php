<?php

function sesion_custom_terms() {

    $custom_terms_status = get_option('sesion_custom_terms_already_set');

    if( !$custom_terms_status ) {
        $terms = array(
            'Ejercicio' => array(
              'description'=> 'Sesiones del modulo 	Ejercicio',
              'slug' => 'exercise'
            ),
            'Emociones' => array(
              'description'=> 'Sesiones del modulo Emociones',
              'slug' => 'emotions'
            ),
            'Higene' => array(
            'description'=> 'Sesiones del modulo Higene',
            'slug' => 'sanitation'
            ),
            'Sueño' => array(
                'description'=> 'Sesiones del modulo Sueño',
                'slug' => 'sleeping'
            )
          );
          foreach($terms as $term => $meta){
              wp_insert_term(
                $term, 
                'modulo',
                $meta
              );
          }
        update_option('sesion_custom_terms_already_set', true);
    }
}

add_action('init','sesion_custom_terms');