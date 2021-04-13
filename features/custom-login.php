<?php

function custom_login_styles() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/logo.png);
		height:95px;
		width:320px;
		background-size: contain;
        background-position: center;
		background-repeat: no-repeat;
        }
        #login .button-primary {
        background: #57A519;
        border-color: #57A519;
        }
        
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'custom_login_styles' );

function custom_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'custom_login_logo_url' );

function custom_login_logo_url_title() {
    return 'Bienestar Psicosocial';
}
add_filter( 'login_headertitle', 'custom_login_logo_url_title' );