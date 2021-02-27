<?php 

function add_theme_capabilities() {

    $administrator_role = get_role( 'administrator' );

    $administrator_role->add_cap( 'edit_sesion' ); 
    $administrator_role->add_cap( 'edit_sesions' ); 
    $administrator_role->add_cap( 'edit_other_sesions' ); 
    $administrator_role->add_cap( 'publish_sesions' ); 
    $administrator_role->add_cap( 'read_sesion' ); 
    $administrator_role->add_cap( 'read_private_sesions' ); 
    $administrator_role->add_cap( 'delete_sesion' );
    
    $administrator_role->add_cap( 'edit_measurement' ); 
    $administrator_role->add_cap( 'edit_measurements' ); 
    $administrator_role->add_cap( 'edit_other_measurements' ); 
    $administrator_role->add_cap( 'publish_measurements' ); 
    $administrator_role->add_cap( 'read_measurement' ); 
    $administrator_role->add_cap( 'read_private_measurements' ); 
    $administrator_role->add_cap( 'delete_measurement' );

    $editor_role = get_role( 'editor' );

    $editor_role->add_cap( 'edit_sesion' ); 
    $editor_role->add_cap( 'edit_sesions' ); 
    $editor_role->add_cap( 'edit_other_sesions' ); 
    $editor_role->add_cap( 'publish_sesions' ); 
    $editor_role->add_cap( 'read_sesion' ); 
    $editor_role->add_cap( 'read_private_sesions' ); 
    $editor_role->add_cap( 'delete_sesion' );
    
    $editor_role->add_cap( 'edit_measurement' ); 
    $editor_role->add_cap( 'edit_measurements' ); 
    $editor_role->add_cap( 'edit_other_measurements' ); 
    $editor_role->add_cap( 'publish_measurements' ); 
    $editor_role->add_cap( 'read_measurement' ); 
    $editor_role->add_cap( 'read_private_measurements' ); 
    $editor_role->add_cap( 'delete_measurement' );

}
add_action( 'admin_init', 'add_theme_capabilities');