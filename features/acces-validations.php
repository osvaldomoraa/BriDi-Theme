<?php

function user_logged_verification(){

    if ( !is_user_logged_in() ) {
        wp_redirect( get_option( 'bridi_settings' )[ 'bridi_required_login_notice' ] );
        exit;
    }
}

function current_user_object_query() {

    $current_user = get_userdata( get_current_user_id() );
    return $current_user;
}

function required_pretest_gen_verification($user_id, $user_role) {

    $pretest_gen_status = get_user_meta( $user_id, 'pretest_gen' , true );
    if ( $user_role === 'participant' && $pretest_gen_status !=1 ) {
        wp_redirect( get_option( 'bridi_settings' )[ 'bridi_pretest_gen_required_notice' ] );
        exit;
    } 
}

function required_pretest_module_verification($category, $role, $user_id) {
    switch ($category) {
        case ('sleeping'):
            $pretest_slp_status = get_user_meta( $user_id, 'pretest_slp' , true );
            if ($role === 'participant' && $pretest_slp_status != 1) {
                wp_redirect( get_option( 'bridi_settings' )[ 'bridi_pretest_slp_required_notice' ] );
                exit;
            }   else {
                    break;
            }
        case ('hybrid'):
            $pretest_hyb_status = get_user_meta( $user_id, 'pretest_hyb' , true );
            if ($role === 'participant' && $pretest_hyb_status != 1) {
                wp_redirect( get_option( 'bridi_settings' )[ 'bridi_pretest_hyb_required_notice' ] );
                exit;
            }   else {
                    break;
            }
        case ('exercise'):
            $pretest_exc_status = get_user_meta( $user_id, 'pretest_exc' , true );
            if ($role === 'participant' && $pretest_exc_status != 1) {
                wp_redirect( get_option( 'bridi_settings' )[ 'bridi_pretest_exc_required_notice' ] );
                exit;
            }   else {
                    break;
            }
        case ('sanitation'):
            $pretest_snt_status = get_user_meta( $user_id, 'pretest_snt' , true );
            if ($role === 'participant' && $pretest_snt_status != 1) {
                wp_redirect( get_option( 'bridi_settings' )[ 'bridi_pretest_snt_required_notice' ] );
                exit;
            }   else {
                    break;
            }  
    }
}


    
    
    
    