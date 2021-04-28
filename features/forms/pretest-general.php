<?php

function pre_gen_form(){
  if( !is_user_logged_in() ) return '<p>' . __( 'Para hacer este cuestionario debes <a href="' . get_site_url() . '/wp-login.php">iniciar sesion</a>', 'pregen' ) . '</p>';

  ob_start();

  do_action( 'pre_gen_alerts' ); ?>

  <div class="shortcode-form-wrapper">
        <form id="pre-gen-measurement-form" class="shortcode-form" action="" method="post">
            <div class="shortcode-form-section">
                <span class="shortcode-form-title">
                    Cédula Sociodemográfica  
                </span>
                <p class="shortcode-form-instructions">
                    Para brindarle apoyo como participante de este proyecto, necesitamos conocer un poco sobre las condiciones de su entorno, a fin de entender cómo impactan en su salud y bienestar. Por ello le pedimos que, a continuación, nos responda algunas preguntas de tipo demográfico que atañen a usted y a su familia. Sus respuestas serán manejadas conforme a los fines del Proyecto, es decir, como parte de las estadísticas de grupo. Le pedimos contestar cada pregunta con la verdad  y con detalle. Si no puede o no quiere responder alguna pregunta, puede dejarla en blanco. Si tiene alguna duda, puede contactarnos desde nuestras Redes Sociales.
                </p>

                <div class="form-group">
                  <label class="shortcode-form-label" for="pre-gen-item-1"><?php _e( '¿Qué relación tiene con la/el paciente?', 'pregen' ); ?></label>
                  <input name="pre-gen-item-1" id="pre-gen-item-1" type="text" class="shortcode-form-input form-control">
                </div>

                <div class="form-group">
                  <label for="pre-gen-item-2" class="shortcode-form-label">Usted se identifica como:</label>
                  <select class="form-control shortcode-form-input form-control" name="pre-gen-item-2" id="pre-gen-item-2">
                  <option selected="true" disabled="disabled">Selecciona</option> 
                    <option value="M">Mujer</option>
                    <option value="H">Hombre</option>
                    <option value="NB">No binario</option>
                    <option value="NR">Prefiero no decirlo</option>
                  </select>
                </div>

                <div class="form-group">
                  <label class="shortcode-form-label" for="pre-gen-item-3"><?php _e( 'Fecha de nacimiento:', 'pregen' ); ?></label>
                  <input name="pre-gen-item-3" id="pre-gen-item-3" type="date" class="shortcode-form-input form-control">
                </div>

                <div class="form-group">
                  <label class="shortcode-form-label" for="pre-gen-item-4"><?php _e( 'Estado civil:', 'pregen' ); ?></label>
                  <input name="pre-gen-item-4" id="pre-gen-item-4" type="text" class="shortcode-form-input form-control">
                </div>

                <div class="form-group">
                  <label class="shortcode-form-label" for="pre-gen-item-6"><?php _e( 'Ocupación:', 'pregen' ); ?></label>
                  <input name="pre-gen-item-6" id="pre-gen-item-6" type="text" class="shortcode-form-input form-control">
                </div>

                <div class="form-group">
                  <label class="shortcode-form-label" for="pre-gen-item-7"><?php _e( 'Municipio o Alcaldía de residencia:', 'pregen' ); ?></label>
                  <input name="pre-gen-item-7" id="pre-gen-item-7" type="text" class="shortcode-form-input form-control">
                </div>

                <div class="form-group">
                  <label for="pre-gen-item-8" class="shortcode-form-label">¿Padece alguna incapacidad o condición física especial?</label>
                  <select class="form-control shortcode-form-input form-control" name="pre-gen-item-8" id="pre-gen-item-8">
                  <option selected="true" disabled="disabled">Selecciona</option> 
                    <option value="si">Si</option>
                    <option value="no">No</option>
                  </select>
                </div>

                <div class="form-group">
                  <label class="shortcode-form-label" for="pre-gen-item-10"><?php _e( '¿Padece alguna enfermedad crónica?', 'pregen' ); ?></label>
                  <input name="pre-gen-item-10" id="pre-gen-item-10" type="text" class="shortcode-form-input form-control">
                </div>

                <div class="form-group">
                  <label class="shortcode-form-label" for="pre-gen-item-11"><?php _e( '¿Cuál es?', 'pregen' ); ?></label>
                  <input name="pre-gen-item-11" id="pre-gen-item-11" type="text" class="shortcode-form-input form-control">
                </div>

            </div>
            <?php wp_nonce_field( 'post_nonce_action', 'post_nonce_field' ); ?>
            <input type="submit" class="shortcode-form-button btn btn-primary btn-lg btn-block" value="<?php _e( 'Terminar', 'pregen' ); ?>">
        </form>
  </div>  
  <?php
  $output = ob_get_contents();
  ob_end_clean();
  return $output;
}

add_shortcode( 'pre_gen_shortcode', 'pre_gen_form');

function pre_gen_private_measurement(){
  if( isset( $_POST['post_nonce_field'] )
      && wp_verify_nonce( $_POST['post_nonce_field'], 'post_nonce_action')){

      global $current_user;
      $userId = $current_user->ID;

      $postTitle = "Pretest general de #" . $userId;

      $metaItem1 = $_POST['pre-gen-item-1'];
      $metaItem2 = $_POST['pre-gen-item-2'];
      $metaItem3 = $_POST['pre-gen-item-3'];
      $metaItem4 = $_POST['pre-gen-item-4'];
      $metaItem5 = $_POST['pre-gen-item-5'];
      $metaItem6 = $_POST['pre-gen-item-6'];
      $metaItem7 = $_POST['pre-gen-item-7'];
      $metaItem8 = $_POST['pre-gen-item-8'];
      $metaItem9 = $_POST['pre-gen-item-9'];
      $metaItem10 = $_POST['pre-gen-item-10'];
      $metaItem11 = $_POST['pre-gen-item-11'];
      $metaItem12 = $_POST['pre-gen-item-12'];
      $metaItem13 = $_POST['pre-gen-item-13'];
      $metaItem14 = $_POST['pre-gen-item-14'];
      $metaItem15 = $_POST['pre-gen-item-15'];
      $metaItem16 = $_POST['pre-gen-item-16'];
      $metaItem17 = $_POST['pre-gen-item-17'];
      $metaItem18 = $_POST['pre-gen-item-18'];
      $metaItem19 = $_POST['pre-gen-item-19'];
      $metaItem20 = $_POST['pre-gen-item-20'];
      $metaItem21 = $_POST['pre-gen-item-21'];
      $metaItem22 = $_POST['pre-gen-item-22'];
      $metaItem23 = $_POST['pre-gen-item-23'];
      $metaItem24 = $_POST['pre-gen-item-24'];
      $metaItem25 = $_POST['pre-gen-item-25'];
      $metaItem26 = $_POST['pre-gen-item-26'];
      $metaItem27 = $_POST['pre-gen-item-27'];
      $metaItem28 = $_POST['pre-gen-item-28'];
      $metaItem29 = $_POST['pre-gen-item-29'];
      $metaItem30 = $_POST['pre-gen-item-30'];

        $postId = wp_insert_post( array(
          'post_title' => $postTitle,
          'post_status' => 'private',
          'post_author' => $userId,
          'post_type' => 'medicion'
        ) );

        add_post_meta($postId, 'med_mb_item_1', $metaItem1, true);
        add_post_meta($postId, 'med_mb_item_2', $metaItem2, true);
        add_post_meta($postId, 'med_mb_item_3', $metaItem3, true);
        add_post_meta($postId, 'med_mb_item_4', $metaItem4, true);
        add_post_meta($postId, 'med_mb_item_5', $metaItem5, true);
        add_post_meta($postId, 'med_mb_item_6', $metaItem6, true);
        add_post_meta($postId, 'med_mb_item_7', $metaItem7, true);
        add_post_meta($postId, 'med_mb_item_8', $metaItem8, true);
        add_post_meta($postId, 'med_mb_item_9', $metaItem9, true);
        add_post_meta($postId, 'med_mb_item_10', $metaItem10, true);
        add_post_meta($postId, 'med_mb_item_11', $metaItem11, true);
        add_post_meta($postId, 'med_mb_item_12', $metaItem12, true);
        add_post_meta($postId, 'med_mb_item_13', $metaItem13, true);
        add_post_meta($postId, 'med_mb_item_14', $metaItem14, true);
        add_post_meta($postId, 'med_mb_item_15', $metaItem15, true);
        add_post_meta($postId, 'med_mb_item_16', $metaItem16, true);
        add_post_meta($postId, 'med_mb_item_17', $metaItem17, true);
        add_post_meta($postId, 'med_mb_item_18', $metaItem18, true);
        add_post_meta($postId, 'med_mb_item_19', $metaItem19, true);
        add_post_meta($postId, 'med_mb_item_20', $metaItem20, true);
        add_post_meta($postId, 'med_mb_item_21', $metaItem21, true);
        add_post_meta($postId, 'med_mb_item_22', $metaItem22, true);
        add_post_meta($postId, 'med_mb_item_23', $metaItem23, true);
        add_post_meta($postId, 'med_mb_item_24', $metaItem24, true);
        add_post_meta($postId, 'med_mb_item_25', $metaItem25, true);
        add_post_meta($postId, 'med_mb_item_26', $metaItem26, true);
        add_post_meta($postId, 'med_mb_item_27', $metaItem27, true);
        add_post_meta($postId, 'med_mb_item_28', $metaItem28, true);
        add_post_meta($postId, 'med_mb_item_29', $metaItem29, true);
        add_post_meta($postId, 'med_mb_item_30', $metaItem30, true);
    
        add_action( 'pre_gen_alerts', 'pre_gen_form_success' );
  }

  update_user_meta( $userId, 'pretest_gen', 1 );

}
add_action( 'init', 'pre_gen_private_measurement');

function pre_gen_form_success(){
  echo '<p class="scv-alert success">' . __( 'Se ha publicado correctamente', 'pregen' ) . '</p>';
}