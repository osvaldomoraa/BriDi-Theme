<?php 

function registration_form( $username, $password, $email, $first_name, $last_name, $nickname ) {

    echo '
    <div class="shortcode-form-wrapper">
        <form class="shortcode-form" action="' . $_SERVER['REQUEST_URI'] . '" method="post">
            <div class="form-group">
                <label for="username" class="shortcode-form-label">Nombre de usuario <span class="shortcode-form-required-field">*</span></label>
                <input type="text" class="shortcode-form-input form-control" name="username" value="' . (isset($_POST['username']) ? $username : null) . '" required>
            </div>        
            <div class="form-group">
                <label for="password" class="shortcode-form-label">Contraseña <span class="shortcode-form-required-field">*</span></label>
                <input type="password" class="shortcode-form-input form-control" name="password" value="' . (isset($_POST['password']) ? $password : null) . '" required>
            </div>        
            <div class="form-group">
                <label for="email" class="shortcode-form-label">Correo electronico <span class="shortcode-form-required-field">*</span></label>
                <input type="text" class="shortcode-form-input form-control" name="email" value="' . (isset($_POST['email']) ? $email : null) . '" required>
            </div>        
            <div class="form-group">
                <label for="firstname" class="shortcode-form-label">Nombre</label>
                <input type="text" class="shortcode-form-input form-control" name="fname" value="' . (isset($_POST['fname']) ? $first_name : null) . '">
            </div>        
            <div class="form-group">
                <label for="website" class="shortcode-form-label">Apellidos</label>
                <input type="text" class="shortcode-form-input form-control" name="lname" value="' . (isset($_POST['lname']) ? $last_name : null) . '">
            </div>        
            <div class="form-group">
                <label for="nickname" class="shortcode-form-label">Alias</label>
                <input type="text" class="shortcode-form-input form-control" name="nickname" value="' . (isset($_POST['nickname']) ? $nickname : null) . '">
            </div>        
            <input type="submit" class="shortcode-form-button btn btn-primary btn-lg btn-block" name="submit" value="Registrarme"/>
        </form>    
    </div>
	';
}

function registration_validation( $username, $password, $email, $first_name, $last_name, $nickname )  {
    global $reg_errors;
    $reg_errors = new WP_Error;

    if ( empty( $username ) || empty( $password ) || empty( $email ) ) {
        $reg_errors->add('field', 'Te falto llenar uno de los campos requeridos');
    }

    if ( strlen( $username ) < 4 ) {
        $reg_errors->add('username_length', 'El nombre de usuario es muy corto, debe tener al menos 4 caracteres');
    }

    if ( username_exists( $username ) )
        $reg_errors->add('user_name', 'Lo sentimos, pero alguien mas ya tiene ese usuario');

    if ( !validate_username( $username ) ) {
        $reg_errors->add('username_invalid', 'Parece que ese usuario no es valido');
    }

    if ( strlen( $password ) < 5 ) {
        $reg_errors->add('password', 'La contraseña debe tener mas de 5 caracteres');
    }

    if ( !is_email( $email ) ) {
        $reg_errors->add('email_invalid', 'Parece que ese correo no es valido');
    }

    if ( email_exists( $email ) ) {
        $reg_errors->add('email', 'Lo sentimos, pero alguien mas ya tiene ese correo');
    }
    
    if ( is_wp_error( $reg_errors ) ) {

        foreach ( $reg_errors->get_error_messages() as $error ) {
            echo '<div class="shortcode-form-errors alert alert-warning" role="alert">';
            echo '<span><i class="bi bi-exclamation-triangle-fill"></i></span> ';
            echo $error . '<br/>';
            echo '</div>';
        }
    }
}

function complete_registration() {
    global $reg_errors, $username, $password, $email, $first_name, $last_name, $nickname;
    if ( count($reg_errors->get_error_messages()) < 1 ) {
        $userdata = array(
        'user_login'	=> 	$username,
        'user_email' 	=> 	$email,
        'user_pass' 	=> 	$password,
        'first_name' 	=> 	$first_name,
        'last_name' 	=> 	$last_name,
        'nickname' 		=> 	$nickname,
		);
        $user = wp_insert_user( $userdata );
        echo 'Listo! Ya te registramos. Puedes ingresar ahora haciendo <a href="' . get_site_url() . '/wp-login.php">click aqui</a>.';   
	}
}

function custom_registration_function() {
    if (isset($_POST['submit'])) {
        registration_validation(
        $_POST['username'],
        $_POST['password'],
        $_POST['email'],
        $_POST['fname'],
        $_POST['lname'],
        $_POST['nickname'],
		);
		
        global $username, $password, $email, $first_name, $last_name, $nickname;
        $username	= 	sanitize_user($_POST['username']);
        $password 	= 	esc_attr($_POST['password']);
        $email 		= 	sanitize_email($_POST['email']);
        $first_name = 	sanitize_text_field($_POST['fname']);
        $last_name 	= 	sanitize_text_field($_POST['lname']);
        $nickname 	= 	sanitize_text_field($_POST['nickname']);

        complete_registration(
        $username,
        $password,
        $email,
        $first_name,
        $last_name,
        $nickname,
		);
    }

    registration_form(
    	$username,
        $password,
        $email,
        $first_name,
        $last_name,
        $nickname,
		);
}

add_shortcode('new_participant_form', 'custom_registration_shortcode');

function custom_registration_shortcode() {
    ob_start();
    custom_registration_function();
    return ob_get_clean();
}