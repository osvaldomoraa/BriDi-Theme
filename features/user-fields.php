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
            <th><label for="pretest_slp">Pretest sueño</label></th>
            <td>
            <input type="number" name="pretest_slp" id="pretest_slp" value="<?php echo esc_attr( get_the_author_meta( 'pretest_slp', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">El participante hizo el pretest de sueño</span>
            </td>
        </tr>
        <tr>
            <th><label for="postest_slp">Postest sueño</label></th>
            <td>
            <input type="number" name="postest_slp" id="postest_slp" value="<?php echo esc_attr( get_the_author_meta( 'postest_slp', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">El participante hizo el postest de sueño</span>
            </td>
        </tr>

        <tr>
            <th><label for="pretest_sts">Pretest estres</label></th>
            <td>
            <input type="number" name="pretest_sts" id="pretest_sts" value="<?php echo esc_attr( get_the_author_meta( 'pretest_sts', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">El participante hizo el pretest de Estres</span>
            </td>
        </tr>
        <tr>
            <th><label for="postest_sts">Postest estres</label></th>
            <td>
            <input type="number" name="postest_sts" id="postest_sts" value="<?php echo esc_attr( get_the_author_meta( 'postest_sts', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">El participante hizo el postest de Estres</span>
            </td>
        </tr>

        <tr>
            <th><label for="pretest_sts">Pretest emociones</label></th>
            <td>
            <input type="number" name="pretest_emt" id="pretest_emt" value="<?php echo esc_attr( get_the_author_meta( 'pretest_emt', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">El participante hizo el pretest de Estres</span>
            </td>
        </tr>
        <tr>
            <th><label for="postest_sts">Postest emociones</label></th>
            <td>
            <input type="number" name="postest_emt" id="postest_emt" value="<?php echo esc_attr( get_the_author_meta( 'postest_emt', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">El participante hizo el postest de Estres</span>
            </td>
        </tr>

        <tr>
            <th><label for="pretest_exc">Pretest ejercicio</label></th>
            <td>
            <input type="number" name="pretest_exc" id="pretest_exc" value="<?php echo esc_attr( get_the_author_meta( 'pretest_exc', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">El participante hizo el pretest de ejercicio</span>
            </td>
        </tr>
        <tr>
            <th><label for="postest_exc">Postest ejercicio</label></th>
            <td>
            <input type="number" name="postest_exc" id="postest_exc" value="<?php echo esc_attr( get_the_author_meta( 'postest_exc', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">El participante hizo el postest de ejercicio</span>
            </td>
        </tr>

        <tr>
            <th><label for="pretest_snt">Pretest higene</label></th>
            <td>
            <input type="number" name="pretest_snt" id="pretest_snt" value="<?php echo esc_attr( get_the_author_meta( 'pretest_snt', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">El participante hizo el pretest de higene</span>
            </td>
        </tr>
        <tr>
            <th><label for="postest_snt">Postest higene</label></th>
            <td>
            <input type="number" name="postest_snt" id="postest_snt" value="<?php echo esc_attr( get_the_author_meta( 'postest_snt', $user->ID ) ); ?>" class="regular-text" /><br />
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

    update_user_meta( $user_id, 'pretest_slp', $_POST['pretest_slp'] );
    update_user_meta( $user_id, 'postest_slp', $_POST['postest_slp'] );

    update_user_meta( $user_id, 'pretest_sts', $_POST['pretest_sts'] );
    update_user_meta( $user_id, 'postest_sts', $_POST['postest_sts'] );

    update_user_meta( $user_id, 'pretest_emt', $_POST['pretest_emt'] );
    update_user_meta( $user_id, 'postest_emt', $_POST['postest_emt'] );

    update_user_meta( $user_id, 'pretest_exc', $_POST['pretest_exc'] );
    update_user_meta( $user_id, 'postest_exc', $_POST['postest_exc'] );

    update_user_meta( $user_id, 'pretest_snt', $_POST['pretest_snt'] );
    update_user_meta( $user_id, 'postest_snt', $_POST['postest_snt'] );
}

add_action( 'personal_options_update', 'save_measurements_profile_fields' );
add_action( 'edit_user_profile_update', 'save_measurements_profile_fields' );