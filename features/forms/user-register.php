<?php 

function registration_form( $username, $password, $email, $first_name, $last_name, $nickname ) {
    echo '
    <style>
	div {
		margin-bottom:2px;
	}
	
	input{
		margin-bottom:4px;
	}
	</style>
	';

    echo '
    <form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
	<div>
	<label for="username">Nombre de usuario <strong>*</strong></label>
	<input type="text" name="username" value="' . (isset($_POST['username']) ? $username : null) . '">
	</div>
	
	<div>
	<label for="password">Contraseña <strong>*</strong></label>
	<input type="password" name="password" value="' . (isset($_POST['password']) ? $password : null) . '">
	</div>
	
	<div>
	<label for="email">Correo electronico <strong>*</strong></label>
	<input type="text" name="email" value="' . (isset($_POST['email']) ? $email : null) . '">
	</div>
	
	<div>
	<label for="firstname">Nombre</label>
	<input type="text" name="fname" value="' . (isset($_POST['fname']) ? $first_name : null) . '">
	</div>
	
	<div>
	<label for="website">Apellidos</label>
	<input type="text" name="lname" value="' . (isset($_POST['lname']) ? $last_name : null) . '">
	</div>
	
	<div>
	<label for="nickname">Alias</label>
	<input type="text" name="nickname" value="' . (isset($_POST['nickname']) ? $nickname : null) . '">
	</div>
	
	<input type="submit" name="submit" value="Registrarme"/>
	</form>
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
            echo '<div>';
            echo '<strong>ERROR</strong>:';
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

add_shortcode('new_subject_form', 'custom_registration_shortcode');

function custom_registration_shortcode() {
    ob_start();
    custom_registration_function();
    return ob_get_clean();
}