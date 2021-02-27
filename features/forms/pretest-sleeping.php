<?php

function pre_slp_form(){
  if( !is_user_logged_in() ) return '<p>' . __( 'Para tomar este cuestionario debes <a href="' . get_site_url() . '/wp-login.php">iniciar sesion</a>', 'preslp' ) . '</p>';

  ob_start();

  do_action( 'pre_slp_alerts' ); ?>
  <form id="pre-slp-measurement-form" action="" method="post">

    <label for="pre-slp-item-1"><?php _e( 'Item 1', 'preslp' ); ?></label>
    <input name="pre-slp-item-1" id="pre-slp-item-1" type="text">

    <label for="pre-slp-item-2"><?php _e( 'Item 2', 'preslp' ); ?></label>
    <input name="pre-slp-item-2" id="pre-slp-item-2" type="text">

    <label for="pre-slp-item-3"><?php _e( 'Item 3', 'preslp' ); ?></label>
    <input name="pre-slp-item-3" id="pre-slp-item-3" type="text">

    <label for="pre-slp-item-4"><?php _e( 'Item 4', 'preslp' ); ?></label>
    <input name="pre-slp-item-4" id="pre-slp-item-4" type="text">

    <label for="pre-slp-item-5"><?php _e( 'Item 5', 'preslp' ); ?></label>
    <input name="pre-slp-item-5" id="pre-slp-item-5" type="text">

    <label for="pre-slp-item-6"><?php _e( 'Item 6', 'preslp' ); ?></label>
    <input name="pre-slp-item-6" id="pre-slp-item-6" type="text">

    <label for="pre-slp-item-7"><?php _e( 'Item 7', 'preslp' ); ?></label>
    <input name="pre-slp-item-7" id="pre-slp-item-7" type="text">

    <label for="pre-slp-item-8"><?php _e( 'Item 8', 'preslp' ); ?></label>
    <input name="pre-slp-item-8" id="pre-slp-item-8" type="text">

    <label for="pre-slp-item-9"><?php _e( 'Item 9', 'preslp' ); ?></label>
    <input name="pre-slp-item-9" id="pre-slp-item-9" type="text">

    <label for="pre-slp-item-10"><?php _e( 'Item 10', 'preslp' ); ?></label>
    <input name="pre-slp-item-10" id="pre-slp-item-10" type="text">

    <label for="pre-slp-item-11"><?php _e( 'Item 11', 'preslp' ); ?></label>
    <input name="pre-slp-item-11" id="pre-slp-item-11" type="text">

    <label for="pre-slp-item-12"><?php _e( 'Item 12', 'preslp' ); ?></label>
    <input name="pre-slp-item-12" id="pre-slp-item-12" type="text">

    <label for="pre-slp-item-13"><?php _e( 'Item 13', 'preslp' ); ?></label>
    <input name="pre-slp-item-13" id="pre-slp-item-13" type="text">

    <label for="pre-slp-item-14"><?php _e( 'Item 14', 'preslp' ); ?></label>
    <input name="pre-slp-item-14" id="pre-slp-item-14" type="text">

    <label for="pre-slp-item-15"><?php _e( 'Item 15', 'preslp' ); ?></label>
    <input name="pre-slp-item-15" id="pre-slp-item-15" type="text">

    <label for="pre-slp-item-16"><?php _e( 'Item 16', 'preslp' ); ?></label>
    <input name="pre-slp-item-16" id="pre-slp-item-16" type="text">

    <label for="pre-slp-item-17"><?php _e( 'Item 17', 'preslp' ); ?></label>
    <input name="pre-slp-item-17" id="pre-slp-item-17" type="text">

    <label for="pre-slp-item-18"><?php _e( 'Item 18', 'preslp' ); ?></label>
    <input name="pre-slp-item-18" id="pre-slp-item-18" type="text">

    <label for="pre-slp-item-19"><?php _e( 'Item 19', 'preslp' ); ?></label>
    <input name="pre-slp-item-19" id="pre-slp-item-19" type="text">

    <label for="pre-slp-item-20"><?php _e( 'Item 20', 'preslp' ); ?></label>
    <input name="pre-slp-item-20" id="pre-slp-item-20" type="text">

    <label for="pre-slp-item-21"><?php _e( 'Item 21', 'preslp' ); ?></label>
    <input name="pre-slp-item-21" id="pre-slp-item-21" type="text">

    <label for="pre-slp-item-22"><?php _e( 'Item 22', 'preslp' ); ?></label>
    <input name="pre-slp-item-22" id="pre-slp-item-22" type="text">

    <label for="pre-slp-item-23"><?php _e( 'Item 23', 'preslp' ); ?></label>
    <input name="pre-slp-item-23" id="pre-slp-item-23" type="text">

    <label for="pre-slp-item-24"><?php _e( 'Item 24', 'preslp' ); ?></label>
    <input name="pre-slp-item-24" id="pre-slp-item-24" type="text">

    <label for="pre-slp-item-25"><?php _e( 'Item 25', 'preslp' ); ?></label>
    <input name="pre-slp-item-25" id="pre-slp-item-25" type="text">

    <label for="pre-slp-item-26"><?php _e( 'Item 26', 'preslp' ); ?></label>
    <input name="pre-slp-item-26" id="pre-slp-item-26" type="text">

    <label for="pre-slp-item-27"><?php _e( 'Item 27', 'preslp' ); ?></label>
    <input name="pre-slp-item-27" id="pre-slp-item-27" type="text">

    <label for="pre-slp-item-28"><?php _e( 'Item 28', 'preslp' ); ?></label>
    <input name="pre-slp-item-28" id="pre-slp-item-28" type="text">

    <label for="pre-slp-item-29"><?php _e( 'Item 29', 'preslp' ); ?></label>
    <input name="pre-slp-item-29" id="pre-slp-item-29" type="text">

    <label for="pre-slp-item-30"><?php _e( 'Item 30', 'preslp' ); ?></label>
    <input name="pre-slp-item-30" id="pre-slp-item-30" type="text"> 

    <?php wp_nonce_field( 'post_nonce_action', 'post_nonce_field' ); ?>

    <input type="submit" value="<?php _e( 'Guardar', 'preslp' ); ?>">

  </form>
  <?php
  $output = ob_get_contents();
  ob_end_clean();
  return $output;
}

add_shortcode( 'pre_slp_shortcode', 'pre_slp_form');

function pre_slp_private_measurement(){
  if( isset( $_POST['post_nonce_field'] )
      && wp_verify_nonce( $_POST['post_nonce_field'], 'post_nonce_action')){

      global $current_user;
      $userId = $current_user->ID;

      $postTitle = "Pretest sueño de #" . $userId;

      $metaItem1 = $_POST['pre-slp-item-1'];
      $metaItem2 = $_POST['pre-slp-item-2'];
      $metaItem3 = $_POST['pre-slp-item-3'];
      $metaItem4 = $_POST['pre-slp-item-4'];
      $metaItem5 = $_POST['pre-slp-item-5'];
      $metaItem6 = $_POST['pre-slp-item-6'];
      $metaItem7 = $_POST['pre-slp-item-7'];
      $metaItem8 = $_POST['pre-slp-item-8'];
      $metaItem9 = $_POST['pre-slp-item-9'];
      $metaItem10 = $_POST['pre-slp-item-10'];
      $metaItem11 = $_POST['pre-slp-item-11'];
      $metaItem12 = $_POST['pre-slp-item-12'];
      $metaItem13 = $_POST['pre-slp-item-13'];
      $metaItem14 = $_POST['pre-slp-item-14'];
      $metaItem15 = $_POST['pre-slp-item-15'];
      $metaItem16 = $_POST['pre-slp-item-16'];
      $metaItem17 = $_POST['pre-slp-item-17'];
      $metaItem18 = $_POST['pre-slp-item-18'];
      $metaItem19 = $_POST['pre-slp-item-19'];
      $metaItem20 = $_POST['pre-slp-item-20'];
      $metaItem21 = $_POST['pre-slp-item-21'];
      $metaItem22 = $_POST['pre-slp-item-22'];
      $metaItem23 = $_POST['pre-slp-item-23'];
      $metaItem24 = $_POST['pre-slp-item-24'];
      $metaItem25 = $_POST['pre-slp-item-25'];
      $metaItem26 = $_POST['pre-slp-item-26'];
      $metaItem27 = $_POST['pre-slp-item-27'];
      $metaItem28 = $_POST['pre-slp-item-28'];
      $metaItem29 = $_POST['pre-slp-item-29'];
      $metaItem30 = $_POST['pre-slp-item-30'];

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
    
        add_action( 'pre_slp_alerts', 'pre_slp_form_success' );
  }

  update_user_meta( $userId, 'pretest_sue', 1 );

}
add_action( 'init', 'pre_slp_private_measurement');

function pre_slp_form_success(){
  echo '<p class="scv-alert success">' . __( 'Se ha publicado correctamente', 'preslp' ) . '</p>';
}