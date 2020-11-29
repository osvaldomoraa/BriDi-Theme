<?php 

function measurements_profile_fields( $user ) { ?>
   
    <h3><?php _e('Validacion de mediciones'); ?></h3>
    <table class="form-table">
        <tr>
            <th><label for="pretest_gen">Pretest general</label></th>
            <td>
            <input type="number" name="pretest_gen" id="pretest_gen" value="<?php echo esc_attr( get_the_author_meta( 'pretest_gen', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">El participante hizo el pretest general</span>
            </td>
        </tr>

        <tr>
            <th><label for="pretest_sue">Pretest sueño</label></th>
            <td>
            <input type="number" name="pretest_sue" id="pretest_sue" value="<?php echo esc_attr( get_the_author_meta( 'pretest_sue', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">El participante hizo el pretest de sueño</span>
            </td>
        </tr>
        <tr>
            <th><label for="postest_sue">Postest sueño</label></th>
            <td>
            <input type="number" name="postest_sue" id="postest_sue" value="<?php echo esc_attr( get_the_author_meta( 'postest_sue', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">El participante hizo el postest de sueño</span>
            </td>
        </tr>

        <tr>
            <th><label for="pretest_est">Pretest estres</label></th>
            <td>
            <input type="number" name="pretest_est" id="pretest_est" value="<?php echo esc_attr( get_the_author_meta( 'pretest_est', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">El participante hizo el pretest de estres</span>
            </td>
        </tr>
        <tr>
            <th><label for="postest_est">Postest estres</label></th>
            <td>
            <input type="number" name="postest_est" id="postest_est" value="<?php echo esc_attr( get_the_author_meta( 'postest_est', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">El participante hizo el postest de estres</span>
            </td>
        </tr>

        <tr>
            <th><label for="pretest_eje">Pretest ejercicio</label></th>
            <td>
            <input type="number" name="pretest_eje" id="pretest_eje" value="<?php echo esc_attr( get_the_author_meta( 'pretest_eje', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">El participante hizo el pretest de ejercicio</span>
            </td>
        </tr>
        <tr>
            <th><label for="postest_eje">Postest ejercicio</label></th>
            <td>
            <input type="number" name="postest_eje" id="postest_eje" value="<?php echo esc_attr( get_the_author_meta( 'postest_eje', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">El participante hizo el postest de ejercicio</span>
            </td>
        </tr>

        <tr>
            <th><label for="pretest_hig">Pretest higene</label></th>
            <td>
            <input type="number" name="pretest_hig" id="pretest_hig" value="<?php echo esc_attr( get_the_author_meta( 'pretest_hig', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">El participante hizo el pretest de higene</span>
            </td>
        </tr>
        <tr>
            <th><label for="postest_hig">Postest higene</label></th>
            <td>
            <input type="number" name="postest_hig" id="postest_hig" value="<?php echo esc_attr( get_the_author_meta( 'postest_hig', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">El participante hizo el postest de higene</span>
            </td>
        </tr>

        <tr>
            <th><label for="postest_gen">Postest general</label></th>
            <td>
            <input type="number" name="postest_gen" id="postest_gen" value="<?php echo esc_attr( get_the_author_meta( 'postest_gen', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">El participante hizo el postest general</span>
            </td>
        </tr>
    </table>
<?php

}

add_action( 'show_user_profile', 'measurements_profile_fields', 10 );
add_action( 'edit_user_profile', 'measurements_profile_fields', 10 );

function save_measurements_profile_fields( $user_id ) {

    if ( !current_user_can( 'edit_user', $user_id ) )
        return false;

    update_user_meta( $user_id, 'pretest_gen', $_POST['pretest_gen'] );
    update_user_meta( $user_id, 'postest_gen', $_POST['postest_gen'] );

    update_user_meta( $user_id, 'pretest_sue', $_POST['pretest_sue'] );
    update_user_meta( $user_id, 'postest_sue', $_POST['postest_sue'] );

    update_user_meta( $user_id, 'pretest_est', $_POST['pretest_est'] );
    update_user_meta( $user_id, 'postest_est', $_POST['postest_est'] );

    update_user_meta( $user_id, 'pretest_eje', $_POST['pretest_eje'] );
    update_user_meta( $user_id, 'postest_eje', $_POST['postest_eje'] );

    update_user_meta( $user_id, 'pretest_hig', $_POST['pretest_hig'] );
    update_user_meta( $user_id, 'postest_hig', $_POST['postest_hig'] );
}

add_action( 'personal_options_update', 'save_measurements_profile_fields' );
add_action( 'edit_user_profile_update', 'save_measurements_profile_fields' );