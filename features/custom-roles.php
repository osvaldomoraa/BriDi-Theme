<?php

function theme_custom_roles() {

    $custom_roles_status = get_option('custom_roles_already_set');

    if( !$custom_roles_status ) {

        add_role( 'coordinator', 'Coordinador', array( 
            'edit_files'                => true,
            'moderate_comments'         => true,
            'manage_categories'         => true,
            'manage_links'              => true,
            'upload_files'              => true,
            'edit_posts'                => true,
            'edit_others_posts'         => true,
            'edit_published_posts'      => true,
            'publish_posts'             => true,
            'read'                      => true,
            'delete_posts'              => true,
            'delete_others_posts'       => true,
            'delete_published_posts'    => true,
            'delete_private_posts'      => true,
            'edit_private_posts'        => true,
            'read_private_posts'        => true,
            'edit_sesion'               => true,
            'edit_sesions'              => true,
            'edit_other_sesions'        => true,
            'publish_sesions'           => true,
            'read_sesion'               => true,
            'read_private_sesions'      => true,
            'delete_sesion'             => true,
            ) 
        );

        add_role( 'helper', 'Ayudante', array( 
            'edit_files'                =>  true,
            'moderate_comments'         =>  true,
            'manage_categories'         =>  true,
            'manage_links'              =>  true,
            'upload_files'              =>  true,
            'edit_posts'                =>  true,
            'edit_published_posts'      =>  true,
            'publish_posts'             =>  true,
            'read'                      =>  true,
            'delete_posts'              =>  true,
            'delete_published_posts'    =>  true,
            'delete_private_posts'      =>  true,
            'edit_private_posts'        =>  true,
            'read_private_posts'        =>  true,
            'edit_sesion'               =>  true,
            'edit_sesions'              =>  true,
            'publish_sesions'           =>  true,
            'read_sesion'               =>  true,
            'read_private_sesions'      =>  true,
            'delete_sesion'             =>  true,
            ) 
        );

        add_role( 'participant', 'Participante', array( 
            'read'                      =>  true,
            ) 
        );

        update_option('custom_roles_already_set', true);
    }
}

add_action('after_setup_theme','theme_custom_roles');