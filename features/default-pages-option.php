<?php

function add_bridi_theme_menu() {
    add_submenu_page('options-general.php', 'Paginas requeridas', 'Paginas requeridas', 'manage_options', 'bridi-theme', 'bridi_theme_function');
}
add_action('admin_menu', 'add_bridi_theme_menu');

function bridi_settings_init() {

    register_setting( 'bridi-setting', 'bridi_settings' );

    add_settings_section('bridi-theme-section', __( 'Paginas requeridas', 'bridi-theme' ), 'bridi_settings_section_callback', 'bridi-setting' );

    add_settings_field( 'bridi_register_form_placement', __( 'Formulario de registro:', 'bridi-theme' ), 'bridi_register_form_placement', 'bridi-setting', 'bridi-theme-section' );
    add_settings_field( 'bridi_pretest_gen_placement', __( 'Pretest General:', 'bridi-theme' ), 'bridi_pretest_gen_placement', 'bridi-setting', 'bridi-theme-section' );
    add_settings_field( 'bridi_pretest_slp_placement', __( 'Pretest Sueño:', 'bridi-theme' ), 'bridi_pretest_slp_placement', 'bridi-setting', 'bridi-theme-section' );
    add_settings_field( 'bridi_pretest_emt_placement', __( 'Pretest Estres y Emociones:', 'bridi-theme' ), 'bridi_pretest_emt_placement', 'bridi-setting', 'bridi-theme-section' );
    add_settings_field( 'bridi_pretest_exc_placement', __( 'Pretest Ejercicio:', 'bridi-theme' ), 'bridi_pretest_exc_placement', 'bridi-setting', 'bridi-theme-section' );
    add_settings_field( 'bridi_pretest_snt_placement', __( 'Pretest Higene:', 'bridi-theme' ), 'bridi_pretest_snt_placement', 'bridi-setting', 'bridi-theme-section' );
    add_settings_field( 'bridi_required_login_notice', __( 'Aviso de inicio de sesion requerido:', 'bridi-theme' ), 'bridi_required_login_notice', 'bridi-setting', 'bridi-theme-section' );
    add_settings_field( 'bridi_pretest_gen_required_notice', __( 'Aviso de Pretest General requerido:', 'bridi-theme' ), 'bridi_pretest_gen_required_notice', 'bridi-setting', 'bridi-theme-section' );
    add_settings_field( 'bridi_pretest_slp_required_notice', __( 'Aviso de Pretest Sueño requerido:', 'bridi-theme' ), 'bridi_pretest_slp_required_notice', 'bridi-setting', 'bridi-theme-section' );
    add_settings_field( 'bridi_pretest_emt_required_notice', __( 'Aviso de Pretest Estres y Emociones requerido:', 'bridi-theme' ), 'bridi_pretest_emt_required_notice', 'bridi-setting', 'bridi-theme-section' );
    add_settings_field( 'bridi_pretest_exc_required_notice', __( 'Aviso de Pretest Ejercicio requerido:', 'bridi-theme' ), 'bridi_pretest_exc_required_notice', 'bridi-setting', 'bridi-theme-section' );
    add_settings_field( 'bridi_pretest_snt_required_notice', __( 'Aviso de Pretest Higene requerido:', 'bridi-theme' ), 'bridi_pretest_snt_required_notice', 'bridi-setting', 'bridi-theme-section' );
    
}
add_action( 'admin_init', 'bridi_settings_init' );

function bridi_settings_section_callback(  ) {
    echo __( 'Estas son las URL de las paginas que el tema usa para sus redirecciones', 'bridi-theme' );
}

function bridi_register_form_placement(){
    $options = get_option( 'bridi_settings' ); ?>
    <input type='url' name='bridi_settings[bridi_register_form_placement]' value='<?php echo $options["bridi_register_form_placement"]; ?>'>
    <p class="text-center">Shortcode: [new_participant_form]</p>
    <?php
}

function bridi_pretest_gen_placement(){
    $options = get_option( 'bridi_settings' ); ?>
    <input type='url' name='bridi_settings[bridi_pretest_gen_placement]' value='<?php echo $options["bridi_pretest_gen_placement"]; ?>'>
    <p class="text-center">Shortcode: [pre_gen_shortcode]</p>
    <?php
}

function bridi_pretest_slp_placement(){
    $options = get_option( 'bridi_settings' ); ?>
    <input type='url' name='bridi_settings[bridi_pretest_slp_placement]' value='<?php echo $options["bridi_pretest_slp_placement"]; ?>'>
    <p class="text-center">Shortcode: [pre_slp_shortcode]</p>
    <?php
}

function bridi_pretest_emt_placement(){
    $options = get_option( 'bridi_settings' ); ?>
    <input type='url' name='bridi_settings[bridi_pretest_emt_placement]' value='<?php echo $options["bridi_pretest_emt_placement"]; ?>'>
    <p class="text-center">Shortcode: [pre_emt_shortcode]</p>
    <?php
}

function bridi_pretest_exc_placement(){
    $options = get_option( 'bridi_settings' ); ?>
    <input type='url' name='bridi_settings[bridi_pretest_exc_placement]' value='<?php echo $options["bridi_pretest_exc_placement"]; ?>'>
    <p class="text-center">Shortcode: [pre_exc_shortcode]</p>
    <?php
}

function bridi_pretest_snt_placement(){
    $options = get_option( 'bridi_settings' ); ?>
    <input type='url' name='bridi_settings[bridi_pretest_snt_placement]' value='<?php echo $options["bridi_pretest_snt_placement"]; ?>'>
    <p class="text-center">Shortcode: [pre_snt_shortcode]</p>
    <?php
}

function bridi_required_login_notice(){
    $options = get_option( 'bridi_settings' ); ?>
    <input type='url' name='bridi_settings[bridi_required_login_notice]' value='<?php echo $options["bridi_required_login_notice"]; ?>'>
    <?php
}

function bridi_pretest_gen_required_notice(){
    $options = get_option( 'bridi_settings' ); ?>
    <input type='url' name='bridi_settings[bridi_pretest_gen_required_notice]' value='<?php echo $options["bridi_pretest_gen_required_notice"]; ?>'>
    <?php
}

function bridi_pretest_slp_required_notice(){
    $options = get_option( 'bridi_settings' ); ?>
    <input type='url' name='bridi_settings[bridi_pretest_slp_required_notice]' value='<?php echo $options["bridi_pretest_slp_required_notice"]; ?>'>
    <?php
}

function bridi_pretest_emt_required_notice(){
    $options = get_option( 'bridi_settings' ); ?>
    <input type='url' name='bridi_settings[bridi_pretest_emt_required_notice]' value='<?php echo $options["bridi_pretest_emt_required_notice"]; ?>'>
    <?php
}

function bridi_pretest_exc_required_notice(){
    $options = get_option( 'bridi_settings' ); ?>
    <input type='url' name='bridi_settings[bridi_pretest_exc_required_notice]' value='<?php echo $options["bridi_pretest_exc_required_notice"]; ?>'>
    <?php
}

function bridi_pretest_snt_required_notice(){
    $options = get_option( 'bridi_settings' ); ?>
    <input type='url' name='bridi_settings[bridi_pretest_snt_required_notice]' value='<?php echo $options["bridi_pretest_snt_required_notice"]; ?>'>
    <?php
}

function bridi_theme_function(){ ?>

    <form action='options.php' method='post'> <?php
        settings_fields( 'bridi-setting' );
        do_settings_sections( 'bridi-setting' );
        submit_button(); ?>
    </form> <?php
}